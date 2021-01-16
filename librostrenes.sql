-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 13:32:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librostrenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `apellido`) VALUES
(2, 'Pablo', 'López'),
(3, 'Juanjo', 'Olaizola'),
(4, 'Miguel Angel', 'Moreno'),
(5, 'Josep', 'Calvera'),
(6, 'H.', 'Lartilleux'),
(7, 'Patxi', 'Arzamentdi'),
(8, 'Jorge', 'Arranz'),
(9, 'Carmelo', 'Zaita'),
(10, 'Carles', 'Salmerón'),
(11, 'Publicación', 'Empresarial'),
(12, 'André', 'Papazian'),
(13, 'Pilar', 'Lozano'),
(14, 'Victor', 'Del Reguero'),
(15, 'Justo', 'Arenillas'),
(16, 'David', 'Ross'),
(17, 'Antoni', 'Nebot i Biosca'),
(18, 'Juan Pedro', 'Esteve Garcia'),
(19, 'Pedro', 'Quintana'),
(20, 'Pedro', 'Pintado'),
(21, 'Miguel', 'Cano'),
(22, 'Julio A.', 'Garcia Mendoza'),
(23, 'Juan Carlos', 'Casas'),
(24, 'Juan ', 'Roselló Iglesias'),
(25, 'Miquel ', 'Palou'),
(26, 'Manuel', 'Álvarez Fernández'),
(27, 'Josep Miquel', 'Sole'),
(28, 'Jaume', 'Roca'),
(29, 'Antonio', 'Ruiz Gutierrez'),
(30, 'Pere', 'Baliarda'),
(31, 'Christian ', 'Wolmar'),
(32, 'Jose Miguel', 'Delgado'),
(33, 'Juan J.', 'Ramos Vicente'),
(34, 'Pedro', 'Fernández Barbadillo'),
(35, 'Jesús A.', 'Courel'),
(36, 'Henry', 'Brown'),
(37, 'Gonzalo', 'Garcival'),
(38, 'Julio Alberto', 'Cendón'),
(39, 'Mark', 'Ovenden'),
(40, 'Paul', 'Spencer'),
(41, 'Mario', 'León'),
(42, 'Jeremy', 'Wiseman'),
(43, 'John', 'Organ'),
(44, 'Juan José', 'Martinena'),
(45, 'Juan', 'Aguilar'),
(46, 'Alfonso', 'Marco'),
(47, 'Mª Olga', 'Macías'),
(48, 'José Miguel', 'Llano'),
(49, 'Varios', 'Autores'),
(50, 'Adrián', 'Baquero'),
(51, 'George', 'Woods'),
(52, 'Michael H.C.', 'Backer'),
(53, 'Andreas', 'Rossel'),
(54, 'Miguel ', 'Fernández'),
(55, 'Clemens', 'Niedenthal'),
(56, 'Michael ', 'Dörflinger'),
(57, 'Udo', 'Kandler'),
(58, 'Heiko', 'Focken'),
(59, 'Ronald', 'Göhl'),
(60, 'Josef', 'Brandt'),
(61, 'Markus', 'Hehl'),
(62, 'Bernhard ', 'Hager'),
(63, 'Michael', 'Dostal'),
(64, 'Uwe', 'Miethe'),
(65, 'Martin', 'Weltner'),
(66, 'Jan ', 'Reiners'),
(67, 'Erich', 'Preuß'),
(68, 'Alfred B.', 'Gottwaldt'),
(69, 'Udo', 'Paulitz'),
(70, 'Tobias', 'Döpfner'),
(71, 'Dieter', 'Eikhoff'),
(72, 'Markus', 'Tiedke'),
(73, 'Georg', 'Kerber'),
(74, 'Axel', 'Reuther'),
(75, 'Thomas', 'Riegler'),
(76, 'Hans', 'Stange'),
(77, 'Olaf', 'Hamelau'),
(78, 'Yves', 'Defort'),
(79, 'Andrew', 'Fowler'),
(80, 'Stefan', 'Friesenegger'),
(81, 'Martin', 'Menke'),
(82, 'Ralph', 'Bernet'),
(83, 'Klaus-Jürgen', 'Vetter'),
(84, 'Peter', 'Schricker'),
(85, 'Martin', 'Pabst'),
(86, 'Thomas', 'Meyer-Eppler'),
(87, 'Robert', 'Pritchard'),
(88, 'Robert', 'Schwandl'),
(89, 'Christoph', 'Groneck'),
(90, 'Korbinian', 'Fleischer'),
(91, 'Brian', 'Solomon'),
(92, 'Hans-Erhard', 'Henningsen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL,
  `nom_editorial` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nom_editorial`) VALUES
(1, 'Editorial La Librería'),
(2, 'Proyectos Editoriales, SL'),
(3, 'Editorial Dossoles'),
(4, 'Bodegas Muga, SL'),
(5, 'Reserva Anticipada Ediciones'),
(6, 'Govierno Vasco'),
(7, 'El Patito Editorial'),
(8, 'AAFB'),
(9, 'Terminus'),
(10, 'Eusko Trenbideak'),
(11, 'Reditar Libros'),
(12, 'Oberon'),
(13, 'Pielago del Moro Ediciones'),
(14, 'Vía Libre'),
(15, 'Edimat Libros, SA'),
(16, 'Pages editors'),
(17, 'Lluis Prieto Editor (Monografías del Ferrocarril)'),
(18, 'Patentes Talgo'),
(19, 'Museo del Ferrocarril III Generaciones'),
(20, 'Revistas Profesionales, SL'),
(21, 'MAF Editor'),
(22, 'Nederlandstalige editie'),
(23, 'Consorcio de Transportes de Madrid'),
(24, 'Diputación Foral de Bizkaia'),
(25, 'Instituto de Estudios Riojanos'),
(26, 'Amantesdementes'),
(27, 'BBK - Bilbao Bizkaia Kutxa'),
(28, 'Exmo. Ayuntamiento de Ponferrada'),
(29, 'Ultramar Editores, SL'),
(30, 'Almuzara'),
(31, 'Ministerio de Fomento'),
(32, 'Gestión Ferroviaria, SL'),
(33, 'Abomey Maquetren, SL'),
(34, 'Penguin Group'),
(35, 'Industrial Railway Society'),
(36, 'Babel 2000'),
(37, 'Nordica Libros, SL'),
(38, 'Ediciones Trea, SL'),
(39, 'Middlenton Press'),
(40, 'Ayuntamiento de Pamplona'),
(41, 'Edicións do Cumio'),
(42, 'Doce Robles'),
(43, 'Museo Marítimo Ría de Bilbao'),
(44, 'Ayuntamiento de Vitoria-Gasteiz'),
(45, 'Bilbao Ria 2000'),
(46, 'Servilibro'),
(47, 'Tren Online'),
(48, 'Prames'),
(49, 'MFTrain'),
(50, 'Amberley Publishing'),
(51, 'Past & Present Publishing Ltd'),
(52, 'EK-Verlag GmbH'),
(53, 'ScottyScout'),
(54, 'Lappan'),
(55, 'Jovis Verlag GmbH'),
(56, 'Bassermann'),
(57, 'Heel Verlag GmbH'),
(58, 'GeraMond Verlag GmbH'),
(59, 'Weltbild Verlag'),
(60, 'VBN Verlag'),
(61, 'Transpress Verlag'),
(62, 'Verkehrsmuseum Dresden'),
(63, 'Moewig'),
(64, 'Libros Cúpula'),
(65, 'Sutton Verlag GmbH'),
(66, 'Franckh\'sche Verlagshandlung Stuttgart'),
(67, 'STIB (Société Transports Intercommunaux de Bruxelles'),
(68, 'Schmidt Buch'),
(69, 'Editions Memogrames'),
(70, 'Crimson Publishing'),
(71, 'Berforts Press'),
(72, 'Robert Schwandl Verlag'),
(73, 'John Beaufoy Publishing'),
(74, 'Thomas Cook'),
(75, '180º Publishers'),
(76, 'Art-Books & Magazines Verlag'),
(77, 'Fundación de los Ferrocarriles Españoles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `nom_idioma` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `nom_idioma`) VALUES
(1, 'Español'),
(2, 'Alemán'),
(3, 'Inglés'),
(4, 'Euskera'),
(5, 'Neerlandés'),
(6, 'Catalan'),
(7, 'Gallego'),
(8, 'Alemán/Inglés'),
(9, 'Castellano/Euskera'),
(10, 'Castellano/Inglés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_paginas` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `isbn` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anno` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tamano` int(11) DEFAULT NULL,
  `id_autor` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `num_paginas`, `isbn`, `anno`, `ruta`, `tipo`, `tamano`, `id_autor`, `id_pais`, `id_tema`, `id_idioma`, `id_editorial`) VALUES
(1, '90 Años De Metro De Madrid', '96', '978-84-9873-089-0', '2010', 'fotos_subidas/90madrid.jpg', 'image/jpeg', 10392, 2, 1, 8, 1, 1),
(2, 'El Topo, 1912-2012', '232', '978-84-940739-0-1', '2012', 'fotos_subidas/eltopo.jpg', 'image/jpeg', 10265, 3, 1, 7, 1, 2),
(3, 'Santander-Mediterraneo. El ferrocarril que perdió ', '285', '978-84-96606-83-8', '2011', 'fotos_subidas/santandermedi.jpg', 'image/jpeg', 9480, 4, 1, 7, 1, 3),
(4, 'La Rioja y su Ferrocarril', '144', '978-84-617-2276-1', '2014', 'fotos_subidas/rioja.jpg', 'image/jpeg', 7338, 5, 1, 10, 1, 4),
(5, 'Geografía de los Ferrocarriles Españoles', '109', '978-4894493-33-0', '2010', 'fotos_subidas/geoferro.jpg', 'image/jpeg', 5573, 6, 1, 10, 1, 5),
(6, 'Bizkaia Trenbideak / Ferrocarriles', '170', '84-457-2080-5', '2004', 'fotos_subidas/bizkaia.jpg', 'image/jpeg', 10991, 7, 1, 10, 9, 6),
(7, 'Galicia en Tren', '90', '978-84-939434-4-8', '2012', 'fotos_subidas/galicia.jpg', 'image/jpeg', 11428, 8, 1, 10, 1, 7),
(8, 'Ferrocarril de Tudela a Bilbao', '169', '978-84-616-5772-8', '2013', 'fotos_subidas/tudelabilbao.jpg', 'image/jpeg', 9740, 9, 1, 7, 1, 8),
(9, 'Tranvias de España', '103', '978-84-613-6614-9', '2009', 'fotos_subidas/tranviasesp.jpg', 'image/jpeg', 10096, 10, 1, 2, 1, 9),
(10, 'Mariano de Corral (Fabrica de coche y vagones)', '215', '978-84-940736-7-0', '2015', 'fotos_subidas/mariano.jpg', 'image/jpeg', 8521, 3, 1, 6, 1, 2),
(11, 'Bilbao y Modernidad: El Nuevo Tranvía', '98', '978-84-920629-5-9', '2012', 'fotos_subidas/bilbotran.jpg', 'image/jpeg', 169572, 11, 1, 2, 9, 10),
(12, '100 Trenes de Leyenda', '144', '84-96449-27-0', '2006', 'fotos_subidas/trenesleyenda.jpg', 'image/jpeg', 10849, 12, 1, 1, 1, 11),
(13, 'El Libro del Tren', '192', '84-96052-84-2', '2004', 'fotos_subidas/librotren.jpg', 'image/jpeg', 10663, 13, 1, 10, 1, 12),
(14, 'Cien Años del Ferrocarril Ponferrada-Villablino', '245', '978-84-938710-9-3', '2019', 'fotos_subidas/ponferradavilla.jpg', 'image/jpeg', 5886, 14, 1, 7, 1, 13),
(15, 'La Tracción en los Ferrocarriles Españoles', '352', '978-84-505414-8-9', '2009', 'fotos_subidas/traccion.jpg', 'image/jpeg', 10540, 15, 1, 4, 1, 14),
(16, 'La Enciclopeida de Trenes y Locomotoras', '544', '84-9764-729-7', '2003', 'fotos_subidas/trenesylocos.jpg', 'image/jpeg', 9530, 16, 3, 4, 1, 15),
(17, 'Trens i Estacions de Catalunya', '205', '978-84-9975-841-1', '2017', 'fotos_subidas/trens.jpg', 'image/jpeg', 10789, 17, 1, 10, 6, 16),
(18, 'El Ferrocarril Directo de Burgos y sus Accesos a M', '272', '84-921005-9-1', '1999', 'fotos_subidas/directoburgos.jpg', 'image/jpeg', 9581, 18, 1, 7, 1, 17),
(19, 'El Ferrocarril Valladolid-Ariza', '223', '84-930930-2-8', '2001', 'fotos_subidas/valadolid.jpg', 'image/jpeg', 8120, 20, 1, 7, 1, 17),
(20, 'El Ferrocarril en la Ciudad de Valladolid (1858-20', '270', '978-84-944844-4-5', '2018', 'fotos_subidas/valladolid2.jpg', 'image/jpeg', 13713, 20, 1, 7, 1, 17),
(21, 'Talgo 1942-2005', '253', '84-93134-49-X', '205', 'fotos_subidas/talgo.jpg', 'image/jpeg', 10256, 21, 1, 13, 1, 18),
(22, '150 Años de Ferrocarril en Miranda de Ebro 1862-20', '207', '978-84-615-9795-6', '2012', 'fotos_subidas/miranda.jpg', 'image/jpeg', 15589, 22, 1, 10, 1, 19),
(23, 'Tren Español Rápido', '111', '84-94943-07-1', '2001', 'fotos_subidas/ter.jpg', 'image/jpeg', 9595, 23, 1, 1, 1, 5),
(24, 'Las 2000 y 3000 Talgo', '143', '84-95492-30-6', '2005', 'fotos_subidas/2000talgo.jpg', 'image/jpeg', 9886, 24, 1, 4, 1, 5),
(25, 'Automotores Diesel (Ancho Ibérico Español)', '224', '978-84-932861-5-6', '2009', 'fotos_subidas/automotores.jpg', 'image/jpeg', 12203, 5, 1, 1, 1, 20),
(26, 'Los Ferrocarriles de Bilbao a Portugalete y de Triano', '96', '84-86758-29-7', '2004', 'fotos_subidas/bilbaotriano.jpg', 'image/jpeg', 10098, 25, 1, 7, 1, 21),
(27, 'Renfe 5 / Parque Motor 1998', '63', '84-86757-23-8', '1998', 'fotos_subidas/parquemotor.jpg', 'image/jpeg', 14593, 26, 1, 1, 1, 21),
(28, 'Locomotoras 20 - Las 7800 de la ayuda americana', '64', '978-84-86758-35-6', '2008', 'fotos_subidas/7800.jpg', 'image/jpeg', 24704, 26, 1, 4, 1, 21),
(29, 'La Tracción Diesel: Renfe 340', '48', ' 978-8495493149', '2002', 'fotos_subidas/renfe340.jpg', 'image/jpeg', 59445, 27, 1, 4, 1, 5),
(30, 'La Tracción Diesel: Renfe 333', '47', '978-84-95493-08-8', '2001', 'fotos_subidas/renfe333.jpg', 'image/jpeg', 16721, 28, 1, 4, 1, 5),
(31, 'La Tracción Diesel: Renfe 319.2-3-4', '48', '84-94293-19-5', '2003', 'fotos_subidas/renfe319.jpg', 'image/jpeg', 18887, 29, 1, 4, 1, 5),
(32, 'La Tracción Eléctrica: Renfe 279-289', '48', '84-95493-16-0', '2002', 'fotos_subidas/renfe279.jpg', 'image/jpeg', 11353, 27, 1, 4, 1, 5),
(33, 'La Tracción Eléctrica: Renfe 269', '72', '84-94493--17-9', '2003', 'fotos_subidas/renfe269.jpg', 'image/jpeg', 15755, 27, 1, 4, 1, 5),
(34, 'La Tracción Eléctrica: Renfe 250', '48', '84-95493-25-X', '2004', 'fotos_subidas/renfe250.jpg', 'image/jpeg', 9417, 27, 1, 4, 1, 5),
(35, 'La Tracción Eléctrica: Renfe 251-269.6', '56', '84-95493-18-7', '2003', 'fotos_subidas/renfe251.jpg', 'image/jpeg', 12120, 27, 1, 4, 1, 5),
(36, 'La Tracción Eléctrica: Renfe 252', '56', '84-95493-27-6', '2004', 'fotos_subidas/renfe252.jpg', 'image/jpeg', 11640, 27, 1, 4, 1, 5),
(37, 'Locomotoras 16 - ALSTHOM 276', '110', '84-86758-27-0', '2002', 'fotos_subidas/alsthom276.jpg', 'image/jpeg', 8514, 30, 1, 4, 1, 21),
(38, 'De gouden eeuw van de Europese Spoorwegen', '256', '978-90-5947-442-0', '2013', 'fotos_subidas/nederland.jpg', 'image/jpeg', 12736, 31, 3, 10, 5, 22),
(39, 'Destino Madrid. Del Tranvía al metro ligero, 150 años de his', '85', '978-84-86803-65-0', '2010', 'fotos_subidas/madrid.jpg', 'image/jpeg', 13866, 11, 1, 2, 1, 23),
(40, 'El Tranvia Eléctrico de Bilbao a Durango y Arratia', '109', 'n/d', '2014', 'fotos_subidas/tranviaelec.jpg', 'image/jpeg', 9622, 11, 1, 2, 9, 24),
(41, 'Ferrocarril en La Rioja', '324', '84-95747-18-9', '2002', 'fotos_subidas/rioja2.jpg', 'image/jpeg', 7130, 32, 1, 10, 1, 25),
(42, 'El Ferrocarril de Talavera de la Reiena a Villanueva de la S', '167', '978-84-614-5647-5', '2010', 'fotos_subidas/talavera.jpg', 'image/jpeg', 10066, 33, 1, 7, 1, 26),
(43, 'Bilbao, 7 Calles, 7 Estaciones - Atxuri Muso Del Ferrocarril', '79', '978-84-120924-6-2', '2019', 'fotos_subidas/atxuri.jpg', 'image/jpeg', 11225, 9, 1, 3, 1, 8),
(44, 'El Ferrocarril de La Robla', '73', '84-8056108-4', '1994', 'fotos_subidas/larobla.jpg', 'image/jpeg', 9369, 34, 1, 7, 1, 27),
(45, 'Museo del Ferrocarril - Ponferrada', '129', '84-88745-28-1', '2005', 'fotos_subidas/ponferradamuseo.jpg', 'image/jpeg', 8559, 35, 1, 3, 1, 28),
(46, 'Locomotoras de Vapor', '126', '84-7386-945-1', '1999', 'fotos_subidas/locovapor.jpg', 'image/jpeg', 10756, 36, 1, 4, 1, 29),
(47, 'Eso No Estaba en mi Libro de Historia del Ferrocarril', '288', ' 978-8417558024', '2018', 'fotos_subidas/historiaferro.jpg', 'image/jpeg', 11921, 37, 1, 14, 1, 30),
(48, 'Estaciones de Ferrocarril en España       (Revista Mº Fomento nº 553)', '200', 'ISSN 1577-4589', '2006', 'fotos_subidas/fomento.jpg', 'image/jpeg', 6062, 11, 1, 3, 1, 31),
(49, 'Trenes Históricos y Turísticos en España (Revista Mº Fomento nº 619)', '90', '978-84-8320-X-61-9', '2012', 'fotos_subidas/nodisponible.jpg', 'image/jpeg', 2595, 11, 1, 1, 1, 31),
(50, 'Las 250 Estaciones Españolas de Ancho Ibérico más importante', '300', '978-84-09-11586-0', '209', 'fotos_subidas/las250.jpg', 'image/jpeg', 12382, 5, 1, 3, 1, 32),
(51, 'Historia Gráfica del Ferrocarril en Euskadi', '256', '978-84-940736-4-9', '2014', 'fotos_subidas/histgrafica.jpg', 'image/jpeg', 12178, 3, 1, 10, 9, 2),
(52, 'De León a Gijón en 342 Imágenes', '255', '978-84-945365-9-5', '2017', 'fotos_subidas/deleon.jpg', 'image/jpeg', 10871, 38, 1, 7, 1, 33),
(53, 'Great Railway Maps of the World', '138', '978-1-84614-391-5', '2011', 'fotos_subidas/maps.jpg', 'image/jpeg', 15311, 39, 3, 3, 3, 34),
(54, 'Industrial Railways and Locomotives of Spain', '520', '978-1-901556-96-4', '2018', 'fotos_subidas/railwaysSpain.jpg', 'image/jpeg', 26780, 40, 3, 4, 3, 35),
(55, 'Diccionario de Tecnología Ferroviaria', '701', '84-7978-696-5', '2005', 'fotos_subidas/diccionario.jpg', 'image/jpeg', 7293, 41, 1, 12, 1, 36),
(56, 'Atlas de Metros del Mundo', '186', '978-84-16830-06-0', '2016', 'fotos_subidas/metrosMundo.jpg', 'image/jpeg', 379392, 39, 3, 8, 1, 37),
(57, 'Trenes y Tranvias en el Norte de España', '262', '978-84-9704-57-1', '2011', 'fotos_subidas/trenesytranvias.jpg', 'image/jpeg', 9417, 42, 1, 10, 10, 38),
(58, 'Northern Spain Narrow Gauge (Irún to El Ferrol)', '96', '978-1-9006008-83-3', '2010', 'fotos_subidas/northernSpain.jpg', 'image/jpeg', 34581, 43, 3, 7, 3, 39),
(59, 'Eastern Spain Narrow Gauge (From Girona to Málaga)', '95', '978-1906008-56-7', '2009', 'fotos_subidas/esternSpain.jpg', 'image/jpeg', 38491, 43, 3, 7, 3, 39),
(60, 'Central & Southern Spain Narrow Gauge (Castile to Huelva)', '96', '978-1906008-91-8', '2011', 'fotos_subidas/centralSpaiin.jpg', 'image/jpeg', 36720, 43, 3, 7, 3, 39),
(61, 'El Ferrocarril del Plazaola', '158', ' 978-8495930-69-9', '2014', 'fotos_subidas/plazaola.jpg', 'image/jpeg', 28115, 44, 1, 7, 1, 40),
(62, 'El Nudo Ferroviario de Miranda de Ebro', '200', '978-84-95874-70-2', '2011', 'fotos_subidas/miranda2.jpg', 'image/jpeg', 6797, 22, 1, 3, 1, 19),
(63, 'O Ferrocarril Ourense-Vigo', '239', '84-6289-364-5', '2006', 'fotos_subidas/ourensevigo.jpg', 'image/jpeg', 12596, 45, 1, 7, 7, 41),
(64, 'El Ferrocarril en Madrid', '208', '978-84-96470-50-7', '2011', 'fotos_subidas/ferroMadrid.jpg', 'image/jpeg', 17132, 18, 1, 10, 1, 1),
(65, 'El Canfranc - Historia de un tren de leyenda', '280', '978-84-94755-83-5', '2017', 'fotos_subidas/canfranc.jpg', 'image/jpeg', 52215, 46, 1, 10, 1, 42),
(66, 'Estructuras ferroviarias y desarrollo portuario de la Ría de Bilbao', '325', '978-84-697-7318-5', '2017', 'fotos_subidas/riaBilbao.jpg', 'image/jpeg', 207146, 47, 1, 3, 1, 43),
(67, 'Renfe: Los Años 70 - El final de una etapa', '112', '978-84-95493-34-9', '2011', 'fotos_subidas/años70.jpg', 'image/jpeg', 66066, 27, 1, 10, 1, 5),
(68, 'El Ferrocarril (Vitoria-Gasteiz)', '43', '978-84-96845-42-8', '2011', 'fotos_subidas/vitoria.png', 'image/png', 4282, 11, 1, 10, 9, 44),
(69, 'Basurto Rekalde - crónica de una integración urbana', '225', '978-84-61617-93-7', '2012', 'fotos_subidas/basurto.jpg', 'image/jpeg', 7395, 48, 1, 3, 1, 45),
(70, '1001 Trenes', '200', '978-84-79718-07-7', '2011', 'fotos_subidas/1001trenes.jpg', 'image/jpeg', 39502, 49, 1, 1, 1, 46),
(71, 'Herederos de Ramón Múgica - Fáb. de vagones San Sebastián-irún', '224', '978-84-948391-3-9', '2018', 'fotos_subidas/herederos.jpg', 'image/jpeg', 72110, 3, 1, 6, 1, 33),
(72, 'Tren Online Especial - Agenda Ferroviaria 2019', '108', 'n/d', '2018', 'fotos_subidas/agenda.jpg', 'image/jpeg', 285199, 49, 1, 12, 1, 47),
(73, 'El Canfranero', '48', '978-84-8321-905-8', '209', 'fotos_subidas/canfranero.jpg', 'image/jpeg', 10016, 50, 1, 7, 1, 48),
(74, 'The Club MFTrain 2019 (Catálogo)', 'n/d', 'n/d', '2020', 'fotos_subidas/mftrain.jpg', 'image/jpeg', 274307, 49, 1, 6, 1, 49),
(75, 'Iberian Railways', '96', '978-1-4456-8443-7', '2019', 'fotos_subidas/iberian.jpg', 'image/jpeg', 11845, 51, 3, 10, 3, 50),
(76, 'Ireland\\\'s Railways Past and Present - Dublin', '128', '978-1-85895-250-6', '2005', 'fotos_subidas/ireland.jpg', 'image/jpeg', 10510, 52, 5, 10, 3, 51),
(77, 'Die Eisenbahn in der Rhein-Neckar-Region', '96', '978-3-88255-372-7', '2008', 'fotos_subidas/rheinNeckar.jpg', 'image/jpeg', 15731, 53, 2, 7, 2, 52),
(78, 'Orte an der Schwäbischen Eisenbahn', '65', '978-3-944912-18-9', '2018', 'fotos_subidas/schwabischen.jpg', 'image/jpeg', 8624, 49, 2, 14, 2, 53),
(79, 'Der ganz normale Bahnsinn', '48', '978-3-8303-3368-5', '2014', 'fotos_subidas/bahnsinn.jpg', 'image/jpeg', 38431, 54, 2, 14, 2, 54),
(80, 'Bahnhöfe in Deutschland - Stations in Germany', '175', '978-3-939633-47-1', '2008', 'fotos_subidas/bahnhofe (1).jpg', 'image/jpeg', 22748, 55, 2, 3, 8, 55),
(81, 'Deutsche Eisenbahnen', '224', '978-3-8094-2849-7', '2011', 'fotos_subidas/deutscheEisenbahnen.jpg', 'image/jpeg', 15439, 56, 2, 10, 2, 56),
(82, 'Eisenbahn am Mittelrhein - Rhein, Ahr, Lahn und Mosel', '176', '978-3-86852-498-7', '2011', 'fotos_subidas/mittelrhein.jpg', 'image/jpeg', 12827, 57, 2, 7, 2, 57),
(83, 'Eisenbahn von oben', '192', '978-3-95613-015-1', '2015', 'fotos_subidas/vonOben.jpg', 'image/jpeg', 12324, 58, 2, 3, 2, 58),
(84, 'Der Glacier Express / St. Moritz-Zermatt', '144', '978-3-7654-7276-3', '2008', 'fotos_subidas/glacierExpress.jpg', 'image/jpeg', 38609, 59, 2, 7, 2, 58),
(85, 'Die V-160 Familie - Mehrzweckdiesellok der DB', '96', 'n/d', '2007', 'fotos_subidas/v160.jpg', 'image/jpeg', 29934, 60, 2, 4, 2, 59),
(86, 'Baureihe 103 - Die IC-Lokomotive', '96', 'n/d', '2006', 'fotos_subidas/103.jpg', 'image/jpeg', 8534, 61, 2, 4, 2, 59),
(87, 'Hauptbahnhof Frankfurt am Main - 125 Jahre ', '114', '978-3-9417-1232-4', '2014', 'fotos_subidas/frankfurt.jpg', 'image/jpeg', 33850, 62, 2, 3, 2, 60),
(88, 'Stuttgart Hauptbahnhof - Geschichte eines Bahnhofs', '135', '978-3-86245-141-8', '2012', 'fotos_subidas/stuttgart.jpg', 'image/jpeg', 44928, 63, 2, 3, 2, 58),
(89, 'Bildatlas der DDR-Lokomotiven', '135', '978-3-7654-7298-5', '2009', 'fotos_subidas/ddr.jpg', 'image/jpeg', 40245, 64, 2, 4, 2, 58),
(90, '111 Traumstrecken  - Deutschland Schönste Eisenbanhen', '144', ' 978-3-8624-5116-6', '2011', 'fotos_subidas/111.jpg', 'image/jpeg', 43447, 56, 2, 7, 2, 58),
(91, 'Baureihe 112 | 143', '136', '978-3-8624-5171-5', '2013', 'fotos_subidas/112.jpg', 'image/jpeg', 8353, 63, 2, 4, 2, 58),
(92, 'Eisenbahn in Berlin . Metropole des Schienenverkehrs im Wandel', '144', '978-3-8624-5115-9', '2011', 'fotos_subidas/berlin.jpg', 'image/jpeg', 42284, 65, 2, 10, 2, 58),
(93, 'Deutsche Diesellokomotiven im Bild', '128', '978-3--6137-1322-2', '2007', 'fotos_subidas/diesellok.jpg', 'image/jpeg', 5249, 66, 2, 4, 2, 61),
(94, 'Chronik Deutsche Bahn AG - 1994 bis heute', '160', ' 978-3-6137-1470-0', '2013', 'fotos_subidas/chronik.jpg', 'image/jpeg', 27228, 67, 2, 10, 2, 61),
(95, 'Das Berliner U- und S-Bahnnetz', '88', '978-3-613-71340-8', '2007', 'fotos_subidas/ubahnberlin.jpg', 'image/jpeg', 15208, 68, 2, 8, 2, 61),
(96, 'Lokomotiven - Das ultimative Handbuch', '358', '978-3-7654-7279-4', '2009', 'fotos_subidas/lokhandbuch.jpg', 'image/jpeg', 27373, 69, 2, 4, 2, 58),
(97, 'Verkehrsmuseum Dresden', '120', 'n/d', '2002', 'fotos_subidas/dresdenMuseum.jpg', 'image/jpeg', 9605, 49, 2, 3, 2, 62),
(98, 'Der Bahnreiseführer - Deutschland aud der Fahrgastperpektive', '256', '978-3-86803-260-4', '2008', 'fotos_subidas/bahnreise.jpg', 'image/jpeg', 19348, 70, 2, 14, 2, 63),
(99, 'Das große Modellbahn-Werkstattbuch', '400', '978-3-7654-7296-1', '2009', 'fotos_subidas/modellbahn.jpg', 'image/jpeg', 28538, 71, 2, 9, 2, 58),
(100, 'Erste Hilfe Modellbahn', '144', '978-3-7554-7022-6', '2010', 'fotos_subidas/erstehilfe.jpg', 'image/jpeg', 10531, 72, 2, 9, 2, 58),
(101, 'Modelismo Ferroviario 8', '111', '84-480-4622-6', '1995', 'fotos_subidas/mod8.jpg', 'image/jpeg', 9402, 73, 2, 9, 1, 64),
(102, 'Albun der deutschen Straßenbahn-und Stadtbahnfahrzeuge 1948-2005', '128', '978-3-7654-7141-4', '2005', 'fotos_subidas/albumstra.jpg', 'image/jpeg', 30403, 74, 2, 2, 2, 58),
(103, 'Modellbahn Anlagen - Detailliert planen & gestalten', '160', '978-3-8289-0874-1', '2008', 'fotos_subidas/anlagen.jpg', 'image/jpeg', 44992, 75, 2, 9, 2, 59),
(104, 'Museumslokomotiven in Deutschland', '192', '978-3-7654-7179-4', '2001', 'fotos_subidas/museumLok.jpg', 'image/jpeg', 13140, 76, 2, 3, 2, 58),
(105, 'Die Diesellok BR 218 - Unterwegs in Schleswig-Holstein', '127', '978-3-95400-041-8', '2012', 'fotos_subidas/br218.jpg', 'image/jpeg', 31282, 77, 2, 4, 2, 65),
(106, 'Deutsche Kriegslokomotiven', '207', '978-3-440-051960-9', '1983', 'fotos_subidas/kriegloks.jpg', 'image/jpeg', 11304, 68, 2, 4, 2, 66),
(107, 'Art in Brussels begins with the metro', '167', 'n/d', '2012', 'fotos_subidas/nodisponible.jpg', 'image/jpeg', 2595, 11, 4, 14, 3, 67),
(108, 'Mit Volldampf durch den Harz', '79', '978-3-928977-60-9', '2012', 'fotos_subidas/harz.jpg', 'image/jpeg', 47526, 49, 2, 7, 2, 68),
(109, 'The Tramway Museum Brussels - Practical Guide', '48', '978-2-930418-83-4', '2012', 'fotos_subidas/brusselsTram.jpg', 'image/jpeg', 38050, 78, 4, 2, 3, 69),
(110, 'Bahnübergänge deutscher Eisenbahnen', '126', '978-3-613-71481-6', '2014', 'fotos_subidas/bahnuber.jpg', 'image/jpeg', 35737, 67, 2, 11, 2, 61),
(111, 'The Railway Pocket Bible', '172', '978-1-90708-723-1', '2011', 'fotos_subidas/bible.jpg', 'image/jpeg', 7339, 79, 3, 10, 3, 70),
(112, '101 Dinge die ein Eisenbahnliebhaber wissen muss', '192', '978-39561-3028-1', '2016', 'fotos_subidas/101dinge.jpg', 'image/jpeg', 16486, 80, 2, 10, 2, 58),
(113, '101 Dinge die ein Straßenbahnliebhaber wissen muss', '190', '978-39561-3038-0', '2018', 'fotos_subidas/101dinge2.jpg', 'image/jpeg', 7699, 80, 2, 2, 2, 58),
(114, '101 Dinge die ein Modelleisenbahner wissen muss', '192', '978-39561-3064-19', '2019', 'fotos_subidas/101dinge3.jpg', 'image/jpeg', 26341, 81, 2, 9, 2, 58),
(115, 'Die Schweiz mit dem Zug entdecken', '192', '978-38624-5124-1', '2011', 'fotos_subidas/schweiz.jpg', 'image/jpeg', 44781, 82, 2, 7, 2, 58),
(116, 'Welche Lok ist das?', '192', '978-39561-3010-6', '2014', 'fotos_subidas/welche.jpg', 'image/jpeg', 30003, 63, 2, 4, 2, 58),
(117, 'Eisenbahnführer Mallorca', '95', '978-38624-5169-2', '2013', 'fotos_subidas/mallorca.jpg', 'image/jpeg', 42592, 83, 2, 10, 2, 58),
(118, 'Die Eisenbahn - Fahrzeuge Strecken Betrieb', '192', '978-37654-7155-1', '2007', 'fotos_subidas/eisenbahn.jpg', 'image/jpeg', 27832, 84, 2, 10, 2, 58),
(119, 'DB-Wagen - Reisezug- und Güterwagen der Deutschen Bahn', '192', '978-3-7654-7119-3', '2009', 'fotos_subidas/dbwagen.jpg', 'image/jpeg', 31559, 63, 2, 6, 2, 58),
(120, 'S-Bahn- und U-Bahn-Fahrzeuge in Deutschland', '190', '978-37654-7366-1', '2006', 'fotos_subidas/sbahnubahn.jpg', 'image/jpeg', 33620, 85, 2, 1, 2, 58),
(121, 'Signale der deutschen Eisenbahnen', '142', '978-37654-7100-1', '2009', 'fotos_subidas/signalen.jpg', 'image/jpeg', 20822, 56, 2, 11, 2, 58),
(122, 'Die schnellsten Züge der Welt', '192', '978-37654-7079-0', '2007', 'fotos_subidas/schnellsten.jpg', 'image/jpeg', 7898, 86, 2, 1, 2, 58),
(123, 'DB-Fahrzeuge - Lokomotiven und Triebwagen', '192', '978-37654-7117-9', '2007', 'fotos_subidas/dbloks.jpg', 'image/jpeg', 24640, 63, 2, 4, 2, 58),
(124, 'Der große Eisenbahnführer', '352', '978-37654-7016-5', '2009', 'fotos_subidas/grosse.jpg', 'image/jpeg', 8466, 49, 2, 7, 2, 58),
(125, '100 traumhafte Reiseziele für Eisenbahnfans', '192', '978-39561-3236-0', '2017', 'fotos_subidas/fans.jpg', 'image/jpeg', 8111, 56, 2, 10, 2, 58),
(126, '333 X Schienenverkehr - Superlative & Kuriositäten', '288', '978-39561-3076-2', '2019', 'fotos_subidas/333kurios.jpg', 'image/jpeg', 29982, 56, 2, 10, 2, 58),
(127, '77 Museen die ein Eisenbahnliebhaber wissen muss', '192', '978-39561-3068-7', '2018', 'fotos_subidas/77.jpg', 'image/jpeg', 5945, 80, 2, 3, 2, 58),
(128, 'British Railways Pocket Book No. 1 - Locomotives (2014)', '95', '978-1-909-431-05-8', '2013', 'fotos_subidas/pocketbook.jpg', 'image/jpeg', 39106, 87, 3, 4, 3, 71),
(129, 'Stuttgart Stadtbahn Album', '144', '978-39365-731716', '2008', 'fotos_subidas/stuttgart2.jpg', 'image/jpeg', 24163, 88, 2, 8, 2, 72),
(130, 'Metro + Tram Atlas Spanien', '158', '978-393657-3461-6', '2015', 'fotos_subidas/spanien.jpg', 'image/jpeg', 54652, 88, 2, 15, 8, 72),
(131, 'Schnellbahnen in Deutschland  - Metros in Germany', '192', '978-39365-7318-3', '2007', 'fotos_subidas/metrosGermany.jpg', 'image/jpeg', 37277, 88, 2, 8, 8, 72),
(132, 'Metros in Belgien - Metros in Belgium', '144', '978-3-9365-7326-8', '2009', 'fotos_subidas/belgien.jpg', 'image/jpeg', 12959, 89, 2, 15, 8, 72),
(133, 'Rund um die Geislinger Steige', '104', '978-38668-0766-2', '2016', 'fotos_subidas/geislingerSteige.jpg', 'image/jpeg', 9087, 90, 2, 7, 2, 65),
(134, 'The word\\\'s most spectacular Railway Journeys', '208', '978-1-909612-05-1', '2014', 'fotos_subidas/journeys.jpg', 'image/jpeg', 47267, 91, 3, 7, 3, 73),
(135, 'Rail Map Europe', 'n/d', '978-1-84157-677-0', '2007', 'fotos_subidas/mapEurope.jpg', 'image/jpeg', 26204, 49, 3, 3, 10, 74),
(136, 'Die Schönsten Eisenbahnstrecken in Deutschland', 'n/d', 'n/d', '2009', 'fotos_subidas/revista.jpg', 'image/jpeg', 28461, 49, 2, 7, 2, 58),
(137, 'Stories about Brussels revealed by ist Metro Stations', 'n/d', '978-2-93042-728-7', '2013', 'fotos_subidas/brusselsStories.jpg', 'image/jpeg', 36351, 49, 4, 8, 3, 75),
(138, 'Die Angelner Dampfeisenbahn', '80', '978-3-93265-6-5', '2010', 'fotos_subidas/angelner.jpg', 'image/jpeg', 32598, 92, 2, 7, 2, 76),
(139, 'Memorias del Ferrocarril - Imágenes para el recuerdo', 'n/d', '978-84-896649-65-1', '2010', 'fotos_subidas/IMAGENES.jpg', 'image/jpeg', 14947, 49, 1, 10, 1, 77),
(140, 'El Ferrocarril Betanzos-Ferrol. Un siglo de historia 1913-2013', '32', 'n/d', '2013', 'fotos_subidas/betanzos.jpg', 'image/jpeg', 24158, 49, 1, 7, 1, 77);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nom_pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nom_pais`) VALUES
(1, 'España'),
(2, 'Alemania'),
(3, 'Reino Unido'),
(4, 'Bégica'),
(5, 'Irlanda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `nom_tema` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `nom_tema`) VALUES
(1, 'Trenes'),
(2, 'Tranvías'),
(3, 'Infraestructuras'),
(4, 'Locomotoras'),
(5, 'Coches Viajeros'),
(6, 'Vagones'),
(7, 'Lineas'),
(8, 'Metros'),
(9, 'Modelismo'),
(10, 'Ferrocarril'),
(11, 'Señalización'),
(12, 'Varios'),
(13, 'Empresas Ferroviarias'),
(14, 'Narrativa sobre Ferrocarriles'),
(15, 'Metros y Tranvías');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD UNIQUE KEY `UQ_libros` (`titulo`),
  ADD KEY `id_autor` (`id_autor`,`id_pais`,`id_tema`,`id_idioma`,`id_editorial`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_idioma` (`id_idioma`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_4` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id_idioma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_5` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
