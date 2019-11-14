<?php

	// Compruebo que el fichero existe
	if (file_exists("ejemplo.txt")) {

		// Creo una variable con la fecha de hoy
		$fecha = date("d" . "-" . "m" . "-" . "Y");

		// Creo el directorio con la fecha actual (DD/MM/AAAA)
		mkdir("/Users/antxoneguiguren/Documents/Desarrollo Web/UpgradeHub/GitHub/NVL-PHP-FICHEROS-3/" . $fecha);

		// Directorio origen
		$origen = "/Users/antxoneguiguren/Documents/Desarrollo Web/UpgradeHub/GitHub/NVL-PHP-FICHEROS-3/ejemplo.txt";

		// Directorio destino
		$destino = "/Users/antxoneguiguren/Documents/Desarrollo Web/UpgradeHub/GitHub/NVL-PHP-FICHEROS-3/" . $fecha . "/ejemplo-modificado.txt";

		// Copio el fichero origen en la carpeta destino, cambiándole el nombre
		copy($origen, $destino);

	}

?>