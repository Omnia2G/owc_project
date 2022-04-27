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
          vidia infračervené žiarenie ako viditeľné. [5] Keď svetlo prechádza z
          vákua/materiálu do iného materiálu/vákua, frekvencia zostáva rovnaká,
          ale mení sa vlnová dĺžka. [5] Rôzne vlnové dĺžky ľudský mozog
          interpretuje ako farby, od fialovej s najmenšou vlnovou dĺžkou, po
          červenú s najväčšou vlnovou dĺžkou. [5]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <section>
        <br /><br />
        <h4>Viditeľná svetelná komunikácia</h4>
        <p>
          Spôsob prenosu údajov, ktorý využíva viditeľné svetlo medzi 400 a 800
          THz (780 - 375 nm), je známy ako komunikácia vo viditeľnom svetle. Na
          krátke vzdialenosti systém využíva bežné žiarovky (nie špeciálne
          komunikačné zariadenia), na prenos signálov s rýchlosťou 10 kbit/s
          alebo LED s rýchlosťou až 500 Mbit/s. Na vzdialenosť 1-2 kilometre
          môžu systémy ako RONJA vysielať plnou rýchlosťou Ethernetu (10
          Mbit/s).. Špeciálne navrhnuté elektronické zariadenia vo všeobecnosti
          obsahujúce fotodiódu prijímajú signály zo svetelných zdrojov [13],
          hoci v niektorých prípadoch postačuje aj fotoaparát mobilného telefónu
          alebo digitálny fotoaparát. [14] Obrazový snímač používaný v týchto
          zariadeniach je v skutočnosti rad fotodiód (pixelov) a v niektorých
          aplikáciách môže byť jeho použitie uprednostňované pred jednou
          fotodiódou. Takýto snímač môže poskytovať buď viackanálový (až do 1
          pixelu = 1 kanál) alebo priestorové povedomie o viacerých svetelných
          zdrojoch. [13] VLC možno použiť ako komunikačné médium pre
          všadeprítomnú výpočtovú techniku, pretože zariadenia produkujúce
          svetlo (ako sú vnútorné/vonkajšie lampy, televízory, dopravné značky,
          komerčné displeje a svetlomety/koncové svetlá automobilov [15]) sa
          používajú všade. [14]
        </p>
        <p>Podla triedenia patrý do vnútornej skupiny</p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          nepostrehnuteľná. [16] V dôsledku tejto superpozície signálov si
          implementácia vysielača VLC zvyčajne vyžaduje vysokoúčinný jednosmerný
          menič s vyšším výkonom a pomalšou odozvou zodpovedný za predpätie LED,
          ktorý zabezpečí osvetlenie spolu s nižšou účinnosťou, nižším výkonom,
          ale zosilňovač s vyššou rýchlosťou odozvy, aby sa syntetizovala
          požadovaná modulácia striedavého prúdu. Existuje niekoľko dostupných
          modulačných techník, ktoré tvoria tri hlavné skupiny: [17] Modulovaný
          prenos s jednou nosnou frekvenciou (SCMT), modulovaný prenos s
          viacerými nosnými frekvenciami (MCMT) a prenos na báze impulzov (PBT).
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          symboly priradené ku každej hodnote na svetelnom spoji. Možné techniky
          sú kľúčovanie amplitúdového prepínača (ASK), kľúčovanie fázového
          spínača (PSK) a kľúčovanie frekvenčného spínača (FSK). Z týchto troch
          je FSK schopný prenosu s väčšou bitovou rýchlosťou, keď umožňuje
          jednoduché rozlíšenie viacerých symbolov pri prepínaní frekvencií.
          Bola tiež navrhnutá dodatočná technika nazývaná kvadratúrna
          amplitúdová modulácia (QAM), kde sa amplitúda aj fáza sínusového
          napätia kľúčujú súčasne, aby sa zvýšil možný počet symbolov. [16]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          PBT. Môže byť implementovaný s jedným vysokovýkonným, vysoko účinným
          jednosmerným meničom s pomalou odozvou a prídavným vypínačom
          pracujúcim pri vysokých rýchlostiach, aby dodával prúd do LED v
          určených okamihoch. Akonáhle priemerná hodnota závisí od šírky impulzu
          dátového signálu, ten istý spínač, ktorý ovláda prenos dát, môže
          zabezpečiť ovládanie stmievania, čím sa výrazne zjednoduší jednosmerný
          prevodník. Kvôli týmto dôležitým výhodám implementácie boli tieto
          modulácie s možnosťou stmievania štandardizované v IEEE 802.15.7, v
          ktorom sú opísané tri modulačné techniky:
        </p>
        <ul>
          <li>Kľúčovanie zapnuté - vypnuté (OOK)</li>
          <li>Variabilná modulácia polohy impulzu (VPPM)</li>
          <li>Kľúčovanie farebného posunu (CSK) [20]</li>
        </ul>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          blikanie, čo je nežiaduce. Kvôli dodatočnému kompenzačnému impulzu je
          modulácia tejto vlny o niečo zložitejšia ako modulácia VPPM.
          Informácie zakódované na šírke impulzu sa však dajú ľahko rozlíšiť a
          dekódovať, takže zložitosť vysielača je vyvážená jednoduchosťou
          prijímača. [20]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
          ktorý podľa toho zvolí šírku dátových impulzov. Neprítomnosť
          kompenzačného impulzu robí VPPM o niečo jednoduchším na kódovanie v
          porovnaní s OOK. Avšak o niečo zložitejšia demodulácia kompenzuje túto
          jednoduchosť techniky VPPM. Táto zložitosť dekódovania väčšinou
          pochádza z informácií, ktoré sú kódované na rôznych stúpajúcich
          hranách pre každý symbol, čo sťažuje vzorkovanie v mikrokontroléri.
          Okrem toho, aby bolo možné dekódovať polohu impulzu v rámci dátovej
          periódy, musí byť receptor nejakým spôsobom synchronizovaný s
          vysielačom, pričom presne vie, kedy sa začína dátová perióda a ako
          dlho trvá. Tieto charakteristiky trochu sťažujú implementáciu
          demodulácie signálu VPPM. [20]
        </p>
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
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
        <!-- <span><img src="../../assets/img/0214-4.JPG" alt="vlc rozsah"></span> -->
        <!-- <span><img src="http://localhost/owc_project/src/assets/img/0214-4.jpg" alt="vlc rozsah"></span> -->
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
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
        <h2>Testy pre VLC</h2>
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
