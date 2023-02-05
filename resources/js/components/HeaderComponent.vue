<template>
      <div id="nav">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Logo Here</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" @click="visible=!visible" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="navbar-collapse" :class="visible?'collapse':''"  id="navbarSupportedContent">
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
                visible: true,
                links: [
                    {
                        title: "Home",
                        href: "/"
                    },
                    {
                        title: "Blog",
                        href: "/foo"
                    },
                    {
                        title: "Create post",
                        href: "/create"
                    }
                ]
            }
        },
        methods: {
            close() {}
        },
        mounted() {
            console.log('Component Test 1255')
        }
    }
</script>

