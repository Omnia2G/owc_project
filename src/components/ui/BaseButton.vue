<template>
  <button v-if="!link" :class="mode">
    <slot></slot>
  </button>
  <router-link v-else :to="to" :class="mode">
    <slot></slot>
  </router-link>
</template>

<script>
export default {
  props: {
    mode: {
      type: String,
      required: false,
      default: null
    },
    link: {
      type: Boolean,
      required: false,
      default: false
    },
    to: {
      type: String,
      required: false,
      default: '/'
    }
  }
}
</script>

<style scoped>
button,
a {
  text-decoration: none;
  padding: 0.75rem 1.5rem;
  font: inherit;
  background-color: #3a0061;
  border: 1px solid #3a0061;
  color: white;
  cursor: pointer;
  border-radius: 30px;
  margin-right: 0.5rem;
  display: inline-block;
  font-size: .85rem;
  max-width: 165px;
}

a:hover,
a:active,
button:hover,
button:active {
  background-color: #270041;
  border-color: #270041;
}

.flat {
  /* background-color: transparent; */
  background-color: white;
  /* color: #3a0061; */
  color: rgb(0, 0, 0);
  border: none;
}

.outline {
  background-color: transparent;
  border-color: #270041;
  color: #270041;
}

.flat:hover,
.flat:active,
.outline:hover,
.outline:active {
  /* background-color: #edd2ff; */
  background-color: beige;
}
@media (max-width: 700px) {
    button, a{
      font-size: .7rem;
      max-width: 135px;
    }
  }
  @media (max-width: 300px) {
    button, a{
      font-size: .55rem;
      max-width: 115px;
      
      
    }
  }
</style>