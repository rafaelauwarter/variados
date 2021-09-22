<?php

include_once 'config.php';


$sql = "SELECT * FROM sepImp";
$resultado = mysqli_query($conn, $sql);

// var_dump($resultado);

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio Implantacoes</title>
</head>
<body>
    
    <table>
            <tr onclick="document.location = '#';">
                <th>ID</th>
                <th>ID Implantacao</th>
                <th>Data</th>
                <th>Nome</th>
                <th>Link</th>
            </tr>

<?php
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["ID_implatacao"]."</td>";
            echo "<td>".$row["Dt_implantacao"]."</td>";
            echo "<td>".$row["Nome"]."</td>";
            echo "<td><a href=''>link</a></td>";
            echo "</tr>";
            // echo "id: " . $row["ID"] . " - Nome: " . $row["Nome"] . "<br>";
        }
    } else {
        echo "0 results";
    }

?> 
    </table>
</body>
</html>