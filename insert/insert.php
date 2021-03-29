
<?php 

include("../config/connection.php");

if(isset($_POST['submit'])){
    $nrp = $_POST['nrp'];
    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $age = $_POST['age'];
    $address = $_POST['address'];   

    $sql = "INSERT INTO mahasiswa (nrp, name, gender, religion, age, address) VALUE ('$nrp', '$name', '$gender', '$religion', '$age', '$address')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: ../mahasiswa.php');
    } else {
        echo "gagal submit";
    }
}

?>