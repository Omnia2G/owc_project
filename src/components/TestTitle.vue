<template>
  <li>
   {{title}} 
    <base-button class="outline" link :to="testLink">Test</base-button>
  </li>
</template>

<script>
export default {
  props: ["id", "title", "course"],
  computed: {
    testLink() {
      return "/test/"+ this.course + "/" + this.id + "/" + this.title;
    },
  },
  
};
</script>
