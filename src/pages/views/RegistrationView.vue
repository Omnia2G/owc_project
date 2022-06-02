<template>
  <base-dialog :show="!!error" title="Chyba!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Kontrola...">
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h2>Registrácia ako Učiteľ alebo ako Študent !</h2><br>
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