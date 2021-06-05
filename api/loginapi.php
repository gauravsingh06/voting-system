<?php
session_start();
include('database.php');

$number = $_POST['number'];
$password = $_POST['password'];
$role = $_POST['role'];

$matchdata = mysqli_query($connect, "SELECT * FROM user WHERE number='$number' AND password='$password' AND role='$role'");

if(mysqli_num_rows($matchdata)>0){

    $userdata = mysqli_fetch_array($matchdata);
    $group = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
    $groupdata = mysqli_fetch_all($group, MYSQLI_ASSOC);
    
    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupdata'] = $groupdata;

    echo '
    <script>
    window.location = "../routes/dashboard.php";
    </script>';
    
}
else{
    echo '
    <script>
    alert("User not Found!");
    window.location = "../index.php";
    </script>';
}


?>