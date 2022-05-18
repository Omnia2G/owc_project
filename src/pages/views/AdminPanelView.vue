<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <base-dialog :show="isLoading" title="Loading..." fixed>
    <base-spinner></base-spinner>
  </base-dialog>
  <v-overlay
    v-model="editUserOverlay"
    contained
    class="align-center justify-center"
  >
    <base-card>
      <h2>Edit User Data</h2>
      <div class="modal-body">
        <registration-formkit
          :admin="'admin'"
          :user="user"
          :edit="true"
          @edit-user="saveEditedUserData"
        ></registration-formkit>
      </div>
    </base-card>
  </v-overlay>
  <v-overlay
    v-model="editTestOverlay"
    contained
    class="align-center justify-center"
  >
    <base-card>
      <h2>Edit Test Data</h2>
      <div class="modal-body">
        <create-test-form></create-test-form>
      </div>
    </base-card>
  </v-overlay>
  <section>
    <base-card>
      <h1>Admin panel</h1>
      <adminpanel-table
        :users="users"
        :tests="tests"
        @delete-user="deleteUser"
        @delete-test="deleteTest"
        @edit-user="loadEditUser"
        @edit-test="loadEditTest"
      ></adminpanel-table>
    </base-card>
    <base-card>
      <h2>Add new Admin (or User)</h2>
      <base-card>
        <registration-formkit
          :admin="'admin'"
          @register-user="addNewOrEditUser"
        ></registration-formkit>
      </base-card>
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
  </section>
</template>

<script>
import AdminpanelTable from "../../components/AdminpanelTable.vue";
import RegistrationFormkit from "../../components/RegistrationFormkit.vue";
import CreateTestForm from '../../components/CreateTestForm.vue';

export default {
  components: {
    AdminpanelTable,
    RegistrationFormkit,
    CreateTestForm,
  },
  data() {
    return {
      users: [],
      tests: [],
      user: [],
      test: [],
      isLoading: false,
      error: null,
      editUserOverlay: false,
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
    async addNewOrEditUser(data) {
      this.isLoading = true;
      try {
        await this.$store.dispatch("userRegistration", data);
        setTimeout(() => {
          this.isLoading = false;
          this.$router.replace('/');//location.reload();
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
      payload.append("id", id);
      payload.append("action", "deleteUser");
      try {
        this.$store.dispatch("adminpanel/deleteUser", payload);
        this.users = this.$store.getters["adminpanel/getUsers"];
      } catch (err) {
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
    loadEditUser(id) {
      window.scrollTo(0, 0);
      this.editUserOverlay = true;
      this.user = this.users.find((user) => user.id == id);
    },
    saveEditedUserData(data) {
      this.editUserOverlay = false;
      this.addNewOrEditUser(data);
    },
    loadEditTest(id) {
      window.scrollTo(0, 0);
      this.editTestOverlay = true;
      this.test = this.tests.find((test) => test.id == id);
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
