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
    echo "<h3> contoh foreach </h3>";
    $daftarPeserta = array ("peserta 1","peserta 2","peserta 3", "peserta 4", "peserta 5");

    foreach ($daftarPeserta as $peserta){
        echo "ini adalah" . $peserta. "<br>";
    }
    ?>
</body>
</html>