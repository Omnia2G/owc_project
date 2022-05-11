<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Loading..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <section>
    <base-card>
      <h1>Admin panel</h1>
      <adminpanel-table
        :users="users"
        :tests="tests"
        @delete-user="deleteUser"
        @delete-test="deleteTest"
      ></adminpanel-table>
    </base-card>
    <base-card>
      <h2>Add new Admin</h2>
      <base-card>
        <registration-formkit
          :admin="'admin'"
          @register-user="addNewAdmin"
        ></registration-formkit>
      </base-card>
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
  </section>
  
</template>

<script>
import AdminpanelTable from "../../components/AdminpanelTable.vue";
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";

export default {
  components: {
    AdminpanelTable,
    RegistrationFormkit,
  },
  data() {
    return {
      users: [],
      tests: [],
      isLoading: false,
      error: null,
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    async loadData() {
      const usersPayload = new FormData();
      usersPayload.append("action", "getAllUsers");
      const testsPayload = new FormData();
      testsPayload.append("action", "getAllTests");
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", usersPayload);
        this.users = await this.$store.getters["adminpanel/getUsers"];
        await this.$store.dispatch("test/fetchTests", testsPayload);
        this.tests = await this.$store.getters["test/getTests"];
      } catch (error) {
        this.error = error;
      }
    },
    async addNewAdmin(data) {
      this.isLoading = true;
      try {
        await this.$store.dispatch("userRegistration", data);
        setTimeout(() => {
          this.isLoading = false;
          location.reload();
        }, 600);
      } catch (err) {
        setTimeout(() => {
          this.isLoading = false;
          this.error = err;
        }, 600);
      }
    },
    handleError() {
      this.error = null;
    },
    moveUp() {
      window.scrollTo(0, 0);
    },
    deleteUser(id) {
      const payload = new FormData();
      payload.append('id', id);
      payload.append("action", "deleteUser");
      try{
        this.$store.dispatch('adminpanel/deleteUser', payload);
        this.users = this.$store.getters['adminpanel/getUsers'];
      }
      catch(err){
        this.error = err;
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
  },
};
</script>
