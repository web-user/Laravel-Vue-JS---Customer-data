<?php

namespace App\Http\Controllers\Api\V1;

// use App\Http\Requests\StoreCustomerRequest;
// use App\Http\Requests\UpdateCustomerRequest;

use Illuminate\Http\Request;


use App\Models\Customer;

use App\Http\Controllers\Controller;

use App\Http\Resources\V1\CustomerResource;
use App\Http\Resources\V1\CustomerCollection;
use App\Services\V1\CustomerQuery;

use Validator;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $filter = new CustomerQuery();
        $queryItems = $filter->transform($request); // ['column', 'operator', 'value']


        Customer::where($queryItems);

        if (count($queryItems) == 0){
            return new CustomerCollection(Customer::paginate());
        } else { 
            return new CustomerCollection(Customer::where($queryItems)->paginate());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                "name" => ["required"],
                "email" => ["required", "email"],
                "phoneNumbers" => ["required", "array"], // "array:number,type", // number, type
                "phoneNumbers.*"  => ["required", "min:2"],
                "address" => ["required"],
                "city" => ["required"],
                "state" => ["required"],
                "postal_code" => ["required"]
            ]
        );

        if ($validator->fails()){
            return [
                "status" => false,
                "errors" => $validator->messages()
            ];
        }

        $customer = Customer::create([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone_numbers" => $request->phoneNumbers,
            "city" => $request-x>city,
            "state" => $request->state,
            "postal_code" => $request->postal_code,
        ]);



        return [
            "status" => true,
            "post" => $customer
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
