<template>
<base-dialog :show="!!error" title="An Error occurred" @close="handleError">
      <p>{{ error }}</p>
    </base-dialog>
    <base-dialog :show="isLoading" title="Checking the Database..." @close="handleLoading" >
      <base-spinner></base-spinner>
    </base-dialog>
  <form @submit.prevent="submitForm">
    <div class="form-control" :class="{ invalid: !firstname.isValid }">
      <label for="firstname">Firstname</label>
      <input
        type="text"
        id="firstname"
        v-model.trim="firstname.val"
        @change="clearValidity('firstname')"
      />
      <p v-if="!firstname.isValid">Firstname must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !lastname.isValid }">
      <label for="lastname">Lastname</label>
      <input
        type="text"
        id="lastname"
        v-model.trim="lastname.val"
        @change="clearValidity('lastname')"
      />
      <p v-if="!lastname.isValid">Lastname must not be empty.</p>
    </div>
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
    <div class="form-control" :class="{ invalid: !email.isValid }">
      <label for="email">Email</label>
      <input
        type="text"
        id="email"
        v-model.trim="email.val"
        @change="clearValidity('email')"
      />
      <p v-if="!email.isValid">Email is empty or wrong format.</p>
    </div>
    <div class="form-control" :class="{ invalid: !password1.isValid }">
      <label for="password1">Password (8-12 char)</label>
      <input
        type="text"
        id="password1"
        v-model.trim="password1.val"
        @input="passwordMatch()"      
      />
      <p v-if="!password1.isValid">{{ pw1Error }}.</p>
    </div>
    <div class="form-control" :class="{ invalid: !password2.isValid }">
      <label for="password2">Password again</label>
      <input
        type="text"
        id="password2"
        v-model.trim="password2.val"
        @input="passwordMatch()" 
      />
      <p v-if="!password2.isValid">{{ pw2Error }}</p>
    </div>
    <div class="form-control" :class="{ invalid: !role.isValid }">
      <h3>Register As:</h3>
      <div>
        <input
          type="radio"
          id="teacher"
          value="teacher"
          v-model="role.val"
          @change="clearValidity('role')"
        />
        <label for="teacher">Teacher</label>
      </div>
      <div>
        <input
          type="radio"
          id="student"
          value="student"
          v-model="role.val"
          @change="clearValidity('role')"
        />
        <label for="student">Student</label>
      </div>
      <p v-if="!role.isValid">You need to choose a role.</p>
    </div>
    <p v-if="!formIsValid">Please fix the above errors and submit again.</p>
    <base-button>Register</base-button>
  </form>
</template>

<script>
import axios from 'axios';
import bcrypt from 'bcryptjs';

export default {
  //name: 'Register',
  emits: ["save-data"],
  data() {
    return {
      firstname: {
        val: "",
        isValid: true,
      },
      lastname: {
        val: "",
        isValid: true,
      },
      username: {
        val: "",
        isValid: true,
      },
      email: {
        val: "",
        isValid: true,
      },
      password1: {
        val: "",
        isValid: true,
      },
      password2: {
        val: "",
        isValid: true,
      },
      role: {
        val: [],
        isValid: true,
      },
      formIsValid: true,
      pw1Error: 'Password must not be empty!',
      pw2Error: 'Password again must not be empty!',
      isLoading: false,
      error: null,
    };
  },
  methods: {
    passwordMatch(){
      if(this.password1.val === this.password2.val &&
        this.password1.val.length >= 8 &&
        this.password1.val.length <= 12 &&
        this.password2.val.length >= 8 &&
        this.password2.val.length <= 12
      ){
        this.password1.isValid = true;
        this.password2.isValid = true;
        if(this.firstname.isValid &&
          this.lastname.isValid &&
          this.username.isValid &&
          this.email.isValid &&
          this.role.val.length !== 0
        ){
          this.formIsValid = true;
        }
        else{
          this.formIsValid = false;
        }
      }else{
        if(this.password1.val.length < 8 ){
          if(this.password1.val === ""){
            this.pw1Error = 'Password must not be empty'; 
          }else{
            this.pw1Error = 'Password is too short!';
          }
          this.password1.isValid = false;
        }
        if(this.password1.val.length > 12){
          this.pw1Error = 'Password is too long!';
          this.password1.isValid = false;
        }
        if(this.password2.val.length < 8 ){
          if(this.password2.val === ""){
            this.pw2Error = 'Password must not be empty';
          }
          else{
            this.pw2Error = 'Password is too short!';  
          }
          this.password2.isValid = false;
        }
        if(this.password2.val.length > 12){
          this.pw2Error = 'Password is too long!';
          this.password2.isValid = false;
        }
        if( this.password1.val.length >= 8 &&
        this.password1.val.length <= 12){
            this.password1.isValid = true
        }
        
        if(this.password2.val.length >= 8 &&
        this.password2.val.length <= 12 &&
        this.password1.val.length >= 8 &&
        this.password1.val.length <= 12 &&
        this.password2.val !== this.password1.val){
          this.password2.isValid = false;
          this.pw2Error = 'Password again does not match Password!';
          this.formIsValid = false;
        }
        //this.formIsValid = false;
      }
    },
    clearValidity(input) {
      this[input].isValid = true;
      if(this.firstname.isValid && 
        this.lastname.isValid &&
        this.username.isValid &&
        this.email.isValid &&
        this.role.isValid &&
        this.password1.isValid &&
        this.password2.isValid 
        ){
          if(this.password1.val === this.password2.val){
            this.formIsValid = true;
          }else{
            this.formIsValid = false;
          }
      }
    },
    validateForm() {
      this.formIsValid = true;
      this.passwordMatch();
      if (this.firstname.val === "") {
        this.firstname.isValid = false;
        this.formIsValid = false;
      }
      if (this.lastname.val === "") {
        this.lastname.isValid = false;
        this.formIsValid = false;
      }
      if (this.username.val === "") {
        this.username.isValid = false;
        this.formIsValid = false;
      }
      if (this.email.val === "" || !this.email.val.includes('@')) {
        this.email.isValid = false;
        this.formIsValid = false;
      }
      if (this.password1.val === "") {
        this.password1.isValid = false;
        this.formIsValid = false;
      }
      if (this.password2.val === "") {
        this.password2.isValid = false;
        this.formIsValid = false;
      }
      if (this.role.val.length === 0) {
        this.role.isValid = false;
        this.formIsValid = false;
      }
     
    },
    submitForm() {
      this.validateForm();
      if (!this.formIsValid) {
        return;
      }
      this.isLoading = true;
      // const formData = {
      //   first: this.firstname.val,
      //   last: this.lastname.val,
      //   user: this.username.val,
      //   email: this.email.val,
      //   pw: this.password1.val,
      // };

        this.$emit('save-data');
        const data = new FormData();
        data.append('firstname', this.firstname.val);
        data.append('lastname', this.lastname.val);
        data.append('username', this.username.val);
        data.append('email', this.email.val);
        data.append('password', bcrypt.hashSync(this.password1.val, 10));
        data.append('role', this.role.val);
        data.append("action", "register" );
       
        axios
        .post("http://localhost/owc_project/src/api/Actions.php", data)
        .then(res => {
          if (res.data === true){ 
               setTimeout(() => {
                 this.isLoading = false;
                 this.error = "Entered 'Username' already exists, please choose another!";
                 //console.log(res.data);
                }, 500);
          }else{
            setTimeout(() => { 
              this.isLoading = false; 
              //console.log('username does not exists, insertion done',res.data);
              this.$router.replace('/login');
          }, 1000);
          }
        })
        .catch((err) => {
          this.isLoading = false;
          this.error = err;
          //console.log(err);
        });

    },
     handleError() {
      this.error = null;
    },
    handleLoading(){
      this.isLoading = false;
    }
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

input[type="checkbox"] + label {
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

input[type="radio"] {
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