-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2017 a las 09:53:31
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbfonabosque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `dep_nombre`, `dep_estado`, `created_at`, `updated_at`) VALUES
(1, 'La Paz', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, 'Oruro', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, 'Cochabamba', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(4, 'Tarija', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(5, 'Santa Cruz', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(6, 'Potosi', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(7, 'Chuquisaca', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(8, 'Beni', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(9, 'Pando', 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades`
--

CREATE TABLE `entidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `ent_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ent_sigla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ent_estado` tinyint(1) NOT NULL DEFAULT '1',
  `ent_obs` text COLLATE utf8_unicode_ci NOT NULL,
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entidades`
--

INSERT INTO `entidades` (`id`, `ent_nombre`, `ent_sigla`, `ent_estado`, `ent_obs`, `user_registra`, `user_actualiza`, `created_at`, `updated_at`) VALUES
(1, 'Gobierno Autonomo Municipal de El Alto', 'GAMEA', 1, '-', 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, 'Gobierno Autonomo Municipal de La Paz', 'GAMLP', 1, '-', 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, 'Gobierno Autónomo Municipal de Achocalla', 'GAMA', 1, '-', 1, 1, '2017-09-10 23:00:13', '2017-09-10 23:00:13'),
(4, 'Gobierno Autónomo Municipal de Viacha', 'GAMV', 1, '-', 1, 1, '2017-09-10 23:55:58', '2017-09-11 00:28:03'),
(5, 'Gobierno Autónomo Municipal de Toro', 'GAMT', 1, '-', 1, 1, '2017-09-10 23:57:47', '2017-09-11 00:04:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_unidades`
--

CREATE TABLE `entidad_unidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `entidad_id` int(10) UNSIGNED NOT NULL,
  `uni_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `uni_estado` tinyint(1) NOT NULL DEFAULT '1',
  `uni_obs` text COLLATE utf8_unicode_ci NOT NULL,
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entidad_unidades`
--

INSERT INTO `entidad_unidades` (`id`, `entidad_id`, `uni_nombre`, `uni_estado`, `uni_obs`, `user_registra`, `user_actualiza`, `created_at`, `updated_at`) VALUES
(1, 1, 'Direccion de Recaudaciones y Politicas Tributarias', 1, '-', 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, 2, 'Saneamiento Pluvial', 1, '-', 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, 2, 'otra unidad 2', 1, '-', 1, 1, '2017-09-01 04:00:00', '2017-09-01 04:00:00'),
(4, 2, 'otro unidad 33', 1, '-', 1, 1, '2017-09-01 04:00:00', '2017-09-01 04:00:00'),
(5, 3, 'Socio ambiental', 1, '-', 1, 1, '2017-09-10 23:00:45', '2017-09-10 23:03:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `legales`
--

CREATE TABLE `legales` (
  `id` int(10) UNSIGNED NOT NULL,
  `proy_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legal_entidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legal_fmonto` decimal(18,2) NOT NULL,
  `legal_cmonto` decimal(18,2) NOT NULL,
  `legal_tmonto` decimal(18,2) NOT NULL,
  `legal_archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legal_estado` tinyint(1) NOT NULL DEFAULT '1',
  `solicitud_id` int(10) UNSIGNED NOT NULL,
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_08_29_031532_create_entidades_table', 1),
('2017_08_29_031644_create_entidad_unidades_table', 1),
('2017_08_29_031807_create_departamentos_table', 1),
('2017_08_29_031831_create_provincias_table', 1),
('2017_08_29_031910_create_municipios_table', 1),
('2017_08_29_040951_create_proyectos_aevaluar_table', 1),
('2017_09_21_121237_create_legales_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `mun_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mun_estado` tinyint(1) NOT NULL DEFAULT '1',
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `provincia_id`, `mun_nombre`, `mun_estado`, `user_registra`, `user_actualiza`, `created_at`, `updated_at`) VALUES
(1, 1, 'El Alto - Rio SEco', 1, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, 2, 'Sacaba', 1, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, 1, 'municipio11', 1, 1, 1, '2017-09-09 04:00:00', '2017-09-11 00:43:43'),
(4, 1, 'municipio22', 1, 1, 1, '2017-09-09 04:00:00', '2017-09-10 23:04:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `prov_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `prov_estado` tinyint(1) NOT NULL DEFAULT '1',
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `departamento_id`, `prov_nombre`, `prov_estado`, `user_registra`, `user_actualiza`, `created_at`, `updated_at`) VALUES
(1, 1, 'Murillo - El Alto', 1, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, 3, 'Sacaba', 1, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, 1, 'Caranavi', 1, 1, 1, '2017-09-01 04:00:00', '2017-09-01 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_aevaluar`
--

CREATE TABLE `proyectos_aevaluar` (
  `id` int(10) UNSIGNED NOT NULL,
  `proy_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proy_tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proy_nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `proy_hr` text COLLATE utf8_unicode_ci NOT NULL,
  `entidad_id` int(10) UNSIGNED NOT NULL,
  `unidad_id` int(10) UNSIGNED NOT NULL,
  `proy_sigla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `municipio_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proy_responsable` int(10) UNSIGNED NOT NULL,
  `proy_monto` decimal(18,2) NOT NULL,
  `proy_tiempo` int(11) NOT NULL,
  `proy_obs` text COLLATE utf8_unicode_ci NOT NULL,
  `proy_archivo` text COLLATE utf8_unicode_ci NOT NULL,
  `proy_estado` tinyint(1) NOT NULL DEFAULT '1',
  `user_registra` int(10) UNSIGNED NOT NULL,
  `user_actualiza` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos_aevaluar`
--

INSERT INTO `proyectos_aevaluar` (`id`, `proy_codigo`, `proy_tipo`, `proy_nombre`, `proy_hr`, `entidad_id`, `unidad_id`, `proy_sigla`, `departamento_id`, `provincia_id`, `municipio_id`, `proy_responsable`, `proy_monto`, `proy_tiempo`, `proy_obs`, `proy_archivo`, `proy_estado`, `user_registra`, `user_actualiza`, `created_at`, `updated_at`) VALUES
(1, '-', '', '', 'E/2017-0056', 1, 1, 'GAMEA', 1, 1, '1', 1, '100000.00', 2, '-', '', 1, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(2, '-', '', '', 'E/2017-00465', 2, 2, 'GAMLP', 3, 2, '2', 1, '50000.00', 1, '-', 'Descargar', 0, 1, 1, '2017-08-30 04:00:00', '2017-08-30 04:00:00'),
(3, '', '', '', 'E/2017-0079', 1, 1, 'GAMEA', 1, 1, '1', 1, '20000.50', 3, '', '', 1, 1, 1, '2017-09-04 07:54:26', '2017-09-04 07:54:26'),
(4, '', '', '', 'E/2017-00976', 2, 3, 'GAMLP', 3, 2, '2', 1, '7888.88', 2, '', '', 1, 1, 1, '2017-09-04 08:33:34', '2017-09-04 08:33:34'),
(5, '', '', '', 'E/2017-00471', 2, 4, 'GAMLP', 1, 1, '1', 1, '43333.56', 2, '', '', 1, 1, 1, '2017-09-04 08:45:28', '2017-09-04 08:45:28'),
(6, '', '', '', 'E/2017-0234', 1, 1, 'GAMEA', 1, 1, '1', 1, '3332.54', 2, '', '', 1, 1, 1, '2017-09-04 08:49:12', '2017-09-04 08:49:12'),
(7, '', '', '', 'E/2017-0986', 2, 3, 'GAMLP', 3, 2, '2', 1, '4234.67', 2, '', '', 1, 1, 1, '2017-09-05 04:17:46', '2017-09-05 04:17:46'),
(8, '', '', '', 'E/2017-04867', 2, 3, 'GAMLP', 1, 1, '1', 1, '45678.89', 2, '', '', 1, 1, 1, '2017-09-05 04:43:35', '2017-09-05 04:43:35'),
(9, '', '', '', 'E/2017-04867', 2, 3, 'GAMLP', 1, 1, '1', 1, '45678.89', 2, '', '', 1, 1, 1, '2017-09-05 04:43:37', '2017-09-05 04:43:37'),
(10, '', '', '', 'E/2017-008574', 2, 4, 'GAMLP', 1, 1, '1', 1, '4567.87', 3, '', '', 1, 1, 1, '2017-09-05 04:46:39', '2017-09-05 04:46:39'),
(11, '', '', '', 'E/2017-57873', 2, 3, 'GAMLP', 1, 1, '1', 1, '58999.98', 3, '', '', 1, 1, 1, '2017-09-05 05:03:32', '2017-09-05 05:03:32'),
(12, '', '', '', 'E/2017-23334', 1, 1, 'GAMEA', 1, 1, '1', 1, '4455454.99', 2, '', '', 1, 1, 1, '2017-09-05 05:05:37', '2017-09-05 05:05:37'),
(13, '', '', '', 'E/2017-0034543', 1, 1, 'GAMEA', 1, 1, '1', 1, '4242.65', 3, '', '', 1, 1, 1, '2017-09-05 05:32:45', '2017-09-05 05:32:45'),
(14, '', '', '', 'E/2017-05678', 2, 3, 'GAMLP', 1, 1, '1', 1, '4567.98', 2, '', '', 1, 1, 1, '2017-09-05 06:08:19', '2017-09-05 06:08:19'),
(15, '', '', '', 'E/2017-05678', 2, 3, 'GAMLP', 1, 1, '1', 1, '4567.98', 2, '', '', 1, 1, 1, '2017-09-05 06:10:01', '2017-09-05 06:10:01'),
(16, '', '', '', 'E/2017-00340', 2, 3, 'GAMLP', 1, 1, '1', 1, '1222334.56', 2, '', '', 1, 1, 1, '2017-09-05 06:37:38', '2017-09-05 06:37:38'),
(17, '', '', '', 'E/2017-0034874', 2, 4, 'GAMLP', 1, 1, '1', 1, '323.56', 3, '', '', 1, 1, 1, '2017-09-05 06:51:17', '2017-09-05 06:51:17'),
(18, '', '', '', 'E/2017-01234', 2, 3, 'GAMLP', 1, 1, '1', 1, '34234.56', 2, '', '', 1, 1, 1, '2017-09-05 08:16:33', '2017-09-05 08:16:33'),
(19, '', '', '', 'E/2017-3244', 2, 3, 'GAMLP', 1, 1, '1', 1, '653234.99', 2, '', '', 1, 1, 1, '2017-09-05 08:27:02', '2017-09-05 08:27:02'),
(20, '', '', '', 'E/2017-99999', 2, 4, 'GAMLP', 1, 1, '1', 1, '999999.99', 3, '', 'storage/proyectoaevaluar/201795-14951.pdf', 1, 1, 1, '2017-09-05 18:09:51', '2017-09-05 18:09:51'),
(21, '', '', '', 'E/2017-4983749', 1, 1, 'GAMEA', 1, 1, '1', 1, '31231.89', 3, '', 'storage/proyectoaevaluar/201795-1675.pdf', 1, 1, 1, '2017-09-05 20:07:05', '2017-09-05 20:07:05'),
(23, '', '', '', 'E/2017-075849', 1, 1, 'GAMEA', 1, 1, '0', 1, '432.33', 3, '', '', 1, 1, 1, '2017-09-10 02:12:43', '2017-09-10 02:12:43'),
(24, '', '', '', 'E/2017-0678i', 1, 1, 'GAMEA', 1, 1, '', 1, '3432.43', 2, '', '', 1, 1, 1, '2017-09-10 02:21:03', '2017-09-10 02:21:03'),
(25, '', '', '', 'E/2017-0034kj', 1, 1, 'GAMEA', 1, 1, '3, 4', 1, '1234.45', 3, '', '', 1, 1, 1, '2017-09-10 07:25:49', '2017-09-10 07:25:49'),
(26, '', '', '', 'E/2017-0034ssa', 2, 3, 'GAMLP', 1, 1, '1, 3 mi Cantidad de Arrays: 2', 1, '432.22', 4, '', '', 1, 1, 1, '2017-09-10 07:33:51', '2017-09-10 07:33:51'),
(27, '', '', '', 'E/2017-0034nnb', 1, 1, 'GAMEA', 1, 1, 'El Alto - Rio SEco, municipio1, municipio2, ', 1, '7888.99', 6, '', '', 1, 1, 1, '2017-09-10 07:39:24', '2017-09-10 07:39:24'),
(28, '', '', '', 'E/2017-0034oiii', 1, 1, 'GAMEA', 1, 1, 'municipio2, ', 1, '98899.09', 3, '', 'storage/proyectoaevaluar/2017910-34454.pdf', 1, 1, 1, '2017-09-10 07:44:55', '2017-09-10 07:44:55'),
(29, '', '', '', 'E.TT/64-3535', 1, 1, 'GAMEA', 1, 1, 'municipio1, ', 1, '9990.09', 4, '', 'storage/proyectoaevaluar/2017910-35757.pdf', 1, 1, 1, '2017-09-10 07:57:57', '2017-09-10 07:57:57'),
(30, '', '', '', 'E/2017-0034mnm', 1, 1, 'GAMEA', 1, 1, 'El Alto - Rio SEco, ', 1, '9000.00', 4, '', 'storage/proyectoaevaluar/2017910-4122.pdf', 1, 1, 1, '2017-09-10 08:01:22', '2017-09-10 08:01:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `us_carnet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_expedido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_paterno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_materno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_nacimiento` date NOT NULL,
  `us_genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_telefono` int(11) NOT NULL,
  `us_celular` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_profesion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_tipo` int(11) NOT NULL,
  `us_cuenta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_estado` tinyint(1) NOT NULL DEFAULT '1',
  `us_obs` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `us_carnet`, `us_expedido`, `us_nombre`, `us_paterno`, `us_materno`, `us_nacimiento`, `us_genero`, `us_telefono`, `us_celular`, `email`, `us_profesion`, `us_cargo`, `us_foto`, `us_tipo`, `us_cuenta`, `password`, `us_estado`, `us_obs`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123', 'LP', 'Juan Carlos', 'Acho', 'Ayala', '2017-08-10', 'Masculino', 2313131, 75361311, 'admin@admin.mail.com', 'Administrador', 'Admin', 'storage/usuarios/20170710-12720.png', 0, 'juan.acho', '$2y$10$otNra5t605Wk.ZTlLRKKTeP4DCzvRs2eHxe3puIb3CG09GFwGzwZ6', 1, 'ninguna', 'dZajDi7GROwQwIL0PAzRL4mXEBuUJwiyMLlYn76512rgSuIJfSfWtgW2HVrZ', '2017-08-30 04:00:00', '2017-09-10 08:04:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entidades_ent_nombre_unique` (`ent_nombre`),
  ADD KEY `entidades_user_registra_foreign` (`user_registra`),
  ADD KEY `entidades_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `entidad_unidades`
--
ALTER TABLE `entidad_unidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entidad_unidades_uni_nombre_unique` (`uni_nombre`),
  ADD KEY `entidad_unidades_entidad_id_foreign` (`entidad_id`),
  ADD KEY `entidad_unidades_user_registra_foreign` (`user_registra`),
  ADD KEY `entidad_unidades_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `legales`
--
ALTER TABLE `legales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `legales_solicitud_id_foreign` (`solicitud_id`),
  ADD KEY `legales_user_registra_foreign` (`user_registra`),
  ADD KEY `legales_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `municipios_mun_nombre_unique` (`mun_nombre`),
  ADD KEY `municipios_provincia_id_foreign` (`provincia_id`),
  ADD KEY `municipios_user_registra_foreign` (`user_registra`),
  ADD KEY `municipios_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provincias_prov_nombre_unique` (`prov_nombre`),
  ADD KEY `provincias_departamento_id_foreign` (`departamento_id`),
  ADD KEY `provincias_user_registra_foreign` (`user_registra`),
  ADD KEY `provincias_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `proyectos_aevaluar`
--
ALTER TABLE `proyectos_aevaluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectos_aevaluar_entidad_id_foreign` (`entidad_id`),
  ADD KEY `proyectos_aevaluar_unidad_id_foreign` (`unidad_id`),
  ADD KEY `proyectos_aevaluar_departamento_id_foreign` (`departamento_id`),
  ADD KEY `proyectos_aevaluar_provincia_id_foreign` (`provincia_id`),
  ADD KEY `proyectos_aevaluar_municipio_id_foreign` (`municipio_id`),
  ADD KEY `proyectos_aevaluar_proy_responsable_foreign` (`proy_responsable`),
  ADD KEY `proyectos_aevaluar_user_registra_foreign` (`user_registra`),
  ADD KEY `proyectos_aevaluar_user_actualiza_foreign` (`user_actualiza`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_us_carnet_unique` (`us_carnet`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_us_cuenta_unique` (`us_cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `entidad_unidades`
--
ALTER TABLE `entidad_unidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `legales`
--
ALTER TABLE `legales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proyectos_aevaluar`
--
ALTER TABLE `proyectos_aevaluar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD CONSTRAINT `entidades_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `entidades_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `entidad_unidades`
--
ALTER TABLE `entidad_unidades`
  ADD CONSTRAINT `entidad_unidades_entidad_id_foreign` FOREIGN KEY (`entidad_id`) REFERENCES `entidades` (`id`),
  ADD CONSTRAINT `entidad_unidades_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `entidad_unidades_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `legales`
--
ALTER TABLE `legales`
  ADD CONSTRAINT `legales_solicitud_id_foreign` FOREIGN KEY (`solicitud_id`) REFERENCES `proyectos_aevaluar` (`id`),
  ADD CONSTRAINT `legales_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `legales_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`),
  ADD CONSTRAINT `municipios_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `municipios_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `provincias_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `provincias_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `proyectos_aevaluar`
--
ALTER TABLE `proyectos_aevaluar`
  ADD CONSTRAINT `proyectos_aevaluar_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_entidad_id_foreign` FOREIGN KEY (`entidad_id`) REFERENCES `entidades` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_proy_responsable_foreign` FOREIGN KEY (`proy_responsable`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_unidad_id_foreign` FOREIGN KEY (`unidad_id`) REFERENCES `entidad_unidades` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_user_actualiza_foreign` FOREIGN KEY (`user_actualiza`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `proyectos_aevaluar_user_registra_foreign` FOREIGN KEY (`user_registra`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
