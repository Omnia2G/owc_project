<template>
  <base-dialog :show="!!error" title="Chyba" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Kontrola..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h1>Osobné úspechy a údaje</h1>
      <base-card>
        <h2>Moje výsledky</h2>
        <br />
        <results-table :results="results"></results-table>
        <br />
      </base-card>
      <base-button @click="toggleEditDeatails">{{
        personalDetails ? "Zatvoriť osobné údaje" : "Upraviť osobné údaje"
      }}</base-button>
    </base-card>
  </section>
  <section>
    <base-card v-if="personalDetails">
      <h2>Úprava osobných údajov</h2>
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
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";
import ResultsTable from "../../components/ResultsTable.vue";

export default {
  components: {
    RegistrationFormkit,
    ResultsTable,
  },
  data() {
    return {
      tests: [],
      user: [],
      results: [],
      isLoading: false,
      error: null,
      personalDetails: false,
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
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", usersPayload);
        this.user = await this.$store.getters["adminpanel/getUsers"].find(
          (user) => user.username == this.$store.getters["userId"]
        );
        resultsPayload.append("username", this.$store.getters["userId"]);
        resultsPayload.append("action", "get-testResultsByUsername");
        await this.$store.dispatch("test/testResults", resultsPayload);
        this.results = await this.$store.getters["test/getResults"];
      } catch (error) {
        this.error = error;
      }
    },
    handleError() {
      this.error = null;
    },
    moveUp() {
      window.scrollTo(0, 0);
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
  },
};
</script>