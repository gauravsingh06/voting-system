<?php
include("database.php");

$name = $_POST['name'];
$number = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['img']['name'];
$tempimage = $_FILES['img']['tmp_name'];
$role = $_POST['role'];

if($password==$cpassword){

    move_uploaded_file($tempimage,"../uploads/$image");

    $insert = mysqli_query($connect, "INSERT INTO user (name, number, password, address, photo, role, status, votes) VALUES ('$name','$number','$password','$address','$image','$role',0,0)");

    if ($insert) {
        echo '
        <script>
        alert("Registration Successful!");
        window.location = "../index.php";
        </script>';

    } else {

        echo '
        <script>
        alert("Something Error");
        </script>';

    }
    
}
else {
    echo '
        <script>
        alert("Password do not match!");
        window.location = "../routes/register.php";
        </script>';
}




?>