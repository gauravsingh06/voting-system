<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: Voting System</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div id="header">
        <h1>Online Voting System</h1>
    </div>

    <div id="bodys">
        <h2 id="title">Login Page</h2>
        <form action="api/loginapi.php" method="post">
            <input type="text" name="number" placeholder="Mobile Number"><br><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="lbtn" type="submit">Login</button><br><br>
            Already Users? <a href="routes/register.php">Register</a>
        </form>
    </div>


</body>

</html>