<template>
    <nav id="nav" class="pull-right">
        <ul>
            <!--UNLOGGED-->
            <li class="pull-left;" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                <router-link  :to="{ name : route.path }" :key="key">
                    {{route.name}}
                </router-link>
            </li>
            <!--LOGGED USER-->
            <li class="pull-left;" v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
                <router-link  :to="{ name : route.path }" :key="key">
                    {{route.name}}
                </router-link>
            </li>
        </ul>
    </nav>
</template>
<script>
  export default {
    data() {
      return {
        routes: {
          // UNLOGGED
          unlogged: [
            {
              name: 'Register',
              path: 'register'
            },
            {
              name: 'Login',
              path: 'login'
            }
          ],
          // LOGGED USER
          user: [
            {
              name: 'Dashboard',
              path: 'dashboard'
            }
          ],
        }
      }
    },
    mounted() {
      //
    }
  }
</script>