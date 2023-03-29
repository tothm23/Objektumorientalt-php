<?php 

require_once("Gyogyszer.php");
require_once("Tipus.php");

$t = new Tipus();
$t -> setFajdalomCsillapito();

$aspirin = new Gyogyszer("Aspirin", "2025.01.01", $t -> getErtek(), "Richter Gedeon", 13579, 30, false, "acetilszalicilsav", 2979, "Benu");

$aspirin -> setMegbontott(false);
Gyogyszer::megbont($aspirin);

$aspirin -> statisztika();
?>