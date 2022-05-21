<template>
    <v-table theme="dark" fixed-header height="200px" density="compact">
      <thead>
        <tr>
          <th>Username</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td data-label="Username">{{ user.username }}</td>
          <td data-label="Role">{{ user.role }}</td>
          <td>
            <base-button class="delete" @click="editUser(user.id)"
              >Edit</base-button
            >
            <base-button class="delete" @click="deleteUser(user.id)"
              >Delete</base-button
            >
          </td>
        </tr>
      </tbody>
    </v-table>
</template>

<script>
export default {
  props: ["users"],
  emits:['delete-user', 'edit-user'],
  methods: {
    deleteUser(id) {
      this.$emit("delete-user", id);
    },
    editUser(id) {
      this.$emit("edit-user", id);
    },
  },
};
</script>


