<template>
  <base-card>
    <FormKit type="form" v-model="answers" :actions="false" @submit="submitForm" incomplete-message="Formulár nie je korektne vyplnený!">
      <FormKit
        v-for="test in testArray"
        :key="test.id" 
        type="checkbox"
        :name="test.id.toString()"
        :label="test.text"
        help="Vyberte správnu odpoveď"
        :options="{
          [test.answera]: test.answera,
          [test.answerb]: test.answerb,
          [test.answerc]: test.answerc,
        }"
        validation="max:1"
        :validation-messages="{
          max: 'Vyberte iba 1 odpoveď',
        }"
      />
       <base-button>Vyhodnotiť</base-button>
    </FormKit>
  </base-card>
</template>

<script>
export default {
  props: ["testArray", "title"],
  emits:['test-result'],
  data() {
    return {
      answers: [],
    };
  },
  methods: {
    submitForm(){ //with evaluation
      let sum = 0;
      for (const [index, [key, value]] of Object.entries(Object.entries(this.answers))) {
        if(this.testArray[index].id === key && this.testArray[index].goodanswer === value[0]){
          sum++;
        }
      }
      this.$emit("test-result", sum);
    },
  },
};
</script>
