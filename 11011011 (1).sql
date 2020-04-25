-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2018 a las 21:11:29
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `11011011`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `00000010`
--

CREATE TABLE `00000010` (
  `id_comprometidos` int(10) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `comprometidos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `00000010`
--

INSERT INTO `00000010` (`id_comprometidos`, `producto`, `presentacion`, `comprometidos`) VALUES
(74, 'QBD-10', 'Galon', 0),
(75, 'QBD-81', 'Cubeta 20', 0),
(76, 'QBD-09', 'Galon', 0),
(77, 'QBD-26', 'Galon', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1100`
--

CREATE TABLE `1100` (
  `id_compras` int(20) NOT NULL,
  `contacto` text NOT NULL,
  `area` varchar(30) NOT NULL,
  `tel_ext` varchar(20) NOT NULL,
  `tel_ext2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_cliente` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `1100`
--

INSERT INTO `1100` (`id_compras`, `contacto`, `area`, `tel_ext`, `tel_ext2`, `email`, `c_cliente`) VALUES
(2, 'vdfs', 'vfdsx', 'fvdsxa', 'vdcas', 'sdxfcg@ff.comfvdsxa', 1002),
(3, 'Ray Stantz', 'Compras', '5546124/2554', '6654887/5548', 'caza.fantasmas@ext.final', 1020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1111`
--

CREATE TABLE `1111` (
  `id_parametro` int(30) NOT NULL,
  `articulo` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `minimo` int(5) NOT NULL,
  `puntoreorden` int(5) NOT NULL,
  `maximo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `1111`
--

INSERT INTO `1111` (`id_parametro`, `articulo`, `presentacion`, `minimo`, `puntoreorden`, `maximo`) VALUES
(1, 'QBD-09', 'PorrÃ³n concentrado', 2, 3, 4),
(2, 'QBD-10B', 'PorrÃ³n', 1, 1, 2),
(3, 'QBD-10D', 'PorrÃ³n concentrado', 1, 1, 2),
(4, 'QBD-08', 'PorrÃ³n concentrado', 1, 1, 2),
(5, 'QBD-20', 'GalÃ³n', 1, 1, 2),
(6, 'QBD-31', 'PorrÃ³n concentrado', 1, 1, 2),
(7, 'QBD-81', 'GalÃ³n con atomizador', 7, 10, 21),
(8, 'QBD-25', 'GalÃ³n', 2, 3, 5),
(9, 'QBD-25', 'PorrÃ³n concentrado', 2, 3, 5),
(10, 'QBD-10', 'GalÃ³n', 50, 75, 133),
(11, 'Lectro 3000', 'Spray', 2, 3, 12),
(12, 'QBD-10', 'PorrÃ³n', 10, 15, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `10010`
--

CREATE TABLE `10010` (
  `folio` int(30) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `carguese_a` varchar(30) NOT NULL,
  `entregado_a` varchar(100) NOT NULL,
  `concepto_sal` varchar(100) NOT NULL,
  `entrego` varchar(30) NOT NULL,
  `autorizo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `10010`
--

INSERT INTO `10010` (`folio`, `fecha`, `carguese_a`, `entregado_a`, `concepto_sal`, `entrego`, `autorizo`) VALUES
(1, '2018-01-23', '', 'Jesus Castro', 'Regalo', 'Erick Castro', 'Saira Castro'),
(2, '2018-01-26', 'erick', 'luis', 'regalo', 'Erick Castro', 'Saira Castro'),
(3, '2018-01-26', 'erick', 'luis', 'venta', 'Erick Castro', 'Saira Castro'),
(4, '2018-02-26', 'JESUS', 'LUIS', 'VENTA', 'LUIS', 'LAYLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `10011`
--

CREATE TABLE `10011` (
  `id_totales` int(30) NOT NULL,
  `subtotal` decimal(10,3) NOT NULL,
  `IVA` decimal(10,3) NOT NULL,
  `total_final` decimal(10,3) NOT NULL,
  `folio_totales` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `10011t`
--

CREATE TABLE `10011t` (
  `id_totalesT` int(30) NOT NULL,
  `subtotalT` decimal(10,3) NOT NULL,
  `IVAT` decimal(10,3) NOT NULL,
  `total_finalT` decimal(10,3) NOT NULL,
  `folio_totalesT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `111010`
--

CREATE TABLE `111010` (
  `id_ordendecompra` int(30) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `vendedor` varchar(30) NOT NULL,
  `condicion_pago` varchar(30) NOT NULL,
  `facturar` varchar(300) NOT NULL,
  `embarcar` varchar(300) NOT NULL,
  `estimado_entrega` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `folio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `111010t`
--

CREATE TABLE `111010t` (
  `id_ordendecompraT` int(30) NOT NULL,
  `clienteT` varchar(50) NOT NULL,
  `razon_socialT` varchar(50) NOT NULL,
  `vendedorT` varchar(30) NOT NULL,
  `condicion_pagoT` varchar(30) NOT NULL,
  `facturarT` varchar(300) NOT NULL,
  `embarcarT` varchar(300) NOT NULL,
  `estimado_entregaT` varchar(30) NOT NULL,
  `fechaT` varchar(30) NOT NULL,
  `folioT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `11011111`
--

CREATE TABLE `11011111` (
  `id_datof` int(30) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `rfc` varchar(14) NOT NULL,
  `pais` text NOT NULL,
  `CP` int(10) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `n_exterior` varchar(10) NOT NULL,
  `n_interior` varchar(10) NOT NULL,
  `ciudad` text NOT NULL,
  `municipio` text NOT NULL,
  `estado` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `df_cliente` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `11011111`
--

INSERT INTO `11011111` (`id_datof`, `razon_social`, `rfc`, `pais`, `CP`, `colonia`, `calle`, `n_exterior`, `n_interior`, `ciudad`, `municipio`, `estado`, `email`, `df_cliente`) VALUES
(2, 'AlgodonesRS', 'gfd', 'gfds', 68, 'fdsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'asdf@fddf.com', 1002),
(3, 'Cazadores Inc. Mata', 'CAF840304SFRR', 'Mexico', 55468, 'Fcc. Colonial del sur', 'Casa de moneda', '9012', '37', 'Juarez', 'Juarez', 'Chihuahua', 'jesuscastro305@gmail.com', 1020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `110011001`
--

CREATE TABLE `110011001` (
  `id_cuentasporpagar` int(30) NOT NULL,
  `credito` varchar(15) NOT NULL,
  `contacto` text NOT NULL,
  `area` varchar(30) NOT NULL,
  `tel_ext` varchar(20) NOT NULL,
  `tel_ext2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cp_cliente` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `110011001`
--

INSERT INTO `110011001` (`id_cuentasporpagar`, `credito`, `contacto`, `area`, `tel_ext`, `tel_ext2`, `email`, `cp_cliente`) VALUES
(2, '258', 'fvds', 'dcsa', 'vds', 'vfdcsa', 'aszdxfcg@gfd.com', 1002),
(3, '30', 'Peter Venkman', 'Exterminio', '55648845', '4545887', 'caza.fantasmas@ext.final', 1020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `111110010`
--

CREATE TABLE `111110010` (
  `id_prod_sal` int(30) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `ps_folio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1001010000`
--

CREATE TABLE `1001010000` (
  `cliente` int(30) NOT NULL,
  `antiguedad` int(4) NOT NULL,
  `f_registro` varchar(10) NOT NULL,
  `nom_comercial` varchar(50) NOT NULL,
  `giro` varchar(20) NOT NULL,
  `ejecutivo_ventas` text NOT NULL,
  `sucursales` varchar(350) NOT NULL,
  `prod_serv` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `periodo_consumo` varchar(30) NOT NULL,
  `usuario_final` text NOT NULL,
  `area_uso` varchar(30) NOT NULL,
  `observaciones` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `1001010000`
--

INSERT INTO `1001010000` (`cliente`, `antiguedad`, `f_registro`, `nom_comercial`, `giro`, `ejecutivo_ventas`, `sucursales`, `prod_serv`, `presentacion`, `periodo_consumo`, `usuario_final`, `area_uso`, `observaciones`) VALUES
(1002, 2006, '17/10/2017', 'Algodones', 'comercio', 'jesus', 'torres', 'dfghj', 'Galon', 'dfgh', 'dfghj', 'ghj', 'bgfvdsxavfdsa fredqs xvefwqgef d gfe ef efexe fexre wx'),
(1020, 0, '19/10/2017', 'Cazadores de Fantasmas', 'aventura', 'Egon Spengler', 'todo el mundo', 'QBD-10', 'Galon', 'cada hora', 'Los ciudadanos de Juarez', 'En la escena del crimen', 'La empresa se dedica al exterminio de los fantasmas que aterrorizan a la ciudad. nos encargamos principalmente de los monstros mas grandes que los sacerdotes no pueden exterminar.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1110111110010`
--

CREATE TABLE `1110111110010` (
  `id_productossolicitados` int(30) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `articulo` varchar(20) NOT NULL,
  `presentacion` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio_unitario` decimal(10,3) NOT NULL,
  `total` decimal(10,3) NOT NULL,
  `folio_PS` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1110111110010t`
--

CREATE TABLE `1110111110010t` (
  `id_productossolicitadosT` int(30) NOT NULL,
  `cantidadT` int(3) NOT NULL,
  `articuloT` varchar(20) NOT NULL,
  `presentacionT` varchar(20) NOT NULL,
  `descripcionT` varchar(50) NOT NULL,
  `precio_unitarioT` decimal(10,3) NOT NULL,
  `totalT` decimal(10,3) NOT NULL,
  `folio_PST` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caducidad`
--

CREATE TABLE `caducidad` (
  `id` int(30) NOT NULL,
  `lote` int(10) NOT NULL,
  `codbarras` int(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `diasr` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caducidad`
--

INSERT INTO `caducidad` (`id`, `lote`, `codbarras`, `producto`, `presentacion`, `diasr`) VALUES
(3, 0, 0, 'QBD-10', 'Tambo concentrado', 180),
(4, 0, 0, 'QBD-10', 'PorrÃ³n concentrado', 180),
(5, 0, 0, 'QBD-20', 'GalÃ³n', 180),
(6, 0, 0, 'QBD-25', 'GalÃ³n', 180),
(7, 0, 0, 'QBD-25', 'PorrÃ³n concentrado', 180),
(8, 0, 0, 'QBD-81', 'PorrÃ³n concentrado', 180),
(9, 0, 0, 'Envase HDPE', 'PorrÃ³n', 365),
(10, 0, 0, 'QBD-08', 'PorrÃ³n concentrado', 180),
(11, 0, 0, 'QBD-10', 'GalÃ³n concentrado', 180),
(12, 0, 0, 'QBD-10', 'PorrÃ³n Industrial', 180),
(13, 0, 0, 'QBD-26', 'GalÃ³n', 180),
(14, 0, 0, 'QBD-26', 'PorrÃ³n concentrado', 180),
(15, 0, 0, 'QBD-31', 'PorrÃ³n concentrado', 180),
(16, 0, 0, 'QBD-81', 'GalÃ³n con atomizador', 180),
(17, 0, 0, 'Lectro 3000', 'Spray', 180),
(18, 0, 0, 'Envase HDPE', 'Cubeta 4kg', 365),
(19, 0, 0, 'Envase HDPE', 'GalÃ³n', 365),
(20, 0, 0, 'Accesorios ', 'Atomizador - rojo', 365),
(21, 0, 0, 'Accesorios ', 'Tapa - PorrÃ³n', 365),
(22, 0, 0, 'Accesorios ', 'Tapa - GalÃ³n', 365),
(23, 0, 0, 'Accesorios ', 'Tapa - 120 ml', 365),
(24, 0, 0, 'Caja', 'CartÃ³n ', 368),
(26, 0, 0, 'QBD-09', 'GalÃ³n', 180),
(27, 0, 0, 'QBD-10', 'Tambo ', 180),
(28, 0, 0, 'QBD-10', 'PorrÃ³n ', 180),
(29, 0, 0, 'QBD-08', 'PorrÃ³n ', 180),
(30, 0, 0, 'QBD-10', 'GalÃ³n ', 180),
(31, 0, 0, 'QBD-10I', 'PorrÃ³n ', 180),
(32, 0, 0, 'QBD-28', 'PorrÃ³n concentrado', 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `nombre`, `apellidos`, `email`, `usuario`, `contrasena`, `tipo`) VALUES
(5, 'Jesus ', 'Castro ', 'jesuscastro305@gmail.com', 'Jesus@castro', 'prueba123', 'Administrador'),
(11, 'Layla ', 'Velazquez', 'wicked_layla@hotmail.com', 'recepcion@layla', 'quimico', 'Usuario'),
(12, 'Denisse', 'Napoles', 'dnapoles@agademexico.com.mx', 'denisse@napoles', 'eclesiastes', 'Usuario'),
(13, 'Luis Rafael', 'RÃ­o Prado', 'rioluis1@gmail.com', 'lrio@compras', 'celularrosa47', 'Usuario'),
(14, 'carlos', 'Resendiz', 'cresendiz@agademexico.com.mx', 'carlos@resendiz', 'SULTANES2018', 'Usuario'),
(15, 'Alberto', 'Gonzalez', 'pelurin@msn.com', 'alberto@gonzalez', 'admin2018.', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estancado`
--

CREATE TABLE `estancado` (
  `id` int(30) NOT NULL,
  `lote` int(10) NOT NULL,
  `codbarras` int(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `diase` int(3) NOT NULL,
  `idsec` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estancado`
--

INSERT INTO `estancado` (`id`, `lote`, `codbarras`, `producto`, `presentacion`, `diase`, `idsec`) VALUES
(3, 0, 0, 'QBD-10', 'Tambo concentrado', 3, 4),
(4, 0, 0, 'QBD-10', 'PorrÃ³n concentrado', 3, 5),
(5, 0, 0, 'QBD-20', 'GalÃ³n', 3, 6),
(6, 0, 0, 'QBD-25', 'GalÃ³n', 3, 7),
(7, 0, 0, 'QBD-25', 'PorrÃ³n concentrado', 3, 8),
(8, 0, 0, 'QBD-81', 'PorrÃ³n concentrado', 3, 9),
(9, 0, 0, 'Envase HDPE', 'PorrÃ³n', 3, 10),
(10, 0, 0, 'QBD-08', 'PorrÃ³n concentrado', 3, 11),
(11, 0, 0, 'QBD-10', 'PorrÃ³n concentrado', 3, 12),
(12, 0, 0, 'QBD-10', 'GalÃ³n concentrado', 3, 13),
(13, 0, 0, 'QBD-10', 'PorrÃ³n Industrial', 3, 14),
(14, 0, 0, 'QBD-25', 'PorrÃ³n concentrado', 3, 15),
(15, 0, 0, 'QBD-25', 'GalÃ³n', 3, 16),
(16, 0, 0, 'QBD-26', 'GalÃ³n', 3, 17),
(17, 0, 0, 'QBD-26', 'PorrÃ³n concentrado', 3, 18),
(18, 0, 0, 'QBD-31', 'PorrÃ³n concentrado', 3, 19),
(19, 0, 0, 'QBD-81', 'PorrÃ³n concentrado', 3, 20),
(20, 0, 0, 'QBD-81', 'GalÃ³n con atomizador', 3, 21),
(21, 0, 0, 'Lectro 3000', 'Spray', 3, 22),
(22, 0, 0, 'Envase HDPE', 'Cubeta 4kg', 3, 23),
(23, 0, 0, 'Envase HDPE', 'GalÃ³n', 3, 24),
(24, 0, 0, 'Accesorios ', 'Atomizador - rojo', 3, 25),
(25, 0, 0, 'Accesorios ', 'Tapa - PorrÃ³n', 3, 26),
(26, 0, 0, 'Accesorios ', 'Tapa - GalÃ³n', 3, 27),
(27, 0, 0, 'Accesorios ', 'Tapa - 120 ml', 3, 28),
(28, 0, 0, 'Caja', 'CartÃ³n ', 3, 29),
(30, 0, 0, 'QBD-09', 'GalÃ³n', 3, 6),
(31, 0, 0, 'QBD-10', 'Tambo ', 3, 4),
(32, 0, 0, 'QBD-10', 'PorrÃ³n ', 3, 5),
(33, 0, 0, 'QBD-08', 'PorrÃ³n ', 3, 11),
(34, 0, 0, 'QBD-10', 'PorrÃ³n ', 3, 12),
(35, 0, 0, 'QBD-10', 'GalÃ³n ', 3, 13),
(36, 0, 0, 'QBD-10I', 'PorrÃ³n ', 3, 14),
(37, 0, 0, 'QBD-28', 'PorrÃ³n concentrado', 3, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `permiso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `usuario`, `permiso`) VALUES
(10, 'Jesus@castro', 10),
(27, 'Jesus@castro', 1),
(28, 'Jesus@castro', 2),
(29, 'Jesus@castro', 3),
(30, 'Jesus@castro', 4),
(31, 'Jesus@castro', 5),
(32, 'Jesus@castro', 6),
(33, 'Jesus@castro', 7),
(34, 'Jesus@castro', 8),
(35, 'Jesus@castro', 9),
(36, 'Jesus@castro', 10),
(37, 'Jesus@castro', 11),
(38, 'Jesus@castro', 12),
(39, 'Jesus@castro', 13),
(40, 'Jesus@castro', 14),
(41, 'Jesus@castro', 15),
(42, 'Jesus@castro', 16),
(79, 'recepcion@layla', 3),
(80, 'recepcion@layla', 6),
(81, 'recepcion@layla', 7),
(82, 'recepcion@layla', 8),
(83, 'denisse@napoles', 1),
(84, 'denisse@napoles', 2),
(85, 'denisse@napoles', 8),
(86, 'alberto@gonzalez', 1),
(87, 'alberto@gonzalez', 2),
(88, 'alberto@gonzalez', 3),
(89, 'alberto@gonzalez', 6),
(90, 'alberto@gonzalez', 7),
(91, 'alberto@gonzalez', 8),
(92, 'alberto@gonzalez', 14),
(93, 'alberto@gonzalez', 15),
(94, 'carlos@resendiz', 1),
(95, 'carlos@resendiz', 2),
(96, 'carlos@resendiz', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(30) NOT NULL,
  `cod__barras` int(30) NOT NULL,
  `producto` varchar(15) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `medida` varchar(15) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `lote` int(30) NOT NULL,
  `loteext` decimal(10,6) NOT NULL,
  `fechafab` varchar(30) NOT NULL,
  `ubicacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `cod__barras`, `producto`, `presentacion`, `medida`, `descripcion`, `precio`, `cantidad`, `fecha`, `lote`, `loteext`, `fechafab`, `ubicacion`) VALUES
(4, 0, 'QBD-10', 'Tambo ', '200', 'Desengrasante inorgÃ¡nico', '11000', 55, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(5, 0, 'QBD-10', 'PorrÃ³n ', '20', 'Desengrasante inorgÃ¡nico', '1150', 176, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(6, 0, 'QBD-09', 'GalÃ³n', '3.785', 'Desoxidante', '330', 10, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(7, 0, 'QBD-25', 'GalÃ³n', '4', 'Shampoo con cera para auto', '330', 36, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(8, 0, 'QBD-25', 'PorrÃ³n concentrado', '20', 'Shampoo con cera para auto', '1450', 6, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(9, 0, 'QBD-81', 'PorrÃ³n concentrado', '20', 'Gel para manos', '1350', 5, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(10, 0, 'Envase HDPE', 'PorrÃ³n', '20', 'HDPE', '0', 20, '2018-Feb-27', 0, '0.000000', '', 'Bodega'),
(11, 0, 'QBD-08', 'PorrÃ³n ', '20', 'JabÃ³n para manos LIMÃ“N  ', '1600', 2, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(12, 0, 'QBD-10', 'PorrÃ³n ', '20', 'Desengrasante inorgÃ¡nico', '1150', 20, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(13, 0, 'QBD-10', 'GalÃ³n ', '3.785', 'Desengrasante inorgÃ¡nico', '225', 75, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(14, 0, 'QBD-10I', 'PorrÃ³n ', '20', 'Desengrasante inorgÃ¡nico', '640', 3, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(15, 0, 'QBD-25', 'PorrÃ³n concentrado', '20', 'Shampoo con cera para auto', '1450', 5, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(16, 0, 'QBD-25', 'GalÃ³n', '4', 'Shampoo con cera para auto', '330', 3, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(17, 0, 'QBD-26', 'GalÃ³n', '4', 'Brill Plus', '340', 48, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(18, 0, 'QBD-28', 'PorrÃ³n concentrado', '20', 'Abrillantador para motores', '1150', 1, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(19, 0, 'QBD-31', 'PorrÃ³n concentrado', '20', 'Limpia parabrisas', '1150', 1, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(20, 0, 'QBD-81', 'PorrÃ³n concentrado', '20', 'Gel para manos', '1350', 3, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(21, 0, 'QBD-81', 'GalÃ³n con atomizador', '3.785', 'Gel para manos', '381', 14, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(22, 0, 'Lectro 3000', 'Spray', '.454', 'Desengrasante para tablillas electrÃ³nicas', '275', 11, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(23, 0, 'Envase HDPE', 'Cubeta 4kg', '4', 'HDPE', '0', 10, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(24, 0, 'Envase HDPE', 'GalÃ³n', '4', 'HDPE', '0', 42, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(25, 0, 'Accesorios ', 'Atomizador - rojo', '0', 'Complementos ', '0', 21, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(26, 0, 'Accesorios ', 'Tapa - PorrÃ³n', '0', 'Complementos ', '0', 96, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(27, 0, 'Accesorios ', 'Tapa - GalÃ³n', '0', 'Complementos ', '0', 97, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(28, 0, 'Accesorios ', 'Tapa - 120 ml', '0', 'Complementos ', '0', 188, '2018-Feb-27', 0, '0.000000', '', 'AGA'),
(29, 0, 'Caja', 'CartÃ³n ', '4', 'Embarque de productos', '0', 64, '2018-Feb-27', 0, '0.000000', '', 'AGA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regactividades`
--

CREATE TABLE `regactividades` (
  `id` int(30) NOT NULL,
  `actividad` varchar(300) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regactividades`
--

INSERT INTO `regactividades` (`id`, `actividad`, `responsable`, `fecha`, `hora`) VALUES
(323, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-23-2018', '11:08'),
(324, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-23-2018', '11:08'),
(325, 'Se elimino la cuenta de usuario: l@v perteneciente al empleado llamado: layla vz. ', 'Jesus@castro', 'Febrero-23-2018', '11:09'),
(326, 'Se registro un usuario nuevo: recepcion@layla. ', 'Jesus@castro', 'Febrero-23-2018', '11:12'),
(327, 'Se registro un usuario nuevo: denisse@napoles. ', 'Jesus@castro', 'Febrero-23-2018', '11:16'),
(328, 'Se registro un usuario nuevo: lrio@compras. ', 'Jesus@castro', 'Febrero-23-2018', '11:20'),
(329, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-23-2018', '14:25'),
(330, 'Se registro un usuario nuevo: carlos@resendiz. ', 'Jesus@castro', 'Febrero-23-2018', '14:31'),
(331, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-23-2018', '14:32'),
(332, 'Se intento iniciar sesion pero los datos fueron incorrectos. Contrasena ingresada: prueba123. Informacion de PC: DESKTOP-RGRB4R2 -- ::1 ', 'carlos@resendiz', 'Febrero-23-2018', '14:32'),
(333, 'Se intento iniciar sesion pero los datos fueron incorrectos. Contrasena ingresada: prueba123. Informacion de PC: DESKTOP-RGRB4R2 -- ::1 ', 'car', 'Febrero-23-2018', '14:33'),
(334, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'carlos@resendiz', 'Febrero-23-2018', '14:34'),
(335, 'Cerro Sesion.', 'carlos@resendiz', 'Febrero-23-2018', '14:35'),
(336, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-23-2018', '14:35'),
(337, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-23-2018', '14:37'),
(338, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-26-2018', '09:11'),
(339, 'Se agrego un parametro nuevo: el producto QBD-26 con la presentacion de Galon, Minimo:  20, Punto de reorden: 50 y Maximo: 65.', 'Jesus@castro', 'Febrero-26-2018', '09:49'),
(340, 'Se modifico un parametro registrado: el producto QBD-26 con la presentacion de Galon, Minimo:  50, Punto de reorden: 65 y Maximo: 70.', 'Jesus@castro', 'Febrero-26-2018', '09:50'),
(341, 'Se modifico un parametro registrado: el producto QBD-26 con la presentacion de Galon, Minimo:  40, Punto de reorden: 50 y Maximo: 65.', 'Jesus@castro', 'Febrero-26-2018', '09:55'),
(342, 'Se modifico un parametro registrado: el producto QBD-26 con la presentacion de Galon, Minimo:  30, Punto de reorden: 40 y Maximo: 56.', 'Jesus@castro', 'Febrero-26-2018', '09:56'),
(343, 'Se registro una orden de compra para el cliente: Cazadores de Fantasmas con el #FOLIO: 12.', 'Jesus@castro', 'Febrero-26-2018', '11:01'),
(344, 'Se elimino un producto: Accesorios.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(345, 'Se elimino un producto: embace.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(346, 'Se elimino un producto: embace HDP.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(347, 'Se elimino un producto: embace PET.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(348, 'Se elimino un producto: LECTRO 300.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(349, 'Se elimino un producto: QBD-08 (Cereza).', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(350, 'Se elimino un producto: QBD-08 (LimÃ³n).', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(351, 'Se elimino un producto: QBD-09.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(352, 'Se elimino un producto: QBD-10.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(353, 'Se elimino un producto: QBD-20.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(354, 'Se elimino un producto: QBD-25.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(355, 'Se elimino un producto: QBD-26.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(356, 'Se elimino un producto: QBD-31.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(357, 'Se elimino un producto: QBD-81.', 'Jesus@castro', 'Febrero-26-2018', '12:17'),
(358, 'Se registro un nuevo producto, sus caracteristicas son: QBD-10, DES, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-26-2018', '12:30'),
(359, 'Se relaciono el producto QBD-10 con las presentaciones Galon, Porron, Tambo,  ', 'Jesus@castro', 'Febrero-26-2018', '12:31'),
(360, 'Se agrego un articulo nuevo: 10 pz de QBD-10 en la presentacion de Galon con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-26-2018', '12:33'),
(361, 'Se modifico la informacion de un articulo: 5 pz de QBD-10 en la presentacion de Galon con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-26-2018', '12:33'),
(362, 'Se elimino 5 pz de QBD-10 con la presentacion Galon.', 'Jesus@castro', 'Febrero-26-2018', '12:34'),
(363, 'Se agrego un parametro nuevo: el producto QBD-10 con la presentacion de Galon, Minimo:  50, Punto de reorden: 65 y Maximo: 133.', 'Jesus@castro', 'Febrero-26-2018', '12:35'),
(364, 'Se registro una orden de compra para el cliente: Cazadores de Fantasmas con el #FOLIO: 13.', 'Jesus@castro', 'Febrero-26-2018', '12:38'),
(365, 'Se elimino una orden de compra de Ordenes de compra pendientes a nombre de : Cazadores de Fantasmas.', 'Jesus@castro', 'Febrero-26-2018', '12:39'),
(366, 'Se Registro una nota de salida con el folio: 4, para: LUIS, con el concepto de salida: VENTA. entrego: LUIS y autorizo: LAYLA', 'Jesus@castro', 'Febrero-26-2018', '12:41'),
(367, 'Se registro este producto: QBD-10 con la presentacion: Galon en una nota de salida con el folio: 4.', 'Jesus@castro', 'Febrero-26-2018', '12:41'),
(368, 'Se le otorgo al usuario lrio@compras, el permiso para entrar a la seccion -Registrar salida-.', 'Jesus@castro', 'Febrero-26-2018', '12:43'),
(369, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-26-2018', '12:44'),
(370, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-26-2018', '12:45'),
(371, 'Se elimino el registro de un producto: QBD-10 con la presentacion de Galon, registrado con 0 como lote interno y 0.000000 como lote externo. ', 'Jesus@castro', 'Febrero-27-2018', '09:44'),
(372, 'Se agrego un parametro nuevo: el producto QBD-10 con la presentacion de Porron, Minimo:  10, Punto de reorden: 20 y Maximo: 30.', 'Jesus@castro', 'Febrero-27-2018', '10:03'),
(373, 'Se registro un nuevo producto, sus caracteristicas son: QBD-10D, Desengrasante Dielectrico, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:20'),
(374, 'Se registro un nuevo producto, sus caracteristicas son: QBD-09, Desengrasante orgÃ¡nico , unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:20'),
(375, 'Se registro un nuevo producto, sus caracteristicas son: QBD-25, Shampoo con cera para auto, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:21'),
(376, 'Se registro un nuevo producto, sus caracteristicas son: QBD-26, Brill Plus, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:22'),
(377, 'Se registro un nuevo producto, sus caracteristicas son: QBD-28, Abrillantador de motor, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:22'),
(378, 'Se registro un nuevo producto, sus caracteristicas son: QBD-31, Limpia parabrisas, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:23'),
(379, 'Se registro un nuevo producto, sus caracteristicas son: QBD-08 ( Lima limÃ³n ), JabÃ³n para manos, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:24'),
(380, 'Se registro un nuevo producto, sus caracteristicas son: QBD-08 ( Cereza ), JabÃ³n para manos, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:25'),
(381, 'Se elimino un producto: QBD-10.', 'Jesus@castro', 'Febrero-27-2018', '10:25'),
(382, 'Se registro un nuevo producto, sus caracteristicas son: QBD-10, Desengrasante inorgÃ¡nico, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:26'),
(383, 'Se registro un nuevo producto, sus caracteristicas son: QBD-20, Desoxidante, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:26'),
(384, 'Se registro un nuevo producto, sus caracteristicas son: Lectro 3000, Desengrasante para tablillas electrÃ³nicas, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '10:27'),
(385, 'Se registro un nuevo producto, sus caracteristicas son: QBD-81, Gel para manos, unidad de medida: kg y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '11:21'),
(386, 'Se registro un nuevo producto, sus caracteristicas son: QBD-71, Lava lozas, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(387, 'Se elimino un tipo de presentacion: 500ml.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(388, 'Se elimino un tipo de presentacion: .', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(389, 'Se elimino un tipo de presentacion: 900ml (nuevo).', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(390, 'Se elimino un tipo de presentacion: 900ml (usado).', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(391, 'Se elimino un tipo de presentacion: Aerosol 454ml.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(392, 'Se elimino un tipo de presentacion: Atomizador.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(393, 'Se elimino un tipo de presentacion: Cubeta.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(394, 'Se elimino un tipo de presentacion: Docificador.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(395, 'Se elimino un tipo de presentacion: Galon.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(396, 'Se elimino un tipo de presentacion: Galon (usado).', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(397, 'Se elimino un tipo de presentacion: Galon (nuevo).', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(398, 'Se elimino un tipo de presentacion: Muestra.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(399, 'Se elimino un tipo de presentacion: Galon con despachador.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(400, 'Se elimino un tipo de presentacion: Tambo.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(401, 'Se elimino un tipo de presentacion: Porron.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(402, 'Se elimino un tipo de presentacion: Tapa negra.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(403, 'Se elimino un tipo de presentacion: Tapa.', 'Jesus@castro', 'Febrero-27-2018', '11:27'),
(404, 'Se registro una nueva presentacion: GalÃ³n industrial.', 'Jesus@castro', 'Febrero-27-2018', '11:39'),
(405, 'Se registro una nueva presentacion: GalÃ³n concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:39'),
(406, 'Se registro una nueva presentacion: PorrÃ³n Industrial.', 'Jesus@castro', 'Febrero-27-2018', '11:40'),
(407, 'Se registro una nueva presentacion: PorrÃ³n concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:41'),
(408, 'Se registro una nueva presentacion: Tambo concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:42'),
(409, 'Se registro una nueva presentacion: Tambo industrial.', 'Jesus@castro', 'Febrero-27-2018', '11:42'),
(410, 'Se registro una nueva presentacion: GalÃ³n.', 'Jesus@castro', 'Febrero-27-2018', '11:42'),
(411, 'Se registro una nueva presentacion: Porron concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:43'),
(412, 'Se elimino un tipo de presentacion: Porron concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:43'),
(413, 'Se registro una nueva presentacion: PorrÃ³n concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:43'),
(414, 'Se elimino un tipo de presentacion: PorrÃ³n concentrado.', 'Jesus@castro', 'Febrero-27-2018', '11:43'),
(415, 'Se registro una nueva presentacion: Tambo.', 'Jesus@castro', 'Febrero-27-2018', '11:47'),
(416, 'Se registro una nueva presentacion: Spray.', 'Jesus@castro', 'Febrero-27-2018', '11:48'),
(417, 'Se registro una nueva presentacion: Bote 4.', 'Jesus@castro', 'Febrero-27-2018', '11:48'),
(418, 'Se elimino un tipo de presentacion: Bote 4.', 'Jesus@castro', 'Febrero-27-2018', '11:49'),
(419, 'Se registro una nueva presentacion: Bote .', 'Jesus@castro', 'Febrero-27-2018', '11:49'),
(420, 'Se registro una nueva presentacion: Cubeta 4kg.', 'Jesus@castro', 'Febrero-27-2018', '11:49'),
(421, 'Se registro una nueva presentacion: Cubeta 20kg.', 'Jesus@castro', 'Febrero-27-2018', '11:49'),
(422, 'Se registro una nueva presentacion: GalÃ³n con atomizador.', 'Jesus@castro', 'Febrero-27-2018', '11:50'),
(423, 'Se relaciono el producto QBD-10 con las presentaciones GalÃ³n concentrado, GalÃ³n industrial, PorrÃ³n concentrado, PorrÃ³n Industrial, Tambo concentrado, Tambo industrial,  ', 'Jesus@castro', 'Febrero-27-2018', '11:52'),
(424, 'Se relaciono el producto QBD-10D con las presentaciones GalÃ³n, PorrÃ³n concentrado, Tambo,  ', 'Jesus@castro', 'Febrero-27-2018', '11:52'),
(425, 'Se relaciono el producto QBD-09 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '11:52'),
(426, 'Se relaciono el producto QBD-25 con las presentaciones GalÃ³n, PorrÃ³n concentrado, PorrÃ³n Industrial,  ', 'Jesus@castro', 'Febrero-27-2018', '11:56'),
(427, 'Se relaciono el producto QBD-26 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:00'),
(428, 'Se relaciono el producto QBD-28 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:04'),
(429, 'Se relaciono el producto QBD-31 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:05'),
(430, 'Se relaciono el producto QBD-08 ( Cereza ) con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:05'),
(431, 'Se relaciono el producto QBD-08 ( Lima limÃ³n ) con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:05'),
(432, 'Se relaciono el producto QBD-08 ( Lima limÃ³n ) con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:06'),
(433, 'Se relaciono el producto QBD-08 ( Lima limÃ³n ) con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:06'),
(434, 'Se relaciono el producto QBD-81 con las presentaciones Bote , Cubeta 20kg, Cubeta 4kg, GalÃ³n con atomizador, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:07'),
(435, 'Una relacion entre productos y presentacion fue eliminada. La relacion correspondia al producto QBD-08 ( Cereza ) con las presentaciones: GalÃ³n y PorrÃ³n concentrado.', 'Jesus@castro', 'Febrero-27-2018', '12:07'),
(436, 'Se elimino un producto: QBD-08 ( Cereza ).', 'Jesus@castro', 'Febrero-27-2018', '12:07'),
(437, 'Se elimino un producto: QBD-08 ( Lima limÃ³n ).', 'Jesus@castro', 'Febrero-27-2018', '12:07'),
(438, 'Se registro un nuevo producto, sus caracteristicas son: QBD-08, JabÃ³n para manos, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:08'),
(439, 'Se relaciono el producto QBD-08 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:08'),
(440, 'Se relaciono el producto Lectro 3000 con las presentaciones Bote , Cubeta 20kg, Cubeta 4kg, Spray,  ', 'Jesus@castro', 'Febrero-27-2018', '12:12'),
(441, 'Una relacion entre productos y presentacion fue eliminada. La relacion correspondia al producto Lectro 3000 con las presentaciones: Bote , Cubeta 20kg, Cubeta 4kg y Spray.', 'Jesus@castro', 'Febrero-27-2018', '12:12'),
(442, 'Se relaciono el producto Lectro 3000 con las presentaciones Spray,  ', 'Jesus@castro', 'Febrero-27-2018', '12:12'),
(443, 'Se agrego un articulo nuevo: 55 pz de QBD-10 en la presentacion de Tambo concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:18'),
(444, 'Se agrego un articulo nuevo: 176 pz de QBD-10 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:19'),
(445, 'Se relaciono el producto QBD-20 con las presentaciones GalÃ³n, PorrÃ³n concentrado,  ', 'Jesus@castro', 'Febrero-27-2018', '12:21'),
(446, 'Se agrego un articulo nuevo: 10 pz de QBD-20 en la presentacion de GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:22'),
(447, 'Se agrego un articulo nuevo: 36 pz de QBD-25 en la presentacion de GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:24'),
(448, 'Se agrego un articulo nuevo: 6 pz de QBD-25 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:33'),
(449, 'Se agrego un articulo nuevo: 5 pz de QBD-81 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:34'),
(450, 'Se registro una nueva presentacion: Polietileno Natural.', 'Jesus@castro', 'Febrero-27-2018', '12:40'),
(451, 'Se registro un nuevo producto, sus caracteristicas son: Envase, Plastico, unidad de medida:  y una vida de 365 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:42'),
(452, 'Se registro una nueva presentacion: PET.', 'Jesus@castro', 'Febrero-27-2018', '12:42'),
(453, 'Se registro una nueva presentacion: HDP.', 'Jesus@castro', 'Febrero-27-2018', '12:42'),
(454, 'Se elimino un tipo de presentacion: HDP.', 'Jesus@castro', 'Febrero-27-2018', '12:43'),
(455, 'Se elimino un tipo de presentacion: PET.', 'Jesus@castro', 'Febrero-27-2018', '12:43'),
(456, 'Se registro un nuevo producto, sus caracteristicas son: Envase UTPE, UTPE, unidad de medida:  y una vida de 365 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:48'),
(457, 'Se registro un nuevo producto, sus caracteristicas son: Envase PET, PET, unidad de medida:  y una vida de 365 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:49'),
(458, 'Se registro un nuevo producto, sus caracteristicas son: Accesorios , Complementos , unidad de medida:  y una vida de 365 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:50'),
(459, 'Se elimino un producto: Envase UTPE.', 'Jesus@castro', 'Febrero-27-2018', '12:50'),
(460, 'Se registro un nuevo producto, sus caracteristicas son: Envase HDPE, HDPE, unidad de medida:  y una vida de 365 dias.', 'Jesus@castro', 'Febrero-27-2018', '12:51'),
(461, 'Se registro una nueva presentacion: PorrÃ³n.', 'Jesus@castro', 'Febrero-27-2018', '12:51'),
(462, 'Se registro una nueva presentacion: 120 ml.', 'Jesus@castro', 'Febrero-27-2018', '12:52'),
(463, 'Se registro una nueva presentacion: 900 ml.', 'Jesus@castro', 'Febrero-27-2018', '12:52'),
(464, 'Se relaciono el producto Envase HDPE con las presentaciones 120 ml, 900 ml, GalÃ³n, PorrÃ³n,  ', 'Jesus@castro', 'Febrero-27-2018', '12:53'),
(465, 'Se registro una nueva presentacion: 500 ml.', 'Jesus@castro', 'Febrero-27-2018', '12:53'),
(466, 'Se relaciono el producto Envase PET con las presentaciones 500 ml,  ', 'Jesus@castro', 'Febrero-27-2018', '12:53'),
(467, 'Se registro una nueva presentacion: Tapa - PorrÃ³n.', 'Jesus@castro', 'Febrero-27-2018', '12:54'),
(468, 'Se registro una nueva presentacion: Tapa - GalÃ³n.', 'Jesus@castro', 'Febrero-27-2018', '12:54'),
(469, 'Se registro una nueva presentacion: Tapa - 900 ml.', 'Jesus@castro', 'Febrero-27-2018', '12:54'),
(470, 'Se registro una nueva presentacion: Tapa - 120 ml.', 'Jesus@castro', 'Febrero-27-2018', '12:54'),
(471, 'Se registro una nueva presentacion: Atomizador - rojo.', 'Jesus@castro', 'Febrero-27-2018', '12:54'),
(472, 'Se registro una nueva presentacion: Dosificadores - GalÃ³n.', 'Jesus@castro', 'Febrero-27-2018', '12:55'),
(473, 'Se relaciono el producto Accesorios  con las presentaciones Atomizador - rojo, Dosificadores - GalÃ³n, Tapa - 120 ml, Tapa - 900 ml, Tapa - GalÃ³n, Tapa - PorrÃ³n,  ', 'Jesus@castro', 'Febrero-27-2018', '12:55'),
(474, 'Se relaciono el producto Envase HDPE con las presentaciones Cubeta 4kg,  ', 'Jesus@castro', 'Febrero-27-2018', '12:56'),
(475, 'Se agrego un articulo nuevo: 20 pz de Envase HDPE en la presentacion de PorrÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '12:57'),
(476, 'Se agrego un articulo nuevo: 1 pz de QBD-08 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '13:58'),
(477, 'Se modifico la informacion de un articulo: 1 pz de QBD-08 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '13:58'),
(478, 'Se modifico la informacion de un articulo: 20 pz de QBD-10 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:00'),
(479, 'Se agrego un articulo nuevo: 20 pz de QBD-10 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:08'),
(480, 'Se agrego un articulo nuevo: 75 pz de QBD-10 en la presentacion de GalÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:12'),
(481, 'Se agrego un articulo nuevo: 3 pz de QBD-10 en la presentacion de PorrÃ³n Industrial con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:14'),
(482, 'Se agrego un articulo nuevo: 5 pz de QBD-25 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:15'),
(483, 'Se agrego un articulo nuevo: 3 pz de QBD-25 en la presentacion de GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:16'),
(484, 'Se agrego un articulo nuevo: 48 pz de QBD-26 en la presentacion de GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:16'),
(485, 'Se agrego un articulo nuevo: 1 pz de QBD-26 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:17'),
(486, 'Se agrego un articulo nuevo: 1 pz de QBD-31 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:17'),
(487, 'Se agrego un articulo nuevo: 3 pz de QBD-81 en la presentacion de PorrÃ³n concentrado con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:18'),
(488, 'Se agrego un articulo nuevo: 14 pz de QBD-81 en la presentacion de GalÃ³n con atomizador con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:19'),
(489, 'Se agrego un articulo nuevo: 11 pz de Lectro 3000 en la presentacion de Spray con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:20'),
(490, 'Se agrego un articulo nuevo: 10 pz de Envase HDPE en la presentacion de Cubeta 4kg con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:20'),
(491, 'Se agrego un articulo nuevo: 42 pz de Envase HDPE en la presentacion de GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:21'),
(492, 'Se agrego un articulo nuevo: 21 pz de Accesorios  en la presentacion de Atomizador - rojo con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:21'),
(493, 'Se agrego un articulo nuevo: 96 pz de Accesorios  en la presentacion de Tapa - PorrÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:21'),
(494, 'Se agrego un articulo nuevo: 97 pz de Accesorios  en la presentacion de Tapa - GalÃ³n con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:22'),
(495, 'Se agrego un articulo nuevo: 188 pz de Accesorios  en la presentacion de Tapa - 120 ml con el numero 0 como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:22'),
(496, 'Se registro un nuevo producto, sus caracteristicas son: Caja, Embarque de productos, unidad de medida:  y una vida de 368 dias.', 'Jesus@castro', 'Febrero-27-2018', '14:23'),
(497, 'Se registro una nueva presentacion: CartÃ³n .', 'Jesus@castro', 'Febrero-27-2018', '14:23'),
(498, 'Se relaciono el producto Caja con las presentaciones CartÃ³n ,  ', 'Jesus@castro', 'Febrero-27-2018', '14:23'),
(499, 'Se agrego un articulo nuevo: 64 pz de Caja en la presentacion de CartÃ³n  con el numero  como numero de lote.', 'Jesus@castro', 'Febrero-27-2018', '14:24'),
(500, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-27-2018', '14:24'),
(501, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-28-2018', '11:11'),
(502, 'Se le otorgo al usuario recepcion@layla, el permiso para entrar a la seccion -Registrar salida-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(503, 'Se le otorgo al usuario recepcion@layla, el permiso para entrar a la seccion -Registrar orden de compra-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(504, 'Se le otorgo al usuario recepcion@layla, el permiso para entrar a la seccion -Ordenes de compra pendientes-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(505, 'Se le otorgo al usuario recepcion@layla, el permiso para entrar a la seccion -Inventario-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(506, 'Se le otorgo al usuario denisse@napoles, el permiso para entrar a la seccion -Agregar articulo-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(507, 'Se le otorgo al usuario denisse@napoles, el permiso para entrar a la seccion -Buscar/Eliminar articulo-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(508, 'Se le otorgo al usuario denisse@napoles, el permiso para entrar a la seccion -Inventario-.', 'Jesus@castro', 'Febrero-28-2018', '12:34'),
(509, 'Se elimino al usuario lrio@compras de la seccion de permisos.', 'Jesus@castro', 'Febrero-28-2018', '12:42'),
(510, 'Se elimino al usuario l@v de la seccion de permisos.', 'Jesus@castro', 'Febrero-28-2018', '12:42'),
(511, 'Cerro Sesion.', 'Jesus@castro', 'Febrero-28-2018', '12:43'),
(512, 'Se intento iniciar sesion pero los datos fueron incorrectos. Contrasena ingresada: quimicos. Informacion de PC: DESKTOP-RGRB4R2 -- ::1 ', 'layla@recepcion', 'Febrero-28-2018', '12:43'),
(513, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'recepcion@layla', 'Febrero-28-2018', '12:44'),
(514, 'Cerro Sesion.', 'recepcion@layla', 'Febrero-28-2018', '12:46'),
(515, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Febrero-28-2018', '12:46'),
(516, 'Se registro un usuario nuevo: alberto@gonzalez. ', 'Jesus@castro', 'Febrero-28-2018', '12:52'),
(517, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Agregar articulo-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(518, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Buscar/Eliminar articulo-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(519, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Registrar salida-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(520, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Registrar orden de compra-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(521, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Ordenes de compra pendientes-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(522, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Inventario-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(523, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Productos y presentaciones-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(524, 'Se le otorgo al usuario alberto@gonzalez, el permiso para entrar a la seccion -Parametros-.', 'Jesus@castro', 'Febrero-28-2018', '12:53'),
(525, 'Inicio sesion desde una PC con el nombre: LAPTOP-OU3PRSMS y con una IP registrada dentro de la LAN: 192.168.15.109 ', 'alberto@gonzalez', 'Febrero-28-2018', '12:57'),
(526, 'Se agrego un articulo nuevo: 2 pz de QBD-10 en la presentacion de GalÃ³n industrial con el numero 0 como numero de lote.', 'alberto@gonzalez', 'Febrero-28-2018', '13:02'),
(527, 'Inicio sesion desde una PC con el nombre: DESKTOP-RGRB4R2 y con una IP registrada dentro de la LAN: ::1 ', 'Jesus@castro', 'Marzo-02-2018', '10:15'),
(528, 'Se registro un nuevo producto, sus caracteristicas son: QBD-10I, Desengrasante industrial, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Marzo-02-2018', '13:24'),
(529, 'Una relacion entre productos y presentacion fue eliminada. La relacion correspondia al producto QBD-10 con las presentaciones: GalÃ³n concentrado, GalÃ³n industrial, PorrÃ³n concentrado, PorrÃ³n Industrial, Tambo concentrado y Tambo industrial.', 'Jesus@castro', 'Marzo-02-2018', '13:24'),
(530, 'Se elimino un tipo de presentacion: GalÃ³n concentrado.', 'Jesus@castro', 'Marzo-02-2018', '13:24'),
(531, 'Se relaciono el producto QBD-10I con las presentaciones GalÃ³n, PorrÃ³n,  ', 'Jesus@castro', 'Marzo-02-2018', '13:25'),
(532, 'Se relaciono el producto QBD-10 con las presentaciones GalÃ³n, PorrÃ³n,  ', 'Jesus@castro', 'Marzo-02-2018', '13:25'),
(533, 'Se relaciono el producto QBD-10 con las presentaciones Tambo,  ', 'Jesus@castro', 'Marzo-02-2018', '13:25'),
(534, 'Se relaciono el producto QBD-10I con las presentaciones Tambo,  ', 'Jesus@castro', 'Marzo-02-2018', '13:25'),
(535, 'Se agrego un parametro nuevo: el producto QBD-09 con la presentacion de PorrÃ³n concentrado, Minimo:  2, Punto de reorden: 3 y Maximo: 4.', 'Jesus@castro', 'Marzo-02-2018', '13:38'),
(536, 'Se registro un nuevo producto, sus caracteristicas son: QBD-10B, Desengrasante baja espuma, unidad de medida: Lts y una vida de 180 dias.', 'Jesus@castro', 'Marzo-02-2018', '13:38'),
(537, 'Se relaciono el producto QBD-10B con las presentaciones GalÃ³n, PorrÃ³n, Tambo,  ', 'Jesus@castro', 'Marzo-02-2018', '13:39'),
(538, 'Se agrego un parametro nuevo: el producto QBD-10B con la presentacion de PorrÃ³n, Minimo:  1, Punto de reorden: 1 y Maximo: 2.', 'Jesus@castro', 'Marzo-02-2018', '13:39'),
(539, 'Se agrego un parametro nuevo: el producto QBD-10D con la presentacion de PorrÃ³n concentrado, Minimo:  1, Punto de reorden: 1 y Maximo: 2.', 'Jesus@castro', 'Marzo-02-2018', '13:40'),
(540, 'Se agrego un parametro nuevo: el producto QBD-08 con la presentacion de PorrÃ³n concentrado, Minimo:  1, Punto de reorden: 1 y Maximo: 2.', 'Jesus@castro', 'Marzo-02-2018', '13:41'),
(541, 'Se agrego un parametro nuevo: el producto QBD-20 con la presentacion de GalÃ³n, Minimo:  1, Punto de reorden: 1 y Maximo: 2.', 'Jesus@castro', 'Marzo-02-2018', '13:41'),
(542, 'Se agrego un parametro nuevo: el producto QBD-31 con la presentacion de PorrÃ³n concentrado, Minimo:  1, Punto de reorden: 1 y Maximo: 2.', 'Jesus@castro', 'Marzo-02-2018', '13:42'),
(543, 'Se agrego un parametro nuevo: el producto QBD-81 con la presentacion de GalÃ³n con atomizador, Minimo:  7, Punto de reorden: 10 y Maximo: 21.', 'Jesus@castro', 'Marzo-02-2018', '13:42'),
(544, 'Se agrego un parametro nuevo: el producto QBD-25 con la presentacion de GalÃ³n, Minimo:  2, Punto de reorden: 3 y Maximo: 5.', 'Jesus@castro', 'Marzo-02-2018', '13:43'),
(545, 'Se agrego un parametro nuevo: el producto QBD-25 con la presentacion de PorrÃ³n concentrado, Minimo:  2, Punto de reorden: 3 y Maximo: 5.', 'Jesus@castro', 'Marzo-02-2018', '13:43'),
(546, 'Se agrego un parametro nuevo: el producto QBD-10 con la presentacion de GalÃ³n, Minimo:  50, Punto de reorden: 75 y Maximo: 133.', 'Jesus@castro', 'Marzo-02-2018', '13:43'),
(547, 'Se agrego un parametro nuevo: el producto Lectro 3000 con la presentacion de Spray, Minimo:  2, Punto de reorden: 3 y Maximo: 12.', 'Jesus@castro', 'Marzo-02-2018', '13:44'),
(548, 'Se agrego un parametro nuevo: el producto QBD-10 con la presentacion de PorrÃ³n, Minimo:  10, Punto de reorden: 15 y Maximo: 30.', 'Jesus@castro', 'Marzo-02-2018', '13:44'),
(549, 'Se le otorgo al usuario carlos@resendiz, el permiso para entrar a la seccion -Agregar articulo-.', 'Jesus@castro', 'Marzo-02-2018', '13:45'),
(550, 'Se le otorgo al usuario carlos@resendiz, el permiso para entrar a la seccion -Buscar/Eliminar articulo-.', 'Jesus@castro', 'Marzo-02-2018', '13:45'),
(551, 'Se le otorgo al usuario carlos@resendiz, el permiso para entrar a la seccion -Inventario-.', 'Jesus@castro', 'Marzo-02-2018', '13:45'),
(552, 'Cerro Sesion.', 'Jesus@castro', 'Marzo-02-2018', '14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones`
--

CREATE TABLE `relaciones` (
  `id` int(30) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `relacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relaciones`
--

INSERT INTO `relaciones` (`id`, `producto`, `relacion`) VALUES
(66, 'QBD-10D', 'GalÃ³n'),
(67, 'QBD-10D', 'PorrÃ³n concentrado'),
(68, 'QBD-10D', 'Tambo'),
(69, 'QBD-09', 'GalÃ³n'),
(70, 'QBD-09', 'PorrÃ³n concentrado'),
(71, 'QBD-25', 'GalÃ³n'),
(72, 'QBD-25', 'PorrÃ³n concentrado'),
(73, 'QBD-25', 'PorrÃ³n Industrial'),
(74, 'QBD-26', 'GalÃ³n'),
(75, 'QBD-26', 'PorrÃ³n concentrado'),
(76, 'QBD-28', 'GalÃ³n'),
(77, 'QBD-28', 'PorrÃ³n concentrado'),
(78, 'QBD-31', 'GalÃ³n'),
(79, 'QBD-31', 'PorrÃ³n concentrado'),
(88, 'QBD-81', 'Bote '),
(89, 'QBD-81', 'Cubeta 20kg'),
(90, 'QBD-81', 'Cubeta 4kg'),
(91, 'QBD-81', 'GalÃ³n con atomizador'),
(92, 'QBD-81', 'PorrÃ³n concentrado'),
(93, 'QBD-08', 'GalÃ³n'),
(94, 'QBD-08', 'PorrÃ³n concentrado'),
(99, 'Lectro 3000', 'Spray'),
(100, 'QBD-20', 'GalÃ³n'),
(101, 'QBD-20', 'PorrÃ³n concentrado'),
(102, 'Envase HDPE', '120 ml'),
(103, 'Envase HDPE', '900 ml'),
(104, 'Envase HDPE', 'GalÃ³n'),
(105, 'Envase HDPE', 'PorrÃ³n'),
(106, 'Envase PET', '500 ml'),
(107, 'Accesorios ', 'Atomizador - rojo'),
(108, 'Accesorios ', 'Dosificadores - GalÃ³n'),
(109, 'Accesorios ', 'Tapa - 120 ml'),
(110, 'Accesorios ', 'Tapa - 900 ml'),
(111, 'Accesorios ', 'Tapa - GalÃ³n'),
(112, 'Accesorios ', 'Tapa - PorrÃ³n'),
(113, 'Envase HDPE', 'Cubeta 4kg'),
(114, 'Caja', 'CartÃ³n '),
(115, 'QBD-10I', 'GalÃ³n'),
(116, 'QBD-10I', 'PorrÃ³n'),
(117, 'QBD-10', 'GalÃ³n'),
(118, 'QBD-10', 'PorrÃ³n'),
(119, 'QBD-10', 'Tambo'),
(120, 'QBD-10I', 'Tambo'),
(121, 'QBD-10B', 'GalÃ³n'),
(122, 'QBD-10B', 'PorrÃ³n'),
(123, 'QBD-10B', 'Tambo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `reporte` varchar(30) NOT NULL,
  `tiempo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `username`, `correo`, `reporte`, `tiempo`) VALUES
(1, 'Jesus@castro', 'jesuscastro305@gmail.com', 'Productos Totales', 0),
(2, 'Jesus@castro', 'jesuscastro305@gmail.com', 'Inventario', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopres`
--

CREATE TABLE `tipopres` (
  `id` int(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipopres`
--

INSERT INTO `tipopres` (`id`, `presentacion`) VALUES
(48, '120 ml'),
(50, '500 ml'),
(49, '900 ml'),
(55, 'Atomizador - rojo'),
(40, 'Bote '),
(57, 'CartÃ³n '),
(42, 'Cubeta 20kg'),
(41, 'Cubeta 4kg'),
(56, 'Dosificadores - GalÃ³n'),
(34, 'GalÃ³n'),
(43, 'GalÃ³n con atomizador'),
(28, 'GalÃ³n industrial'),
(44, 'Polietileno Natural'),
(47, 'PorrÃ³n'),
(31, 'PorrÃ³n concentrado'),
(30, 'PorrÃ³n Industrial'),
(38, 'Spray'),
(37, 'Tambo'),
(32, 'Tambo concentrado'),
(33, 'Tambo industrial'),
(54, 'Tapa - 120 ml'),
(53, 'Tapa - 900 ml'),
(52, 'Tapa - GalÃ³n'),
(51, 'Tapa - PorrÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoprod`
--

CREATE TABLE `tipoprod` (
  `id` int(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `unidadmedida` varchar(20) NOT NULL,
  `vida` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoprod`
--

INSERT INTO `tipoprod` (`id`, `producto`, `descripcion`, `unidadmedida`, `vida`) VALUES
(25, 'QBD-10D', 'Desengrasante Dielectrico', 'Lts', 180),
(26, 'QBD-09', 'Desengrasante orgÃ¡nico ', 'Lts', 180),
(27, 'QBD-25', 'Shampoo con cera para auto', 'Lts', 180),
(28, 'QBD-26', 'Brill Plus', 'Lts', 180),
(29, 'QBD-28', 'Abrillantador de motor', 'Lts', 180),
(30, 'QBD-31', 'Limpia parabrisas', 'Lts', 180),
(33, 'QBD-10', 'Desengrasante inorgÃ¡nico', 'Lts', 180),
(34, 'QBD-20', 'Desoxidante', 'Lts', 180),
(35, 'Lectro 3000', 'Desengrasante para tablillas electrÃ³nicas', 'Lts', 180),
(36, 'QBD-81', 'Gel para manos', 'kg', 180),
(37, 'QBD-71', 'Lava lozas', 'Lts', 180),
(38, 'QBD-08', 'JabÃ³n para manos', 'Lts', 180),
(39, 'Envase', 'Plastico', '', 365),
(41, 'Envase PET', 'PET', '', 365),
(42, 'Accesorios ', 'Complementos ', '', 365),
(43, 'Envase HDPE', 'HDPE', '', 365),
(44, 'Caja', 'Embarque de productos', '', 368),
(45, 'QBD-10I', 'Desengrasante industrial', 'Lts', 180),
(46, 'QBD-10B', 'Desengrasante baja espuma', 'Lts', 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultimoenvio`
--

CREATE TABLE `ultimoenvio` (
  `id` int(30) NOT NULL,
  `reporte` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `00000010`
--
ALTER TABLE `00000010`
  ADD PRIMARY KEY (`id_comprometidos`);

--
-- Indices de la tabla `1100`
--
ALTER TABLE `1100`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `c_cliente` (`c_cliente`);

--
-- Indices de la tabla `1111`
--
ALTER TABLE `1111`
  ADD PRIMARY KEY (`id_parametro`),
  ADD KEY `articulo` (`articulo`,`presentacion`),
  ADD KEY `presentacion` (`presentacion`);

--
-- Indices de la tabla `10010`
--
ALTER TABLE `10010`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `10011`
--
ALTER TABLE `10011`
  ADD PRIMARY KEY (`id_totales`);

--
-- Indices de la tabla `10011t`
--
ALTER TABLE `10011t`
  ADD PRIMARY KEY (`id_totalesT`);

--
-- Indices de la tabla `111010`
--
ALTER TABLE `111010`
  ADD PRIMARY KEY (`id_ordendecompra`),
  ADD KEY `folio` (`folio`);

--
-- Indices de la tabla `111010t`
--
ALTER TABLE `111010t`
  ADD PRIMARY KEY (`id_ordendecompraT`),
  ADD KEY `folioT` (`folioT`);

--
-- Indices de la tabla `11011111`
--
ALTER TABLE `11011111`
  ADD PRIMARY KEY (`id_datof`),
  ADD KEY `df_cliente` (`df_cliente`);

--
-- Indices de la tabla `110011001`
--
ALTER TABLE `110011001`
  ADD PRIMARY KEY (`id_cuentasporpagar`),
  ADD KEY `cp_cliente` (`cp_cliente`);

--
-- Indices de la tabla `111110010`
--
ALTER TABLE `111110010`
  ADD PRIMARY KEY (`id_prod_sal`),
  ADD KEY `ps_folio` (`ps_folio`);

--
-- Indices de la tabla `1001010000`
--
ALTER TABLE `1001010000`
  ADD PRIMARY KEY (`cliente`);

--
-- Indices de la tabla `1110111110010`
--
ALTER TABLE `1110111110010`
  ADD PRIMARY KEY (`id_productossolicitados`);

--
-- Indices de la tabla `1110111110010t`
--
ALTER TABLE `1110111110010t`
  ADD PRIMARY KEY (`id_productossolicitadosT`);

--
-- Indices de la tabla `caducidad`
--
ALTER TABLE `caducidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codbarras` (`codbarras`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `estancado`
--
ALTER TABLE `estancado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codbarras` (`codbarras`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `cod__barras` (`cod__barras`);

--
-- Indices de la tabla `regactividades`
--
ALTER TABLE `regactividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relaciones`
--
ALTER TABLE `relaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto` (`producto`),
  ADD KEY `relacion` (`relacion`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `reporte` (`reporte`);

--
-- Indices de la tabla `tipopres`
--
ALTER TABLE `tipopres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presentacion` (`presentacion`);

--
-- Indices de la tabla `tipoprod`
--
ALTER TABLE `tipoprod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto` (`producto`);

--
-- Indices de la tabla `ultimoenvio`
--
ALTER TABLE `ultimoenvio`
  ADD KEY `reporte` (`reporte`,`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `00000010`
--
ALTER TABLE `00000010`
  MODIFY `id_comprometidos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT de la tabla `1100`
--
ALTER TABLE `1100`
  MODIFY `id_compras` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `1111`
--
ALTER TABLE `1111`
  MODIFY `id_parametro` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `10011`
--
ALTER TABLE `10011`
  MODIFY `id_totales` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `111010`
--
ALTER TABLE `111010`
  MODIFY `id_ordendecompra` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `111010t`
--
ALTER TABLE `111010t`
  MODIFY `id_ordendecompraT` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `11011111`
--
ALTER TABLE `11011111`
  MODIFY `id_datof` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `110011001`
--
ALTER TABLE `110011001`
  MODIFY `id_cuentasporpagar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `111110010`
--
ALTER TABLE `111110010`
  MODIFY `id_prod_sal` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `1110111110010`
--
ALTER TABLE `1110111110010`
  MODIFY `id_productossolicitados` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `1110111110010t`
--
ALTER TABLE `1110111110010t`
  MODIFY `id_productossolicitadosT` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `caducidad`
--
ALTER TABLE `caducidad`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `estancado`
--
ALTER TABLE `estancado`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `regactividades`
--
ALTER TABLE `regactividades`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;
--
-- AUTO_INCREMENT de la tabla `relaciones`
--
ALTER TABLE `relaciones`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipopres`
--
ALTER TABLE `tipopres`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `tipoprod`
--
ALTER TABLE `tipoprod`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `1100`
--
ALTER TABLE `1100`
  ADD CONSTRAINT `1100_ibfk_1` FOREIGN KEY (`c_cliente`) REFERENCES `110011001` (`cp_cliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `1111`
--
ALTER TABLE `1111`
  ADD CONSTRAINT `1111_ibfk_1` FOREIGN KEY (`presentacion`) REFERENCES `tipopres` (`presentacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1111_ibfk_2` FOREIGN KEY (`articulo`) REFERENCES `tipoprod` (`producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `11011111`
--
ALTER TABLE `11011111`
  ADD CONSTRAINT `11011111_ibfk_1` FOREIGN KEY (`df_cliente`) REFERENCES `1001010000` (`cliente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `110011001`
--
ALTER TABLE `110011001`
  ADD CONSTRAINT `110011001_ibfk_1` FOREIGN KEY (`cp_cliente`) REFERENCES `11011111` (`df_cliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caducidad`
--
ALTER TABLE `caducidad`
  ADD CONSTRAINT `caducidad_ibfk_1` FOREIGN KEY (`codbarras`) REFERENCES `productos` (`cod__barras`) ON DELETE CASCADE;

--
-- Filtros para la tabla `estancado`
--
ALTER TABLE `estancado`
  ADD CONSTRAINT `estancado_ibfk_1` FOREIGN KEY (`codbarras`) REFERENCES `productos` (`cod__barras`) ON DELETE CASCADE;

--
-- Filtros para la tabla `relaciones`
--
ALTER TABLE `relaciones`
  ADD CONSTRAINT `relaciones_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `tipoprod` (`producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relaciones_ibfk_2` FOREIGN KEY (`relacion`) REFERENCES `tipopres` (`presentacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `cuentas` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ultimoenvio`
--
ALTER TABLE `ultimoenvio`
  ADD CONSTRAINT `ultimoenvio_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `reportes` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ultimoenvio_ibfk_2` FOREIGN KEY (`reporte`) REFERENCES `reportes` (`reporte`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
