<?php
    session_start();
    include 'db/database.php';
       
	
	
	$paper_price_box     = $_POST['paper_price_box'];
        
	$wage_print_box = $_POST['wage_print_box'];
        
        $pur_plastic_price = $_POST['price_plastic'];  // NEW
        
        $price_front1 = $_POST['price_front1'];
        $price_front2 = $_POST['price_front2'];
        $price_front3 = $_POST['price_front3'];
        $price_front4 = $_POST['price_front4'];
        
        $lf_price_box = $_POST['lf_price_box'];
        $lami_price_box = $_POST['lami_price_box'];
        
        $Blf_price_calc = $_POST['Blf_price_box'];
        
        $price_R1PK_box = $_POST['price_R1PK_box'];
        $price_R2PK_box = $_POST['price_R2PK_box'];
        $price_R3PK_box = $_POST['price_R3PK_box'];
        $price_R4PK_box = $_POST['price_R4PK_box'];
       
        $man_total_price_PK = $_POST['total_price_PK_box'];
        $man_total_price_PN = $_POST['man_total_PN_box'];
        
   //     $man_PN1AC_calc = $_POST['man_PN1AC_box'];
   //     $man_PN2AC_calc = $_POST['man_PN2AC_box'];
   //     $man_PN3AC_calc = $_POST['man_PN3AC_box'];
        
        
        $price_PY_box = $_POST['price_PY_box'];
        $price_logis_box = $_POST['price_logis_box'];
        $plate_price_box = $_POST['plate_price_box'];
      
          $pur_pricePtype_box = $_POST['pur_pricePtype_box'];

         // 4. Factor ลูกฟูก

         $man_factor_lf = $_POST['factor_lf_box'];
  
         // 5. Factor ฟอยล์
            $man_check_paperf_factor  =  $_POST['check_paperf_factor'];
            $man_factor_paperF  =  $_POST['factor_paperF_box'];
         
            //  Factor ค่าบวกปั๊มเค
            
            $man_check_plusPK_factor  =  $_POST['check_plusPK_factor'];
            
            //  8. Factor ค่าขนส่ง
            
            $man_check_logis_factor  =  $_POST['check_logis_factor'];

         
          
          // ค่าแรงพิมพ์ facetor
           
            $ch_print_wage2  =  $_POST['ch_print_wage'];
            $print_wage  =  $_POST['print_wage'];
            
        //    $pur_pumN_check   =   $_POST['pricePN_check'];
       
        
       //      Factor LAMINATE
            $check_lami_factor  =  $_POST['check_lami_factor'];
            $factor_lami_box  =  $_POST['factor_lami_box'];
            
        //  Factor B ลูกฟูก	
        
          $man_check_Blf_factor  =  $_POST['check_Blf_factor'];  
          
       //  เก็บค่า คำนวณ total ในตาราง ด้านล่าง   
          $man_calc_total1 = $_POST['calc_total1'];
          $man_calc_total2 = $_POST['calc_total2'];
          $man_calc_total3 = $_POST['calc_total3'];
          $man_calc_total4 = $_POST['calc_total4'];
          $man_calc_total5 = $_POST['calc_total5'];
          $man_calc_total6 = $_POST['calc_total6'];
          
          // เก็บค่า factor ค่าตัวเลือก และช่องให้กรอก
          $man_check_sp_factor = $_POST['check_sp_factor'];
          $man_factor_SP_box = $_POST['factor_SP_box'];
         
        // เก็บค่า paper ในตาราง ด้านล่าง
          $man_calc_paper1 = $_POST['calc_paper1'];
          $man_calc_paper2 = $_POST['calc_paper2'];
          $man_calc_paper3 = $_POST['calc_paper3'];
          $man_calc_paper4 = $_POST['calc_paper4'];
          $man_calc_paper5 = $_POST['calc_paper5'];
          $man_calc_paper6 = $_POST['calc_paper6'];
         
       // เก็บค่า wage ในตาราง ด้านล่าง
          $man_calc_wage1 = $_POST['calc_wage1'];
          $man_calc_wage2 = $_POST['calc_wage2'];
          $man_calc_wage3 = $_POST['calc_wage3'];
          $man_calc_wage4 = $_POST['calc_wage4'];
          $man_calc_wage5 = $_POST['calc_wage5'];
          $man_calc_wage6 = $_POST['calc_wage6'];
          
          // เก็บค่า Diecut ในตาราง ด้านล่าง
          $man_calc_Diecut1 = $_POST['calc_Diecut1'];
          $man_calc_Diecut2 = $_POST['calc_Diecut2'];
          $man_calc_Diecut3 = $_POST['calc_Diecut3'];
          $man_calc_Diecut4 = $_POST['calc_Diecut4'];
          $man_calc_Diecut5 = $_POST['calc_Diecut5'];
          $man_calc_Diecut6 = $_POST['calc_Diecut6'];
          
          // เก็บค่า Plate ในตาราง ด้านล่าง
          $man_calc_plate1 = $_POST['calc_plate1'];
          $man_calc_plate2 = $_POST['calc_plate2'];
          $man_calc_plate3 = $_POST['calc_plate3'];
          $man_calc_plate4 = $_POST['calc_plate4'];
          $man_calc_plate5 = $_POST['calc_plate5'];
          $man_calc_plate6 = $_POST['calc_plate6'];
          
           // เก็บค่า Trans. ในตาราง ด้านล่าง
          $man_calc_trans1 = $_POST['calc_trans1'];
          $man_calc_trans2 = $_POST['calc_trans2'];
          $man_calc_trans3 = $_POST['calc_trans3'];
          $man_calc_trans4 = $_POST['calc_trans4'];
          $man_calc_trans5 = $_POST['calc_trans5'];
          $man_calc_trans6 = $_POST['calc_trans6'];
          
           // เก็บค่า SP. ในตาราง ด้านล่าง
          $man_calc_sp1 = $_POST['calc_sp1'];
          $man_calc_sp2 = $_POST['calc_sp2'];
          $man_calc_sp3 = $_POST['calc_sp3'];
          $man_calc_sp4 = $_POST['calc_sp4'];
          $man_calc_sp5 = $_POST['calc_sp5'];
          $man_calc_sp6 = $_POST['calc_sp6'];
          
           // เก็บค่า final ในตาราง ด้านล่าง
          $man_final1 = $_POST['final1_box'];
          $man_final2 = $_POST['final2_box'];
          $man_final3 = $_POST['final3_box'];
          $man_final4 = $_POST['final4_box'];
          $man_final5 = $_POST['final5_box'];
          $man_final6 = $_POST['final6_box'];
          
         
          
          // เก็บค่า Ream ในตาราง ด้านล่าง
          $man_calc_R1 = $_POST['calc_R1'];
          $man_calc_R2 = $_POST['calc_R2'];
          $man_calc_R3 = $_POST['calc_R3'];
          $man_calc_R4 = $_POST['calc_R4'];
          $man_calc_R5 = $_POST['calc_R5'];
          $man_calc_R6 = $_POST['calc_R6'];
          
          
      
          
          
                                       
      $file_code = $_SESSION['file_code'];
        
               
    
    
    // $sql = "UPDATE tb_jobs SET pur_thick_gram='{$pur_thick_gram}',pur_size_width='{$pur_size_width}',pur_size_length='{$pur_size_length}',pur_lay2='{$lay_2}'";
       
       $sql = "UPDATE tb_jobs SET  man_calc_R6='{$man_calc_R6}',man_calc_R5='{$man_calc_R5}',man_calc_R4='{$man_calc_R4}',man_calc_R3='{$man_calc_R3}',man_calc_R2='{$man_calc_R2}',man_calc_R1='{$man_calc_R1}',man_check_logis_factor='{$man_check_logis_factor}',man_check_plusPK_factor='{$man_check_plusPK_factor}',man_factor_paperF='{$man_factor_paperF}',man_check_paperf_factor='{$man_check_paperf_factor}',man_factor_lf='{$man_factor_lf}',man_total_price_PN='{$man_total_price_PN}',man_total_price_PK='{$man_total_price_PK}',man_check_Blf_factor='{$man_check_Blf_factor}',jobs_factor_lami_box='{$factor_lami_box}',jobs_check_lami_factor='{$check_lami_factor}',jobs_print_wage='{$print_wage}',jobs_ch_print_wage='{$ch_print_wage2}',paper_price_calc='{$paper_price_box}',wage_print_calc='{$wage_print_box}',price_front1_calc='{$price_front1}',price_front2_calc='{$price_front2}'"
        . ",man_calc_paper6 ='{$man_calc_paper6}',man_calc_paper5 ='{$man_calc_paper5}',man_calc_paper4 ='{$man_calc_paper4}',man_calc_paper3 ='{$man_calc_paper3}',man_calc_paper2 ='{$man_calc_paper2}',man_calc_paper1 ='{$man_calc_paper1}',man_factor_SP_box ='{$man_factor_SP_box}',man_check_sp_factor ='{$man_check_sp_factor}',man_calc_total6 ='{$man_calc_total6}',man_calc_total5 ='{$man_calc_total5}',man_calc_total4 ='{$man_calc_total4}',man_calc_total3 ='{$man_calc_total3}',man_calc_total2 ='{$man_calc_total2}',man_calc_total1 ='{$man_calc_total1}',Blf_price_calc ='{$Blf_price_calc}',pur_plastic_price ='{$pur_plastic_price}',price_PY_calc ='{$price_PY_box}',price_logis_calc ='{$price_logis_box}',plate_price_calc ='{$plate_price_box }' "
       . ",man_final6 ='{$man_final6}',man_final5 ='{$man_final5}',man_final4 ='{$man_final4}',man_final3 ='{$man_final3}',man_final2 ='{$man_final2}',man_final1 ='{$man_final1}',man_calc_sp6 ='{$man_calc_sp6}',man_calc_sp5 ='{$man_calc_sp5}',man_calc_sp4 ='{$man_calc_sp4}',man_calc_sp3 ='{$man_calc_sp3}',man_calc_sp2 ='{$man_calc_sp2}',man_calc_sp1 ='{$man_calc_sp1}',man_calc_trans6 ='{$man_calc_trans6}',man_calc_trans5 ='{$man_calc_trans5}',man_calc_trans4 ='{$man_calc_trans4}',man_calc_trans3 ='{$man_calc_trans3}',man_calc_trans2 ='{$man_calc_trans2}',man_calc_trans1 ='{$man_calc_trans1}',man_calc_plate6 ='{$man_calc_plate6}',man_calc_plate5 ='{$man_calc_plate5}',man_calc_plate4 ='{$man_calc_plate4}',man_calc_plate3 ='{$man_calc_plate3}',man_calc_plate2 ='{$man_calc_plate2}',man_calc_plate1 ='{$man_calc_plate1}',man_calc_Diecut6 ='{$man_calc_Diecut6}',man_calc_Diecut5 ='{$man_calc_Diecut5}',man_calc_Diecut4 ='{$man_calc_Diecut4}',man_calc_Diecut3 ='{$man_calc_Diecut3}',man_calc_Diecut2 ='{$man_calc_Diecut2}',man_calc_Diecut1 ='{$man_calc_Diecut1}',man_calc_wage6 ='{$man_calc_wage6}',man_calc_wage5 ='{$man_calc_wage5}',man_calc_wage4 ='{$man_calc_wage4}',man_calc_wage3 ='{$man_calc_wage3}',man_calc_wage2 ='{$man_calc_wage2}',man_calc_wage1 ='{$man_calc_wage1}',price_front3_calc ='{$price_front3}',price_front4_calc ='{$price_front4}',lf_price_calc ='{$lf_price_box}',lami_price_calc ='{$lami_price_box}',price_R1PK_calc ='{$price_R1PK_box}',price_R2PK_calc ='{$price_R2PK_box}',price_R3PK_calc ='{$price_R3PK_box}',price_R4PK_calc ='{$price_R4PK_box}' WHERE jobs_filecode = '{$file_code}'";
   
    $result = mysqli_query($link, $sql);
    
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' =>  'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "ผิดพลาด กรุณาเปลี่ยน แก้ไข ใหม่";
        echo json_encode(array('status' => 'danger','message' => mysqli_error($link)));
        
    }

