<?php
if(isset($_FILES['image'])){
    $target_dir = "C:/"; // Directory where you want to store uploaded images
    $target_file = $target_dir . basename($_FILES['image']['name']); // Full path to the uploaded image file

    // Check if the file is an actual image or a fake image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check !== false) {
        // The file is an image
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
            // File uploaded successfully
            echo "The file ". basename($_FILES['image']['name']). " has been uploaded.";
        } else {
            // Error uploading file
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // The file is not an image
        echo "File is not an image.";
    }
}
?>
