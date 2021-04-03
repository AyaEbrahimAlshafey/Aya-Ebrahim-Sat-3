<?php 

session_start();

if(isset($_POST['submit'])){

    $file=$_FILES['file'];

    $fileName=$file['name'];
    $fileType=$file['type'];
    $fileTmpName=$file['tmp_name'];
    $fileErroe=$file['error'];
    $fileSize=$file['size'];

    $extension= pathinfo($fileName , PATHINFO_EXTENSION);
    $fileNewName= uniqid().".".$extension;

    $errors=[];

    if($extension != "json"){

        $errors[]="Error of Extension";
    }else{
        move_uploaded_file($fileTmpName,"file/$fileNewName");
    }

    $readfile=fopen("file/$fileNewName","r");
    $data=fread($readfile,filesize("file/$fileNewName"));
    $_SESSION['data']=json_decode($data);
    header("Location:display.php");

}



?>