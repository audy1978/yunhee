<?php
    session_start();
   
    include 'db/database.php';
    $user_id = $_SESSION['user_id'];
    $NewPassword = $_POST['NewPassword'];
    $RePassword = $_POST['RePassword'];
    // check รหัสผ่านให้ตรงกัน
    
            $salt = 'tyidi3idkdislsoskdisli333lidk';
            $hash_new_password = hash_hmac('sha256', $NewPassword, $salt);

          //  $sql = "INSERT INTO `customer` (`custName`, `custAddr`, `custUsername`, `custPassword`, `custEmail`, `custTel`) "
             //       . "VALUES ('$custName', '$custAddr', '$custUsername', '$custPassword', '$custEmail', '$custTel')";
            
             $sql = "UPDATE tb_user Set user_password='$hash_new_password' WHERE user_id = '{$user_id}' ";
   
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    } else {
        header('Content-Type: application/json');
        $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ รหัสผ่านไม่ตรงกัน" . mysqli_error($link);
        echo json_encode(array('status' => 'danger','message' => $errors));
    }