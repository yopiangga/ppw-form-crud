
<?php 

include("../config/connection.php");

if(isset($_POST['submit'])){
    $nrp = $_POST['nrp'];
    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $age = $_POST['age'];
    $address = $_POST['address'];   

    $sql = "UPDATE mahasiswa SET name='$name', gender='$gender', religion='$religion', age='$age', address='$address' WHERE nrp='$nrp'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: ../mahasiswa.php');
    } else {
        echo "gagal edit";
    }
}

?>