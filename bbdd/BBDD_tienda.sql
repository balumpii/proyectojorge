-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-04-2018 a las 08:44:55
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_puertas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fotografia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fotografia`) VALUES
(1, 'GAMA A/S', ''),
(2, 'GAMA O.B.', ''),
(3, 'GAMA M.C.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mas_info`
--

DROP TABLE IF EXISTS `mas_info`;
CREATE TABLE IF NOT EXISTS `mas_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `asunto` varchar(255) DEFAULT NULL,
  `observaciones` text,
  `fkidproducto` int(11) DEFAULT NULL,
  `Longitud` float DEFAULT NULL,
  `Latitud` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkidproducto_idx` (`fkidproducto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mas_info`
--

INSERT INTO `mas_info` (`id`, `nombre`, `email`, `telefono`, `asunto`, `observaciones`, `fkidproducto`, `Longitud`, `Latitud`) VALUES
(1, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'hola amigos', 18, -4.43365, 36.7158),
(2, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'quiero puerta', 17, -4.43365, 36.7158),
(3, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'hola amigo', NULL, NULL, NULL),
(4, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'holaaa', 'yejheee', NULL, NULL, NULL),
(5, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'hola amigo', NULL, NULL, NULL),
(6, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'hola amigo', NULL, NULL, NULL),
(7, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'hola amigo', NULL, NULL, NULL),
(8, 'jorge ', 'jorge_mrl@hotmail.com', '670382255', 'hola', 'holaaa', 14, -4.43365, 36.7158);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` float DEFAULT '0',
  `descripcion` text NOT NULL,
  `fotografia` varchar(255) DEFAULT NULL,
  `fkidcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkidcategoria_idx` (`fkidcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `fotografia`, `fkidcategoria`) VALUES
(13, 'Puerta de alta seguridad mod. 603 A/S', 550, 'Puerta de seguridad CLASE 3 segun la norma UNE-EN 1627:2011 de resistencia a la efraccion certificada por AENOR y que cuenta con aislante termico y acustico de serie para satisfacer nuestras necesidades de seguridad y confort', 'sapellyA-S.jpg', 1),
(14, 'Puerta de alta seguridad mod. 200', 900, 'Detalles de putos de anclajes y posterior revestimiento de los mismos mediante perfiles de maderas nobles fijados a estructura interior de acero de alta resistencia para gama O.B.\r\n\r\nTres bisagras de acero latonado con pivotes antipalanca alojados en propia bisagra.\r\n\r\nCerradura de alta seguridad a dos golpes de llave con tres puntos de cierre al frente provisto de sistema antirretroceso del mecanismo.\r\n\r\nJunta de estanqueidad en todo el bastidor.\r\n\r\nCerradero antipalanca en pletina de acero latonado de 35x3 mm., todo fijado a bastidor y hoja de acero mediante sistema de tornillos autoperforantes.', 'modelo220.jpg', 2),
(15, 'Puerta de alta seguridad mod. Provence M.C.', 699, 'Detalles de puntos de aclajes y posterior revestimiento de los mismos, mediantes perfiles de maderas nobles fijados a estructura interior de acero de alta resistencia para Gama M.C.\r\n\r\nCuatro bisagras de acero latonado con pivotes antipalanca alojados en propia bisagra.\r\n\r\nCerradura de alta seguridad a dos golpes de llave con tres puntos de cierre al frente provista de sistema antirretroceso del mecanismo.\r\n\r\nJunta de estanqueidad en todo el perimetro del bastidor.\r\n\r\nCerradero antipalanca en pletina de acero latonado de 35x3 mm., todo fijado a bastidor y hoja de acero mediante sistema de tornillos autoperforantes.', 'provenceMC.jpg', 3),
(16, 'Puerta de alta seguridad mod. rayas a 2 lados', 700, 'Puerta de seguridad con hoja tipo acorazada, diseñada y configurada para instalar sobre premarco de madera, que a su vez permite adosarle en los laterales unos perfiles de acero de 1,5mm. de grosor configurados en forma de L (se sirven dichos perfiles bajo demanada del cliente) que convierten la puerta serie CM en una puerta acorazada en su totalidad.', 'rayas2LaDoss.jpg', 3),
(17, 'Puerta acorazada A/S con aluminio exterior', 850, 'Detalles de puntos de anclajes para modelo 2004 A/S.\r\n\r\n-Cuatro bisagras de acero latonado con pivotes antipalanca alojados en propia bisagra.\r\n\r\n-Cuatro pivotes antipalanca de acero latonado en redondo de 22mm., alojados en lateral de bisagras.\r\n\r\n-Cerradura de alta seguridad a cuatro golpes de llave con sistema antirretroceso del mecanismo.\r\n\r\n-Cerradero antipalanca en pletina de acero latonado de 35x3 mm., todo fijado a bastidor y hoja de acero mediante sistema de tornillos autoperforantes.', 'modelo200.jpg', 1),
(18, 'Puerta acorazada rustica gama A/S  exteriores', 980, 'La puerta acorazada Segurycal con dinteles laterales y altos, se fabrica con caracteristicas similares a las puertas acorazadas normales, tanto en la configuracion de la hoja como de su bastidor, siempre en acero y con panelados en maderas nobles, (ver detalles de configuracion de estructura interior de acero y revestimiento exteriores.\r\nEs  por este motivo, que nuestra puerta acorazada con fijos laterales y altos, no tenga deformaciones, como alabeos o descuelgue de la hoja.', '1rusticaA-S.jpg', 1),
(19, 'Estructura interior acero serie C M', 0, '1- Estructura Metalica de la Hoja\r\n\r\nPaquete de 67 mm de grueso formado por bandeja + 5 omegas de 1mm soldadas con mecanismo en su interior con doble refuerzo exterior con Porlenanico Todomasa.\r\n\r\n2- Descripcion Cantos de la Hoja\r\n\r\nPerfil en Acero Inoxidable\r\n\r\n3- Descripcion Decoracion Exterior\r\n\r\nINT: Panel liso/decorado de MDF/Aglom. recubierto en madera.\r\nEXT: Panel liso/decorado en Aluminio tratado.\r\n\r\n4- Descripcion Decoracion Interior\r\n\r\nPanel liso/decorado de MDF/Aglom. recubierto en madera.\r\n\r\n5- Estructura Metalica del Bastidor\r\n\r\nPerfil de Acero Inoxidable de 1.5mm de grosor.', 'estructuraInte.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '0',
  `ultimo_acceso` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `activo`, `ultimo_acceso`, `password`) VALUES
(5, 'Maria', 'maria@empresa.com', 1, NULL, 'maria'),
(6, 'Juan', 'javierbueno@hotmail.com', 1, '123459'),
(7, 'jorge', 'jorge_mrl@hotmail.com', 1, NULL, '123456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fkidcategoria` FOREIGN KEY (`fkidcategoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
