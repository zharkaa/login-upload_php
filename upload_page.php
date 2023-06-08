<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Upload Files</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">

    <section>
        <div class="ctn-upload container p-5">
            
            <div class="row mb-5 text-center text-black">
                <div class="col-lg-10 mx-auto">
                <h1>
                    Hello, <?php echo $_SESSION['name']; ?>
                </h1>
                <button class="btn btn-primary ">
                    <a href="logout.php" class="logout text-decoration-none text-light">Logout</a>
                </button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="p-5 bg-white shadow rounded-lg"><img src="img/img.png" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">
                    
                        <label class="form-label" for="customFile">Default file input example</label>

                        <input type="file" name="image" class="form-control" />

                        <input type="submit" name="submit" value="Upload" class="btn btn-primary my-3">
                        <?php
                        if (isset($_GET['error'])): ?>
                            <p>
                                <?php echo $_GET['error']; ?>
                            </p>
                    <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</body>
</html>

<?php

} else {
    header("Location: index.php");
    exit();
}

?>