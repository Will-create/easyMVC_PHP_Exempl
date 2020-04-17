--
-- MySQL 5.5.5
-- Wed, 25 Mar 2020 17:55:48 +0000
--
CREATE database phoenix;

use phoenix;

CREATE TABLE `groupe1` (
   `id` int(11) not null auto_increment,
   `nom` varchar(255),
   `prenom` varchar(255),
   `formation` varchar(255),
   `photo` varchar(255),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO `groupe1` (`id`, `nom`, `prenom`, `formation`, `photo`) VALUES 
('1', 'Tiendrebeogo', 'Rachidatou', 'Médecines', 'photo/rachida.jpg'),
('2', 'Nabaloum', 'Louis', 'Musique', 'photo/louis.jpg'),
('3', 'Saba', 'Emilie', 'Psychologie', 'photo/emilie.jpg'),
('4', 'OUEDRAOGO', 'Ousseni', 'Informatique', 'photo/ousseni.jpg'),
('5', 'Beogo', 'Aristide', 'Communication', 'photo/beogo.jpg');