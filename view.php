<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .alb {
            width: 200px;
            height: 200px;
            padding: 5px;
        }

        .alb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: black;
            display: block;
            padding: 0px 10px 10px 10px;
        }

        .alb-docs p {
            display: flex;
            margin-left: 10px;
            font-weight: bold;
            margin-bottom: 0;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
    
    <a href="upload_page.php">
        <button type="button" class="btn btn-primary">&#8592;</button>
    </a>

    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) > 0) {
            while ($image = mysqli_fetch_assoc($res)) {
                $image_url = $image['image_url'];
                $file_extension = strtolower(pathinfo($image_url, PATHINFO_EXTENSION));
                
                if (in_array($file_extension, array('jpg', 'jpeg', 'png'))) {
                    // Display image using img tag
    ?>
                    <div class="alb">
                        <img src="uploads/<?=$image_url?>" alt="">
                    </div>
    <?php
                } else {
                    // Display link to download PDF or DOCX file
    ?>
                <div class="alb-docs">
                        <p>Download: </p>
                        <a href="uploads/<?=$image_url?>" download><?=$image_url?></a>
                    </div>
    <?php
                }
            }
        }
    ?>
</body>
</html>

