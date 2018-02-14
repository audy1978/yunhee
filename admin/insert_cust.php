<?php

    include '../db/database.php';
    
    $custName = $_POST['custName'];
    $custAddr = $_POST['custAddr'];
    $custUsername = $_POST['custUsername'];
    $custPassword = $_POST['custPassword'];
    $custEmail = $_POST['custEmail'];
    $custTel = $_POST['custTel'];
    
    $sql = "INSERT INTO `customer` (`custName`, `custAddr`, `custUsername`, `custPassword`, `custEmail`, `custTel`) "
            . "VALUES ('$custName', '$custAddr', '$custUsername', '$custPassword', '$custEmail', '$custTel')";
    
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    } else {
        header('Content-Type: application/json');
        $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ " . mysqli_error($link);
        echo json_encode(array('status' => 'danger','message' => $errors));
    }