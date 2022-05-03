<template>
  <header>
    <nav class="navbar">
       <div class="brand-title">Owc app</div>
      <a href="" class="toggle-button" @click.prevent="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li>
            <router-link to="/">Domov</router-link>
          </li>
          <li>
            <div class="dropdown" @click.prevent>
              <span>Témy</span>
              <div class="dropdown-content">
                <router-link to="/vlc" class="link"
                  >Viditeľná sveteľna komunikácia</router-link
                >
                <router-link to="/occ" class="link"
                  >Optická kamerová komunikácia</router-link
                >
                <router-link to="/irc" class="link"
                  >Infračervená svetelná komunikácia</router-link
                >
                <router-link to="/fso" class="link"
                  >Optická komunikácia vo voľnom priestore</router-link
                >
                <router-link to="/uvc" class="link">Ultrafialová komunikácia</router-link>
                <router-link to="/lifi" class="link">LI-FI</router-link>
              </div>
            </div>
          </li>
          <li>
            <router-link to="/about">O nás</router-link>
          </li>
          <li v-if="activeRole === 'teacher' || activeRole === 'admin'">
            <router-link to="/createtest">Nový test</router-link>
          </li>
          <li v-if="activeRole === 'admin'">
            <router-link to="/adminpanel">Admin Panel</router-link>
          </li>
          <li v-if="!isLoggedIn">
            <router-link to="/login">Login</router-link>
          </li>
          <li v-if="!isLoggedIn">
            <router-link to="/register">Sign In</router-link>
          </li>
            <base-button v-else class="flat logout" @click="logout">Logout</base-button>
        </ul>
        </div>
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
    toggle(){
      document.getElementsByClassName('navbar-links')[0].classList.toggle('active');
    },
  },
  
};
</script>

<style scoped>
.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: white;
   
}

.brand-title {
    font-size: 2rem;
    margin: .5rem;
}

.navbar-links {
    height: 100%;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 1.5rem;
    font-size: 1.5rem;
}

.navbar-links li:hover {
    background-color: #555;
    border-radius: 15px;
    
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 4px;
    width: 100%;
    background-color: white;
    border-radius: 10px;
}

@media (max-width: 700px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
       
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        text-align: center;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
   
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  text-align: center;
  float: none;
  margin: 25px;
  /* margin-top: 25px; */
  cursor: pointer;
  height: 100%;
}
 .dropdown span{
   font-size: 1.5rem;
 }
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #333235;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  margin-left: -50px;
  border-radius: 10px;
}
.dropdown-content .link {
  font-size: 1rem;
}
.logout{
  align-self: center;
  margin: 15px;
  width: 120px;
}

/* Links inside the dropdown */
.dropdown-content a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: rgb(122, 120, 120);
  color: #f1f1f1;
  border-radius: 12px;
}



/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>
