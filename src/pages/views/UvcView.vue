<template>
   <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
    <base-card>
      <h1>Ultrafialová komunikácia</h1>
      <h3>Ultraviolet Communication (UVC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>in progress...</p>
      </section>
      <section>
        <br /><br />
        <h4>2. Odsek</h4>
        <p>in progress...</p>
      </section>
      <section>
        <br /><br />
        <h4>3. Odsek</h4>
        <p>in progress...</p>
      </section>
      <section>
        <br /><br />
        <h4>Umelé zdroje UV svetla</h4>
        <ul>
          <li>"Čierne svetlo"</li>
          <li>Krátkovlnné ultrafialové výbojky</li>
          <li>Žiarovky</li>
          <li>Plynové výbojky</li>
          <li>Ultrafialové LED diódy</li>
          <li>Ultrafialové lasery</li>
          <li>Laditeľné vákuové ultrafialové žiarenie (VUV)</li>
          <li>Plazmatické a synchrotrónové zdroje extrémneho UV žiarenia</li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Využitie UV</h4>
        <p>
          Vďaka svojej schopnosti vyvolať chemické reakcie a vyvolať
          fluorescenciu v materiáloch má ultrafialové žiarenie množstvo
          aplikácií. Použitie špecifických pásiem vlnových dĺžok v UV spektre.
          [37]
        </p>
        <ul>
          <li>13,5 nm: Extrémna ultrafialová litografia</li>
          <li>
            30-200 nm: Fotoionizácia, ultrafialová fotoelektrónová
            spektroskopia, výroba štandardných integrovaných obvodov
            fotolitografiou
          </li>
          <li>230-365 nm: UV-ID, sledovanie štítkov, čiarové kódy</li>
          <li>230-400 nm: Optické senzory, rôzne prístrojové vybavenie</li>
          <li>
            240-280 nm: Dezinfekcia, dekontaminácia povrchov a vody (absorpcia
            DNA má vrchol pri 260 nm), germicídne lampy [36]
          </li>
          <li>200-400 nm: Forenzná analýza, detekcia drog</li>
          <li>270-360 nm: Analýza proteínov, sekvenovanie DNA, objav liekov</li>
          <li>280-400 nm: Lekárske zobrazovanie buniek</li>
          <li>300-320 nm: Svetelná terapia v medicíne</li>
          <li>300-365 nm: Vytvrdzovanie polymérov a atramentov do tlačiarní</li>
          <li>
            350-370 nm: ploštice (muchy sú najviac priťahované svetlom pri 365
            nm) [38]
          </li>
        </ul>
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card v-if="isLoggedIn">
      <section>
        <h2>Testy pre UVC</h2>
        <ul v-if="testTitles">
          <test-title
            v-for="test in titles"
            :key="test.id"
            :id="test.id"
            :title="test.title"
            :course="test.course"
          ></test-title>
        </ul>
        <h3 v-else><i>Tests not found for this course.</i></h3>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Referencie</h2>
        <ul>
          <li>[]ref 1</li>
        </ul>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
  </section>
</template>

<script>
import TestTitle from "../../components/TestTitle.vue";

export default {
  components: {
    TestTitle,
  },
  data() {
    return {
      titles: [],
      error: null,
    };
  },
  created() {
    this.loadTestTitlesForThisCourse();
  },
  computed: {
    testTitles() {
      return this.$store.getters["test/hasTests"];
    },
    isLoggedIn() {
      return this.$store.getters.isLoggedIn;
    },
  },
  methods: {
    moveUp() {
      window.scrollTo(0, 0);
    },
    async loadTestTitlesForThisCourse() {
      const actionPayload = new FormData();
      actionPayload.append("action", "getTestTitles");
      actionPayload.append("course", "uvc");
      try {
        await this.$store.dispatch("test/fetchTests", actionPayload);
        this.titles = await this.$store.getters["test/getTests"];
      } catch (error) {
        this.error = error;
      }
    },
    handleError() {
      this.error = null;
    },
  },
};
</script>