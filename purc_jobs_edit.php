
<?php 
    session_start();
    include 'db/database.php';
       
	
	
	$pur_offersale      = $_POST['paper_price_box'];
        
	// $pur_thick_gram = $_POST['pur_thick_gram_box'];
        // $pur_size_width = $_POST['pur_size_width_box'];
        // $pur_size_length = $_POST['pur_size_length_box'];
        // $lay_2 = $_POST['lay_2'];
          
        
       //  $pur_3type = $_POST['pur_3type_box'];
       
       // $pur_3fwidth1 = $_POST['pur_3fwidth_box'];
      //  $pur_3flength1 = $_POST['pur_3flength_box'];
      //  $pur_3type2 = $_POST['pur_3type2_box'];
      //  $pur_3fwidth2 = $_POST['pur_3fwidth_box2'];
      //  $pur_3flength2 = $_POST['pur_3flength_box2'];
      //  $pur_3type3 = $_POST['pur_3type3_box'];
     //   $pur_3fwidth3 = $_POST['pur_3fwidth_box3'];
     //   $pur_3flength3 = $_POST['pur_3flength_box3'];
      //  $pur_3type4 = $_POST['pur_3type4_box'];
     //   $pur_3fwidth4 = $_POST['pur_3fwidth_box4'];
     //   $pur_3flength4 = $_POST['pur_3flength_box4'];
          
       //   $pur_4width = $_POST['pur_4width_box'];
       //   $pur_4length = $_POST['pur_4length_box'];
       //   $pur_4lami_width = $_POST['pur_4lami_width_box'];
      //    $pur_4lami_length = $_POST['pur_4lami_length_box'];
                     
            //  $pur_9pricemat = $_POST['pur_9pricemat_box'];
            //  $pur_hor = $_POST['pur_hor_box'];
           //   $pur_9kae = $_POST['pur_9kae_box'];
              $pur_Bluk = $_POST['pur_Bluk_box'];
              
            $pur_plastic_width = $_POST['pur_plastic_width_box'];
            $pur_plastic_length = $_POST['pur_plastic_length_box'];
            $pur_plastic_thick = $_POST['pur_plastic_thick_box'];
            $pur_company = $_POST['pur_company_box'];
            $pur_plastic_price =  $_POST['pur_plastic_price_box'];
            
            
            $pur_price_plate = $_POST['pur_price_plate_box'];
            $pur_pricePtype = $_POST['pur_pricePtype_box'];
          //  $pur_pricePN = $_POST['pur_pricePN_box'];
           // $pur_priceBoxk = $_POST['pur_priceBoxk_box'];
            $pur_priceAlu = $_POST['pur_priceAlu_box'];
            
         //   $pur_checkP = $_POST['pur_check_pum'];
            
            // check ต่าง ๆ
           
            $pur_typepum_check  =  $_POST['pricePtype_check'];
            $pur_pumN_check   =   $_POST['pricePN_check'];
            $pur_pumk_check =  $_POST['pur_priceBoxk_check'];
            $pur_alu_check =  $_POST['pur_priceAlu_check'];
            
            $pur_boxPN_R1A =  $_POST['R1_width'];
            $pur_boxPN_R1Y =  $_POST['R1_lenght'];
            $pur_priceBoxPN1 =  $_POST['pur_pricePN1_box'];   
            
            $pur_boxPN_R2A =  $_POST['R2_width'];
            $pur_boxPN_R2Y =  $_POST['R2_lenght'];
            $pur_priceBoxPN2 =  $_POST['pur_pricePN2_box'];
            
            $pur_boxPN_R3A =  $_POST['R3_width'];
            $pur_boxPN_R3Y =  $_POST['R3_lenght'];
            $pur_priceBoxPN3 =  $_POST['pur_pricePN3_box'];
            
            // บันทึกค่า ค่าบล็อคปั้มเค 
             $pur_priceBoxPumK1 =  $_POST['pur_pricePumK1_box'];
             $pur_priceBoxPumK2 =  $_POST['pur_pricePumK2_box'];
             $pur_priceBoxPumK3 =  $_POST['pur_pricePumK3_box'];
             $pur_priceBoxPumK4 =  $_POST['pur_pricePumK4_box'];
            
             // บันทึกค่า Note 
              $pur_job_note = $_POST['pur_job_note_box'];
            
            
            // เตรียมข้อมูล ลบ ไฟล์แบบ
            $pur_file1_box = $_POST['pur_file1_box'];
            $pur_file2_box = $_POST['pur_file2_box'];
            $pur_file3_box = $_POST['pur_file3_box'];
            $pur_file4_box = $_POST['pur_file4_box'];
            $pur_file5_box = $_POST['pur_file5_box'];
            $pur_file6_box = $_POST['pur_file6_box'];
            $pur_file7_box = $_POST['pur_file7_box'];
            $pur_file8_box = $_POST['pur_file8_box'];
            
            // 4 ลูกฟูก 
            
            // ราคา เคลือบผิวหน้า จนท. จัดซื้อ
            $exa_3front1_price = $_POST['pur_frontType1_price_box'];
            $exa_3front2_price = $_POST['pur_frontType2_price_box'];
            $exa_3front3_price = $_POST['pur_frontType3_price_box'];
            $exa_3front4_price = $_POST['pur_frontType4_price_box'];
            
           
            $man_factor_lf = $_POST['factor_lf_box'];
            
             // คำนวนค่าอลูมิเนียมจริง
             $lay_3 = $_SESSION['lay_333'];
             
             function extract_int($str){  
                $str=str_replace(",","",$str);
                 preg_match('/[[:digit:]]+\.?[[:digit:]]*/', $str, $regs);  
                 return (doubleval($regs[0]));  
            }  
            
            
            
        
               $pur_priceAlu_temp =  extract_int($pur_priceAlu);
              
             $pur_priceAlu_real = number_format(($pur_priceAlu_temp*$lay_3),2);
                                
             
              
              $file_code = $_SESSION['file_code'];
        
                     // ลบไฟล์แนบ เมื่อ inputbox ว่าง
                  if ($pur_file1_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt1='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($pur_file2_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt2='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($pur_file3_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt3='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                   if ($pur_file4_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt4='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                   if ($pur_file5_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt5='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($pur_file6_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt6='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($pur_file7_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt7='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
                  
                    if ($pur_file8_box==""){
                      
                      $sql_file1 = "UPDATE tb_jobs Set pur_fileAtt8='' WHERE jobs_filecode = '{$file_code}' ";
                      $result_file1 = mysqli_query($link, $sql_file1);
                      
                  }
              
              
              
              
                      
                      // ไฟล์แนบ 1 เจ้าหน้าที่จัดซื้อ
                      $sql_img1 = "SELECT pur_fileAtt1 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img1 = mysqli_query($link, $sql_img1);
                      $rows_img1 = mysqli_fetch_assoc($result_img1);
                      
                      
                      // ไฟล์แนบ 2 เจ้าหน้าที่จัดซื้อ
                      $sql_img2 = "SELECT pur_fileAtt2 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img2 = mysqli_query($link, $sql_img2);
                      $rows_img2 = mysqli_fetch_assoc($result_img2);
                      
                      // ไฟล์แนบ 3 เจ้าหน้าที่จัดซื้อ
                      $sql_img3 = "SELECT pur_fileAtt3 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img3 = mysqli_query($link, $sql_img3);
                      $rows_img3 = mysqli_fetch_assoc($result_img3);
                      
                     // ไฟล์แนบ 4 เจ้าหน้าที่จัดซื้อ
                      $sql_img4 = "SELECT pur_fileAtt4 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img4 = mysqli_query($link, $sql_img4);
                      $rows_img4 = mysqli_fetch_assoc($result_img4);
                      
                      // ไฟล์แนบ 5 เจ้าหน้าที่จัดซื้อ
                      $sql_img5 = "SELECT pur_fileAtt5 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img5 = mysqli_query($link, $sql_img5);
                      $rows_img5 = mysqli_fetch_assoc($result_img5);
                      
                      // ไฟล์แนบ 6 เจ้าหน้าที่จัดซื้อ
                      $sql_img6 = "SELECT pur_fileAtt6 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img6 = mysqli_query($link, $sql_img6);
                      $rows_img6 = mysqli_fetch_assoc($result_img6);
                      
                      // ไฟล์แนบ 7 เจ้าหน้าที่จัดซื้อ
                      $sql_img7 = "SELECT pur_fileAtt7 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img7 = mysqli_query($link, $sql_img7);
                      $rows_img7 = mysqli_fetch_assoc($result_img7);
                      
                      // ไฟล์แนบ 8 เจ้าหน้าที่จัดซื้อ
                      $sql_img8 = "SELECT pur_fileAtt8 FROM tb_jobs WHERE jobs_filecode = '{$file_code}' ";
                      $result_img8 = mysqli_query($link, $sql_img8);
                      $rows_img8 = mysqli_fetch_assoc($result_img8);
                      
     
    // ไฟล์แนบ 1 เจ้าหน้าที่จัดซื้อ
    if (is_uploaded_file($_FILES['purc_file1_purc_box']['tmp_name'])) {
       // $new_file1 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file1_purc_box']['name']), PATHINFO_EXTENSION);
        
        $new_file1 = $file_code.$_FILES['purc_file1_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
       $new_file1_upload  = iconv('UTF-8','windows-874',$new_file1);
        
        $image_upload_path1 = "./jobs/purc_file/".$new_file1_upload;
        move_uploaded_file($_FILES['purc_file1_purc_box']['tmp_name'],$image_upload_path1);
    }else {
        $new_file1 = $rows_img1['pur_fileAtt1'];
    }  
    
    // ไฟล์แนบ 2 เจ้าหน้าที่จัดซื้อ
    if (is_uploaded_file($_FILES['purc_file2_purc_box']['tmp_name'])) {
      //  $new_file2 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file2_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file2 = $file_code.$_FILES['purc_file2_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
       $new_file2_upload  = iconv('UTF-8','windows-874',$new_file2);
        
        $image_upload_path2 = "./jobs/purc_file/".$new_file2_upload;
        move_uploaded_file($_FILES['purc_file2_purc_box']['tmp_name'],$image_upload_path2);
    }else {
        $new_file2 = $rows_img2['pur_fileAtt2'];
    }  
    
    // ไฟล์แนบ 3 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file3_purc_box']['tmp_name'])) {
      //  $new_file3 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file3_purc_box']['name']), PATHINFO_EXTENSION);
       
           $new_file3 = $file_code.$_FILES['purc_file3_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file3_upload  = iconv('UTF-8','windows-874',$new_file3);
        
        $image_upload_path3 = "./jobs/purc_file/".$new_file3_upload;
        move_uploaded_file($_FILES['purc_file3_purc_box']['tmp_name'],$image_upload_path3);
    }else {
        $new_file3 = $rows_img3['pur_fileAtt3'];
    }  
    
    
    // ไฟล์แนบ 4 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file4_purc_box']['tmp_name'])) {
      //  $new_file4 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file4_purc_box']['name']), PATHINFO_EXTENSION);
       
         $new_file4 = $file_code.$_FILES['purc_file4_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file4_upload  = iconv('UTF-8','windows-874',$new_file4);
        
        $image_upload_path4 = "./jobs/purc_file/".$new_file4_upload;
        move_uploaded_file($_FILES['purc_file4_purc_box']['tmp_name'],$image_upload_path4);
    }else {
        $new_file4 = $rows_img4['pur_fileAtt4'];
    }  
    
     // ไฟล์แนบ 5 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file5_purc_box']['tmp_name'])) {
      //  $new_file5 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file5_purc_box']['name']), PATHINFO_EXTENSION);
       
        $new_file5 = $file_code.$_FILES['purc_file5_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file5_upload  = iconv('UTF-8','windows-874',$new_file5);
        
        $image_upload_path5 = "./jobs/purc_file/".$new_file5_upload;
        move_uploaded_file($_FILES['purc_file5_purc_box']['tmp_name'],$image_upload_path5);
    }else {
        $new_file5 = $rows_img5['pur_fileAtt5'];
    } 
    
     // ไฟล์แนบ 6 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file6_purc_box']['tmp_name'])) {
     //   $new_file6 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file6_purc_box']['name']), PATHINFO_EXTENSION);
         
          $new_file6 = $file_code.$_FILES['purc_file6_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file6_upload  = iconv('UTF-8','windows-874',$new_file6);
        
        $image_upload_path6 = "./jobs/purc_file/".$new_file6_upload;
        move_uploaded_file($_FILES['purc_file6_purc_box']['tmp_name'],$image_upload_path6);
    }else {
        $new_file6 = $rows_img6['pur_fileAtt6'];
    } 
    
    
     // ไฟล์แนบ 7 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file7_purc_box']['tmp_name'])) {
      //  $new_file7 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file7_purc_box']['name']), PATHINFO_EXTENSION);
        
         $new_file7 = $file_code.$_FILES['purc_file7_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file7_upload  = iconv('UTF-8','windows-874',$new_file7);
        
        $image_upload_path7 = "./jobs/purc_file/".$new_file7_upload;
        move_uploaded_file($_FILES['purc_file7_purc_box']['tmp_name'],$image_upload_path7);
    }else {
        $new_file7 = $rows_img7['pur_fileAtt7'];
    } 
    
    // ไฟล์แนบ 8 เจ้าหน้าที่จัดซื้อ
    
    if (is_uploaded_file($_FILES['purc_file8_purc_box']['tmp_name'])) {
      //  $new_file8 = 'news_'.uniqid().".".pathinfo(basename($_FILES['purc_file8_purc_box']['name']), PATHINFO_EXTENSION);
       
         $new_file8 = $file_code.$_FILES['purc_file8_purc_box']['name'];
        
        // แปลงภาษาไทย ชื่อไฟล์
           $new_file8_upload  = iconv('UTF-8','windows-874',$new_file8);
        
        $image_upload_path8 = "./jobs/purc_file/".$new_file8_upload;
        move_uploaded_file($_FILES['purc_file8_purc_box']['tmp_name'],$image_upload_path8);
    }else {
        $new_file8 = $rows_img8['pur_fileAtt8'];
    } 
    
    
    
    
    // $sql = "UPDATE tb_jobs SET pur_thick_gram='{$pur_thick_gram}',pur_size_width='{$pur_size_width}',pur_size_length='{$pur_size_length}',pur_lay2='{$lay_2}'";
       
       $sql = "UPDATE tb_jobs SET exa_3front4_price='{$exa_3front4_price}',exa_3front3_price='{$exa_3front3_price}',exa_3front2_price='{$exa_3front2_price}',exa_3front1_price='{$exa_3front1_price}',pur_job_note='{$pur_job_note}',man_factor_lf='{$man_factor_lf}',man_real_priceBoxPK1='{$pur_priceBoxPumK1}',man_real_priceBoxPK2='{$pur_priceBoxPumK2}',man_real_priceBoxPK3='{$pur_priceBoxPumK3}',man_real_priceBoxPK4='{$pur_priceBoxPumK4}',pur_priceBoxPumK1='{$pur_priceBoxPumK1}',pur_priceBoxPumK2='{$pur_priceBoxPumK2}',pur_priceBoxPumK3='{$pur_priceBoxPumK3}',pur_priceBoxPumK4='{$pur_priceBoxPumK4}',man_real_priceBoxPN3='{$pur_priceBoxPN3}',man_real_priceBoxPN2='{$pur_priceBoxPN2}',man_real_priceBoxPN1='{$pur_priceBoxPN1}',pur_priceBoxPN3='{$pur_priceBoxPN3}',pur_priceBoxPN2='{$pur_priceBoxPN2}',pur_priceBoxPN1='{$pur_priceBoxPN1}',pur_offersale='{$pur_offersale}'"  
    . ",pur_typepum_check ='{$pur_typepum_check}',pur_pumN_check ='{$pur_pumN_check}',pur_pumk_check ='{$pur_pumk_check}',pur_alu_check ='{$pur_alu_check}'"
    . ",pur_fileAtt1 ='{$new_file1}',pur_fileAtt2 ='{$new_file2}',pur_fileAtt3 ='{$new_file3}',pur_fileAtt4 ='{$new_file4}',pur_fileAtt5 ='{$new_file5}',pur_fileAtt6 ='{$new_file6}',pur_fileAtt7 ='{$new_file7}',pur_fileAtt8 ='{$new_file8}'"
    . ",pur_Bluk ='{$pur_Bluk}' ,pur_plastic_width ='{$pur_plastic_width}',pur_plastic_length ='{$pur_plastic_length}',pur_boxPN_R1A ='{$pur_boxPN_R1A}',pur_boxPN_R1Y ='{$pur_boxPN_R1Y}',pur_boxPN_R2A ='{$pur_boxPN_R2A}',pur_boxPN_R2Y ='{$pur_boxPN_R2Y}',pur_boxPN_R3A ='{$pur_boxPN_R3A}',pur_boxPN_R3Y ='{$pur_boxPN_R3Y}'"
    . ",pur_plastic_thick ='{$pur_plastic_thick}',pur_company ='{$pur_company}',pur_plastic_price ='{$pur_plastic_price}',jobs_real_plastic ='{$pur_plastic_price}',pur_price_plate ='{$pur_price_plate}',pur_pricePtype ='{$pur_pricePtype}',pur_priceAlu ='{$pur_priceAlu}',jobs_real_ALU_price ='{$pur_priceAlu_real}',purc_file_purc ='{$new_image_name}' WHERE jobs_filecode = '{$file_code}'";
   
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' =>  'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "ผิดพลาด กรุณาเปลี่ยน แก้ไข ใหม่";
        echo json_encode(array('status' => 'danger','message' => mysqli_error($link)));
        
    }
    
