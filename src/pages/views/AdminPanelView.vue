<template>
  <section>
    <base-card>
      <h1>Admin panel</h1>
      <adminpanel-table :posts="posts"></adminpanel-table>
    </base-card>
  </section>
</template>


<script>
import AdminpanelTable from '../../components/AdminpanelTable.vue';

export default {
  components:{
    AdminpanelTable
  },
  data(){
    return{
      posts: [],
    };
  },
  created() {
    this.loadUsers();
  },
  methods:{
    async loadUsers() {
      const actionPayload = new FormData();
      actionPayload.append("action", "getAllUsers");
      try {
        await this.$store.dispatch("adminpanel/loadAllUsers", actionPayload);
        this.posts = await this.$store.getters["adminpanel/getUsers"];
      } catch (error) {
        this.error = error;
      }
    },
  },
}
</script>