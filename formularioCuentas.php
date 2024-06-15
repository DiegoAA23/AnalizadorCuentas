<?php

require_once 'cuentasLib.php';

$texto = "20:08:21 From DES sistema Yensi Martínez To Everyone:
0801200109211
20:08:22 From Alonso Chavarria To Everyone:
0703200300898
20:08:22 From SCJ-Jose Flores To Everyone:
0810200200050
20:08:23 From JS-Noé Ignacio Manueles Guerrero To Everyone:
1201199900111
20:08:23 From SI-Samuel Ramirez To Everyone:
1807200102280
20:08:23 From SCJ Abner Castro To Everyone:
0801200019047
20:08:24 From SCJ_Maryori Alejandra Méndez To Everyone:
0801200013921
20:08:24 From Ana Romero To Everyone:
0601200202226
20:08:25 From Jorge Alberto Paz Santos To Everyone:
1516200300024
20:08:25 From Selene Nuñez To Everyone:
0703200204425
20:08:25 From Douglas Aguilera To Everyone:
0601200201161
20:08:27 From ESTHER ALEJANDRA To Everyone:
0801198926818
20:08:27 From Daniel Merlo To Everyone:
0801200013549
20:08:29 From Genesis Galeas To Everyone:
0607199801038
20:08:29 From DES-JOSÉ ROBERTO SEVILLA CASTRO To Everyone:
0615200000081
20:08:30 From Nelson Godoy To Everyone:
0101200201688
20:08:30 From Julio Barralaga To Everyone:
0801199520830
20:08:30 From SAP-Brayan Peña To Everyone:
0703200002634
20:08:31 From SRL Joel Hernández To Everyone:
1310200100264
20:08:32 From SCJ-Genesis Ordoñez To Everyone:
0822200100217
20:08:32 From SCJ - AMILCAR HERNANDEZ To Everyone:
0801199807729
20:08:32 From Carlos Javier Padilla To Everyone:
1807199301482
20:08:35 From SAP Lenner Francisco Gonzalez Rodriguez To Everyone:
0704200100533
20:08:36 From Enoc Andrade To Everyone:
0801200313809
20:08:37 From JONATHAN DAVID VALLADARES IRIAS To Everyone:
0801199712788
20:08:38 From Arodi Nolasco To Everyone:
1012200000217
20:08:45 From JS - Ermis Medina To Everyone:
0318200100861
20:08:51 From Luis Caceres To Everyone:
0601200001507
20:09:00 From JS_ Maria Gonzalez To Everyone:
0801200116853
20:09:14 From JIM ROBERT ALMENDARES ESPINOZA To Everyone:
1007199400351
20:13:11 From Zoom UC183 To Everyone:
https://www.php.net/manual/en/datetime.format.php
20:19:16 From SRL_JEYSON DAVID MEJIA ANDRADE To Everyone:
1325199800036
";
$resultado = "";

if (isset($_POST["btnAnalizar"])) {
    $texto = $_POST["textoan"];
}

$resultado = extraerCuentas($texto);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Cuentas</title>
</head>

<body>
    <h2>Analizador de Cuentas</h2>
    <form action="formularioCuentas.php" method="post">
        <label for="textoan">Texto:</label>
        <br><br>
        <textarea name="textoan" placeholder="Introduzca su texto"><?php echo $texto; ?></textarea>
        <br><br>
        <input type="submit" name="btnAnalizar" value="Analizar">
    </form>
    <hr />
    <?php
    if ($resultado != "") {
        foreach ($resultado as $res) {
            echo $res . '<br>';
        }
    }
    ?>
</body>

</html>