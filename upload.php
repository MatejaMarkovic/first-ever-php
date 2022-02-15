<?php
include_once 'conn.php';
$id = $_SESSION['id'];
echo $_SESSION['id'];  

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize <1000000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = "Images/$fileNameNew";
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE korisnik SET status=0 WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                header("Location: profile.php"); 
            }
            else{
                echo "File size is too big.";
            }

        }
        else{
            echo "There was an error uploading the file.";
        }
    }
    else{
        echo "You cannot upload that file type.";
    }
    
}
?>