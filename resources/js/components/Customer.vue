<template>

<div class="col-md-6" >
    <section class="" style="background-color: #f4f5f7;">
        <div class="">
            <div class="">
            <div class="">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white block-left-data">
                    
                    <h5>{{ customerData.name }}</h5>
                    <p>Web Designer</p>
                    <router-link :to="'/customer/' + customerData.id" class="btn btn-sm btn-outline-secondary">View</router-link>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4">
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">{{ customerData.email }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <p class="text-muted">123 456 789</p>
                        </div>
                        </div>
                        <h6>Projects</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Recent</h6>
                            <p class="text-muted">Lorem ipsum</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Most Viewed</h6>
                            <p class="text-muted">Dolor sit amet</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
  export default {
      name: "Customer",
      props: {
        customerData: {
            type: Object,
        }
      },
      data() {
          return {
              
          }
      },
      methods: {},
    //   setup(props) {
    // // setup() receives props as the first argument.
    //     console.log(props.listCustomers)
    //   },
      mounted() {
          console.log('Component')
          console.log(this.customerData)
          console.log("uuuuuuu==========")
      }
  }
</script>

