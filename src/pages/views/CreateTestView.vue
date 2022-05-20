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
        <create-test-form :test="test" :edit="true" @edit-test="saveEditedTest"></create-test-form>
      </div>
    </base-card>
  </v-overlay>
  <section>
    <base-card>
      <h1>Teacher Panel</h1>
      <base-card>
        <h2>My Tests</h2>
        <br />
        <teacher-table
          :tests="tests"
          @edit-test="loadEditTest"
          @delete-test="deleteTest"
        ></teacher-table>
        <br /><br />
        <base-button @click="toggleNewTest">{{
          openNewTest ? "Zatvorit novy test" : "Novy test"
        }}</base-button>
        <br /><br />
        <base-button @click="toggleEditDeatails">{{
          personalDetails ? "Zatvorit osobne udaje" : "Upravit osobne udaje"
        }}</base-button>
      </base-card>
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
      <registration-formkit
        :user="user"
        :edit="true"
        :teacher="'teacher'"
        @edit-user="editPersonalData"
      ></registration-formkit>
    </base-card>
  </section>
</template>

<script>
import CreateTestForm from "../../components/CreateTestForm.vue";
import TeacherTable from "../../components/TeacherTable.vue";
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";

export default {
  components: {
    CreateTestForm,
    TeacherTable,
    RegistrationFormkit,
  },
  data() {
    return {
      tests: [],
      test: [],
      user: [],
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
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", usersPayload);
        this.user = await this.$store.getters["adminpanel/getUsers"].find((user) => user.username == this.$store.getters['userId']);
        const testsPayload = new FormData();
        testsPayload.append("username", this.user.username);
        testsPayload.append("action", "getTestsByUsername");
        await this.$store.dispatch("test/fetchTests", testsPayload);
        this.tests = await this.$store.getters["test/getTests"];
      }
      catch (error) {
        this.error = error;
      }
    },
    saveTest(data) {
      this.isLoading = true;
      try {
        this.$store.dispatch("test/createNewTest", data);
        setTimeout(() => {
          this.isLoading = false;
          this.$router.replace("/");
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
          this.$router.replace("/");//location.reload();
        }, 600);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;
        }, 600);
      }
    },
    async loadEditTest(id) {
      window.scrollTo(0, 0);
      const testsPayload = new FormData();
        testsPayload.append("id", id);
        testsPayload.append("action", "getCompleteTestById");
      try{
        await this.$store.dispatch("test/fetchCompleteTest", testsPayload);
        this.test = await this.$store.getters["test/getCompleteTest"];
      }
      catch (error) {
        this.error = error;
      }
      this.editTestOverlay = true;
    },
    saveEditedTest(data){
      console.log('SAVE EDITED DATA: ',data);
      //editTestOverlay = false;
      //this.saveTest(data);
    },
  },
};
</script>

<style scoped>
.modal-body {
  width: 100%;
  padding-left: 1rem;
  padding-right: 1rem;
  max-height: calc(100vh - 210px);
  overflow-y: auto;
}
</style>
