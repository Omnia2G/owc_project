<template>
  <base-dialog :show="!!error" title="Error occured!" @close="handleError">
    <p>{{ error }}</p>
  </base-dialog>
  <section class="view">
    <base-card>
      <h1>LI-FI</h1>
      <h3>Light-Fidelity</h3>
      <section>
        <br /><br />
        <h4>Úvod</h4>
        <p>
          Je bezdrôtová technológia, ktorá je kľúčom k riešeniu problémov,
          ktorým čelí 5G. Môže prenášať niekoľko gigabitov, je spoľahlivejšie,
          prakticky bez rušenia a jedinečne bezpečnejšie ako rádiové
          technológie, ako je Wi-Fi alebo mobilné pripojenie. Táto technológia
          je podporovaná globálnym ekosystémom spoločností, ktoré podporujú
          prijatie LiFi, ďalšej generácie bezdrôtového pripojenia, ktoré je
          pripravené na bezproblémovú integráciu do jadra 5G.[40]
        </p>
        <p>
          Rádiofrekvenčná komunikácia vyžaduje rádiové obvody, antény a zložité
          prijímače, ale LiFi je oveľa jednoduchší a využíva metódy priamej
          modulácie podobné tým, ktoré sa používajú v lacných IrDA zariadeniach,
          ako sú diaľkové ovládače.[40]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/lifi example 2.JPG"
            alt="LED žiarovky s technológiou LiFi"
        /></span>
        <p class="imgTitle">LED žiarovky s technológiou LiFi [40]</p>
        <p>
          LED žiarovky majú vysokú intenzitu, a preto môžu dosiahnuť veľmi
          vysoké rýchlosti dátového prenosu. Tieto žiarovky sú polovodičové
          zariadenia, čo znamená, že jas svetla, ktoré nimi prechádza, sa dá
          extrémne rýchlo meniť. To umožňuje vysielať signál modulovaním svetla
          rôznymi rýchlosťami. Signál potom môže byť prijatý detektorom, ktorý
          interpretuje zmeny intenzity svetla ako dáta.[40]
        </p>
        <p>
          Intenzita modulácie nie je zachytiteľná ľudským okom, a preto je
          komunikácia rovnako plynulá ako v iných rádiových systémoch, čo
          umožňuje užívateľom pripojiť sa tam, kde je k dispozícií LiFi
          svetlo.[40]
        </p>
        <p>
          Ak je svetlo v danom priestore vypnuté, LiFi pripojenie tam
          neexistuje. Technológia však umožňuje znížiť intenzitu svetla na takú
          nízku hodnotu, že miestnosť sa bude zdať tmavá, napriek tomu stále sa
          v nej budú pomocou LiFi prenášať údaje. Stabilný výkon sa dosahuje
          medzi 10% a 90% osvetlenia.[40]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/lifi example 3.JPG"
            alt="LiFi sieť"
        /></span>
        <p class="imgTitle">LiFi sieť [41]</p>
      </section>
      <section>
        <br /><br />
        <h4>Štandardy</h4>
        <p>
          Jedna časť VLC je modelovaná podľa komunikačných protokolov
          vytvorených pracovnou skupinou IEEE 802. Norma IEEE 802.15.7 je však
          zastaralá. Nezohľadňuje najnovší technologický vývoj v oblasti
          optickej bezdrôtovej komunikácie, konkrétne so zavedením metód
          modulácie optického ortogonálneho multiplexovania s frekvenčným
          delením (O-OFDM), ktoré boli optimalizované pre rýchlosť prenosu dát,
          viacnásobný prístup a energetickú účinnosť. Zavedenie O-OFDM znamená,
          že je potrebná nová štandardizácia optickej bezdrôtovej
          komunikácie.[43]
        </p>
        <p>
          802.11 Light Communications Amendment - Task Group "bb". Cieľom tejto
          skupiny je rozšíriť 802.11 o svetelné médium. Skupina chce poskytnúť
          nový štandard 802.11bb do polovice roku 2021.[42]
        </p>
        <p>
          Napriek tomu štandard IEEE 802.15.7 definuje fyzickú vrstvu (PHY) a
          vrstvu riadenia prístupu k médiám (MAC). Štandard je schopný poskytnúť
          dostatočné rýchlosti prenosu dát na prenos zvuku, videa a
          multimediálnych služieb. Zohľadňuje mobilitu optického prenosu, jeho
          kompatibilitu s umelým osvetlením prítomným v infraštruktúrach a
          rušenie, ktoré môže generovať okolité osvetlenie. Vrstva MAC umožňuje
          použitie prepojenia s ostatnými vrstvami ako pri protokole TCP/IP.[61]
        </p>
        <p>Štandard definuje tri vrstvy PHY s rôznymi rýchlosťami:</p>
        <ul>
          <li>
            <span><strong> PHY 1</strong></span>
            - bol vytvorený pre vonkajšie použitie a pracuje od 11,67 Kbit/s do
            266,6 Kbit/s.
          </li>
          <li>
            <span><strong> PHY 2</strong></span>
            - umožňuje dosiahnuť rýchlosť prenosu dát od 1,25 Mbit/s do 96
            Mbit/s.
          </li>
          <li>
            <span><strong> PHY 3</strong></span>
            - sa používa pre mnohé zdroje emisií s konkrétnou modulačnou metódou
            nazývanou kľúčovanie farebného posunu (CSK). PHY III môže poskytovať
            rýchlosti od 12 Mbit/s do 96 Mbit/s. [44]
          </li>
        </ul>
        <p>
          Modulačné formáty rozpoznané pre PHY I a PHY II sú OOK a modulácia
          variabilnej polohy impulzu (VPPM). Manchesterské kódovanie používané
          pre vrstvy PHY I a PHY II zahŕňa hodiny vo vnútri prenášaných údajov
          reprezentujúc logickú 0 so symbolom OOK "01" a logickú 1 so symbolom
          OOK "10", všetky s jednosmernou zložkou. Jednosmerná zložka zabraňuje
          zhasnutiu svetla v prípade predĺženého chodu logických 0. [61]
        </p>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/3 layers of 802.15.7.JPG"
            alt="Fyzická vrstva pre Li-Fi"
        /></span>
        <p class="imgTitle">Fyzická vrstva pre Li-Fi [45]</p>
      </section>
      <section>
        <br /><br />
        <h4>Výhody Li-Fi</h4>
        <ul>
          <li>
            <span><strong>Rýchlosť: </strong></span>
            Svetelné vlny sú schopné preniesť oveľa viac informácií ako rádiové
            vlny používané v technológií Wi-Fi, pretože spektrum viditeľného
            svetla je takmer 10 000-krát väčšie ako spektrum obsadené rádiovými
            vlnami. To je dôvod, prečo je prenos dát pomocou Li-Fi 100-krát
            rýchlejší ako prenos dát pomocou Wi-Fi. Pripojenie Li-Fi dokáže
            prenášať dáta rýchlosťou 224 GB za sekundu. Pri tejto rýchlosti je
            možné stiahnuť video vo vysokom rozlíšení za pár sekúnd. [46]
          </li>
        </ul>
        <span
          ><img
            src="https://orosz.marketingy.eu/owc_project/src/assets/img/lifi speed.JPG"
            alt="LiFi vs WiFi rýchlosť"
        /></span>
        <p class="imgTitle">Li-Fi vs Wi-Fi [64]</p>
        <ul>
          <li>
            <span><strong>Efektívnosť: </strong></span>
            Li-Fi má potenciál byť energeticky efektívnejší a lacnejší vďaka
            povahe LED žiaroviek, ktoré sú už samy osebe účinné. Táto
            technológia im dáva ďalší účel, konektivitu. To ušetrí náklady v
            domácnostiach a na pracoviskách, pretože by sa to mohlo zaobísť bez
            elektronických zariadení, ako sú smerovače, modemy, opakovače
            signálu, zosilňovače vĺn a antény. Aby tieto zariadenia fungovali,
            musia byť pripojené k napájaniu 24/7. Li-Fi v súčasnosti ponúka
            trojnásobne nižšiu latenciu ako Wi-Fi a môže radikálne umožniť
            inovácie, automatizáciu a aplikácie ako rozšírená realita (AR) a
            virtuálna realita (VR). [46]
          </li>
          <li>
            <span><strong>Bez rušenia: </strong></span>
            Rádiové frekvencie sú náchylné na rušenie zo širokého spektra
            zariadení, ako sú bezdrôtové telefóny, mikrovlnné rúry a susedné
            siete Wi-Fi. Signály Li-Fi je možné definovať podľa oblasti
            osvetlenia, čo znamená, že rušeniu je oveľa jednoduchšie zabrániť a
            dokonca ho úplne zastaviť. To tiež znamená, že Li-Fi možno použiť v
            nepriateľských zónach rádiových frekvencií ako napríklad nemocnice,
            elektrárne a lietadlá. [46]
          </li>
          <li>
            <span><strong>Bezpečnosť: </strong></span>
            Rádiové vlny môžu zachytiť ľudia mimo danej siete, pretože môžu
            prechádzať cez steny a ohroziť bezpečnosť údajov. Svetlo však
            zastavujú nepriehľadné predmety, vďaka čomu je Li-Fi výrazne
            bezpečnejšia ako iné bezdrôtové technológie. Niektoré miestnosti by
            mohli byť dokonca označené ako oblasti s vysokým zabezpečením s
            vlastnými sieťami Li-Fi, čím by sa izolovali od ostatných častí
            budovy, kde by sa mohli pripojiť zraniteľné zariadenia internetu
            vecí (IoT). [46]
          </li>
          <li>
            <span><strong>Dostupnosť: </strong></span>
            Každý zdroj svetla, ktorý podporuje Li-Fi sa môže pripojiť k
            internetu, lebo majú unikátnu IP adresu. V blízkej budúcnosti, keď
            bude táto technológia už dostupná širokej verejnosti, pouličné a
            dopravné osvetlenia, osvetlenia budov budú môcť bezdrôtovo
            komunikovať a bude umožnený prístup na internet, nech bude človek
            kdekoľvek. [46]
          </li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Nevýhody Li-Fi</h4>
        <ul>
          <li>
            <span><strong>Obmedzený rozsah: </strong></span>
            Skutočnosť, že svetlo nemôže preniknúť cez steny, môže byť dobrá
            vec, pokiaľ ide o bezpečnosť, ale to tiež znamená, že Li-Fi má veľmi
            obmedzený dosah. To znamená, že je možné efektívne použiť iba v
            uzavretých priestoroch. V prevádzkach musia byť svetlá takticky
            umiestnené v miestnostiach, aby sa rozšíril rozsah siete. V
            otvorených priestoroch môže pokrytie Wi-Fi dosiahnuť až 32 metrov,
            ale Li-Fi môže dosiahnuť iba 10 metrov. [46]
          </li>
          <li>
            <span><strong> Obmedzená kompatibilita: </strong></span>
            Keďže Li-Fi je nová technológia, nie je s ňou kompatibilných veľa
            zariadení. Väčšina zariadení, ktoré sa používajú súčasnosti, stále
            používajú hardvér na Wi-Fi siete. [46]
          </li>
          <li>
            <span
              ><strong
                >Nie je to odpoveď na pomalú rýchlosť internetu:
              </strong></span
            >
            Li-Fi má vyššiu rýchlosť prenosu dát, ale ak je rýchlosť internetu
            od poskytovateľov služieb stále pomalá, najlepší aspekt tejto
            technológie zostáva bezvýznamný. V krajinách, ktoré majú nižšiu
            rýchlosť internetu, by nasadenie siete Li-Fi nemalo zmysel. Na
            podporu masovej implementácie tejto technológie bude potrebná
            koordinácia rôznych priemyselných odvetví. [46]
          </li>
        </ul>
      </section>
      <section>
        <br /><br />
        <h4>Využitie Li-Fi</h4>
        <p>
          S krátkovlnným žiarením, aké používa Li-Fi, komunikácia nemôže
          preniknúť cez steny a dvere. Vďaka tomu je bezpečnejší a uľahčuje
          riadenie prístupu k sieti.[47] Pokiaľ sú zakryté priehľadné materiály,
          ako sú okná, prístup ku kanálu Li-Fi je obmedzený na zariadenia v
          miestnosti. [48]
        </p>
        <ul>
          <li>
            <span><strong>Smartfóny: </strong></span>
            Prvý prototyp smartfónu VLC bol predstavený na výstave Consumer
            Electronics Show v Las Vegas v januári 2014. Telefón využíva
            technológiu Wysips CONNECT od SunPartner, ktorá premieňa svetelné
            vlny na využiteľnú energiu, vďaka čomu je telefón schopný prijímať a
            dekódovať signály bez čerpanie z jeho batérie. [49][50] Číru tenkú
            vrstvu krištáľového skla je možné pridať na malé obrazovky, ako sú
            hodinky a smartfóny, vďaka ktorým sú napájané solárnou energiou.
            Smartfóny by mohli získať o 15 % dlhšiu výdrž batérie počas bežného
            dňa. Prvé smartfóny využívajúce túto technológiu prišli v roku 2015.
            Táto obrazovka dokáže prijímať aj VLC signály ako aj fotoaparát
            smartfónu. [51] Náklady na tieto obrazovky na jeden smartfón sa
            pohybujú výrazne nižšie než u väčšine iných nových technológií. [52]
            Svetelná spoločnosť Signify (predtým Philips Lighting) vyvinula
            systém VLC pre nakupujúcich v obchodoch. Musia si stiahnuť aplikáciu
            do smartfónu a potom ich smartfón komunikuje s LED diódami v
            obchode. Systém dokáže presne určiť, kde sa v obchode nachádzajú, a
            poskytne im zodpovedajúce kupóny a informácie podľa toho, v ktorej
            uličke sa nachádzajú a na čo sa pozerajú.[53]
          </li>
          <li>
            <span><strong> Automatizácia domácností a budov: </strong></span>
            V budúcnosti môže dôjsť k prechodu na Li-Fi aj v domácnostiach,
            pretože má potenciál pre vyššiu prenosovú rýchlosť a taktiež pre
            bezpečnostné výhody, ktoré poskytuje táto technológia. Pretože
            svetlo posiela dáta, sieť môže byť obsiahnutá v jednej fyzickej
            miestnosti alebo budove, čím sa znižuje možnosť vzdialeného
            sieťového útoku. Hoci to má viac dôsledkov v podnikoch a iných
            sektoroch, domáce používanie sa môže posunúť vopred so vzostupom
            domácej automatizácie, ktorá si vyžaduje prenos veľkých objemov dát
            cez lokálnu sieť.
          </li>
          <li>
            <span><strong>Letectvo: </strong></span>
            Efektívna komunikácia údajov je možná vo vzdušných prostrediach, ako
            sú komerčné osobné lietadlá využívajúce Li-Fi. Používanie tohto
            prenosu údajov na báze svetla nebude rušiť zariadenia v lietadle,
            ktoré sa spoliehajú na rádiové vlny, ako je jeho radar. [54]
            Internet počas letu, ak a kedy ho letecká spoločnosť ponúka, je
            často nespoľahlivý a pomalý. Oledcomm chce posunúť veci o stupeň
            vyššie sprístupnením vysokorýchlostného Li-Fi na letoch Air France a
            KLM. Francúzska technologická spoločnosť vybaví na medzinárodnom
            parížskom aerosalóne LiFiMAX reprodukciu stredne dlhého lietadla.
            Víťazi súťaže Ubisoft esports boli pozvaní, aby otestovali LiFiMAX.
            Ak sa sľubovaná rýchlosť, ktorá je až 100 Mbps na sedadlo, bude
            pravdivá, tak LiFiMAX by mal cestujúcim umožniť 4K video, videohry,
            AR, ako aj prístup na internet. Také vysoké rýchlosti internetu
            počas letu sú nevídané. Dokonca aj najrýchlejšie WiFi dostupné na
            domácich leteckých spoločnostiach v USA sa zastaví na rýchlosti
            okolo 15 Mbps. LiFiMAX bohužiaľ nedokáže zlepšiť rýchlosť a
            spoľahlivosť internetového pripojenia skutočne dodávaného lietadlu,
            ale určite môže zlepšiť veci na palube. Li-Fi má tendenciu pracovať
            lepšie vo veľmi hustých prostrediach kvôli menšiemu rušeniu
            spôsobenému svetlom. Niektorí tvrdia, že LiFi je bezpečnejšie ako
            WiFi alebo Bluetooth, pretože svetlo nemôže preniknúť cez steny.
            Li-Fi má však značné nevýhody, napríklad oveľa kratší dosah. LiFiMax
            od spoločnosti Oledcomm má maximálny dosah iba 28m, a hoci ponúka
            super rýchle priemerné rýchlosti 40 Mbps až 100 Mbps, je tiež
            výrazne drahší ako WiFi. Oledcomm plánuje sprístupniť LiFiMax pre
            domáce alebo kancelárske použitie. [55]
          </li>
          <li>
            <span><strong>Reklamy: </strong></span>
            Pouličné lampy môžu byť použité na zobrazovanie reklám na okolité
            podniky alebo atrakcie na mobilných zariadeniach, keď jednotlivec
            prechádza. Zákazník, ktorý vstúpi do obchodu a prejde cez predné
            svetlá obchodu, môže na mobilnom zariadení zákazníka zobraziť
            aktuálne predaje a propagačné akcie. [56]
          </li>
          <li>
            <span><strong>Aplikácia pod vodou: </strong></span>
            Väčšina diaľkovo ovládaných podvodných vozidiel (ROV) je ovládaná
            pomocou káblového pripojenia. Dĺžka ich kabeláže výrazne obmedzuje
            ich prevádzkový dosah a ďalšie potenciálne faktory, ako je hmotnosť
            a krehkosť kábla, môžu byť obmedzujúce. Keďže svetlo môže prechádzať
            vodou, komunikácia založená na Li-Fi by mohla ponúknuť oveľa väčšiu
            mobilitu. Užitočnosť technológie je obmedzená vzdialenosťou, ktorú
            môže svetlo preniknúť do vody. Významné množstvo svetla neprenikne
            ďalej ako 200 metrov. Do vzdialenosti 1000 metrov neprenikne žiadne
            svetlo. [57]
          </li>
          <li>
            <span><strong> Vozidlá: </strong></span>
            U vozidlách je možná komunikácia medzi sebou prostredníctvom
            predných a zadných svetiel, aby sa zvýšila bezpečnosť na cestách.
            Pouličné svetlá a dopravné signály by tiež mohli poskytovať
            informácie o aktuálnej situácií na ceste.
          </li>
          <li>
            <span><strong>Nemocnica: </strong></span>
            Zdravotnícke zariadenia čoraz častejšie využívajú diaľkové
            vyšetrenia a dokonca aj procedúry. Li-Fi systémy by mohli ponúknuť
            lepší systém na prenos dát s nízkou latenciou a veľkým objemom dát
            cez siete.[58] Okrem poskytovania vyššej rýchlosti majú svetelné
            vlny tiež znížený vplyv na lekárske nástroje. Príkladom by mohla byť
            možnosť použitia bezdrôtových zariadení pri podobných rádiovo
            citlivých postupoch pri MRI. [54]
          </li>
          <li>
            <span><strong>Priemyselná automatizácia: </strong></span>
            Kdekoľvek v priemyselných oblastiach je potrebné prenášať dáta,
            Li-Fi dokáže nahradiť zberné krúžky, posuvné kontakty a krátke
            káble, ako napríklad priemyselný Ethernet. Vďaka realtime Li-Fi
            (ktorý je často potrebný pre automatizačné procesy) je tiež
            alternatívou k bežným priemyselným štandardom Wireless LAN.
            Fraunhofer IPMS, výskumná organizácia v Nemecku vyvinula komponent,
            ktorý je veľmi vhodný pre priemyselné aplikácie s časovo citlivým
            prenosom dát. [59]
          </li>
        </ul>
        <p>
          Li-Fi systém Trulify od spoločnosti Signify sľubuje až 150 Mbps
          internet cez LED svetlá. Tento systém je určený pre profesionálne
          trhy, ako sú nemocnice a továrne. Signify uviedla na trh jeden z
          prvých komerčných systémov Li-Fi . Prenáša širokopásmový internet
          prostredníctvom svetiel pomocou LED diód na presun údajov a
          obchádzanie rádiových signálov. Systém Trulifi využíva technológiu
          optického bezdrôtového vysielača a prijímača zabudovanú do svetiel
          Philips. Na príjem signálu Li-Fi používatelia potrebujú prístupový
          kľúč USB zapojený do počítača. Po pripojení môže Trulifi poskytovať
          bezdrôtové pripojenie rýchlosťou až 150 Mbps. Podľa spoločnosti je to
          dostatočne rýchle na streamovanie 30 filmov v rozlíšení 1080p (Full
          HD) naraz. Prví dvaja zákazníci ktorí mali záujem o Trulifi boli
          korporátny klienti Globalworth v Poľsku a Rumunsku, a Claerhout
          Communication Campus v Belgicku. Trulifi je zameraný na takéto
          profesionálne trhy. Dala by sa použiť v nemocniciach, kde môže byť
          rádiofrekvenčná (RF) komunikácia obmedzená, alebo v oblastiach, kde je
          signál už preplnený. Ako aj použiť na prepojenie robotov alebo strojov
          v priemyselných podnikoch. [60]
        </p>
        <p>
          Okrem rýchlosti a vyhýbania sa preplneným rádiovým frekvenciám ponúka
          Li-Fi niekoľko kľúčových výhod. Keďže sa dáta prenášajú svetlom, môžu
          sa pohybovať všade tam, kde môže svetlo, napríklad hlboko pod zemou,
          kde je WiFi obmedzené. A keďže svetlo neprenikne cez steny, nepreniknú
          ani dáta. To by mohlo byť nevýhodou v budovách s množstvom oddielov,
          ale tiež to uľahčuje zabezpečenie Li-Fi. Jednou z výhod jedinečných
          pre Trulifi je, že používa optické bezdrôtové transceivery zabudované
          alebo dodatočne namontované do svietidiel Philips, čo znamená, že
          používatelia nemusia nevyhnutne vymieňať svoju existujúcu
          infraštruktúru osvetlenia, aby mohli Li-Fi vyskúšať. [60]
        </p>
      </section>
    </base-card>
    <base-card>
      <section>
        <h2>Videá</h2>
        <iframe
          src="https://www.youtube.com/embed/GkXyEgHRAcY"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          What is LiFi? (pureLiFi),2017, Krátke animované video, ktoré ukáže ako
          funguje táto technológia.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/i4-z0xETiUM"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Optical Wireless Transmission - LiFi in a smart infrastructure
          (Fraunhofer HHI), 2018, 4 minútové animované video o tom, ako môže
          infraštruktúra budúcnosti fungovať, aby bola doprava inteligentnejšia
          a efektívnejšia.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/ALaS2xgeMes"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Myths about LiFi technology explained(Signify),2019, Dvojminútové
          zostrihané video vysvetľuje mýtov okolo tejto technológie.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/AKvvEqm9Nv4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          How Does LiFi Work? (pureLiFi), 2018, Dvojminútové animované video,
          ktoré vysvetľuje ako LiFi spája svet cez svetlo, ponúka rýchlejšiu a
          bezpečnejšiu bezdrôtovú komunikáciu s bezprecedentnými dátami a šírkou
          pásma.
        </p>
        <br />
        <iframe
          src="https://www.youtube.com/embed/F4bUtY3CX4w"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          ng-show="showvideo"
        ></iframe>
        <p>
          Real-time video transmission using LiFi R&D Kit (Hyperion
          Technologies), 2021, Kratšie video o prenose videa v reálnom čase
          pomocou súpravy LiFi R&D Kit a s dvomi NI USRP 2920.
        </p>
      </section>
      <br /><br />
      <base-button @click="moveUp">Späť na začiatok</base-button>
    </base-card>
    <base-card v-if="isLoggedIn">
      <section>
        <h2>Testy pre Li-Fi</h2>
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
            [40] LiFi: Rýchle dáta prenášané cez žiarovku vo vašej pracovni,
            Autor AG, máj 2020
            <a
              href="http://www.targetnews.sk/clanky/item/1441-lifi-rychle-data-prenasane-cez-ziarovku-vovasej-
                    pracovni"
              >Viac</a
            >
          </li>
          <li>
            [41] LiFI technology by LiFiCOMM
            <a href="https://lificomm.com/lifi/">Viac</a>
          </li>
          <li>
            [42] Institute of Electrical and Electronics Engineers, Inc. (IEEE),
            Nikola Serafimovski
            <a
              href="https://grouper.ieee.org/groups/802/11/Reports/tgbb_update.htm"
              >Viac</a
            >
          </li>
          <li>
            [43] Tsonev, D.; Sinanovic, S.; Haas, Harald (15 September 2013).
            "Complete Modeling of Nonlinear Distortion in OFDM-Based Optical
            Wireless Communication". Journal of Lightwave Technology. 31 (18):
            3064-3076. Bibcode:2013JLwT...31.3064T.
            doi:10.1109/JLT.2013.2278675. S2CID 532295
          </li>
          <li>
            [44] An IEEE Standard for Visible Light Communications Archived 29
            August 2013 at the Wayback Machine visiblelightcomm.com, dated April
            2011. It is superfast modern intelnet technology.
          </li>
          <li>
            [45] Hussain, Babar, Fengyu Che, Feng Zhang, Tak-Sang Yim, Lin
            Cheng, Wing-Hung Ki, C. Patrick Yue and Liang Wu. “A Fully
            Integrated IEEE 802.15.7 Visible Light Communication Transmitter
            With On-Chip 8-W 85% Efficiency Boost LED Driver.” Journal of
            Lightwave Technology 34 (2016): 2419-2430.
          </li>
          <li>
            [46] Li-Fi pros - cons
            <a href="https://lifi.co/lifi-pros-cons/">Viac</a>
          </li>
          <li>
            [47] "Li-Fi: Lighting the Future of Wireless Networks". Archived
            from the original on 18 April 2017. Retrieved 17 April 2017.
          </li>
          <li>
            [48] "Applications of Li-Fi - Lifi Research and Development Centre".
            Lifi Research and Development Centre. Archived from the original on
            30 October 2016. Retrieved 15 November 2016.
          </li>
          <li>
            [49] Breton, Johann (20 December 2013). "Li-Fi Smartphone to be
            Presented at CES 2014". Digital Versus. Archived from the original
            on 8 January 2014. Retrieved 16 January 2014.
          </li>
          <li>
            [50] Rigg, Jamie (11 January 2014). "Smartphone concept incorporates
            LiFi sensor for receiving light-based data". Engadget. Archived from
            the original on 15 January 2014. Retrieved 16 January 2014.
          </li>
          <li>
            [51] An Internet of Light: Going Online with LEDs and the First
            Li-Fi Smartphone Archived 11 January 2014 at the Wayback Machine,
            Motherboard Beta, Brian Merchant
          </li>
          <li>
            [52] Van Camp, Jeffrey (19 January 2014). "Wysips Solar Charging
            Screen Could Eliminate Chargers and Wi-Fi". Digital Trends. Archived
            from the original on 7 November 2015. Retrieved 29 November 2015.
          </li>
          <li>
            [53] LaMonica, Martin (18 February 2014). "Philips Creates Shopping
            Assistant with LEDs and Smart Phone". IEEE Spectrum.
          </li>
          <li>
            [54] Ayara, W. A.; Usikalu, M. R.; Akinyemi, M. L.; Adagunodo, T.
            A.; Oyeyemi, K. D. (July 2018). "Review on Li-Fi: an advancement in
            wireless network communication with the application of solar power".
            IOP Conference Series: Earth and Environmental Science. 173 (1):
            012016. Bibcode:2018E&ES..173a2016A.
            doi:10.1088/1755-1315/173/1/012016. ISSN 1755-1315.
          </li>
          <li>
            [55] High-speed LiFi will soon be available on Air France flights,
            by: A. Khalid, June 12th, 2019
            <a
              href="https://www.engadget.com/2019-06-12-high-speed-lifi-will-soon-be-available-on-air-franceflights.
                    html"
              >Viac</a
            >
          </li>
          <li>
            [56] Swami, Nitin Vijaykumar; Sirsat, Narayan Balaji; Holambe,
            Prabhakar Ramesh (2017). Light Fidelity (Li-Fi): In Mobile
            Communication and Ubiquitous Computing Applications. Springer
            Singapore. ISBN 978-981-10-2630-0.
          </li>
          <li>
            [57] How far does light travel in the ocean?
            <a
              href="https://web.archive.org/web/20170131072651/http://oceanservice.noaa.gov/facts/light_tra
                      vel.html"
              >Viac</a
            >
          </li>
          <li>
            [58] "Data Services of Li- Fi in Hospital Management- Communication
            in Hospitals" (PDF). International Journal of Science and Research
            (IJSR). Archived (PDF) from the original on 4 September 2014.
          </li>
          <li>
            [59] Happich, Julien. "Fraunhofer IPMS pushes Li-Fi to 12.5Gbit/s
            for industrial use". European Business Press SA. André Rousselot.
            Retrieved 13 November 2017.
          </li>
          <li>
            [60] Signify's LiFi system promises up to 150 Mbps internet via LED
            lights, by:C. Fisher, June 20th, 2019
            <a
              href="https://www.engadget.com/2019-06-20-signify-trulifi-lifi-light-fidelity-internet.html"
              >Viac</a
            >
          </li>
          <li>
            [61] Li-Fi by: Unknown
            <a href="https://en.wikipedia.org/wiki/Li-Fi">Viac</a>
          </li>
          <li>
            [64] LiFi vs WiFi - Detailed Comparison, by: Rashmi Bhardwaj
            <a href="https://ipwithease.com/lifi-vs-wifi/">Viac</a>
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
      actionPayload.append("course", "lifi");
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