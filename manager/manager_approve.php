<?php
    session_start();
    include 'db/database.php';
       
	
	
	
          
                                       
      $file_code = $_SESSION['file_code'];
        
               
    
    
    // $sql = "UPDATE tb_jobs SET pur_thick_gram='{$pur_thick_gram}',pur_size_width='{$pur_size_width}',pur_size_length='{$pur_size_length}',pur_lay2='{$lay_2}'";
       
       $sql = "UPDATE tb_jobs SET  jobs_status ='อนุมัติ' WHERE jobs_filecode = '{$file_code}'";
       
      
       $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' =>  'อนุมัติงานเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "ผิดพลาด กรุณาตรวจสอบ หรือ ติดต่อ  Admin";
        echo json_encode(array('status' => 'danger','message' => mysqli_error($link)));
        
    }

