<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location: ../");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboards</title>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        #bbtn {
            padding: 10px;
            font-size: 15;
            border-radius: 10px;
            width: 180px;
            color: white;
            background-color: #2c3e50;
            float: left;
            
        }

        #logbtn {
            padding: 10px;
            font-size: 15;
            border-radius: 10px;
            width: 180px;
            color: white;
            background-color: #2c3e50;
            float: right;
    </style>

</head>

<body>

    <div id="header">
        <button id="bbtn">Back</button>
        <button id="logbtn">Logout</button>
        <h1>Online Voting System</h1>
    </div>

    <div id="profile"></div>
    <div id="Group"></div>

</body>

</html>