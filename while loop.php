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
    echo "<h3>contoh whlie loop</h3>";

    $var = "saya sedang belajar while loop";
    $x = 1;

    while ($x < 5) {
        echo $x . " " . $var . "<br>";  // Tambahkan <br> untuk baris baru
        $x++;
    }
    ?>
</body>
</html>