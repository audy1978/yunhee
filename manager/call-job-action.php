
<?php
		
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

// $file_code = $_POST["file_code"];

$file_code = '23';
		
		include 'db/database.php';
		
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code'";
        $result_filecode = mysqli_query($link,$qry_filecode);
     
            $row_filecode = mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            $jobs_customer = $row_filecode['jobs_customer'];
            $jobs_file = $row_filecode['jobs_file'];
            mysqli_free_result($result_filecode);
           
        
       if($result_filecode) {
          header('Content-Type: application/json');

	// $arr = array('status' => 'success',"job_customer"=>$jobs_customer,"job_file"=>$jobs_file);

   // 	echo json_encode($arr);
		
	 echo json_encode(array('status' => 'success','job_file'=>$jobs_file));	  
            
        }  else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
        echo json_encode(array('status' => 'danger','message' => $errors));
    }
 
        
	
         
         
         
         
         
         
         
         