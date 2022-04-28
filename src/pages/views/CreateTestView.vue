<template>
  <section>
    <base-card>
      <h2>Vytvorte nový test!</h2>
      
      <create-test-form></create-test-form>
      
    </base-card>
  </section>
</template>

<script>
import CreateTestForm from '../../components/CreateTestForm.vue';
export default {
  components:{
    CreateTestForm
  },
  
}
</script>

