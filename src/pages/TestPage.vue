<template>
  <base-card>
    <h2>Now is your chance to prove YOU are not DUMB ... af!!</h2>
    <test-form :testArray="fullTest" :title="$route.params.title"></test-form>
    <base-button @click.prevent="foo">page</base-button>
  </base-card>
</template>

<script>
import TestForm from "../components/TestForm.vue";
export default {
  components: {
    TestForm,
  },
  //props: ["id", "course"],
  data() {
    return {
        fullTest:[],
    };
  },
  methods: {
    foo() {
      console.log("PAGE LOG: ", this.$store.getters["test/getTest"]);
    },
    async initializeTest() {
      const actionPayload = new FormData();
      actionPayload.append("id", this.$route.params.id);
      actionPayload.append("course", this.$route.params.course);
      actionPayload.append("title", this.$route.params.title);
      actionPayload.append("action", "getCompleteTest");
      try {
        await this.$store.dispatch(
          "test/displayCompleteTest",
          actionPayload
        );
        //const test = await this.$store.getters["test/getTests"];
        //console.log(test);
        this.fullTest = await this.$store.getters["test/getTests"];
        
      } catch (error) {
        console.log("ERROR: ", error);
      }
    },
  },
  created() {
    this.initializeTest();
  },
};
</script>
