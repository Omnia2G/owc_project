<template>
  <section>
    <base-card>
      <h1>Optická kamerová komunikácia</h1>
      <h3>Optical Camera Communiction (OCC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Cieľom OCC je doručiť údaje zo svetelného zdroja alebo zdrojov do
          kamery. Umelé svetlá (LED) aj kamery sú dostupné všade, kde žijú
          ľudia. Existujúca infraštruktúra bude výhodou OCC pre prijatie na
          trhu. [21] OCC sa líši od VLC a LiFi, pretože sa používajú rôzne typy
          prijímačov. Hoci sa zdá, že neexistuje žiadna všeobecne dohodnutá
          definícia VLC, táto prvá terminológia opísala komunikačné vybavenie do
          osvetľovacích zariadení, ako sú LED žiarovky. Štandard IEEE
          802.15.7-2011 je dobre známy ako špecifikácia VLC. Po vydaní
          špecifikácie VLC sa vývoj LiFi stal ešte pokročilejším. LiFi je bežná
          terminológia pre obojsmernú vysokorýchlostnú VLC a sieťovú bezdrôtovú
          komunikáciu. Pretože všetky tri technológie OWC (OCC, VLC a LiFi) sa
          spoliehajú na optické vlnové dĺžky, neinterferujú s RF. IEEE 802.15.7m
          OWC dopĺňa ktorúkoľvek z technológií IEEE 802.11 RF vrátane
          bezdrôtového prístupu 802.11p pre automobilové prostredie a Wi-Fi.
          [21] V systémoch VLC a LiFi sa fotodióda používa iba na príjem dát.
          Naopak, v systémoch OCC je komunikačná funkcia kamier doplnková k ich
          primárnej funkcií, ktorou je snímanie obrazu. Bez akejkoľvek potreby
          úpravy hardvéru na pomoc komunikačným účelom je typická kamera
          pozostávajúca zo šošovky a dvojrozmerného obrazového snímača výhodná
          pre komunikáciu vďaka 23 priestorovému oddeleniu svetla od jej
          existujúcej šošovky v porovnaní s fotodiódou. V spojení s vysokým
          rozlíšením obrazu dokáže kamera demodulovať viacero svetelných
          zdrojov, ktoré sú priestorovo oddelené súčasne. Napriek týmto
          významným výhodám kamier bol OWC založený na kamere len nedávno
          prijatý v prebiehajúcej štandardizácií OWC v IEEE 802.15.7m Task Group
          (TG7m). [21]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <section>
        <br /><br />
        <h4>Typy OCC prijímačov</h4>
        <p>
          Výber kamerového prijímača ovplyvňuje výber formátov signálu
          prenášaného LED diódami. Najmä typ kamery obmedzuje výkon OCC. Preto
          musia byť kamery klasifikované podľa účinkov ich charakteristík na
          komunikačný výkon. Snímková frekvencia je primárnym determinantom
          získavania signálu kamerou. Pre jeden svetelný zdroj LED v Tx,
          frekvencia vzorkovania kamery Rx určuje, že koľko údajov je možné
          demodulovať podľa Nyquistovej teórie vzorkovania. Kamery smartfónov
          zvyčajne pracujú pri nízkej snímkovej frekvencií, napríklad 30 snímok
          za sekundu (fps), zatiaľ čo špecifické kamery môžu dosiahnuť
          frekvenciu 1000 snímok za sekundu alebo vyššiu. [21] Mechanizmus
          uzávierky určuje expozíciu pixelov na obrázku. Na základe mechanizmu
          uzávierky možno kamery zaradiť do globálnych tried alebo tried
          rolovacích uzávierok. Kamery s rolovacou uzávierkou, ktoré postupne
          vystavujú 24 riadky pixelov svetlu, musia odoberať vzorky dostatočne
          rýchlo, aby rozpoznali meniacu sa intenzitu svetla modulovanú v
          rolovanom obraze. Globálne fotoaparáty s uzávierkou, ktoré exponujú
          všetky pixely súčasne, vyžadujú dostatočne rýchlu snímkovú frekvenciu
          na zistenie zmeny intenzity svetla v každej LED v po sebe idúcich
          snímkach. [21]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <section>
        <br /><br />
        <h4>Klasifikácia OCC technológií</h4>
        <p>
          Doteraz sa skúmali rôzne modulačné schémy pre systémy OCC. Zvolená
          modulačná schéma závisí od Tx aj Rx. Môžeme klasifikovať schémy OCC do
          štyroch kategórií na základe nasledujúcich úvah: Metóda, ktorou kamera
          Rx vzorkuje modulovaný svetelný signál. Typ kamery, ktorá získava
          údaje, je kritický pre komunikáciu, takže komunikačný systém je
          obmedzený skôr špecifikáciami kamery ako Tx. Charakteristiky
          modulovaného svetla vnímané ľudským okom. Svetelné zdroje a ich
          modulácie musia byť zvolené vhodne, pretože primárnym účelom
          svetelného zdroja je osvetlenie, zatiaľ čo komunikácia je sekundárnym
          problémom. [21]
        </p>
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
        <h2>Testy pre OCC</h2>
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
  text-align: justify;
}
</style>
