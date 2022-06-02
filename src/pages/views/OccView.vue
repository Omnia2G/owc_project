<template>
  <base-dialog :show="!!error" title="Chyba!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
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
          trhu. [22]
        </p>
        <br />
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/Example of promising services in IEEE 802.15.7m.png"
            alt="Príklady služieb v IEEE 802.15.7m"
        /></span>
        <p class="imgTitle">Príklady služieb v IEEE 802.15.7m [8]</p>
        <br />
        <p>
          OCC sa líši od VLC a LiFi, pretože sa používajú rôzne typy prijímačov.
          Hoci sa zdá, že neexistuje žiadna všeobecne dohodnutá definícia VLC,
          táto prvá terminológia opísala komunikačné vybavenie do osvetľovacích
          zariadení, ako sú LED žiarovky. Štandard IEEE 802.15.7-2011 je dobre
          známy ako špecifikácia VLC. Po vydaní špecifikácie VLC sa vývoj LiFi
          stal ešte pokročilejším. LiFi je bežná terminológia pre obojsmernú
          vysokorýchlostnú VLC a sieťovú bezdrôtovú komunikáciu. Pretože všetky
          tri technológie OWC (OCC, VLC a LiFi) sa spoliehajú na optické vlnové
          dĺžky, neinterferujú s RF. IEEE 802.15.7m OWC dopĺňa ktorúkoľvek z
          technológií IEEE 802.11 RF vrátane bezdrôtového prístupu 802.11p pre
          automobilové prostredie a Wi-Fi. [22]
        </p>
        <p>
          V systémoch VLC a LiFi sa fotodióda používa iba na príjem dát. Naopak,
          v systémoch OCC je komunikačná funkcia kamier doplnková k ich
          primárnej funkcií, ktorou je snímanie obrazu. Bez akejkoľvek potreby
          úpravy hardvéru na pomoc komunikačným účelom je typická kamera
          pozostávajúca zo šošovky a dvojrozmerného obrazového snímača výhodná
          pre komunikáciu vďaka 23 priestorovému oddeleniu svetla od jej
          existujúcej šošovky v porovnaní s fotodiódou. V spojení s vysokým
          rozlíšením obrazu dokáže kamera demodulovať viacero svetelných
          zdrojov, ktoré sú priestorovo oddelené súčasne. Napriek týmto
          významným výhodám kamier bol OWC založený na kamere len nedávno
          prijatý v prebiehajúcej štandardizácií OWC v IEEE 802.15.7m Task Group
          (TG7m). [22]
        </p>
      </section>
      <section>
        <br />
        <h4>Typy OCC prijímačov</h4>
        <p>
          Výber kamerového prijímača ovplyvňuje výber formátov signálu
          prenášaného LED diódami. Najmä typ kamery obmedzuje výkon OCC. Preto
          musia byť kamery klasifikované podľa účinkov ich charakteristík na
          komunikačný výkon.
        </p>
        <p>
          Snímková frekvencia je primárnym determinantom získavania signálu
          kamerou. Pre jeden svetelný zdroj LED v Tx, frekvencia vzorkovania
          kamery Rx určuje, že koľko údajov je možné demodulovať podľa
          Nyquistovej teórie vzorkovania. Kamery smartfónov zvyčajne pracujú pri
          nízkej snímkovej frekvencií, napríklad 30 snímok za sekundu (fps),
          zatiaľ čo špecifické kamery môžu dosiahnuť frekvenciu 1000 snímok za
          sekundu alebo vyššiu. [22]
        </p>
        <br />
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/rx - tx.JPG"
            alt="Input output camera communication experiment setup"
        /></span>
        <p class="imgTitle">
          Input output camera communication experiment setup [8]
        </p>
        <br />
        <p>
          Mechanizmus uzávierky určuje expozíciu pixelov na obrázku. Na základe
          mechanizmu uzávierky možno kamery zaradiť do globálnych tried alebo
          tried rolovacích uzávierok. Kamery s rolovacou uzávierkou, ktoré
          postupne vystavujú 24 riadky pixelov svetlu, musia odoberať vzorky
          dostatočne rýchlo, aby rozpoznali meniacu sa intenzitu svetla
          modulovanú v rolovanom obraze. Globálne fotoaparáty s uzávierkou,
          ktoré exponujú všetky pixely súčasne, vyžadujú dostatočne rýchlu
          snímkovú frekvenciu na zistenie zmeny intenzity svetla v každej LED v
          po sebe idúcich snímkach. [22]
        </p>
        <br />
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/rx - tx block diagram.png"
            alt="Input output camera communication block diagram"
        /></span>
        <p class="imgTitle">
          Input output camera communication block diagram [8]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Klasifikácia OCC technológií</h4>
        <p>
          Doteraz sa skúmali rôzne modulačné schémy pre systémy OCC. Zvolená
          modulačná schéma závisí od Tx aj Rx. Môžeme klasifikovať schémy OCC do
          štyroch kategórií na základe nasledujúcich úvah:
        </p>
        <p>
          Metóda, ktorou kamera Rx vzorkuje modulovaný svetelný signál. Typ
          kamery, ktorá získava údaje, je kritický pre komunikáciu, takže
          komunikačný systém je obmedzený skôr špecifikáciami kamery ako Tx.
        </p>
        <p>
          Charakteristiky modulovaného svetla vnímané ľudským okom. Svetelné
          zdroje a ich modulácie musia byť zvolené vhodne, pretože primárnym
          účelom svetelného zdroja je osvetlenie, zatiaľ čo komunikácia je
          sekundárnym problémom. [22]
        </p>
        <ul>
          <li>
            <strong>Nyquistova modulácia vzorkovania:</strong> Princíp NSM je
            založený na obmedzení spínacej/obnovovacej frekvencie Rs (rolling
            shutter) Tx tak, aby bola menšia alebo rovná 0,5 snímok za sekundu,
            aby sa splnila Nyquistova vzorkovacia veta. Keďže snímková
            frekvencia je väčšinou obmedzená na 60 fps, Rs Tx je vo všeobecnosti
            nastavené na 30 Hz pre NSM. Okrem toho z dôvodu nízkej Rs Tx, ktorý
            spôsobuje vnímateľné blikanie pre ľudské oči, NSM vo všeobecnosti
            využíva digitálny displej ako Tx namiesto LED, pretože blikanie
            displeja je menej nepríjemné ako blikanie LED. Navyše jediná LED Tx
            sa v NSM nepoužíva, pretože efektívna dátová rýchlosť je obmedzená
            na menej ako 60 bps. [8]
          </li>
        </ul>
        <br />
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/nsm.png"
            alt="Nyquistova modulácia vzorkovania"
        /></span>
        <p class="imgTitle">Nyquistova modulácia vzorkovania [8]</p>
        <ul>
          <li>
            <strong>Signalizácia regiónu záujmu:</strong> Region-of-Interest
            Signaling (RoI-S) je vylepšením NSM, ktoré využíva oblasť záujmu
            (RoI) v dodatočnom spracovaní, aby sa zmenšila časť snímania obrazu.
            RoI znižuje rozlíšenie obrazu spracovávaného na Rx a tým aj
            navrhovanú metódu RoI-S ponúka efektívnejšie a rýchlejšie
            spracovanie ako OCC založené na NSM. Realizácia RoI-S je založená na
            kombinácií schém NSM a vysokorýchlostného NSM. RoI-S využíva kameru
            s nízkou frekvenciou na fixáciu oblasti záujmu a potom vykoná
            skutočný príjem pomocou vysokorýchlostného fotoaparátu využívajúci
            predtým nastavenú oblasť záujmu. Pre RoI-S je potrebné používať dve
            kamery pôvodná metóda ROI je post-processing (po dokončení
            zachytávania) a rýchlosť nemôže byť neskôr zmenené. [8]
          </li>
          <li>
            <strong>Hybridná kamera-PD modulácia:</strong>Hybridná optická
            komunikácia medzi kamerou a Pd známa ako optický komunikačný
            obrazový snímač (OCI). OCI využíva LED, kameru a Pd na zabezpečenie
            podstatne lepšej odozvy na zmenu intenzity svetla v porovnaní s
            konvenčnými zobrazovacími pixelmi. Pri OCI sa detekcia svetelného
            zdroja z obrazových buniek uskutočňuje pred vytvorením komunikačného
            spojenia a aktiváciou Pd buniek. Okrem toho je detekcia RoI
            požadovaná, avšak neexistuje žiadna signalizácia, a preto existuje
            požadovaný algoritmus založený na počítačovom videní. [8]
          </li>
          <li>
            <strong>Modulácia na báze Rs:</strong> Na zvýšenie dátovej
            priepustnosti bol vyčlenený obrazový snímač so zabudovanou foto
            diódou. Je príliš zložitý na výrobu a zatiaľ nie je komerčne
            dostupný. Prijatím Rs efektu obrazového snímača na báze CMOS je
            možné zvýšiť dátovú rýchlosť. OCC na báze Rs je druhou bežne
            používanou schémou po NSM, lebo implementácie je praktická na
            všetkých bežne dostupných kamerách založených na CMOS. Okrem toho sa
            Rs tiež nazýva Rs vzorová demodulácia v dôsledku zamerania na
            demoduláciu. [8]
          </li>
        </ul>
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/tMaR7B5M3QI"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        >
          ></iframe
        >
        <p>
          C-OOK for Optical Camera Communication 1 (auth: TrangNguyen), 2018,
          Krátke video, ktoré demonštruje kamerovú komunikáciu na menšiu
          vzdialenosť s moduláciou on-off keying.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/RrHy3V1uGSU"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Vehicular Optical Camera Communication (OCC) Demo (auth: Trang
          Nguyen), 2018, Krátka ukážka prevádzkového režimu S2-PSK zo štandardu
          IEEE 802.15.7-2018.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/WI1nRtusx2o"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Rolling-OFDM Demo Optical Camera Communication (auth: OpticalPress
          Team), 2020, Krátke video, ktoré demonštruje kamerovú komunikáciu na
          menšiu vzdialenosť s moduláciou OFDM.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/k4-EpzHixD4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Camera-On-Off-Keying (C-OOK) Demo Optical Camera Communication (auth:
          OpticalPress Team), 2020, Krátke video, ktoré demonštruje kamerovú
          komunikáciu na väčšiu vzdialenosť s moduláciou on-off keying.
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card v-if="isLoggedIn">
      <section>
        <h2>Testy pre OCC</h2>
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
          <li>
            [8] Cahyadi Willy, Chung Yeon-Ho, Ghassemlooy Zabih, Bani Hassan
            Navid. (2020). Optical Camera Communications: Principles,
            Modulations, Potential and Challenges. Electronics. 9. 1339.
            10.3390/electronics9091339.
            <a
              href="https://www.researchgate.net/figure/Overview-of-optical-wireless-communications-OWCtransmission-
                    schemes_fig2_343755508"
              >Viac</a
            >
          </li>
          <li>
            [22] What is Optical Camera Communication, by:Trang Nguyen, August
            8, 2018.
            <a
              href="https://opticalpress.com/2018/08/08/what-is-optical-camera-communication/"
              >Viac</a
            >
          </li>
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
      actionPayload.append("course", "occ");
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
