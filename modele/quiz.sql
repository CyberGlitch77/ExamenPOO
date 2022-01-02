-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 02 jan. 2022 à 18:05
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `num_quest` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `r1` varchar(150) NOT NULL,
  `r2` varchar(150) NOT NULL,
  `r3` varchar(150) NOT NULL,
  `r4` varchar(150) NOT NULL,
  `reponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`num_quest`, `question`, `r1`, `r2`, `r3`, `r4`, `reponse`) VALUES
(1, 'Par rapport à l\'édition originale, quelle diffèrence peut-on trouver dans la dernière édition de Tintin en Amérique?', 'Pendant toute l\'histoire, Tintin porte un jean', 'Milou n\'urine plus sur un réverbère', 'Une maman noire a été remplacée par une blanche', 'Une voiture américaine a été remplacée par une plus récente', 3),
(2, 'Comment Milou sauve-t\'il l\'Aurore dans l\' Etoile Mystérieuse ?                                                                                      ', 'Il coupe la corde d\'une mine flottante                                                              ', 'Il urine sur un bâton de dynamite                                                                   ', 'Il arrache le fil d\'une charge de plastique                                                         ', 'Il prend une grenade dans la gueule, et la jette à l\'eau                                            ', 2),
(3, 'Quand Tintin sauve la vie du Général Alcazar en jetant une bombe par la fenêtre, ils jouaient tous les deux                                          ', 'Aux dames                                                                                           ', 'Au backgammon                                                                                       ', 'Aux échecs                                                                                          ', 'Au jeu de l\'oie                                                                                     ', 3),
(4, 'Dans Tintin au pays de l\'or noir, Tintin se fait engager sur le Speedol Star comme...                                                             ', 'Télégraphiste                                                                                       ', 'Cuisinier                                                                                           ', 'Mousse                                                                                              ', 'Médecin                                                                                             ', 1),
(5, 'Un pays imaginaire a été le théâtre de plusieurs aventures de Tintin. Il s\'agit de...                                                                 ', 'L\'Hergéovie                                                                                         ', 'La Slovnévie                                                                                        ', 'La Soldavie                                                                                         ', 'La Syldavie                                                                                         ', 4),
(6, 'Le prénom du professeur Tournesol est :                                                                                                               ', 'Théodore                                                                                            ', 'Tryphon                                                                                             ', 'Hyppolite                                                                                           ', 'Séraphin                                                                                            ', 2),
(7, 'Sur son pull-over, le capitaine Haddock a :                                                                                                           ', 'Un bâteau                                                                                           ', 'Un drapeau de pirate                                                                                ', 'Une barre de bâteau                                                                                 ', 'Une ancre de marine                                                                                 ', 4),
(8, 'La première rencontre de Tintin avec la capitaine Haddock se fait dans...                                                                             ', 'Le Lotus bleu                                                                                       ', 'Le crabe aux pinces d\'or                                                                            ', 'Tintin au Congo                                                                                     ', 'Tintin en Amérique                                                                                  ', 2),
(9, 'Sur la couverture de quel album voit-on le docteur Müller ?                                                                                           ', 'Le crabe aux pinces d\'or                                                                            ', 'L\'Ile noire                                                                                         ', 'Tintin au pays de l\'or noir                                                                         ', 'L\'affaire Tournesol                                                                                 ', 3),
(10, 'Quel est le dernier album de Tintin ?                                                                                                                 ', 'Tintin au pays des Soviets                                                                          ', 'Tintin et les Picaros                                                                               ', 'Les bijoux de la Castafiore                                                                         ', 'Vol 714 pour Sydney                                                                                 ', 2),
(11, 'Parmi ces personnages, Hergè n\'est pas le père de :                                                                                                   ', 'Tintin et Milou (cadeau !...)                                                                       ', 'Quick et Flupke                                                                                     ', 'Jo, Zette et Jocko                                                                                  ', 'Gott, Faure et Dom\'                                                                                 ', 4),
(12, 'La Castafiore chante...                                                                                                                               ', 'Carmen                                                                                              ', 'L\'air des bijoux                                                                                    ', 'Le barbier de Séville                                                                               ', 'Les Rubis                                                                                           ', 2),
(13, 'Le premier album de Tintin (Tintin au Congo) date de :                                                                                                ', '1930                                                                                                ', '1931                                                                                                ', '1932                                                                                                ', '1933                                                                                                ', 1),
(14, 'Dans ses aventures au Congo, quel est le nom de la tribu qui invite Tintin ?                                                                          ', 'Les Babaoro\'m                                                                                       ', 'Les Bibindo\'m                                                                                       ', 'Les Balato\'m                                                                                        ', 'Les Cafarnao\'m                                                                                      ', 1),
(15, 'Quelle insulte n\'appartient pas au vocabulaire du capitaine Haddock ?                                                                                 ', 'Pyrophore                                                                                           ', 'Zigomars                                                                                            ', 'Phtynolises                                                                                         ', 'Sapajous                                                                                            ', 3),
(16, 'A qui appartenait le château de Moulinsart avant que le capitaine Haddock n\'y réside ?                                                                ', 'Au Dr. Müller                                                                                       ', 'A Rastapopoulos                                                                                     ', 'Au Pr. Tournesol                                                                                    ', 'Aux frères Loiseau                                                                                  ', 4),
(17, 'Que renferme la statuette à l\'oreille cassée ?                                                                                                        ', 'Un diamant                                                                                          ', 'Le plan d\'un trésor                                                                                 ', 'Je ne sais pas, j\'ai pas lu l\'histoire                                                              ', 'De la drogue                                                                                        ', 1),
(18, 'Comment Tintin et Tchang se rencontrent-ils ?                                                                                                         ', 'Tchang sauve Tintin sur qui des bandits tirent                                                      ', 'Tintin renverse Tchang en voiture                                                                   ', 'Tchang renverse Tintin en pousse-pousse                                                             ', 'Tintin sauve Tchang de la noyade                                                                    ', 4),
(19, 'Dans les bijoux de la castafiore, quelle invention le professeur essayait-il de mettre au point ?                                                   ', 'Un fauteuil roulant à moteur                                                                        ', 'Le téléviseur couleur                                                                               ', 'Le visiophone                                                                                       ', 'Le magnétoscope                                                                                     ', 2),
(20, 'Quel phénomène naturel sauve Tintin du bûcher au Temple du Soleil ?                                                                                 ', 'La foudre                                                                                           ', 'Un orage                                                                                            ', 'Une éclipse                                                                                         ', 'Un tremblement de terre                                                                             ', 3),
(21, 'Dans Vol 714 pour Sydney, Tournesol trouve un objet dont le métal est inexistant sur Terre ; cet objet ressemble à :                                ', 'Une soupape                                                                                         ', 'Un hochet                                                                                           ', 'Un bilboquet                                                                                        ', 'Une bougie de voiture                                                                               ', 1),
(22, 'Dans le Sceptre d\'Ottokar, quel objet utilisent Dupont, Dupond et Tintin pour simuler le vol du sceptre ?                                           ', 'La canne d\'un des Dupondt                                                                           ', 'Un os trouvé par Milou                                                                              ', 'La copie du vrai sceptre                                                                            ', 'Un morceau de branche                                                                               ', 4),
(23, 'Dans ses aventures au Congo, comment Tintin se débarrasse-t-il du léopard ?                                                                           ', 'Il lui fait manger une éponge, puis lui fait boire de l\'eau                                         ', 'Il lui fait manger un piment, puis lui fait boire de l\'eau-de-vie                                   ', 'Il lui bloque la gueule avec un bâton                                                               ', 'Il le brûle avec des rayons de soleil à travers une loupe                                           ', 1),
(24, 'Que signifie Coke dans Coke en stock ?                                                                                                            ', 'Du charbon                                                                                          ', 'De la drogue                                                                                        ', 'Des boissons gazeuses                                                                               ', 'Des esclaves                                                                                        ', 4),
(25, 'A part l\'orthographe de leur nom, qu\'est-ce qui différencie Dupont et Dupond ?                                                                        ', 'Les sourcils                                                                                        ', 'Le nez                                                                                              ', 'Le chapeau                                                                                          ', 'La moustache                                                                                        ', 4),
(26, 'Quelle anomalie peut-on relever sur la combinaison du capitaine Haddock dans On a marché sur la lune?                                               ', 'Il y a une poche en moins                                                                           ', 'Les ourlets ont disparu                                                                             ', 'Son matricule a changé                                                                              ', 'Les boutons sont inversés                                                                           ', 3),
(27, 'Sur quel bateau Tintin s\'embarque-t-il dans l\' Etoile mystèrieuse ?                                                                                 ', 'Sirius                                                                                              ', 'Aurore                                                                                              ', 'Peary                                                                                               ', 'Ramona                                                                                              ', 2),
(28, 'Dans les cigares du pharaon, Tintin parvient à communiquer avec un animal en sculptant une trompette. Il s\'agit :                                   ', 'D\'un tigre                                                                                          ', 'D\'un singe                                                                                          ', 'D\'un éléphant                                                                                       ', 'D\'un lion                                                                                           ', 3),
(29, 'Sur la couverture des 7 boules de cristal quel personnage est en lévitation ?                                                                       ', 'Tintin                                                                                              ', 'Le capitaine Haddock                                                                                ', 'Le professeur Bergamotte                                                                            ', 'Le professeur Tournesol                                                                             ', 4),
(30, 'Dans Tintin en Amérique Tintin se fait enlever à :                                                                                                  ', 'New-York                                                                                            ', 'Chicago                                                                                             ', 'Los Angeles                                                                                         ', 'Detroit                                                                                             ', 2),
(31, 'Comment s\'appelle le fils de l\'Emir ?                                                                                                                 ', 'Mohamed                                                                                             ', 'Abdoul                                                                                              ', 'Abdallah                                                                                            ', 'Mourad                                                                                              ', 3),
(32, 'Dans les bijoux de la Castafiore, le capitaine Haddock...                                                                                           ', 'Se casse la jambe                                                                                   ', 'Se coupe en se rasant                                                                               ', 'Se foule le poignet                                                                                 ', 'Se fait une entorse à la cheville                                                                   ', 4),
(33, 'Quel commerçant a un numéro de téléphone proche de celui du château de Moulinsart ?                                                                   ', 'La quincaillerie Sanclout                                                                           ', 'Le café Sanmart                                                                                     ', 'La boulangerie Sampin                                                                               ', 'La boucherie Sanzot                                                                                 ', 4),
(34, 'Quel est le prénom de l\'habilleuse de la Castafiore ?                                                                                                 ', 'Ulla                                                                                                ', 'Irma                                                                                                ', 'Maria                                                                                               ', 'Sandra                                                                                              ', 2),
(35, 'Szut, le pilote de Vol 714 pour Sydney a été le complice de Tintin dans une autre aventure                                                          ', 'Coke en stock                                                                                       ', 'Tintin au pays de l\'or noir                                                                         ', 'Les cigares du Pharaon                                                                              ', 'L\'oreille cassée                                                                                    ', 1),
(36, 'Quel est le bateau de l\'ancêtre du capitaine Haddock ?                                                                                                ', 'La Méduse                                                                                           ', 'La Licorne                                                                                          ', 'L\'Hippocampe                                                                                        ', 'Le Sirius                                                                                           ', 2),
(37, 'Lors de ses aventures au Tibet, Tintin découvre l\'écharpe de Tchang accrochée à un rocher. De quelle couleur est cette écharpe ?                      ', 'Rouge                                                                                               ', 'Jaune                                                                                               ', 'Verte                                                                                               ', 'Bleue                                                                                               ', 2),
(38, 'Le nom du créateur de Tintin vient :                                                                                                                  ', 'Des initiales de son nom et de son prénom (Rémi Georges : R.G.)                                     ', 'Des initiales des prénoms de ses enfants (Henri, Edouard, Roland, Guy et Emilie)                    ', 'Des initiales de ses prénoms (Hervé et Gérard)                                                      ', 'De nulle part, c\'est bien son vrai nom.                                                             ', 1),
(39, 'Spokie, Snowy, Milu, Bobble, Terry... sont les noms donnés à Milou dans diffèrentes traductions. Cherchez l\'intrus pour Tintin :                      ', 'Ten-Ten                                                                                             ', 'Tantan                                                                                              ', 'Titinne                                                                                             ', 'Tintim                                                                                              ', 3),
(40, 'Parmi les 22 albums, sur quelle couverture Tintin est-il représenté avec une arme à la main ?                                                         ', 'L\'oreille cassée                                                                                    ', 'Vol 714 pour Sidney                                                                                 ', 'L\'affaire Tournesol                                                                                 ', 'Tintin et les Picaros                                                                               ', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `num_user` int(11) NOT NULL,
  `pseudo` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `admin` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`num_quest`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`num_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
