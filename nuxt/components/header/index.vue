<template>
  <header class="header">
    <a 
      id="btn-menu" 
      @click="show=!show"><font-awesome-icon icon="bars"/></a>
    <a 
      id="logo" 
      href="/">TechBank</a>
    <div class="user-menu">
      <b-dropdown 
        variant="success" 
        right 
        size="sm">
        <template slot="button-content">
          <font-awesome-icon icon="user"/>
        </template>
        <b-dropdown-item href="#">{{ this.$auth.user.name }}</b-dropdown-item>
        <b-dropdown-item @click="logout">ログアウト</b-dropdown-item>
      </b-dropdown>
    </div>
  </header>
</template>

<script>
export default {
  components: {},
  data() {
    return {}
  },
  methods: {
    logout() {
      this.$auth.logout()
      this.$router.push({
        path: '/login'
      })
    }
  }
}
</script>

<style scoped>
.header {
  height: 50px;
  display: flex;
  align-items: center;
  /* background:#3B8070; */
  background: indigo;
  color: white;
}
#btn-menu {
  display: block;
  width: 50px;
  background: rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
#btn-menu:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
#logo {
  font-size: 1.5rem;
  color: white;
  text-decoration: none;
  margin-left: 10px;
}

.user-menu {
  margin-left: auto;
  margin-right: 10px;
  color: white;
}
</style>
