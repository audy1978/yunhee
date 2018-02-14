<?php

    include '../db/database.php';
    
        $paper_cat = $_POST['paper_cat'];
        $paper_seller = $_POST['paper_seller'];
        $paper_band = $_POST['paper_brand'];
	$paper_thickness = $_POST['paper_thickness'];
	$paper_size = $_POST['paper_size'];
	$paper_type = $_POST['paper_type'];
        $paper_price = $_POST['paper_price'];
        
        
   
  
    
    $sql = "INSERT INTO `tb_paper2` (`paper_cat`, `paper_seller`, `paper_band`,`paper_thickness`,`paper_size` ,`paper_type`,`paper_price`) VALUES ('$paper_cat', '$paper_seller', '$paper_band', '$paper_thickness','$paper_size','$paper_type','$paper_price')";
    
    $result = mysqli_query($link, $sql);
    
    if ($result) {
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    } else {
        header('Content-Type: application/json');
        $errors = "Username ซ้ำ กรุณาเปลี่ยน Username ใหม่" . mysqli_error($link);
        echo json_encode(array('status' => 'danger','message' => $errors));
    }