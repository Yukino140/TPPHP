<?php
include ("start.php");
$id = $_POST["id"];
$nom = $_POST["nom"];
$desc = $_POST["desc"];
$addr = $_POST["addr"];
$dom = $_POST["dom"];

$club1 = new Club($id,$nom,$desc,$addr,$dom);
$club1->afficherClub();


?>