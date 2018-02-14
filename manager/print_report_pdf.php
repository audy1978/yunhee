<?php

     include '../mpdf/mpdf.php';
     ob_start();
?>
<?php date_default_timezone_set("Asia/Bangkok");   ?>
 <?php include 'db/config_db.php'; ?>

 <?php
     
     include 'db/database.php';
	$file_code3 =  $_GET["filecode"];	
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code3'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        if ($result_filecode) {
            $row_filecode =  mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            $user_id = $row_filecode['user_id'];
           $jobs_contact = $row_filecode['jobs_contact'];
           $jobs_file = $row_filecode['jobs_file'];
           $jobs_date = $row_filecode['jobs_date'];
          
           $jobs_customer = $row_filecode['jobs_customer'];
           
           $job_image = $row_filecode['jobs_image'];
            
           $jobs_real_price_save =  $row_filecode['jobs_real_price'];
           $jobs_real_wage_save  =  $row_filecode['jobs_real_wage'];
           
           $jobs_real_Pfront1R_save =  $row_filecode['jobs_real_Pfront1R'];
           $jobs_real_Pfront2R_save =  $row_filecode['jobs_real_Pfront2R'];
           $jobs_real_Pfront3R_save =  $row_filecode['jobs_real_Pfront3R'];
           $jobs_real_Pfront4R_save =  $row_filecode['jobs_real_Pfront4R'];
           
           $jobs_real_lf_price =  $row_filecode['jobs_real_lf_price'];
           $jobs_real_lami_price =  $row_filecode['jobs_real_lami_price'];
          
           
            $jobs_real_price_R1PK2   =  $row_filecode['jobs_real_price_R1PK2'];
            $jobs_real_price_R2PK2  =  $row_filecode['jobs_real_price_R2PK2'];
            $jobs_real_price_R3PK2  =  $row_filecode['jobs_real_price_R3PK2'];
            $jobs_real_price_R4PK2  =  $row_filecode['jobs_real_price_R4PK2'];
            $jobs_real_price_punN  =  $row_filecode['jobs_real_price_punN'];
            $jobs_real_price_PY  =  $row_filecode['jobs_real_price_PY'];
            $jobs_real_price_logis  =  $row_filecode['jobs_real_price_logis'];
           
            $jobs_real_plate_price  =  $row_filecode['jobs_real_plate_price'];
            $jobs_real_pur_pricePtype  =  $row_filecode['jobs_real_pur_pricePtype'];
            $jobs_real_pur_pricePN  =  $row_filecode['jobs_real_pur_pricePN'];
                                
            $jobs_real_priceBoxk =  $row_filecode['jobs_real_priceBoxk'];
            
            
            $paper_price_calc =  $row_filecode['paper_price_calc'];
            $wage_print_calc =  $row_filecode['wage_print_calc'];
            $price_front1_calc =  $row_filecode['price_front1_calc'];
            $price_front2_calc =  $row_filecode['price_front2_calc'];
            $price_front3_calc =  $row_filecode['price_front3_calc'];
            $price_front4_calc =  $row_filecode['price_front4_calc'];
            $lf_price_calc =  $row_filecode['lf_price_calc'];
            $lami_price_calc =  $row_filecode['lami_price_calc'];
            $Blf_price_calc  =  $row_filecode['Blf_price_calc'];
            $price_R1PK_calc =  $row_filecode['price_R1PK_calc'];
            $price_R2PK_calc =  $row_filecode['price_R2PK_calc'];
            $price_R3PK_calc =  $row_filecode['price_R3PK_calc'];
            $price_R4PK_calc =  $row_filecode['price_R4PK_calc'];
            
            $man_PN1AC_calc =  $row_filecode['man_PN1AC_calc'];
            $man_PN2AC_calc =  $row_filecode['man_PN2AC_calc'];
            $man_PN3AC_calc =  $row_filecode['man_PN3AC_calc'];
            
            $price_punN_calc =  $row_filecode['price_punN_calc'];
            $price_PY_calc =  $row_filecode['price_PY_calc'];
            $price_logis_calc =  $row_filecode['price_logis_calc'];
            $plate_price_calc =  $row_filecode['plate_price_calc'];
            $pur_pricePtype_calc =  $row_filecode['pur_pricePtype_calc'];
            $pur_pricePN_calc =  $row_filecode['pur_pricePN_calc'];
            $pur_priceBoxk_calc =  $row_filecode['pur_priceBoxk_calc'];
           
           $jobs_order1  =  $row_filecode['jobs_order1'];
           $jobs_order2  =  $row_filecode['jobs_order2'];
           $jobs_order3  =  $row_filecode['jobs_order3'];
           $jobs_order4  =  $row_filecode['jobs_order4'];
           $jobs_order5  =  $row_filecode['jobs_order5'];
           $jobs_order6  =  $row_filecode['jobs_order6'];
           
           
           
            $pur_cat = $row_filecode['pur_cat'];
            $pur_seller = $row_filecode['pur_seller'];
            $pur_band = $row_filecode['pur_band'];
            $pur_thick = $row_filecode['pur_thick'];
            $pur_sizepaper = $row_filecode['pur_sizepaper'];
            $pur_type = $row_filecode['pur_type'];
            $pur_offersale = $row_filecode['pur_offersale'];
            $pur_thick_gram = $row_filecode['pur_thick_gram'];
            $pur_size_width = $row_filecode['pur_size_width'];
            $pur_size_length = $row_filecode['pur_size_length'];
            $pur_lay2 = $row_filecode['pur_lay2'];
            $pur_lay3 = $row_filecode['pur_lay3'];
            $pur_3pricefront = $row_filecode['pur_3pricefront'];
            $pur_3type = $row_filecode['pur_3type'];
            $pur_3checkluk = $row_filecode['pur_3checkluk'];
            $pur_3priceluk = $row_filecode['pur_3priceluk'];
            $pur_3pricelumi = $row_filecode['pur_3pricelumi'];
            $pur_Bluk = $row_filecode['pur_Bluk'];
            $pur_9pricemat = $row_filecode['pur_9pricemat'];
            $pur_hor = $row_filecode['pur_hor'];
            $pur_9kae = $row_filecode['pur_9kae'];
            
            $pur_plastic_price   = $row_filecode['pur_plastic_price'];
            $jobs_real_plastic   = $row_filecode['jobs_real_plastic'];
            
            
            $pur_checkP = $row_filecode['pur_checkP'];
            
            $pur_plastic_width = $row_filecode['pur_plastic_width'];
            $pur_plastic_length = $row_filecode['pur_plastic_length'];
            $pur_plastic_thick = $row_filecode['pur_plastic_thick'];
            $pur_company = $row_filecode['pur_company'];
            
            $pur_price_plate  = $row_filecode['pur_price_plate'];
            
             $pur_pricePtype  = $row_filecode['pur_pricePtype'];
            $pur_pricePN  = $row_filecode['pur_pricePN'];
            $pur_priceBoxk  = $row_filecode['pur_priceBoxk'];
            $pur_priceAlu  = $row_filecode['pur_priceAlu'];
            
            $pur_boxPN_R1A = $row_filecode['pur_boxPN_R1A'];
            $pur_boxPN_R1Y = $row_filecode['pur_boxPN_R1Y'];
            $pur_boxPN_R2A = $row_filecode['pur_boxPN_R2A'];
            $pur_boxPN_R2Y = $row_filecode['pur_boxPN_R2Y'];
            $pur_boxPN_R3A = $row_filecode['pur_boxPN_R3A'];
            $pur_boxPN_R3Y = $row_filecode['pur_boxPN_R3Y'];

            // เจ้าหน้าที่ตัวอย่าง
            
            $exa_printAmont = $row_filecode['exa_printAmont'];
            $exa_color = $row_filecode['exa_color'];
            $exa_plastic_width = $row_filecode['exa_plastic_width'];
            $exa_plastic_length = $row_filecode['exa_plastic_length'];
            $exa_plastic_thick = $row_filecode['exa_plastic_thick'];
            $exa_company = $row_filecode['exa_company'];
            $exa_checkpum = $row_filecode['exa_checkpum'];
            $exa_checknopum = $row_filecode['exa_checknopum'];
            $exa_checkpumk = $row_filecode['exa_checkpumk'];
            $exa_R1A = $row_filecode['exa_R1A'];
            $exa_R1AY = $row_filecode['exa_R1AY'];
            $exa_checkR1APN = $row_filecode['exa_checkR1APN'];
            $exa_R1A2 = $row_filecode['exa_R1A2'];
            $exa_R1A2Y = $row_filecode['exa_R1A2Y'];
            $exa_checkR1APK = $row_filecode['exa_checkR1APK'];
            $exa_R1AA = $row_filecode['exa_R1AA'];
            $exa_R1A3Y = $row_filecode['exa_R1A3Y'];
            $exa_R1A_O = $row_filecode['exa_R1A_O'];
            $exa_R2A = $row_filecode['exa_R2A'];
            $exa_R2Y = $row_filecode['exa_R2Y'];
            $exa_R2A2 = $row_filecode['exa_R2A2'];
            $exa_R2A2Y = $row_filecode['exa_R2A2Y'];
            $exa_R3A = $row_filecode['exa_R3A'];
            $exa_R3Y = $row_filecode['exa_R3Y'];
            $exa_R3A2 = $row_filecode['exa_R3A2'];
            $exa_R3A2Y = $row_filecode['exa_R3A2Y'];
            $exa_R4A = $row_filecode['exa_R4A'];
            $exa_R4AY = $row_filecode['exa_R4AY'];
            $exa_R4A2 = $row_filecode['exa_R4A2'];
            $exa_R4A2Y = $row_filecode['exa_R4A2Y'];
            $exa_priceBoxk = $row_filecode['exa_priceBoxk'];
            $exa_priceAlu = $row_filecode['exa_priceAlu'];
            $exa_pricePN = $row_filecode['exa_pricePN'];
            $exa_pricePtype = $row_filecode['exa_pricePtype'];
            $exa_checkPM = $row_filecode['exa_checkPM'];
            $exa_checkPK = $row_filecode['exa_checkPK'];
            $exa_pricePM = $row_filecode['exa_pricePM'];
            $exa_priceLogis = $row_filecode['exa_priceLogis'];
            
            $exa_3front1_type = $row_filecode['exa_3front1_type'];
            $exa_3front2_type = $row_filecode['exa_3front2_type'];
            $exa_3front3_type = $row_filecode['exa_3front3_type'];
            $exa_3front4_type = $row_filecode['exa_3front4_type'];
            
            $exa_4LF_width = $row_filecode['exa_4LF_width'];
            $exa_4LF_lenght = $row_filecode['exa_4LF_lenght'];
            $exa_4LF_layer = $row_filecode['exa_4LF_layer'];
            $man_factor_lf = $row_filecode['man_factor_lf'];
            
            $exa_Bluk = $row_filecode['exa_Bluk'];
            $exa_bluk_pack = $row_filecode['exa_bluk_pack'];
            
            $exa_PN_amount = $row_filecode['exa_PN_amount'];
            
            $exa_3front1_width = $row_filecode['exa_3front1_width'];
            $exa_3front1_lenght = $row_filecode['exa_3front1_lenght'];

            $exa_3front2_width = $row_filecode['exa_3front2_width'];
            $exa_3front2_lenght = $row_filecode['exa_3front2_lenght'];

            $exa_3front3_width = $row_filecode['exa_3front3_width'];
            $exa_3front3_lenght = $row_filecode['exa_3front3_lenght'];

            $exa_3front4_width = $row_filecode['exa_3front4_width'];
            $exa_3front4_lenght = $row_filecode['exa_3front4_lenght'];
            
            $exa_PY_check = $row_filecode['exa_PY_check'];
            
            $exa_printer_width = $row_filecode['exa_printer_width'];
            $exa_printer_lenght = $row_filecode['exa_printer_lenght'];
               // ป้องกันเจ้าหน้าที่ตัวอย่างไม่กรอกข้อมูลมา  
               if($exa_printer_width==''){
                    $exa_printer_width = 1;
                 }
          
                if($exa_printer_lenght==''){
                      $exa_printer_lenght = 1;
                }
            
             // end เจ้าหน้าที่ตัวอย่าง
            // factor ค่าแรงพิมพ์
            $ch_print_wage_value =  $row_filecode['jobs_ch_print_wage'];
            $wage_print_value =  $row_filecode['jobs_print_wage'];
            
            // factor LAMINATE
            $check_lami_factor_value =  $row_filecode['jobs_check_lami_factor'];
            $factor_lami_box_value =  $row_filecode['jobs_factor_lami_box'];
            
            // job dimension
            $job_width =  $row_filecode['job_width'];
            $job_length =  $row_filecode['job_length'];
            $job_hieght =  $row_filecode['job_hieght'];
            
            // รูปแบบงาน
            $job_format =  $row_filecode['job_format'];
           
            // ปั้มนูน 
            
            $exa_PN_R1A = $row_filecode['exa_PN_R1A'];
            $exa_PN_R1Y = $row_filecode['exa_PN_R1Y'];
            $exa_PN_R2A = $row_filecode['exa_PN_R2A'];
            $exa_PN_R2Y = $row_filecode['exa_PN_R2Y'];
            $exa_PN_R3A = $row_filecode['exa_PN_R3A'];
            $exa_PN_R3Y = $row_filecode['exa_PN_R3Y'];
            
           $jobs_real_man_PN1AR = $row_filecode['jobs_real_man_PN1AR'];
           $jobs_real_man_PN2AR = $row_filecode['jobs_real_man_PN2AR'];
           $jobs_real_man_PN3AR = $row_filecode['jobs_real_man_PN3AR'];
            

            // จำนวนรอบ ปั๊มขาด
            $exa_PY_amount = $row_filecode['exa_PY_amount'];
            
            // alu
            $jobs_real_ALU_price = $row_filecode['jobs_real_ALU_price'];
            $jobs_real_price_PY = $row_filecode['jobs_real_price_PY'];
            
            
            
            // ค่าวัสดุพิเศษอื่น ๆ
            $man_price_mat_special = $row_filecode['man_price_mat_special'];
            
            // ค่ากห่อ แกะ
            $man_price_hor = $row_filecode['man_price_hor'];
            $man_price_kea = $row_filecode['man_price_kea'];
            
            // ค่า b ลูกฟูก
            $jobs_real_Blf_price = $row_filecode['jobs_real_Blf_price'];
            
            // ค่าบล็อคปั้มนูน
            $man_total_price_BPNR = $row_filecode['man_total_price_BPNR'];
            
            // ค่าบล็อคปั้มเค
            $man_total_price_BPKR = $row_filecode['man_total_price_BPKR'];
            
            
           
            // get ค่า paper ในตาราง ด้านล่าง 
          $man_calc_paper1 = $row_filecode['man_calc_paper1'];
          $man_calc_paper2 = $row_filecode['man_calc_paper2'];
          $man_calc_paper3 = $row_filecode['man_calc_paper3'];
          $man_calc_paper4 = $row_filecode['man_calc_paper4'];
          $man_calc_paper5 = $row_filecode['man_calc_paper5'];
          $man_calc_paper6 = $row_filecode['man_calc_paper6'];
          
           // get ค่า wage ในตาราง ด้านล่าง
          $man_calc_wage1 = $row_filecode['man_calc_wage1'];
          $man_calc_wage2 = $row_filecode['man_calc_wage2'];
          $man_calc_wage3 = $row_filecode['man_calc_wage3'];
          $man_calc_wage4 = $row_filecode['man_calc_wage4'];
          $man_calc_wage5 = $row_filecode['man_calc_wage5'];
          $man_calc_wage6 = $row_filecode['man_calc_wage6'];
          
           // เก็บค่า Diecut ในตาราง ด้านล่าง
          $man_calc_Diecut1 = $row_filecode['man_calc_Diecut1'];
          $man_calc_Diecut2 = $row_filecode['man_calc_Diecut2'];
          $man_calc_Diecut3 = $row_filecode['man_calc_Diecut3'];
          $man_calc_Diecut4 = $row_filecode['man_calc_Diecut4'];
          $man_calc_Diecut5 = $row_filecode['man_calc_Diecut5'];
          $man_calc_Diecut6 = $row_filecode['man_calc_Diecut6'];
           
           // get ค่า Plate ในตาราง ด้านล่าง
          $man_calc_plate1 = $row_filecode['man_calc_plate1'];
          $man_calc_plate2 = $row_filecode['man_calc_plate2'];
          $man_calc_plate3 = $row_filecode['man_calc_plate3'];
          $man_calc_plate4 = $row_filecode['man_calc_plate4'];
          $man_calc_plate5 = $row_filecode['man_calc_plate5'];
          $man_calc_plate6 = $row_filecode['man_calc_plate6'];
          
            //  get ค่า Trans. ในตาราง ด้านล่าง
          $man_calc_trans1 = $row_filecode['man_calc_trans1'];
          $man_calc_trans2 = $row_filecode['man_calc_trans2'];
          $man_calc_trans3 = $row_filecode['man_calc_trans3'];
          $man_calc_trans4 = $row_filecode['man_calc_trans4'];
          $man_calc_trans5 = $row_filecode['man_calc_trans5'];
          $man_calc_trans6 = $row_filecode['man_calc_trans6'];
          
           // get ค่า SP. ในตาราง ด้านล่าง
          $man_calc_sp1 = $row_filecode['man_calc_sp1'];
          $man_calc_sp2 = $row_filecode['man_calc_sp2'];
          $man_calc_sp3 = $row_filecode['man_calc_sp3'];
          $man_calc_sp4 = $row_filecode['man_calc_sp4'];
          $man_calc_sp5 = $row_filecode['man_calc_sp5'];
          $man_calc_sp6 = $row_filecode['man_calc_sp6'];
          
          //   get ค่า total ในตาราง ด้านล่าง   
          $man_calc_total1 = $row_filecode['man_calc_total1'];
          $man_calc_total2 = $row_filecode['man_calc_total2'];
          $man_calc_total3 = $row_filecode['man_calc_total3'];
          $man_calc_total4 = $row_filecode['man_calc_total4'];
          $man_calc_total5 = $row_filecode['man_calc_total5'];
          $man_calc_total6 = $row_filecode['man_calc_total6'];
          
         
          
          // get ค่า Ream ในตาราง ด้านล่าง
          $man_calc_R1 = $row_filecode['man_calc_R1'];
          $man_calc_R2 = $row_filecode['man_calc_R2'];
          $man_calc_R3 = $row_filecode['man_calc_R3'];
          $man_calc_R4 = $row_filecode['man_calc_R4'];
          $man_calc_R5 = $row_filecode['man_calc_R5'];
          $man_calc_R6 = $row_filecode['man_calc_R6'];
          
          // get ค่า Pieces ในตาราง ด้านล่าง
          $man_calc_pieces1 = $row_filecode['man_calc_pieces1'];
          $man_calc_pieces2 = $row_filecode['man_calc_pieces2'];
          $man_calc_pieces3 = $row_filecode['man_calc_pieces3'];
          $man_calc_pieces4 = $row_filecode['man_calc_pieces4'];
          $man_calc_pieces5 = $row_filecode['man_calc_pieces5'];
          $man_calc_pieces6 = $row_filecode['man_calc_pieces6'];
          
          // รวมค่าปั้มเคจริง
          $man_total_price_PKR = $row_filecode['man_total_price_PKR'];
          
          //  รวมค่าปั๊มนูนจริง
            $man_total_PNR = $row_filecode['man_total_PNR'];
            
            // ค่าแรงปะมือ ปะเครื่อง ค่าวัสดุพิเศษ ห่อ แกะ
            $man_price_wage_PM = $row_filecode['man_price_wage_PM'];
            $man_price_wage_PK = $row_filecode['man_price_wage_PK'];
            
             // ค่าขนส่ง  นน กระดาษ 
            $man_paper_weight = $row_filecode['man_paper_weight'];
           
            $man_price_mat_special = $row_filecode['man_price_mat_special'];
            $man_price_hor = $row_filecode['man_price_hor'];
            $man_price_kea = $row_filecode['man_price_kea'];
            
            // factor B ลูกฟูก
            $man_check_Blf_factor =  $row_filecode['man_check_Blf_factor'];
            
            // 8 factor ค่าขนส่ง
             
             $man_check_logis_factor  = $row_filecode['man_check_logis_factor'];
             
             // 5. Factor ฟอยล์
            $man_check_paperf_factor = $row_filecode['man_check_paperf_factor'];
            $man_factor_paperF  = $row_filecode['man_factor_paperF'];
            // factor ค่าบวกปั๊มเค
            $man_check_plusPK_factor  = $row_filecode['man_check_plusPK_factor'];
            
             // ค่ากระทุ้ง
            
             
              $man_Kratung_price_real = $row_filecode['man_Kratung_price_real'];
              
              $man_kratung_Wprice = $row_filecode['man_kratung_Wprice'];
              $man_kratung_Wprice_real = $row_filecode['man_kratung_Wprice_real'];
              
              // น้าหนักต่อรีม
              $man_weight_perReam = $row_filecode['man_weight_perReam'];
              
              // ขนาดกระดาษเข้าเครื่อง กว้าง ยาว
               $man_printer_lenght = $row_filecode['man_printer_lenght'];
               $man_printer_width = $row_filecode['man_printer_width'];
            
             // check status Factor ฟอยล์
             if ($man_check_paperf_factor =="0.25") {
               $man_checkFf1 = "0.25";
               } 
               
                if ($man_check_paperf_factor =="0.30") {
               $man_checkFf1 = "0.30";
               } 
               
                if ($man_check_paperf_factor =="0.35") {
               $man_checkFf1 = "0.35";
               } 
               
                if ($man_check_paperf_factor =="0.40") {
               $man_checkFf1 = "0.40";
               } 
               
                if ($man_check_paperf_factor =="อื่น ๆ") {
               $man_checkFf1 = $man_factor_paperF;
               } 
               
               
          // check status checkbox
            if ($pur_checkP =="ปั้ม") {
               $pur_checkP1 = "checked";
               } 
               
               if ($pur_checkP =="ไม่ปั้ม") {
                $pur_checkP2 = "checked";
               } 
               
            // check status ค่าแรงพิมพ์
                if ($ch_print_wage_value =="3.0") {
               $ch_print_wage_value1 = "3.0";
               } 
               
               if ($ch_print_wage_value =="3.3") {
                $ch_print_wage_value1 = "3.3";
               } 
               
                if ($ch_print_wage_value =="3.6") {
               $ch_print_wage_value1 = "3.6";
               } 
               
               if ($ch_print_wage_value =="4") {
                $ch_print_wage_value1 = $wage_print_value;
               } 
               
           //  จบการ check status ค่าแรงพิมพ์
            
            // check ปั้มเค
               
               if ($exa_PY_check =="ปั้มขาด") {
               $img_PY = "images/img_checked.png";
               } else {
                $img_PY = "images/img_no_checked.png"; 
               }
          


            // check status ค่า Factor LAMINATE	
                if ($check_lami_factor_value =="0.15") {
               $ch_lami_factor_value1 = "0.15";
               } 
               
               if ($check_lami_factor_value =="0.18") {
                $ch_lami_factor_value1 = "0.18";
               } 
               
                if ($check_lami_factor_value =="0.20") {
               $ch_lami_factor_value1 = "0.20";
               } 
               
               if ($check_lami_factor_value =="4") {
                $ch_lami_factor_value1 = $factor_lami_box_value;
               } 
           //  จบการ check status Factor LAMINATE
            
            mysqli_free_result($result_filecode);
        }
        
        
        ?>



<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
       
   
    
        <h3><p class="text-center">แบบฟอร์มเตรียมคิดราคากล่อง</p></h3>
        <!--  สร้างตาราง -->
       
        <!--  จนท. จัดซื้อ -->
        
        <h3>ชื่อลูกค้า : <?php echo $jobs_contact; ?> ขนาดของงาน : กว้าง <?php echo $job_width; ?> ยาว <?php echo $job_length; ?> สูง <?php echo $job_hieght; ?> รูปแบบงาน : <?php echo $job_format; ?></h3>
        
        <table class="table table-bordered " style="width: 100%">
    <thead>
   
        <tr>
          <td style="font-size: 14pt; width: 94px;" >ผู้รับผิดชอบ</td>
          <td style="font-size: 14pt; width: 141px;" >วันที่ : <b><?php echo $jobs_date; ?></b></td>
          <td colspan="2" style="font-size: 14pt; width: 280px;">FILE : <b><?php echo $jobs_file; ?></b></td>
       
          <td colspan="2" style="font-size: 16pt; text-align: right;">รหัสไฟล์ : <b><?php echo $file_code3; ?></b></td>
      </tr>
    </thead>
    
        </table>
        
      <table class="table table-bordered" style="width: 100%">
    <tbody>
      <tr>
          <td rowspan="2" style="font-size: 14pt; width: 115px;">จนท.จัดซื้อ</td>
          <td style="font-size: 14pt; ">1.ชื่อกระดาษ <b><?php echo $pur_cat; ?></b></td>
        <td style="font-size: 14pt;">ความหนา(แกรม) </td>
        <td style="font-size: 14pt; width: 140px; text-align: center;">SIZE กระดาษ</td>
        <td style="font-size: 14pt; width: 90px;">น้ำหนักต่อรีม</td>
        <td style="font-size: 14pt; width: 90px; text-align: center;">การเลย์</td>
        <td style="font-size: 14pt; width: 150px;">ราคา <b><?php echo $pur_offersale; ?> / <?php echo $paper_price_calc; ?></b></td>
      </tr>
      <tr>
        <th style="font-size: 16pt; text-align: center;"><?php echo $pur_seller; ?>/<?php echo $pur_band; ?></th>
         <th style="font-size: 16pt; text-align: center;"><?php echo $pur_thick; ?></th>
        <th style="font-size: 16pt; text-align: center;"><?php echo $pur_size_width; ?> X <?php echo $pur_size_length; ?></th>
        <th style="font-size: 16pt; text-align: center;"><?php echo $man_weight_perReam; ?></th>
        <th style="font-size: 16pt; text-align: center;">1 - <?php echo $pur_lay2; ?> - <?php echo $pur_lay3; ?></th>
        <th style="font-size: 16pt; text-align: center;"> <?php if($jobs_real_price_save!=''){echo $jobs_real_price_save;} ?></th>
      </tr>
           
    </tbody>
    
      </table>
        
        
      <table class="table table-bordered" style="width: 100%">
      <!-- จนท ตัวอย่าง 2  -->
                   
      <tbody>
         <tr>
                         <td rowspan="3" style="font-size: 14pt; width: 94px;">จนท. ตัวอย่าง</td>
                         <td colspan="5" style="font-size: 14pt;">2. งานพิมพ์ <b>(<?php echo $ch_print_wage_value1; ?>) <?php echo $exa_printAmont; ?> </b>สี <?php echo $exa_color; ?> ค่าแรงพิมพ์ <b><?php echo $jobs_real_wage_save; ?></b> บาท/ชิ้น</td>
                    </tr>
                      <tr>
                          <td colspan="5" style="font-size: 14pt;"><b> <?php echo $ch_print_wage_value1; ?> X <?php echo $man_printer_width; ?> X <?php echo $man_printer_lenght; ?> X <?php echo $exa_printAmont; ?> = <?php echo $jobs_real_wage_save; ?> </b> &nbsp;&nbsp;    ขนาดกระดาษเข้าเครื่อง กว้าง <?php  echo $man_printer_width; ?> ยาว <?php echo $man_printer_lenght; ?></td>

                     </tr>
                     <tr>
                         <td colspan="5" style="font-size: 14pt;">พลาสติก กว้าง <b><?php echo $pur_plastic_width; ?></b>  ยาว <b><?php echo $pur_plastic_length; ?> </b>  หนา <b><?php echo $pur_plastic_thick; ?></b> บริษัท <b><?php echo $pur_company; ?></b> ราคา <b><?php echo $jobs_real_plastic; ?></b>  บ. [ <b><?php echo $pur_checkP; ?></b> ]</td>

                     </tr>
                     
                     
                     
      </tbody>
      </table>
        <?php
        if($exa_3front1_type=='อาบเงา' || $exa_3front1_type=='อาบด้าน'){
            
            $X_simbol1 = '';
        }else {
            $X_simbol1 = 'X';
        }
        
        if($exa_3front2_type=='อาบเงา' || $exa_3front2_type=='อาบด้าน'){
            
            $X_simbol2 = '';
        }else {
            $X_simbol2 = 'X';
        }
        
          if($exa_3front3_type=='อาบเงา' || $exa_3front3_type=='อาบด้าน'){
            
            $X_simbol3 = '';
        }else {
            $X_simbol3 = 'X';
        }
        
          if($exa_3front4_type=='อาบเงา' || $exa_3front4_type=='อาบด้าน'){
            
            $X_simbol4 = '';
        }else {
            $X_simbol4 = 'X';
        }
        
        // ปิดไม่ให้แสดง ถ้าไม่มีการเลือก เคลือบผิวหน้ามา
        if($exa_3front1_type=='-'){
             $exa_3front1_type='';
             $X_simbol1='';
             $jobs_real_Pfront1R_save = '';
             $word_price1 = '';
             $word_baht1 = '';
         } else {
             $word_price1 = 'ราคา';
             $word_baht1 = 'บาท';
         } 
         
        if($exa_3front2_type=='-'){
             $exa_3front2_type='';
             $X_simbol2='';
             $jobs_real_Pfront2R_save = '';
             $word_price2 = '';
             $word_baht2 = '';
         } else {
             $word_price2 = 'ราคา';
             $word_baht2 = 'บาท';
         } 
        
        
        if($exa_3front3_type=='-'){
             $exa_3front3_type='';
             $X_simbol3='';
             $jobs_real_Pfront3R_save = '';
             $word_price3 = '';
             $word_baht3 = '';
         } else {
             $word_price3 = 'ราคา';
             $word_baht3 = 'บาท';
         }
         
        if($exa_3front4_type=='-'){
             $exa_3front4_type='';
             $X_simbol4='';
             $jobs_real_Pfront4R_save = '';
             $word_price4 = '';
             $word_baht4 = '';
         } else {
             $word_price4 = 'ราคา';
             $word_baht4 = 'บาท';
         }
        
        // end of script show เคลือบผิวหน้า
        
        
        ?>
      
        
        <table class="table table-bordered" style="width: 100%">
        
             <tbody>
             <!-- จนท จัดซื้อ 3 4  -->
             
                    <tr>
                         <td rowspan="3" style="font-size: 14pt; width: 94px;">จนท. จัดซื้อ</td>
                         <td colspan="5" style="font-size: 14pt;">3. เคลือบผิวหน้า <b> <?php echo $exa_3front1_type; ?> <?php echo $exa_3front1_width; ?> <?php echo $X_simbol1; ?> <?php echo $exa_3front1_lenght; ?> <?php echo $word_price1; ?> <?php echo $jobs_real_Pfront1R_save; ?> <?php echo $word_baht1; ?> <?php echo $exa_3front2_type; ?> <?php echo $exa_3front2_width; ?> <?php echo $X_simbol2; ?> <?php echo $exa_3front2_lenght; ?> <?php echo $word_price2; ?> <?php echo $jobs_real_Pfront2R_save; ?> <?php echo $word_baht2; ?></b> </td>
                           
                    </tr>
                    <tr>
                        <td colspan="5" style="font-size: 14pt;"> <b><?php echo $exa_3front3_type; ?> <?php echo $exa_3front3_width; ?> <?php echo $X_simbol3; ?> <?php echo $exa_3front3_lenght; ?> <?php echo $word_price3; ?> <?php echo $jobs_real_Pfront3R_save; ?> <?php echo $word_baht3; ?> <?php echo $exa_3front4_type; ?> <?php echo $exa_3front4_width; ?> <?php echo $X_simbol4; ?> <?php echo $exa_3front4_lenght; ?> <?php echo $word_price4; ?> <?php echo $jobs_real_Pfront4R_save; ?> <?php echo $word_baht4; ?></b> </td>
                    </tr>
                 
                      <tr>
                          <td colspan="5" style="font-size: 14pt;">4. ลูกฟูก <b><?php echo $exa_4LF_width; ?> X <?php echo $exa_4LF_lenght; ?></b> จำนวน <b><?php echo $exa_4LF_layer; ?></b> ชั้น ค่าแรงลูกฟูก (<b><?php echo $man_factor_lf; ?></b>) <b><?php echo $jobs_real_lf_price; ?></b> ค่าแรง LAMINATE (<b><?php echo $ch_lami_factor_value1; ?></b>) <b><?php echo $jobs_real_lami_price; ?></b> บ.</td>

                     </tr>
                     
             </tbody>
             
        </table>
        
        
                     
           <table class="table table-bordered" style="width: 100%">
        
             <tbody>     
                     <?php
                     // check ถ้าเป็น  0 ไม่ให้แสดง
                    // 1. 
                     
                     if($jobs_real_price_R1PK2!='0')
                     {
                         
                          $number_pk1 = '1.';
                          $baht_pk1 = 'บ.';
                          $Result_pk1 = '='; 
                          $X_pk1 = 'X';
                        
                          
                     } else {
                         
                           $number_pk1 = '';
                           $baht_pk1 = '';
                           $Result_pk1 = ''; 
                           $X_pk1 = '';
                           $exa_R1A = '';
                           $exa_R1AY = '';
                           $jobs_real_price_R1PK2 = '';
                          
                          
                     }
                     
                     // 2. 
                      if($jobs_real_price_R2PK2!='0')
                     {
                         
                          $number_pk2 = '2.';
                          $baht_pk2 = 'บ.';
                          $Result_pk2 = '='; 
                          $X_pk2 = 'X';
                        
                          
                     } else {
                         
                           $number_pk2 = '';
                           $baht_pk2 = '';
                           $Result_pk2 = ''; 
                           $X_pk2 = '';
                           $exa_R2A = '';
                           $exa_R2Y = '';
                           $jobs_real_price_R2PK2 = '';
                          
                          
                     }
                     
                     // 3. 
                      if($jobs_real_price_R3PK2!='0')
                     {
                         
                          $number_pk3 = '3.';
                          $baht_pk3 = 'บ.';
                          $Result_pk3 = '='; 
                          $X_pk3 = 'X';
                        
                          
                     } else {
                         
                           $number_pk3 = '';
                           $baht_pk3 = '';
                           $Result_pk3 = ''; 
                           $X_pk3 = '';
                           $exa_R3A = '';
                           $exa_R3Y = '';
                           $jobs_real_price_R3PK2 = '';
                          
                          
                     }
                     
                      // 4. 
                      if($jobs_real_price_R4PK2!='0')
                     {
                         
                          $number_pk4 = '4.';
                          $baht_pk4 = 'บ.';
                          $Result_pk4 = '='; 
                          $X_pk4 = 'X';
                        
                          
                     } else {
                         
                           $number_pk4 = '';
                           $baht_pk4 = '';
                           $Result_pk4 = ''; 
                           $X_pk4 = '';
                           $exa_R4A = '';
                           $exa_R4AY = '';
                           $jobs_real_price_R4PK2 = '';
                          
                          
                     }
                     
                     // check ปั๊มนูน
                     // 1.
                     if($exa_PN_R1A!='0'){
                         
                     $number_pn1 = '1.';
                     $X_pn1 = 'X';  
                    
                     }else{
                        $number_pn1 = '';
                        $exa_PN_R1A = '';
                        $X_pn1 = '';
                        $exa_PN_R1Y   = ''; 
                         
                     }
                       
                     // 2.
                     if($exa_PN_R2A!='0'){
                         
                     $number_pn2 = '2.';
                     $X_pn2 = 'X';  
                    
                     }else{
                        $number_pn2 = '';
                        $exa_PN_R2A = '';
                        $X_pn2 = '';
                        $exa_PN_R2Y   = ''; 
                         
                     }
                     
                      // 3.
                     if($exa_PN_R3A!='0'){
                         
                     $number_pn3 = '2.';
                     $X_pn3 = 'X';  
                    
                     }else{
                        $number_pn3 = '';
                        $exa_PN_R3A = '';
                        $X_pn3 = '';
                        $exa_PN_R3Y   = ''; 
                         
                     }
                     
                     
                     
                     
                     ?>
                     
                     
                    <!-- จนท จัดซื้อ 5 6  7 8-->
                     <tr>
                         <td rowspan="6" style="font-size: 14pt; width: 94px;">จนท. ตัวอย่าง</td>
                         <td colspan="5" style="font-size: 14pt;">5. DIE CUT  ปั้มเค (<b><?php echo $man_checkFf1; ?></b> /<b><?php echo $man_check_plusPK_factor; ?></b> ) <?php echo $number_pk1; ?> <b> <?php echo $exa_R1A; ?> <?php echo $X_pk1; ?>  <?php echo $exa_R1AY; ?> <?php echo $Result_pk1; ?>  <?php echo $jobs_real_price_R1PK2; ?></b> <?php echo $baht_pk1; ?>  <?php echo $number_pk2; ?> <b><?php echo $exa_R2A; ?> <?php echo $X_pk2; ?> <?php echo $exa_R2Y; ?>  <?php echo $Result_pk2; ?> <?php echo $jobs_real_price_R2PK2; ?>  <?php echo $baht_pk2; ?> </b>   </td>
                     </tr> 
                     
                      <tr>
                             
                          <td colspan="5" style="font-size: 14pt;"><?php echo $number_pk3; ?> <b><?php echo $exa_R3A; ?> <?php echo $X_pk3; ?> <?php echo $exa_R3Y; ?>  <?php echo $Result_pk3; ?> <?php echo $jobs_real_price_R3PK2; ?></b>  <?php echo $baht_pk3; ?> <?php echo $number_pk4; ?> <b><?php echo $exa_R4A; ?> <?php echo $X_pk4; ?> <?php echo $exa_R4AY; ?>  <?php echo $Result_pk4; ?> <?php echo $jobs_real_price_R4PK2; ?></b> <?php echo $baht_pk4; ?> รวมค่าปั้มเค <b><?php echo $man_total_price_PKR; ?></b> บ.   </td>
                      
                      </tr>
                           
                      <tr>        
                          <td colspan="5" style="font-size: 14pt;"> ปั้มนูน <?php echo $exa_PN_amount; ?>  รอบ  ปั้มนูน <?php echo $number_pn1; ?> <b><?php echo $exa_PN_R1A; ?> <?php echo $X_pn1; ?>  <?php echo $exa_PN_R1Y; ?> </b> <?php echo $number_pn2; ?> <b><?php echo $exa_PN_R2A; ?>  <?php echo $X_pn2; ?>  <?php echo $exa_PN_R2Y; ?> </b>  <?php echo $number_pn3; ?> <b><?php echo $exa_PN_R3A; ?>  <?php echo $X_pn3; ?>  <?php echo $exa_PN_R3Y; ?></b>   </td>
                       
                      </tr>
                    
                      <tr>
                          <td colspan="5" style="font-size: 14pt;">รวมค่าปั้มนูน <b><?php echo $man_total_PNR; ?></b> บ. ปั๊มขาด <b><?php echo $exa_PY_amount;?></b>  รอบ ค่าปั๊มขาด <b><?php echo $jobs_real_price_PY;?></b> บ.  ค่าแรงกระทุ้ง <b><?php  if($man_kratung_Wprice_real !=''){ echo $man_kratung_Wprice_real; }else{ echo ' 0 ';}  ?></b> บ.</td>
                      </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="5" style="font-size: 14pt;">6. ติดกาว    ปะมือ ค่าแรงปะมือ <b><?php echo $man_price_wage_PM; ?></b> บ. &nbsp; ปะเครื่อง  ค่าแรงปะเครื่อง <b><?php if($man_price_wage_PK !=''){echo $man_price_wage_PK;}else{ echo ' 0 ';} ?></b> บ.</td>
                        &euro;
                     </tr>
                    
                     
                   
                     
                     <tr>
                   
                         <td colspan="5" style="font-size: 14pt;"> <input type="checkbox" name="vehicle" value="Bike">8. ค่าขนส่ง (<b><?php echo $man_check_logis_factor  ; ?></b>) นน.กระดาษ <b><?php echo $man_paper_weight; ?></b> ค่าขนส่ง <b><?php echo $jobs_real_price_logis; ?></b> บ.</td>
               
                     </tr>
                     
             </tbody>
           </table>
        
      
        <!-- จนท จัดซื้อ 9 -->
        
         <table class="table table-bordered" style="width: 100%">
        
             <tbody>     
                     
                     
                     
                     
                      <tr>
                         <td rowspan="2" style="font-size: 14pt; width: 94px;">จนท. จัดซื้อ</td>
                         <td colspan="3" style="font-size: 14pt;">9. ค่าวัสดุพิเศษอื่น ๆ  <b><?php echo $man_price_mat_special; ?></b> บ.</td>
                         <td colspan="1" style="font-size: 14pt;">ห่อ <b><?php if($man_price_hor !=''){echo $man_price_hor;}else{echo ' 0 ';} ?></b> บ.</td>
                         <td colspan="1" style="font-size: 14pt;">แกะ <b><?php if($man_price_kea !=''){echo $man_price_kea;}else{echo ' 0 ';} ?></b> บ.</td>
                      </tr>
                      
                    <tr>
                        <td colspan="5" style="font-size: 14pt;">B ลูกฟูก (<b><?php echo $man_check_Blf_factor; ?></b>) ราคา <b><?php echo $pur_Bluk; ?></b> บ./กล่อง บรรจุลังละ <b><?php echo $exa_bluk_pack; ?></b> กล่อง ค่า B ลูกฟูก <b><?php echo $jobs_real_Blf_price; ?></b> บ.</td>
                         
                     </tr>
                     
      </tbody>
      </table>
        
         <table class="table table-bordered" style="width: 100%">
        
             <tbody>    
                   <!--  จนท 10 11-->
                     <tr>
                         <td style="font-size: 14pt; width: 94px;">จนท. ตัวอย่าง</td>
                         <td colspan="3" style="font-size: 14pt;">10. จำนวนเพลท <b><?php echo $pur_price_plate; ?></b> ค่าเพลท <b><?php echo $jobs_real_plate_price; ?></b> บ. </td>
                       

                         <td colspan="5" style="font-size: 14pt;">11. แบบปั๊ม <b><?php echo $pur_lay3; ?></b> ค่าแบบปั๊ม <b><?php echo $jobs_real_pur_pricePtype; ?></b> บ. <br><br> 11.1 ค่าแบบกระทุ้ง <b><?php if($man_Kratung_price_real !=''){echo $man_Kratung_price_real;}else{echo ' 0 ';} ?></b> บ.</td>
                     
                     
                     </tr>
                     
             <!--  จนท 12 13 14-->
             
             </tbody>
             
         </table>
             
            <table class="table table-bordered" style="width: 100%"> 
        
                <tbody>
                    <tr>
                         <td style="font-size: 14pt; width: 94px;">จนท. จัดซื้อ</td>
                         <td colspan="2" style="font-size: 14pt;">12. ค่าบล็อคปั๊มนูน <b><?php echo $man_total_price_BPNR; ?></b> บ.  </td>
                        
                        
                        <td colspan="1" style="font-size: 14pt; width: 180px;">13. ค่าบล็อคปั้มเค <b><?php echo $man_total_price_BPKR; ?></b> บ.</td>

                        <td colspan="2" style="font-size: 14pt;">14. อลูมิเนียม <b><?php echo $jobs_real_ALU_price; ?></b> บ.</td>
                    </tr>
                            
             
                </tbody>
 
     
        
        
        </table>
        
        <p></p>
       
       <!--  TABLE 2  -->
       
    <table class="table table-bordered">
    <thead>
      <tr>
        <th align="center" style="font-size: 14pt;">Order</th>
        <th align="center" style="font-size: 14pt; width: 90px;">Pieces</th>
        <th align="center" style="font-size: 14pt; width: 90px;">Reams</th>
       
        <th align="center" style="font-size: 14pt;">Paper</th>
        <th align="center" style="font-size: 14pt;">Wage</th>
        <th align="center" style="font-size: 14pt;">Diecut</th>
        <th align="center" style="font-size: 14pt;">Plate</th>
        <th align="center" style="font-size: 14pt;">Trans.</th>
       <th align="center" style="font-size: 14pt;">SP</th>
        <th align="center" style="font-size: 14pt;"></th>
        <th align="center" style="font-size: 14pt;"></th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order1; ?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces1; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R1; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper1;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage1;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut1;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate1;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans1;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp1;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total1;?></td>
        <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
     
      <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order2; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces2; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R2;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper2;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage2;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut2;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate2;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans2;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp2;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total2;?></td>
       <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
       
      <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order3; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces3; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R3;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper3;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage3;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut3;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate3;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans3;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp3;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total3;?></td>
       <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
      
        <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order4; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces4; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R4; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper4;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage4;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut4;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate4;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans4;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp4;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total4;?></td>
        <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
      
        <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order5; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces5; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R5; ?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper5;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage5;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut5;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate5;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans5;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp5;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total5;?></td>
        <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
      
        <tr>
        <td align="right" style="font-size: 16pt;"><?php echo $jobs_order6; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_pieces6; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_R6; ?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_paper6;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_wage6;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_Diecut6;?></td>
       <td align="right" style="font-size: 16pt;"><?php echo $man_calc_plate6;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_trans6;?></td>
         <td align="right" style="font-size: 16pt;"><?php echo $man_calc_sp6;?></td>
        <td align="right" style="font-size: 16pt;"><?php echo $man_calc_total6;?></td>
        <th align="center" style="font-size: 16pt; width: 50px;"></th>
      </tr>
      
        
    
    </tbody>
  </table>

  
  <p class="text-left" style="font-size: 16pt;">FM-MKT-02/02 REV:01</p>      
        
 
        
      
  <?php
            $html = ob_get_contents();
            ob_end_clean();
            
             $mpdf = new mPDF('utf-8');
            // $mpdf = new mPDF('','A4',16,'dejavusans');
            //$mpdf = new mPDF('utf-8','A4-L');
            //$mpdf = new mPDF('utf-8', array(100,30)); 
            
            $mpdf->margin_header = 9;
            $mpdf->SetHeader('รายงานโดย ผู้จัดการ Yanhee | FM-MKT-02/02 REV:01 | ออกรายงานเมื่อ '.date('d/m/Y H:i:s'));
            $mpdf->margin_footer = 9;
            $mpdf->SetFooter('หน้าที่ {PAGENO}');
            $stylesheet = file_get_contents('../admin/bootstrap/css/printpdf.css');
            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html,2);
            $mpdf->Output();
            
            exit;
        ?>
    </body>
</html>
