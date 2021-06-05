<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div id="header">
        <h1>Register on Voting System</h1>
    </div>
   

    <div id="bodys">
        <h2 id="title">Registration Page</h2>
        <form action="../api/regisapi.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Your Name">
            <input type="text" name="number" placeholder="Mobile Number"><br><br>
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="cpassword" placeholder="Confirm Password"><br><br>
            <input type="text" name="address" placeholder="Address" style="width: 22%;"><br><br>
            <input type="file" name="img" style="text-align: center; width: 22%"><br><br>

            Select Role: <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="1">Group</option>
            </select><br><br>
            <button id="rbtn" type="submit" >Register</button><br><br>
            Already a User? <a href="../index.php">Login</a>
        </form>

    </div>


</body>

</html>