<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
    <base-card>
      <h1>Infračervená svetelná komunikácia</h1>
      <h3>Infrared communication (IRC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Infračervené žiarenie má vlnovú dĺžku od 700 - 750nm do 1mm.
          International Commission on Illumination (CIE) odporúča delenie na tri
          pásma.
        </p>
        <ul>
          <h5>IR-A</h5>
          <li>
            NIR - blízke (near) infračervené žiarenie, podľa normy DIN, vlnová
            dĺžka 0,75 - 1,4 μm (mikrometer), je definované podľa vodnej
            absorpcie. [6]
          </li>
        </ul>
        <ul>
          <h5>IR-B</h5>
          <li>
            SWIR - krátkovlnné IR žiarenie (short wave), podľa DIN, vlnová dĺžka
            1,4 - 3 μm, pri 1450 nm, kedy značne narastá vodná absorpcia. [6]
          </li>
        </ul>
        <ul>
          <h5>IR-C</h5>
          <li>
            MWIR - strednovlnné IR žiarenie (medium wave), podľa DIN, tiež
            prostredné IR (intermediate IR, IIR), 3 - 8 μm.
          </li>
          <li>
            LWIR - dlhovlnné IR žiarenie (long wave), podľa DIN, 8 - 15 μm.
          </li>
          <li>FIR - ďaleké (far) infračervené žiarenie 15 - 1000 μm. [6]</li>
        </ul>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/0214-3.png"
            alt="Pásmo Infračerveného žiarenia"
        /></span>
        <p class="imgTitle">Pásmo Infračerveného žiarenia [2]</p>
      </section>
      <section>
        <br /><br />
        <h4>Pásma IR</h4>
        <p>
          Infračervené žiarenie sa často používa na prenos informácií na krátku
          vzdialenosť. S týmto cieľom sa používa pásmo 1 260 - 1 675 nm.
        </p>
        <ul>
          <li>O pásmo (Original) 1 260 - 1 360 nm</li>
          <li>E pásmo (Extended) 1 360 - 1 460 nm</li>
          <li>S pásmo (Short wavelength) 1 460 - 1 530 nm</li>
          <li>C pásmo (Conventional) 1 530 - 1 565 nm</li>
          <li>L pásmo (Long wavelength) 1 565 - 1 625 nm</li>
          <li>U pásmo (Ultralong wavelength) 1 625 - 1 675 nm</li>
        </ul>
        <p>
          C - pásmo sa využíva napríklad na nočné videnie, meranie tepla na
          diaľku, vykurovanie alebo nahrievanie (sauny, varenie). [6]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Infračervená svetelná komunikácia (IRC)</h4>
        <p>
          Infračervená komunikácia patrí medzi najjednoduchšie spôsoby
          bezdrôtovej komunikácie a slúži ako cenovo výhodný spôsob bezdrôtového
          prenosu niekoľkých bitov dát. [23]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Fungovanie infračervenej komunikácie</h4>
        <p>
          Infračervené LED diódy vytvárajú svetlo, ktoré ľudské oko nevidí.
          Vlnová dĺžka svetla je typicky okolo 950 nanometrov. IR LED však nie
          je jedinou vecou, ktorá môže vyžarovať IR alebo blízke IR vlny. Mnoho
          iných zdrojov, ako sú žiarovky a samotné slnko alebo čokoľvek s teplom
          uvoľňuje IR vlny, čo je jedna z ťažkostí pri IR komunikácií. Medzi
          odosielateľom a príjemcom sa zvyčajne neuskutočňuje žiadny handshake,
          žiadna autentifikácia ani autorizácia. [23]
        </p>
        <p>
          Pri používaní diaľkového ovládača televízora, na prenos informácií do
          televízora sa používa IR LED. Infračervený prijímač v televízore musí
          správne vybrať signály z diaľkového ovládača spomedzi všetkých
          okolitých infračervených signálov. Aby sa to mohlo uskutočniť, práve z
          tohto dôvodu je IR signál modulovaný. Modulácia signálu je ako
          priradenie vzoru k dátam, aby prijímač vedel, že čo má počúvať. [24]
        </p>
        <p>
          Bežná modulačná schéma pre IR komunikáciu je modulácia 38 kHz.
          Existuje len veľmi málo prírodných zdrojov, ktoré majú pravidelnosť
          signálu 38 kHz, takže IR vysielač odosielajúci dáta na tejto
          frekvencií vyniká medzi okolitým IR. Najbežnejšie sú 38kHz modulované
          IR dáta, ale možno použiť aj iné frekvencie. [24]
        </p>
        <p>
          Zariadenia, ktoré umožňujú infračervenú komunikáciu, sa nazývajú
          zariadenia IrDA a vyrábajú sa podľa stanovených štandardov IrDA. [23]
        </p>
        <p>
          Pri stlačení tlačidla na diaľkovom ovládači, vysielací IR LED na
          zlomok sekundy veľmi rýchlo zabliká a prenesie zakódované údaje do
          prijímača. [24]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/ir transmitter.png"
            alt="Modulovaný signál"
        /></span>
        <p class="imgTitle">Modulovaný signál [24]</p>
        <p>
          Tento modulovaný signál je presne to, čo prijímací systém vidí. Účelom
          prijímacieho zariadenia je však demodulovať signál a vydávať binárny
          priebeh, ktorý je možné prečítať mikrokontrolérom. [24]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/ir receiver.png"
            alt="Demodulovaný signál"
        /></span>
        <p class="imgTitle">Demodulovaný signál [24]</p>
        <p>
          Riadením rozostupu medzi prenášanými modulovanými signálmi môže byť
          priebeh načítaný vstupným kolíkom na mikrokontroléri a dekódovaný ako
          sériový bitový tok. [24]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/ir communication.png"
            alt="Fungovanie IR vysielača a prijímača"
        /></span>
        <p class="imgTitle">Fungovanie IR vysielača a prijímača [24]</p>
        <p>
          IrDa prijímače komunikujú pomocou impulzov infračerveného svetla
          prenášaného v smerovo zameranom kuželi, ktorý siaha do uhla 15o na
          každú stranu od stredovej čiary vysielania. Hoci norma vyžaduje
          minimálny dosah 1 meter pre štandardný výstupný výkon, komerčne
          dostupné produkty majú rozsahy od menej ako jedného metra až po
          niekoľko metrov. Komunikácia je polo duplexná, pretože prijímač
          infračerveného zariadenia je účinne "oslepený" svetlom vlastného
          prenosu. Dátové rýchlosti sa pohybujú od 9,6 Kb/s do 16 Mb/s (9,6 Kb/s
          je najmenší spoločný menovateľ pre všetky zariadenia a ako taký sa
          používa na vyjednávanie medzi komunikačnými zariadeniami). Protokol
          ultra rýchle infračervené (UFIR) podporuje prenosovú rýchlosť až 100
          Mb/s. [27]
        </p>
        <p>
          Infračervené laserové systémy možno použiť aj na komunikáciu na veľké
          vzdialenosti (až do približne 2,4 kilometrov) s maximálnou
          projektovanou dátovou rýchlosťou 16 Mb/s. Takéto systémy sú striktne
          point-to-point (LoS) systémy a sú citlivé na hmlu a iné atmosférické
          podmienky. Typické aplikácie zahŕňajú prenosové spojenia medzi
          budovami pre metropolitné siete alebo siete v areáli akademickej obce
          a vysielacie a prijímacie zariadenia sú zvyčajne umiestnené na
          strechách, aby poskytovali priame spojenie bez prekážok. Pre
          bezdrôtovú LAN konektivitu možno použiť difúzne (alebo nelineárne)
          systémy, v ktorých je spojenie medzi vysielačom a prijímačom
          udržiavané "odrážaním" prenášaných signálov od odrážajúcich povrchov,
          ako sú steny a stropy. Vysielač využíva širokouhlý vysielací lúč a
          prijímač má širokouhlý detektor. Špecifikácie pre infračervené
          bezdrôtové siete LAN sú zahrnuté v štandarde IEEE 802.11. [27]
        </p>
        <p>
          Infračervené vysielacie zariadenie, buď svetelná dióda (LED) alebo
          laserová dióda, premieňa elektrický signál na optický signál. LED
          diódy majú prirodzene širokú prenosovú cestu a sú vhodné pre aplikácie
          s krátkym dosahom. Sú tiež oveľa bezpečnejšie ako laserové diódy pre
          vnútorné použitie. Laserové diódy majú úzke vysielacie lúče a
          relatívne úzku spektrálnu šírku, vďaka čomu sú vhodnejšie pre
          aplikácie s dlhým dosahom z bodu do bodu. Väčšina systémov používa
          moduláciu intenzity s priamou detekciou (IM/DD) na dosiahnutie
          optickej modulácie a demodulácie. Okolité svetelné zdroje predstavujú
          významnú šumovú zložku na prijímači. Dostupnosť efektívnych, lacných
          LED a fotodiód pracujúcich v rozsahu 800-1000 nanometrov viedla k
          požiadavke, aby vysielače mali vlnovú dĺžku špičkového výkonu medzi
          850 a 950 nanometrami. [27]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Výhody IR</h4>
        <ul>
          <li>
            <span><strong>Jednoduchosť: </strong></span>
            Jednou z výhod infračervenej komunikácie je jednoduchosť jej
            všeobecného princípu fungovania. Táto technológia je relatívne
            jednoduchšia na implementáciu ako iné bezdrôtové komunikačné
            technológie. Používa sa teda v rade prenosných zariadení. [25]
          </li>
          <li>
            <span><strong>Lacná technológia: </strong></span>
            Jednoduchosť IR komunikácie sa ďalej premieta do nízkych nákladov na
            implementáciu. To je dôvod, prečo ide o najpoužívanejšiu bezdrôtovú
            komunikačnú technológiu pre aplikácie s krátkym dosahom a aplikácie
            typu one-on-one use case. [25]
          </li>
          <li>
            <span><strong>Obmedzené zachytenie: </strong></span>
            Infračervené žiarenie sa šíri priamočiarym spôsobom a má krátky
            dosah. Riziká odpočúvania a rušenia sú nízke v porovnaní s inými
            bezdrôtovými komunikačnými technológiami, ako sú Bluetooth, Wi-Fi a
            Wi-Fi Direct. [25]
          </li>
          <li>
            <span><strong>Energetická účinnosť: </strong></span>
            LED dióda používaná pri odosielaní infračervených lúčov má nízke
            požiadavky na energiu. Ďalej je možné celý IrDA vysielač
            prevádzkovať s malými a nenabíjateľnými batériami. Tieto batérie
            môžu vydržať mesiace. [25]
          </li>
          <li>
            <span><strong>Rozsiahle aplikácie: </strong></span>
            Okrem vzdialených senzorov má IR komunikačná technológia ďalšie
            aplikácie špecifikované IrDA. Medzi ktoré patrí používanie
            infračerveného portu na pripojenie zariadenia k lokálnej sieti
            prostredníctvom špecifikácie IrLAN, štandard bezdrôtových platieb
            prostredníctvom infračerveného finančného zasielania správ alebo
            protokolu IrFM a výmena binárnych objektov pomocou štandardu OBEX.
            [25]
          </li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Nevýhody IR</h4>
        <ul>
          <li>
            <span><strong>Šírenie priamej viditeľnosti: </strong></span>
            Jednou z charakteristík infračerveného žiarenia je, že sa pohybuje
            po značne priamej dráhe z jedného bodu do druhého alebo v priamej
            línií. Toto sa nazýva šírenie viditeľnosti a je to jedna z nevýhod
            IR komunikačnej technológie. Na rozdiel od rádiovej komunikácie musí
            byť vysielač IrDA zosúladený s prijímačom IrDA. Napríklad diaľkové
            ovládanie televízora nebude fungovať, ak nebude vysielané priamo na
            obrazovku televízora. [25]
          </li>
          <li>
            <span><strong>Krátky dosah prenosu: </strong></span>
            Infračervené žiarenie má tiež kratšie vlnové dĺžky ako mikrovlny a
            rádiové vlny. V rámci elektromagnetického spektra platí, že čím
            kratšie sú vlnové dĺžky, tým kratšie sa môže pohybovať. Štandard
            vyvinutý spoločnosťou IrDA tiež používa nízko výkonné IrDA
            vysielače. IR komunikačná technológia funguje len na krátky dosah 10
            metrov alebo menej. Okrem obmedzenia priamej viditeľnosti je
            blízkosť bezdrôtovej komunikácie cez infračervené rozhranie značne
            obmedzená. [25]
          </li>
          <li>
            <span><strong>Prekážky: </strong></span>
            Existuje tiež skutočnosť, že infračervené žiarenie nepreniká pevnými
            predmetmi, ako je betón, drevo a dokonca ani nepriehľadné plasty.
            Elektromagnetické vlny infračerveného žiarenia môžu byť okrem iného
            ovplyvnené aj dymom, hmlou, prachom a slnečným žiarením. IrDA
            vysielače sa tiež môžu navzájom rušiť. Výkon zariadenia môže
            ovplyvniť vzdialenosť aj prítomnosť prekážok alebo interferencií.
            [25]
          </li>
          <li>
            <span><strong>Bezpečnostné problémy: </strong></span>
            IR komunikácia je samozrejme značne zabezpečená kvôli prekážkam,
            dosahu a obmedzeniam priamej viditeľnosti, ktoré ju robia menej
            zraniteľnou voči odpočúvaniu. Niektoré IrDA prijímače však môžu
            reagovať na niekoľko IrDA vysielačov, najmä ak je kódovanie a prenos
            údajov nešifrované, čo vyvoláva obavy o bezpečnosti diaľkovo
            ovládaných zariadení. [25]
          </li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Využitie IR</h4>
        <p>
          Infračervené rozhranie sa používa v rôznych aplikáciách bezdrôtovej
          komunikácie, monitorovania a riadenia:
        </p>
        <ul>
          <li>Diaľkové ovládanie spotrebičov</li>
          <li>Bezdrôtové (LAN)</li>
          <li>Prepojenie medzi notebookmi a stolnými počítačmi</li>
          <li>Bezdrôtový modem</li>
          <li>Detektory narušenia</li>
          <li>Detektory pohybu</li>
          <li>Požiarne senzory</li>
          <li>Systémy nočného videnia</li>
          <li>Lekárske diagnostické zariadenia</li>
          <li>Systémy navádzania rakiet</li>
          <li>Geologické monitorovacie zariadenia</li>
        </ul>
        <p>
          Prenos IR údajov z jedného zariadenia do druhého sa niekedy označuje
          ako sústredenie do zväzku. [26]
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/uXeM6jRk6w8"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          The infrared explained! (Thunderf00t), 2019, 6 minutové video, ktoré
          vysvetluje ako funguje infračervené žiarenie.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/PtWFCzDpveQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is infrared light ? │LYNRED (LYNRED), 2020, Trojminutové
          animované video, ktoré podrobnejšie vysvetluje IR.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/hD9jT24oE40"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Infrared data transmission explained (Straco Pty Ltd), 2016, Kratšie
          ukážkové video, v ktorom Maximilian Keller vysvetľuje prenos údajov
          pomocou infračervenej technológie.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/H0AmmNS67p8"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          IR Wireless Audio Transfer (Electronoobs), 2020, Dlhšie video, ktoré
          detailnejšie vysvetľuje infračervenú komunikáciu na jednom projekte,
          kde sa s použitím IR prenáša zvuk. Poukáže aj na niektoré výhody
          IR, ako aj na rozdiel medzi optickým bezdrôtovým a káblovým spojením.
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card v-if="isLoggedIn">
      <section>
        <h2>Testy pre IRC</h2>
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
            [2] Rate and Performance Analysis of Indoor Optical Camera
            Communications in Optical Wireless Channels, by: Willy Anugrah
            Cahyadi, 5. dec. 2018.
            <a
              href="https://www.slideshare.net/willyac/thesis-presentation-wacv5slideshare"
              >Viac</a
            >
          </li>
          <li>
            [6] Infračervené žiarenie, 3. november 2021
            <a href="https://sk.wikipedia.org/wiki/Infračervené_žiarenie"
              >Viac</a
            >
          </li>
          <li>
            [23] Understanding the Basics of Infrared Communications, 1/6/2021,
            by Maker.io Staff
            <a
              href="https://www.digikey.sk/en/maker/blogs/2021/understanding-the-basics-of-infraredcommunications"
              >Viac</a
            >
          </li>
          <li>
            [24] IR Communication, by: MEMBER #23999
            <a href="https://learn.sparkfun.com/tutorials/ir-communication/all"
              >Viac</a
            >
          </li>
          <li>
            [25] Infrared Communication: Advantages and Disadvantages, Posted on
            March 13, 2021 by Marion Davies
            <a
              href="https://www.konsyse.com/articles/infrared-communication-advantages-and-disadvantages/"
              >Viac</a
            >
          </li>
          <li>
            [26] infrared transmission, By TechTarget Contributor
            <a
              href="https://www.techtarget.com/searchnetworking/definition/infrared-transmission"
              >Viac</a
            >
          </li>
          <li>
            [27] Infrared Communications Systems, Author: Christopher J. Wells,
            Published: 28-01-2009
            <a
              href="https://www.technologyuk.net/telecommunications/communicationtechnologies/
                infrared-communication.shtml"
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
      actionPayload.append("course", "irc");
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
