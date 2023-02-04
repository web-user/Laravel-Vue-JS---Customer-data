<template>
      <div id="nav">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Logo Here</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav mr-auto">

                  <div class="" v-for="link in links">
                    <router-link :to="link.href" class="nav-link">{{ link.title }}</router-link>
                  </div>
              </div>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </div>
      </nav>
       </div>
</template>

<script>
    export default {
        name: "Header",
        data() {
            return {
                links: [
                    {
                        title: "Home",
                        href: "/"
                    },
                    {
                        title: "Blog",
                        href: "/blog"
                    },
                    {
                        title: "Create post",
                        href: "/create"
                    }
                ]
            }
        },
        mounted() {
            console.log('Component Test 1255')
        }
    }
</script>
<style lang="scss">
    @import '/resources/sass/app.scss';
</style>
