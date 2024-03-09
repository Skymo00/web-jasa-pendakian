<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "web-pendakian";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$email = $_POST['email'];
$paket = $_POST['paket'];
$tujuan = $_POST['tujuan'];

// Insert data into database
$sql = "INSERT INTO pendaftar (nama, nomor, email, paket, tujuan) VALUES ('$nama', '$nomor', '$email', '$paket', '$tujuan')";

// Debugging
echo "Nama: " . $nama . "<br>";
echo "Nomor: " . $nomor . "<br>";
echo "Email: " . $email . "<br>";
echo "Paket: " . $paket . "<br>";
echo "Tujuan: " . $tujuan . "<br>";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "Failed to connect to MySQL: " . $conn->connect_error;


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$conn->close();
?>
