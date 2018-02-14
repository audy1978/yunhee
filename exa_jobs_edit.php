<?php
    session_start();
    include 'db/database.php';
       
	
	
	// $pur_thick_gram =  $_POST['pur_thick_gram_box'];
         $pur_size_width = $_POST['pur_size_width_box'];
	 $pur_size_length =  $_POST['pur_size_length_box'];
         $pur_lay2 = $_POST['lay_2']; 
         $pur_lay3 = $_POST['lay_3'];
        
        
              
       $exa_printAmont =  $_POST['exa_printAmont_box'];
       $exa_color = $_POST['exa_color_box'];
       
                             
            $exa_3front1_type=  $_POST['drop3_1'];
            $exa_3front1_width=  $_POST['exa_3front1_width_box'];
            $exa_3front1_lenght=  $_POST['exa_3front1_lenght_box'];
            
            $exa_3front2_type=  $_POST['drop3_2'];
            $exa_3front2_width=  $_POST['exa_3front2_width_box'];
            $exa_3front2_lenght=  $_POST['exa_3front2_lenght_box'];
            
            $exa_3front3_type=  $_POST['drop3_3'];
            $exa_3front3_width=  $_POST['exa_3front3_width_box'];
            $exa_3front3_lenght=  $_POST['exa_3front3_lenght_box'];
           
            $exa_3front4_type=  $_POST['drop3_4'];
            $exa_3front4_width=  $_POST['exa_3front4_width_box'];
            $exa_3front4_lenght=  $_POST['exa_3front4_lenght_box'];
            
            
            $exa_4checkbox=  $_POST['exa_lukf_check'];
            
            $exa_4LF_width=  $_POST['exa_4LF_width_box'];
            $exa_4LF_lenght=  $_POST['exa_4LF_lenght_box'];
            $exa_4LF_layer=  $_POST['exa_4LF_layer_box'];
            $exa_lami_width=  $_POST['exa_lami_width_box'];
            $exa_lami_lenght=  $_POST['exa_lami_lenght_box'];
          
            $exa_R1A=  $_POST['exa_R1A_box'];
            $exa_R1AY=  $_POST['exa_R1AY_box'];
            $exa_R2A=  $_POST['exa_R2A_box'];
            $exa_R2Y=  $_POST['exa_R2Y_box'];
            $exa_R3A=  $_POST['exa_R3A_box'];
            $exa_R3Y=  $_POST['exa_R3Y_box'];
            $exa_R4A=  $_POST['exa_R4A_box'];
            $exa_R4AY=  $_POST['exa_R4AY_box'];
            
            $exa_PN_R1A =  $_POST['exa_PN_R1A_box'];
            $exa_PN_R1Y =  $_POST['exa_PN_R1Y_box'];
            $exa_PN_R2A =  $_POST['exa_PN_R2A_box'];
            $exa_PN_R2Y =  $_POST['exa_PN_R2Y_box'];
            $exa_PN_R3A =  $_POST['exa_PN_R3A_box'];
            $exa_PN_R3Y =  $_POST['exa_PN_R3Y_box'];
            
            
            $exa_PN_check=  $_POST['pumN_check'];
          //  $exa_PN_amount=  $_POST['exa_PN_amount_box'];
            $exa_PY_check=  $_POST['pumY_check'];
            
            
                    
            $exa_checkP=  $_POST['exa_checkP_box'];
            
            $exa_pm =  $_POST['exa_check_PM'];
            $exa_pk=  $_POST['exa_check_PK'];
            
            
          //  $exa_Bluk=  $_POST['exa_Bluk_box'];
            $exa_bluk_pack=  $_POST['exa_bluk_pack_box'];
            $exa_PY_amount =  $_POST['exa_pumY_amount_box'];
                                 
            
           
            $exa_file_purc =  $_FILES['exa_file_purc_box'];
            
            $exa_job_note =  $_POST['exa_job_note_box'];

           
            // เตรียมข้อมูล ลบ ไฟล์แบบ
            $exa_file1_box = $_POST['exa_file1_box'];
            $exa_file2_box = $_POST['exa_file2_box'];
            $exa_file3_box = $_POST['exa_file3_box'];
            $exa_file4_box = $_POST['exa_file4_box'];
            $exa_file5_box = $_POST['exa_file5_box'];
            $exa_file6_box = $_POST['exa_file6_box'];
            $exa_file7_box = $_POST['exa_file7_box'];
            $exa_file8_box = $_POST['exa_file8_box'];
            
            // กระทุ้ง check
      
           $exa_kratung = $_POST['exa_check_kratung'];
      
          
      
      
      $file_code = $_SESSION['file_code'];
      
      
      
      // ลบไฟล์แนบ เมื่อ inputbox ว่าง
                  if ($exa_file1_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt1='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($exa_file2_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt2='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($exa_file3_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt3='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                   if ($exa_file4_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt4='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                  if ($exa_file5_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt5='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                  if ($exa_file6_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt6='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                  if ($exa_file7_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt7='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
              
                  if ($exa_file8_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set exa_fileAtt8='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }


                     // ไฟล์แนบ 1 เจ้าหน้าที่ต้วอย่าง
                      $sql_img4 = "SELECT exa_fileAtt1 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img4 = mysqli_query($link, $sql_img4);
                      $rows_img4 = mysqli_fetch_assoc($result_img4);
                      
                      
                      // ไฟล์แนบ 2 เจ้าหน้าที่ต้วอย่าง
                      $sql_img5 = "SELECT exa_fileAtt2 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img5 = mysqli_query($link, $sql_img5);
                      $rows_img5 = mysqli_fetch_assoc($result_img5);
                      
                      // ไฟล์แนบ 3 เจ้าหน้าที่ต้วอย่าง
                      $sql_img6 = "SELECT exa_fileAtt3 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img6 = mysqli_query($link, $sql_img6);
                      $rows_img6 = mysqli_fetch_assoc($result_img6);
                      
                      // ไฟล์แนบ 4 เจ้าหน้าที่ต้วอย่าง
                      $sql_img7 = "SELECT exa_fileAtt4 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img7 = mysqli_query($link, $sql_img7);
                      $rows_img7 = mysqli_fetch_assoc($result_img7);
                      
                      // ไฟล์แนบ 5 เจ้าหน้าที่ต้วอย่าง
                      $sql_img8 = "SELECT exa_fileAtt5 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img8 = mysqli_query($link, $sql_img8);
                      $rows_img8 = mysqli_fetch_assoc($result_img8);
                      
                      // ไฟล์แนบ 6 เจ้าหน้าที่ต้วอย่าง
                      $sql_img9 = "SELECT exa_fileAtt6 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img9 = mysqli_query($link, $sql_img9);
                      $rows_img9 = mysqli_fetch_assoc($result_img9);
                      
                      // ไฟล์แนบ 7 เจ้าหน้าที่ต้วอย่าง
                      $sql_img10 = "SELECT exa_fileAtt7 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img10 = mysqli_query($link, $sql_img10);
                      $rows_img10 = mysqli_fetch_assoc($result_img10);
                      
                      // ไฟล์แนบ 8 เจ้าหน้าที่ต้วอย่าง
                      $sql_img11 = "SELECT exa_fileAtt8 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img11 = mysqli_query($link, $sql_img11);
                      $rows_img11 = mysqli_fetch_assoc($result_img11);
                      
      
    // ไฟล์แนบ 1 เจ้าหน้าที่ตัวอย่าง
    if (is_uploaded_file($_FILES['exa_file1_purc_box']['tmp_name'])) {
      //  $new_file4 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file1_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file4 = $file_code.$_FILES['exa_file1_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file4_upload  = iconv('UTF-8','windows-874',$new_file4);
        
        $image_upload_path4 = "./jobs/exa_file/".$new_file4_upload;
        move_uploaded_file($_FILES['exa_file1_purc_box']['tmp_name'],$image_upload_path4);
    }else {
        $new_file4 = $rows_img4['exa_fileAtt1'];
    }  
    
    // ไฟล์แนบ 2 เจ้าหน้าที่ตัวอย่าง
    if (is_uploaded_file($_FILES['exa_file2_purc_box']['tmp_name'])) {
      //  $new_file5 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file2_purc_box']['name']), PATHINFO_EXTENSION);
       
         $new_file5 = $file_code.$_FILES['exa_file2_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file5_upload  = iconv('UTF-8','windows-874',$new_file5);
        
        $image_upload_path5 = "./jobs/exa_file/".$new_file5_upload;
        move_uploaded_file($_FILES['exa_file2_purc_box']['tmp_name'],$image_upload_path5);
    }else {
        $new_file5 = $rows_img5['exa_fileAtt2'];
    }  
    
    // ไฟล์แนบ 3 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file3_purc_box']['tmp_name'])) {
       // $new_file6 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file3_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file6 = $file_code.$_FILES['exa_file3_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file6_upload  = iconv('UTF-8','windows-874',$new_file6);
        
        $image_upload_path6 = "./jobs/exa_file/".$new_file6_upload;
        move_uploaded_file($_FILES['exa_file3_purc_box']['tmp_name'],$image_upload_path6);
    }else {
        $new_file6 = $rows_img6['exa_fileAtt3'];
    }  
    
    // ไฟล์แนบ 4 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file4_purc_box']['tmp_name'])) {
      //  $new_file7 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file4_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file7 = $file_code.$_FILES['exa_file4_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file7_upload  = iconv('UTF-8','windows-874',$new_file7);
        
        $image_upload_path7 = "./jobs/exa_file/".$new_file7_upload;
        move_uploaded_file($_FILES['exa_file4_purc_box']['tmp_name'],$image_upload_path7);
    }else {
        $new_file7 = $rows_img7['exa_fileAtt4'];
    }  
    
    // ไฟล์แนบ 5 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file5_purc_box']['tmp_name'])) {
      //  $new_file8 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file5_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file8 = $file_code.$_FILES['exa_file5_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file8_upload  = iconv('UTF-8','windows-874',$new_file8);
        
        $image_upload_path8 = "./jobs/exa_file/".$new_file8;
        move_uploaded_file($_FILES['exa_file5_purc_box']['tmp_name'],$image_upload_path8);
    }else {
        $new_file8 = $rows_img8['exa_fileAtt5'];
    }  
   
    // ไฟล์แนบ 6 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file6_purc_box']['tmp_name'])) {
      //  $new_file9 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file6_purc_box']['name']), PATHINFO_EXTENSION);
      
        $new_file9 = $file_code.$_FILES['exa_file6_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file9_upload  = iconv('UTF-8','windows-874',$new_file9);
        
        $image_upload_path9 = "./jobs/exa_file/".$new_file9_upload;
        move_uploaded_file($_FILES['exa_file6_purc_box']['tmp_name'],$image_upload_path9);
    }else {
        $new_file9 = $rows_img9['exa_fileAtt6'];
    }  
    
     // ไฟล์แนบ 7 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file7_purc_box']['tmp_name'])) {
      //  $new_file10 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file7_purc_box']['name']), PATHINFO_EXTENSION);
       
        $new_file10 = $file_code.$_FILES['exa_file7_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file10_upload  = iconv('UTF-8','windows-874',$new_file10);
        
        $image_upload_path10 = "./jobs/exa_file/".$new_file10_upload;
        move_uploaded_file($_FILES['exa_file7_purc_box']['tmp_name'],$image_upload_path10);
    }else {
        $new_file10 = $rows_img10['exa_fileAtt7'];
    } 
    
       // ไฟล์แนบ 8 เจ้าหน้าที่ตัวอย่าง
    
    if (is_uploaded_file($_FILES['exa_file8_purc_box']['tmp_name'])) {
       // $new_file11 = 'news_'.uniqid().".".pathinfo(basename($_FILES['exa_file8_purc_box']['name']), PATHINFO_EXTENSION);
       
         $new_file11 = $file_code.$_FILES['exa_file8_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file11_upload  = iconv('UTF-8','windows-874',$new_file11);
        
        $image_upload_path11 = "./jobs/exa_file/".$new_file11_upload;
        move_uploaded_file($_FILES['exa_file8_purc_box']['tmp_name'],$image_upload_path11);
    }else {
        $new_file11 = $rows_img11['exa_fileAtt8'];
    }
    
    
    // $sql = "UPDATE tb_jobs SET pur_thick_gram='{$pur_thick_gram}',pur_size_width='{$pur_size_width}',pur_size_length='{$pur_size_length}',pur_lay2='{$lay_2}'";
       
       $sql = "UPDATE tb_jobs SET exa_kratung ='{$exa_kratung}',exa_job_note='{$exa_job_note}',exa_printAmont='{$exa_printAmont}',exa_color='{$exa_color}',exa_3front1_type='{$exa_3front1_type}',exa_3front1_width='{$exa_3front1_width}'"
    . ",exa_3front1_lenght='{$exa_3front1_lenght}',exa_3front2_type ='{$exa_3front2_type}',exa_3front2_width='{$exa_3front2_width}' "
    . ",exa_3front2_lenght='{$exa_3front2_lenght}',exa_3front3_type ='{$exa_3front3_type}',exa_3front4_width ='{$exa_3front4_width}',exa_3front4_lenght ='{$exa_3front4_lenght}'"
    . ",exa_3front3_width ='{$exa_3front3_width}',exa_3front3_lenght ='{$exa_3front3_lenght}',exa_PN_R1A ='{$exa_PN_R1A}',exa_PN_R1Y ='{$exa_PN_R1Y}',exa_PN_R2A ='{$exa_PN_R2A}',exa_PN_R2Y ='{$exa_PN_R2Y}',exa_PN_R3A ='{$exa_PN_R3A}',exa_PN_R3Y ='{$exa_PN_R3Y}'"
    . ",exa_3front4_type ='{$exa_3front4_type}',exa_R1A ='{$exa_R1A}',exa_R1AY ='{$exa_R1AY}',exa_R2A ='{$exa_R2A}',exa_R2Y ='{$exa_R2Y}',exa_R3A ='{$exa_R3A}',exa_R3Y ='{$exa_R3Y}',exa_R4A ='{$exa_R4A}',exa_R4AY ='{$exa_R4AY}'"
    . ",exa_PY_amount ='{$exa_PY_amount}',exa_4checkbox ='{$exa_4checkbox}'"
    . ",pur_lay3 ='{$pur_lay3}',pur_lay2 ='{$pur_lay2}',pur_size_length ='{$pur_size_length}',pur_size_width ='{$pur_size_width}',exa_4LF_width ='{$exa_4LF_width}',exa_4LF_lenght ='{$exa_4LF_lenght}'"
    . ",exa_4LF_layer ='{$exa_4LF_layer}',exa_lami_width ='{$exa_lami_width}' ,exa_lami_lenght ='{$exa_lami_lenght}'"
   . ",exa_fileAtt8 ='{$new_file11}',exa_fileAtt7 ='{$new_file10}',exa_fileAtt6 ='{$new_file9}',exa_fileAtt5 ='{$new_file8}',exa_fileAtt4 ='{$new_file7}',exa_fileAtt1 ='{$new_file4}',exa_fileAtt2 ='{$new_file5}',exa_fileAtt3 ='{$new_file6}'"
   . ",exa_R2Y ='{$exa_R2Y}' ,exa_PN_check ='{$exa_PN_check}',exa_PY_check ='{$exa_PY_check}',exa_checkP ='{$exa_checkP}',exa_pm ='{$exa_pm}',exa_pk ='{$exa_pk}',exa_bluk_pack ='{$exa_bluk_pack}',exa_file_purc ='{$new_image_name}' WHERE jobs_filecode = '{$file_code}' ";
   
   
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' =>  'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "ผิดพลาด กรุณาเปลี่ยน แก้ไข ใหม่";
        echo json_encode(array('status' => 'danger','message' => mysqli_error($link)));
        
    }

