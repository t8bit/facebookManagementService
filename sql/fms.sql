-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2012 at 07:43 PM
-- Server version: 5.5.28
-- PHP Version: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `facebook_token` text NOT NULL,
  `page_id` int(11) NOT NULL,
  `permission` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `token`, `facebook_token`, `page_id`, `permission`) VALUES
(1, 'Tiago', '0de21cdbc9c456990e6748c512f145cc', '50bce547adf36', 'AAAC8kuyFPuQBAE8AkRKz9cdNGHwBg6d395lwNVYXZATRrYhQULPxHkETYfuRHX2h8KCMadYuLhkpvEnWFYURuCz12OqzNDVAXkXWSGQZDZD', 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`id`, `imagem`, `id_user`) VALUES
(17, 'Screenshot from 2012-10-29 10:33:19.png', 0),
(23, 'file.png', 1),
(24, 'file.png', 1),
(25, 'Screenshot from 2012-11-26 11:27:46.png', 1),
(27, 'Logo7UP_128x128.jpg', 3),
(28, 'ajax.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `access_token` text NOT NULL,
  `category` text NOT NULL,
  `id_page` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `access_token`, `category`, `id_page`, `id_user`) VALUES
(104, 'T8bit', 'AAAC8kuyFPuQBACtS4C8ZCdDILZCXu1VfblxtWN8PAijAAmLllpyfQ9G6ZBgVwFPnZCrumXB3qG6tQmxRaYjTM1JWQpG4lnrNenGYSWZCLreJNhJh7iKKb', 'Computers', '113871425384131', 1),
(105, 'T8bit29', 'AAAC8kuyFPuQBAOtn84dohYvrNYBgHRIh8KMf0LUHKvOzW5iLXERYyUyFhERkldKOxmJjILg6BtKWDDz7rAg8CpG1rWVheGNJ3nXu1QxqiRYdMrhQ', 'Computers', '254111528048527', 1),
(106, '7UP EspaÃ±a', 'AAAC8kuyFPuQBANCw7MoUpuekOBMCBTQjN04tNoYMzw2ykJDaYdbj3wUGdFdUwNNUDeTWENVFndIuibpZCllFVEv2SVqpnW34Prlr5GvcSmDZBfsnei', 'Food/beverages', '348834398497212', 1),
(107, '7UP Canarias', 'AAAC8kuyFPuQBAKAHoWMYVUVJNMuVk4nuGp5ClaZBuAZBVE8lcKeHLW2ECreUhZAb0foZAlOAYRr8VLvHbqlAAQJkkb7kcULDGIVK1dnrjkPQgnezkcTZC', 'Food/beverages', '417053571688524', 1),
(108, 'Knoworking', 'AAAC8kuyFPuQBAMVpesEP6QHXZCbcdysSbVGvJ7u9FwoSCydfGE7vdUEZCwKIvSGNx61yTIPW5cncdcEilhPmxnNIo00vknLLTzA1UnT049pIAi2o1q', 'Internet/software', '213671165399638', 1),
(109, 'Uhauu', 'AAAC8kuyFPuQBADZA4OZAYaPZA82GLrX9nrmJgqrvOMh8ZA7QpHQEzBpMBNY6jYDym6KBj33beYhkPXwDjXg7ZBwRDh4yvV2Gtloq3jSR8JV6lRZBTW92Sh', 'Education website', '194935857285641', 1),
(110, 'Tiago AndrÃ©', 'AAAC8kuyFPuQBAMBPvFLKB8znr88ruZCKnL3VO6soCfZBcINyRbUG8mmYgyImfsPkuzOilIm6NoxXiM8jqqfQlHNle9glxJlzyXmqHEZAmnVgZAvKoV8ZC', 'Business person', '322162764487303', 1),
(111, 'Comi a tua mÃ£e', 'AAAC8kuyFPuQBAPN2v5oQmnfiornyup7NjInQ8xb3f4CPzBhZCJtP7idHOj51nS8SbkcxYdXYDJYJglZBjJlS5lszZA5vZCFuhVr3ZCWMo5A2Lf0m80mZB5', 'Community', '279189552122784', 1),
(112, 'Never take life seriously. Nobody gets out alive anyway.', 'AAAC8kuyFPuQBAAE8oxcQ6bdSmpeFp2fAUWg2joGHNQmgdZA6rMG8Rw2lyqWAd1r2Wrob5v3oY6Up7WJ1tIz85y5BcHSL27LDloGPZBqFzwLtdcZAySB', 'Community', '225403950849536', 1),
(113, 'Time is a great teacher, but unfortunately it kills all its pupils.', 'AAAC8kuyFPuQBAL8USoQsapeOQOrNYMS8H8YuYz7mwZAoKuTAAiF8m4ZAEDVVJn0bcL4zUVNZBlfU1dOoCvGsbbdEgyg4qpdolG78TmD4kMI5gykGzhf', 'Community', '260824963957149', 1),
(114, 'Tiago Andre', 'AAAC8kuyFPuQBAKUVqfohFLKDXYRkPxvMNi7cVHlZAVIGYUXrND2kOP6WUrsAAkIXAo75muGUYXRcixdKJHQUdIXWXqWuQyfJvvEO9ZBCvleNBl4ZAe2', 'Personal website', '210648715648834', 1),
(115, 'The Wall of Bytes', 'AAAC8kuyFPuQBAHfPYVKawZBZBkCPZBVC9YfotrjDaOS1UB50jFrwltdf89guH1tBisZCd7dsZAXtk4uYlD8d8KDvkZBIZC8rLB8LSCU25aalMTAetxcOXez', 'Community', '366614946713889', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participacoes`
--

CREATE TABLE IF NOT EXISTS `participacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` text NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `localidade` text NOT NULL,
  `data_nascimento` text NOT NULL,
  `resposta` text NOT NULL,
  `data_participacao` text NOT NULL,
  `ip` text NOT NULL,
  `votos` text NOT NULL,
  `vencedor` tinyint(1) NOT NULL,
  `publico` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_passatempo` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `participacoes`
--

INSERT INTO `participacoes` (`id`, `perfil`, `nome`, `email`, `localidade`, `data_nascimento`, `resposta`, `data_participacao`, `ip`, `votos`, `vencedor`, `publico`, `id_user`, `id_passatempo`, `telefone`) VALUES
(10, '1233434', 'Tiago', 'geral.t8bit@gmail.com', 'Lisbon', '18.10.87', 'resposta_6', 'hoje', '127.0.0.1', '2', 0, 0, 13534536, 27, 0),
(11, '1233434', 'Tiago', 'geral.t8bit@gmail.com', 'Lisbon', '18.10.87', 'resposta_4', 'hoje', '127.0.0.1', '0', 0, 0, 13534536, 27, 0),
(12, '', '', '', '', '', 'resposta_2', '1354010231', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(13, '', '', '', '', '', 'resposta_1', '1354010408', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(14, '', '', '', '', '', 'asdasd', '1354010414', '127.0.0.1', '0', 0, 0, 0, 30, 0),
(15, '', '', '', '', '', 'Respuesta_3', '1354021059', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(16, '', '', '', '', '', 'asdasdasd', '1354021069', '127.0.0.1', '0', 0, 0, 0, 30, 0),
(17, '', '', '', '', '', 'Respuesta_3', '1354021080', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(18, '', '', '', '', '', 'Respuesta_5', '1354021187', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(19, '', '', '', '', '', 'Respuesta_3', '1354021207', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(20, '', '', '', '', '', 'Respuesta_5', '1354021975', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(21, '', '', '', '', '', 'asdasd', '1354022004', '127.0.0.1', '0', 0, 0, 0, 30, 0),
(22, '', '', '', '', '', 'Respuesta_4', '1354022076', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(23, '', '', '', '', '', 'Respuesta_3', '1354022143', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(24, '', '', '', '', '', 'Respuesta_3', '1354022194', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(25, '', '', '', '', '', 'Respuesta_4', '1354022250', '127.0.0.1', '0', 0, 0, 0, 29, 0),
(26, 'http://www.facebook.com/frittellaia', 'Sara Pozzetti', 'sara@pozzetti.com', '', '07/05/1979', 'Respuesta_1', '1354027595', '82.154.41.51', '0', 0, 0, 577224407, 29, 0),
(27, 'http://www.facebook.com/tiago.andre.12', 'Tiago AndrÃ©', 'tiago.ada@hotmail.com', 'Lisbon, Portugal', '10/18/1987', '', '1354113531', '82.154.41.51', '0', 0, 0, 2147483647, 0, 0),
(28, 'http://www.facebook.com/tiago.andre.12', 'Tiago AndrÃ©', 'tiago.ada@hotmail.com', 'Lisbon, Portugal', '10/18/1987', '', '1354114757', '82.154.41.51', '0', 0, 0, 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `passatempos`
--

CREATE TABLE IF NOT EXISTS `passatempos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `titulo` text NOT NULL,
  `resumo` text NOT NULL,
  `data_inicial` text NOT NULL,
  `data_final` text NOT NULL,
  `param1` text NOT NULL,
  `param2` int(11) NOT NULL,
  `param3` int(11) NOT NULL,
  `param4` int(11) NOT NULL,
  `mec` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `tipo` text NOT NULL,
  `desafio` text NOT NULL,
  `minimo` text NOT NULL,
  `max_participacoes` text NOT NULL,
  `regulamento` text NOT NULL,
  `agradecimentos` text NOT NULL,
  `vencedores` text NOT NULL,
  `inicio` text NOT NULL,
  `mostrar_imagem` tinyint(1) NOT NULL,
  `imagem` text NOT NULL,
  `participacoes` text NOT NULL,
  `estado` text NOT NULL,
  `link` text NOT NULL,
  `accoes` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `r1` text NOT NULL,
  `r2` text NOT NULL,
  `r3` text NOT NULL,
  `r4` text NOT NULL,
  `r5` text NOT NULL,
  `r6` text NOT NULL,
  `viral` tinyint(1) NOT NULL,
  `fraseViral` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `passatempos`
--

INSERT INTO `passatempos` (`id`, `activo`, `titulo`, `resumo`, `data_inicial`, `data_final`, `param1`, `param2`, `param3`, `param4`, `mec`, `descricao`, `tipo`, `desafio`, `minimo`, `max_participacoes`, `regulamento`, `agradecimentos`, `vencedores`, `inicio`, `mostrar_imagem`, `imagem`, `participacoes`, `estado`, `link`, `accoes`, `username`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `viral`, `fraseViral`) VALUES
(27, 1, 'Titulo do passatempo', '<p>Resumo do passatempo</p>', '1353933360', '1354019760', '', 0, 1, 0, '1voto1', '<p>Descri&ccedil;&atilde;o do passatempo</p>', 'multiplas', '<p>Questao do passatempo?</p>', '0', '10', '<p>Regulamento do passatempo</p>', '<p>Agradecimento do passatempo</p>', '<p>Estes sao os vencedores</p>', '1354019820', 1, 'galeria/Screenshot from 2012-11-25 11:53:22.png', '0', 'Em curso', '0', '0', '1', 'resposta 1', 'resposta 2', 'resposta 3', 'resposta 4', 'resposta 5', 'resposta 6', 0, 'Frase viral'),
(28, 1, 'Passatempo', '<p>REsumo</p>', '0', '691200', '1', 1, 1, 1, 'nr_fixo', '<p>Descri&ccedil;ao</p>', 'texto', '<p>Desafio</p>', '0', '10', '<p>REgulamento</p>', '<p>Agradecimento</p>', '<p>Vencedores</p>', '0', 1, 'galeria/Screenshot from 2012-11-25 11:53:22.png', '0', 'terminado', '0', '0', '1', '', '', '', '', '', '', 0, 'Frasve viral'),
(29, 1, 'Ejemplo de tÃ­tulo (multiplas)', '<p>Ejemplo de res&uacute;menes</p>', '1354009620', '1354268820', '', 0, 0, 1, '1voto1dia', '<p>Ejemplo descripti&oacute;n</p>', 'multiplas', '<p>Ejemplo de desaf&iacute;o</p>', '0', '0', '<p>Ejemplo de regulacion</p>', '<p><span style="color: #222222; font-family: arial, sans-serif; font-size: 13px;">Frase adicional</span></p>', '<p>Exemplo de vencedores</p>', '1354268940', 1, 'galeria/Logo7UP_128x128.jpg', '2', 'Em curso', '0', '0', '3', 'Respuesta 1', 'Respuesta 2', 'Respuesta 3', 'Respuesta 4', 'Respuesta 5', 'Respuesta 6', 0, 'Frase viral'),
(30, 1, 'Ejemplo de tÃ­tulo (texto)', '<p>Ejemplo de res&uacute;menes</p>', '1354009800', '1354269000', '', 0, 0, 0, '1voto1', '<p>Ejemplo descripti&oacute;n</p>', 'texto', '<p>Ejemplo de desaf&iacute;o</p>', '0', '0', '<p>Ejemplo de regulacion</p>', '<p><span style="color: #222222; font-family: arial, sans-serif; font-size: 13px;">Frase adicional</span></p>', '<p>Exemplo de vencedores</p>', '1354269060', 1, 'galeria/Logo7UP_128x128.jpg', '0', 'Em curso', '0', '0', '3', '', '', '', '', '', '', 0, ''),
(31, 1, 'Ejemplo de tÃ­tulo (terminado)', '<p>Ejemplo de res&uacute;menes</p>', '1351763640', '1351850100', '1', 0, 0, 0, '1voto1', '<p>Exemplo de descri&ccedil;&atilde;o</p>', 'texto', '<p>Exempo de desafio</p>', '0', '0', '<p>Exemplo de regulamento</p>', '<p>Exemplo de agradecimento</p>', '<p>Lista de ganadores</p>', '0', 1, 'galeria/Logo7UP_128x128.jpg', '0', 'terminado', '0', '0', '3', '', '', '', '', '', '', 0, 'frase viral'),
(32, 0, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '0', 'Inactivo', '0', '0', '', '', '', '', '', '', '', 0, ''),
(33, 1, 'passatempus antigo', '&lt;p&gt;asdsad&lt;/p&gt;', '0', '0', '', 0, 0, 0, 'select', '&lt;p&gt;asdsad&lt;/p&gt;', 'texto', '&lt;p&gt;asdsad&lt;/p&gt;', '', '', '&lt;p&gt;asdsad&lt;/p&gt;', '&lt;p&gt;asdasd&lt;/p&gt;', '&lt;p&gt;asdsadasd&lt;/p&gt;', '0', 0, 'asdasd', '0', 'terminado', '0', '0', '1', '', '', '', '', '', '', 0, 'asdsadas'),
(34, 0, 'passatempusnovo', '&lt;p&gt;resumo&lt;/p&gt;', '0', '0', '1', 1, 1, 1, '1voto1dia', '&lt;p&gt;teste&lt;/p&gt;', 'texto', '&lt;p&gt;teste&lt;/p&gt;', '0', '0', '&lt;p&gt;regulamento&lt;/p&gt;', '&lt;p&gt;agradecimento&lt;/p&gt;', '&lt;p&gt;vencedores&lt;/p&gt;', '0', 0, '', '0', 'Inactivo', '0', '0', '1', '', '', '', '', '', '', 1, 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `postagens`
--

CREATE TABLE IF NOT EXISTS `postagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `link` text NOT NULL,
  `idU` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) DEFAULT NULL,
  `oauth_uid` varchar(200) DEFAULT NULL,
  `oauth_provider` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `twitter_oauth_token` varchar(200) DEFAULT NULL,
  `twitter_oauth_token_secret` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `email`, `oauth_uid`, `oauth_provider`, `username`, `twitter_oauth_token`, `twitter_oauth_token_secret`) VALUES
(1, 'tiago.ada@hotmail.com', '100001164151821', 'facebook', 'Tiago AndrÃ©', NULL, NULL),
(2, 'sara@pozzetti.com', '577224407', 'facebook', 'Sara Pozzetti', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `oauth_secret` text NOT NULL,
  `oauth_id` text NOT NULL,
  `link` text NOT NULL,
  `service` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `name`, `oauth_secret`, `oauth_id`, `link`, `service`, `user`) VALUES
(11, 'firstRealWidget', '4471aff241fcfb8e21d9ae55d7721338', '455015417887978', '/tabs/firstRealWidget', 'passatempo', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
