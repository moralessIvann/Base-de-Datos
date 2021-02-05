--
-- Estructura de tabla para la tabla `articulo`
--
CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `CodigoBarra` varchar(45) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Presentacion` varchar(45) NOT NULL,
  `FechaCaducidad` date DEFAULT NULL,
  `Proveedor_idProveedor` int(11) NOT NULL,
  `Departamento_idDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `Nombre1` varchar(150) NOT NULL,
  `Nombre2` varchar(45) DEFAULT NULL,
  `ApellidoP` varchar(45) NOT NULL,
  `ApellidoM` varchar(45) NOT NULL,
  `Puesto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `Nombre1` varchar(45) NOT NULL,
  `Nombre2` varchar(45) DEFAULT NULL,
  `ApellidoP` varchar(45) NOT NULL,
  `ApellidoM` varchar(45) NOT NULL,
  `Tel` varchar(45) NOT NULL,
  `Empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Articulo_idArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `fk_Articulo_Proveedor` (`Proveedor_idProveedor`),
  ADD KEY `fk_Articulo_Departamento1` (`Departamento_idDepartamento`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `fk_Departamento_Empleado1` (`Empleado_idEmpleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTienda`),
  ADD KEY `fk_Tienda_Articulo1` (`Articulo_idArticulo`);

-- Filtros para la tabla `articulo`

ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_Articulo_Departamento1` FOREIGN KEY (`Departamento_idDepartamento`) REFERENCES `departamento` (`idDepartamento`),
  ADD CONSTRAINT `fk_Articulo_Proveedor` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `proveedor` (`idProveedor`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_Departamento_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `fk_Tienda_Articulo1` FOREIGN KEY (`Articulo_idArticulo`) REFERENCES `articulo` (`idArticulo`);
COMMIT;
