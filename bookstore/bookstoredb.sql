-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 09:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci DEFAULT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('978-0-321-94786-4', 'Crima si pedeapsa', ' F.M. Dostoievski', 'crima_pedeapsa.jpg', 'Romanul reprezintă una dintre capodoperele dostoievskiene și una dintre marile opere ale literaturii universale, în care, așa cum spunea Albert Kovács: „Formula romanului dostoievskian – definit de trăsături ca: psihologic, realist-fantastic, ideologic sau filozofic – își găsește întruchiparea perfectă, pentru prima dată. [..] Geneza formulei coincide cu geneza romanului. [...] Etalon al romanului dostoievskian, Crimă și pedeapsă nu are nevoie de vreo recomandare specială din partea criticului, el se recomandă singur ca o capodoperă a literaturii ruse și universale, receptată ca atare pretutindeni, alături de Don Quijote, Hamlet, Faust, Roșu și Negru, Război și pace, Madame Bovary...', '20.00', 6),
('978-0-7303-1484-4', 'Cum sa nu mori', 'Peter Baines', 'cum_sa_nu_mori.jpg', 'Scrisă de medicul care a creat site-ul de mare popularitate NutritionFacts.org, cartea Cum să nu mori aduce dovezi ştiinţifice fundamentale referitoare la singura dietă care poate preveni şi inversa marea majoritate a cauzelor mortalităţii generate de boli. Adevărul trist este că cei mai mulţi dintre doctori pot trata bolile acute, dar nu şi pe cele cronice (pe care nu ştiu nici măcar cum să le prevină). Cele 15 cauze primare ale mortalităţii premature – boli precum cea cardiovasculară, cancerul, diabetul, Parkinson, hipertensiunea şi altele – răpesc anual viaţa a 1,6 milioane de americani. Acest lucru nu este însă obligatoriu. Urmând sfaturile doctorului Greger, susţinute de dovezi ştiinţifice solide, tu poţi învăţa ce alimente trebuie să consumi şi ce schimbări ale stilului de viaţă trebuie să introduci în viaţa ta pentru a preveni şi pentru a combate aceste boli, prelungindu-ţi astfel viaţa. Ai o istorie de cancer la prostată în familie? Renunţă la paharul de lapte şi adaugă nişte seminţe de in la dieta ta, cât mai des. Suferi de hipertensiune? Ceaiul de hibiscus scade tensiunea mai bine decât unul din principalele medicamente pentru hipertensiune, şi asta fără efecte secundare. Ai ficatul bolnav? Cafeaua te poate ajuta să reduci inflamarea acestui organ. Suferi de cancer la sân? Consumul boabelor de soia este asociat cu o prelungire a vieţii în astfel de cazuri. Eşti îngrijorat din cauza bolii cardiovasculare (cauza numărul unu a mortalităţii în Statele Unite)? Treci la o dietă bazată pe alimente integrale de origine vegetală. Există nenumărate dovezi care atestă că această dietă nu numai că previne boala, dar o poate chiar opri şi inversa. Pe lângă alimentele recomandate pentru tratarea principalelor 15 cauze ale mortalităţii, cartea Cum să nu mori include Lista Celor 12 Alimente Recomandate Zilnic de Dr. Greger, în care vei găsi alimentele şi activităţile pe care merită să le integrezi în rutina ta zilnică. Pline de sfaturi uşor de pus în practică şi de indicaţii nutriţionale adeseori surprinzătoare, aceste „ordine ale medicului” sunt exact lucrul de care ai nevoie pentru a duce o viaţă mai lungă şi mai sănătoasă.', '20.00', 2),
('978-1-118-94924-5', 'Mandrie si Prejudecata', 'Jane Austen', 'mandrie_prejudecata.jpg', 'Elizabeth Bennet este intruchiparea perfecta a eroinei tipice pentru Jane Austen: inteligenta, generoasa, sensibila, incapabila de gelozie sau de orice alt pacat major. Am putea crede ca asta o face o mironosita insuportabila, dar adevarul e ca Lizzy este o tanara moderna si sofisticata, care, la nevoie, stie sa dea o replica spirituala si politicoasa, insa mustind de sarcasm. Ocazia i se iveste din plin cand il cunoaste pe arogantul, dar onestul burlac Fitzwilliam Darcy, prototipul eroului romantic distant si intens masculin, care o trateaza initial cu superioritate si chiar cu grosolanie. Caci, fara indoiala, miza romanului Mandrie si prejudecata, intrebarea care a facut si face generatii de cititori sa intoarca fila dupa fila pana in ziua de azi este: vor ajunge Elizabeth si domnul Darcy, in ciuda diferentelor care ii fac aparent incompatibili, sa fie impreuna? Descoperiti raspunsul in aceasta carte devenita clasica, savurand o poveste de dragoste scrisa dupa toate regulile artei si lasandu-va fermecati de personajele ei memorabile!', '20.00', 2),
('978-1-1180-2669-4', 'Enigma Otiliei', 'George Calinescu', 'enigma_otiliei.jpg', 'In editia publicata de Editura Agora, romanul Enigma Otiliei (1938) – capodopera a epicii lui G. Calinescu – apare in forma lui autentica. Dupa 1947 cartea a fost reeditata cu modificari semnificative, impuse de ideologia comunista prin institutia cenzurii, forma corupta in care a continuat sa circule pana astazi. Enigma Otiliei este un roman citadin, al Bucurestiului de pana la Primul Razboi Mondial. Regasim lumea micii burghezii bucurestene, careia ii apartin toate pesonajele, exceptandu-l pe Leonida Pascalapol, mare mosier si intelectual de rasa. Nimic livresc, nimic inventat in atmosfera in care evolueaza personajele; este covarsitoare impresia de experienta treptata, asa cum o imprima viata, cu sinuozitatile, cu surprizele, cu umbrele si luminile ei. In roman se confrunta doua lumi: cea „veche” cu cea „noua”. Lumea veche, alimentata de o scara de valori desuete, supraordonate de cea materiala (nu intamplator „marul discordiei” il reprezinta substantiala mostenire a lui Mos Costache Giurgiuveanul), circumscrie un teritoriu al asfixiei morale, al claustrarii, de care profita singurul ei produs cu adevarat vital si dinamic – abilul si inteligentul Stanica Ratiu, arivistul, fanfaronul sentimentul, dar mai ales profitorul de ocazie lipsit de orice scrupul, care sta mereu la panda in vederea marii lovituri. De cealalta parte se afla lumea noua, tinereasca si vie, axata pe valori superioare, ideale: studentul Felix Sima, viitoare figura ilustra a universitatii si medicinii nationale, rafinatul intelectual si aristocrat Leonida Pascalopol, frumoasa si seducatoarea adolescenta Otilia Marculescu, de „o subtirime delicata, botticelliana”. G. Calinescu va marturisi mai tarziu: „Otilia este «eroina mea lirica», proiectia mea in afara, o imagine lunara si feminina. Flaubertian, as putea spune si eu: «Otilia c’est moi», e fondul meu de ingenuitate si copilarie [...], este tipizarea mea, fundamentala, in ipoteza femina. Otilia este oglinda mea de argint.”', '20.00', 1),
('978-1-44937-019-0', 'Ultima noapte de dragoste. Intaia noapte de razboi', 'Camil Petrescu', 'ultima.jpg', 'Triunghiuri amoroase sunt destule in amandoua romanele lui Camil Petrescu de dinainte de razboi. Combustibilul care pune dorinta in miscare este, in amandoua, vanitatea. Daca pasiunea se analizeaza si formeaza obiectul prozei psihologice, vanitatea se reflecta in gesturi si formeaza obiectul prozei comportiste.Camil Petrescu, atat de dator lui Proust in tezele lui despre roman, nu-i datoreaza mare lucru in romane ca atare. Patul lui Procust e romanul unor vanitati ranite: a doamnei T. si a lui Fred Vasilescu, in primul rand.Tocmai ale celor carora Autorul le da cuvantul, pe care-i indeamna sa scrie.Doamna T. reuseste mai bine sa se confeseze, desi nici ea pana la capat.Fred Vasilescu, in schimb, nu vorbeste deloc despre el insusi (nu aflam niciodata de ce o paraseste pe doamna T., pe care o iubea), preferand sa se ocupe de Ladima si de Emilia, a caror relatie il intriga, fiindca nu descifreaza in ea nicio urma de vanitate.Din contra, o patima greu stapanita la Ladima, iar la Emilia un vag dispret de femeie nesatisfacuta de darurile preponderent epistolare ale poetului indragostit.(NICOLAE MANOLESCU)', '20.00', 3),
('978-1-44937-075-6', 'Beautiful JavaScript', 'Anton Kovalyov', 'beauty_js.jpg', 'JavaScript is arguably the most polarizing and misunderstood programming language in the world. Many have attempted to replace it as the language of the Web, but JavaScript has survived, evolved, and thrived. Why did a language created in such hurry succeed where others failed?\r\n\r\nThis guide gives you a rare glimpse into JavaScript from people intimately familiar with it. Chapters contributed by domain experts such as Jacob Thornton, Ariya Hidayat, and Sara Chipps show what they love about their favorite language - whether it\'s turning the most feared features into useful tools, or how JavaScript can be used for self-expression.', '20.00', 3),
('978-1-4571-0402-2', 'Un secol de poezie romana scrisa de femei', 'Alina Purcaru', 'poezie.png', 'Mostenirea lasata de poetele care au debutat in perioada 1945-1989, in Romania, Republica Moldova si in diaspora, este vasta, un intreg continent de explorat. In volumul de fata, sunt prezente nume cunoscute pasionatilor de literatura, precum Angela Marinescu, Mariana Marin, Magda Carneci sau Nora Iuga, poete prezente in manuale si deci cunoscute de publicul larg, ca Ana Blandiana sau Nina Cassian, dar si poete care merita sa fie citite mult mai mult, precum Grete Tartler, Constanta Buzea, Gabriela Melinescu sau Marcela Benea, pentru a oferi doar cateva exemple. Sunt, de asemenea, incluse poete uitate, ca formidabila Eta Boeriu, cunoscuta mai mult in rolul sau de traducatoare decat de poeta, sau promitatoarea Ileana Zubascu, care, oripilata de propunerea unui critic literar, care i-a cerut servicii sexuale in schimbul promovarii ei pe scena literara, a incetat sa mai aiba de-a face cu poezia, desi a avut un debut stralucitor. Esential ni se pare, in continuare, sa privim si sa confruntam aceasta mostenire, sa o identificam si sa o aducem la suprafata, din punctul in care ne aflam acum, din prezentul marcat de toate urgentele si tensiunile lui. - Alina Purcaru, Paula Erizanu.', '20.00', 1),
('978-1-484216-40-8', 'Android Studio New Media Fundamentals', 'Wallace Jackson', 'android_studio.jpg', 'Android Studio New Media Fundamentals is a new media primer covering concepts central to multimedia production for Android including digital imagery, digital audio, digital video, digital illustration and 3D, using open source software packages such as GIMP, Audacity, Blender, and Inkscape. These professional software packages are used for this book because they are free for commercial use. The book builds on the foundational concepts of raster, vector, and waveform (audio), and gets more advanced as chapters progress, covering what new media assets are best for use with Android Studio as well as key factors regarding the data footprint optimization work process and why new media content and new media data optimization is so important.', '20.00', 4),
('978-1-484217-26-9', 'C++ 14 Quick Syntax Reference, 2nd Edition', '	Mikael Olsson', 'c_14_quick.jpg', 'This updated handy quick C++ 14 guide is a condensed code and syntax reference based on the newly updated C++ 14 release of the popular programming language. It presents the essential C++ syntax in a well-organized format that can be used as a handy reference.\r\n\r\nYou won\'t find any technical jargon, bloated samples, drawn out history lessons, or witty stories in this book. What you will find is a language reference that is concise, to the point and highly accessible. The book is packed with useful information and is a must-have for any C++ programmer.\r\n\r\nIn the C++ 14 Quick Syntax Reference, Second Edition, you will find a concise reference to the C++ 14 language syntax. It has short, simple, and focused code examples. This book includes a well laid out table of contents and a comprehensive index allowing for easy review.', '20.00', 4),
('978-1-49192-706-9', 'Pisica si Orasul', 'NICK BRADLEY', 'pisica.jpeg', 'When you have questions about C# 6.0 or the .NET CLR and its core Framework assemblies, this bestselling guide has the answers you need. C# has become a language of unusual flexibility and breadth since its premiere in 2000, but this continual growth means there\'s still much more to learn.\r\n\r\nOrganized around concepts and use cases, this thoroughly updated sixth edition provides intermediate and advanced programmers with a concise map of C# and .NET knowledge. Dive in and discover why this Nutshell guide is considered the definitive reference on C#.', '20.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(5, 'angel jude suarez', 'brgy. tooy', 'himamaylan city', '6108', 'philippines');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(7, 5, '20.00', '2021-03-10 05:03:55', 'angel jude suarez', 'brgy. tooy', 'himamaylan city', '6108', 'philippines');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(5, '978-1-484217-26-9', '20.00', 4),
(5, '978-1-118-94924-5', '20.00', 1),
(7, '978-0-321-94786-4', '20.00', 1),
(7, '978-0-7303-1484-4', '20.00', 1),
(7, '978-1-118-94924-5', '20.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, '	Editura Litera'),
(2, 'Daffi's books'),
(3, 'Humanitas'),
(4, 'Curtea veche'),
(5, 'Carte pentru toti'),
(6, 'Ad Libri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
