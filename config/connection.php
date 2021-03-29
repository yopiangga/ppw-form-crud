
<?php 

$hostname   = "localhost";
$username   = "root";
$password   = "";
$db_name    = "ppw_form"; 

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if(mysqli_connect_error()){
    echo "Koneksi database gagal gan!";
}

?>