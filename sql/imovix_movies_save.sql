-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 23 nov. 2022 à 10:41
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imovix`
--

-- --------------------------------------------------------

--
-- Structure de la table `imovix_movies`
--

CREATE TABLE `imovix_movies` (
  `id` int(11) NOT NULL,
  `movie_affiche` varchar(200) NOT NULL,
  `movie_titre` varchar(200) NOT NULL,
  `movie_titre_2` varchar(200) NOT NULL,
  `movie_genre` varchar(200) NOT NULL,
  `movie_distrib` varchar(200) NOT NULL,
  `movie_ba` varchar(200) NOT NULL,
  `movie_descr` text NOT NULL,
  `movie_age` varchar(100) NOT NULL,
  `movie_illu` varchar(200) NOT NULL,
  `movie_bg` varchar(200) NOT NULL,
  `movie_tendance` int(11) NOT NULL,
  `movie_action` int(11) NOT NULL,
  `movie_aventure` int(11) NOT NULL,
  `movie_thriller` int(11) NOT NULL,
  `movie_romance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `imovix_movies`
--

INSERT INTO `imovix_movies` (`id`, `movie_affiche`, `movie_titre`, `movie_titre_2`, `movie_genre`, `movie_distrib`, `movie_ba`, `movie_descr`, `movie_age`, `movie_illu`, `movie_bg`, `movie_tendance`, `movie_action`, `movie_aventure`, `movie_thriller`, `movie_romance`) VALUES
(1, 'affiche1.jpg', 'Avengers', 'Endgame', 'Action, aventure, science-fiction', 'Robert Downey Jr, Chris Evans, Chris Hemsworth...', 'ba_avengers_endgame.mp4', 'Le Titan Thanos, ayant réussi à s\'approprier les six Pierres d\'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif de pulvériser la moitié de la population de l\'Univers. Cinq ans plus tard, Scott Lang, alias Ant-Man, parvient à s\'échapper de la dimension subatomique où il était coincé. Il propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs alliés et coéquipiers : récupérer les Pierres d\'Infinité dans le passé.', 'Tous Publics', 'illu_avengers.png', 'bg_avengers.jpg', 1, 1, 1, 0, 0),
(2, 'affiche2.jpg', 'Avatar 2', 'La Voie de l\'eau', 'Action, aventure, science-fiction', 'Sam Worthington, Zoe Saldana, Sigourney Weaver...', 'ba_avatar2.mp4', 'Jake Sully et Ney\'tiri ont formé une famille et font tout pour rester aussi soudés que possible. Ils sont cependant contraints de quitter leur foyer et d\'explorer les différentes régions encore mystérieuses de Pandora. Lorsqu\'une ancienne menace refait surface, Jake va devoir mener une guerre difficile contre les humains.', 'Tous Publics', 'illu_avatar.png', 'bg_avatar_2.png', 1, 1, 1, 0, 0),
(3, 'affiche3.jpg', 'Spider-Man', 'Into the spider-verse', 'Action, science-fiction', 'Shameik Moore', 'ba_spiderman.mp4', 'Mordu par une araignée radioactive dans le métro, l\'adolescent de Brooklyn, Miles Morales, développe des pouvoirs mystérieux qui le transforment en Spider-Man. Lorsqu\'il rencontre Peter Parker, il découvre rapidement qu\'il n\'est pas le seul avec ces talents spéciaux.', 'Tous Publics', 'illu_spiderman.png', 'bg_spiderman.jpg', 1, 1, 0, 0, 0),
(4, 'affiche4.jpg', 'Harry Potter', 'Et les reliques de la mort Part.2', 'Action, science-fiction', 'Daniel Radcliffe, Emma Watson, Rupert Grint', 'ba_harry_potter.mp4', 'Dans la deuxième partie de cette finale épique, la bataille entre les forces du bien et celles du mal du monde des magiciens dégénère en une guerre tous azimuts. Les enjeux n\'ont jamais été si grands et personne n\'est en sécurité.', '-12', 'illu_harrypotter.png', 'bg_harrypotter.jpg', 1, 1, 0, 0, 0),
(5, 'affiche5.jpg', 'Pirates des Caraibes', 'Le secret du coffre maudit', 'Action, comedie, fantasy, science-fiction', 'Johnny Depp', 'ba_pirates_des_caraibes.mp4', 'Lorsque le pirate fantôme Davy Jones vient réclamer sa dette de sang à l\'excentrique capitaine Jack Sparrow, ce dernier cherche un moyen d\'échapper à ce cruel destin qui garantirait la damnation de son âme pour l\'éternité.', 'Tous Publics', 'illu_pirates.png', 'bg_pirates.jpg', 1, 1, 0, 0, 0),
(6, 'affiche6.jpg', 'James Bond', 'No time to die', 'Action, espionnage', 'Daniel Craig', 'ba_no_time_to_die.mp4', 'James Bond n\'est plus en service et profite d\'une vie tranquille en Jamaïque. Mais son répit est de courte durée car l\'agent de la CIA Felix Leiter fait son retour pour lui demander son aide. Sa mission, qui est de secourir un scientifique kidnappé, va se révéler plus traître que prévu, et mener 007 sur la piste d\'un méchant possédant une nouvelle technologie particulièrement dangereuse.', 'Tous Publics', 'illu_jamesbond.png', 'bg_jamesbond.jpg', 1, 1, 0, 0, 0),
(7, 'affiche7.jpg', 'Titanic', '', 'Romance, drame', 'Leonardo Dicaprio', 'ba_titanic.mp4', 'En 1997, l\'épave du Titanic est l\'objet d\'une exploration fiévreuse, menée par des chercheurs de trésor en quête d\'un diamant bleu qui se trouvait à bord. Frappée par un reportage télévisé, l\'une des rescapées du naufrage, âgée de 102 ans, Rose DeWitt, se rend sur place et évoque ses souvenirs. 1912.', 'Tout Publics', 'illu_titanic.png', 'bg_titanic.jpg', 1, 0, 0, 0, 1),
(8, 'affiche8.jpg', 'Interstellar', '', 'Action, aventure, science-fiction', 'Matthew McConaughey', 'ba_interstellar.mp4', 'Dans un proche futur, la Terre est devenue hostile pour l\'homme. Les tempêtes de sable sont fréquentes et il n\'y a plus que le maïs qui peut être cultivé, en raison d\'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale.', '-13', 'illu_interstellar.png', 'bg_interstellar.jpg', 1, 1, 1, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `imovix_movies`
--
ALTER TABLE `imovix_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `imovix_movies`
--
ALTER TABLE `imovix_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
