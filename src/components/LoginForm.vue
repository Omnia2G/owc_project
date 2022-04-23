<template>
<base-dialog :show="!!error" title="An Error occurred" @close="handleError">
      <p>{{ error }}</p>
    </base-dialog>
    <base-dialog :show="isLoading" title="Authenticating..." fixed>
      <base-spinner></base-spinner>
    </base-dialog>
  <form @submit.prevent="submitLogin">
    <div class="form-control" :class="{ invalid: !username.isValid }">
      <label for="username">Username</label>
      <input
        type="text"
        id="username"
        v-model.trim="username.val"
        @change="clearValidity('username')"
      />
      <p v-if="!username.isValid">Username must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !password.isValid }">
      <label for="password">Password</label>
      <input
        type="text"
        id="password"
        v-model.trim="password.val"
        @change="clearValidity('password')"
      />
      <p v-if="!password.isValid">Password must not be empty.</p>
    </div>

    <p v-if="!formIsValid">Please fix the above errors and submit again.</p>
    <base-button>Login</base-button>
  </form>
</template>

<script>
import axios from "axios";
import bcrypt from 'bcryptjs';

export default {
  //name: 'login',
  emits: ["save-login"],
  data() {
    return {
      username: {
        val: "",
        isValid: true,
      },
      password: {
        val: "",
        isValid: true,
      },
      formIsValid: true,
      //mode: 'login',
      isLoading: false,
      error: null,
    };
  },
  methods: {
    clearValidity(input) {
      this[input].isValid = true;
      if(this.username.isValid && this.password.isValid){
        this.formIsValid = true;
      }
    },
    validateForm() {
      this.formIsValid = true;

      if (this.username.val === "") {
        this.username.isValid = false;
        this.formIsValid = false;
      }
      if (this.password.val === "") {
        this.password.isValid = false;
        this.formIsValid = false;
      }
    },
    submitLogin() {
      this.validateForm();
      if (!this.formIsValid) {
        return;
      }
      this.isLoading = true;
      // const formData = {
      //   user: this.username.val,
      //   pw: this.password.val,
      // };
      this.$emit("save-login");

      const data = new FormData();
      data.append("username", this.username.val);
      data.append("password", this.password.val);
      data.append("action", "login" );
      axios
        .post("http://localhost/owc_project/src/api/Actions.php", data)
        .then(res => {
          if (res.data.username === this.username.val && bcrypt.compareSync( this.password.val,  res.data.pw) ){ 
               setTimeout(() => {
                 this.isLoading = false;
                 //TODO save role
                 this.$router.replace('/'); }, 500);
          }else{
            throw new Error('Invalid username or Password!');
          }
        })
        .catch(() => {
          setTimeout(() => {  
            this.error = "Wrong 'username' or 'password' was entered!";
            this.isLoading = false;
          }, 1000);
          this.username.val='';
          this.password.val='';
        });
    },
    handleError() {
      this.error = null;
    },
  },
};
</script>

<style scoped>
.form-control {
  margin: 0.5rem 0;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}

input[type="radio"] + label {
  font-weight: normal;
  display: inline;
  margin: 0 0 0 0.5rem;
}

input,
textarea {
  display: flexbox;
  width: 15rem;
  border: 1px solid #ccc;
  font: inherit;
}

input:focus,
textarea:focus {
  background-color: #f0e6fd;
  outline: none;
  border-color: #3d008d;
}

input[type="checkbox"] {
  display: inline;
  width: auto;
  border: none;
}

input[type="checkbox"]:focus {
  outline: #3d008d solid 1px;
}

h3 {
  margin: 0.5rem 0;
  font-size: 1rem;
}

.invalid label {
  color: red;
}

.invalid input,
.invalid textarea {
  border: 1px solid red;
}
</style>