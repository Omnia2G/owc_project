<template>
  <base-card>
    <!-- <FormKit type="form" :actions="false" v-model="test">
      <FormKitSchema :schema="schema" />
    </FormKit> -->
    <FormKit type="form" v-model="test" :actions="false" @submit="submitForm">
      <FormKit
        v-for="test in testArray"
        :key="test.id"
        type="checkbox"
        :name="test.goodanswer"
        :label="test.text"
        help="Vyberte správnu odpoveď"
        :options="{
          answera: test.answera,
          answerb: test.answerb,
          answerc: test.answerc,
        }"
        validation="max:1"
        :validation-messages="{
          required: 'Vyberte iba 1 odpoveď',
        }"
      />
       <base-button>Vyhodnotiť</base-button>
    </FormKit>
    <base-button @click="foo">array from DB</base-button>
  </base-card>
</template>

<script>
// import FormKitSchema from "@formkit/vue";

export default {
  props: ["testArray", "title"],
  components: {
    //FormKitSchema,
  },
  data() {
    return {
      test: [],
      schema: [
        {
          $el: "h1",
          children: "Title: " + this.title, //title
        },
        {
          $el: "p",
          children: "Text of the 1. question.",
        },
        {
          $formkit: "checkbox",
          name: "question1",
          id: "q1",
          label: "Answers",
          options: [
            { value: "q1answerA", label: "Answer A" },
            { value: "q1answerB", label: "Answer B" },
            { value: "q1answerC", label: "Answer C" },
          ],
          help: "Vyberte správnu odpoveď",
          validation: "max:1",
          validationMessages: {
            max: "Vyberte iba 1 odpoveď",
          },
        },
      ],
    };
  },
  methods: {
    foo() {
      // console.log("FORM LOG: ", this.$route);
      console.log(this.testArray);
    },
    submitForm(){
      for (const [key, value] of Object.entries(this.test)) {
        console.log(key, value);
      }
      //console.log(this.test);
    },
  },
};
</script>
