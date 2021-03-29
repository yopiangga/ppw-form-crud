<?php 

include("../config/connection.php");

if(isset($_GET['nrp'])){

    $nrp = $_GET['nrp'];
    $sql = "DELETE FROM mahasiswa where nrp=$nrp";

    $query = mysqli_query($conn, $sql);

    if($sql){
        header('Location: ../mahasiswa.php');
    }else {
        echo "gagal delete";
    }
}

?>