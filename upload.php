<?php
if (isset($_POST['submit']) && isset($_FILES['image'])) {
    include "db_conn.php";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if ($error === 0) {
        if ($file_size > 1024000) {
            $em = "Sorry, your file is too large.";
            header("Location: upload_page.php?error=$em");
            exit;
        }

        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);

        $allowed_exs = array("jpg", "jpeg", "png", "pdf", "docx");

        if (in_array($file_ex_lc, $allowed_exs)) {
            $new_file_name = uniqid("FILE-", true) . '.' . $file_ex_lc;
            $file_upload_path = 'uploads/' . $new_file_name;
            move_uploaded_file($tmp_name, $file_upload_path);

            // Insert into Database
            $sql = "INSERT INTO images (image_url) VALUES ('$new_file_name')";
            mysqli_query($conn, $sql);
            header("Location: view.php?uploadsuccess");
            exit;
        } else {
            $em = "You can't upload files of this type";
            header("Location: upload_page.php?error=$em");
            exit;
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: upload_page.php?error=$em");
        exit;
    }
} else {
    header("Location: upload_page.php");
    exit;
}
?>
