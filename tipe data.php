<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//tipe data string

    $nama  = "anisa";
    print "<h1>$nama</h1>";

//tipe data integer
$umur = "24";

print "umur saya " .$umur."<br>";

$saldo = "1000000";
$bunga = "500000";
$saldoakhir = $saldo + $bunga;

print "<br>";
print "saldo tabungan saya " . $saldoakhir. "<br>";

//tipe data float
$x = 10.365;

print "<br>";
var_dump($x);

//tipe data boolean
$a = true;

print "<br>";
print "<br>";
var_dump($a);

//tipe data array

$cars = array("mitsubishi","ford","toyota");
var_dump($cars);
    ?>
</body>
</html>