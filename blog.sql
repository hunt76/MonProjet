-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 16 Décembre 2017 à 11:33
-- Version du serveur :  5.7.20-0ubuntu0.17.10.1
-- Version de PHP :  7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `publie` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `date`, `publie`) VALUES
(1, 'Set2 atum Nada ', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'\\\\\\\\\\\\\\\'\\\\\\\'\\\'', '2017-09-28', 1),
(2, 'Waa2112r komt het vandaan?', 'In2323 tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Lorem ipsum dolor sit amet..\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\", komt uit een zin in sectie 1.10.32.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'\\\\\\\\\\\\\\\'\\\\\\\'\\\'', '2017-09-26', 0),
(3, '12222Waar233om gebruiken we het?', 'Het is aù^^l geruime tijd een bekend gegev212en dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Hier uw tekst, hier uw tekst\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"lorem ipsum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).\r\n\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'\\\\\\\\\\\\\\\'\\\\\\\'\\\'', '2017-09-24', 1),
(23, 'efzzf', 'fzefz', '2017-11-13', 1),
(24, 'papapa', 'papapapa', '2017-11-13', 1),
(28, 'kkkkhjjk', 'khjkhkjk', '2017-11-22', 1),
(29, 'Formule 1', 'gftf\\\'', '2017-12-08', 1),
(30, 'TEEEEEEEEEEEEEEEEST', 'TESSSSSSSSSSSSSSSSt', '2017-12-13', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `titre`, `texte`, `date`) VALUES
(64, 'ggr', 'grgr', '2017-12-14'),
(65, '151225', '156123\r\n', '2017-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(150) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(150) CHARACTER SET utf8 NOT NULL,
  `sid` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `sid`) VALUES
(9, 'Lecerf', 'Lucas', 'lecerf.lucas@outlook.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '5a6d884f1ede29cafebb3d72efc29e34'),
(10, 'Lecerf', 'Lucas', 'lecerf.lucas@outlook.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '5a6d884f1ede29cafebb3d72efc29e34'),
(17, 'admin', 'admin', 'lecerf.lucas@outlook.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '5a6d884f1ede29cafebb3d72efc29e34'),
(18, 'admin', 'admin', 'lecerf.lucas@outlook.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '5a6d884f1ede29cafebb3d72efc29e34'),
(19, 'root', 'root', 'root@root.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '66d5213e3cf131fe78a8a21527ccdb43'),
(20, 'nextgen', 'nexdtgen', 'nextgen@nextgen.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
