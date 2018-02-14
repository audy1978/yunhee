<?php
    session_start();
    include 'db/database.php';
       
	
	
	
	$contact = $_POST['contact'];
        $customer = $_POST['customer'];
        $tel = $_POST['tel'];
	$file = $_POST['file'];
	$filecode = $_POST['filecode'];
        $jobs_id = $_SESSION['jobs_id'];
	
	   
   	// จำนวน order  
        $jobs_order1 = $_POST['jobs_order1'];
        $jobs_order2 = $_POST['jobs_order2'];
        $jobs_order3 = $_POST['jobs_order3'];
        $jobs_order4 = $_POST['jobs_order4'];
        $jobs_order5 = $_POST['jobs_order5'];
        $jobs_order6 = $_POST['jobs_order6'];
        
        
        
	
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
        
        // new edit
                          
                          //  edit 2-7-2017
                          
                          $pur_thick_gram   = $_POST['sales_thick_gram_box'];
                          $exa_printAmont   = $_POST['sales_printAmont_box'];
                          $sales_plastic_check   = $_POST['sales_plastic_check'];
                          $pur_checkP   = $_POST['sales_check_pum'];
                         
                          // check ถ้า พลาสติก ไม่มี การ check มา ให้ ปั้ม กับ ไม่ปั้ม ไม่มีค่า
                          
                                 if($sales_plastic_check==''){
                                     $pur_checkP='';
                                   }

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
                          
                          
                          // end 2-7-2017
                          
                           $pur_cat = $_POST['sale_paper_cat'];
                             
                          
        
	                $file_code = $_SESSION['file_code'];
        
        
        
        
        
        
        
        
         $sql_img = "SELECT jobs_image FROM tb_jobs WHERE jobs_filecode = '{$filecode}' ";
                      $result_img = mysqli_query($link, $sql_img);
                      $rows_img = mysqli_fetch_assoc($result_img);
	
    //อัพโหลดรูปประจำตัว 
    if (is_uploaded_file($_FILES['edit_image_sale']['tmp_name'])) {
       // $new_image_name = 'news_'.uniqid().".".pathinfo(basename($_FILES['edit_image_sale']['name']), PATHINFO_EXTENSION);
        $new_image_name = $filecode.$_FILES['edit_image_sale']['name'];
        
     // แปลงภาษาไทย ชื่อไฟล์
       $new_file_upload  = iconv('UTF-8','windows-874',$new_image_name);
         
        $image_upload_path = "./jobs/img/".$new_file_upload;
        move_uploaded_file($_FILES['edit_image_sale']['tmp_name'],$image_upload_path);
    } else {
         $new_image_name = $rows_img['jobs_image'];
    }
   
    
 //  $sql = "UPDATE tb_jobs SET job_format='{$cr_check_format}',job_note='{$job_note}',job_hieght='{$job_height_box}',job_length='{$job_length_box}',job_width='{$job_width_box}',exa_R4AY='{$R4_lenght}',exa_R4A='{$R4_width}',exa_R3Y='{$R3_lenght}',exa_R3A='{$R3_width}',exa_R2Y='{$R2_lenght}',exa_R2A='{$R2_width}',exa_R1AY='{$R1_lenght}',exa_R1A='{$R1_width}',jobs_contact='{$contact}',jobs_customer='{$customer}',jobs_tel='{$tel}',jobs_file='{$file}',jobs_filecode='{$filecode}',jobs_image = '{$new_image_name}', jobs_order1='{$jobs_order1}',jobs_order2='{$jobs_order2}',jobs_order3='{$jobs_order3}',jobs_order4='{$jobs_order4}',jobs_order5='{$jobs_order5}',jobs_order6='{$jobs_order6}'  WHERE jobs_id='{$jobs_id}' ";
    
       $sql = "UPDATE tb_jobs SET pur_pumk_check='{$pur_pumk_check}',exa_PY_amount='{$exa_PY_amount}',exa_PN_amount='{$exa_PN_amount}',sales_check_pumKad='{$sales_check_pumKad}',sales_check_pumNoon='{$sales_check_pumNoon}',sales_4LF_type='{$sales_4LF_type}',exa_4LF_layer='{$exa_4LF_layer}',sales_check_LF='{$sales_check_LF}',exa_3front4_type='{$exa_3front4_type}',exa_3front3_type='{$exa_3front3_type}',exa_3front2_type='{$exa_3front2_type}',exa_3front1_type='{$exa_3front1_type}',pur_checkP='{$pur_checkP}',sales_plastic_check='{$sales_plastic_check}',exa_printAmont='{$exa_printAmont}',pur_thick_gram='{$pur_thick_gram}',job_format='{$cr_check_format}',job_note='{$job_note}',job_hieght='{$job_height_box}',job_length='{$job_length_box}',job_width='{$job_width_box}',exa_R4AY='{$R4_lenght}',exa_R4A='{$R4_width}',exa_R3Y='{$R3_lenght}',exa_R3A='{$R3_width}',exa_R2Y='{$R2_lenght}',exa_R2A='{$R2_width}',exa_R1AY='{$R1_lenght}',exa_R1A='{$R1_width}',jobs_contact='{$contact}',jobs_customer='{$customer}',jobs_tel='{$tel}',jobs_file='{$file}',jobs_filecode='{$filecode}',jobs_image = '{$new_image_name}', jobs_order1='{$jobs_order1}',jobs_order2='{$jobs_order2}',jobs_order3='{$jobs_order3}',jobs_order4='{$jobs_order4}',jobs_order5='{$jobs_order5}',jobs_order6='{$jobs_order6}',pur_cat='{$pur_cat}'  WHERE jobs_id='{$jobs_id}' ";
    
    
    $result = mysqli_query($link, $sql);
    
    
    
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "รหัสไฟล์  ซ้ำ กรุณาเปลี่ยน รหัสไฟล์ ใหม่";
        echo json_encode(array('status' => 'danger','message' => $errors));
    }

