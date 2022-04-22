<template>
  <form @submit.prevent="submitForm">
    <div class="form-control" :class="{ invalid: !firstname.isValid }">
      <label for="firstname">Firstname</label>
      <input
        type="text"
        id="firstname"
        v-model.trim="firstname.val"
        @blur="clearValidity('firstname')"
      />
      <p v-if="!firstname.isValid">Firstname must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !lastname.isValid }">
      <label for="lastname">Lastname</label>
      <input
        type="text"
        id="lastname"
        v-model.trim="lastname.val"
        @blur="clearValidity('lastname')"
      />
      <p v-if="!lastname.isValid">Lastname must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !username.isValid }">
      <label for="username">Username</label>
      <input
        type="text"
        id="username"
        v-model.trim="username.val"
        @blur="clearValidity('username')"
      />
      <p v-if="!username.isValid">Username must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !email.isValid }">
      <label for="email">Email</label>
      <input
        type="text"
        id="email"
        v-model.trim="email.val"
        @blur="clearValidity('email')"
      />
      <p v-if="!email.isValid">Email must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !password1.isValid }">
      <label for="password1">Password (8-12 char)</label>
      <input
        type="text"
        id="password1"
        v-model.trim="password1.val"
        @blur="clearValidity('password1')"
      />
      <p v-if="!password1.isValid">Password must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !password2.isValid }">
      <label for="password2">Password again</label>
      <input
        type="text"
        id="password2"
        v-model.trim="password2.val"
        @blur="clearValidity('password2')"
      />
      <p v-if="!password2.isValid">Password again must not be empty.</p>
    </div>
    <div class="form-control" :class="{ invalid: !role.isValid }">
      <h3>Register As:</h3>
      <div>
        <input
          type="radio"
          id="teacher"
          value="teacher"
          v-model="role.val"
          @blur="clearValidity('role')"
        />
        <label for="teacher">Teacher</label>
      </div>
      <div>
        <input
          type="radio"
          id="student"
          value="student"
          v-model="role.val"
          @blur="clearValidity('role')"
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
    };
  },
  methods: {
    clearValidity(input) {
      this[input].isValid = true;
    },
    validateForm() {
      this.formIsValid = true;
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
      if (this.email.val === "") {
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

      const formData = {
        first: this.firstname.val,
        last: this.lastname.val,
        user: this.username.val,
        email: this.email.val,
        pw: this.password1.val,
      };

        this.$emit('save-data', formData);
        const data = new FormData();
        data.append('firstname', this.firstname);
        data.append('lastname', this.lastname);
        data.append('username', this.username);
        data.append('email', this.email);
        data.append('password', this.password1);
        data.append('role', this.role);

        axios.post("http://localhost/owc_project/src/api/API.php?action=register", data)
        .then((res) => {
          console.log('SUCCESS!', res);
        })
        .catch((err) => {
          console.log('Error!', err);
        });

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