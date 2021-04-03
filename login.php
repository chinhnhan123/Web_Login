<?php
session_start();
include 'database.php';
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "SELECT * FROM user where name = '$username' AND password ='$password' ";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);// w3

if($count == 0){
    header('location: index.php');
}
else{
    $_SESSION['login_user'] = $row['name'];
    header('location: main.php');

}
echo($username);
echo($password);
?>