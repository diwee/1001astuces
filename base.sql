-- 
-- Structure de la table `astuces`
-- 

CREATE TABLE `astuces` (
  `id` smallint(6) NOT NULL auto_increment,
  `date` date NOT NULL default '0000-00-00',
  `pseudo` text NOT NULL,
  `email` text NOT NULL,
  `titre` text NOT NULL,
  `astuce` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=5 ;
        