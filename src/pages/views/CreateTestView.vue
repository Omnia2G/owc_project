<template>
  <base-dialog :show="!!error" title="An Error occurred" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Checking the database..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <v-overlay
    v-model="editTestOverlay"
    contained
    class="align-center justify-center"
  >
    <base-card>
      <h2>Edit Test Data</h2>
      <br />
      <div class="modal-body">
        <create-test-form
          :test="test"
          :edit="true"
          @edit-test="saveEditedTest"
        ></create-test-form>
      </div>
    </base-card>
  </v-overlay>
  <section>
    <base-card>
      <h1>Teacher Panel</h1>
      <base-card>
        <h2>My Tests</h2>
        <br />
        <tests-table
          :tests="tests"
          :tableheads="testTableheads"
          @edit-test="loadEditTest"
          @delete-test="deleteTest"
        ></tests-table>
        <br />
        <br />
        <h2>Results of my Tests</h2>
        <br />
        <results-table :results="results"></results-table>
        <br />
        <br />
        <h2>My Results</h2>
        <br />
        <results-table :results="myResults"></results-table>
        <br /><br />
        <base-button @click="toggleNewTest">{{
          openNewTest ? "Zatvorit novy test" : "Novy test"
        }}</base-button>
        <br />
      </base-card>
      <base-button @click="toggleEditDeatails">{{
        personalDetails ? "Zatvorit osobne udaje" : "Upravit osobne udaje"
      }}</base-button>
    </base-card>
  </section>
  <section>
    <base-card v-if="openNewTest">
      <h2>Vytvorte nový test</h2>
      <create-test-form @save-test="saveTest"></create-test-form>
    </base-card>
  </section>
  <section>
    <base-card v-if="personalDetails">
      <h2>Upravit osobne udaje</h2>
      <br />
      <base-card>
        <registration-formkit
          :user="user"
          :edit="true"
          @edit-user="editPersonalData"
        ></registration-formkit>
      </base-card>
    </base-card>
  </section>
</template>

<script>
import CreateTestForm from "../../components/CreateTestForm.vue";
import TestsTable from "../../components/TestsTable.vue";
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";
import ResultsTable from "../../components/ResultsTable.vue";

export default {
  components: {
    CreateTestForm,
    TestsTable,
    RegistrationFormkit,
    ResultsTable,
  },
  data() {
    return {
      tests: [],
      test: [],
      user: [],
      results: [],
      myResults: [],
      testTableheads: ["Title", "Course", "Username"],
      isLoading: false,
      error: null,
      openNewTest: false,
      personalDetails: false,
      editTestOverlay: false,
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    async loadData() {
      const usersPayload = new FormData();
      usersPayload.append("action", "getAllUsers");
      const resultsPayload = new FormData();
      resultsPayload.append("action", "get-testResults-teacher");
      const myres = new FormData();
      myres.append("action", "get-testResultsByUsername");
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", usersPayload);
        this.user = await this.$store.getters["adminpanel/getUsers"].find(
          (user) => user.token == this.$store.getters["token"]
        );
        const testsPayload = new FormData();
        testsPayload.append("username", this.user.username);
        testsPayload.append("action", "getTestsByUsername");
        await this.$store.dispatch("test/fetchTests", testsPayload);
        this.tests = await this.$store.getters["test/getTests"];
        resultsPayload.append("username", this.user.username);
        await this.$store.dispatch("test/testResults", resultsPayload);
        this.results = await this.$store.getters["test/getResults"];
        myres.append("username", this.user.username);
        await this.$store.dispatch("test/fetchMyTestResults", myres);
        this.myResults = await this.$store.getters["test/getMyTestResults"];
      } catch (error) {
        this.error = error;
      }
    },
    async saveTest(data) {
      this.isLoading = true;
      try {
        await this.$store.dispatch("test/createNewTest", data);
        this.tests = await this.$store.getters["test/getTests"];
        setTimeout(() => {
          this.moveUp();
          this.openNewTest = false;
          this.isLoading = false;
        }, 600);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;
        }, 600);
      }
    },
    deleteTest(id) {
      const payload = new FormData();
      payload.append("id", id);
      payload.append("action", "deleteTest");
      try {
        this.$store.dispatch("test/deleteTest", payload);
        this.tests = this.$store.getters["test/getTests"];
      } catch (err) {
        this.error = err;
      }
    },
    handleError() {
      this.error = null;
    },
    moveUp() {
      window.scrollTo(0, 0);
    },
    toggleNewTest() {
      this.openNewTest = !this.openNewTest;
    },
    toggleEditDeatails() {
      this.personalDetails = !this.personalDetails;
    },
    async editPersonalData(data) {
      this.isLoading = true;
      try {
        await this.$store.dispatch("userRegistration", data);
        setTimeout(() => {
          this.isLoading = false;
          this.user = this.$store.getters["adminpanel/getUsers"].find(
            (user) => user.id == data.get("id")
          );
          this.moveUp();
          this.personalDetails = false;
        }, 600);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;
        }, 600);
      }
    },
    async loadEditTest(id) {
      const testsPayload = new FormData();
      testsPayload.append("id", id);
      testsPayload.append("action", "getCompleteTestById");
      try {
        await this.$store.dispatch("test/fetchCompleteTest", testsPayload);
        this.test = await this.$store.getters["test/getCompleteTest"];
      } catch (error) {
        this.error = error;
      }
      window.scrollTo(0, 0);
      this.editTestOverlay = true;
    },
    saveEditedTest(data) {
      this.editTestOverlay = false;
      this.saveTest(data);
    },
  },
};
</script>