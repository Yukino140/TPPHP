<?php
$id = $_POST["id"];
$nom = $_POST["nom"];
$desc = $_POST["desc"];
$addr = $_POST["addr"];
if(iset($id)and)
echo '<table style="border:1px solid black" >';

echo '<tr style="border:1px solid black"><td>ID</td><td>Nom</td><td>Description</td><td>Adresse</td></tr>';

echo '<tr style="border:1px solid black"><td>',$id,'</td><td>',$nom,'</td><td>',$desc,'</td><td>',$addr,'</td></tr>';

echo '</table >';
?>