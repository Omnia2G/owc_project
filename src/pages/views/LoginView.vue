<template>
  <section>
    <base-card>
      <h2>Login now!</h2>
      <login-form @save-login="saveLogin"></login-form>
    </base-card>
  </section>
</template>

<script>
import LoginForm from "../../components/LoginForm.vue";

export default {
  components: {
    LoginForm,
  },
  methods: {
    saveLogin() {
      // this.$store.dispatch();
      //console.log(data);
      //this.$router.replace("/");
    },
  },
};
</script>
