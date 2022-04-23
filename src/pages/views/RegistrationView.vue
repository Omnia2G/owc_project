<template>
  <section>
    <base-card>
      <h2>Register as a Teacher or as a Student now!</h2>
      <registration-form @save-data="saveData"></registration-form>
    </base-card>
  </section>
</template>

<script>
import RegistrationForm from '../../components/RegistrationForm.vue';

export default {
  components: {
    RegistrationForm,
  },
  methods: {
    saveData() {
    // this.$store.dispatch('coaches/registerCoach', data);
    //console.log('Catched emit: REGISTER!', data);
    //this.$router.replace('/');
    // alert('Saved data to DB ..... hahahaha not yet!!!');
    }
  }
};
</script>


