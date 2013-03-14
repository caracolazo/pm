
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- PMT_CAMBIOS_SISTEMAS
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `PMT_CAMBIOS_SISTEMAS`;


CREATE TABLE `PMT_CAMBIOS_SISTEMAS`
(
	`ID_CAMBIO_SISTEMA` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`NOM_CAMBIO_SISTEMA` VARCHAR(150)  NOT NULL,
	`DESC_CAMBIO_SISTEMA` VARCHAR(255),
	PRIMARY KEY (`ID_CAMBIO_SISTEMA`)
)ENGINE=MyISAM  DEFAULT CHARSET='utf8';
#-----------------------------------------------------------------------------
#-- PMT_INFORMACION_SOLICITUD
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `PMT_INFORMACION_SOLICITUD`;


CREATE TABLE `PMT_INFORMACION_SOLICITUD`
(
	`ID_SOLICITUD` VARCHAR(255)  NOT NULL,
	`ID_USUARIO` INTEGER(11)  NOT NULL,
	`ID_CAMBIO` INTEGER(11)  NOT NULL,
	`DESC_CAMBIO` VARCHAR(1255),
	`TEL_CAMBIO` VARCHAR(12),
	`FECHA_CAMBIO` DATETIME  NOT NULL,
	PRIMARY KEY (`ID_SOLICITUD`)
)ENGINE=MyISAM  DEFAULT CHARSET='utf8';
# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
