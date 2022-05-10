<template>
<base-dialog :show="!!error" title="An Error occurred" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Authenticating..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h2>Login now!</h2>
      <login-formkit @save-login="saveLogin"></login-formkit>
    </base-card>
  </section>
</template>

<script>
import LoginFormkit from '../../components/LoginFormkit.vue';

export default {
  components: {
    LoginFormkit,
  },
  data(){
    return{
      isLoading: false,
      error: null,
    };
  },
  methods: {
    async saveLogin(data) {
     this.isLoading = true;
      try {
        await this.$store.dispatch("login", data);
        setTimeout(() => {
          this.isLoading = false;
          this.$router.replace("/");
        }, 500);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;//"Wrong 'username' or 'password' was entered!";       
        }, 800);
      }
    },
     handleError() {
      this.error = null;
    },
  },
};
</script>
