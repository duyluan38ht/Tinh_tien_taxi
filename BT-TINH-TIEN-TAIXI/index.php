<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Tinh tien Taxi</legend>
        <input type="text" name="soKm" placeholder="Nhap so km"><br>
        <button type="submit">Tinh tien</button>
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soKm = $_REQUEST["soKm"];

    if ($soKm <=1 && $soKm > 0) {
        echo "Tiền cước:15000VND";
    } else if ($soKm > 1 && $soKm <= 5) {
        $toatal = ($soKm-1)*13500;
        echo "Tiền cước:".$toatal;
    } else if ($soKm > 5 && $soKm <= 120) {
        $toatal=($soKm-5) * 11000+15000+54000;
        echo "Tiền cước:" .$toatal;
    } else if ($soKm > 120) {
        $toatal=(($soKm-5) * 11000+15000+54000)* 0.9;
        echo "Tiền cước:" .$toatal;
    }

}
?>
</body>
</html>