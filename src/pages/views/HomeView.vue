<template>
  <section>
    <base-card
      ><br />
      <h1>E-learningová aplikácia</h1>
      <h2>z oblasti Optickej bezdrôtovej komunikácie</h2>
      <p>
        <br />
        <span>{{ time }}</span>
      </p>
      <section class="myclass">
        <base-card class="pointer" :class="'card1'">
        <v-carousel
          hide-delimiters
          height="350"
          cycle
        >
          <v-carousel-item
            v-for="(slide, i) in slides"
            :key="i"
            :src="items[i].src"
            @click="transfer(routes[i])"
            cover
          >
            <v-sheet height="15%">
              <div class="d-flex fill-height justify-center align-center">
                <div class="text-p">{{ slide }}</div>
              </div>
            </v-sheet>
          </v-carousel-item>
        </v-carousel>
        </base-card>
      </section>
    </base-card>
  </section>
</template>

<script>
export default {
  data() {
    return {
      time: null,
      items: [
          {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/0214-4.png',
          },
          {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/Example of promising services in IEEE 802.15.7m.png',
          },
          {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/0214-3.png',
          },
          {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/nasa2.JPG',
          },
           {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/1-s2.0-S008087842100003X-f09-20-9780128230411.png',
          },
          {
            src: 'https://orosz.marketingy.eu/owc_project/src/assets/img/lifi example 2.JPG',
          },
        ],
      colors: [
        "green",
        "warning",
        "pink darken-2",
        "red lighten-1",
        "deep-purple accent-4",
        "yellow darken-4",
      ],
      slides: [
        "Viditeľná sveteľná komunikácia",
        "Optická kamerová komunikácia",
        "Infračervená komunikácia",
        "Komunikácia vo voľnom priestore",
        "Ultrafialová komunikácia",
        "Li-Fi",
      ],
      routes: ["/vlc", "/occ", "/irc", "/fso", "/uvc", "/lifi"],
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

      this.time = h + ":" + m + ":" + s;
      setTimeout(this.startTime, 1000);
    },

    checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    },
    transfer(route) {
      window.scrollTo(0, 0);
      this.$router.push(route);
    },
  },
  created() {
    this.startTime();
  },
};
</script>

<style scoped>
.pointer{
  cursor: pointer;
}
.myclass {
  max-width: 600px;
  min-width: 100px;
  padding-left: 3rem;
  padding-right: 3rem;
}

</style>
