<template>
  <li>
    <p>{{ title }}</p>
    <base-button link :to="testLink">Take Test</base-button>
  </li>
</template>

<script>
export default {
  props: ["id", "title", "course"],
  computed: {
    testLink() {
      return this.$route.path + "/test/" + this.id;
    },
  },
  mounted:{
      foo(){
          console.log("TEST ITEM COMP",this.id, this.title,  this.course);
      }
  },
};
</script>
