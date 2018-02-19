-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2018 at 05:18 PM
-- Server version: 10.1.29-MariaDB-6
-- PHP Version: 7.1.13-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cancoicodemovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id_film` int(11) NOT NULL,
  `titre` varchar(43) DEFAULT NULL,
  `annee` varchar(5) DEFAULT NULL,
  `description` varchar(883) DEFAULT NULL,
  `realisateur` varchar(30) DEFAULT NULL,
  `genre` varchar(28) DEFAULT NULL,
  `urlimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id_film`, `titre`, `annee`, `description`, `realisateur`, `genre`, `urlimg`) VALUES
(1, 'Kimi no Na Wa(Your Name)', '2016', 'Mitsuha est une lycéenne qui réside dans une petite ville située dans les montagnes. Elle vit aux côtés de sa petite soeur, sa grand-mère ainsi que son père, bien que ce dernier ne soit jamais à la maison à cause de son travail de maire. En réalité, sa vie ne lui convient pas et souhaite pouvoir vivre à Tokyo. Taki est un lycéen qui habite à Tokyo et qui adore l\'architecture et l\'art. Il vit une vie normale d\'étudiant entouré d\'amis et travaille même dans un petit restaurant italien. Mais un jour, il fait un rêve dans lequel il est dans la peau d\'une jeune fille qui vit dans une ville en montagne. Mitsuha, quant à elle, fait également un rêve dans lequel elle est dans le corps d\'un garçon qui vit a Tokyo. Quel est le secret qui se cache derrière ces étranges rêves qui échangent la vie de ces deux jeunes gens ?', 'Makoto Shinkai', 'Romance', ''),
(2, 'The Foreigner', '2017', 'A Londres, un modeste propriétaire de restaurant de Chinatown va tenter de retrouver les terroristes irlandais responsables de la mort de sa fille.', 'Martin Campbell', 'Action', ''),
(3, 'Ip Man', '2008', 'Au début des années 1930, la ville de Foshan est prospère et y fleurissent les écoles d\'arts martiaux chinois. Pourtant, le meilleur d\'entre eux, Ip Man, expert en wing chun, préfère cacher ses talents et profiter de ses rentes pour passer du temps en famille et s\'entraîner', 'Wilson Yip', 'Action', ''),
(4, 'FORREST GUMP', '1994', 'Sur un banc, à Savannah, en Géorgie, Forrest Gump attend le bus. Comme celui-ci tarde à venir, le jeune homme raconte sa vie à ses compagnons d\'ennui. A priori, ses capacités intellectuelles plutôt limitées ne le destinaient pas à de grandes choses. Qu\'importe ! Forrest Gump, sans jamais rien y comprendre, a participé à tous les grands évènements de l\'histoire de son pays. Pas de guerre du Vietnam sans lui, héros médaillé qui organisa dans les cliniques des tournois de ping-pong pour les soldats blessés, encore moins de rock, puisqu\'il inspira Elvis Presley et John Lennon, et point de Watergate non plus, car il se fit le dénonciateur du scandale en rencontrant le président Nixon...', 'Robert Zemeckis', 'comedie dramatique', ''),
(5, 'DIRTY DANCING', '1987', 'été 1963, Bébé (Baby en VO) de son vrai prénom Frédérique (Frances en VO) fille d\'une riche famille americaine, passe ses vacances avec ses parents et sa soeur dans la région des montagnes Catskill dans l\'état de New York, à la pension de la famille Kellerman. Elle se trouve mêlée à la vie des employés de la pension et se trouve confrontée à un monde qui lui est complètement étranger, celui de la danse. Malgré le désaccord de son père, Bébé va connaître une histoire d\'amour avec Johnny, le professeur de danse de l\'établissement, issu d\'un milieu social très différent de celui de la jeune femme.', 'Emile Ardolino', 'Drame musical romantique', ''),
(6, 'Les visiteurs', '1993', 'Arrivés en 1793, en pleine Révolution française, Godefroy de Montmirail et son écuyer Jacquouille la Fripouille rencontrent Jacquouillet, descendant de Jacquouille et accusateur public, et se retrouvent empêtrés dans la tourmente de la Terreur. Godefroy est confronté à sa descendance de l\'époque, qui essaie d\'échapper à la Révolution: lui et son écuyer les aident à fuir et tentent de retrouver un descendant de l\'Enchanteur pour rentrer à leur époque. Les deux voyageurs temporels subissent en effet des effets secondaires inquiétants dus aux couloirs du temps non refermés', 'Jean-Marie Poir', 'comedie', ''),
(7, 'Warcraft : Le commencement ', '2016 ', 'Le pacifique royaume d\'Azeroth est au bord de la guerre alors que sa civilisation doit faire face à une redoutable race d’envahisseurs: des guerriers Orcs fuyant leur monde moribond pour en coloniser un autre. Alors qu’un portail s’ouvre pour connecter les deux mondes, une armée fait face à la destruction et l\'autre à l\'extinction. De côtés opposés, deux héros vont s’affronter et décider du sort de leur famille, de leur peuple et de leur patrie', 'Duncan Jones ', 'Fantastique, action,aventure', ''),
(8, 'Le Seigneur des anneaux : le retour du roi ', '2003 ', 'Les armées de Sauron ont attaqué Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonté d\'accomplir sa destinée ? Tandis que Gandalf s\'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Mais malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d\'ennemis qui s\'abattent sur le royaume… Chaque victoire se paye d\'immenses sacrifices. Malgré ses pertes, la Communauté se jette dans la bataille pour la vie, ses membres faisant tout pour détourner l\'attention de Sauron afin de donner à Frodon une chance d\'accomplir sa quête. Voyageant à travers les terres ennemies, ce dernier doit se reposer sur Sam et Gollum, tandis que l\'Anneau continue de le tenter... ', 'Peter Jackson ', 'Fantastique action aventure', ''),
(9, 'Hunger Games – L\'embrasement', '2013 ', 'Katniss Everdeen est rentrée chez elle saine et sauve après avoir remporté la 74e édition des Hunger Games avec son partenaire Peeta Mellark. Puisqu’ils ont gagné, ils sont obligés de laisser une fois de plus leur famille et leurs amis pour partir faire la Tournée de la victoire dans tous les districts. Au fil de son voyage, Katniss sent que la révolte gronde, mais le Capitole exerce toujours un contrôle absolu sur les districts tandis que le Président Snow prépare la 75e édition des Hunger Games, les Jeux de l’Expiation – une compétition qui pourrait changer Panem à jamais… ', 'Francis Lawrence ', 'Action drame science-fiction', ''),
(10, 'forest gump', '1994', 'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forest Gump', 'Robert Zemeckis', 'comédie dramataique/drame', ''),
(11, 'l’armée des 12 singes', '1995', 'Nous sommes en l\'an 2035. Les quelques milliers d\'habitants qui restent sur notre planète sont contraints de vivre sous terre. La surface du globe est devenue inhabitable à la suite d\'un virus ayant décimé 99% de la population. Les survivants mettent tous leurs espoirs dans un voyage à travers le temps pour découvrir les causes de la catastrophe et la prévenir. C\'est James Cole, hanté depuis des années par une image incompréhensible, qui est désigné pour cette mission', 'Terry Gilliam', 'science/fiction', ''),
(12, 'le péril jeune', '1994', 'Quelques jeunes hommes se retrouvent plusieurs années après avoir quitté le lycée. Ils assistent pendant son accouchement la compagne de leur meilleur ami, mort une semaine auparavant d\'une overdose. C\'est pour eux l\'occasion de confronter leurs souvenirs', 'Cédric Klapisch', 'drame/comédie', ''),
(13, 'Le voyage de chihiro', '2001', 'Le film raconte l\'histoire de Chihiro, une fillette de dix ans qui, alors qu\'elle se rend en famille dans sa nouvelle maison, entre dans le monde des esprits. Après la transformation de ses parents en porcs par la sorcière Yubaba, Chihiro prend un emploi dans l\'établissement de bains de Yubaba pour retrouver ses parents et le monde humain. ', 'Hayao Miyazaki', 'Drame, fantastique, aventure', ''),
(14, 'Pulp fiction', '1994', 'L\'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s\'entremêlent.', 'Quentin Tarantino', 'Policier, Thriller', ''),
(15, 'Le Seigneur des anneaux : Les Deux Tours', '2002', 'L\'histoire du film commence après la dissolution de la communauté de l\'Anneau. Boromir est mort des mains du chef des Uruk-hai, Lurtz, en essayant de sauver les Hobbits Meriadoc Brandibouc et Peregrin Touc, qui ont été capturés. Aragorn, Gimli et Legolas poursuivent les Uruks afin de libérer leurs compagnons capturés, tandis que Frodon Sacquet et Samsagace Gamegie sont partis seuls pour le Mordor afin de détruire l\'Anneau unique, à la Montagne du Destin.', 'Peter Jackson', 'fantasy', ''),
(16, 'The Mask', '	1994', '	Stanley Ipkiss, modeste employé de banque, passionné par l\'univers de Tex Avery, trouve un masque ancien aux pouvoirs surnaturels. Il est néanmoins partagé entre devenir cette créature verte sûre d\'elle ou rester le timide Stanley Ipkiss, incapable d\'aborder la magnifique chanteuse de cabaret Tina Carlyle', '	Chuck Russel', '	Comédie', ''),
(17, 'Captain America : Civil War', ' 2016', ' Steve Rogers est désormais Ã  la tête des Avengers, dont la mission est de protéger l\'humanité. à la suite d\'une de leurs interventions qui a causé d\'importants dégâts collatéraux, le gouvernement décide de mettre en place un organisme de commandement et de supervision.à Cette nouvelle donne provoque une scission au sein de l\'équipe : Steve Rogers reste attaché à  sa liberté de s\'engager sans ingérence gouvernementale, tandis que d\'autres se rangent derrière Tony Stark, qui contre toute attente, décide de se soumettre au gouvernement', ' Joe Russo & Anthony Russo', ' Action Fantastique ', ''),
(18, 'Thor : Ragnarok', ' 2017', ' Privé de son puissant marteau, Thor est retenu prisonnier sur une lointaine planète aux confins de l\'univers. Pour sauver Asgard, il va devoir lutter contre le temps afin d\'empêcher l\'impitoyable Helaim d\'accomplir le Ragnarök à la destruction de son monde et la fin de la civilisation asgardienne. Mais pour y parvenir, il va d\'abord devoir mener un combat titanesque de gladiateurs contre celui qui était autrefois son allié au sein des Avengers : l\'incroyable Hulk', ' Taika Waititi', ' Action Fantastique', ''),
(19, 'Blade Runner', '1982', 'Dans les dernières années du 20ème siècle, des milliers d\'hommes et de femmes partent à la conquête de l\'espace, fuyant les mégalopoles devenues insalubres. Sur les colonies, une nouvelle race d\'esclaves voit le jour : les répliquants, des androïdes que rien ne peut distinguer de l\'être humain. Los Angeles, 2019. Après avoir massacré un équipage et pris le contrôle d\'un vaisseau, les répliquants de type Nexus 6, le modèle le plus perfectionné, sont désormais déclarés hors la loi. Quatre d\'entre eux parviennent cependant à s\'échapper et à s\'introduire dans Los Angeles. Un agent d\'une unité spéciale, un blade-runner, est chargé de les éliminer. Selon la terminologie officielle, on ne parle pas d\'exécution, mais de retrait...', 'Ridley Scott', 'Science-fiction', 'https://vokpodcast.files.wordpress.com/2014/01/blade_runner_final_cut.jpg'),
(20, 'Into the Wild', '2007', 'Tout juste diplômé de l\'université, Christopher McCandless, 22 ans, est promis à un brillant avenir. Pourtant, tournant le dos à l\'existence confortable et sans surprise qui l\'attend, le jeune homme décide de prendre la route en laissant tout derrière lui. Des champs de blé du Dakota aux flots tumultueux du Colorado, en passant par les communautés hippies de Californie, Christopher va rencontrer des personnages hauts en couleur. Chacun, à sa manière, va façonner sa vision de la vie et des autres. Au bout de son voyage, Christopher atteindra son but ultime en s\'aventurant seul dans les étendues sauvages de l\'Alaska pour vivre en totale communion avec la nature.', 'Sean Penn', 'Road-trip', ''),
(21, 'New York Melody', '2014', 'Gretta et son petit ami viennent de débarquer à NYC. La ville est d\'autant plus magique pour les deux anglais qu\'on leur propose de venir y vivre pleinement leur passion : la musique. Le rêve va se briser et l\'idylle voler en éclat quand, aveuglé par la gloire naissante, il va la plaquer pour une carrière solo et... une attachée de presse. Ses valises prêtes et son billet de retour pour Londres en poche, elle décide de passer une dernière nuit à New York avec son meilleur pote. Ce dernier l\'emmène dans un pub, la pousse sur scène et la force à chanter. Dans la salle un producteur s\'adonne à sa plus dangereuse passion : l\'alcool. Revenu de tout, du succès et de sa gloire passée, amer, rancunier, il a perdu le fil de sa vie,... Et soudain il entend cette voix, découvre cette grâce, ce talent brut et authentique... Une rencontre enchantée qui pourrait finir en chansons...', 'John Carney', 'Feel-good', ''),
(22, 'Snatch', '2000', 'Franky vient de voler un énorme diamant quil doit livrer à Avi, un mafieux new-yorkais. En chemin, il fait escale à Londres où il se laisse convaincre par Boris de parier sur un combat de boxe clandestin. Il ignore, bien sûr, quil sagit dun coup monté avec Vinny et Sol, afin de le délester de son magnifique caillou. Turkish et Tommy, eux, ont un problème avec leur boxeur, un gitan complètement fêlé qui refuse de se coucher au quatrième round comme prévu. Cest au tour dAvi de débarquer, bien décidé à récupérer son bien, avec laide de Tony, une légende de la gâchette.', 'Guy Ritchie', 'Policier Comédie Thriller', ''),
(23, 'Matrix', '1999', 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est lun des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par détranges songes et des messages cryptés provenant dun certain Morpheus. Celui-ci lexhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : quest-ce que la Matrice ? Nul ne le sait, et aucun homme nest encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est lElu, le libérateur mythique de lhumanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...', 'Lana Wachowski Lilly Wachowski', 'Action Science fiction', ''),
(24, 'La ligne verte', '2000', 'Paul Edgecomb, pensionnaire centenaire dune maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des exécutions capitales en s’efforçant dadoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes. Intrigué par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens très forts.', 'Frank Darabont', 'Fantastique Policier', ''),
(25, 'ROCKY IV', '1986', 'Apollo Creed, ancien adversaire et dorénavant ami de Rocky Balboa, est tué sur le ring par le boxeur russe Ivan Drago. Se reprochant de navoir pu sauver son camarade à temps, Rocky va demander un combat contre Ivan Drago afin de le venger. Une confrontation qui se déroulera sur le sol russe.', 'Sylverster Stallone', 'Action', ''),
(26, 'Cars 3', '2017', 'Dépassé par une nouvelle génération de bolides ultra-rapides, le célèbre Flash McQueen se retrouve mis sur la touche d’un sport qu’il adore. Pour revenir dans la course et prouver, en souvenir de Doc Hudson, que le n° 95 a toujours sa place dans la Piston Cup, il devra faire preuve d’ingéniosité. L’aide d’une jeune mécanicienne pleine d’enthousiasme, Cruz Ramirez, qui rêve elle aussi de victoire, lui sera d’un précieux secours...', 'Brian Fee', 'Animation', ''),
(27, 'Rambo2', '1985', 'John Rambo purge une peine de prison lorsque le Colonel Trautman lui donne la possibilité de sortir pour une mission délicate : avoir la preuve quil reste bel et bien des prisonniers américains au Vietnam. Supposé nêtre quun observateur, Rambo désobéit aux ordres et tente de sauver un prisonnier. Murdock, le responsable de la mission, décide alors de labandonner en territoire ennemi, Rambo, seul, sans armes et face à lennemi, prépare sa vengeance et son retour au pays.', 'George Pan Cosmatos', 'Action', ''),
(28, 'Limitless', '2011', 'Un produit pharmaceutique révolutionnaire permet dexploiter son potentiel au maximum.', 'Neil Burger', 'Thriller', ''),
(29, 'Drone', '2017', 'Un pilote de drone de haut niveau partage sa vie entre ses missions et sa vie de famille en banlieue, jusquà ce quune fuite fasse de lui la cible dun homme daffaires pakistanais', 'Jason Bourque', 'Thriller', ''),
(30, 'Matrix', '1999', 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est lun des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par détranges songes et des messages cryptés provenant dun certain Morpheus.', 'Lana Wachowski', 'Science Fiction', ''),
(31, 'LA SOUPE AUX CHOUX ', '1981', 'Le Glaude et le Bombé, deux vieux paysans portés sur la bouteille, vivent très retirés de la vie moderne.Une nuit, un extra-terrestre atterrit en soucoupe volante dans le jardin du Glaude.En gage de bienvenue, ce dernier lui offre un peu de sa fameuse soupe aux choux...', 'Jean Girault', 'Comédie, Science fiction', ''),
(32, 'BIG MAMMA', '2000', 'Au sein du FBI, lagent Malcolm Turner est réputé pour sa bravoure et son habileté.Passé maître dans lart du déguisement, il sait en quelques minutes se fabriquer un nouveau visage, une voix et un look inédits pour infiltrer nimporte quel milieu.Après lévasion dun dangereux braqueur, Malcolm et son coéquipier se planquent devant le domicile de son ex-petite amie et présumée complice, Sherry.Lorsquelle se réfugie chez sa grand-mère, Big Mama, Malcolm nhésite pas un instant à prendre lapparence de la vieille dame pour recueillir son témoignage.', 'Raja Gosnell', 'Comédie, Action, Policier', 'http://s3.foxfilm.com/intlportal2/dev-temp/fr-FR/____547be7a50161c.jpg'),
(33, 'SHAOLIN SOCCER', '2002', 'Fung était une légende vivante du football, jusquà ce quil fasse perdre le championnat à son équipe. Fous de rage, les fans ne le lui ont pas pardonné.Aujourdhui, Fung soccupe du matériel de la Team Evil, léquipe de son ancien partenaire, Hung.Lorsque Fung est renvoyé, il se tourne vers Sing, un moine du célèbre temple Shaolin qui possède des dons extraordinaires en matière darts martiaux.Lorsque Fung voit Sing mettre en déroute une bande de voyous avec un simple ballon de football, il a lingénieuse idée de créer une équipe de foot Shaolin pour vaincre ses adversaires...', 'Stephen Chow', 'Action, Comédie', ''),
(34, 'HEAT', '1995', 'La bande de Neil McCauley à laquelle est venu se greffer Waingro, une nouvelle recrue, attaque un fourgon blindé pour semparer dune somme importante en obligations. Cependant, ce dernier tue froidement lun des convoyeurs et Chris Shiherlis se retrouve obligé de terminer le travail. Neil tente déliminer Waingro, mais celui-ci parvient à séchapper. Parallèlement, le lieutenant Vincent Hanna mène lenquête...', 'Michael Mann', 'policier, drame, action', ''),
(35, 'WEST SIDE STORY', '1962', 'Dans le West Side, bas quartier de New York, deux bandes de jeunes saffrontent, les Sharks de Bernardo et les Jets de Riff. Un ex des Jets, Tony, séprend de Maria, la soeur de Bernardo.', 'Robert Wise Jerome Robbins', 'Comédie musicale', ''),
(36, 'ROCK ACADEMY', '2004', 'Un musicien se fait virer de son groupe de rock et trouve, dans la foulée, un emploi de prof de musique dans une école privée stricte. Là, devant un parterre de tubas, de clairons, de pianos et de harpes, il décide de revoir l\'approche de la musique de ses élèves. Leur filant des Gibson en V, des claviers, des caisses claires et des charleys, il leur enseigne la musique des amplis. Le gros son des rockers. Et leur donne le pouvoir de casser les règles', 'Richard Linklater', 'Comédie musicale', ''),
(37, 'Casshern', '2005', 'Dans un futur apocalyptique, une expérience scientifique aboutit à la création d\'êtres aux pouvoirs extraordinaires', 'Kazuaki Kiriya', 'science fiction', ''),
(38, 'Old boy', '2003', 'A la fin des années 80, Oh Dae-Soo, père de famille sans histoire, est enlevé un jour devant chez lui.', 'Min-sik Choi', 'thriller', ''),
(39, 'hidalgo', '2004', 'Chaque année, depuis des siècles, se déroule l\'Océan de Feu, une course de survie de 5 000 km à travers le désert arabe.', 'Joe Johnston', 'Action', ''),
(40, 'ojojo', '1900', 'ihihihihihi', 'ojojuoi', NULL, ''),
(41, 'ojojo', '1900', 'ihihihihihi', 'ojojuoi', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nom` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nom`) VALUES
(1, 'Romance'),
(2, 'Drame'),
(3, 'Action'),
(4, 'Comédie Musicale'),
(5, 'Drame Musicale'),
(6, 'Comédie'),
(7, 'Fantastique'),
(8, 'Aventure'),
(9, 'Science Fiction'),
(10, 'Policer'),
(11, 'Thriller'),
(12, 'Fantasy'),
(13, 'Road-Trip');

-- --------------------------------------------------------

--
-- Table structure for table `l_film_genre`
--

CREATE TABLE `l_film_genre` (
  `id` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_film_genre`
--

INSERT INTO `l_film_genre` (`id`, `id_genre`, `id_film`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 3, 3),
(4, 6, 4),
(5, 2, 4),
(6, 5, 5),
(7, 1, 5),
(8, 6, 6),
(9, 7, 7),
(10, 3, 7),
(11, 8, 7),
(12, 7, 8),
(13, 3, 8),
(14, 8, 8),
(15, 3, 9),
(16, 2, 9),
(17, 9, 9),
(18, 6, 10),
(19, 2, 10),
(20, 9, 11),
(21, 2, 12),
(22, 6, 12),
(23, 2, 13),
(24, 7, 13),
(25, 8, 13),
(26, 11, 14),
(27, 10, 14),
(28, 12, 15),
(29, 6, 16),
(30, 3, 17),
(31, 7, 17),
(32, 3, 18),
(33, 7, 18),
(34, 9, 19),
(35, 13, 20),
(36, 6, 21),
(37, 10, 22),
(38, 11, 22),
(39, 6, 22),
(40, 3, 23),
(41, 9, 23),
(42, 7, 24),
(43, 10, 24),
(44, 3, 25),
(45, 6, 26),
(46, 3, 27),
(47, 11, 28),
(48, 11, 29),
(49, 9, 30),
(50, 6, 31),
(51, 9, 31),
(52, 6, 32),
(53, 3, 32),
(54, 10, 32),
(55, 3, 33),
(56, 6, 33),
(57, 10, 34),
(58, 2, 34),
(59, 3, 34),
(60, 4, 35),
(61, 4, 36),
(62, 9, 37),
(63, 11, 38),
(64, 3, 39),
(65, 3, 39);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` int(2) UNSIGNED DEFAULT NULL,
  `mdp` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `age`, `mdp`) VALUES
(1, 'SIMOES MIRANDA', 'Anthony', 21, ''),
(2, 'DELOYE', 'Benoit', 25, ''),
(3, 'MARCEL', 'Antoine', 29, ''),
(4, 'HAAS', 'Magali', 23, ''),
(5, 'GRIETTE', 'Lucie', 29, ''),
(6, 'SIMMET', 'Floriane', 24, ''),
(7, 'ZOUABI', 'Mourad', 52, ''),
(8, 'MOREAU', 'Charlie', 21, ''),
(9, 'MATHIEU', 'Sandrine', 41, ''),
(10, 'VILLARD', 'Kevin', 22, ''),
(11, 'THARRADIN', 'Romain', 21, ''),
(12, 'THOREZ-DEBRUCQ', 'Yohann', 29, ''),
(13, 'AZERKANE', 'Mohamed', 28, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
