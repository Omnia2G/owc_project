<template>
  <header>
    <nav>
      <h1>
        <router-link to="/">Domov</router-link>
      </h1>

      <div class="dropdown">
        <h1 >
          <!-- <router-link to="topics">Topics</router-link> -->
          Témy
        </h1>
        <div class="dropdown-content">
          <router-link to="/vlc">Viditeľná sveteľna komunikácia</router-link>
          <router-link to="/occ">Optická kamerová komunikácia</router-link>
          <router-link to="/irc">Infračervená svetelná komunikácia</router-link>
          <router-link to="/fso">Optická komunikácia vo voľnom priestore</router-link>
          <router-link to="/uvc">Ultraviolet Communication</router-link>
          <router-link to="/lifi">LI-FI</router-link>
        </div>
      </div>

      <h1>
        <router-link to="/about">O nás</router-link>
      </h1>
      <h1 v-if="activeRole === 'teacher' || activeRole === 'admin'">
        <router-link to="/createtest">Nový test</router-link>
      </h1>
      <h1 v-if="activeRole === 'admin'">
        <router-link to="/adminpanel">Admin Panel</router-link>
      </h1>
      <ul>
        <li v-if="!isLoggedIn">
          <router-link to="/login">Login</router-link>
        </li>
        <li v-if="!isLoggedIn">
          <router-link to="/register">Sign In</router-link>
        </li>
        <li v-else>
          <base-button @click="logout" class="flat">Logout</base-button>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  computed: {
    isLoggedIn() {
      return this.$store.getters.isLoggedIn;
    },
    activeRole() {
      return this.$store.getters.userRole;
    },
  },
  methods: {
    logout() {
      this.$store.dispatch("autoLogout");
      this.$router.replace("/");
    },
  },
};
</script>

<style scoped>
header {
  width: 100%;
  height: 5rem;
  background-color: #3d008d;
  display: flex;
  justify-content: center;
  align-items: center;
}

header a {
  text-decoration: none;
  color: #f391e3;
  display: inline-block;
  padding: 0.75rem 1.5rem;
  border: 1px solid transparent;
}

a:active,
a:hover,
a.router-link-active {
  border: 1px solid #f391e3;
  border-radius: 10px;
}

/* h1 {
  margin: 0;
} */

h1,
h1 a {
  color: white;
  margin: 0;
}

h1 a:hover,
h1 a:active,
h1 a.router-link-active {
  border-color: transparent;
}

header nav {
  /* width: 90%; */
  width: 100%;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

li {
  margin: 0 0.5rem;
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  text-align: center;
  float: none;
 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: -40px;
  border-radius: 10px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #3a0061;
  color: #f1f1f1;
  }

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>
