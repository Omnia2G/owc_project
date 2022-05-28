<template>
  <base-card>
    <h2>{{title}}</h2><br>
    <FormKit type="form" v-model="answers" :actions="false" @submit="submitForm" incomplete-message="Formulár nie je korektne vyplnený!">
      <FormKit
        v-for="test in testArray"
        :key="test.id" 
        type="checkbox"
        :name="test.id.toString()"
        :label="test.text"
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
      let points = 0;
      let data = new FormData();
      data.append('username', this.$store.getters['userId']);
      data.append('course', this.testArray[0].course);
      data.append('testtitle', this.title);
      for (const [index, [key, value]] of Object.entries(Object.entries(this.answers))) {
        if(this.testArray[index].id == key && this.testArray[index].goodansval === value[0]){
          points++;
        }
      }
      data.append('points', points);
      data.append('action', 'save-testresult')
      this.$emit("test-result", data);
    },
  },
};
</script>
