<template>
  <base-card>
    <h2>Users</h2>
    <table class="table">
      <thead>
        <th>Username
        </th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
      </thead>
      <tbody>
        <tr v-for="user in posts" :key="user.id">
          <td data-label="Username">{{ user.username }}</td>
          <td data-label="Email">{{ user.email }}</td>
          <td data-label="Role">{{ user.role }}</td>
          <td>
            <base-button class="delete" @click="deleteUser(user.id)"
              >Delete</base-button
            >
          </td>
        </tr>
      </tbody>
    </table>
    <base-button @click="show">Show all users</base-button>
  </base-card>
</template>

<script>


export default {


  props: ["posts"],
  data() {
    return {};
  },
  methods: {
    show() {
      for (let user of this.posts) {
        console.log(user.id);
        console.log(user.username);
        console.log(user.role);
        console.log(user.email);
      }
    },
    deleteUser(id) {
      console.log("USER id: ", id);
    },
  },
};
</script>

<style scoped>

:root {
  --fs-400: 1rem;
  --fs-300: 0.7rem;
}

.table {
  width: 50%;
  margin-bottom: 10px;
  border-collapse: collapse;
}
.table td,
.table th {
  padding: 10px 10px;
  border: 2px solid black;
  text-align: center;
}

.table th {
  background-color: rgb(8, 8, 80);
  color: white;
}

.table tbody tr:nth-child(even) {
  background-color: #e7e2e2;
}

@media (max-width: 700px) {
  .table thead {
    display: none;
  }
  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }
  .table tr,
  .table td {
    white-space: pre-wrap;
    word-wrap: break-word;
  }
  .table tr {
    margin-bottom: 15px;
  }
  .table td {
    text-align: right;
    padding-left: 35%;
    position: relative;
    font-size: 15px;
  }

  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
  }
}
</style>
