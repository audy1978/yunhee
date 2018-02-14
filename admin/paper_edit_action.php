<?php
    session_start();
    include '../db/database.php';
       
	
	
	
	 $paper_cat = $_POST['paper_cat'];
        $paper_seller = $_POST['paper_seller'];
        $paper_band = $_POST['paper_brand'];
	$paper_thickness = $_POST['paper_thickness'];
	$paper_size = $_POST['paper_size'];
	$paper_type = $_POST['paper_type'];
        $paper_price = $_POST['paper_price'];
        
	
        
	                $id_edit = $_SESSION['id'];
        
        
   
    
 //  $sql = "UPDATE tb_jobs SET job_format='{$cr_check_format}',job_note='{$job_note}',job_hieght='{$job_height_box}',job_length='{$job_length_box}',job_width='{$job_width_box}',exa_R4AY='{$R4_lenght}',exa_R4A='{$R4_width}',exa_R3Y='{$R3_lenght}',exa_R3A='{$R3_width}',exa_R2Y='{$R2_lenght}',exa_R2A='{$R2_width}',exa_R1AY='{$R1_lenght}',exa_R1A='{$R1_width}',jobs_contact='{$contact}',jobs_customer='{$customer}',jobs_tel='{$tel}',jobs_file='{$file}',jobs_filecode='{$filecode}',jobs_image = '{$new_image_name}', jobs_order1='{$jobs_order1}',jobs_order2='{$jobs_order2}',jobs_order3='{$jobs_order3}',jobs_order4='{$jobs_order4}',jobs_order5='{$jobs_order5}',jobs_order6='{$jobs_order6}'  WHERE jobs_id='{$jobs_id}' ";
    
       $sql = "UPDATE tb_paper2 SET paper_cat='{$paper_cat}',paper_seller='{$paper_seller}',paper_band='{$paper_band}',paper_thickness='{$paper_thickness}',paper_size='{$paper_size}',paper_type='{$paper_type}',paper_price='{$paper_price}'  WHERE paper_id='{$id_edit}' ";
    
    
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
        echo json_encode(array('status' => 'danger','message' => $errors));
    }

