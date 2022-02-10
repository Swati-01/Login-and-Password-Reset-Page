<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
    <div class="topnav">
        <a href="navbar.php">Home</a>
        <a class="active" href="index.php">Login</a>
        <a href="setting.php">Settings</a>
    </div>
    <div class="form">
    <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php 
            if (isset($_GET['error'])) { 
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Username</label>
                <input type="text" name="username" placeholder="User Name"><br>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password"><br> 
                <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>