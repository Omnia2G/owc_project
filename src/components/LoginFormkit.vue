<template>
  <FormKit
    type="form"
    @submit="submitLogin"
    :actions="false"
    incomplete-message="Log In formulár nie je korektne vyplnený!"
  >
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
      name="password"
      v-model="password"
      label="Heslo"
      validation="required"
      help="Zadajte heslo"
      :validation-messages="{
        required: 'Nezadali ste heslo!',
      }"
    />
    <base-button>Prihlásiť sa</base-button>
  </FormKit>
</template>

<script>
export default {
  emits: ["save-login"],
  data() {
    return {
      email: null,
      password: null,
      isLoading: false,
      error: null,
    };
  },
  methods: {
    submitLogin() {
      const data = new FormData();
      data.append("email", this.email);
      data.append("password", this.password);
      data.append("action", "login");
      this.$emit("save-login", data);
    },
  },
};
</script>
