<template>
     <v-table theme="dark" fixed-header height="200px" density="compact">
      <thead>
        <tr>
          <th>Title</th>
          <th>Course</th>
          <th>Points</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="test in results" :key="test.id">
          <td>{{ test.testtitle }}</td>
          <td>{{ test.course }}</td>
          <td>{{ test.points }}</td>
          <td>{{ test.username }}</td>
        </tr>
      </tbody>
    </v-table>
</template>

<script>
export default {
  props: ["results"],
};
</script>


