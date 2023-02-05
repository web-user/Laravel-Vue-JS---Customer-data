## Local run 



```sh

$ sudo chown -R $USER:$USER ~/Laravel-Vue-JS-Customer-data
$ docker-compose build --no-cache
$ docker-compose up 
$ docker-compose exec app php artisan migrate 

$ npm install && npm run dev

```

## Commands for project


```sh
$ docker-compose exec app composer require laravel/ui
$ docker-compose exec app php artisan route:list
$ docker-compose exec app php artisan key:generate
$ docker-compose exec app php artisan config:cache
$ docker-compose exec app composer create-project laravel/laravel example-app
$ docker-compose exec app php artisan make:controller <Name>
$ docker-compose exec app php artisan make:model <Name>
$ docker-compose exec app php artisan make:controller Api/V1/PostsController --resource

$ php artisan make:migration add_phonenumber_to_customers_table --table=customers

$ mysql -u root -p 'password for root from .env'
$ GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';
$ docker-compose exec app php artisan make:test UserTest
$ docker-compose exec app php artisan make:test UserTest --unit
$ docker-compose exec app php artisan test
$ docker-compose exec app php artisan migrate:fresh --seed
$ docker-compose exec app php artisan make:resource V1/InvoiceResource

$ docker-compose exec app php artisan ui vue --auth


$ http://localhost/api/v1/customers?postalCode[gt]=30000&type[eq]=I // filter

```