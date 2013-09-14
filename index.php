<?php
/*

	## Programado por Sergio Sobrevela Guaita
	## 12-09-2013
	## @BetterSergio
	## bettersergiosg@gmail.com

*/
	$language = 'es';
	if(isset($_GET['lang'])) {
		setcookie("lang", $_GET['lang'], time () + 7*24*60*60);
		if(file_exists("lang/".$_COOKIE['lang'].".php")) {
			$language = $_GET['lang'];
		}
	} elseif(isset($_COOKIE['lang'])) {
		if(file_exists("lang/".$_COOKIE['lang'].".php")) {
			$language = $_COOKIE['lang'];
		}
	}
	include 'lang/'.$language.'.php';

	include 'templates/header.php';
	if(isset($_GET['contacto'])){
			include 'templates/contacto.php';
		} elseif (isset($_GET['galeria'])) {
			include 'templates/galeria.php';
		} elseif (isset($_GET['lola'])) {
			include 'templates/lola.php';
		} elseif (isset($_GET['pavon'])) {
			include 'templates/pavon.php';
		} elseif (isset($_GET['servicios'])) {
			include 'templates/servicios.php';
		} elseif (isset($_GET['spagnolo'])) {
			include 'templates/spagnolo.php';
		} elseif (isset($_GET['strena'])) {
			include 'templates/strena.php';
		} elseif (isset($_GET['visita'])) {
			include 'templates/visita.php';
		} else {
			include 'templates/inicio.php';
		}
	include 'templates/footer.php';
?>