<?php

    include '../db/database.php';
    
    $prodTypeID = $_POST['prodTypeID'];
    $prodTypeName = $_POST['prodTypeName'];
    
    
    $sql = "INSERT INTO `product_type` (`prodTypeID`, `prodTypeName`) VALUES ('$prodTypeID', '$prodTypeName')";
    
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        //header("Location: product_type.php");
        //echo "บันทึกเรียบร้อยแล้ว";
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    } else {
        header('Content-Type: application/json');
        $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ " . mysqli_error($link);
        echo json_encode(array('status' => 'danger','message' => $errors));
        //echo "รหัสประเภทสินค้าซ้ำกัน";
        //echo mysqli_error($link);
    }