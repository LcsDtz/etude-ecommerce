-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 11 Décembre 2019 à 19:52
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pmu`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `ID_Article` int(11) NOT NULL,
  `Reference_Article` varchar(100) NOT NULL,
  `Nom_Article` varchar(100) NOT NULL,
  `Image_Article` varchar(500) DEFAULT NULL,
  `Prix_Article` double NOT NULL,
  `Cat_Article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`ID_Article`, `Reference_Article`, `Nom_Article`, `Image_Article`, `Prix_Article`, `Cat_Article`) VALUES
(1, 'Bague', 'Bague', 'bague.jpg', 3, 1),
(3, 'Bande', 'Bande cintre glisier', 'bncCintreGlisier.jpg', 8, 2),
(6, 'Boulon', 'Boulon Pivot', 'boulonPivot.jpg', 1, 3),
(11, 'Crochet', 'Crochet', 'crochet.jpg', 2, 7),
(17, 'Montage', 'Montage BC1', 'montBC1.jpg', 14, 5),
(31, 'Plaque', 'Plaque', 'plaque.jpg', 10, 4),
(44, 'Poulie', 'Poulie', 'poulie.jpg', 10, 6),
(102, 'Anneau', 'Anneau Caoutchouc', 'anneauCaoutchouc.jpg', 2, 1),
(103, 'Bande', 'Bande cintre glisier', 'bncCintreGlisier.jpg', 8, 2),
(104, 'Bande', 'Bande Coudee', 'bndCoudee.jpg', 9, 2),
(105, 'Bande', 'Bande Curve', 'bndPerfore.jpg', 8, 2),
(106, 'Boulon', 'Boulon Pivot', 'boulonPivot.jpg', 1, 3),
(107, 'Cavalier', 'Cavalier', 'cavalier.jpg', 2, 1),
(108, 'Cheville', 'Cheville Filete', 'chevilleFilete.jpg', 3, 3),
(109, 'Clavette', 'Clavette', 'clavette.jpg', 3, 1),
(110, 'Cornière', 'Corniere', 'corniere.jpg', 2, 1),
(111, 'Crochet', 'Crochet', 'crochet.jpg', 2, 7),
(112, 'Disque', 'Disque', 'disque.jpg', 4, 1),
(113, 'Ecrou', 'Ecrou', 'ecrou.jpg', 1, 3),
(114, 'Equerre', 'Equerre90', 'Equerre.jpg', 4, 1),
(115, 'Equerre', 'Equerre135', 'Equerre135.jpg', 3, 1),
(116, 'Equerre', 'Equerre Renv', 'equerreRenv.jpg', 3, 1),
(117, 'Montage', 'Montage BC1', 'montBC1.jpg', 14, 5),
(118, 'Montage', 'Montage BC2', 'montBC2.jpg', 15, 5),
(119, 'Montage', 'Montage BC3', 'montBC3.jpg', 13, 5),
(120, 'Montage', 'Montage BC4', 'montBC4.jpg', 19, 5),
(121, 'Montage', 'Montage BC5', 'montBC5.jpg', 17, 5),
(122, 'Montage', 'Montage BC6', 'montBC6.jpg', 27, 5),
(123, 'Montage', 'Montage BC7', 'montBC7.jpg', 28, 5),
(124, 'Montage', 'Montage BC8', 'montBC8.jpg', 30, 5),
(125, 'Montage', 'Montage BC10', 'montBC10.jpg', 33, 5),
(126, 'Montage', 'Montage BC11', 'montBC11.jpg', 37, 5),
(127, 'Montage', 'Montage BC12', 'montBC12.jpg', 36, 5),
(128, 'Montage', 'Montage BC13', 'montBC13.jpg', 43, 5),
(129, 'Montage', 'Montage BC14', 'montBC14.jpg', 47, 5),
(130, 'Pignon', 'Pignon', 'pignon.jpg', 7, 7),
(131, 'Plaque', 'Plaque', 'plaque.jpg', 10, 4),
(132, 'Pleu', 'Pleu Auto', 'pleuAuto.jpg', 60, 7),
(133, 'Plaque', 'plqBande', 'plqBande.jpg', 17, 4),
(134, 'Plaque', 'Plaque Cintree', 'plqCintree.jpg', 10, 4),
(135, 'Plaque', 'Plaque Cintre U', 'plqCintreU.jpg', 12, 4),
(136, 'Plaque', 'Plaque Demi Circ', 'plqDemiCirc.jpg', 10, 4),
(137, 'Plaque', 'Plaque Flexible', 'plqFlexible.jpg', 14, 4),
(138, 'Plaque', 'Plaque Flexible Triangle', 'plqFlexTrg.jpg', 10, 4),
(139, 'Plaque', 'Plaque Plastique Bleu', 'plqPlstiqBleu.jpg', 10, 4),
(140, 'Plaque', 'Plaque Plastique Clair', 'plqPlstiqClair.jpg', 18, 4),
(141, 'Plaque', 'Plaque Rebord', 'plqRebord.jpg', 14, 4),
(142, 'Plaque', 'Plaque Secteur', 'plqSecteur.jpg', 14, 4),
(143, 'Pneu', 'Pneu Poulie', 'pneu4Poulie.jpg', 59, 7),
(144, 'Poulie', 'Poulie', 'poulie.jpg', 10, 6),
(145, 'Poulie', 'Poulie 2', 'poulie2.jpg', 7, 6),
(146, 'Poulie', 'Poulie 2 Moyeu', 'poulie2Moyeu.jpg', 7, 6),
(147, 'Poulie', 'Poulie Moyeu', 'poulieMoyeu.jpg', 7, 6),
(148, 'Tringle', 'Tringle bnd', 'rcdTringlBnd.jpg', 3, 7),
(149, 'Tringle', 'Tringle bnd 90', 'rcdTringlBnd90.jpg', 7, 7),
(150, 'Tringle', 'Tringle 2', 'rcdTringle.jpg', 4, 7),
(151, 'Ressort', 'Ressort Attache', 'ressortAttache.jpg', 2, 1),
(152, 'Anneau', 'Anneau Caoutchouc', 'anneauCaoutchouc.jpg', 2, 1),
(153, 'Bande', 'Bande cintre glisier', 'bncCintreGlisier.jpg', 8, 2),
(154, 'Bande', 'Bande Coudee', 'bndCoudee.jpg', 9, 2),
(155, 'Bande', 'Bande Curve', 'bndPerfore.jpg', 8, 2),
(156, 'Boulon', 'Boulon Pivot', 'boulonPivot.jpg', 1, 3),
(157, 'Cavalier', 'Cavalier', 'cavalier.jpg', 2, 1),
(158, 'Cheville', 'Cheville Filete', 'chevilleFilete.jpg', 3, 3),
(159, 'Clavette', 'Clavette', 'clavette.jpg', 3, 1),
(160, 'Cornière', 'Corniere', 'corniere.jpg', 2, 1),
(161, 'Crochet', 'Crochet', 'crochet.jpg', 2, 7),
(162, 'Disque', 'Disque', 'disque.jpg', 4, 1),
(163, 'Ecrou', 'Ecrou', 'ecrou.jpg', 1, 3),
(164, 'Equerre', 'Equerre90', 'Equerre.jpg', 4, 1),
(165, 'Equerre', 'Equerre135', 'Equerre135.jpg', 3, 1),
(166, 'Equerre', 'Equerre Renv', 'equerreRenv.jpg', 3, 1),
(167, 'Longrine', 'Longrine', 'longrine.jpg', 3, 7),
(168, 'Montage', 'Montage BC1', 'montBC1.jpg', 14, 5),
(169, 'Montage', 'Montage BC2', 'montBC2.jpg', 15, 5),
(170, 'Montage', 'Montage BC3', 'montBC3.jpg', 13, 5),
(171, 'Montage', 'Montage BC4', 'montBC4.jpg', 19, 5),
(172, 'Montage', 'Montage BC5', 'montBC5.jpg', 17, 5),
(173, 'Montage', 'Montage BC6', 'montBC6.jpg', 27, 5),
(174, 'Montage', 'Montage BC7', 'montBC7.jpg', 28, 5),
(175, 'Montage', 'Montage BC8', 'montBC8.jpg', 30, 5),
(176, 'Montage', 'Montage BC10', 'montBC10.jpg', 33, 5),
(177, 'Montage', 'Montage BC11', 'montBC11.jpg', 37, 5),
(178, 'Montage', 'Montage BC12', 'montBC12.jpg', 36, 5),
(179, 'Montage', 'Montage BC13', 'montBC13.jpg', 43, 5),
(180, 'Montage', 'Montage BC14', 'montBC14.jpg', 47, 5),
(181, 'Pignon', 'Pignon', 'pignon.jpg', 7, 7),
(182, 'Plaque', 'Plaque', 'plaque.jpg', 10, 4),
(183, 'Pleu', 'Pleu Auto', 'pleuAuto.jpg', 60, 7),
(184, 'Plaque', 'plqBande', 'plqBande.jpg', 17, 4),
(185, 'Plaque', 'Plaque Cintree', 'plqCintree.jpg', 10, 4),
(186, 'Plaque', 'Plaque Cintre U', 'plqCintreU.jpg', 12, 4),
(187, 'Plaque', 'Plaque Demi Circ', 'plqDemiCirc.jpg', 10, 4),
(188, 'Plaque', 'Plaque Flexible', 'plqFlexible.jpg', 14, 4),
(189, 'Plaque', 'Plaque Flexible Triangle', 'plqFlexTrg.jpg', 10, 4),
(190, 'Plaque', 'Plaque Plastique Bleu', 'plqPlstiqBleu.jpg', 10, 4),
(191, 'Plaque', 'Plaque Plastique Clair', 'plqPlstiqClair.jpg', 18, 4),
(192, 'Plaque', 'Plaque Rebord', 'plqRebord.jpg', 14, 4),
(193, 'Plaque', 'Plaque Secteur', 'plqSecteur.jpg', 14, 4),
(194, 'Pneu', 'Pneu Poulie', 'pneu4Poulie.jpg', 59, 7),
(195, 'Poulie', 'Poulie', 'poulie.jpg', 10, 6),
(196, 'Poulie', 'Poulie 2', 'poulie2.jpg', 7, 6),
(197, 'Poulie', 'Poulie 2 Moyeu', 'poulie2Moyeu.jpg', 7, 6),
(198, 'Poulie', 'Poulie Moyeu', 'poulieMoyeu.jpg', 7, 6),
(199, 'Tringle', 'Tringle bnd', 'rcdTringlBnd.jpg', 3, 7),
(200, 'Tringle', 'Tringle bnd 90', 'rcdTringlBnd90.jpg', 7, 7),
(201, 'Tringle', 'Tringle 2', 'rcdTringle.jpg', 4, 7),
(202, 'Ressort', 'Ressort Attache', 'ressortAttache.jpg', 2, 1),
(203, 'Rondelle', 'Rondelle', 'rondelle.jpg', 2, 1),
(204, 'Roue', 'Roue Barrilet', 'roueBarillet.jpg', 7, 7),
(205, 'Roue', 'Roue Dentee', 'roueDentee.jpg', 8, 7),
(206, 'Support', 'Support Double', 'supDouble.jpg', 7, 7),
(207, 'Support', 'Support plat', 'supPlat.jpg', 5, 7),
(208, 'Tige', 'Tige Filete', 'tigeFilete.jpg', 2, 3),
(209, 'Embase', 'Embase', 'trgEmbase.jpg', 1, 7),
(210, 'Embase Coude', 'Embase Coude', 'trgEmbaseCoude.jpg', 1, 7),
(211, 'Tringle', 'Tringle 2', 'tringle.jpg', 4, 3),
(212, 'Vis', 'Vis', 'vis.jpg', 1, 3),
(213, 'Vis', 'Vis Long', 'visLong.jpg', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID_CAT` int(11) NOT NULL,
  `Designation` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID_CAT`, `Designation`) VALUES
(1, 'Attache'),
(2, 'Bande'),
(3, 'Vissement'),
(4, 'Plaque'),
(5, 'Montage'),
(6, 'Poulie'),
(7, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID_Client` int(11) NOT NULL,
  `Nom_Client` varchar(30) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Rue` varchar(100) NOT NULL,
  `CP` int(11) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID_Client`, `Nom_Client`, `Pseudo`, `Mdp`, `Numero`, `Rue`, `CP`, `Ville`, `Mail`, `Tel`) VALUES
(1, 'pierre paul', 'pierre', 'pierre', 8, 'pierre', 58962, 'pierre', 'pierre@pierre.fr', 5298756),
(2, 'pierre paul', 'jean', 'pierre', 8, 'pierre', 58962, 'pierre', 'pierre@pierre.fr', 5298756),
(3, 'test', 'test', 'test', 4, 'test', 59195, 'herin', 'sdjsjd@live.fr', 625498960),
(4, 'test', 'test', 'test', 4, 'test', 59195, 'herin', 'sdjsjd@live.fr', 625498960),
(5, 'FBsdfgdsg', 'sdrgssg', 'da55c12a477cd9631a1f2f6096a6965d', 8, 'zfs', 58520, 'dgsg', 'dsfgs@sdg.fr', 658987854),
(6, 'Paul Chirac', 'Pdedede', 'da55c12a477cd9631a1f2f6096a6965d', 8, 'doreil', 59303, 'dore', 'ede@lo.fr', 685758475),
(7, 'Paul Chirac', 'Pdededezdzd', 'da55c12a477cd9631a1f2f6096a6965d', 8, 'doreil', 59303, 'dore', 'eddzde@lo.fr', 685758475),
(8, 'Paul michou', 'admin', '21232f297a57a5a743894a0e4a801fc3', 8, 'ferferf', 59874, 'dfvdfv', 'gsdfgdfg@fdg.fr', 658774852);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_Com` int(11) NOT NULL,
  `Date_Com` date NOT NULL,
  `ID_Client` int(11) NOT NULL,
  `Montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`ID_Com`, `Date_Com`, `ID_Client`, `Montant`) VALUES
(1, '2019-11-30', 8, 16),
(2, '2019-11-30', 8, 136),
(3, '2019-11-30', 8, 20),
(4, '2019-11-30', 8, 20),
(5, '2019-11-30', 8, 53),
(6, '2019-12-02', 8, 70),
(7, '2019-12-10', 8, 136),
(8, '2019-12-10', 8, 136),
(9, '2019-12-11', 8, 63),
(10, '2019-12-11', 8, 920);

-- --------------------------------------------------------

--
-- Structure de la table `detail_commande`
--

CREATE TABLE `detail_commande` (
  `ID_Detail` int(11) NOT NULL,
  `ID_Com` int(11) NOT NULL,
  `Nom_Article` varchar(50) NOT NULL,
  `Image_Article` varchar(255) DEFAULT NULL,
  `Prix_Article` int(11) NOT NULL,
  `Cat_Article` int(11) NOT NULL,
  `Qte_Article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `detail_commande`
--

INSERT INTO `detail_commande` (`ID_Detail`, `ID_Com`, `Nom_Article`, `Image_Article`, `Prix_Article`, `Cat_Article`, `Qte_Article`) VALUES
(1, 1, 'Boulon Pivot', 'boulonPivot.jpg', 1, 6, 3),
(2, 1, 'Crochet', 'crochet.jpg', 2, 5, 7),
(3, 2, 'Bande Coudee', 'bndCoudee.jpg', 9, 14, 2),
(4, 2, 'Plaque', 'plaque.jpg', 10, 1, 4),
(5, 3, 'Bande Coudee', 'bndCoudee.jpg', 9, 1, 2),
(6, 3, 'Plaque', 'plaque.jpg', 10, 1, 4),
(7, 3, 'Boulon Pivot', 'boulonPivot.jpg', 1, 1, 3),
(8, 4, 'Bande Coudee', 'bndCoudee.jpg', 9, 2, 1),
(9, 4, 'Plaque', 'plaque.jpg', 10, 4, 1),
(10, 4, 'Boulon Pivot', 'boulonPivot.jpg', 1, 3, 1),
(11, 5, 'Bague', 'bague.jpg', 3, 1, 19),
(12, 5, 'Anneau Caoutchouc', 'anneauCaoutchouc.jpg', 2, 1, 1),
(13, 6, 'Boulon Pivot', 'boulonPivot.jpg', 1, 3, 75),
(14, 6, 'Cavalier', 'cavalier.jpg', 2, 1, 1),
(15, 7, 'Cavalier', 'cavalier.jpg', 2, 1, 69),
(16, 7, 'Ecrou', 'ecrou.jpg', 1, 3, 13),
(17, 8, 'Cavalier', 'cavalier.jpg', 2, 1, 69),
(18, 8, 'Ecrou', 'ecrou.jpg', 1, 3, 13),
(19, 9, 'Boulon Pivot', 'boulonPivot.jpg', 1, 3, 1),
(20, 9, 'Pleu Auto', 'pleuAuto.jpg', 60, 7, 1),
(21, 9, 'Corniere', 'corniere.jpg', 2, 1, 1),
(22, 10, 'Pleu Auto', 'pleuAuto.jpg', 60, 7, 17),
(23, 10, 'Corniere', 'corniere.jpg', 2, 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_Article`),
  ADD KEY `fk_categ` (`Cat_Article`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_Com`);

--
-- Index pour la table `detail_commande`
--
ALTER TABLE `detail_commande`
  ADD PRIMARY KEY (`ID_Detail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_Com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `detail_commande`
--
ALTER TABLE `detail_commande`
  MODIFY `ID_Detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_categ` FOREIGN KEY (`Cat_Article`) REFERENCES `categorie` (`ID_CAT`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
