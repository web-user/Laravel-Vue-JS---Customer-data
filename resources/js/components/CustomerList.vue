<template>


  <div class="container search-bar-customers">
      <div class="row">    
          <div class="col-xs-8 col-xs-offset-2">
          <div class="input-group">
                  <div class="input-group-btn search-panel">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#contains">Contains</a></li>
                        <li><a href="#its_equal">It's equal</a></li>
                        <li><a href="#greather_than">Greather than ></a></li>
                        <li><a href="#less_than">Less than </a></li>
                        <li class="divider"></li>
                        <li><a href="#all">Anything</a></li>
                      </ul>
                  </div>
                  <input type="hidden" name="search_param" value="all" id="search_param">         
                  <input type="text" class="form-control" name="x" placeholder="Search term...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
              </div>
          </div>
    </div>
  </div>


    <div class="row mb-2">
        <Customer v-for="customer in customres" :customerData="customer" />
    </div>
</template>

<script>
  import Customer from './Customer.vue';
  import axios from 'axios'
  export default {
      name: "CustomerList",
      components: {
        Customer
      },
      data() {
          return {
            customres: [],
            list: {
              title: "New data",
              body: "Post 23"
            }
          }
      },
      methods: {
        // this.customres = []

        // const loadCustomers = loadCustomers

        loadCustomers() {
            axios.get('api/v1/customers').then(res => {
              console.log(res.data.data)
              this.customres = res.data.data;
            });
        }

      },
      mounted() {
        this.loadCustomers();
          console.log('Component')
      }
  }
</script>

