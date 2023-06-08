<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">

        <div class="logged-user">
            <h1>
                Hello, <?php echo $_SESSION['name']; ?>
            </h1>
            <a href="logout.php" class="logout">Logout</a>
        </div>
        
        <div class="about">
            <h1 class="klmpk"> Kelas A <br> Kelompok: 6</h1>
            
            <ul>
                <li>
                    <p class="nama-kel">Patrick Gustavo Bravy Walujan</p>
                    <p class="nim">20021106121</p>
                </li>
                
                <li>
                    <p class="nama-kel">GRACIA AURELIA FLORENCIA RORI</p>
                    <p class="nim">210211060153</p>
                </li>
                
                <li>
                    <p class="nama-kel">ADJIE CHANDRA ARBIE</p>
                    <p class="nim">20021106044</p>
                </li>

                <li>
                    <p class="nama-kel">VIRGIE RIZKY FAZRAH POSUMAH</p>
                    <p class="nim">210211060200</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

<?php

} else {
    header("Location: index.php");
    exit();
}

?>