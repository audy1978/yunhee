<?php

    include '../db/database.php';
    
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userFullname = $_POST['userFullname'];
	$user_tel = $_POST['user_tel'];
	$user_email = $_POST['user_email'];
	$user_level = $_POST['user_level'];
    
    //เข้ารหัส Password
    //$salt = 'tikde78uj4ujuhlaoikiksakeidke';
	$salt = 'tyidi3idkdislsoskdisli333lidk';
    $hash_userPassword = hash_hmac('sha256', $userPassword, $salt);
    
    //อัพโหลดรูปประจำตัว 
    if (is_uploaded_file($_FILES['userPicture']['tmp_name'])) {
        $new_image_name = 'news_'.uniqid().".".pathinfo(basename($_FILES['userPicture']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "./dist/img/".$new_image_name;
        move_uploaded_file($_FILES['userPicture']['tmp_name'],$image_upload_path);
    } else {
        $new_image_name = "";
    }
    
    $sql = "INSERT INTO `tb_user` (`user_username`, `user_password`, `user_fullname`,`user_email`,`user_tel` ,`user_level`,`user_picture`,`user_isActive`) VALUES ('$userName', '$hash_userPassword', '$userFullname', '$user_email','$user_tel','$user_level','$new_image_name','1')";
    
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    } else {
        header('Content-Type: application/json');
        $errors = "Username ซ้ำ กรุณาเปลี่ยน Username ใหม่" ;
        echo json_encode(array('status' => 'danger','message' => $errors));
    }