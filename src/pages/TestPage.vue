<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="!!results" title="Results" @close="handleResult">
    <p>{{ results }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Evaluating...">
    <base-spinner></base-spinner>
  </base-dialog>
  <base-card>
    <h2>Good Luck</h2>
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
      actionPayload.append("action", "getCompleteTestById");
      try {
        await this.$store.dispatch("test/fetchTests", actionPayload);
        this.fullTest = await this.$store.getters["test/getTests"];
      } catch (error) {
        this.error = error;
      }
    },
    testResult(data) {
      this.isLoading = true;
      this.$store.dispatch("test/saveTestResults", data);
      setTimeout(() => {
        this.isLoading = false;
        this.results =
          "Your test result are: " + data.get("points") + " points!";
      }, 1500);
    },
    handleError() {
      this.error = null;
    },
    handleResult() {
      let role = this.$store.getters["userRole"];
      this.results = null;
      if (role === "student") {
        this.$router.replace("/student");
      }
      if (role === "teacher") {
        this.$router.replace("/createtest");
      }
      if (role === "admin") {
        this.$router.replace("/adminpanel");
      }
      window.scrollTo(0, 0);
    },
  },
  created() {
    this.initializeTest();
  },
};
</script>