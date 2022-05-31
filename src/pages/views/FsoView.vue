<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
    <base-card>
      <h1>Optická komunikácia vo voľnom priestore</h1>
      <h3>Free Space Optics (FSO)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Táto optická komunikačná technológia využíva svetlo šíriace sa voľným
          priestorom na bezdrôtový prenos dát pre telekomunikačné alebo
          počítačové siete. Voľný priestor znamená vzduch, vonkajší priestor,
          vákuum alebo niečo podobné. To je v kontraste s použitím pevných
          látok, ako je napríklad kábel s optickými vláknami. [28]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/fso2.JPG"
            alt="Ako funguje FSO"
        /></span>
        <p class="imgTitle">Ako funguje FSO [62]</p>
        <p>
          Táto technológia je užitočná tam, kde sú fyzické prepojenia
          nepraktické z dôvodu vysokých nákladov alebo iných dôvodov. [28]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/nasa1.JPG"
            alt="Krátkodobé misie NASA pre optickú komunikáciu v blízkosti Zeme 2019-2021"
        /></span>
        <p class="imgTitle">
          Krátkodobé misie NASA pre optickú komunikáciu v blízkosti Zeme
          2019-2021. [63]
        </p>
        <p>
          Optické spojenia bod-bod vo voľnom priestore možno implementovať
          pomocou infračerveného laserového svetla, aj keď je možná komunikácia
          s nízkou dátovou rýchlosťou na krátke vzdialenosti pomocou LED.
          Technológia (IrDA) je veľmi jednoduchá forma optickej komunikácie vo
          voľnom priestore. Technológia FSO je považovaná za súčasť optických
          bezdrôtových komunikačných aplikácií. Na komunikáciu medzi kozmickými
          loďami možno použiť optiku voľného priestoru. [29]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/nasa2.JPG"
            alt="Konštelácia NASA Next Generation Relay plánovaná na rok 2025"
        /></span>
        <p class="imgTitle">
          Konštelácia NASA Next Generation Relay plánovaná na rok 2025. [63]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Využitie FSO</h4>
        <ul>
          <li>
            V roku 2008 spoločnosť MRV Communications predstavila systém
            založený na optike voľného priestoru s rýchlosťou prenosu dát 10
            Gbit/s [30], ktorá pôvodne požadovala vzdialenosť 2 km pri vysokej
            dostupnosti. Toto vybavenie už nie je k dispozícií, pred koncom
            životnosti sa užitočná vzdialenosť produktu zmenila na 350 m. [31]
          </li>
          <li>
            V roku 2013 začala spoločnosť MOSTCOM sériovo vyrábať nový
            bezdrôtový komunikačný systém, ktorý mal tiež rýchlosť prenosu dát
            10 Gbit/s, ako aj vylepšený dosah až na 2,5 km, no dostať sa na
            99,99 % doby prevádzkyschopnosti dizajnéri použili RF hybridné
            riešenie, čo znamená, že rýchlosť prenosu dát klesá na extrémne
            nízku úroveň počas atmosférických porúch (zvyčajne až 10 Mb/s). V
            apríli 2014 spoločnosť s Vedecko-technologickým centrom „Fiord“
            demonštrovala prenosovú rýchlosť 30 Gb/s v laboratórnych
            podmienkach. V roku 2018 začal [32] Mostcom exportovať 30 Gb/s
            systém na svetový telekomunikačný trh.
          </li>
          <li>
            LightPointe ponúka mnoho podobných hybridných riešení ako ponuka
            MOSTCOM. [33]
          </li>
          <li>RONJA</li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>RONJA</h4>
        <p>
          (Reasonable Optical Near Joint Access) je optický komunikačný systém
          vo voľnom priestore pochádzajúci z Českej republiky, vyvinutý Karlom
          Kulhavým z Twibright Labs a uvedený na trh v roku 2001. Dáta prenáša
          bezdrôtovo pomocou lúčov svetla. Ronja možno použiť na vytvorenie 10
          Mbit/s plne duplexného eternetového spojenia bod-bod. Odhaduje sa, že
          na celom svete bolo vybudovaných 1000 až 2000 spojení. [34]
        </p>
        <p>
          Dosah základnej konfigurácie je 1,4 km. Zariadenie pozostáva z trubice
          prijímača a vysielača (optická hlava) namontovaných na pevný
          nastaviteľný držiak. Dva koaxiálne káble sa používajú na prepojenie
          inštalácie na streche s prekladačom protokolov inštalovaným v dome v
          blízkosti počítača alebo vypínača. Dosah možno predĺžiť na 1,9 km
          zdvojnásobením alebo strojnásobením potrubia vysielača.
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Modely RONJA:</h4>
        <ul>
          <li>
            Ronja Tetrapolis: Dosah 1,4 km, červené viditeľné svetlo. Pripája sa
            pomocou konektora 8P8C do sieťovej karty alebo prepínača.
          </li>
          <li>
            Ronja 10M Metropolis: Dosah 1,4 km, červené viditeľné svetlo.
            Pripája sa k rozhraniu prídavnej jednotky.
          </li>
          <li>
            Ronja Inferno: Dosah 1,25 km, neviditeľné infračervené svetlo.
          </li>
          <li>
            Ronja Benchpress: Meracie zariadenie pre vývojárov na fyzické
            meranie zosilnenia kombinácie objektív/LED a výpočet rozsahu z toho.
          </li>
          <li>
            Ronja Lopipe: Pôvodný (ukončený) dizajn využívajúci červené
            viditeľné svetlo a rozhranie RS232 pre maximálne 115 kbit/s PPP/SLIP
            prepojenie. [35]
          </li>
        </ul>
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/m52YVMn3Tfs"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          How Satellites Communicates in Space Optical Space Communication-2020
          (Technology Stories), 2020, Štvorminútové video, ktoré sa zaoberá s
          optickou komunikáciou vo vesmíre.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/dj1BnbVVEZ4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Free Space Optical Communications from QinetiQ (QinetiQ), 2021,
          Dvojminútové zostrihané video o komunikácií vo voľnom priestore v
          súčasnosti cez produkt od spoločnosti QuinetiQ.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/4tG0tMRAk0k"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Mostcom Free-Space Optics Applications (Мостком AO), 2020, Krátke
          video o tom, ako prepojiť používateľov iba pomocou laseru.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/LzNt3aoR-44"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Taara Lasers - Alphabet's Project to Beam Laser Tech to Space
          (FlowConnect), 2021, Kratšie video o projekte Taara Lasers, kde je
          ukázané ako vytvorili medzi 2 vzdialenými miestami vysokorýchlostné
          internetové spojenie pomocou technológie FSO.
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card v-if="isLoggedIn">
      <section>
        <h2>Testy pre FSO</h2>
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
            [28] Free-space optical communication
            <a
              href="https://en.wikipedia.org/wiki/Free-space_optical_communication#Usage_and_technologies"
              >Viac</a
            >
          </li>
          <li>
            [29] Schütz, Andreas; Giggenbach, Dirk (10 November 2008). "DLR
            communicates with TerraSAR-X Earth Observation satellite via laser
            beam". DLR Portal. Deutsches Zentrum für Luft und Raumfahrt (DLR) -
            German Aerospace Center. Retrieved 14 March 2018.
          </li>
          <li>
            [30] "MRV TereScope 10GE", MRV Communications 2009. Viac:
            <a
              href="https://commconnect.com/wp-content/uploads/2011/10/Terescope-10GE.pdf"
              >Link1</a
            >
            /
            <a
              href="https://web.archive.org/web/20071208035539/http://www.mrv.com/product/MRV-TS-
              004/features/"
              >Link2</a
            >
          </li>
          <li>
            [31] An end-of-life notice was posted suddenly and briefly on the
            MRV Terescope product page in 2011. All references to the Terescope
            have been completely removed from MRV's official page as of October
            27, 2014.
          </li>
          <li>
            [32] "10 Gbps Through The Air". Arto Link. Retrieved October 27,
            2014. new Artolink wireless communication system with the highest
            capacity: 10 Gbps, full duplex Artolink M1-10GE model
            <a href="http://artolink.com/page/what/">Viac</a>
          </li>
          <li>
            [33] "LightPointe main page". Archived from the original on
            2018-03-14. Retrieved October 27, 2014.
            <a
              href="https://web.archive.org/web/20180314051837/http://www.lightpointe.com/"
            ></a
            >Viac
          </li>
          <li>
            [34] Soderberg, J. (2010). "Free Space Optics in the Czech Wireless
            Community: Shedding Some Light on the Role of Normativity for
            User-Initiated Innovations". Science, Technology, and Human Values.
            36 (4): 423-450. doi:10.1177/0162243910368398.
          </li>
          <li>
            [35] "Twibright Labs : Ronja". linas.org. Retrieved 3 June 2017.
            <a
              href="https://linas.org/mirrors/atrey.karlin.mff.cuni.cz/2002.01.03/~clock/twibright/ronja/"
              >Viac</a
            >
          </li>
          <li>
            [62] How does free space optical communication by Google-X work?,
            by: Mayur Dhokchaule
            <a
              href="https://www.quora.com/How-does-free-space-optical-communication-by-Google-X-work"
              >Viac</a
            >
          </li>
          <li>
            [63] Cornwell, D.M. (2017). NASA's optical communications program
            for 2017 and beyond. 2017 IEEE International Conference on Space
            Optical Systems and Applications (ICSOS), 10-14.
            <a
              href="https://www.semanticscholar.org/paper/
              NASA's-optical-communications-program-for-2017-and-Cornwell/396bb4d0637f0c1f5f66221c61401555dd00048c"
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
      actionPayload.append("course", "fso");
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