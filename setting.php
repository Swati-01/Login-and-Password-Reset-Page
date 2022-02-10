<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password-reset-Page</title>
    <link rel="stylesheet" type="text/css" href="style-1.css">
</head>
<body>
    <form action="setting_script.php" method="post">
        <h2>Change-Password</h2>
        <?php 
        if (isset($_GET['error'])) { 
        ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Old Password</label>
            <input type="password" name="old password" placeholder="Old Password"><br>
            <label>New Password</label>
            <input type="password" name="new password" placeholder="New Password"><br> 
            <label>Re-Type New Password</label>
            <input type="password" name="new password" placeholder="Re-Type New Password"><br> 
    </form>
</body>
</html>