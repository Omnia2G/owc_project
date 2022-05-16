<template>
     <v-table theme="dark" fixed-header height="200px" density="compact">
      <thead>
        <tr>
          <th>Title</th>
          <th>Course</th>
          <th>Username</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="test in tests" :key="test.id">
          <td>{{ test.title }}</td>
          <td>{{ test.course }}</td>
          <td>{{ test.username }}</td>
          <td>
            <base-button class="delete" @click="editTest(test.id)"
              >Edit</base-button
            >
            <base-button class="delete" @click="deleteTest(test.id)"
              >Delete</base-button
            >
          </td>
        </tr>
      </tbody>
    </v-table>
</template>

<script>
export default {
  props: ["tests"],
  emits:['delete-test', 'edit-test'],
  data() {
    return {
    };
  },
  methods: {
    deleteTest(id){
      this.$emit("delete-test", id);
    },
    editTest(id){
      this.$emit("edit-test", id);
    },
  },
};
</script>


