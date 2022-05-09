<template>
  <base-dialog :show="!!error" title="An Error occurred" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Checking the database..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h2>Vytvorte nový test</h2>
      <create-test-form @save-test="saveTest"></create-test-form>
   </base-card>
  </section>
</template>

<script>
import CreateTestForm from '../../components/CreateTestForm.vue';

export default {
  components:{
    CreateTestForm,
  },
  data(){
    return{
      isLoading: false,
      error: null,
    };
  },
  methods:{
    saveTest(data){
      this.isLoading = true;
      try{
        this.$store.dispatch('test/createNewTest', data);
        setTimeout(() => {
          this.isLoading = false;
          this.$router.replace('/');
        }, 600);
      }
      catch(err){
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
  
}
</script>

