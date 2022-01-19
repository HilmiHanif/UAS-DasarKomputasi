<?php
$koneksi = mysqli_connect("localhost", "root", "", "contactme");


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage']; 

$query = "INSERT INTO my_portofolio VALUES('$name','$email','$phone','$massage')";

mysqli_query($koneksi, $query);

if (isset($_POST["massage"])){
    header('Location: index.php');
    exit;
  }

?>