<template>
  <base-dialog :show="!!error" title="Chyba!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
    <base-card>
      <h1>Ultrafialová komunikácia</h1>
      <h3>Ultraviolet Communication (UVC)</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Ultrafialové žiarenie má vlnovú dĺžku od 100 do 400nm (nanometrov).
          Toto pásmo svetelného žiarenia sa skladá z 3 podskupín.
        </p>
        <ul>
          <h5>UV-C</h5>
          <li>
            Má najmenšiu vlnovú dĺžku 100 - 280nm, najväčšiu časť pohlcuje
            ozónová vrstva a zvyšnú časť atmosféra. Využíva sa na čistenie vody,
            lebo je smrteľná pre väčšinu mikroorganizmov, je silno karcinogénny.
            [3]
          </li>
        </ul>
        <ul>
          <h5>UV-B</h5>
          <li>
            Jeho vlnová dĺžka je 280 - 315nm, má najvýraznejšie biologické
            účinky pomáha ľudskému telu vytvárať vitamín D, môže spôsobiť kožné
            ochorenia.Počas roka nie sú rovnako intenzívne, najsilnejšie sú v
            letných mesiacoch okolo obeda. [4]
          </li>
        </ul>
        <ul>
          <h5>UV-A</h5>
          <li>
            Má najdlhšiu vlnovú dĺžku 315 - 400nm, neprehrieva kožu ale preniká
            hlbšie, môže za jej predčasné starnutie, je stále prítomný, bez
            ohľadu na obdobie alebo počasie. [4]
          </li>
        </ul>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/0214-5.png"
            alt="Pásmo Ultrafialového žiarenia"
        /></span>
        <p class="imgTitle">Pásmo ultrafialového žiarenia [2]</p>
      </section>
      <section>
        <br /><br />
        <h4>3.8. Ultrafialová komunikácia (UVC)</h4>
        <p>
          Komunikačná technika UVC využíva UV žiarenie na prenos signálov, ktoré
          môžu byť rozptýlené a odrazené časticami a aerosólmi plávajúcimi vo
          vzduchu. Prenosový dosah môže byť rozšírený až na niekoľko kilometrov
          bez ohľadu na topografické vlastnosti na zemi. V porovnaní s tradičnou
          bezdrôtovou komunikáciou má UVC niekoľko jedinečných vlastností, ktoré
          z neho robia sľubnú komunikačnú techniku pre budúce aplikácie. [38]
        </p>
        <p>
          Tradičná bezdrôtová komunikácia vyžaduje komunikačný kanál bez
          prekážok medzi vysielačmi a prijímačmi, zatiaľ čo UVC môže tieto
          prekážky ľahko obísť rozptylom a odrazom. UV žiarenie využívané v
          komunikácii sa nazýva aj slnečné slepé žiarenie, ktoré sa v hlbokom
          ultrafialovom DUV spektre nachádza medzi 200-280 nm. Väčšina slnečného
          žiarenia je absorbovaná ozónom a kyslíkom pri prechode atmosférou, čo
          zanecháva komunikačný kanál s nízkym šumom v blízkosti zeme. Sila DUV
          žiarenia exponenciálne klesá s prenosovou vzdialenosťou, čo obmedzuje
          jeho šírenie a robí z neho ideálnu možnosť pre komunikáciu na krátku
          vzdialenosť. V scenároch bez rádiového signálu môže UVC fungovať ako
          alternatíva ku konvenčnej bezdrôtovej komunikácií.[38]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/1-s2.0-S008087842100003X-f09-20-9780128230411.png"
            alt="NLoS UVC komunikácia"
        /></span>
        <p class="imgTitle">NLoS UVC komunikácia [39]</p>
      </section>
      <section>
        <br /><br />
        <h4>Konfigurácia UVC</h4>
        <p>
          V typickej konfigurácií vysielaciu stranu tvoria generátor signálu,
          prúdové zdroje, modulačné obvody a svetelné zdroje ako DUV LED, DUV
          lasery alebo ortuťové výbojky. Elektrické signály zo signálneho
          generátora sú kódované modulačným obvodom a konvertované na
          vysokofrekvenčné prúdy. Potom sú vysokofrekvenčné prúdy zosilnené
          prúdovými zdrojmi a privádzané do svetelných zdrojov na generovanie
          svetelných signálov. [38]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/typical UVC schema.PNG"
            alt="Typická schéma ultrafialovej komunikácie"
        /></span>
        <p class="imgTitle">Typická schéma ultrafialovej komunikácie [38]</p>
        <br />
        <p>
          Prijímaciu stranu tvorí solárny clonový filter, UV detektory,
          zosilňovač signálu, demodulátor a pod. Svetelný signál zachytený UV
          detektorom sa premení naspäť na elektrický signál. Po demodulácií a
          rekonštrukcií bude signál obnovený. [38]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Umelé zdroje UVC :</h4>
        <ul>
          <li>
            <strong>Plynové výbojky:</strong> Medzi najpoužívanejšie UV plynové
            výbojky patria vysokotlakové a nízkotlakové ortuťové výbojky, UV
            halogénové výbojky a ortuťové xenónové výbojky. Účinnosť konverzie
            nízkotlakovej ortuťovej výbojky môže dosiahnuť až 30 % - 40 %. [38]
          </li>
          <br />
          <li>
            <strong>Ultrafialové lasery:</strong> Hoci plynové výbojky majú
            veľké výhody vo výstupnom výkone, stále trpia krehkosťou a krátkou
            životnosťou. Výskumníci sa preto začali obracať na iné zdroje, ako
            je DUV laser. [38]
          </li>
          <br />
          <li>
            <strong>Ultrafialové LED diódy:</strong> Ako nízko nákladové a
            vysokoúčinné optoelektronické zariadenie bez znečistenia nahrádzajú
            LED diódy na báze AlGaN (nitrid hliníka a gália) konvenčné ortuťové
            výbojky ako zdroje DUV svetla v mnohých aplikáciách, ako je
            sterilizácia, vytvrdzovanie a lekárska diagnostika. [38]
          </li>
        </ul>
        <br />
        <p>
          S nedávnym pokrokom v DUV LED dosiahli bezprecedentnú úroveň rýchlosti
          prenosu dát a prenosového rozsahu. Viac a viac výskumných skupín si
          zvolí DUV LED namiesto iných zdrojov kvôli vyššej modulačnej rýchlosti
          a menšej veľkosti čipu. LED diódy založené na AlGaN stále trpia
          relatívne nízkym výstupným výkonom a nízkou kvantovou účinnosťou v
          dôsledku vysokého obsahu hliníka. [38]
        </p>
      </section>
      <section>
        <br /><br />
        <h4>Využitie UVC:</h4>
        <p>
          UVC má veľa potenciálnych aplikácií v podvodnej komunikácií, ako aj v
          komunikácií vo vozidlách a tiež v komunikácií medzi strojmi.
          Frekvenčné pásmo používané v UVC je oveľa vyššie ako pri
          rádiofrekvenčnej (RF) komunikácií, tým pádom tradičnú technológiu
          elektromagnetického rušenia (EMI) a technológiu zachytávania signálu
          nemožno použiť na UVC, čo zaručuje dôverné a nerušené komunikačné
          prostredie. [38]
        </p>
        <br />
        <ul>
          <li>
            <strong>Aplikácie na bojisku:</strong> Na bojisku je niekedy
            potrebné vypnúť rádio. Za týchto okolností na komunikáciu na krátku
            vzdialenosť sú zvyčajne použité gestá alebo kódové slová.
            Alternatíva UVC umožní komunikáciu unicast, multicast a broadcast. V
            konvenčných taktických operáciách komunikácia často vyžaduje kábel,
            ale nastavenie kábla vyžaduje dodatočný čas, ktorý výrazne obmedzuje
            rýchlosť a manévrovateľnosť operácie. Zatiaľ čo systémy UVC možno
            nastaviť rýchlo a bez potreby kábla. [38]
          </li>
          <br />
          <li>
            <strong>Systémy riadenia letu:</strong> môžu byť použité systémoch
            pri vzlete medzi riadiacimi vežami lietadlových lodí a lietadlami.
            Vysielače môžu byť namontované na mostík lietadlovej lode na
            vyžarovanie UV svetelných signálov horizontálne na palubu a každé
            lietadlo je vybavené malým prijímačom na zber signálov
            distribuovaných vo vzduchu. Svetelný signál z vysielačov dokáže
            osvetliť celú letovú palubu, aby sa lietadlo mohlo voľne pohybovať a
            súčasne prijímať signály. [38]
          </li>
          <br />
          <li>
            <strong>Komunikácia leteckej čaty:</strong> Systémy UVC možno použiť
            na bezpečnú komunikáciu medzi leteckým tímom. V tomto prípade je
            každé lietadlo vybavené systémom vysielača a prijímača. Vysielač
            vyžaruje svetelné signály v horizontálnom smere a prijímač je
            namontovaný smerom k oblohe, aby zbieral rozptýlené UV signály, aby
            sa vytvorila elektromagneticky tichá a bezpečná interná komunikácia.
            [38]
          </li>
        </ul>
        <br />
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/QALt_ja2HGY"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          UV Light as Fast As Possible (Techquickie), 2016, 5 minútové video,
          ktoré sa zameriava na využitie, výhody a nevýhody ultrafialového
          žiarenia.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/HVKgiue_e0g"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Ultraviolet communication for secure networks (Today's Sciencology),
          2020, Kratšie video o nízkej pravdebodobnosti odhalenia ultrafialovej
          komunikácie.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/u-97FDd3k48"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is Ultraviolet? (ZEISS Vision Care Singapore), 2018, 3 minútové
          animované video o ultrafialovom žiarení.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/q_CxKQC-zpg"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          GCSE Physics - Visible and UV Light #67 (Cognito), 2020, 5 animované
          minútové video, ktoré podrobnejšie vysvetľuje UV.
        </p>
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
            [3] Využitie UV žiarenia v jazierku
            <a
              href="https://www.zahradnejazierka.sk/zahradne-jazierka/clanky/detail/uv-c-v-zahradnom-jazierku"
              >VIac</a
            >
          </li>
          <li>
            [4] Ultrafialové žiarenie, by: Sonicka1318, 21. apr. 2013.
            <a
              href="https://referaty.aktuality.sk/ultrafialove-ziarenia/referat-29857"
              >Viac</a
            >
          </li>
          <li>
            [38] Liang Guo, Yanan Guo, Junxi Wang, Tongbo Wei, Ultraviolet
            communication technique and its application, Journal of
            Semiconductors, 2021, 42(8): 081801. doi:
            10.1088/1674-4926/42/8/081801.
            <a
              href="http://www.jos.ac.cn/article/doi/10.1088/1674-4926/42/8/081801"
              >Viac</a
            >
          </li>
          <li>
            [39] P. Tian, Jonathan J.D. McKendry, J. Herrnsdorf, S. Zhu, Erdan
            Gu, Nicolas Laurand, Martin D. Dawson, Chapter Nine - Micro-LED
            based optical wireless communications systems, Editor(s): Hongxing
            Jiang, Jingyu Lin, Semiconductors and Semimetals, Elsevier, Volume
            106, 2021, Pages 281-321, ISSN 0080-8784, ISBN 9780128230411,
            <a href="https://doi.org/10.1016/bs.semsem.2021.01.003">Viac 1</a> /
            <a
              href="https://www.sciencedirect.com/science/article/pii/S008087842100003X"
              >Viac 2</a
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
