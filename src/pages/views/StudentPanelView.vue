<template>
  <base-dialog :show="!!error" title="An Error occurred" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Checking the database..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h1>Personal achievements and details</h1>
      <base-card>
        <h2>My Tests</h2>
        <br />
        <student-table
          :tests="tests"
        ></student-table>
        <br /><br />
        <base-button @click="toggleEditDeatails">{{
          personalDetails ? "Zatvorit osobne udaje" : "Upravit osobne udaje"
        }}</base-button>
      </base-card>
    </base-card>
  </section>
  <section>
    <base-card v-if="personalDetails">
      <h2>Upravit osobne udaje</h2>
      <br />
      <registration-formkit
        :user="user"
        :edit="true"
        :student="'student'"
        @edit-user="editPersonalData"
      ></registration-formkit>
    </base-card>
  </section>
</template>

<script>
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";
import StudentTable from '../../components/StudentTable.vue';

export default {
  components: {
    RegistrationFormkit,
    StudentTable
  },
  data() {
    return {
      tests: [],
      user: [],
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
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", usersPayload);
        this.user = await this.$store.getters["adminpanel/getUsers"].find((user) => user.username == this.$store.getters['userId']);
      }
      catch (error) {
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
          this.$router.replace("/");//location.reload();
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