<template>
  <base-dialog :show="!!error || !!results" title="Information" @close="handleError">
    <p v-if="error">{{ error }}</p>
    <p v-else>{{ results }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Evaluating..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <base-card>
    <h2>Now is your chance to prove YOU are not DUMB ... af!!</h2>
    <test-form
      :testArray="fullTest"
      :title="$route.params.title"
      @test-result="testResult"
    ></test-form>
  </base-card>
</template>

<script>
import TestForm from "../components/TestForm.vue";
export default {
  components: {
    TestForm,
  },
  props: ["id", "course", "title"],
  data() {
    return {
      fullTest: [],
      isLoading: false,
      error: null,
      results: null,
    };
  },
  methods: {
    async initializeTest() {
      const actionPayload = new FormData();
      actionPayload.append("id", this.$route.params.id);
      actionPayload.append("course", this.$route.params.course);
      actionPayload.append("title", this.$route.params.title);
      actionPayload.append("action", "getCompleteTest");
      try {
        await this.$store.dispatch("test/displayCompleteTest", actionPayload);
        //const test = await this.$store.getters["test/getTests"];
        //console.log(test);
        this.fullTest = await this.$store.getters["test/getTests"];
      } catch (error) {
        //console.log("ERROR: ", error);
        this.error = error;
      }
    },
    testResult(sum) {
      this.isLoading = true;
      setTimeout(() => {
        this.isLoading = false;
        this.results = "Your test result are: " + sum + " points!";
        //TODO save into DB - leaderboard
        //this.$router.replace("/");
      }, 1500);
    },
    handleError() {
      if(this.error){
        this.error = null;
      }else{
        this.results = null;
      }
      
    },
  },
  created() {
    this.initializeTest();
  },
};
</script>
