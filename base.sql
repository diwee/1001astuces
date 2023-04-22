-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: danhome.sql.free.fr
-- Généré le : Sam 22 Avril 2023 à 13:00
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `danhome`
--

-- --------------------------------------------------------

--
-- Structure de la table `astuces`
--

CREATE TABLE IF NOT EXISTS `astuces` (
  `id` smallint(6) NOT NULL auto_increment,
  `date` date NOT NULL default '0000-00-00',
  `pseudo` text collate latin1_general_ci NOT NULL,
  `email` text collate latin1_general_ci NOT NULL,
  `titre` text collate latin1_general_ci NOT NULL,
  `astuce` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `astuces`
--

INSERT INTO `astuces` (`id`, `date`, `pseudo`, `email`, `titre`, `astuce`) VALUES
(1, '2002-02-22', '', '', 'nom de domaine gratos', 'Sur www.namezero.com il donne un nom de domaine gratos !! Sauf qu\\''il y a une banniÃ©re. VOir sue www.diwee.com'),
(2, '2002-03-08', '', '', 'WINDOWS + STABLE', '\\&quot;Hein ? Stable ! T\\''est pas bien toi ! Ma souris dÃ©bloque !, j\\''ai des messages sur un Ã©cran bleu : Erreur dans le VxD machinâ€¦\\&quot; Effectivement, Ã  l\\''installation de Windows, certains VxD* ne sont pas installÃ©s ! (merci Microsoft !) (*VxD = pilote de pÃ©riphÃ©rique virtuel). Voici comment rÃ©soudre ce problÃ¨me : Cliquez avec le bouton droit de la souris sur Poste de travail puis PropriÃ©tÃ©s. SÃ©lectionnez l\\''onglet Gestionnaire de pÃ©riphÃ©riques, dans cette fenÃªtre double-cliquez sur PÃ©riphÃ©riques SystÃ¨me. L\\''opÃ©ration va Ãªtre un petit peu longue mais bÃ©nÃ©fique ; maintenant cliquez sur chaque pÃ©riphÃ©rique et contrÃ´lez l\\''onglet Pilote\\\\DÃ©tails des fichiers du piloteâ€¦ Si vous voyez : C:\\\\Windows\\\\System\\\\configmg.vxd cela veut dire que vous utiliser le bon pilote Par contre si vous voyez : C:\\\\Windows\\\\System\\\\vmm32.vxd (configmg.vxd) cela dÃ©montre que Windows utilise un pilote gÃ©nÃ©rique pour ce pÃ©riphÃ©rique et qu\\''il pourrait utiliser le bon pilote mais celui-ci n\\''est pas installÃ© ! Maintenant installez les VxD manquantes, elles sont 7 ! Vcomm.vxd = pilote de communication. Vdd.vxd = pilote de pÃ©riphÃ©rique vidÃ©o. Vflatd.vxd = pilote virtuel du tampon vidÃ©o. Vdmad.vxd = pilote du contrÃ´leur DMA. Vmouse.vxd = pilote de souris. Configmg.vxd = manager de configuration de la carte mÃ¨re. Ntkern.vxd = pilote kernel. Ces pilotes se trouvent dans les fichiers CAB du CD de Windows 98 (CAB 50 pour Windows 98 SE et CAB 45 pour Windows 98 premiÃ¨re version). SÃ©lectionnez les pilotes manquant et copiez les dans le dossier C:\\\\Windows\\\\System. RedÃ©marrez Windows et retournez jeter un Å“il dans le gestionnaire de pÃ©riphÃ©riques systÃ¨me, les bons pilotes sont maintenant utilisÃ©s par Windows ! Et vous voilÃ  avec un Windows plus rapide et surtout plus stable !'),
(3, '2002-03-08', '', '', 'Plus rapide au dÃ©marrage et encore plus de resso', 'Vous ne travaillez pratiquement qu\\''avec Windows ? Alors voici comment accÃ©lÃ©rer son dÃ©marrage : Menu DÃ©marrer\\\\Executer â€¦\\\\msconfig puis OK. Dans l\\''utilitaire de configuration systÃ¨me dÃ©cochez les options suivantes : Utiliser Config.sys, Utiliser Autoexec.bat. Maintenant sÃ©lectionnez l\\''onglet DÃ©marrage. Vous allez pouvoir empÃªcher Windows de charger certains utilitaires qui consomment des ressources systÃ¨me et qui ralentissent sa vitesse comme le gestionnaire de votre carte graphique, le petit message au dÃ©marrage qui vous signale d\\''enregistrer vos logiciels sur le site de l\\''Ã©diteur, la recherche accÃ©lÃ©rÃ©e de Microsoft Office et j\\''en passe. Personnellement je n\\''ai conservÃ© que Task Monitor ainsi que LoadPowerProfile(les 2!). Avant ces modifications, j\\''attendais 1 min environ afin de pouvoir utiliser Windows et il me restait 86% de ressources disponibles. Maintenant, dÃ©marrage en moins de 20 secondes et 95% de ressources disponibles !'),
(4, '2002-03-08', '', '', 'AccÃ©lÃ©rer votre accÃ¨s Ã  Internet !', 'Voici quelques astuces qui vont vous permettre d\\''optimiser vos connexions sur le web. Tout d\\''abord un petit tour dans la base de registres, car Windows n\\''est pas optimisÃ© pour une connexion via modem. Il faut savoir que la valeur des paquets transportÃ©s par Windows est fixÃ©e Ã  1500 octets. Cela convient parfaitement aux connexions Ã  un rÃ©seau local mais elle est trop importante si vous utilisez un modem qu\\''il soit analogique ou numÃ©rique. Ouvrez Regedit HKEY_LOCAL_MACHINE\\\\System\\\\CurrentControlSet\\\\Service\\\\Class\\\\Net\\\\0000 Fixer la valeur chaÃ®ne IPMTU (ou crÃ©ez-la si nÃ©cessaire) Ã  576. N\\''avez vous jamais la dÃ©sagrÃ©able surprise d\\''attendre l\\''ouverture de la premiÃ¨re page d\\''un site et de vous retrouvez devant un message vous signalant que votre navigateur ne peut pas atteindre le site recherchÃ© ? Cela est sÃ»rement du au fait que le paramÃ¨tre TTL (Time To Live, que je traduirais par nombre de relais recherchÃ©s) est trop petit. D\\''origine cette valeur est Ã  32 rÃ©glez la Ã  128 vous serez tranquille. Ouvrez Regedit HKEY_LOCAL_MACHINE\\\\System\\\\CurrentControlSet\\\\Services\\\\VXD\\\\MSTCP Modifiez la valeur chaÃ®ne DefaultTTL Ã  128. Refermez Regedit mais ne redÃ©marrez pas tout de suite, nous allons peaufiner cette connexion ! Menu DÃ©marrer\\\\Executer\\\\Msconfig puis OK. SÃ©lectionnez l\\''onglet Win.ini, cliquez sur le dossier [Ports] et entrez ces valeurs : ComX=921600,n,8,1,p X = le port sur lequel est connectÃ© votre modem, 921600=vitesse maximum du port (bps) n=aucune paritÃ© 1=bit d\\''arrÃªt p=control de flux matÃ©riel Refermez l\\''utilitaire de configuration systÃ¨me mais ne redÃ©marrez pas encore. Je vous sens pressÃ© d\\''aller vous connecter ! Allez maintenant dans Panneau de configuration. Double-cliquez sur l\\''icÃ´ne Modems puis PropriÃ©tÃ©s. SÃ©lectionnez l\\''onglet Connexion puis en bas, ParamÃ¨tres du port. Dans la fenÃªtre qui vient de s\\''ouvrir vÃ©rifiez que l\\''option Utiliser les tampons FIFO est bien cochÃ©e. Et faites glissez les curseurs Tampon de rÃ©ception et d\\''Ã©mission complÃ¨tement Ã  droite puis OK. Cliquez sur AvancÃ©s et contrÃ´lez que les options Utiliser le contrÃ´le d\\''erreurs, Compresser les donnÃ©es, Utiliser le contrÃ´le de flux ainsi que MatÃ©riel [RTS\\\\CTS] soient biens cochÃ©es. Revenez Ã  l\\''onglet GÃ©nÃ©ral et dans la fenÃªtre Vitesse maximale, sÃ©lectionnez 115200. Refermez la fenÃªtre afin de valider vos nouveaux rÃ©glages et redÃ©marrez Windows. Vous pouvez maintenant profiter de ces nouveaux rÃ©glages.'),
(5, '2002-03-08', '', '', 'Cacher son numÃ©ro de tÃ©lÃ©phone', 'Tu dÃ©croche ton combinÃ© tÃ©lÃ©phonique ; Tape 3651 ; Et le numero de tÃ©lÃ©phone de la personne Ã  appeler'),
(6, '2002-03-08', '', '', 'Transformer n\\''importe quel Nokia en dÃ©tecteur de', 'C\\''est pour dÃ©tecter les radars fixes et mobiles Pour activer l\\''option , allez dans MENU, puis choisissez PARAMÃˆTRES. Ensuite sÃ©lectionnez PARAMETRES SECURITE Choisissez le sous-menu GROUPE LIMITEet une fois dedans, sÃ©lectionnez OUI Dedans , votre nokia vous demande le NÂ° du GROUPE. Vous mettez 40 et vous VALIDEZ... Maintenant, une icÃ´ne est apparue dans votre mode veille suivit d\\''un 40 DÃ©sormais, votre GSM Ã©mettra des \\&quot;BIP BIP\\&quot; dÃ¨s que vous Ãªtes Ã  + ou - 2 Km d\\''un radar !'),
(7, '2002-03-08', '', '', 'AccÃ©lerer votre connection !', 'Cette astuce est destinÃ©e aux possesseurs du modem OLITEC Speed Com 2000 et modem Wanadoo (Bleu). Pour les autres modems faites un tour vers... Lien Aller dans le panneau de configuration Cliquer 2 fois sur Modems Cliquer sur PropriÃ©tÃ©s Mettre Ã  115200 en vitesse maximale Cliquer sur Connexion puis AvancÃ©s Taper dans paramÃ¨tres supplÃ©mentaires AT&amp;F1;'),
(8, '2002-03-08', '', '', 'Explorer son disque dur et Ãªtre payÃ© :', 'Avec tes cashbarres, si tu mets dans ton navigateur un chemin (exemple : c:\\\\ ou c:\\\\mes documents) ta cashbarres pensera que tu surf ;)'),
(9, '2002-03-08', '', '', 'Nero peut aussi graver les fichiers BIN :', '(Utile pour graver des jeux PSX quand le fichier .CUE est mort et donc CDRWIN n\\''accepte pas l\\''image) Lancer Nero ; Allez dans \\&quot;Fichier\\&quot; ensuite \\&quot;Graver l\\''image\\&quot; ; Allez dans le rÃ©pertoire oÃ¹ se trouve votre image .BIN ; Evidemment il vous demandera un fichier .NRG (image propre Ã  NÃ©ro) sÃ©lectionnez en-dessous dans les types de fichiers \\&quot;Tous les fichiers\\&quot; ; Votre fichier .BIN apparaitra ; Ouvrez-le ; Nero vous indique qu\\''il ne conait pas ce type d\\''image et qu\\''il lui faut des infos pour le graver \\&quot;OK\\&quot;. Pour les jeux PSX indiquez juste \\&quot;MODE 2\\&quot; et cochez la case indiffÃ©remment. Vous voilÃ  avec un fichier .BIN gravÃ© alors que vous n\\''avez pas CDRWIN !'),
(10, '2002-06-05', '', '', 'vf', 'd *');
