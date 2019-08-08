<?php
require_once "../config.php";

// checking if user is logged in
if (!check_login() || !isset($_POST['action'])) {
    die;
}

switch ($_POST['action']) {
    case 'upload': //upload new image from admin
        $error = '';
        if (isset($_FILES["imageFile"])) {
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["imageFile"]["name"]);
            $file_extension = end($temporary);
            if ((($_FILES["imageFile"]["type"] == "image/png") || ($_FILES["imageFile"]["type"] == "image/jpg") || ($_FILES["imageFile"]["type"] == "image/jpeg")) && ($_FILES["imageFile"]["size"] < 2000000)//Approx. 2Mb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
                if ($_FILES["imageFile"]["error"] > 0) {
                    $error = "Error Code: " . $_FILES["imageFile"]["error"] . "";
                } else {
                    if (file_exists("../images/uploads/" . $_FILES["imageFile"]["name"])) {
                        $error = $_FILES["imageFile"]["name"] . " already exists.";
                    } else {
                        $sourcePath = $_FILES['imageFile']['tmp_name']; // Storing source path of the file in a variable
                        $targetPath = "../images/uploads/" . $_FILES['imageFile']['name']; // Target path where file is to be stored
                        if (!move_uploaded_file($sourcePath, $targetPath)) {
                            $error = 'Error moving uploaded file!';
                        } // Moving Uploaded file
                    }
                }
            } else {
                $error = 'Invalid file type or size!'; //error message 
            }
        } else {
            $error = 'No files selected!';
        }

        if ($error) echo json_encode(array('success' => false, 'error' => $error));
        else echo json_encode(array('success' => true));
        break;

    case 'delete': //deleting image file
        if (isset($_POST['file']) && file_exists('../images/uploads/' . $_POST['file'])) {
            unlink('../images/uploads/' . $_POST['file']);
        }
        break;

    case 'list': //list images for admin page
        $images = glob("../images/uploads/*.{jpg,png,jpeg}", GLOB_BRACE);
        array_multisort(array_map('filemtime', $images), SORT_NUMERIC, SORT_DESC, $images);
        include "../views/images.php";
        break;
}