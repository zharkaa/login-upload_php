<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>LOGIN</h2>

        <?php 
            if (isset($_GET['error'])) { 
        ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php 
            } 
        ?>
        <label for="">Username</label>
        <input type="text" name="uname" placeholder="Username"> <br>

        <label for="">Password</label>
        <input type="password" name="pass" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>