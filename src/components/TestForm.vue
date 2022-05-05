<template>
  <base-card>
    <FormKit type="form" :actions="false">
      <FormKitSchema :schema="schema" />
    </FormKit>
    <base-button @click.prevent="foo">form</base-button>
  </base-card>
</template>

<script>
import FormKitSchema from "@formkit/vue";

export default {
  props: ["testArray"],
  components: {
    FormKitSchema,
  },
  data() {
    return {
      test: [],
      schema: [
        {
          $el: "h1",
          children: "Test title...", //title
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
          messages: { max: "Vyberte iba 1 odpoveď" },
        },
      ],
    };
  },
  methods: {
    foo() {
      // console.log("FORM LOG: ", this.$route);
      console.log(this.testArray);
    },
  },
};
</script>
