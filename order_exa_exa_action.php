<?php
    session_start();
    include 'db/database.php';
       
	
	//data 
	
	$filecode = $_SESSION['file_code'];
         
      
        $OrderExa2_style_job =  $_POST['OrderExa2_style_job'];
        $OrderExa2_A_W =  $_POST['OrderExa2_A_W'];
        $OrderExa2_company =  $_POST['OrderExa2_company'];
        $OrderExa2_date =  $_POST['OrderExa2_date'];
        $OrderExa2_ck_typepum =  $_POST['OrderExa2_ck_typepum'];
        $OrderExa2_ck_rungsit =  $_POST['OrderExa2_ck_rungsit'];
        $OrderExa2_ck_systemBoard =  $_POST['OrderExa2_ck_systemBoard'];
        $OrderExa2_ck_etc =  $_POST['OrderExa2_ck_etc'];
        $OrderExa2_etc =  $_POST['OrderExa2_etc'];
        $OrderExa2_ck_color_process =  $_POST['OrderExa2_ck_color_process'];
        $OrderExa2_ck_C =  $_POST['OrderExa2_ck_C'];
        $OrderExa2_ck_M  =  $_POST['OrderExa2_ck_M'];
        $OrderExa2_ck_Y  =  $_POST['OrderExa2_ck_Y'];
        $OrderExa2_ck_K  =  $_POST['OrderExa2_ck_K'];
        $OrderExa2_ck_special  =  $_POST['OrderExa2_ck_special'];
        $OrderExa2_krebpew  =  $_POST['OrderExa2_krebpew'];
        $OrderExa2_code  =  $_POST['OrderExa2_code'];
        $OrderExa2_plate  =  $_POST['OrderExa2_plate'];
        $OrderExa2_pum  =  $_POST['OrderExa2_pum'];
        $OrderExa2_ck_cut  =  $_POST['OrderExa2_ck_cut'];
        $OrderExa2_ck_print =  $_POST['OrderExa2_ck_print'];
        $OrderExa2_ck_kreab  =  $_POST['OrderExa2_ck_kreab'];
        $OrderExa2_ck_ka  =  $_POST['OrderExa2_ck_ka']; 
        $OrderExa2_ck_palukfuk  =  $_POST['OrderExa2_ck_palukfuk'];
        $OrderExa2_ck_pumnun  =  $_POST['OrderExa2_ck_pumnun'];
        $OrderExa2_ck_pumkad  =  $_POST['OrderExa2_ck_pumkad'];
        $OrderExa2_ck_kea  =  $_POST['OrderExa2_ck_kea'];
        $OrderExa2_ck_pameu  =  $_POST['OrderExa2_ck_pameu'];
        $OrderExa2_ck_pakreng  =  $_POST['OrderExa2_ck_pakreng'];
        $OrderExa2_etc_mat =  $_POST['OrderExa2_etc_mat'];
        $OrderExa2_officer_exa  =  $_POST['OrderExa2_officer_exa'];
        
        
        // เพิ่มเติม
        
        $OrderExa2_ck_oldjob  =  $_POST['OrderExa2_ck_oldjob'];
        $OrderExa2_ck_newjob  =  $_POST['OrderExa2_ck_newjob'];
        $OrderExa2_ck_typepum2  =  $_POST['OrderExa2_ck_typepum2'];
        $OrderExa2_ck_diecut =  $_POST['OrderExa2_ck_diecut'];
        $OrderExa2_ck_replace  =  $_POST['OrderExa2_ck_replace'];
        $OrderExa2_ck_oldpum  =  $_POST['OrderExa2_ck_oldpum'];
        $OrderExa2_ck_newpum  =  $_POST['OrderExa2_ck_newpum'];
        $OrderExa2_ck_faseab  =  $_POST['OrderExa2_ck_faseab'];
        $OrderExa2_ck_takaw =  $_POST['OrderExa2_ck_takaw'];
        $OrderExa2_ck_meu  =  $_POST['OrderExa2_ck_meu'];
        $OrderExa2_ck_kreng  =  $_POST['OrderExa2_ck_kreng'];
        
        
        $OrderExa2_ck_real_paper  =  $_POST['OrderExa2_ck_real_paper'];
        $OrderExa2_ck_paperShopProof =  $_POST['OrderExa2_ck_paperShopProof'];
        $OrderExa2_paperShopProof  =  $_POST['OrderExa2_paperShopProof'];
       
        $OrderExa2_ck_realColor  =  $_POST['OrderExa2_ck_realColor'];
        $OrderExa2_ck_colorShopProof  =  $_POST['OrderExa2_ck_colorShopProof'];
        
        $OrderExa2_ck_refer_Oldcolor =  $_POST['OrderExa2_ck_refer_Oldcolor'];
        $OrderExa2_ck_refer_Newcolor  =  $_POST['OrderExa2_ck_refer_Newcolor'];
        $OrderExa2_ck_refer_byBoxExample  =  $_POST['OrderExa2_ck_refer_byBoxExample'];
        
// เพิ่มเติม  จบ

// new edit
        
        
        
        $user_id = $_SESSION['user_id'];
                    	
	date_default_timezone_set('UTC');
	$date = date("d-m-Y");
   
   	
// เช็คว่ามีข้อมูลอยู่แล้วหรือไม่  ถ้ามีให้ update ถ้าไม่มี insert
         
        
        $qry_filecode = "SELECT filecode FROM tb_order_exa2 WHERE filecode='$filecode'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        $rowcount=mysqli_num_rows($result_filecode);
        
        if ($rowcount==NULL) {
           
        
           $sql = "INSERT INTO `tb_order_exa2` (`filecode`,`OrderExa2_style_job`,`OrderExa2_A_W`,`OrderExa2_company`,`OrderExa2_date`, `OrderExa2_ck_typepum`, `OrderExa2_ck_rungsit`,`OrderExa2_ck_systemBoard`,`OrderExa2_ck_etc`,`OrderExa2_etc`,`OrderExa2_ck_color_process`,`OrderExa2_ck_C`,`OrderExa2_ck_M`,`OrderExa2_ck_Y`,`OrderExa2_ck_K`,`OrderExa2_ck_special`,`OrderExa2_krebpew`,`OrderExa2_code`,`OrderExa2_plate`,`OrderExa2_pum`,`OrderExa2_ck_cut`,`OrderExa2_ck_print`,`OrderExa2_ck_kreab`,`OrderExa2_ck_ka`,`OrderExa2_ck_palukfuk`,`OrderExa2_ck_pumnun`,`OrderExa2_ck_pumkad`,`OrderExa2_ck_kea`,`OrderExa2_ck_pameu`,`OrderExa2_ck_pakreng`,`OrderExa2_etc_mat`,`OrderExa2_officer_exa`,`OrderExa2_ck_oldjob`,`OrderExa2_ck_newjob`,`OrderExa2_ck_typepum2`,`OrderExa2_ck_diecut`,`OrderExa2_ck_replace`,`OrderExa2_ck_oldpum`,`OrderExa2_ck_newpum`,`OrderExa2_ck_faseab`,`OrderExa2_ck_takaw`,`OrderExa2_ck_meu`,`OrderExa2_ck_kreng`,`OrderExa2_ck_real_paper`,`OrderExa2_ck_paperShopProof`,`OrderExa2_paperShopProof`,`OrderExa2_ck_realColor`,`OrderExa2_ck_colorShopProof`,`OrderExa2_ck_refer_Oldcolor`,`OrderExa2_ck_refer_Newcolor`,`OrderExa2_ck_refer_byBoxExample`) VALUES ('$filecode','$OrderExa2_style_job','$OrderExa2_A_W','$OrderExa2_company','$OrderExa2_date','$OrderExa2_ck_typepum', '$OrderExa2_ck_rungsit','$OrderExa2_ck_systemBoard','$OrderExa2_ck_etc','$OrderExa2_etc','$OrderExa2_ck_color_process','$OrderExa2_ck_C','$OrderExa2_ck_M','$OrderExa2_ck_Y','$OrderExa2_ck_K','$OrderExa2_ck_special','$OrderExa2_krebpew','$OrderExa2_code','$OrderExa2_plate','$OrderExa2_pum','$OrderExa2_ck_cut','$OrderExa2_ck_print','$OrderExa2_ck_kreab','$OrderExa2_ck_ka','$OrderExa2_ck_palukfuk','$OrderExa2_ck_pumnun','$OrderExa2_ck_pumkad','$OrderExa2_ck_kea','$OrderExa2_ck_pameu','$OrderExa2_ck_pakreng','$OrderExa2_etc_mat','$OrderExa2_officer_exa','$OrderExa2_ck_oldjob','$OrderExa2_ck_newjob','$OrderExa2_ck_typepum2','$OrderExa2_ck_diecut','$OrderExa2_ck_replace','$OrderExa2_ck_oldpum','$OrderExa2_ck_newpum','$OrderExa2_ck_faseab','$OrderExa2_ck_takaw','$OrderExa2_ck_meu','$OrderExa2_ck_kreng','$OrderExa2_ck_real_paper','$OrderExa2_ck_paperShopProof','$OrderExa2_paperShopProof','$OrderExa2_ck_realColor','$OrderExa2_ck_colorShopProof','$OrderExa2_ck_refer_Oldcolor','$OrderExa2_ck_refer_Newcolor','$OrderExa2_ck_refer_byBoxExample')";
        }else{
          
   
       $sql = "UPDATE tb_order_exa2 SET OrderExa2_ck_refer_byBoxExample='{$OrderExa2_ck_refer_byBoxExample}',OrderExa2_ck_refer_Newcolor='{$OrderExa2_ck_refer_Newcolor}',OrderExa2_ck_refer_Oldcolor='{$OrderExa2_ck_refer_Oldcolor}',OrderExa2_ck_colorShopProof='{$OrderExa2_ck_colorShopProof}',OrderExa2_ck_realColor='{$OrderExa2_ck_realColor}',OrderExa2_paperShopProof='{$OrderExa2_paperShopProof}',OrderExa2_ck_paperShopProof='{$OrderExa2_ck_paperShopProof}',OrderExa2_ck_real_paper='{$OrderExa2_ck_real_paper}',OrderExa2_ck_kreng='{$OrderExa2_ck_kreng}',OrderExa2_ck_meu='{$OrderExa2_ck_meu}',OrderExa2_ck_takaw='{$OrderExa2_ck_takaw}',OrderExa2_ck_faseab='{$OrderExa2_ck_faseab}',OrderExa2_ck_newpum='{$OrderExa2_ck_newpum}',OrderExa2_ck_oldpum='{$OrderExa2_ck_oldpum}',OrderExa2_ck_replace='{$OrderExa2_ck_replace}',OrderExa2_ck_diecut='{$OrderExa2_ck_diecut}',OrderExa2_ck_typepum2='{$OrderExa2_ck_typepum2}',OrderExa2_ck_newjob='{$OrderExa2_ck_newjob}',OrderExa2_ck_oldjob='{$OrderExa2_ck_oldjob}',OrderExa2_style_job='{$OrderExa2_style_job}',OrderExa2_A_W='{$OrderExa2_A_W}',OrderExa2_company='{$OrderExa2_company}',OrderExa2_date='{$OrderExa2_date}',OrderExa2_ck_typepum='{$OrderExa2_ck_typepum}',OrderExa2_ck_rungsit='{$OrderExa2_ck_rungsit}',OrderExa2_ck_systemBoard='{$OrderExa2_ck_systemBoard}',OrderExa2_ck_etc='{$OrderExa2_ck_etc}',OrderExa2_etc='{$OrderExa2_etc}',OrderExa2_ck_color_process='{$OrderExa2_ck_color_process}',OrderExa2_ck_C='{$OrderExa2_ck_C}',OrderExa2_ck_M='{$OrderExa2_ck_M}',OrderExa2_ck_Y='{$OrderExa2_ck_Y}',OrderExa2_ck_K='{$OrderExa2_ck_K}',OrderExa2_ck_special='{$OrderExa2_ck_special}',OrderExa2_krebpew='{$OrderExa2_krebpew}',OrderExa2_code='{$OrderExa2_code}',OrderExa2_plate='{$OrderExa2_plate}',OrderExa2_pum='{$OrderExa2_pum}',OrderExa2_ck_cut='{$OrderExa2_ck_cut}',OrderExa2_ck_print='{$OrderExa2_ck_print}',OrderExa2_ck_kreab='{$OrderExa2_ck_kreab}',OrderExa2_ck_ka='{$OrderExa2_ck_ka}',OrderExa2_ck_palukfuk='{$OrderExa2_ck_palukfuk}',OrderExa2_ck_pumnun='{$OrderExa2_ck_pumnun}',OrderExa2_ck_pumkad='{$OrderExa2_ck_pumkad}'"  
             . ",OrderExa2_ck_kea ='{$OrderExa2_ck_kea}',OrderExa2_ck_pameu ='{$OrderExa2_ck_pameu}',OrderExa2_ck_pakreng ='{$OrderExa2_ck_pakreng}',OrderExa2_etc_mat ='{$OrderExa2_etc_mat}',OrderExa2_officer_exa ='{$OrderExa2_officer_exa}' WHERE filecode = '{$filecode}'";
            
            
        }
        // เช็คว่ามีข้อมูลอยู่แล้วหรือไม่  ถ้ามีให้ update ถ้าไม่มี insert
        
        
    
    
        
      //  $sql = "INSERT INTO `tb_order_exa` (`filecode`, `ck_example`, `ck_art_work`,`ck_disc`,`ck_print_prototype`,`ck_barcode`,`ck_etc1`,`etc1`,`ck_proof`,`ck_etc2`,`etc2`,`ck_hor`,`ck_box`,`ck_pallet`,`proof_locate`,`manager_sale_dept1`,`style_job`,`exa_result1_date`,`ck_digital_proof1`,`ck_proof_soft1`,`ck_proof_real_paper1`,`ck_etc3`,`etc3`,`ck_accept1`,`by_box11`,`exa1_accept_date`,`ck_no_accept1`,`by_box12`,`exa1_no_accept_date`,`detial_edit1`,`plate_value1`,`bill_no11`,`bill_date11`,`type_pum_value1`,`bill_no12`,`bill_date12`,`exa_result2_date`,`ck_digital_proof2`,`ck_proof_soft2`,`ck_proof_real_paper2`,`ck_etc4`,`etc4`,`ck_accept2`,`by_box21`,`exa1_accept_date2`,`ck_no_accept2`,`by_box22`,`exa2_no_accept_date`,`detial_edit2`,`plate_value2`,`bill_no21`,`bill_date21`,`type_pum_value2`,`bill_no22`,`bill_date22`,`product_no`,`order_no`,`amount`,`manager_sale_dept2`) VALUES ('$filecode','$ck_example', '$ck_art_work','$ck_disc','$ck_print_prototype','$ck_barcode','$ck_etc1','$etc1','$ck_proof','$ck_etc2','$etc2','$ck_hor','$ck_box','$ck_pallet','$proof_locate','$manager_sale_dept1','$style_job','$exa_result1_date','$ck_digital_proof1','$ck_proof_soft1','$ck_proof_real_paper1','$ck_etc3','$etc3','$ck_accept1','$by_box11','$exa1_accept_date','$ck_no_accept1','$by_box12','$exa1_no_accept_date','$detial_edit1','$plate_value1','$bill_no11','$bill_date11','$type_pum_value1','$bill_no12','$bill_date12','$exa_result2_date','$ck_digital_proof2','$ck_proof_soft2','$ck_proof_real_paper2','$ck_etc4','$etc4','$ck_accept2','$by_box21','$exa1_accept_date2','$ck_no_accept2','$by_box22','$exa2_no_accept_date','$detial_edit2','$plate_value2','$bill_no21','$bill_date21','$type_pum_value2','$bill_no22','$bill_date22','$product_no','$order_no','$amount','$manager_sale_dept2')";
    
   
    
    
    
    $result = mysqli_query($link, $sql);
    // $errors1 = mysqli_error($link);
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "เกิดข้อผิดพลาด";
         
        echo json_encode(array('status' => 'danger','message' => $errors));
       
      
        
        }

