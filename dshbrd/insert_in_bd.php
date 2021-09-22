<?php

include_once 'config.php';

$ID = '';
$ID_implantacao = '005'; //arrumar nome da variavel (no banco tbm)
$Nome = 'ffdsafdas';

$query = "INSERT INTO sepImp (ID_implatacao, Nome) VALUES ('$ID_implantacao', '$Nome')";
$resultado = mysqli_query($conn, $query);



?>

