-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 14:29:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_pacientes`
--

CREATE TABLE `tabla_pacientes` (
  `FECHA` date DEFAULT NULL,
  `NOMBRE_PACIENTE` varchar(255) DEFAULT NULL,
  `TIPO_DOC` varchar(50) DEFAULT NULL,
  `DOCUMENTO` varchar(50) DEFAULT NULL,
  `DIRECCION_ORIGEN` varchar(255) DEFAULT NULL,
  `TELEFONO1` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `CIUDAD_ORIGEN` varchar(100) DEFAULT NULL,
  `DPTO_DE_ORIGEN` varchar(100) DEFAULT NULL,
  `CIUDAD_DESTINO` varchar(100) DEFAULT NULL,
  `DPTO_DE_DESTINO` varchar(100) DEFAULT NULL,
  `CLINICA_HOSPITAL` varchar(255) DEFAULT NULL,
  `AUTORIZACION` varchar(50) DEFAULT NULL,
  `TOTAL_SERVICIOS_AUTORIZADOS` int(11) DEFAULT NULL,
  `FECHA_AUTORIZACION` date DEFAULT NULL,
  `FECHA_VENCIMIENTO` date DEFAULT NULL,
  `HORA_RECOGIDA` time DEFAULT NULL,
  `HORA_RETORNO` time DEFAULT NULL,
  `CONDUCTOR` varchar(255) DEFAULT NULL,
  `TELEFONO_CONDUCTOR` varchar(20) DEFAULT NULL,
  `OBSERVACION` text DEFAULT NULL,
  `ESTADO` varchar(50) DEFAULT NULL,
  `USUARIO_DEL_SISTEMA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_pacientes`
--

INSERT INTO `tabla_pacientes` (`FECHA`, `NOMBRE_PACIENTE`, `TIPO_DOC`, `DOCUMENTO`, `DIRECCION_ORIGEN`, `TELEFONO1`, `EMAIL`, `CIUDAD_ORIGEN`, `DPTO_DE_ORIGEN`, `CIUDAD_DESTINO`, `DPTO_DE_DESTINO`, `CLINICA_HOSPITAL`, `AUTORIZACION`, `TOTAL_SERVICIOS_AUTORIZADOS`, `FECHA_AUTORIZACION`, `FECHA_VENCIMIENTO`, `HORA_RECOGIDA`, `HORA_RETORNO`, `CONDUCTOR`, `TELEFONO_CONDUCTOR`, `OBSERVACION`, `ESTADO`, `USUARIO_DEL_SISTEMA`) VALUES
('2023-06-01', 'Juan Pérez', 'DNI', '12345678', 'Calle Principal 123', '987654321', 'juan@example.com', 'Lima', 'Lima', 'Arequipa', 'Arequipa', 'Clinica ABC', 'AUT123', 5, '2023-05-28', '2023-06-05', '08:00:00', '18:00:00', 'Carlos', '987654321', 'Ninguna', 'Pendiente', 'admin'),
('2023-06-02', 'María López', 'DNI', '87654321', 'Avenida Central 456', '123456789', 'maria@example.com', 'Trujillo', 'La Libertad', 'Cusco', 'Cusco', 'Hospital XYZ', 'AUT456', 3, '2023-05-30', '2023-06-07', '10:00:00', '15:00:00', 'Pedro', '987123456', 'Alergias alimentarias', 'Aprobado', 'admin'),
('2023-06-03', 'Ana Rodríguez', 'Carnet', '78901234', 'Carrera 7 89', '654987321', 'ana@example.com', 'Bogotá', 'Cundinamarca', 'Medellín', 'Antioquia', 'Clínica DEF', 'AUT789', 2, '2023-06-01', '2023-06-09', '09:30:00', '13:30:00', 'Luis', '123456789', 'Ninguna', 'Pendiente', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contraseña`, `correo_electronico`, `fecha_registro`) VALUES
(1, 'usuario1', '123456', 'usuario1@example.com', '2023-06-13 05:24:35'),
(2, 'usuario2', 'abcdef', 'usuario2@example.com', '2023-06-13 05:24:35'),
(3, 'usuario3', 'qwerty', 'usuario3@example.com', '2023-06-13 05:24:35'),
(4, 'roberto', 'asdf', '', '2023-06-13 06:11:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
