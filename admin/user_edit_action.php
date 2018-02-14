<?php
    session_start();
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
	
        
	                $id_edit = $_SESSION['id'];
        
        
   
    
 //  $sql = "UPDATE tb_jobs SET job_format='{$cr_check_format}',job_note='{$job_note}',job_hieght='{$job_height_box}',job_length='{$job_length_box}',job_width='{$job_width_box}',exa_R4AY='{$R4_lenght}',exa_R4A='{$R4_width}',exa_R3Y='{$R3_lenght}',exa_R3A='{$R3_width}',exa_R2Y='{$R2_lenght}',exa_R2A='{$R2_width}',exa_R1AY='{$R1_lenght}',exa_R1A='{$R1_width}',jobs_contact='{$contact}',jobs_customer='{$customer}',jobs_tel='{$tel}',jobs_file='{$file}',jobs_filecode='{$filecode}',jobs_image = '{$new_image_name}', jobs_order1='{$jobs_order1}',jobs_order2='{$jobs_order2}',jobs_order3='{$jobs_order3}',jobs_order4='{$jobs_order4}',jobs_order5='{$jobs_order5}',jobs_order6='{$jobs_order6}'  WHERE jobs_id='{$jobs_id}' ";
    
   if($userPassword !=''){  
  $sql = "UPDATE tb_user SET user_username='{$userName}',user_password='{$hash_userPassword}',user_fullname='{$userFullname}',user_tel='{$user_tel}',user_email='{$user_email}',user_level='{$user_level}',user_picture='{$new_image_name}'  WHERE user_id='{$id_edit}' ";
   
  
  }else{
     $sql = "UPDATE tb_user SET user_username='{$userName}',user_fullname='{$userFullname}',user_tel='{$user_tel}',user_email='{$user_email}',user_level='{$user_level}',user_picture='{$new_image_name}'  WHERE user_id='{$id_edit}' ";
     
   }
    
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
        echo json_encode(array('status' => 'danger','message' => $errors));
    }

