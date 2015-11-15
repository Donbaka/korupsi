-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2015 pada 22.22
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corrupt_det_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `commensdsd`
--

CREATE TABLE IF NOT EXISTS `commensdsd` (
  `COMID` int(11) NOT NULL,
  `DCSID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `COCNTN` text,
  `COCRDT` datetime DEFAULT NULL,
  `COLMOD` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
`DCSID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `PJCID` int(11) DEFAULT NULL,
  `DCTHRD` varchar(50) DEFAULT NULL,
  `DCSNTYP` smallint(6) DEFAULT NULL,
  `DCCRDT` datetime DEFAULT NULL,
  `DCLMOD` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE IF NOT EXISTS `division` (
`DIVID` int(11) NOT NULL,
  `DIVNME` varchar(64) DEFAULT NULL,
  `DIVDESC` varchar(150) DEFAULT NULL,
  `DIVPRNT` int(11) DEFAULT NULL,
  `DILMOD` datetime DEFAULT NULL,
  `DICRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`DIVID`, `DIVNME`, `DIVDESC`, `DIVPRNT`, `DILMOD`, `DICRDT`) VALUES
(1, 'Administrator', NULL, NULL, '2015-11-13 00:00:00', '2015-11-13 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
`FAVID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `FVSTAT` smallint(6) DEFAULT NULL,
  `FAVNME` varchar(32) DEFAULT NULL,
  `FVLINK` text,
  `FVCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorite_test`
--

CREATE TABLE IF NOT EXISTS `favorite_test` (
  `FAVID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `FVSTAT` smallint(6) DEFAULT NULL,
  `FAVNME` varchar(32) DEFAULT NULL,
  `FVLINK` text,
  `FVCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`FILID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `WCEID` int(11) DEFAULT NULL,
  `PJCID` int(11) DEFAULT NULL,
  `FILNME` text,
  `FILINK` text,
  `FILTYP` varchar(3) DEFAULT NULL,
  `FILMOD` datetime DEFAULT NULL,
  `FICRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`FILID`, `USRID`, `USE_USRID`, `WCEID`, `PJCID`, `FILNME`, `FILINK`, `FILTYP`, `FILMOD`, `FICRDT`) VALUES
(3, 1, NULL, NULL, 2, 'commensdsd', 'commensdsd', 'TBL', '2015-11-15 02:47:29', '2015-11-15 02:47:29'),
(4, 1, NULL, NULL, 2, 'file_test', 'file_test', 'TBL', '2015-11-15 03:53:39', '2015-11-15 03:53:39'),
(5, 1, NULL, NULL, 2, 'favorite_test', 'favorite_test', 'TBL', '2015-11-15 03:53:39', '2015-11-15 03:53:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_test`
--

CREATE TABLE IF NOT EXISTS `file_test` (
  `FILID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `WCEID` int(11) DEFAULT NULL,
  `PJCID` int(11) DEFAULT NULL,
  `FILNME` text,
  `FILINK` text,
  `FILTYP` varchar(3) DEFAULT NULL,
  `FILMOD` datetime DEFAULT NULL,
  `FICRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `file_view`
--
CREATE TABLE IF NOT EXISTS `file_view` (
`FILID` int(11)
,`USRID` int(11)
,`USE_USRID` int(11)
,`WCEID` int(11)
,`PJCID` int(11)
,`FILNME` text
,`FILINK` text
,`FILTYP` varchar(3)
,`FILMOD` datetime
,`FICRDT` datetime
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`MSGID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `MSCNTN` text,
  `MSGFLG` smallint(6) DEFAULT NULL,
  `MSCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`NTFID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `NTFTYP` varchar(3) DEFAULT NULL,
  `NTFDESC` varchar(100) DEFAULT NULL,
  `NTFLINK1` text,
  `NTFLINK2` text,
  `NTFLINK3` text,
  `NTFLINK4` text,
  `NTFPAR1` text,
  `NTFPAR2` text,
  `NTFPAR3` int(11) DEFAULT NULL,
  `NTFPAR4` int(11) DEFAULT NULL,
  `NTFCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ntfseenby`
--

CREATE TABLE IF NOT EXISTS `ntfseenby` (
  `NTFID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `NTFFLG` smallint(6) DEFAULT NULL,
  `NTFSDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pjcteam`
--

CREATE TABLE IF NOT EXISTS `pjcteam` (
  `PJCID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `PJTPOS` varchar(50) DEFAULT NULL,
  `PJTCRDT` datetime DEFAULT NULL,
  `PJTLMOD` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pjcteam`
--

INSERT INTO `pjcteam` (`PJCID`, `USRID`, `PJTPOS`, `PJTCRDT`, `PJTLMOD`) VALUES
(2, 1, 'Ketua', '2015-11-14 03:16:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`PJCID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `PJCNME` varchar(32) DEFAULT NULL,
  `PJCDESC` varchar(150) DEFAULT NULL,
  `PJCPAR1` text,
  `PJCPAR2` text,
  `PJCPAR3` int(11) DEFAULT NULL,
  `PJSTAT` smallint(6) DEFAULT NULL,
  `PJLMOD` datetime DEFAULT NULL,
  `PJCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`PJCID`, `USRID`, `USE_USRID`, `PJCNME`, `PJCDESC`, `PJCPAR1`, `PJCPAR2`, `PJCPAR3`, `PJSTAT`, `PJLMOD`, `PJCRDT`) VALUES
(2, 1, 1, 'Pemantauan Keuangan Kota Surabay', 'Project bertujuan untuk mendeteksi adanya penyelewengan dana APBD dari kota Surabaya sehingga tindakan yang tepat bisa segera dilakukan.', NULL, NULL, NULL, 1, '2015-11-14 03:16:00', '2015-11-14 03:16:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
`TMLID` int(11) NOT NULL,
  `USRID` int(11) DEFAULT NULL,
  `PJCID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `TMTASK1` text,
  `TMTASK2` text,
  `TMPURP1` text,
  `TMPURP2` text,
  `TMSTAT` smallint(6) DEFAULT NULL,
  `TMTSDT` date DEFAULT NULL,
  `TMTFDT` date DEFAULT NULL,
  `TMCRDT` datetime DEFAULT NULL,
  `TMLMOD` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmlusrela`
--

CREATE TABLE IF NOT EXISTS `tmlusrela` (
  `TMLID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `TURSEQ` int(11) DEFAULT NULL,
  `TUSTAT` smallint(6) DEFAULT NULL,
  `TUWHDY` int(11) DEFAULT NULL,
  `TURSDT` date DEFAULT NULL,
  `TURFDT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`USRID` int(11) NOT NULL,
  `UPOID` int(11) DEFAULT NULL,
  `USRNME` varchar(16) DEFAULT NULL,
  `USRPASS` varchar(64) DEFAULT NULL,
  `USPASS2` varchar(64) DEFAULT NULL,
  `USCNME` varchar(52) DEFAULT NULL,
  `USBIRD` date DEFAULT NULL,
  `USBIRP` varchar(52) DEFAULT NULL,
  `USMAIL` varchar(42) DEFAULT NULL,
  `USRSEX` varchar(1) DEFAULT NULL,
  `USRNIK` varchar(36) DEFAULT NULL,
  `USRADR` varchar(100) DEFAULT NULL,
  `USCITY` varchar(52) DEFAULT NULL,
  `USPROV` varchar(64) DEFAULT NULL,
  `USRZIP` varchar(10) DEFAULT NULL,
  `USPHON` varchar(15) DEFAULT NULL,
  `USSTAT` smallint(6) DEFAULT NULL,
  `USLLOG` datetime DEFAULT NULL,
  `USLMOD` datetime DEFAULT NULL,
  `USCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`USRID`, `UPOID`, `USRNME`, `USRPASS`, `USPASS2`, `USCNME`, `USBIRD`, `USBIRP`, `USMAIL`, `USRSEX`, `USRNIK`, `USRADR`, `USCITY`, `USPROV`, `USRZIP`, `USPHON`, `USSTAT`, `USLLOG`, `USLMOD`, `USCRDT`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '€9$ó7Rö}', 'Pengen di Spong Team', '2015-09-12', 'Jakarta', 'spong@spong.com', 'M', '101010101010100', NULL, 'Jakarta', NULL, '102345', '08110101010100', 1, '2015-11-15 01:37:40', '2015-11-13 00:00:00', '2015-11-13 00:00:00'),
(2, 1, 'admin2', 'c84258e9c39059a89ab77d846ddab909', NULL, 'Pengen nyePONG Team', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-03 00:00:00', '2015-11-14 00:00:00', '2015-11-14 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usrpjcrela`
--

CREATE TABLE IF NOT EXISTS `usrpjcrela` (
  `PJCID` int(11) DEFAULT NULL,
  `UPOID` int(11) DEFAULT NULL,
  `UPRELA` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usrposition`
--

CREATE TABLE IF NOT EXISTS `usrposition` (
`UPOID` int(11) NOT NULL,
  `DIVID` int(11) DEFAULT NULL,
  `UPONME` varchar(32) DEFAULT NULL,
  `UPODESC` varchar(100) DEFAULT NULL,
  `UPLMOD` datetime DEFAULT NULL,
  `UPCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usrposition`
--

INSERT INTO `usrposition` (`UPOID`, `DIVID`, `UPONME`, `UPODESC`, `UPLMOD`, `UPCRDT`) VALUES
(1, 1, 'Super Administrator', NULL, '2015-11-13 00:00:00', '2015-11-13 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `watchlist`
--

CREATE TABLE IF NOT EXISTS `watchlist` (
`WCHID` int(11) NOT NULL,
  `PJCID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `WCHNME` varchar(64) DEFAULT NULL,
  `WCHDESC` varchar(100) DEFAULT NULL,
  `WCHQRY` text,
  `WCHLINK` text,
  `WCSTAT` smallint(6) DEFAULT NULL,
  `WCDFLG` smallint(6) DEFAULT NULL,
  `WCLMOD` datetime DEFAULT NULL,
  `WCCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `watchlist`
--

INSERT INTO `watchlist` (`WCHID`, `PJCID`, `USRID`, `USE_USRID`, `WCHNME`, `WCHDESC`, `WCHQRY`, `WCHLINK`, `WCSTAT`, `WCDFLG`, `WCLMOD`, `WCCRDT`) VALUES
(1, 2, 1, 1, 'file_view', 'test', 'CREATE VIEW file_view AS\r\nSELECT * from file', NULL, 1, NULL, '2015-11-15 04:17:17', '2015-11-15 04:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wchdashboard`
--

CREATE TABLE IF NOT EXISTS `wchdashboard` (
`WCDID` int(11) NOT NULL,
  `WCHID` int(11) DEFAULT NULL,
  `WCDTYP` varchar(3) DEFAULT NULL,
  `WCDPAR1` text,
  `WCDPAR2` text,
  `WCDPAR3` text,
  `WCDPAR4` int(11) DEFAULT NULL,
  `WCDPAR5` int(11) DEFAULT NULL,
  `WCDPAR6` int(11) DEFAULT NULL,
  `WCDPAR7` datetime DEFAULT NULL,
  `WCDPAR8` datetime DEFAULT NULL,
  `WCDPAR9` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wchevaluation`
--

CREATE TABLE IF NOT EXISTS `wchevaluation` (
`WCEID` int(11) NOT NULL,
  `WCHID` int(11) DEFAULT NULL,
  `USRID` int(11) DEFAULT NULL,
  `USE_USRID` int(11) DEFAULT NULL,
  `WCESEQ` int(11) NOT NULL,
  `WCEDESC` varchar(150) DEFAULT NULL,
  `WCRSDT` date DEFAULT NULL,
  `WCRFDT` date DEFAULT NULL,
  `WCEVAL1` float DEFAULT NULL,
  `WCEVAL2` float DEFAULT NULL,
  `WCEVAL3` float DEFAULT NULL,
  `WCLMOD` datetime DEFAULT NULL,
  `WCCRDT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur untuk view `file_view`
--
DROP TABLE IF EXISTS `file_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `file_view` AS select `file`.`FILID` AS `FILID`,`file`.`USRID` AS `USRID`,`file`.`USE_USRID` AS `USE_USRID`,`file`.`WCEID` AS `WCEID`,`file`.`PJCID` AS `PJCID`,`file`.`FILNME` AS `FILNME`,`file`.`FILINK` AS `FILINK`,`file`.`FILTYP` AS `FILTYP`,`file`.`FILMOD` AS `FILMOD`,`file`.`FICRDT` AS `FICRDT` from `file`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
 ADD PRIMARY KEY (`DCSID`), ADD KEY `FK_DCS_CREATED_BY` (`USRID`), ADD KEY `FK_RELATIONSHIP_39` (`PJCID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
 ADD PRIMARY KEY (`DIVID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
 ADD PRIMARY KEY (`FAVID`), ADD KEY `FK_RELATIONSHIP_38` (`USRID`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`FILID`), ADD KEY `FK_FIL_CREATED_BY` (`USRID`), ADD KEY `FK_FIL_MODIFIED_BY` (`USE_USRID`), ADD KEY `FK_RELATIONSHIP_29` (`PJCID`), ADD KEY `FK_RELATIONSHIP_31` (`WCEID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`MSGID`), ADD KEY `FK_MSG_FROM` (`USRID`), ADD KEY `FK_MSG_TO` (`USE_USRID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`NTFID`), ADD KEY `FK_NTF_CREATED_BY` (`USRID`);

--
-- Indexes for table `ntfseenby`
--
ALTER TABLE `ntfseenby`
 ADD KEY `FK_RELATIONSHIP_23` (`USRID`), ADD KEY `FK_RELATIONSHIP_24` (`NTFID`);

--
-- Indexes for table `pjcteam`
--
ALTER TABLE `pjcteam`
 ADD KEY `FK_RELATIONSHIP_21` (`USRID`), ADD KEY `FK_RELATIONSHIP_22` (`PJCID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`PJCID`), ADD KEY `FK_PJC_CREATED_BY` (`USRID`), ADD KEY `FK_PJC_MODIFIED_BY` (`USE_USRID`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
 ADD PRIMARY KEY (`TMLID`), ADD KEY `FK_RELATIONSHIP_32` (`PJCID`), ADD KEY `FK_TML_CREATED_BY` (`USRID`), ADD KEY `FK_TML_MODIFIED_BY` (`USE_USRID`);

--
-- Indexes for table `tmlusrela`
--
ALTER TABLE `tmlusrela`
 ADD KEY `FK_RELATIONSHIP_35` (`USRID`), ADD KEY `FK_RELATIONSHIP_36` (`TMLID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`USRID`), ADD KEY `FK_RELATIONSHIP_26` (`UPOID`);

--
-- Indexes for table `usrpjcrela`
--
ALTER TABLE `usrpjcrela`
 ADD KEY `FK_RELATIONSHIP_27` (`UPOID`), ADD KEY `FK_RELATIONSHIP_28` (`PJCID`);

--
-- Indexes for table `usrposition`
--
ALTER TABLE `usrposition`
 ADD PRIMARY KEY (`UPOID`), ADD KEY `FK_RELATIONSHIP_25` (`DIVID`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
 ADD PRIMARY KEY (`WCHID`), ADD KEY `FK_RELATIONSHIP_30` (`PJCID`), ADD KEY `FK_WCH_CREATED_BY` (`USE_USRID`), ADD KEY `FK_WCH_MODIFIED_BY` (`USRID`);

--
-- Indexes for table `wchdashboard`
--
ALTER TABLE `wchdashboard`
 ADD PRIMARY KEY (`WCDID`), ADD KEY `FK_RELATIONSHIP_33` (`WCHID`);

--
-- Indexes for table `wchevaluation`
--
ALTER TABLE `wchevaluation`
 ADD PRIMARY KEY (`WCEID`), ADD KEY `FK_RELATIONSHIP_34` (`WCHID`), ADD KEY `FK_WCV_CREATED_BY` (`USE_USRID`), ADD KEY `FK_WCV_MODIFIED_BY` (`USRID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
MODIFY `DCSID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
MODIFY `DIVID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
MODIFY `FAVID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `FILID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `MSGID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `NTFID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `PJCID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
MODIFY `TMLID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `USRID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usrposition`
--
ALTER TABLE `usrposition`
MODIFY `UPOID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
MODIFY `WCHID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wchdashboard`
--
ALTER TABLE `wchdashboard`
MODIFY `WCDID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wchevaluation`
--
ALTER TABLE `wchevaluation`
MODIFY `WCEID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `discussion`
--
ALTER TABLE `discussion`
ADD CONSTRAINT `FK_DCS_CREATED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_RELATIONSHIP_39` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`);

--
-- Ketidakleluasaan untuk tabel `favorite`
--
ALTER TABLE `favorite`
ADD CONSTRAINT `FK_RELATIONSHIP_38` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `file`
--
ALTER TABLE `file`
ADD CONSTRAINT `FK_FIL_CREATED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_FIL_MODIFIED_BY` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`),
ADD CONSTRAINT `FK_RELATIONSHIP_31` FOREIGN KEY (`WCEID`) REFERENCES `wchevaluation` (`WCEID`);

--
-- Ketidakleluasaan untuk tabel `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `FK_MSG_FROM` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_MSG_TO` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `notification`
--
ALTER TABLE `notification`
ADD CONSTRAINT `FK_NTF_CREATED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `ntfseenby`
--
ALTER TABLE `ntfseenby`
ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`NTFID`) REFERENCES `notification` (`NTFID`);

--
-- Ketidakleluasaan untuk tabel `pjcteam`
--
ALTER TABLE `pjcteam`
ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`);

--
-- Ketidakleluasaan untuk tabel `project`
--
ALTER TABLE `project`
ADD CONSTRAINT `FK_PJC_CREATED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_PJC_MODIFIED_BY` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `timeline`
--
ALTER TABLE `timeline`
ADD CONSTRAINT `FK_RELATIONSHIP_32` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`),
ADD CONSTRAINT `FK_TML_CREATED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_TML_MODIFIED_BY` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `tmlusrela`
--
ALTER TABLE `tmlusrela`
ADD CONSTRAINT `FK_RELATIONSHIP_35` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_RELATIONSHIP_36` FOREIGN KEY (`TMLID`) REFERENCES `timeline` (`TMLID`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`UPOID`) REFERENCES `usrposition` (`UPOID`);

--
-- Ketidakleluasaan untuk tabel `usrpjcrela`
--
ALTER TABLE `usrpjcrela`
ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`UPOID`) REFERENCES `usrposition` (`UPOID`),
ADD CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`);

--
-- Ketidakleluasaan untuk tabel `usrposition`
--
ALTER TABLE `usrposition`
ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`DIVID`) REFERENCES `division` (`DIVID`);

--
-- Ketidakleluasaan untuk tabel `watchlist`
--
ALTER TABLE `watchlist`
ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`PJCID`) REFERENCES `project` (`PJCID`),
ADD CONSTRAINT `FK_WCH_CREATED_BY` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_WCH_MODIFIED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`);

--
-- Ketidakleluasaan untuk tabel `wchdashboard`
--
ALTER TABLE `wchdashboard`
ADD CONSTRAINT `FK_RELATIONSHIP_33` FOREIGN KEY (`WCHID`) REFERENCES `watchlist` (`WCHID`);

--
-- Ketidakleluasaan untuk tabel `wchevaluation`
--
ALTER TABLE `wchevaluation`
ADD CONSTRAINT `FK_RELATIONSHIP_34` FOREIGN KEY (`WCHID`) REFERENCES `watchlist` (`WCHID`),
ADD CONSTRAINT `FK_WCV_CREATED_BY` FOREIGN KEY (`USE_USRID`) REFERENCES `user` (`USRID`),
ADD CONSTRAINT `FK_WCV_MODIFIED_BY` FOREIGN KEY (`USRID`) REFERENCES `user` (`USRID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
