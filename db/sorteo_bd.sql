-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Versión del servidor: 10.3.27-MariaDB-cll-lve
-- Versión de PHP: 7.3.6
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Base de datos: `sorteo_aliados`
--
-- CREATE DATABASE sorteo_aliados;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
    `id` int(10) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `fullname` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 0;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
INSERT INTO `usuarios` (`username`, `password`, `fullname`)
VALUES (
        'admin',
        '80252793ec9cbc5184da984e746cd9f1',
        'Camilo Cruz'
    ),
    (
        'fabio',
        '30e85d97b746669e6f400019a5d7f9be',
        'Fabio Muñoz Gaviria'
    );
-- --------------------------------------------------------
DROP TABLE IF EXISTS `asesores`;
CREATE TABLE `asesores` (
    `id` int(10) NOT NULL,
    `fullname` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 0;
COMMIT;
INSERT INTO `asesores` (`fullname`)
VALUES ('Diana Gasca'),
    ('Jhon Fredy Rincon'),
    ('Fabio Muñoz'),
    ('Jackeline Urrego'),
    ('Angie Vasquez'),
    ('Carlos Rodriguez'),
    ('John Quintero'),
    ('Omar Barrera'),
    ('Marian Galvis'),
    ('Lorena Balanta'),
    ('Cindy Burbano'),
    ('Yennifer Zea'),
    ('Yamileth Hoyos'),
    ('Dahiana Mamian');
-- --------------------------------------------------------
DROP TABLE IF EXISTS `hoteles`;
CREATE TABLE `hoteles` (
    `id` int(10) NOT NULL,
    `fullname` varchar(70) NOT NULL,
    `destacado` boolean NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 0;
COMMIT;

INSERT INTO `hoteles` (`fullname`, `destacado`)
VALUES ('Sandos Hotels & Resorts', 0),
('Palace Resorts', 0),
('Princess Hotels and Resorts', 1);
-- --------------------------------------------------------
DROP TABLE IF EXISTS `participantes`;
CREATE TABLE `participantes` (
    `cedula` varchar(30) NOT NULL,
    `fullname` varchar(70) NOT NULL,
    `email` varchar(70) NOT NULL,
    `telefono` varchar(70) NOT NULL,
    `agencia` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
ADD PRIMARY KEY (`cedula`);

-- --------------------------------------------------------
DROP TABLE IF EXISTS `participaciones`;
CREATE TABLE `participaciones` (
    `id` int(10) NOT NULL,
    `cedula` varchar(30) NOT NULL,
    `id_hotel` int(10) NOT NULL,
    `id_asesor` int(10) NOT NULL,
    `fecha` date NOT NULL,
    `reserva` varchar(100) NOT NULL,
    `boleta` int(10) NOT NULL,
    `url_liquidacion` varchar(500) NOT NULL,
    `estado` varchar(70) NOT NULL,
    FOREIGN KEY (cedula) REFERENCES participantes(cedula),
    FOREIGN KEY (id_hotel) REFERENCES hoteles(id),
    FOREIGN KEY (id_asesor) REFERENCES asesores(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Indices de la tabla `participaciones`
--
ALTER TABLE `participaciones`
ADD PRIMARY KEY (`id`);
ALTER TABLE `participaciones`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 0;
COMMIT;