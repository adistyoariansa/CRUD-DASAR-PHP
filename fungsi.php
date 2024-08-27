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
    function lihatNama($nama){
        echo "namasaya adalah $nama <br>";
    }
    lihatNama ("luqman");
    lihatNama("lulu");

    ?>

    <?php
    echo "<h1>contoh fungsi ke 2</h1> <br>";
    function cetakString($string, $berapaKali){
    for($x = 0; $x< $berapaKali; $x++){
        echo "$string <br>";
    }
    }
    cetakString("saya belum makan", 5);
    ?>

    <?php
    echo "<h1>contoh fungsi ke 3</h1> <br>";
    function hitungGaji($gajiAwal){
     $gajiAkhir = $gajiAwal - ($gajiAwal*10/100);
     $gajiAkhir = $gajiAkhir + 500000;
     return $gajiAkhir;
    }
    echo hitungGaji (1000000). "<br>";
    echo hitungGaji (10000000);
    ?>
</body>
</html>