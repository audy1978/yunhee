<?php
    session_start();
    include 'db/database.php';
       
	
	
	
	$contact = $_POST['contact'];
        $customer = $_POST['customer'];
        $tel = $_POST['tel'];
	$file = $_POST['file'];
	$filecode = $_POST['filecode'];
        $jobs_order1 = $_POST['jobs_order1'];
        $jobs_order2 = $_POST['jobs_order2'];
        $jobs_order3 = $_POST['jobs_order3'];
        $jobs_order4 = $_POST['jobs_order4'];
        $jobs_order5 = $_POST['jobs_order5'];
        $jobs_order6 = $_POST['jobs_order6'];
        
        $pur_cat = $_POST['sale_paper_cat'];
        
        //new edit 
                           $pur_pumk_check       = $_POST['ch_pumk'];
        
                          $R1_width       = $_POST['R1_width'];
                           $R1_lenght     = $_POST['R1_lenght'];

                            $R2_width     = $_POST['R2_width'];
                           $R2_lenght     = $_POST['R2_lenght'];

                            $R3_width     = $_POST['R3_width'];
                          $R3_lenght      = $_POST['R3_lenght'];

                          $R4_width       = $_POST['R4_width'];
                         $R4_lenght       = $_POST['R4_lenght'];

                         $job_width_box   = $_POST['job_width_box'];
                         $job_length_box  = $_POST['job_length_box'];
                        $job_height_box   = $_POST['job_height_box'];

                          $job_note       = $_POST['job_note'];
                          
                          // read radio
                          
                          $cr_check_format  = $_POST['cr_check']; 
                          // edit 1-7-2017
                          $pur_thick_gram   = $_POST['sales_thick_gram_box'];
                          $exa_printAmont   = $_POST['sales_printAmont_box'];
                          $sales_plastic_check   = $_POST['sales_plastic_check'];
                          $pur_checkP   = $_POST['sales_check_pum'];
                          // 3.
                          $exa_3front1_type=  $_POST['drop3_1'];
                          $exa_3front2_type=  $_POST['drop3_2'];
                          $exa_3front3_type=  $_POST['drop3_3'];
                          $exa_3front4_type=  $_POST['drop3_4'];
                          
                          // 4. ลูกฟูก
                          $sales_check_LF   = $_POST['sales_check_LF'];
                          $exa_4LF_layer =  $_POST['sales_4LF_layer_box'];
                          $sales_4LF_type =  $_POST['sales_4LF_type_box'];
                          
                          // 5. ปั้มนูน ปั้มขาด
                          $sales_check_pumNoon =  $_POST['sales_check_pumNoon'];
                          $sales_check_pumKad =  $_POST['sales_check_pumKad'];
                          $exa_PN_amount =  $_POST['sales_pumNoon_box'];
                          $exa_PY_amount =  $_POST['sales_pumKad_box'];
        // new edit
        
        
        
        $user_id = $_SESSION['user_id'];
                    	
	date_default_timezone_set('UTC');
	$date = date("d-m-Y");
   
   	// send e-mail  
	
	// include 'gmail.php';
	
	// send email 
		
	   
	   // end of send E-mail
	
    //อัพโหลดรูปประจำตัว 
    if (is_uploaded_file($_FILES['image_job']['tmp_name'])) {
      //  $new_image_name = 'news_'.uniqid().".".pathinfo(basename($_FILES['image_job']['name']), PATHINFO_EXTENSION);
      
        $new_image_name = $filecode.$_FILES['image_job']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
       $new_file_upload  = iconv('UTF-8','windows-874',$new_image_name);
        
       $image_upload_path = "./jobs/img/".$new_file_upload;
        move_uploaded_file($_FILES['image_job']['tmp_name'],$image_upload_path);
    } else {
        $new_image_name = "";
    }
    
    $sql = "INSERT INTO `tb_jobs` (`user_id`, `jobs_date`, `jobs_contact`,`jobs_customer`,`jobs_tel`,`jobs_file`,`jobs_filecode`,`jobs_image`,`jobs_status`,`jobs_order1`,`jobs_order2`,`jobs_order3`,`jobs_order4`,`jobs_order5`,`jobs_order6`,`exa_R1A`,`exa_R1AY`,`exa_R2A`,`exa_R2Y`,`exa_R3A`,`exa_R3Y`,`exa_R4A`,`exa_R4AY`,`job_width`,`job_length`,`job_hieght`,`job_note`,`job_format`,`pur_thick_gram`,`exa_printAmont`,`sales_plastic_check`,`pur_checkP`,`exa_3front1_type`,`exa_3front2_type`,`exa_3front3_type`,`exa_3front4_type`,`sales_check_LF`,`exa_4LF_layer`,`sales_4LF_type`,`sales_check_pumNoon`,`sales_check_pumKad`,`exa_PN_amount`,`exa_PY_amount`,`pur_pumk_check`,`pur_cat`) VALUES ('$user_id','$date', '$contact','$customer','$tel','$file','$filecode','$new_image_name','รอดำเนินการ','$jobs_order1','$jobs_order2','$jobs_order3','$jobs_order4','$jobs_order5','$jobs_order6','$R1_width','$R1_lenght','$R2_width','$R2_lenght','$R3_width','$R3_lenght','$R4_width','$R4_lenght','$job_width_box','$job_length_box','$job_height_box','$job_note','$cr_check_format','$pur_thick_gram','$exa_printAmont','$sales_plastic_check','$pur_checkP','$exa_3front1_type','$exa_3front2_type','$exa_3front3_type','$exa_3front4_type','$sales_check_LF','$exa_4LF_layer','$sales_4LF_type','$sales_check_pumNoon','$sales_check_pumKad','$exa_PN_amount','$exa_PY_amount','$pur_pumk_check','$pur_cat')";
    
    $result = mysqli_query($link, $sql);
    // $errors1 = mysqli_error($link);
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
         
        echo json_encode(array('status' => 'danger','message' => $errors));
       
      
        
        }

