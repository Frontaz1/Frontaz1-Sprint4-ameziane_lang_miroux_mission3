-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 08 avr. 2022 à 13:21
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_mission3langamezianemiroux`
--
CREATE DATABASE IF NOT EXISTS `bdd_mission3langamezianemiroux` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd_mission3langamezianemiroux`;

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

DROP TABLE IF EXISTS `biens`;
CREATE TABLE IF NOT EXISTS `biens` (
  `ref` int(7) NOT NULL AUTO_INCREMENT,
  `descrip` text NOT NULL,
  `prix` int(11) NOT NULL,
  `surface` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `nbPiece` int(11) DEFAULT NULL,
  `jardin` int(11) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `fbien` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`ref`, `descrip`, `prix`, `surface`, `type`, `ville`, `nbPiece`, `jardin`) VALUES
(1, 'Vente Maison/villa 6 pièces. iad France - En exclusivité à moins de 10mn de Châlons, venez découvrir cette jolie maison, elle se compose d’une pièce de vie ouverte sur une cuisine équipée et ces 2 grandes vérandas, une salle de bain, 2 chambres et un Wc. A l’étage, un grand palier, une salle d\'eau et trois grandes chambres. Le tout accompagné d\'un sous-sol complet. Aucun vis-à-vis et beaucoup de lumière naturelle pour cette maison qui n\'attend plus que vous! Honoraires d’agence à la charge du vendeur.Information d\'affichage énergétique sur ce bien : DPE E indice 262 et GES A indice 5.', 259000, 50, 1, 'Paris', 6, 1),
(2, 'Maison 5 pièces 109 m² Idéal premier achat ou investissement locatif. Dans la commune d\'Évreux, proche des commodités. Maison 5 pièces au calme composée au rez-de-chaussée d\'une entrée, un W.C, une cuisine aménagée , un salon avec accès sur une véranda. A l\'étage : d\'une salle de bains, d\'un palier et 3 chambres. Le terrain nécessite peu d\'entretien. La maison donne accès à un garage privatif. Chauffage individuel. Disponible tout de suite.', 167840, 109, 1, 'Evreux', 5, 1),
(3, 'Maison de 2 à 5 chambres, avec étage ou plain-pied évolutive. Comprenant cuisine ouverte sur grande et lumineuse pièce de vie, cellier, 3 chambres, grande salle de bain et WC séparé. Garage de 17 m², possibilité agrandissement, double-garage. Volets roulant Motorisés, Porte de garage sectionnelle motorisé, Fenêtre cuisine et SDB oscillo-battant. Prestations soignées. Plancher chauffant basse température. Chauffage et eau chaude produits par pompe à chaleur dernière génération (économie d\'énergie optimale et confort) Conformité aux normes thermiques RT2012 /RE2020 (classe A).', 171313, 90, 1, 'Le Mans', 6, 1),
(4, 'A 15 min à pied de la gare de Combs la Ville - Quincy (RER D) et à 6 min des écoles, venez découvrir cette jolie maison entièrement rénovée avec des matériaux de qualité. Elle est édifiée sur une parcelle de 470m² environ. Au Rdc, l\'entrée vous mènera à un salon - séjour de près de 30 m² environ, une cuisine moderne aménagée et équipée, une salle de bain et un WC indépendant avec lave-main. Au 1er étage, vous découvrirez 2 belles chambres de plus de 11m² environ avec rangements. Vous trouverez également un double garage de près de 40m² environ et une piscine hors-sol en ossature bois.', 340000, 79, 1, 'Paris', 4, 1),
(5, 'Dans une secteur calme, en bordure de rivière, pavillon comprenant au rdc entrée - dégagement, séjour, cuisine, chambre, salle de bain, wc séparé. A l\'étage, 4 chambres, salle d\'eau avec wc. Garage, le tout sur 459 m² de jardin clos.', 299000, 127, 1, 'Nice', 6, 1),
(6, 'Venez découvrir cette maison familiale de 130m2 environ proche des écoles. Dont l\'accès RN20 et RER C se fait en 10 minutes en voitures. Vous entrez sur une cuisine aménagée et équipée et sa salle à manger donnant accès sur la véranda, un dégagement vous conduit au séjour double avec cheminée foyer ouvert. Une salle d\'eau et un wc se trouvent également au rez de chaussé. A l\'étage: Vous trouverez 2 chambres spacieuses et une troisième chambre avec une mezzanine, ainsi qu\'une salle de bains/wc. Un cabane de jardin et une cave complètent se bien. Le tout sur un terrain de 310m2 environ. Les +: Du potentiel et du volume.', 265500, 130, 1, 'Paris', 5, 1),
(7, 'A 20 minutes de Niort, au cOEur du Marais Poitevin, très belle maison de Maître et ses dépendances aménagées ! Un ensemble particulièrement bien entretenu, composé d\'une très belle maison principale de 240m2 environ habitables. Cette demeure se découvre par une très belle entrée desservant un grand salon - séjour et un bureau d\'autre part. La cuisine équipée et aménagée est particulièrement élégante avec ses portes laquées gris-bleues. Toilettes et sous sol sont également accessibles depuis le hall d\'entrée. A l\'étage, on trouve trois belles chambres avec placards et parquet d\'origine, une salle de bain et des wc. Une petite pièce de lecture avec vue sur le parc... Au deuxième étage, deux très grandes chambres lumineuses mansardées et une salle d\'eau spacieuse. Le sous-sol permet de disposer de pièces très fonctionnelles comme une lingerie, une chaufferie, une cave- cellier... Une seconde habitation de 250 m2 environ se tient à coté. Très bien rénové, ce bâtiment en pierre de type longère dispose de 2 logements qui peuvent être indépendants avec pour chacun une cuisine équipée, une grande pièce de vie et 2 chambres très spacieuses. Chaque logement dispose également d\'une grande salle d\'eau et de wc. Cette maison peut être exploitée en gite pour des locations saisonnières. Enfin, ce lieu charmant dispose de dépendances (carport, garage, local technique) et d\'une grande piscine. Le parc est très bien entretenu avec ses arbres centenaires superbes et ses massifs fleuris. Un très bel aménagement qui contribue à la sérénité des lieux... Les hauteurs de plafonds, les pierres apparentes, la charpente et les magnifiques parquets ou carreaux de ciment séduiront les amoureux de belles demeures. Les vastes espaces de cet ensemble pourront répondre aux projets les plus fous et la qualité des rénovations, des aménagements et des équipements vous permettront de vous projeter facilement... Raccordement tout à l\'égout, huisseries doubles vitrages,... se mixent avec bonheur aux cheminées anciennes, à la pierre et au charme de ce magnifique ensemble.', 823720, 490, 1, 'Niort', 10, 1),
(8, 'Maison pleine de potentiel entre les olives et la Croix-Rouge, au calme absolu, sans vis-à-vis. Idéale pour deux familles Car la maison est composée d\'un appartement T3 au rez-de-chaussée et d\'un autre appartement T4 à l\'étage. Chaque niveau à sa propre terrasse ainsi que son propre jardin. Les deux jardins sont d\'ailleurs piscinable... Revennos sur le premier niveau : le Rez de chaussée : Il est composée d\'une pièce de vie, de deux chambres, d\'une salle de bain avec baignoire et douche d\'un WC et d\'une buanderie, Quant à l étage : il est composé d\'une pièce de vie, d\'une cuisine américaine, d\'un dégagement qui dessert trois chambres une salle de bains douche et we Notons que la maison peut être reliée et que nous pouvons en faire une grande maison vous serez impressionné par la luminosité et si vous arrivez à vous projeter vous pourrez en faire une vraie pépite', 420000, 150, 1, 'Pau', 7, 1),
(9, 'Villa de 114 m2 située dans un lotissement de 8 villas en impasse a port de bouc. Lotissement très calme et villa sans aucun vis-à-vis sur une parcelle de 445 m2. une grande pièce de vie avec lumière traversante disposant d\'un salon, salle à manger et cuisine. une buanderie/cellier pouvant recevoir un grand congélateur, réfrigérateur, machine à laver et placards de rangement. 3 belles chambres et une très grande chambre d\'amis /coin bureau. belle salle d\'eau avec double vasque, douche à l\'italienne et miroir avec désembuage wc indépendant la maison est équipé de panneaux solaire. WC extérieur piscine en dure avec pool house/cuisine d\'été équipée tout inox avec éclairage commandé par smartphone ou télécommande. Alors n\'attendez plus, contactez nous pour la visiter Montant estimé des dépenses annuelles d\'énergie pour un usage standard : entre 980.0 € et 1380.0 € pour 2021.', 300000, 150, 1, 'Lille', 4, 1),
(10, 'Appartement 2 Pièces\r\nSurface de 32 m² non meublé Toulouse 31000\r\n\r\nSitué proche des métro B et TAE (Toulouse) arrêt François Verdier\r\nMilieu calme, appartement donnant sur la cour.\r\nKitchenette séjour, chambre, salle d\'eau et WC.', 547, 32, 2, 'Toulouse', 2, 0),
(11, 'Ancien appartement refait à neuf 5 Pièces\r\nSurface de 145 m² Marseille (Quartier Perier)\r\n\r\n3 chambres, 4m de hauteur sous plafond.\r\nSitué rue Paradis. Immeuble avec ascenseur', 618000, 145, 2, 'Marseille', 5, 0),
(12, 'Appartement 3 pièces 57 m²\r\nMartigues FERRIERES quartier résidentiel, Appartement de Type 3 d\'env 57m²,en 1er étage avec ascenseur,composé d\'un séjour ouvert sur une cuisine entièrement équipée, accès terrasse de 10m² sans vis-a-vis, 2 chambres, placards et dressing, salle de bains et wc séparé. Belles prestations, proche zone commerciale,GARAGE fermé en sous-sol.', 230000, 57, 2, 'Marseille', 3, 0),
(13, 'Appartement T3 FAC Proche de tous les grands axes et de la FAC, appartement T3 avec balcon sans vis a vis.\r\nIl se compose d\'une entrée, d\'un séjour donnant sur le balcon , cuisine avec loggia fermée, 2 chambres, une salle de bain et toilette séparée. A visiter sans tarder!\r\nVous disposez d\'une cave.', 100000, 60, 2, 'Lille', 3, 0),
(14, 'Côté confort : Vous allez avoir de la place! Un espace nuit distinct de 3 chambres spacieuses (avec placards muraux) possibilité 4, un immense salon-séjour (37m²), salle de bains ou salle d\'eau vous avez les deux!, 2wc, 2 extérieurs ou il est possible de manger (accessible via la cuisine et le salon). Seulement deux appartements par palier. ', 250000, 104, 2, 'Montpellier', 4, 1),
(15, 'Appartement de 2 pièces principales de 44m2 environ habitable au CALME et sans vis à comprenant: entrée avec placard aménagé, cuisine récente aménagée et équipée (four, plaque à induction 4 feux et hotte) ouverte sur salon-séjour carrelée de 22m2 environ donnant sur 1 terrasse de 10m2 environ, 1 suite parentale de 12m2 environ donnant sur une superbe et grande salle d\'eau neuve carrelée et toute équipée + WC + coin buanderie.', 139000, 44, 2, 'Croix', 2, 0),
(16, '3 pièces - 65.0 m2 - Proche des Buttes-Chaumont - Allée Louise Labé 75019 Paris Hosman vous propose à la vente ce beau 3 pièces d\'une surface de 65.0 m2 Carrez, situé Allée Louise Labé à Paris.\r\nL’appartement est situé au 1er étage sur 10 (en réalité au 2ème étage car RDC surélevé) avec ascenseur d\'une copropriété bien entretenue. Vous apprécierez son bon état, son agencement optimisé ainsi que la localisation de l\'appartement, à proximité immédiate de tous commerces, transports et écoles. La résidence est également sécurisée et un gardien réside dans l’immeuble.', 590000, 65, 2, 'Paris', 3, 0),
(17, 'Appartement 7 pièces 155 m² Dans résidence calme et arborée, niché au 4ème étage avec ascenseur, bel appartement T7 d\'environ 155 m2 comprenant : hall d\'entrée, cuisine, salon-séjour donnant sur balcon, dégagement desservant cinq belles chambres, dressing, deux salles de bains, salle d\'eau, deux wc, cellier et buanderie. L\'appartement dispose de deux caves, deux places de parking et d\'un garage. Peintures et robinetterie récentes - Electricité remaniée - Chauffage domestique, eau froide et eau chaude inclus dans les charges\r\nCommerces et écoles accessibles à pied - Idéal famille ou profession libérale.\r\nSurface : 155 m²>', 210000, 155, 2, 'Lyon', 4, 0),
(18, 'QUARTIER BEAUGRENELLE avec vue sur la Seine Tour Reflets un appartement de deux pièces avec une vue très agréable sur la Seine et la Maison de la Radio. Entrée desservant un séjour avec cuisine américaine équipée. Une chambre avec parquet au sol. Belle salle d\'eau avec emplacement machine. Un wc indépendant.\r\nBon état général. Chauffage collectif compris dans les charges.', 494000, 50, 2, 'Paris', 2, 0),
(19, 'En R+1 et R+2 d’un bâtiment dans l’enceinte d’une école primaire, 8 appartements traversants présentant : 4 T3 de 97,50 m² 4 T4 de 115,50 m² Les appartements présentent de bonnes prestations (parquet ancien, anciennes cheminées) mais une nécessaire remise au goût du jour (cuisine, sanitaire) pour la plupart d’entre eux. Equipements techniques : Assainissement : tout à l\'égout chaque appartement dispose d’un compteur individualisé eau, gaz et électricité.', 685000, 100, 3, 'Marseille', 4, 0),
(20, 'Centre ville de Villers le lac, immeuble comprenant 2 commerces, un garage et 4 appartements à rénover.\r\nSurface terrain : 335 m². Honoraires à la charge du Vendeur Bien En copropriété : NON Procédure sur le Syndicat des copropriétaires : NON', 295000, NULL, 3, 'Les Fins', NULL, 0),
(21, 'Immeuble en vente - saint-pol-sur-mer (59430) Immeuble de rapport de qualité sur dalle béton comprennant : 8 appartements de type F2 tous loués, local poubelle. Les compteurs sont individuels, immeuble sur 4 niveaux. Chauffage électrique, pvc double vitrage. AUCUN TRAVAUX A PREVOIR. Revenu annuel : 45.886,00 euros. Visites possibles sur rdv dans le respect des règles sanitaires. Dont 4 % TTC d\'honoraire à la charge de l\'acquéreur inclus dans le prix affiché.', 500000, 354, 3, 'Dunkerque', 6, 0),
(22, 'Hyper centre ville Béthune; Local professionnel composé de :Grand hall d\'accueil (22m²) desservant trois bureaux (13.11.10) , local technique avec sanitaires. le local est situé au troisième étage d\'un immeuble à usage professionnel (cardiologues, sièges de société...) Deux minutes à pied de la grand place et des rues commerçantes de Béthune. Chauffage individuel et beaucoup de luminosité.', 95000, NULL, 3, 'Béthune', NULL, 0),
(23, ' Montant annuel des loyers : 15 500€ Idéal investisseur. Composé de 3 logements. Au rez-de-chaussée, logement T2 de 51m² loi carrez comprenant une chambre de 15m², un séjour de 18m², une cuisine de 8m². Accès sanitaires-salle de bain par une courette. Travaux à prévoir dans ce logement. Au 1er étage, logement T2 de 51m² loi carrez comprenant une cuisine de 13m², un séjour de 20m², une chambre de 9m². Chauffage gaz. Aux 2ème et 3ème étage, Duplex de type T4 de 75m² loi carrez comprenant un séjour de 18m², un salon de 19m² et à l’étage deux chambres de 10m² chacune.', 115000, 80, 3, 'Maubeuge', 5, 0),
(24, 'Petit immeuble 1930 avec cachet en partie rénové comprenant au rez de chaussé salon, cuisine équipée, salle de douche et WC en parfait état. 1e étage: un plateau de 31 m² au 2e étage: 2 chambres et salle de bain avec WC. Jolie Façade - double vitrage récent Honoraires à la charge de l\'acquéreur. (130 000.00 € honoraires exclus - Honoraires de 6,15% TTC à la charge de l\'acquéreur).', 138000, 60, 3, 'Tourcoing', 4, 0),
(25, 'Immeuble composé de deux appartements actuellement loués ( 1025 €). Au RDC : 2 pces comprenant : entrée, cuisine, WC , séjour, chambre, salle d\'eau Jardin - cave A l\'étage : 3 pces comprenant : entrée, séjour, 2 chambres, salle de bains , WC Jardin-cave - Classe énergie : D - Classe climat : D - Prix Hon. Négo Inclus : 225 320,00 E dont 4,80% Hon. Négo TTC charge acq. Prix Hors Hon. Négo :215 000,00 E', 225000, 380, 3, 'Tours', 3, 1),
(26, 'LE de RÉ - RESTAURANT (murs et fond) idéalement placé, très bon chiffre d’affaire. Cause départ à la retraite, vends murs et fond de commerce, dans immeuble individuel, 1er étage, entièrement rénové, faisant angle sur placette où convergent 4 rues. Situés à 50 mètres du port de La Flotte, centre village, très fréquenté par les riverains et les touristes.\r\nSurface plancher du RDC = 191.65 m2. Le 1er étage : Il se divise en 4 appartements meublés à neuf : 3 T2 (36.09m2, 36.41m2, 42.09m2) 1 T3 (53.55m2) + parties communes ( 7.85 m2 ) Surface plancher de l’étage = 188.77m2\r\nLe sous-sol : Divisé en plusieurs espaces pour chambres froides et réserves, avec trappe de déchargement. Surface plancher = 81.62m2. Prix de vente total (murs et fond) : 2 650 000€', 2650000, 462, 3, 'Ile-de-Ré', 5, 0),
(27, 'A proximité immédiate de toutes commodités, des écoles et de l’Avenue Verte, une maison d’habitation mitoyenne d\'une superficie habitable de 380 m² comprenant : en rez-de-chaussée : Grand hall d’entrée, bureau, toilettes, cuisine aménagée, grand séjour et garage.. Au premier étage : Palier, dégagement, dressing, chambre parentale et salle-de-bains, quatre chambres dont 2 avec cabinet de toilettes, un W.C. Au second étage : palier, buanderie, une chambre et vaste grenier aménageable (82.90 m²). Au sous-sol : deux caves (15 et 31 m²) et chaufferie ( chaudière neuve) Jardin. Cette maison est détachée d’un ensemble immobilier de caractère et de qualité, comprenant également un local professionnel.', 375000, 380, 3, 'Dieppe', 6, 1),
(28, 'local commercial de 760 M² avec beaucoup de visibilité. Local commercial de 760 M² dont 400 M² de commerce et 360 M² d\'entrepôt et bureau. Excellente visibilité zone de chalandise de plus de 35 000 véhicules/jour. Avec porte sectionnelle. à proximité de grandes enseignes nationales. Parking en foison avec double accès d\'environ 60 places.', 70000, 760, 4, 'Lille', 2, 0),
(29, 'Grand local commercial de 196 m2 en rez-de-chaussée dont 100 mètres sur rue. Ancienne agence bancaire, convient parfaitement pour secteur tertiaire. Accès handicapé et issue de secours. Excellent emplacement à proximité de la place du Tourcoing et du tour de ville, stationnement aisé et gratuit, exposé plein sud, à proximité de tous les commerces. ', 250000, 196, 4, 'Arras', NULL, 0),
(30, 'LOCAL COMMERCIAL 48m2. On vous propose à la vente un local commercial entièrement rénové d\'une surface de 48m2 situé quartier rive droite à Versailles. Il comprend une grande cave permettant du stockage.', 120000, 50, 4, 'Versaille', 2, 0),
(31, 'Murs de boutique sur rue vides proches du jardin du Luxembourg sur un axe passant bénéficiant d\'une excellente visibilité. Arrêt de 3 lignes de bus juste devant. Boutique d\'une surface de 39m2 de plein pied avec une large vitrine de 6m. Le local est libre de toute occupation et il était auparavant exploité par un épicier de proximité. Il dispose d\'un conduit de cheminée sans extraction. Ce bien est situé au pied d\'un bel immeuble en pierre de taille ravalé dernièrement. Il jouxte un cabinet médical et une pharmacie. Il dispose aussi d\'une cave. Très bel emplacement à saisir.', 105000, 40, 4, 'Nice', 2, 0),
(32, 'LOCAL COMMERCIAL 80M² - TOURS NORD Les locaux sont situés en rez-de-chaussée d\'un immeuble en copropriété et développent une surface de 80m² environ, avec une vitrine, comprenant une pièce principale et une pièce avec sanitaire et point d\'eau. Prix de vente : 140 920 euros Honoraires Inclus', 140920, 80, 4, 'Roubaix', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `chemin` varchar(70) NOT NULL,
  `idbien` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `nom`, `chemin`, `idbien`) VALUES
(1, 'maison1', 'img/imgmaison/maison1.jpg', 1),
(2, 'maison1', 'img/imgmaison/maison1-chambre.jpg', 1),
(3, 'maison1', 'img/imgmaison/maison1-chambre2.jpg', 1),
(4, 'maison1', 'img/imgmaison/maison1-sdb.jpg', 1),
(5, 'maison2', 'img/imgmaison/maison2.jpg', 1),
(6, 'maison2', 'img/imgmaison/maison2-photo1.jpg', 1),
(7, 'maison2', 'img/imgmaison/maison2-photo2.jpg', 1),
(8, 'maison2', 'img/imgmaison/maison2-photo3.jpg', 1),
(9, 'maison3', 'img/imgmaison/maison3.jpg', 1),
(10, 'maison3', 'img/imgmaison/maison3-photo1.jpg', 1),
(11, 'maison3', 'img/imgmaison/maison3-photo2.jpg', 1),
(12, 'maison3', 'img/imgmaison/maison3-photo3.jpg', 1),
(13, 'terrain1', 'img/imgterrain/terrain1.jpg', 5),
(14, 'terrain1', 'img/imgterrain/terrain1-photo1.jpg', 5),
(15, 'terrain1', 'img/imgterrain/terrain1-photo2.jpg', 5),
(16, 'terrain1', 'img/imgterrain/terrain1-photo3.jpg', 5),
(17, 'terrain2', 'img/imgterrain/terrain2.jpg', 5),
(18, 'terrain2', 'img/imgterrain/terrain2-photo1.jpg', 5),
(19, 'terrain2', 'img/imgterrain/terrain2-photo2.jpg', 5),
(20, 'terrain2', 'img/imgterrain/terrain2-photo3.jpg', 5),
(21, 'terrain3', 'img/imgterrain/terrain3.jpg', 5),
(22, 'terrain3', 'img/imgterrain/terrain3-photo1.jpg', 5),
(23, 'terrain3', 'img/imgterrain/terrain3-photo2.jpg', 5),
(24, 'terrain3', 'img/imgterrain/terrain3-photo3.jpg', 5),
(25, 'terrain4', 'img/imgterrain/terrain4.jpg', 5),
(26, 'terrain4', 'img/imgterrain/terrain4-photo1.jpg', 5),
(27, 'terrain4', 'img/imgterrain/terrain4-photo2.jpg', 5),
(28, 'terrain4', 'img/imgterrain/terrain4-photo3.jpg', 5),
(29, 'local1', 'img/imglocaux/local1.jpg', 4),
(30, 'local1', 'img/imglocaux/local1-reserve.jpg', 4),
(31, 'local1', 'img/imglocaux/local1-salle1.jpg', 4),
(32, 'local1', 'img/imglocaux/local1-salle2.jpg', 4),
(33, 'local2', 'img/imglocaux/local2.jpg', 4),
(34, 'local3', 'img/imglocaux/local3.jpg', 4),
(35, 'local4', 'img/imglocaux/local4.jpg', 4),
(36, 'local5', 'img/imglocaux/local5.jpg', 4),
(37, 'local6', 'img/imglocaux/local6.jpg', 4),
(38, 'local7', 'img/imglocaux/local7.jpg', 4),
(39, 'local8', 'img/imglocaux/local8.jpg', 4),
(40, 'local9', 'img/imglocaux/local9.jpg', 4),
(41, 'immeuble1', 'img/imgimmeuble/immeuble1.jpg', 3),
(42, 'immeuble1', 'img/imgimmeuble/immeuble1-salle.jpg', 3),
(43, 'immeuble1', 'img/imgimmeuble/immeuble1-salle2.jpg', 3),
(44, 'immeuble1', 'img/imgimmeuble/immeuble1-salle3.jpg', 3),
(45, 'immeuble2', 'img/imgimmeuble/immeuble2.jpg', 3),
(46, 'immeuble3', 'img/imgimmeuble/immeuble3.jpg', 3),
(47, 'immeuble4', 'img/imgimmeuble/immeuble4.jpg', 3),
(48, 'immeuble5', 'img/imgimmeuble/immeuble5.jpg', 3),
(49, 'immeuble6', 'img/imgimmeuble/immeuble6.jpg', 3),
(50, 'immeuble7', 'img/imgimmeuble/immeuble7.jpg', 3),
(51, 'immeuble8', 'img/imgimmeuble/immeuble8.jpg', 3),
(52, 'immeuble9', 'img/imgimmeuble/immeuble9.jpg', 3),
(53, 'appart1', 'img/imgappartement/appart1.jpg', 2),
(54, 'appart1', 'img/imgappartement/appart1-chambre.jpg', 2),
(55, 'appart1', 'img/imgappartement/appart1-cuisine.jpg', 2),
(56, 'appart1', 'img/imgappartement/appart1-sdb.jpg', 2),
(57, 'appart2', 'img/imgappartement/appart2.jpg', 2),
(58, 'appart2', 'img/imgappartement/appart2-photo1.jpg', 2),
(59, 'appart2', 'img/imgappartement/appart2-photo2.jpg', 2),
(60, 'appart2', 'img/imgappartement/appart2-photo3.jpg', 2),
(61, 'appart3', 'img/imgappartement/appart3.jpg', 2),
(62, 'appart3', 'img/imgappartement/appart3-photo1.jpg', 2),
(63, 'appart3', 'img/imgappartement/appart2-photo3-photo2.jpg', 2),
(64, 'appart3', 'img/imgappartement/appart3-photo3.jpg', 2),
(65, 'appart3', 'img/imgappartement/appart3-photo4.jpg', 2),
(66, 'appart4', 'img/imgappartement/appart4.jpg', 2),
(67, 'appart4', 'img/imgappartement/appart4-photo1.jpg', 2),
(68, 'appart4', 'img/imgappartement/appart4-photo2.jpg', 2),
(69, 'appart4', 'img/imgappartement/appart4-photo3.jpg', 2),
(70, 'appart5', 'img/imgappartement/appart5.jpg', 2),
(71, 'appart5', 'img/imgappartement/appart5-photo1.jpg', 2),
(72, 'appart5', 'img/imgappartement/appart5-photo2.jpg', 2),
(73, 'appart5', 'img/imgappartement/appart5-photo3.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_biens`
--

DROP TABLE IF EXISTS `type_biens`;
CREATE TABLE IF NOT EXISTS `type_biens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_biens`
--

INSERT INTO `type_biens` (`id`, `libelle`) VALUES
(1, 'maison'),
(2, 'appartement'),
(3, 'immeuble'),
(4, 'local commercial'),
(5, 'terrain nu');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `mdp`) VALUES
(1, 'miroux', 'julien@gmail.com', 'test123');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `fbien` FOREIGN KEY (`type`) REFERENCES `type_biens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
