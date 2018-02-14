<?php
    session_start();
    include 'db/database.php';
       
	
	
	
	$jobs_calc_value = $_POST['paper_price_box2'];
        $jobs_id = $_SESSION['jobs_id'];
        
	
        
        
	// include 'gmail.php';
	
	// send email 
		
	   
	   // end of send E-mail

   
    
    $sql = "UPDATE tb_jobs SET jobs_calc_value='{$jobs_calc_value}'  WHERE jobs_id= 164 ";
    
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
        echo json_encode(array('status' => 'danger','message' => $errors));
    }

