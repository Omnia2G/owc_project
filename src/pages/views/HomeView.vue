<template>
  <section>
    <base-card>
      <h1>HOME</h1>
      <h4>in progress...</h4>
      <p>
        <span>{{ time }}</span>
      </p>
    </base-card>
  </section>
</template>

<script>
export default {
  data() {
    return {
      time: null,
    };
  },
  methods: {
    startTime() {
      const today = new Date();
      let h = today.getHours();
      let m = today.getMinutes();
      let s = today.getSeconds();
      m = this.checkTime(m);
      s = this.checkTime(s);
      
      this.time =  h + ":" + m + ":" + s;
      setTimeout(this.startTime, 1000);
    },

    checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      } // add zero in front of numbers < 10
      return i;
    },
  },
  created(){
    this.startTime();
  }
};
</script>
