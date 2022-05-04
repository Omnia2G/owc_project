<template>
  <section>
    <base-card>
      <h1>Viditeľná sveteľna komunikácia</h1>
      <h3>Visible Light Communication (VLC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Rozsah viditeľného svetla je zhruba od 380 - 400nm do 700 - 780nm, ale
          hranice nie je možné presne stanoviť, lebo môžu sa meniť v závislosti
          od človeka. Niektoré živočíchy vnímajú iný rozsah z
          elektromagnetického pásma. Napríklad včely majú posunutý rozsah smerom
          ku kratším vlnovým dĺžkam (ultrafialové svetlo), no niektoré plazy
          vidia infračervené žiarenie ako viditeľné. [5]
        </p>
        <p>
          Keď svetlo prechádza z vákua/materiálu do iného materiálu/vákua,
          frekvencia zostáva rovnaká, ale mení sa vlnová dĺžka. [5]
        </p>
        <p>
          Rôzne vlnové dĺžky ľudský mozog interpretuje ako farby, od fialovej s
          najmenšou vlnovou dĺžkou, po červenú s najväčšou vlnovou dĺžkou. [5]
        </p>
        <br />
        <span><img src="../../assets\img\0214-4.png" alt="vlc rozsah" /></span>
        <p class="imgTitle">Spektrum viditeľného svetla [2]</p>
      </section>
      <section>
        <br />
        <h4>Viditeľná svetelná komunikácia</h4>
        <p>
          Spôsob prenosu údajov, ktorý využíva viditeľné svetlo medzi 400 a 800
          THz (780 - 375 nm), je známy ako komunikácia vo viditeľnom svetle.
        </p>
        <p>
          Na krátke vzdialenosti systém využíva bežné žiarovky (nie špeciálne
          komunikačné zariadenia), na prenos signálov s rýchlosťou 10 kbit/s
          alebo LED s rýchlosťou až 500 Mbit/s. Na vzdialenosť 1-2 kilometre
          môžu systémy ako RONJA vysielať plnou rýchlosťou Ethernetu (10
          Mbit/s).
        </p>
        <p>
          Špeciálne navrhnuté elektronické zariadenia vo všeobecnosti obsahujúce
          fotodiódu prijímajú signály zo svetelných zdrojov [13], hoci v
          niektorých prípadoch postačuje aj fotoaparát mobilného telefónu alebo
          digitálny fotoaparát. [14] Obrazový snímač používaný v týchto
          zariadeniach je v skutočnosti rad fotodiód (pixelov) a v niektorých
          aplikáciách môže byť jeho použitie uprednostňované pred jednou
          fotodiódou. Takýto snímač môže poskytovať buď viackanálový (až do 1
          pixelu = 1 kanál) alebo priestorové povedomie o viacerých svetelných
          zdrojoch. [13]
        </p>
        <p>
          VLC možno použiť ako komunikačné médium pre všadeprítomnú výpočtovú
          techniku, pretože zariadenia produkujúce svetlo (ako sú
          vnútorné/vonkajšie lampy, televízory, dopravné značky, komerčné
          displeje a svetlomety/koncové svetlá automobilov [15]) sa používajú
          všade. [14]
        </p>
        <p>Podla triedenia patrý do vnútornej skupiny</p>
      </section>
      <section>
        <br /><br />
        <h4>Modulačné techniky</h4>
        <p>
          Na odosielanie údajov je potrebná modulácia svetla. Je to forma, v
          ktorej sa svetelný signál mení, aby predstavoval rôzne symboly. Aby
          bolo možné dáta dekódovať. Na rozdiel od rádiového prenosu modulácia
          VLC vyžaduje, aby bol svetelný signál modulovaný okolo kladnej hodnoty
          jednosmerného prúdu, ktorá je zodpovedná za svetelný aspekt lampy.
          Modulácia bude teda striedavým signálom okolo kladnej jednosmernej
          úrovne s dostatočne vysokou frekvenciou na to, aby bola pre ľudské oko
          nepostrehnuteľná. [16]
        </p>
        <p>
          V dôsledku tejto superpozície signálov si implementácia vysielača VLC
          zvyčajne vyžaduje vysokoúčinný jednosmerný menič s vyšším výkonom a
          pomalšou odozvou zodpovedný za predpätie LED, ktorý zabezpečí
          osvetlenie spolu s nižšou účinnosťou, nižším výkonom, ale zosilňovač s
          vyššou rýchlosťou odozvy, aby sa syntetizovala požadovaná modulácia
          striedavého prúdu.
        </p>
        <p>
          Existuje niekoľko dostupných modulačných techník, ktoré tvoria tri
          hlavné skupiny: [17] Modulovaný prenos s jednou nosnou frekvenciou
          (SCMT), modulovaný prenos s viacerými nosnými frekvenciami (MCMT) a
          prenos na báze impulzov (PBT).
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Modulovaný prenos s jedným nosičom</h4>
        <p>
          Modulovaný prenos s jednou nosnou frekvenciou (SCMT) zahŕňa modulačné
          techniky zavedené pre tradičné formy prenosu, ako je rádio. K úrovni
          osvetlenia sa pridáva sínusová vlna, ktorá umožňuje kódovanie
          digitálnych informácií do charakteristík vlny. Kľúčovaním medzi dvoma
          alebo niekoľkými rôznymi hodnotami danej charakteristiky sa prenášajú
          symboly priradené ku každej hodnote na svetelnom spoji.
        </p>
        <p>
          Možné techniky sú kľúčovanie amplitúdového prepínača (ASK), kľúčovanie
          fázového spínača (PSK) a kľúčovanie frekvenčného spínača (FSK). Z
          týchto troch je FSK schopný prenosu s väčšou bitovou rýchlosťou, keď
          umožňuje jednoduché rozlíšenie viacerých symbolov pri prepínaní
          frekvencií. Bola tiež navrhnutá dodatočná technika nazývaná
          kvadratúrna amplitúdová modulácia (QAM), kde sa amplitúda aj fáza
          sínusového napätia kľúčujú súčasne, aby sa zvýšil možný počet
          symbolov. [16]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Modulovaný prenos s viacerými nosičmi</h4>
        <p>
          Modulovaný prenos s viacerými nosnými frekvenciami (MCMT) pracuje na
          rovnakom spôsobe ako modulovaný prenos s jednou nosnou frekvenciou,
          ale obsahuje dve alebo viac sínusových vĺn modulovaných na prenos dát.
          [18] Tento typ modulácie patrí medzi najťažšie a najzložitejšie na
          syntetizovanie a dekódovanie. Predstavuje však výbornú výhodu pri
          viaccestnom prenose, kde receptor nie je v priamom dohľade s
          vysielačom, a preto je prenos závislý od odrazu svetla v iných
          bariérach. [20]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Prenos na báze impulzov</h4>
        <p>
          Prenos založený na impulzoch (PBT) zahŕňa modulačné techniky, v
          ktorých sa údaje kódujú nie na sínusovej vlne, ale na pulznej vlne. Na
          rozdiel od sínusových striedavých signálov, v ktorých bude periodický
          priemer vždy nulový, budú pulzné vlny založené na stavoch vysoká-nízka
          dediť priemerné hodnoty. To prináša dve hlavné výhody pre modulácie
          PBT.
        </p>
        <p>
          Môže byť implementovaný s jedným vysokovýkonným, vysoko účinným
          jednosmerným meničom s pomalou odozvou a prídavným vypínačom
          pracujúcim pri vysokých rýchlostiach, aby dodával prúd do LED v
          určených okamihoch.
        </p>
        <p>
          Akonáhle priemerná hodnota závisí od šírky impulzu dátového signálu,
          ten istý spínač, ktorý ovláda prenos dát, môže zabezpečiť ovládanie
          stmievania, čím sa výrazne zjednoduší jednosmerný prevodník.
        </p>
        <p>
          Kvôli týmto dôležitým výhodám implementácie boli tieto modulácie s
          možnosťou stmievania štandardizované v IEEE 802.15.7, v ktorom sú
          opísané tri modulačné techniky:
        </p>
        <ul>
          <li>Kľúčovanie zapnuté - vypnuté (OOK)</li>
          <li>Variabilná modulácia polohy impulzu (VPPM)</li>
          <li>Kľúčovanie farebného posunu (CSK) [20]</li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Kľúčovanie zapnuté-vypnuté</h4>
        <p>
          Pri tejto technike sa LED dióda opakovane zapína a vypína a symboly sú
          rozlíšené podľa šírky impulzu, pričom širší impulz predstavuje logickú
          vysokú „1“, zatiaľ čo užšie impulzy predstavujú logickú nízku „0“.
          Pretože údaje sú zakódované na šírke impulzu, odosielaná informácia
          ovplyvní úroveň stmievania, ak nie je opravená: napríklad bitový tok s
          niekoľkými vysokými hodnotami „1“ sa bude javiť jasnejšie ako bitový
          tok s niekoľkými nízkymi hodnotami „0“. Aby sa tento problém vyriešil,
          modulácia vyžaduje kompenzačný impulz, ktorý sa vloží do dátovej
          periódy vždy, keď je to potrebné na celkové vyrovnanie jasu.
          Nedostatok tohto kompenzačného symbolu by mohol spôsobiť vnímané
          blikanie, čo je nežiaduce.
        </p>
        <p>
          Kvôli dodatočnému kompenzačnému impulzu je modulácia tejto vlny o
          niečo zložitejšia ako modulácia VPPM. Informácie zakódované na šírke
          impulzu sa však dajú ľahko rozlíšiť a dekódovať, takže zložitosť
          vysielača je vyvážená jednoduchosťou prijímača. [20]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Variabilná modulácia polohy impulzu</h4>
        <p>
          Variabilná poloha impulzu tiež opakovane zapína a vypína LED, ale
          kóduje symboly na pozíciu impulzu v dátovej perióde. Kedykoľvek sa
          impulz nachádza na bezprostrednom začiatku dátovej periódy, prenášaný
          symbol je štandardizovaný ako logická nízka '0', pričom logická vysoká
          '1' sa skladá z impulzov, ktoré končia dátovou periódou. Pretože
          informácia je zakódovaná v mieste impulzu v dátovej perióde, oba
          impulzy môžu a budú mať rovnakú šírku, a preto nie je potrebný žiadny
          kompenzačný symbol. Stmievanie je vykonávané vysielacím algoritmom,
          ktorý podľa toho zvolí šírku dátových impulzov.
        </p>
        <p>
          Neprítomnosť kompenzačného impulzu robí VPPM o niečo jednoduchším na
          kódovanie v porovnaní s OOK. Avšak o niečo zložitejšia demodulácia
          kompenzuje túto jednoduchosť techniky VPPM. Táto zložitosť dekódovania
          väčšinou pochádza z informácií, ktoré sú kódované na rôznych
          stúpajúcich hranách pre každý symbol, čo sťažuje vzorkovanie v
          mikrokontroléri. Okrem toho, aby bolo možné dekódovať polohu impulzu v
          rámci dátovej periódy, musí byť receptor nejakým spôsobom
          synchronizovaný s vysielačom, pričom presne vie, kedy sa začína dátová
          perióda a ako dlho trvá. Tieto charakteristiky trochu sťažujú
          implementáciu demodulácie signálu VPPM. [20]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Kľúčovanie farebného posunu</h4>
        <p>
          Kľúčovanie farebného posunu (CSK), uvedené v štandarde IEEE 802.15.7,
          je modulačná schéma pre VLC založená na modulácií intenzity. CSK je
          založený na intenzite, pretože modulovaný signál nadobudne okamžitú
          farbu rovnajúcu sa fyzickému súčtu troch (červená/zelená/modrá)
          okamžitých intenzít LED. Tento modulovaný signál okamžite preskočí zo
          symbolu na symbol cez rôzne viditeľné farby, preto možno CSK chápať
          ako formu frekvenčného posunu. Táto okamžitá zmena prenášanej farby
          však nemá byť ľudsky vnímateľná z dôvodu obmedzenej časovej citlivosti
          ľudského zraku - kritického prahu splynutia blikania (CFF) a
          kritického prahu splynutia farieb (CCF) obe z ktorých nedokáže
          vyriešiť časové zmeny kratšie ako 0,01 sekundy. Vysielanie LED diód je
          preto prednastavené na časový priemer (cez CFF a CCF) na konkrétnu
          časovo konštantnú farbu. Ľudia tak môžu vnímať iba túto prednastavenú
          farbu, ktorá sa v priebehu času javí ako konštantná, ale nedokážu
          vnímať okamžitú farbu, ktorá sa v čase rýchlo mení. Jednoducho CSK
          prenos udržuje konštantný časovo spriemerovaný svetelný tok, aj keď
          jeho sekvencia symbolov sa rýchlo mení v chromatickosti. [19]
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/O0PawPSdk28"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Light waves, visible and invisible - Lucianne Walkowicz (Ted-Ed),
          2013, Animované video dlhé 6 minút, ktoré sa zaoberá s tým, že ako
          vníma ľudské telo svetlo.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/KnIualWf6Rs"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          GCSE Physics - Visible Light and Colour #71 (Cognito), 2020, 5
          minutové video, ktoré vysvetluje ako funguje viditelné svetlo, a prečo
          vidíme dané farby.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/m4t7gTmBK3g"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is the Electromagnetic Spectrum? (MonkeySee), 2013, Dvojminútové
          animované video, kde Emerald Robinson vysvetľuje, čo je
          elektromagnetické spektrum.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/BUYeQa_-ojk"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is Light - Physics (The Real Physics), 2017, Krátke, trojminútové
          animované video o svetle.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/1bpmI3wdqW8"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          ELECTROMAGNETIC SPECTRUM (7activestudio), 2017, Trojminútové animované
          video, ktoré podrobnejšie vysvetľuje elektromagnetické vlny.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/7F6fT5p5oFk"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is the ELECTROMAGNETIC SPECTRUM (MooMooMath and Science), 2020,
          Krátke zostrihané video, ktoré sa zaoberá s veľkosťami vĺn v
          jednotlivých segmentoch elektromagnetického spektra.
        </p>
        <br />
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
          <br />
          <li>
            [5] Viditeľné svetlo, by: unknown, 5. október 2021
            <a href="https://sk.wikipedia.org/wiki/Viditeľné _svetlo">Viac</a>
          </li>
          <br />
          <li>[13] "Image Sensor Communication". VLC Consortium</li>
          <br />
          <li>
            [14] "About Visible Light Communication". VLC Consortium. December
            3, 2009.
          </li>
          <br />
          <li>
            [15] "Intelligent Transport System - Visible Light Communication".
            VLC Consortium. January 28, 2010.
          </li>
          <br />
          <li>
            [16] Rodríguez, Juan; Lamar, Diego G.; Aller, Daniel G.; Miaja,
            Pablo F.; Sebastián, Javier (April 2018). "Efficient Visible Light
            Communication Transmitters Based on Switching-Mode dc-dc
            Converters". Sensors. 18 (4): 1127. Bibcode:2018Senso..18.1127R.
            doi:10.3390/s18041127. PMC 5948605. PMID 29642455.
          </li>
          <br />
          <li>
            [17] Sebastian, Javier; Lamar, Diego G.; Aller, Daniel G.;
            Rodriguez, Juan; Miaja, Pablo F. (September 2018). "On the Role of
            Power Electronics in Visible Light Communication". IEEE Journal of
            Emerging and Selected Topics in Power Electronics. 6 (3): 1210-1223.
            doi:10.1109/JESTPE.2018.2830878. hdl:10651/46845. ISSN 2168-6777.
            S2CID 19092607.
          </li>
          <br />
          <li>
            [18] Rodreguez, Juan; Lamar, Diego G.; Aller, Daniel G.; Miaja,
            Pablo F.; Sebastian, Javier (June 2018). "Power-Efficient VLC
            Transmitter Able to Reproduce Multi-Carrier Modulation Schemes by
            Using the Output Voltage Ripple of the HB-LED Driver". 2018 IEEE
            19th Workshop on Control and Modeling for Power Electronics
            (COMPEL). Padua: IEEE: 1-8. doi:10.1109/COMPEL.2018.8460175.
            hdl:10651/48039. ISBN 978-1-5386-5541-2. S2CID 52289901.
          </li>
          <br />
          <li>
            [19] Aziz, Amena Ejaz; Wong, Kainam Thomas; Chen, Jung-Chieh (2017).
            "Color-Shift Keying—How itItsargest Obtainable "Minimum Distance"
            Depends on its Preset Operating Chromaticity and Constellation
            Size". Journal of Lightwave Technology. 35 (13): 2724-2733.
            Bibcode:2017JLwT...35.2724A. doi:10.1109/JLT.2017.2693363.
            hdl:10397/76267. S2CID 13698944.
          </li>
          <br />
          <li>
            [20] Visible light communication
            <a href="https://en.wikipedia.org/wiki/Visible_light_communication"
              >Viac</a
            >
          </li>
        </ul>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card>
      <section>
        <h2>Testy pre VLC</h2>
        <ul v-if="testTitles">
          <test-item
            v-for="test in displayTestTitlesForThisCourse"
            :key="test.id"
            :id="test.id"
            :title="test.title"
            :course="test.course"
          ></test-item>
          <!-- <li>{{displayTestTitlesForThisCourse}}</li> -->
        </ul>
        <h3 v-else>No Tests found.</h3>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
  </section>
</template>

<script>
import "../../css/TopicPageLayout.css";
import TestItem from '../../components/TestItem.vue';

export default {
  components:{
    TestItem
  },
  data() {
    return {
      titles:[],
    };
  },
  computed: {
    testTitles(){
      console.log('HASTESTS: ',this.$store.getters['test/hasTests']);
      return this.$store.getters['test/hasTests'];
    },
  },
  methods: {
    moveUp() {
      window.scrollTo(0, 0);
    },
    async displayTestTitlesForThisCourse() {
      const actionPayload = new FormData();
      actionPayload.append("action", "getTestTitles");
      actionPayload.append("course", "vlc");

      try {
        await this.$store.dispatch("test/displayTestsInTopics", actionPayload);
        const tests = await this.$store.getters["test/getTests"];
        
          

        tests.forEach((test) => {
          console.log(test.id);
          console.log(test.title);
          console.log(test.course);
          
        });
        
        return tests;
      } catch (error) {
        console.log("ERROR: ", error);
      }
    },

  },
  created() {
    this.displayTestTitlesForThisCourse();
  },
};
</script>
