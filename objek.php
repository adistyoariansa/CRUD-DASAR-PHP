<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>belajar objek</h1>

    <?php
    class buku{
        function buku ($judul, $pengarang, $jumlahHalaman){
            $this-> judul = $judul;
            $this-> pengarang = $pengarang;
            $this-> jumlahHalaman = $jumlahHalaman;
        }
    }
    $Buku1 = new Buku ("menggapai mimpi","andi",100);
    $Buku2 = new Buku("mulai bisnis makanan","abrar",300);
    
    echo $Buku1-> judul . "<br>";
    echo $Buku1-> pengarang . "<br>";
    echo $Buku1-> jumlahHalaman . "<br>" . "<br>";

    echo $Buku2-> judul . "<br>";
    echo $Buku2-> pengarang . "<br>";
    echo $Buku2-> jumlahHalaman . "<br>";
    ?>
</body>
</html>