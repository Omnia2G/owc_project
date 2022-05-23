<template>
  <FormKit
    type="form"
    @submit="saveRegistrationForm"
    :actions="false"
    incomplete-message="Registračný formulár nie je korektne vyplnený!"
  >
    <FormKit
      type="text"
      name="firstname"
      v-model="firstname"
      label="First Name"
      help="Zadajte meno"
      validation="required"
      :validation-messages="{
        required: 'Nezadali ste meno!',
      }"
    />
    <FormKit
      type="text"
      name="lastname"
      v-model="lastname"
      label="Last Name"
      help="Zadajte priezvisko"
      validation="required"
      :validation-messages="{
        required: 'Nezadali ste priezvisko!',
      }"
    />
    <FormKit
      type="text"
      name="username"
      v-model="username"
      label="Username"
      help="Zadajte používateľské meno"
      validation="required"
      :validation-messages="{
        required: 'Nezadali ste používateľské meno!',
      }"
    />
    <FormKit
      type="email"
      name="email"
      v-model="email"
      label="Email"
      help="Zadajte emailovú adresu"
      validation="required|*email"
      :validation-messages="{
        required: 'Nezadali ste emailovú adresu!',
        email: 'Nesprávny formát emailovej adresy!',
      }"
    />
    <FormKit
      type="password"
      name="password1"
      v-model="password1"
      label="Password"
      validation="required|*length:8,12"
      help="Dĺžka hesla 8-12 znakov"
      validation-visibility="live"
      :validation-messages="{
        required: 'Nezadali ste heslo!',
        length: 'Heslo nie je v intervale 8-12 znakov!',
      }"
    />
    <FormKit
      type="password"
      name="password2"
      label="Confirm Password"
      help="Potvrďte heslo"
      validation="required|confirm:password1"
      validation-visibility="live"
      :validation-messages="{
        required: 'Nepotvrdili ste heslo!',
        confirm: 'Heslá sa nerovnajú!',
      }"
    />
    <FormKit
      v-if="admin == 'admin'"
      type="radio"
      name="role"
      v-model="role"
      label="Sign In as:"
      help="Vyberte ako sa chcete zaregistrovať"
      :options="{
        admin: 'Admin',
        teacher: 'Učiteľ',
        student: 'Študent',
      }"
      validation="required"
      :validation-messages="{
        required: 'Neoznačili ste rolu!',
      }"
    />
      <!-- <FormKit
      v-else-if="teacher == 'teacher'"
      type="radio"
      name="role"
      v-model="role"
      label="Sign In as:"
      help="Vyberte ako sa chcete zaregistrovať"
      :options="{
        teacher: 'Učiteľ',
      }"
      validation="required"
      :validation-messages="{
        required: 'Neoznačili ste rolu!',
      }"
    />
      <FormKit
      v-else-if="student == 'student'"
      type="radio"
      name="role"
      v-model="role"
      label="Sign In as:"
      help="Vyberte ako sa chcete zaregistrovať"
      :options="{
        student: 'Študent',
      }"
      validation="required"
      :validation-messages="{
        required: 'Neoznačili ste rolu!',
      }"
    /> -->
    <FormKit
      v-if="!isLoggedIn && admin != 'admin'"
      type="radio"
      name="role"
      v-model="role"
      label="Sign In as:"
      help="Vyberte ako sa chcete zaregistrovať"
      :options="{
        teacher: 'Učiteľ',
        student: 'Študent',
      }"
      validation="required"
      :validation-messages="{
        required: 'Neoznačili ste rolu!',
      }"
    />
    <FormKit
      v-if="!edit"
      type="checkbox"
      label="Terms of service"
      validation="required|accepted"
      :validation-messages="{
        required: 'Neprijali ste podmienky!',
        accepted: 'Musíte prijať podmienky!',
      }"
    />
    <base-button>{{ edit ? "Save Data" : "Registrácia" }}</base-button>
  </FormKit>
</template>

<script>
export default {
  props: ["admin", "user", "edit"],
  emits: ["register-user", "edit-user"],
  data() {
    return {
      firstname: null,
      lastname: null,
      username: null,
      email: null,
      password1: null,
      role: [],
    };
  },
  computed: {
    isLoggedIn() {
      return this.$store.getters.isLoggedIn;
    },
  },
  methods: {
    saveRegistrationForm() {
      const data = new FormData();
      data.append("firstname", this.firstname);
      data.append("lastname", this.lastname);
      data.append("username", this.username);
      data.append("email", this.email);
      data.append("password", this.password1);
      data.append("role", this.role);
      if (this.edit) {
        data.append("action", "editUser");
        data.append("id", this.user.id);
        data.append("oldUsername", this.user.username);
        data.append("oldEmail", this.user.email);
        this.$emit("edit-user", data);
      } else {
        data.append("action", "register");
        this.$emit("register-user", data);
      }
    },
  },
  mounted() {
    if (this.user) {
      this.firstname = this.user.firstname;
      this.lastname = this.user.lastname;
      this.username = this.user.username;
      this.email = this.user.email;
      this.role = this.user.role;
    }
  },
};
</script>
