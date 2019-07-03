-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_curso` varchar(100) NOT NULL,
  `nombre_curso` varchar(100) NOT NULL,
  `nombre_actividad` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `cevalua` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `id_curso`, `nombre_curso`, `nombre_actividad`, `descripcion`, `cevalua`) VALUES
(3, '7', 'MinerÃ­a', 'Practica flutter', 'El alumno debe ejecutar el codigo de muestra en flutter', NULL),
(5, '1', 'Progra', 'Primer programa', 'Es un programa en consola', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE IF NOT EXISTS `asistencia` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(100) NOT NULL,
  `id_curso` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `asistio` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cevaluauno` varchar(100) DEFAULT NULL,
  `cevaluados` varchar(100) DEFAULT NULL,
  `cevaluatres` varchar(100) DEFAULT NULL,
  `cevaluacuatro` varchar(100) DEFAULT NULL,
  `cevaluacinco` varchar(100) DEFAULT NULL,
  `inicio` varchar(50) NOT NULL,
  `fin` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `token`, `nombre`, `cevaluauno`, `cevaluados`, `cevaluatres`, `cevaluacuatro`, `cevaluacinco`, `inicio`, `fin`) VALUES
(1, '222', 'Programacion de DM', 'Examenes', 'Participaciones', 'Tareas', 'Asistencia', 'Practicas', '2019-05-23', '2019-07-06'),
(7, '444', 'MinerÃ­a', 'Examenes', 'Participaciones', 'Tareas', 'Asistencia', 'Practicas', '2018', '2020'),
(8, '555', 'MÃ©todos formales', 'Examemes', 'Participaciones', 'Tareas', 'Asistencia', 'Practicas', '74859606', 'urutitgk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_alumno`
--

DROP TABLE IF EXISTS `curso_alumno`;
CREATE TABLE IF NOT EXISTS `curso_alumno` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(100) NOT NULL,
  `nombre_curso` varchar(100) NOT NULL,
  `id_curso` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso_alumno`
--

INSERT INTO `curso_alumno` (`id`, `matricula`, `nombre_curso`, `id_curso`) VALUES
(3, '333', 'Programacion de DM', '1'),
(4, '333', 'MinerÃ­a', '7'),
(6, '4141', 'Programacion de DM', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `matricula`, `ap_paterno`, `ap_materno`, `nombre`, `password`, `correo_electronico`, `fotografia`, `rol`) VALUES
(1, '666', 'GarcÃ©s', 'GonzÃ¡lez', 'Francisco', '123', 'paco@mail.com', 'ybky', 'estudiante'),
(6, '333', 'Red', 'Rogers', 'Jhon', '123', 'red@mail.com', 'fhhkl', 'estudiante'),
(8, '4141', 'Gates', 'Microsoft', 'Bill', '123', 'bill@mail.com', 'fotos', 'estudiante');

-- --------------------------------------------------------


