<template>
  <base-dialog :show="!!error" title="An Error occurred" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Checking the Database...">
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h2>Register as a Teacher or as a Student now!</h2>
      <registration-formkit
        @register-user="registration"
      ></registration-formkit>
    </base-card>
  </section>
</template>

<script>
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";

export default {
  components: {
    RegistrationFormkit,
  },
  data() {
    return {
      isLoading: false,
      error: null,
    };
  },
  methods: {
    async registration(data) {
      this.isLoading = true;
      try {
        await this.$store.dispatch("userRegistration", data);
        setTimeout(() => {
          this.isLoading = false;
          this.$router.replace("/login");
        }, 600);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;
        }, 600);
      }
    },
    handleError() {
      this.error = null;
    },
  },
};
</script>
