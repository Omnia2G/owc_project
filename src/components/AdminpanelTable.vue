<template>
  <base-card>
    <h2>Users</h2>
    <v-table theme="dark" fixed-header height="200px" density="compact">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
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
    </v-table>
    <br><br><br>
    <h2>Tests</h2>
     <v-table theme="dark" fixed-header height="200px" density="compact">
      <thead>
        <tr>
          <th>Username</th>
          <th>Title</th>
          <th>Course</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="test in tests" :key="test.id">
          <td>{{ test.username }}</td>
          <td>{{ test.title }}</td>
          <td>{{ test.course }}</td>
          <td>
            <base-button class="delete" @click="deleteTest(test.id)"
              >Delete</base-button
            >
          </td>
        </tr>
      </tbody>
    </v-table>
    <br><br><br>
    
  </base-card>
</template>

<script>
export default {
  props: ["users", "tests"],
  emits:['delete-user', 'delete-test'],
  data() {
    return {
      page: 1,
    };
  },
  methods: {
    deleteUser(id) {
      this.$emit("delete-user", id);
    },
    deleteTest(id){
      this.$emit("delete-test", id);
    },
  },
};
</script>


