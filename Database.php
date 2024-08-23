<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Kelas_php";

try {
    // untuk koneksi ke database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // jika ada error akan menjadi exception dan akan ditangkap catch
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Berhasil terkoneksi <br>";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit(); // Keluar jika terjadi kesalahan pada koneksi
}

// contoh insert php
$queryMasukkanCustomer = "INSERT INTO costumer(nama, email, alamat) VALUES ('nisa', 'anisa@gmail.com', 'jl.kedondong IV')";
$stmt = $conn->prepare($queryMasukkanCustomer);
$stmt->execute();
echo "Data berhasil dimasukkan";

//contoh read atau select di php
$queryAmbilcustomer = "SELECT * FROM costumer"; // Pastikan nama tabel benar
$stmt = $conn->prepare($queryAmbilcustomer);

try {
    $stmt->execute();
    
    foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $customer) {
        echo htmlspecialchars($customer["nama"]." | ". $customer["email"]. " | ". $customer["alamat"]) . "<br>"; // Menghindari XSS
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); // Menangani error
}

//contoh update
$queryEditcustomer = "update costumer set nama='mawar', email='mawar@gmail.com', alamat='jl.merak' where id= 2";
$stmt = $conn -> prepare($queryEditcustomer);
$stmt->execute();
echo "update berhasil";

//contoh delet

$queryHapuscustomer = "delete from costumer WHERE nama='nisa'";
$stmt = $conn->prepare($queryHapuscustomer);
$stmt->execute();
echo "delet berhasil";
?>

