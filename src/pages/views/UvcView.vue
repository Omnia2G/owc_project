<template>
  <section>
    <base-card>
      <h1>Ultrafialová komunikácia</h1>
      <h3>Ultraviolet Communication (UVC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>in progress...</p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <section>
        <br /><br />
        <h4>2. Odsek</h4>
        <p>in progress...</p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <section>
        <br /><br />
        <h4>3. Odsek</h4>
        <p>in progress...</p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          <li>13,5 nm: Extrémna ultrafialová litografia</li><br>
          <li>
            30-200 nm: Fotoionizácia, ultrafialová fotoelektrónová
            spektroskopia, výroba štandardných integrovaných obvodov
            fotolitografiou
          </li><br>
          <li>230-365 nm: UV-ID, sledovanie štítkov, čiarové kódy</li><br>
          <li>230-400 nm: Optické senzory, rôzne prístrojové vybavenie</li><br>
          <li>
            240-280 nm: Dezinfekcia, dekontaminácia povrchov a vody (absorpcia
            DNA má vrchol pri 260 nm), germicídne lampy [36]
          </li><br>
          <li>200-400 nm: Forenzná analýza, detekcia drog</li><br>
          <li>270-360 nm: Analýza proteínov, sekvenovanie DNA, objav liekov</li><br>
          <li>280-400 nm: Lekárske zobrazovanie buniek</li><br>
          <li>300-320 nm: Svetelná terapia v medicíne</li><br>
          <li>300-365 nm: Vytvrdzovanie polymérov a atramentov do tlačiarní</li><br>
          <li>
            350-370 nm: ploštice (muchy sú najviac priťahované svetlom pri 365
            nm) [38]
          </li>
        </ul>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Referencie</h2>
        <ul>
          <li>ref 1</li>
          <li>ref 2</li>
          <li>ref 3</li>
          <li>ref 4</li>
          <li>ref 5</li>
          <li>ref 6</li>
        </ul>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Testy pre UVC</h2>
        <ul>
          <li>test 1</li>
          <li>test 2</li>
          <li>test 3</li>
          <li>test 4</li>
          <li>test 5</li>
          <li>test 6</li>
        </ul>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
  </section>
</template>

<script>
import BaseCard from "../../components/ui/BaseCard.vue";
import BaseButton from "../../components/ui/BaseButton.vue";
export default {
  components: { BaseButton, BaseCard },
  methods: {
    moveUp() {
      window.scrollTo(0, 0);
    },
  },
};
</script>

<style scoped>
h4 {
  margin-left: 15px;
  text-align: left;
}
p {
  margin-left: 15px;
  margin-right: 15px;
  text-align: left;
}
ul li {
  margin-left: 1rem;
  margin-right: 2rem;
  text-align: left;
}
</style>
