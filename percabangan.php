<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> pengkondisian</h1>
    <?php
    $umur = 15;
    $jenisKelamin = "laki-laki";
    $sudahMenikah = true;

    if($sudahMenikah and $umur > 17){
        echo "sudah bisa memiliki sim";
    }else if($jenisKelamin == "laki-laki"){
        echo "bisa memiliki sim";
    }
    else{
        echo "belum bisa memiliki sim";
    }
    ?>
</body>
</html>