<?php
$conn = mysqli_connect("localhost", "root", "", "base");
if(!$conn){
    die("connection failed");
}

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM account WHERE mobile='$mobile' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    header("Location: landing.html");
    exit();
}else{
    echo "Login Failed";
}
mysqli_close($conn);

?>