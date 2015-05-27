-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 11:09 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zodiacool`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compatibility`
--

CREATE TABLE IF NOT EXISTS `compatibility` (
  `compatibility_id` int(11) NOT NULL,
  `sign1` int(11) NOT NULL,
  `sign2` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compatibility`
--

INSERT INTO `compatibility` (`compatibility_id`, `sign1`, `sign2`, `description`) VALUES
(5, 1, 1, 'Berbecii nu doar se intalnesc si se indragostesc, ei explodeaza pur si simplu, dand buzna unul in viata celuilalt. Amandoi adora cuceririle noi si vor continua sa le faca si pe parcursul relatiei - care s-ar putea termina foarte repede! Berbecii isi exprima bine sentimentele, dar si nemultumirile in cuplu, iar daca cel care cauzeaza neplacerea nu schimba situatia, se poate astepta la multa critica si furie, marca distinctiva a unei relatii Berbec-Berbec.\r\n\r\nIubitii din aceasta zodie simt o mare atractie unul pentru celalalt, dar este, de regula, de natura fizica si intens sexuala. Din nefericire, aceasta intensitate salbatica este adesea foarte scurta si se consuma repede. Acestia doi sunt inclinati spre comportament impulsiv si pot fi foarte egoisti, trasatura in cauza manifestandu-se adesea si in viata sexuala.\r\n\r\nAu si probleme in a ramane fideli unui singur partener, iar daca apar prea multe certuri sau critici, pleaca fiecare in cautare de alte experiente. Mandria binecunoscuta a Berbecilor nu le va permite sa ramana unul langa altul pe masura ce pasiunea si dragostea se transforma in raceala si dispret.\r\n\r\nPierderea respectului pentru partener nu este ceva minor pentru aceasta zodie. Prin urmare, desi nu vorbim de perechea perfecta, relatia poate fi facuta sa mearga daca partenerii se iubesc destul pentru a sacrifica fiecare putin din propriul ego de dragul celuilalt. '),
(6, 1, 2, 'La prima vedere, Berbecul si Taurul par o pereche minunata, dar nu pe termen lung; calmul si logicul Taur il va innebuni pe Berbecul cel activ si mereu in cautare de distractie! Acesta din urma se lasa adesea dus de val si se implica in tot felul de idei noi, ceea ce ii sta in fire si in sange sa faca, dar nu e valabil si pentru Taur, persoana rationala, conservatoare, careia nu-i place sa se grabeasca. Poate fi foarte gelos si posesiv, daca Berbecul pare mai interesat de alte lucruri si nu-i acorda destul timp si atentie pentru a-l mentine fericit.\r\n\r\nTaurul considera sexul mai important decat orice si este foarte pretentios. Ideile si actiunile noi ale Berbecului il vor tine intr-o stare permanenta de confuzie si gelozie. Berbecul, pe de alta parte, simte nevoia sa fie activ in viata sociala, sa aiba si un camin si o cariera (care sa mearga bine), sa-si mentina emotiile la un nivel suficient de ridicat, altfel dispare si placerea fizica; in consecinta, incepe sa se plictiseasca si isi cauta alti parteneri alaturi de care sa simta si sa mentina aventura in viata lui.\r\n\r\nTaurul are destule parti bune si poate aduce multe intr-o casnicie, dar nu cu un Berbec, care poate deveni inconstant si infidel, daca firea Taurului il face sa se simta tinut pe loc, "intepenit", fapt ce-l va pune pe fuga la fel de repede cum l-a atras. In cel mai bun caz, va fi o legatura turbulenta. Se vor ciocni doua vointe si doua personalitati, ducand la certuri si chiar violenta fizica. Nu este, asadar, o legatura inteleapta sau recomandata. '),
(7, 1, 3, 'In cadrul acestei relatii trebuie sa existe tipul mai evoluat de Berbec, care si-a dezvoltat sau e dispus sa-si dezvolte un simt al dreptatii si rabdarii, nici unul dintre aceste lucruri fiind tocmai usor pentru acesta. Gemenii se pot aprinde intr-un minut si deprima in secunda urmatoare. Comportamentul Gemenilor in general ii deruteaza pe Berbeci! Desi Gemenii sunt elocventi, sunt de multe ori si superficiali, gandindu-se adesea la mai multe lucruri deodata.\r\n\r\nBerbecul este initial atras de aceasta persoana elocventa, interesanta, dar dorinta lui de a domina fiinta si situatia va scoate la iveala partea rebela a Gemenilor, care e doar tinuta in frau. La inceput, Gemenii vor rade de atitudinea autoritara a Berbecilor, dar ce e prea mult e prea mult: Berbecul se va trezi cu o revolta pe cap. Una care cel mai probabil va duce la o despartire ferma.\r\n\r\nGemenii au nevoie de distractie si de stimulare intelectuala; rutina e moarte curata pentru ei si orice incercare de a-i determina sa se ocupe de sanatatea sau banii lor trebuie facuta intr-un mod cat mai diplomat. Intre acestia doi vor avea loc runde repetate de certuri pana cand unul dintre ei pur si simplu paraseste campul de bataie. Cu siguranta nu este perechea perfecta, dar, in functie de harta astrala personala, de dragostea si intelegerea din fiecare parte, si-ar putea mentine neintelegerile la un minim. Si Gemenilor, si Berbecilor le face placere o cearta buna, dar... primii vor avea tendinta si sa le faca publice. '),
(8, 1, 4, 'In cadrul acestei relatii trebuie sa existe tipul mai evoluat de Berbec, care si-a dezvoltat sau e dispus sa-si dezvolte un simt al dreptatii si rabdarii, nici unul dintre aceste lucruri fiind tocmai usor pentru acesta. Gemenii se pot aprinde intr-un minut si deprima in secunda urmatoare. Comportamentul Gemenilor in general ii deruteaza pe Berbeci! Desi Gemenii sunt elocventi, sunt de multe ori si superficiali, gandindu-se adesea la mai multe lucruri deodata.\r\n\r\nBerbecul este initial atras de aceasta persoana elocventa, interesanta, dar dorinta lui de a domina fiinta si situatia va scoate la iveala partea rebela a Gemenilor, care e doar tinuta in frau. La inceput, Gemenii vor rade de atitudinea autoritara a Berbecilor, dar ce e prea mult e prea mult: Berbecul se va trezi cu o revolta pe cap. Una care cel mai probabil va duce la o despartire ferma.\r\n\r\nGemenii au nevoie de distractie si de stimulare intelectuala; rutina e moarte curata pentru ei si orice incercare de a-i determina sa se ocupe de sanatatea sau banii lor trebuie facuta intr-un mod cat mai diplomat. Intre acestia doi vor avea loc runde repetate de certuri pana cand unul dintre ei pur si simplu paraseste campul de bataie. Cu siguranta nu este perechea perfecta, dar, in functie de harta astrala personala, de dragostea si intelegerea din fiecare parte, si-ar putea mentine neintelegerile la un minim. Si Gemenilor, si Berbecilor le face placere o cearta buna, dar... primii vor avea tendinta si sa le faca publice. '),
(9, 1, 5, 'Atractia dintre acestia doi ar putea fi puternica si plina de pasiune. Leii au nevoie sa fie tratati ca niste stapani in casa lor, iar nevoia lor constanta de atentie ar putea cauza multe probleme cu foarte putin demonstrativul Berbec, a carui atitudine egocentrista rivalizeaza in mod direct cu a Leului.\r\n\r\nAcesta trebuie flatat in mod constant, ceea ce nu este tocmai pe placul Berbecului, care crede ca un lucru odata spus e mai mult decat suficient. Daca Leul incepe sa-si caute apreciere in alta parte, Berbecul va incerca sa-l impace, iar daca dragostea lor este suficient de puternica, Berbecul va face imensul efort de a-i deveni cel mai mare admirator.\r\n\r\nIn curand insa va atinge stadiul de plictiseala, mai ales daca nu e ceva reciproc - si Berbecilor le place sa fie laudati. Berbecii au nevoie de aceste incurajari si daca se afla in stadiul terminal al unui proiect, deoarece ei sunt pionieri, initiatori, dar mai putin consecventi in a mai si termina ce au inceput.\r\n\r\nFiind atat de asemanatori pe plan sexual, acest lucru ii si tine unul langa altul. Intre acestia doi (daca se iubesc, au destul tact si isi implinesc unul altuia nevoile emotionale) se va crea o legatura fericita ce ar putea dura o viata intreaga. '),
(10, 1, 6, 'Fecioara e o persoana cerebrala care traieste mai mult psihic decat fizic, iar Berbecul este cel mai concret si activ semn al zodiacului, caruia nu-i place sa-si piarda prea mult timp in acelasi loc.\r\n\r\nDaca cei doi au hobby-uri si obiceiuri comune, vor avea cel putin o baza de pornire a unei relatii. Fara asta, viata impreuna ar fi de nesuportat pentru fiecare dintre ei. Relatia s-ar putea deteriora pana la punctul in care fiecare dintre ei nu va face altceva decat sa desfiinteze sugestiile celuilalt, in loc sa discute cu adevarat. Daca nu recunosc din timp aceasta tendinta, n-au nici o sansa de a supravietui coliziunilor dintre personalitatile lor si o vor lua in directii diferite.\r\n\r\nFecioarele sunt persoane atente, gata sa se sacrifice de dragul altora, iar Berbecul ar trebui sa evite sa devina nerabdator in aceasta directie, deoarece nu exista zodie mai potrivita sa aiba grija de cei bolnavi de exemplu decat Fecioara. Pe plan fizic, aceasta e mai mult decat dispusa sa-i faca pe plac Berbecului, ascutandu-i sugestiile, dar Berbecul considera ca Fecioara ar trebui sa vina cu unele la randul ei si va deveni nerabdator.\r\n\r\nBerbecul cel autoritar nu va primi bine criticile Fecioarei, chiar daca sunt facute pentru binele lui, pentru ca-i submineaza personalitatea si il deprima. O astfel de relatie ar putea merge, dar e nevoie de mult efort din partea amandurora. '),
(11, 1, 7, 'Atractia dintre Berbec si Balanta e ceva des intalnit, dar nu si de durata. Sunt firi diferite, cu personalitati ce variaza intr-un spectru larg. Balanta crede cu putere in egalitatea intre sexe si in casatorie, asa ca la inceput va privi cu amuzament incercarile Berbecului de a domina relatia.\r\n\r\nCand va intelege ca Berbecul este foarte serios in aceasta privinta, vor incepe certurile. Amandoi, fiind firi impulsive, vor gandi "parea o idee buna la inceput". Balanta e gata oricand sa ajute pe cei care au nevoie, dar aproape tot timpul Berbecul va considera asta o pierdere de vreme, mai ales daca are impresia ca persoana in cauza e in stare de mai mult singura, si foloseste adesea complexul de inferioritate al Balantei in interes propriu.\r\n\r\nL-ar putea tine in inferioritate in mod sadic, mai ales daca s-a pierdut respectul in aceasta relatie. Aceasta stare de lucruri nu va dura mult, deoarece inclinatia Balantei pentru dragoste, pentru sexul opus, pentru hoinareala, va starni revolta gelosului Berbec, ceea ce va dezgusta pasnica Balanta. O relatie destul de dificila, in cel mai bun caz.'),
(12, 1, 8, 'Dintre toate relatiile, aceasta este probabil cel mai dificil de mentinut, deoarece tendinta Berbecului de a da ordine va pune la grea incercare eforturile Scorpionului de a-l acapara la randul lui.\r\n\r\nBerbecul va face exact opusul la ce asteapta Scorpionul, chiar si numai ca sa-l enerveze. Una din marile lor probleme e gelozia imensa a Scorpionului, ce-i sta in caracter si nu poate fi nicicum schimbata. Partenerul care nu poate face fata va avea mari probleme.\r\n\r\nBerbecul va deveni curand claustrofob daca trebuie sa se conformeze stilului Scorpionului. Acesta simte ca un camin este locul ideal unde poti fi relaxat si poti uita de tot restul lumii, in timp ce Berbecul e mai interesat sa se implice in aceasta lume si sa traiasca la maximum. Va dori sa dea petreceri sau sa mearga la unele, sa aiba mereu prieteni in preajma, ceea ce va scoate din minti la un moment dat Scorpionul. Acesta isi alege de obicei o pereche definitiva, dar Berbecul ar putea fi exceptia de la regula; are anumite idealuri la nivelul carora partenerul de viata trebuie sa se ridice, iar orice esec din partea Berbecului va avea drept consecinta scoaterea acestuia din mintea si din inima Scorpionului.\r\n\r\nPe plan sexual, acesta este destul de pretentios si de gelos. Berbecul, caruia ii place sa domine, nu va accepta sa fie cel dominat. Prin urmare, o relatie intre acestia doi nu e tocmai recomandata. '),
(13, 1, 9, 'Aceasta pereche este, la prima vedere, situatia ideala, deoarece amandoi sunt iubitori de libertate si fiecare simte ca este in postura ideala pentru a-si exercita dorintele in armonie perfecta si cu acceptul celuilalt. Traiesc un vartej social absolut, cu destul de putine contacte intre ei. Sunt mai mult prieteni decat iubiti. Pretuiesc adevarul si au cel mai profund respect pentru partener pentru aceasta, dar, auzind fiecare detaliile aventurilor celuilalt, incep sa fie gelosi, desi nu prea le convine s-o arate.\r\n\r\nCu toata aceasta nebunie si graba, incep sa realizeze ca nu prea stau impreuna. Iesirile ar putea ajuta, dar sunt un substitut slab pentru acel timp ce face o relatie sa mearga pe termen lung. Din acest moment nu va mai dura mult pana o va lua fiecare in alta directie. In plus, presiunile financiare constante cauzate de faptul ca amandurora le place sa riste este alt factor care ii poate desparti.\r\n\r\nIn dormitor, ambii sunt firi deschise, in privinta sexului si a orice altceva. Sunt necesare eforturi constante in aceasta relatie, fiecare trebuind sa-l faca pe celalalt sa se simta important si nu sa-si raneasca si mai mult orgoliul unul altuia. Nu e o combinatie prea buna decat daca amandoi sunt de acord sa aiba o relatie cat mai deschisa. Nu tocmai perechea ideala. '),
(14, 1, 10, 'Intr-o pasa in care tinde sa fie practic, Berbecul ar putea fi atras de Capricornul cel ambitios si de independenta acestuia, similara cu a lui. Celalalt va fi atras de vitalitatea si forta caracterului pe care le vede la Berbec, cat si de caldura acestuia. Ii asteapta insa o trezire neplacuta.\r\n\r\nTimpul pe care il acorda Capricornul afacerilor si ambitiilor lui pot starni la Berbec un comportament necaracteristic si gelozie, pentru care nu este pregatit. Acesta considera ca viata inseamna mai mult decat o implicare constanta in munca sau in intalniri la diverse cluburi, facandu-si cunoscute aceste sentimente.\r\n\r\nCapricornul este o fiinta destul de simpla, iar Berbecul ar putea fi prea coplesitor pentru el, cu toate riscurile pe care si le asuma acesta (facandu-i chiar placere!) care il sperie pe Capricorn. Posibil sa se iste unele certuri foarte violente din aceasta cauza. Berbecului nu-i va placea pesimismul pe care-l foloseste Capricornul pentru a-i tempera entuziasmul.\r\n\r\nCapricornul este un iubit direct, desi nu tocmai deschis, si se enerveaza daca avansurile sale primesc drept raspuns ceea ce el considera scuze transparente. In unele relatii, acestia doi isi accepta cusururile si construiesc pe baza acestei rabdari o relatie, dar e putin probabil sa fie ceva pe termen lung. Nu tocmai cuplul ideal. '),
(15, 1, 11, 'Focul si aerul sunt de regula complementare, dar nu in acest caz, cu doua vointe atat de puternice, incat certurile incep probabil chiar din ziua in care se cunosc. Varsatorul e intrigat de persoane ciudate, neobisnuite si uneori excentrice, care-i atrag atentia. Berbecul trebuie sa faca fata acestor lucruri si ar fi si mai bine daca partenerii ar fi si prieteni, nu doar iubiti.\r\n\r\nBerbecul prefera compania oamenilor de succes, dinamici si sofisticati, care il ametesc pe Varsator. Acesta, independent cum este, refuza sa fie tinut in loc de orice, nu isi impartaseste prea des gandurile Berbecului, si doar putin viata lui privata! Aceasta atitudine este perceputa drept una plina de secrete mai degraba decat o idee de intimitate.\r\n\r\nBerbecul e al doilea in ce priveste independenta tocmai dupa Varsator, iar cei din jur afla multe despre cei doi din felul unic in care acestia vorbesc si se comporta. Desi acestia din urma sunt gelosi si posesivi in privinta partenerilor, rareori se ocupa de ei atunci cand au si alte lucruri de facut; in plus, nu sunt atat de activi sexual pe cat ar vrea un Berbec. Acesta va incepe sa vada Varsatorul ca fiind un partener egoist. Per ansamblu, nu e o uniune inspirata, iar cei doi ar face mai bine sa stea departe unul de altul'),
(16, 1, 12, 'Focul si Apa nu se amesteca de regula, iar din aces motiv relatia Berbec-Pesti ar putea fi una complexa. Pestii au nevoie de forta Berbecului si de capacitatea lui de a-l linisti cand e obosit sau deziluzionat, iar exact atunci cand Berbecul se obisnuieste sa se depinda de el, Pestele isi aduna fortele si devine brusc independent si liber (insa doar pentru scurt timp).\r\n\r\nIntuitia fara gres il ajuta sa stie permanent care sunt gandurile si emotiile Berbecului. Uneori Pestii se vor retrage in lumea lor secreta, mistica, incercand sa gaseasca solutia vreunei probleme, ceea ce-l va scoate din ecuatie pe Berbec pentru o scurta perioada de timp. Acesta trebuie sa inteleaga ca asa este felul de a fi a Pestilor, si in acelasi timp chiar motivul unei mari parti din atractia initiala.\r\n\r\nDeoarece Berbecul nu incearca sa schimbe pe nimeni, cand reuseste sa inteleaga cum "functioneaza" un Pesti, ii va lasa perechii sale spatiul necesar pentru a medita in pace. Pestele va lasa majoritatea deciziilor in seama Berbecului, in afara cazului in care acestea interfereaza cu propriile lui planuri, cand pur si simplu va ignora deciziile celuilalt.\r\n\r\nIn timp ce Berbecul isi poate petrece toata viata protejand Pestele si certandu-se cu oricine pentru el, intuitia acestuia nu va functiona in aceasta directie, nestiind niciodata ce se intampla. Pestii nu isi doresc absolut deloc sa ii schimbe pe impetuosii Berbeci, uneori incurajand felul lor ametitor de a reactiona, ceea ce ii fac foarte fericiti pe focosii Berbeci, care pot alege sa-si petreaca toata viata cu perechea lor Pesti.\r\n\r\nAcesta este sensibil si suficient de flexibil, dar total incapabil sa accepte critici in plan amoros. Tendinta lui, daca este barbat, este sa mearga la o bere cu baietii, iar asta ii va afecta destul de serios viata sexuala, lasandu-i partenerei lui un sentiment acut ca este folosita, frustrand-o.\r\n\r\nIn general, pentru acestia doi, capitolul fizic este distractiv, iar Pestele nu are nici o problema cu a-l lasa pe Berbec sa conduca relatia. Putem spune fara teama ca este o pereche ideala! '),
(17, 2, 2, 'Atat barbatii, cat si femeile acestei zodii au aceleasi caracteristici, aceleasi defecte, iar asta inseamna ca viata lor impreuna ar fi una plina de haos sau de plictiseala.\r\n\r\nFemeia tinde sa aiba o abordare destul de rationala a banilor, iar simtul ei practic o ajuta sa castige respect. E o femeie de casa, extrem de atenta, si o gazda minunata, ceva ce barbatul Taur apreciaza, deoarece amandurora le place intre altele o masa buna si o seara placuta. Nevoia de siguranta a femeii Taur e subliniata de capacitatea barbatului de a-i asigura un asemenea mediu stabil. Ambii au o tendinta innascuta de a-si exprima sentimentele si vor face orice pentru a pastra acest nivel de comunicare intre ei, cat si dragostea lor, odata ce apare. Adora sa faca totul impreuna si au diverse interese comune.\r\n\r\nProblema cea mai mare ar putea fi gelozia. Posesivitatea fiecaruia dintre ei le-ar putea cauza momente neplacute, in mod constant, sau interogatorii in privinta activitatii si locului in care se gaseste celalalt. Taurii sunt celebri pentru incapatanarea lor si ambii trebuie sa invete sa cedeze din cand in cand.\r\n\r\nAspectele fizice ale legaturii lor sunt satisfacatoare: si-ar putea petrece jumatate din viata in bucatarie, gatind, si cealalta jumatate in dormitor, fara sa se plictiseasca. Viata lor sexuala este importanta, dar si destul de precisa. In aceasta relatie coexista de regula doi oameni care tind sa se ingrase, fericiti, fara grija, ale caror vieti se rotesc una in jurul celeilalte. Datorita tuturor similaritatilor dintre ei, atat bune, cat si rele, rezultatul este fie perechea ideala, fie o nebunie curata - fara cale de mijloc. '),
(18, 2, 3, 'Taurul ar face bine sa ramana lucid cand intalneste pentru prima data un Gemeni, pentru ca s-ar putea lasa coplesit de entuziasm; minunat la inceput, dar care nu rezista prea mult si pericolul aici consta: in a lua o simpla atractie drept dragoste.\r\n\r\nGemenii sunt persoane interesante si atragatoare, dar mult prea prinse intr-o viata sociala activa pentru a-si face prea multe griji in privinta treburilor casei. Daca Taurul vrea sa pastreze un Gemeni pe termen lung, trebuie sa se zbata destul de mult, pentru ca acesta din urma are nevoie de cineva care-i impartaseste interesele si activitatile sociale, care nu are atata nevoie de un camin.\r\n\r\nDaca Geamanul este barbat, isi va dori o femeie care stie sa fie o gazda perfecta (iar cea Taur este) si care are aceleasi interese ca si el. Taurul incearca sa schimbe tendinta Gemenilor de a evita certurile si reprosurile de genul "Nu ma intelegi!". Un aspect in favoarea acestei perechi destul de fragil legate este insa puterea Taurului de a sustine un Geaman atunci cand lumea devine prea obositoare pentru acesta.\r\n\r\nViata sexuala ar putea fi afectata de toanele schimbatoare ale Gemenilor, care, avand o natura duala prin definitie, poate fi un copil jucaus intr-un moment si un primitiv necugetat in urmatorul, in acest plan. Taurul tipic va reactiona la asta, iar cel mai probabil Geamanul va ajunge in patul altcuiva cat de curand. Gemenii apreciaza putina agitatie in viata lor, iar daca nu o pot gasi acasa, o vor cauta in alta parte. Prin urmare, nu e tocmai perechea ideala. '),
(19, 2, 4, 'Racul vrea sa inteleaga fiecare nuanta a personalitatii Taurului, facandu-l sa se simta cea mai importanta persoana din viata lui (ei)... si se asteapta sa primeasca acelasi lucru in schimb!\r\n\r\nAmandoi sunt foarte inclinati catre camin, investind mult timp si efort in casa si copiii lor. Taurul nu va trebui sa se teama de infidelitate din partea Racului cel linistit; fiind un visator, acesta va ridica Taurul pe un piedestal si va astepta de la el o anumita perfectiune, iar deceptiile il vor face sa se retraga in carapacea lui, cu sentimentul unei dezamagiri cumplite. Taurul, care nu este cea mai plina de tact persoana din lume, va incerca sa-l convinga, cu stangacie, sa iasa de acolo, nereusind in final decat sa-l faca sa se inchida si mai mult.\r\n\r\nRacul are nevoie de multa intelegere, fara de care este mereu bosumflat, iar Taurul are instinctele grijulii care ii pot oferi aceasta, ajutandu-i sa se inteleaga mai bine decat s-ar astepta cineva. Uneori, nervii Racului vor ceda, dar sustinerea Taurului il va ajuta sa faca fata si sa aiba succes in orice face. Relatia aceasta se va intari in timp si cu putina grija, fiind personalitati atat de diferite, dar complementare in majoritatea cazurilor.\r\n\r\nIn dormitor, Racul e influentat de starea de moment, iar daca tocmai a avut loc o cearta, nici nu se pune problema sa-i stea mintea la frivolitati, ceea ce ar putea cladi un zid intre ei. In cazul in care cei doi sunt gata sa ofere cel putin cat primesc, daca nu si mai mult, relatia aceasta poate fi una excelenta. '),
(20, 2, 5, 'Taurul nu se poate abtine sa nu se indragosteasca de Leu, de puterea, caldura, generozitatea si rabdarea lui. Leul este un mare admirator al capacitatii Taurului de a se ocupa de bani si al felului lor sofisticat, fara a face macar vreun efort in aceasta directie. Datorita admiratiei reciproce, se atrag unul pe altul de la prima vedere.\r\n\r\nTaurul are impresia ca Leul este prea plin de el si prea sigur de pozitia lui, ca ia de buna si sigura afectiunea lui. Unele dintre certurile lor pot deveni confruntari majore. Fiecare dintre cei doi stie sa castige bani; daca barbatul este Leu, va dori ca perechea lui sa stea acasa mai degraba decat sa aiba o cariera proprie. Iar asta nu va placea majoritatii Taurilor. Taurul simte ca Leul ar trebui sa faca ceva in privinta compatibilitatii lor emotionale.\r\n\r\nLeul dovedeste adesea o totala lipsa de griji in ceea ce priveste sentimentele Taurului sau nevoile lui emotionale, iar aceasta atitudine e valabila si in dormitor, unde Leul ar putea sa gaseasca un Taur foarte rece, frustrand cumplit zodia de Foc. Pentru a aduce armonie in aceasta relatie, ambii trebuie sa faca eforturi in cam toate directiile.'),
(21, 2, 6, 'Dezacordurile dintre acestia doi sunt putine si nesemnificative, deoarece amandoi au o fire practica, o gandire logica si o inclinatie deosebita spre administrarea banilor. Taurul are nevoie de multa atentie, iar Fecioara adora sa se agite in jurul cuiva drag; prin urmare, legatura aceasta e mai mult decat buna. Ambilor le plac copiii si caminul. Acestea reprezinta o mare parte a vietii lor, cerandu-le atentie constanta.\r\n\r\nDesi ar parea perechea absolut perfecta, plina de fericire, exista si unele probleme (nimeni nu este perfect, nu?). Fecioara se straduieste din rasputeri sa aiba succes in cariera sau cel putin sa fie un parinte ideal, sarcini pe care Taurul crede ca le-ar putea indeplini in jumatate din timp si cu jumatate de efort, iar daca o si spune, are toate sansele sa starneasca furia Fecioarei, ranind-o unde o doare mai mult: in increderea ca poate excela in orice investeste putin efort.\r\n\r\nInclinatia spre critica a Fecioarei ii poate cauza Taurului mult stres si tensiune, deoarece acestuia nu-i place sa-i fie subliniate greselile. L-ar face sa vada rosu inaintea ochilor. Taurul mai rafinat va invata ca modul cel mai bun de a aplana acest potential conflict este sa ignore total situatia. Fecioara si Taurul au anumite obiceiuri si se conformeaza mereu regulilor, punct in care valorile lor morale coincid.\r\n\r\nFecioara nu este tocmai o zodie activa sexual, dar, alaturi de un Taur, va realiza ca nu putea fi mai placut. Taurul isi are felul lui de a inlatura inhibitiile Fecioarei si de a-i scoate la suprafata instinctele primare. Va fi nevoie totusi de multa rabdare. Cu alte cuvinte, per ansamblu, cei doi se potrivesc destul de bine. '),
(22, 2, 7, 'In acest caz, ambii traiesc in sfere superioare, apreciind toate aspectele artei, care ofera o baza excelenta relatiei lor, dar Balanta poate deruta pana la iritare Taurul cu schimbarile ei bruste, precum: o saptamana e ingropata in munca intr-o asemenea masura incat abia daca observa ca Taurul exista, iar in urmatoarea, se complace in lene totala, amanand orice decizie ce trebuie luata.\r\n\r\nTaurii simt nevoia sa-si planuiasca intreaga viata, dar Balanta nu-si va lua asemenea angajamente, iar aceasta duce la unele certuri extrem de grave. Daca femeia este Taur, va dori alaturi de ea un barbat care munceste cu tenacitate si consecventa, cu un venit apreciabil, dar Balanta detesta rutina de orice fel si va cauta mereu un serviciu care sa-i lase spatiu de exprimare.\r\n\r\nBalanta flirteaza cu nerusinare, folosind acest lucru pentru a-si sublinia ego-ul si nimic mai mult, dar Taurul cel gelos nu va putea face fata acestui lucru prea mult timp. Acesta trebuie, pentru a da o sansa relatiei, sa se obisnuiasca cu tendintele Balantei. Ea tolereaza de regula accesele de gelozie ale Taurului. Daca acesta ia decizii cu privire la relatia lor, nu are voie sa o dea in bara, pentru ca Balanta va da toata vina pe el.\r\n\r\nAtractia fizica dintre ei este atat de puternica incat cei doi ar putea tinde sa rezolve astfel unele dintre incompatibilitatile lor, dar mai devreme sau mai tarziu vor ajunge la concluzia ca viata nu se rezuma la asta; ideea in cauza le va submina atractia. Legatura aceasta nu are sanse prea mari sa dureze mult. Nu este recomandata.'),
(23, 2, 8, 'Nu tocmai perechea ideala\r\n\r\nAmbele zodii pot fi extrem de incapatanate si fixiste in ceea ce priveste propriile lor pareri. Chiar si cele mai mici probleme pot cauza adevarate razboaie intre parteneri, facand situatia intolerabila. Cu toate acestea, nu planul financiar va fi problema cea mai grava intre ei, deoarece ambii privesc cu maxima seriozitate aspectele legate de bani.\r\n\r\nFiecare dintre ei este posesiv si gelos, dar asta ii va atrage mai degraba unul spre altul decat le va cauza probleme, datorita faptului ca fiecare intelege sentimentul de nesiguranta prin care trece si celalalt. Taurul si Scorpionul au aceeasi nevoie de a avea o baza stabila si sigura, iar caminul va reprezenta o parte majora a vietii lor impreuna. Aceasta atitudine, cat si caracteristicile comune, ii vor tine pe cei doi impreuna.\r\n\r\nGandirea destul de putin flexibila a fiecaruia va sta in calea eforturilor de a trece peste deosebirile dintre firile lor intr-un mod amiabil; certurile nu vor inceta suficient incat sa poata fi facute sugestii de oricare parte. Firea puternic emotionala a Scorpionului intra in conflict cu aceea rationala, realista, a Taurului.\r\n\r\nIn plan fizic, situatia va fi cel mult devianta, desi ambii au apetit sexual puternic, si sunt rare cazurile cand acestea corespund destul pentru a putea lega o relatie pe termen lung.'),
(24, 2, 9, 'Nu tocmai perechea ideala\r\n\r\nProblemele incep atunci cand cei doi se indragostesc unul de altul, pentru ca, inainte, ca prieteni, Sagetatorul este potrivit pentru Taur, invatandu-l sa fie mai flexibil si sa-si largeasca orizonturile. Taurii detesta schimbarile in relatii, in timp ce Sagetatorilor le este greu sa mentina un nivel al afectiunii prea mult timp.\r\n\r\nSagetatorul este un aventurier care adora lumea, in timp ce Taurul se multumeste cu propriul lui camin. Cand acesta refuza sa fie alaturi de Sagetatorul cel activ, cel din urma isi va gasi pe altcineva care sa o faca. El nu prea are inclinatii fixe, spre camin, in timp ce Taurul este prin excelenta un om de casa. Sagetatorul abia daca observa eforturile Taurului de a-i mentine un camin confortabil. Sagetatorul suporta criticile si chiar s-ar putea schimba putin, dar nu va fi niciodata "imblanzit". Fidelitatea este ceva rar in cazul acestui pe jumatate om si pe jumatate animal, iar firea geloasa a Taurului va fi starnita de acest fapt.\r\n\r\nPe plan fizic, Sagetatorul doreste ca Taurul sa fie foarte versatil, pentru a-si putea pune in aplicare fanteziile, ceea ce intra in conflict cu natura conservatoare a Taurului. Doar cateva sugestii facute in pat si Sagetatorul ar putea ucide instantaneu dragostea dintre ei. Ar putea fi o prietenie frumoasa, dar nu si mai mult. Nu e tocmai o pereche indicata. '),
(25, 2, 10, 'Carpicornul ar putea sa nu para prea ambitios sau inteligent la inceput, dar Taurul observa aceste calitati pe masura ce relatia progreseaza, ca si partea dominanta a firii sale. Capricornul vrea sa stie totul despre Taur, inclusiv grijile si temerile, pe care i le observa imediat. Isi inteleg foarte bine sentimentele, supararile, cat si simtul umorului, datorita unei empatii naturale existente intre ei.\r\n\r\nAmandoi au nevoie de stabilitate acasa, care sa-i faca sa se simta siguri si iubiti. Capricornului ii lipseste capacitatea de a se exprima bine si asta il deruteaza pe Taur, care isi da seama intr-un final ca faptele vorbesc mai tare decat cuvintele. Viata acestor doi oameni decurge lin, insa problemele apar in clipa cand Taurul va face un lucru prea extravagant, care il va deranja pe Capricornul cel atent si grijuliu. Tacut fiind (totusi apele linistite sunt adanci), este o companie buna pentru Taurul iubitor de camin, iar daca totul este bine acasa, acestia doi sunt inseparabili.\r\n\r\nApetitul sexual al Capricornului ar putea fi ori prea ingaduitor, ori afectat de elemente exterioare. Taurul trebuie sa fie sensibil la tensiunea acestuia si dispus sa discute cu el. E o relatie excelenta pentru ca fiecare stie cum sa se descurce cu celalalt. Perechea ideala. '),
(26, 2, 11, 'Varsatorul nu recunoaste superioritatea cuiva decat in momentul in care i s-a castigat respectul; este neconventional si detesta formalismul. Va discuta pe larg cu cineva doar daca are ceva interesant de spus.\r\n\r\nCu Taurul, aspectele materiale si siguranta au un rol important, dar nu se intampla si in cazul Varsatorului. Acesta vede munca drept un mod de a-si ascuti mintea si de a-si largi aria de cunostinte; schimbarile frecvente de serviciu sunt rezultatul acestei dorinte. Orice neintelegeri ar avea, cu Taurul sau cu altcineva, vor fi discutate intr-un mod rational si lucid, Varsatorul detestand emotiile negative ce i-ar putea afecta claritatea gandirii. Taurul se supara cand Varsatorul incearca sa rezolve problemele altora si sa salveze lumea, starnindu-i gelozia cumplita. Din nefericire pentru Taur, nu prea are parte de empatie sau de intelegere din partea celuilalt.\r\n\r\nVarsatorul pune putin accent pe sex si il plaseaza destul de jos in lista de prioritati si necesitati. Aceasta atitudine il deranjeaza pe Taur, care nu accepta sa imparta patul cu problemele intregii lumi, ceea ce il face sa apara drept prea pretentios in ochii Varsatorului. E o combinatie ce ar trebui evitata, pentru ca e departe de a fi perfecta! '),
(27, 2, 12, 'La prima vedere, Pestii par foarte adaptabili si lejeri la cerintele mari ale Taurului. Probabil tocmai asta il va atrage pe cel din urma din prima clipa. Insa Taurul se va trezi destul de brusc in momentul in care va descoperi ca Pestii vor un lucru intr-un moment si altul in momentul urmator.\r\n\r\nIn vreme ce Taurul vrea ca unele probleme sa fie rezolvate de o maniera practica, Pestii vor veni cu metode neobisnuite, ce adesea merg mai bine decat ale celuilalt, mai bine decat ar fi crezut vreodata acesta. Taurul este obisnuit sa fie privit cu admiratie, dar Pestii nu suporta asta deoarece nu iau in considerare decat propriile idei; alteori, Taurul va constata ca Pestele depinde complet de el. Acesta are tendinta de a-si vari capul in nisip de cum apar probleme; refuza sa le discute rational, sperand ca vor disparea de la sine, ceea ce rareori se intampla.\r\n\r\nCand apar prea multe probleme, Pestii se indreapta spre cel mai apropiat bar pentru a-si ineca amarul. Barbatii, mai mult decat femeile Pesti, sunt foarte sensibili la bautura din cauza ca trebuie aproape mereu sa ia decizii, ceea ce nu le face nici o placere. Taurul trebuie sa accepte aceste scapari daca vrea sa-si petreaca viata alaturi de un reprezentant al Pestilor. Pe de alta parte, capacitatile aproape premonitorii ale Pestilor ii vor ajuta sa ghiceasca mereu gandurile si emotiile Taurilor, ajutandu-l sa reactioneze adecvat si sa-l mentina fericit.\r\n\r\nPe plan sexual, Pestii sunt foarte sensibili la nuantele dorintelor Taurilor si vor face totul pentru a-i sti fericiti, dar la orice critica, Pestii isi vor cauta alti parteneri. Ar putea fi totusi o legatura buna daca Taurul nu asteapta mult prea multa forta din partea partenerului. Intr-adevar dragostea este cheia. '),
(28, 3, 3, 'Perechea ideala pentru un Geaman ar parea a fi tot un Geaman, deoarece se inteleg unul pe altul la un nivel mai profund si fiecare e de acord cu ideile celuilalt pentru dezvoltare.\r\n\r\nIn general e un acord pe plan intelectual care ii permite lui sa-i fie ei si iubit, si tovaras de viata, si prieten... dar se bazeaza mult si pe instinctele ei materne, posibil nu tocmai bine dezvltate, care sa-i suporte toanele copilaresti. Si ea e copilaroasa din cand in cand, iar asta poate duce la certuri. Acestia doi se cearta fara a lasa animozitatile sa le scape de sub control. Daca se ajunge acolo, ar putea fi periculos pentru relatia lor; daca isi impun un autocontrol si se iubesc suficient de mult, vor trece si peste asta. Daca vreunul dintre ei este genul mai putin evoluat de Gemeni, va avea tendinta sa denatureze adevarul, sa insele si sa fie iresponsabil, spre nemultumirea celuilalt.\r\n\r\nDeoarece au aceleasi necesitati si o intelegere reciproca a ceea ce le face placere si ce nu, atunci vor fi foarte compatibili in pat. Perechea aceasta este un dezastru daca celor doi le lipseste forta si corectitudinea. Insa, in caz contrar, poate merge foarte bine.'),
(29, 3, 4, 'Atractia Gemenilor pentru Rac la inceput ar putea reprezenta o combinatie ideala de stabilitate. Complimentele pe care i le face Racul in mod constant ii cresc moralul la cote maxime unui Geaman, caruia ii face placere si felul in care Racul reactioneaza la simtul umorului si la felul in care se distreaza acesta. Daca totul merge bine, Geamanul va invata de la Rac sa fie mai sensibil fata de ceilalti si sa fie mai putin dur cu ei, iar Racul va invata felul rapid de a lua decizii si de a actiona al Gemenilor.\r\n\r\nRacul este genul care isi iubeste caminul si va fi multumit sa stea acolo si sa se izoleze de restul lumii, dar Geamanul va deveni in curand nelinistit si nu-i va pica bine, pentru ca este o persoana sociabila si ii place sa stea intre oameni; nu vrea sa se simta prizonier in propria casa... altfel viata ii va deveni curand un calvar. Actiunile Racilor sunt mereu dictate de sentimente, indiferent cat de inteligenti sunt. Datorita acestui lucru, cei doi s-ar putea certa destul de des, situatie pe care nici unul dintre ei nu o va putea suporta multa vreme.\r\n\r\nRacul depinde, fizic, de impulsurile si starea de moment, iar aceste senzatii si sentimente pot fi foarte profunde, cata vreme dorintele Gemenilor sunt dictate de minte. Ceea ce creeaza confuzie intre ei, deoarece nu-i stimuleaza aceleasi lucruri. Frustrarile in acest domeniu sunt inevitabile. Deci, nu tocmai o pereche ideala. '),
(30, 3, 5, 'Avand caracter puternic, Leul doreste sa se faca totul cum vrea el, dar in stari de spirit mai generoase nu pare la fel de putin rezonabil Gemenilor. Acestia au puterea si capacitatea de adaptare necesare, mai ales in momentul in care isi dau seama ca Leii sunt nu doar sinceri, ci si ca fac tot posibilul sa fie totul bine mereu.\r\n\r\nLeul are perioade de lene pura, cand nu face efectiv nimic, iar aceasta latura a personalitatii sale e de neinteles pentru Gemeni. Geamanul s-ar putea simti cam gelos pe capacitatea Leului de a fi in centrul atentiei oriunde ar merge, avand impresia ca este eclipsat. E suficient de inteligent incat sa inteleaga ca Leul va renunta repede la lene, iar Leul stie sa-si lase ocazional perechea Gemeni sa straluceasca la randul ei. Amandoi au capacitatea de a se adapta la toanele si actiunile celuilalt, iar asta poate face din relatia lor una foarte buna, fie datorita provocarilor pe care le aduce, fie in ciuda lor. Leul poate sa ierte si sa uite ocazionalele iesiri destul de violente ale Geamanului si sa-i respecte dorinta de libertate.\r\n\r\nPe plan fizic, Leul se implica total, iar dorintele diverse ale Geamanului sunt greu de inteles pentru el. Leul este capabil de a scapa de resentimentele pe care le-ar putea crea Geamanului, simplificand situatia. Prin urmare, este chiar o uniune recomandata. '),
(31, 3, 6, 'Atractia exercitata asupra Fecioarei de catre Gemeni se datoreaza aparentei puteri si atitudini responsabile caracteristice, ce reprezinta siguranta, si dorintei de a face orice pentru persoana iubita. Fecioara ii poate oferi Geamanului un scop, cat si stimulare intelectuala.\r\n\r\nIn timp, Gemenii devin nerabdatori. Incapacitatea Fecioarei de a-i accepta ideile mai putin ortodoxe ii va crea resentimente celuilalt, ca si atitudinea destul de rigida a Fecioarei in privinta banilor, ce irita Gemenii. Fecioara insa vrea sa-i inteleaga toanele si sa i le accepte ca pe ceva propriu perechii sale. Criticile Fecioarei ar putea determina Geamanul sa-i reproseze ca ar fi de moda veche si exagerat de perfectionist, jignind. Fecioarele nu isi dau seama ca au aceasta trasatura. Inconstanta Gemenilor in majoritatea lucrurilor le va face sa se indoiasca de capacitatea acestora de a iubi pe cineva in afara de propria persoana. Mai multe astfel de motive, plus un sentiment de claustrofobie, i-ar putea face pe Gemeni sa devina violenti.\r\n\r\nCat despre planul fizic, la inceput exista atractie puternica intre ei, dar cand Gemenii isi simt amenintata mandria, li se stinge si dorinta pentru celalalt. Desi asta nu deranjeaza Fecioara, Geamanul in schimb isi va cauta pe altcineva. Nu este cea mai indicata legatura. '),
(32, 3, 7, 'Dragostea este cheia\r\n\r\nAmbii sunt zodii de aer, iar asta ii face sa aiba atitudini, intelect si sentimente similare. Daca ambii sunt de aceeasi forta psihica, ar trebui sa fie situatia ideala. Fiecare dintre ei are nevoie de schimbare, fiecaruia ii place viata sociala.\r\n\r\nGeamanul va trebui sa faca Balanta sa se simta complet libera sa-si conduca propria viata, pentru ca aceasta din urma tine mai mult la libertatea ei decat Gemenii. Balanta nu este foarte atasata de casa, iar barbatii acestei zodii se simt sacaiti daca Gemenii le cer sa-si asume responsabilitati, ceea ce va garanta o fuga imediata. Temperamentul uneori copilaresc al Gemenilor e considerat exagerat si nelalocul lui de catre Balanta, desi ar putea reactiona pozitiv la nesiguranta si gelozia acestora. Daca Geamanul intinde coarda, sau o face prea des, va pierde intelegerea Balantei.\r\n\r\nDeoarece ambii simt ca relatia aceasta trebuie sa mearga, s-ar putea s-o faca sa functioneze intr-adevar. Iubitul Balanta isi exprima foarte deschis dragostea cu orice ocazie (sa nu uitam ca Balanta, datorita personalitatii sale, spune acelasi lucru tuturor perechilor sale). Inclinatia Gemenilor pentru dragoste e stimulata de aceste dovezi de afectiune si se vor simti mai siguri in cadrul acestei relatii.\r\n\r\nBalanta este puternic inclinata spre partea fizica si planul acesta nu va fi niciodata uitat. Viata acestora doi nu poate fi plictisitoare. Nu este o uniune ideala, dar e pe aproape, iar dragostea chiar poate face totul sa mearga. '),
(33, 3, 8, 'Gemenii sunt genul de oameni care incearca sa traiasca la maximum, sa fie ocupati mereu, dar Scorpionii sunt mai axati pe dezvoltare personala. Gemenii se simt bine stimuland pe cei din jur, iar asta ar putea starni gelozia Scorpionului, ce sta mereu sa izbucneasca, deoarece acesta este foarte susceptibil.\r\n\r\nScorpionul este foarte protector fata de perechea sa si va face orice pentru a o apara de orice posibil rau. Acest tip de persoana are nevoie de un partener care sa fie mandru de el. Desi Scorpionul incearca din rasputeri sa faca fericit Geamanul, adesea nu reuseste, pentru ca Gemenii au nevoie de mult mai multi oameni si de activitate pentru a fi fericiti.\r\n\r\nPosesivitatea si gelozia Scorpionului ii repugna Geamanului, iar acesta ar putea foarte bine fi un motiv de despartire, deoarece Gemenii se simt incarcerati intr-o asemenea relatie. Toanele lor nu coincid mereu, dar cand se intampla sa fie la fel, acest lucru ii apropie. Totusi, acest lucru nu se intampla suficient de des pentru a putea fi o legatura fericita, din cauza nesigurantei Scorpionului, ce poate deveni chiar si violent.\r\n\r\nRelatia sexuala in acest cuplu e la fel de agitata ca si in celelalte cazuri. Depinde mult de evenimentele zilei si este putin probabil ca legatura aceasta sa ii faca fericiti pe cei doi. Nu este o legatura recomandata. '),
(34, 3, 9, 'E usor sa te indragostesti de un Sagetator datorita faptului ca este atat de plin de viata si de afectiune sincera pentru oamenii din jur; totusi, nu e tocmai simplu sa faci aceasta dragoste sa dureze.\r\n\r\nGemenii au nevoie sa vorbeasca, sa invete, sa observe, iar asta ar putea atrage Sagetatorul, ce impartaseste aceleasi trasaturi. Geamanul are o latura extrem de incapatanata care ar putea determina Sagetatorul sa isi doreasca o pauza, mai ales ca planurile si ideile fiecaruia despre bani nu coincid. Deoarece ambii sunt magneti pentru alti oameni, vor sta putin timp impreuna. Amandoi au nevoie de multa libertate personala, dar in moduri diferite. Sagetatorul trebuie sa simta mereu ca este liber si ca poate face orice doreste, in timp ce Gemenii vor sa faca tot felul de lucruri interzise. Desi este prin natura lui un pisalog, Sagetatorul nu suporta sa fie pisalogit la randul lui, ceea ce-l face sa-si simta amenintata pretioasa libertate. Asta l-ar putea indeparta. Gelozia Geamanului are un rol major, deoarece Sagetatorul rareori este fidel.\r\n\r\nPe plan fizic lucrurile merg mai bine, fiind de fapt singurul unde sunt compatibili. Prin urmare, nu este tocmai perechea perfecta.'),
(35, 3, 10, 'Rezervatul Capricorn, serios si practic, pune accent puternic pe cariera, iar Geamanul ar face bine sa fie interesat de ea, pentru ca altfel va fi exclus dintr-o parte importanta a vietii Capricornului. S-ar putea sa fie cam dificil pentru Geaman, vorbaret cum e, sa asculte probelemele acestuia, dar acest lucru este absolut necesar pentru a scapa de tensiunile care se aduna.\r\n\r\nCapricornul trebuie sa-si domoleasca o anumita neliniste si nerabdare care il macina pe dinauntru. Intelegerea Geamanului l-ar putea ajuta foarte mult in acest sens, dandu-i forta necesara. Este ceva mai zgarcit si se gandeste mereu la siguranta viitorului, in timp ce Gemenii cheltuiesc asa cum traiesc: conform impulsului de moment. Aceste diferente fundamentale trebuie discutate, pentru ca e nevoie de ceva mai mult decat de dragoste pentru a le depasi.\r\n\r\nPentru ca relatia sexuala sa fie un succes, Geamanul trebuie sa-i distraga Capricornului gandurile de la cariera lui si de la problemele aferente. Deoarece acest lucru implica multe incercari, Geamanul ar putea sa creada ca este peste puterea lui, fiind obisnuit sa fie cel dorit, si nu va depune mai mult decat un nivel normal de efort in aceasta directie. Perechea aceasta necesita multa munca pentru a merge bine. '),
(36, 3, 11, 'Varsatorul ar putea fi atras de versatilitatea Geamanului si de nevoia lui de a-si comunica gandurile si sentimentele. Gemenii adora o dicutie stimulanta si pot face fata oricarui subiect pe care l-ar putea deschide Varsatorul. E posibil sa fie complet absorbiti de ce spune fiecare si sa se inteleaga mai mult decat bine in acest sens.\r\n\r\nGemenii au tendinta de a-si schimba frecvent serviciul, pentru ca au interese diverse, dar nu se specializeaza in niciun domeniu. Partea proasta este faptul ca Varsatorul are cam aceleasi tendinte, dar din motive diferite; serviciul curent ar putea sa nu fie suficient de interesant si sa nu-i ofere provocarile pe care si le doreste; impreuna, acestia doi ar putea avea probleme banesti serioase!\r\n\r\nAtractia sexuala dintre ei va fi foarte intensa, deoarece Varsatorul gaseste Geamanul foarte atractiv fizic. Ar putea fi o pereche buna; dragostea e catalizatorul care face lucrurile sa mearga. '),
(37, 3, 12, 'In combinatia Gemeni-Pesti se gasesc patru oameni, sau personalitati, din cauza ca ambele zodii sunt duale. O latura a Pestilor este pozitiva, plina de idei, iar cealalta este mistica, secretoasa si ilogica. Gemenii sunt si ei plini de toane pe care le schimba usor. S-ar putea indragosti de una dintre laturile Pestelui, deoarece perceptia si intuitia sunt decisive in acest context, iar Pestii reusesc sa ghiceasca astfel fiecare dorinta a Gemenilor.\r\n\r\nCealalta latura a personalitatii Pestilor ar putea reprezenta un soc pentru Gemeni, fiind ceva pentru care acestia nu sunt deloc pregatiti. Gemenii vor sa cunoasca motivul din spatele fiercarei actiuni a Pestilor, iar pe de alta parte acestia tind sa se retraga in ei pentru a-si analiza problemele si iau decizii fara a oferi vreo justificare pentru ele. Fie Gemenii invata sa accepte asta si se obisnuiesc cu aceasta trasatura a Pestilor, fie vor avea multe probleme din cauza ei. Gemenii simt nevoia sa-si exerseze capacitatile cerebrale cu sexul opus, iar aceasta starneste gelozia Pestilor - ceva ce Gemenii nu tolereaza.\r\n\r\nPe plan fizic, ar fi o pereche ideala intr-o relatie scurta si pasionata, dar teribil de agitata pe termen lung. Desi Pestii pot oferi o stimulare mentala minuanta pentru a incita Gemenii, acest lucru nu va duce decat la incercarea de a-si rezolva toate problemele in dormitor pana cand vor realiza amandoi ca trebuie sa infrunte viata pentru a supravietui.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_name`, `email`, `content`) VALUES
(1, 'Nicu', 'nicu_lrpr@mail.ru', '0'),
(2, 'nicu', 'niku.besliu@gmail.com', 'mesaj de test pentru lungimea mesajului');

-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE IF NOT EXISTS `horoscope` (
  `horoscope_id` int(11) NOT NULL,
  `id_sign` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `horoscope_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horoscope`
--

INSERT INTO `horoscope` (`horoscope_id`, `id_sign`, `description`, `horoscope_date`) VALUES
(16, 1, 'Berbec', '2015-05-21'),
(17, 2, 'taur', '2015-05-21'),
(18, 3, 'gemeni', '2015-05-21'),
(19, 4, 'rac', '2015-05-21'),
(20, 5, 'leu', '2015-05-21'),
(21, 6, 'fecioara', '2015-05-21'),
(22, 7, 'balanta', '2015-05-21'),
(23, 8, 'scorpion', '2015-05-21'),
(24, 9, 'sagetator', '2015-05-21'),
(25, 10, 'capricorn', '2015-05-21'),
(26, 11, 'varsator', '2015-05-21'),
(27, 12, 'pesti', '2015-05-21'),
(28, 1, 'brebec 21 mai test ', '2015-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE IF NOT EXISTS `sign` (
  `sign_id` int(11) NOT NULL,
  `sign_name` varchar(50) NOT NULL,
  `sign_date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`sign_id`, `sign_name`, `sign_date`) VALUES
(1, 'aries', '21.03-20.04'),
(2, 'taurus', '21.04-20.05'),
(3, 'gemini', '21.05-21.06'),
(4, 'cancer', '22.06-22.07'),
(5, 'leo', '23.07-23.08'),
(6, 'virgo', '24.08-23.09'),
(7, 'libra', '24.09-23.10'),
(8, 'scorpio', '24.10-22.11'),
(9, 'sagittarius', '23.11-21.12'),
(10, 'capricorn', '22.12-20.01'),
(11, 'aquarius', '21.01-20.02'),
(12, 'pisces', '21.02-20.03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1, 'nicu_lrpr@mail.ru', '1111'),
(2, 'nicu@gmail.com', '1111'),
(3, 'nicu@gmail.com', '1111'),
(4, 'nicunicu', '1111'),
(5, 'nicunicu', '1111'),
(6, 'nicunicu', '1111'),
(7, 'n', '1111'),
(8, 'ni', '1111'),
(9, 'nic', '1111'),
(10, 'nicu', '1111'),
(11, '11', '1111'),
(12, '111', '1111'),
(13, '1111', '1111'),
(14, '12', '12'),
(15, 'asd', 'as'),
(16, 'sad', '1'),
(17, 's', 's'),
(18, 'g', 'g'),
(19, '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `compatibility`
--
ALTER TABLE `compatibility`
  ADD PRIMARY KEY (`compatibility_id`), ADD KEY `sign1` (`sign1`), ADD KEY `sign2` (`sign2`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `horoscope`
--
ALTER TABLE `horoscope`
  ADD PRIMARY KEY (`horoscope_id`), ADD KEY `id_sign` (`id_sign`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compatibility`
--
ALTER TABLE `compatibility`
  MODIFY `compatibility_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `horoscope`
--
ALTER TABLE `horoscope`
  MODIFY `horoscope_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `compatibility`
--
ALTER TABLE `compatibility`
ADD CONSTRAINT `compatibility_ibfk_1` FOREIGN KEY (`sign1`) REFERENCES `sign` (`sign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `compatibility_ibfk_2` FOREIGN KEY (`sign2`) REFERENCES `sign` (`sign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horoscope`
--
ALTER TABLE `horoscope`
ADD CONSTRAINT `horoscope_ibfk_1` FOREIGN KEY (`id_sign`) REFERENCES `sign` (`sign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
