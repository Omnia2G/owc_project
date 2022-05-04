<template>
  <!-- <section>
    <base-card>
      <h2>Vytvorte nový test!</h2>   
      <create-test-form></create-test-form>
    </base-card>
  </section> -->
  <section>
    <base-card>
      <h2>Vytvorte nový test</h2>
      <vue-formulate @save-test="saveTest"></vue-formulate>
   </base-card>
  </section>
</template>

<script>
// import CreateTestForm from '../../components/CreateTestForm.vue';
import VueFormulate from '../../components/VueFormulate.vue';
export default {
  components:{
    //CreateTestForm,
    VueFormulate
  },
  methods:{
    saveTest(data){
      try{
        this.$store.dispatch('test/createNewTest', data);
        //this.$router.replace('/');
      }
      catch(err){
        console.log(err);
      }

      
     
    },
    
  },
  
}
</script>

