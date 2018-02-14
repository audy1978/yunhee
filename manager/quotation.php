<!DOCTYPE html>
<html lang="en">
<?php date_default_timezone_set("Asia/Bangkok");   ?>

<?php include 'head.php'; ?>
<!--/head-->
<body>
     <?php include 'header.php'; ?>
    <!--/header-->
    
   <?php include 'db/config_db.php'; ?>

  
    
    
    <!--/ ค้นหาข้อมูล file code -->
     <?php
     
     include 'db/database.php';
	
        $file_code3 =  $_POST["file_code"];
        
        if($file_code3==''){
                 //  ส่งมาจากหน้า index เพื่อ exit       
           $file_code3 =  $_GET["file_code4"];
        }
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code3'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        if ($result_filecode) {
            $row_filecode =  mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            $user_id = $row_filecode['user_id'];
           $jobs_contact = $row_filecode['jobs_contact'];
           $jobs_customer = $row_filecode['jobs_customer'];
           $jobs_file = $row_filecode['jobs_file'];
           
           $jobs_tel = $row_filecode['jobs_tel'];
           $job_image = $row_filecode['jobs_image'];
            
           $jobs_real_price_save =  $row_filecode['jobs_real_price'];
           $jobs_real_wage_save  =  $row_filecode['jobs_real_wage'];
           
           $jobs_real_Pfront1R_save =  $row_filecode['jobs_real_Pfront1R'];
           $jobs_real_Pfront2R_save =  $row_filecode['jobs_real_Pfront2R'];
           $jobs_real_Pfront3R_save =  $row_filecode['jobs_real_Pfront3R'];
           $jobs_real_Pfront4R_save =  $row_filecode['jobs_real_Pfront4R'];
           
           $jobs_real_lf_price =  $row_filecode['jobs_real_lf_price'];
           $jobs_real_lami_price =  $row_filecode['jobs_real_lami_price'];
           $jobs_real_Blf_price =  $row_filecode['jobs_real_Blf_price'];
           
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
            
            $man_total_price_PK =  $row_filecode['man_total_price_PK'];
            $man_total_price_PN =  $row_filecode['man_total_price_PN'];
            
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
            
            // ค่าบล็อคปั้มนูน
            $pur_priceBoxPN1 = $row_filecode['pur_priceBoxPN1'];
            $pur_priceBoxPN2 = $row_filecode['pur_priceBoxPN2'];
            $pur_priceBoxPN3 = $row_filecode['pur_priceBoxPN3'];
          // ค่าบล็อคปั้มนูนจริง
            $man_real_priceBoxPN1 = $row_filecode['man_real_priceBoxPN1'];
            $man_real_priceBoxPN2 = $row_filecode['man_real_priceBoxPN2'];
            $man_real_priceBoxPN3 = $row_filecode['man_real_priceBoxPN3'];
         // รวมค่าบล็อกปั๊มนูนจริง
           $man_total_price_BPNR = $row_filecode['man_total_price_BPNR'];
           
           // ค่าบล็อคปั้มเค
            $pur_priceBoxPumK1 = $row_filecode['pur_priceBoxPumK1'];
            $pur_priceBoxPumK2 = $row_filecode['pur_priceBoxPumK2'];
            $pur_priceBoxPumK3 = $row_filecode['pur_priceBoxPumK3'];
            $pur_priceBoxPumK4 = $row_filecode['pur_priceBoxPumK4'];
            
            // ค่าบล็อคปั้มเคจริง
            $man_real_priceBoxPK1 = $row_filecode['man_real_priceBoxPK1'];
            $man_real_priceBoxPK2 = $row_filecode['man_real_priceBoxPK2'];
            $man_real_priceBoxPK3 = $row_filecode['man_real_priceBoxPK3'];
            $man_real_priceBoxPK4 = $row_filecode['man_real_priceBoxPK4'];
            // รวมค่าบล็อกปั๊มเคจริง
            $man_total_price_BPKR = $row_filecode['man_total_price_BPKR'];
            
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
            
            $exa_Bluk = $row_filecode['exa_Bluk'];
            $exa_bluk_pack = $row_filecode['exa_bluk_pack'];
            
            $exa_PN_amount = $row_filecode['exa_PN_amount'];
            
            $exa_3front1_width = $row_filecode['exa_3front1_width'];
            $exa_3front1_lenght = $row_filecode['exa_3front1_lenght'];
            $exa_3front1_price = $row_filecode['exa_3front1_price'];

            $exa_3front2_width = $row_filecode['exa_3front2_width'];
            $exa_3front2_lenght = $row_filecode['exa_3front2_lenght'];
            $exa_3front2_price = $row_filecode['exa_3front2_price'];

            $exa_3front3_width = $row_filecode['exa_3front3_width'];
            $exa_3front3_lenght = $row_filecode['exa_3front3_lenght'];
            $exa_3front3_price = $row_filecode['exa_3front3_price'];

            $exa_3front4_width = $row_filecode['exa_3front4_width'];
            $exa_3front4_lenght = $row_filecode['exa_3front4_lenght'];
            $exa_3front4_price = $row_filecode['exa_3front4_price'];
            
            $exa_PY_check = $row_filecode['exa_PY_check'];
            
            $exa_4LF_layer = $row_filecode['exa_4LF_layer'];
            
            // ค่ากระทุ้ง
            
             $exa_Kratung_price = $row_filecode['exa_Kratung_price'];
              $man_Kratung_price_real = $row_filecode['man_Kratung_price_real'];

      // end เจ้าหน้าที่ตัวอย่าง
            

// factor ค่าแรงพิมพ์
            $ch_print_wage_value =  $row_filecode['jobs_ch_print_wage'];
            $wage_print_value =  $row_filecode['jobs_print_wage'];
            
            // factor LAMINATE
            $check_lami_factor_value =  $row_filecode['jobs_check_lami_factor'];
            $factor_lami_box_value =  $row_filecode['jobs_factor_lami_box'];
            
            // factor B ลูกฟูก
            $man_check_Blf_factor =  $row_filecode['man_check_Blf_factor'];
            
            // job dimension
            $job_width =  $row_filecode['job_width'];
            $job_length =  $row_filecode['job_length'];
            $job_hieght =  $row_filecode['job_hieght'];
            
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
            
            //  รวมค่าปั๊มเคจริง
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
           
            // 4. factor ลูกฟูก
            $man_factor_lf = $row_filecode['man_factor_lf'];
            
            // 5. Factor ฟอยล์
            $man_check_paperf_factor = $row_filecode['man_check_paperf_factor'];
            $man_factor_paperF  = $row_filecode['man_factor_paperF'];
             
             $man_check_plusPK_factor  = $row_filecode['man_check_plusPK_factor'];
           
             // 8 factor ค่าขนส่ง
             
             $man_check_logis_factor  = $row_filecode['man_check_logis_factor'];
             
             
             // ค่าคำนวณ total ในตาราง
              $man_calc_total1 = $row_filecode['man_calc_total1'];
              $man_calc_total2 = $row_filecode['man_calc_total2'];
              $man_calc_total3 = $row_filecode['man_calc_total3'];
              $man_calc_total4 = $row_filecode['man_calc_total4'];
              $man_calc_total5 = $row_filecode['man_calc_total5'];
              $man_calc_total6 = $row_filecode['man_calc_total6'];
              
              
              //  get ค่า final ในตาราง ด้านล่าง
          $man_final1 = $row_filecode['man_final1'];
          $man_final2 = $row_filecode['man_final2'];
          $man_final3 = $row_filecode['man_final3'];
          $man_final4 = $row_filecode['man_final4'];
          $man_final5 = $row_filecode['man_final5'];
          $man_final6 = $row_filecode['man_final6'];
              
              // ค่าตัวเลือก เพื่อการตัดสินใจ
            $man_check_sp_factor =  $row_filecode['man_check_sp_factor'];
            $man_factor_SP_box =  $row_filecode['man_factor_SP_box'];
            
            // ค่าแรงปะมือ ค่าแรงปะเครื่อง
            $exa_pm =  $row_filecode['exa_pm'];
            $exa_pk =  $row_filecode['exa_pk'];
            
            // ชนิดลูกฟูก 
               $sales_4LF_type =   $row_filecode['sales_4LF_type'];
               
            // note ของงาน
               $job_note =   $row_filecode['job_note'];
               $exa_job_note =   $row_filecode['exa_job_note'];
               $pur_job_note =   $row_filecode['pur_job_note'];
               $man_job_note =   $row_filecode['man_job_note'];
               
            
            // get ค่าเอกสารแนบของเจ้าหน้าที่ ตัวอย่างและจัดซื้อ
               $pur_fileAtt1 =   $row_filecode['pur_fileAtt1'];
               $pur_fileAtt2 =   $row_filecode['pur_fileAtt2'];
               $pur_fileAtt3 =   $row_filecode['pur_fileAtt3'];
               $pur_fileAtt4 =   $row_filecode['pur_fileAtt4'];
               $pur_fileAtt5 =   $row_filecode['pur_fileAtt5'];
               $pur_fileAtt6 =   $row_filecode['pur_fileAtt6'];
               $pur_fileAtt7 =   $row_filecode['pur_fileAtt7'];
               $pur_fileAtt8 =   $row_filecode['pur_fileAtt8'];
               
               $exa_fileAtt1 =   $row_filecode['exa_fileAtt1'];
               $exa_fileAtt2 =   $row_filecode['exa_fileAtt2'];
               $exa_fileAtt3 =   $row_filecode['exa_fileAtt3'];
               $exa_fileAtt4 =   $row_filecode['exa_fileAtt4'];
               $exa_fileAtt5 =   $row_filecode['exa_fileAtt5'];
               $exa_fileAtt6 =   $row_filecode['exa_fileAtt6'];
               $exa_fileAtt7 =   $row_filecode['exa_fileAtt7'];
               $exa_fileAtt8 =   $row_filecode['exa_fileAtt8'];
           
               
               // ค่าแรงกระทุ้ง 
               $man_kratung_Wprice =   $row_filecode['man_kratung_Wprice'];


// check ค่าแรงปะมือ กับ ค่าแรงปะเครื่อง
              if ($exa_pm =="") {
               $exa_pm_temp = "disabled";
               } 
               
               if ($exa_pk =="") {
               $exa_pk_temp = "disabled";
               } 
               
            
           // check status ค่าตัวเลือก เพื่อการตัดสินใจ
             if ($man_check_sp_factor =="1") {
               $man_checkSP1 = "checked";
               } 
               
                if ($man_check_sp_factor =="1.05") {
               $man_checkSP2 = "checked";
               } 
               
                if ($man_check_sp_factor =="1.08") {
               $man_checkSP3 = "checked";
               } 
               
                if ($man_check_sp_factor =="1.10") {
               $man_checkSP4 = "checked";
               } 
               
                if ($man_check_sp_factor =="ค่าอิสระ") {
               $man_checkSP5 = "checked";
               }   
            
             // check status Factor ฟอยล์
             if ($man_check_paperf_factor =="0.25") {
               $man_checkFf1 = "checked";
               } 
               
                if ($man_check_paperf_factor =="0.30") {
               $man_checkFf2 = "checked";
               } 
               
                if ($man_check_paperf_factor =="0.35") {
               $man_checkFf3 = "checked";
               } 
               
                if ($man_check_paperf_factor =="0.40") {
               $man_checkFf4 = "checked";
               } 
               
                if ($man_check_paperf_factor =="อื่น ๆ") {
               $man_checkFf5 = "checked";
               } 
               
            
            // end of check status factor  ฟอยล์
            
               // check Factor ค่าบวกปั๊มเค
               
               if ($man_check_plusPK_factor =="1") {
               $man_checkPlusPK1 = "checked";
               } 
               
                if ($man_check_plusPK_factor =="1.05") {
               $man_checkPlusPK2 = "checked";
               } 
               
                if ($man_check_plusPK_factor =="1.10") {
               $man_checkPlusPK3 = "checked";
               } 
               
           
               
            // check status ค่าแรงพิมพ์
                if ($ch_print_wage_value =="3.0") {
               $ch_print_wage_value1 = "checked";
               } 
               
               if ($ch_print_wage_value =="3.3") {
                $ch_print_wage_value2 = "checked";
               } 
               
                if ($ch_print_wage_value =="3.6") {
               $ch_print_wage_value3 = "checked";
               } 
               
               if ($ch_print_wage_value =="4") {
                $ch_print_wage_value4 = "checked";
               } 
               
           //  จบการ check status ค่าแรงพิมพ์
            
            
          


            // check status ค่า Factor LAMINATE	
                if ($check_lami_factor_value =="0.15") {
               $ch_lami_factor_value1 = "checked";
               } 
               
               if ($check_lami_factor_value =="0.18") {
                $ch_lami_factor_value2 = "checked";
               } 
               
                if ($check_lami_factor_value =="0.20") {
               $ch_lami_factor_value3 = "checked";
               } 
               
               if ($check_lami_factor_value =="4") {
                $ch_lami_factor_value4 = "checked";
               } 
           //  จบการ check status Factor LAMINATE
               
               // check status ค่า Factor B ลูกฟูก
               if ($man_check_Blf_factor =="1") {
                $check_Blf_factor1 = "checked";
               } 
               if ($man_check_Blf_factor =="2") {
                $check_Blf_factor2 = "checked";
               } 
               if ($man_check_Blf_factor =="3") {
                $check_Blf_factor3 = "checked";
               } 
               
               
                // check status 8. Factor ค่าขนส่ง	
                if ($man_check_logis_factor =="500") {
               $man_check_logis1 = "checked";
               } 
               
               if ($man_check_logis_factor =="1000") {
                $man_check_logis2 = "checked";
               } 
               
                if ($man_check_logis_factor =="1200") {
               $man_check_logis3 = "checked";
               } 
               
               if ($man_check_logis_factor =="1500") {
                $man_check_logis4 = "checked";
               } 
               
               if ($man_check_logis_factor =="3000") {
                $man_check_logis5 = "checked";
               } 
               
               
           //  จบการ 8. Factor ค่าขนส่ง
               
               
            
            mysqli_free_result($result_filecode);
        }
     
     // ค้นหา พนักงานขาย
        
        $qry_user = "SELECT user_fullname FROM tb_user WHERE user_id='$user_id'";
        $result_user = mysqli_query($link,$qry_user);
        if ($result_user) {
            $row_user =  mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            
            $user_fullname = $row_user['user_fullname'];
            
        }
        // สิ้นสุดการค้นหาพนักงานขาย
        
        session_start();
        $_SESSION['file_code'] = $file_code3;
        
     ?>
     
      <!--/สิ้นสุดการค้นหาข้อมูล file code-->
    
    
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>ใบเสนอราคา</h3>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">หน้าหลัก</a></li>
                        <li class="active">เรียกแฟ้มงาน</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

        <div class="container">
            <div class="row">
                <div class="col-md-4">        
              <h4>User name : <? echo $_SESSION['user_fullname'];?></h4>
                </div>
                
               <div class="col-md-4 col-md-offset-4">        
                 <h4>วันที่  : <?php $year1 = date(Y); $day = date("d-m-"); $year2 =$year1+543; echo $day .$year2; ?>   เวลา : <?php echo date("H:i:s")." น."; ?> </h4>
              <div>
               </div>
                
           </div>
                
                <!-- form start -->
                <div class="row">
                 
                   <div class="col-md-4">
                         <form class="form-inline" role="form" name="call_job_form" id="call_job_form" method="post" action="quotation.php">
                                  <div class="form-group">

                                    <p class="form-control-static">รหัสไฟล์</p>
                                  </div>
                                  <div class="form-group">

                                    <input type="text" name ="file_code" class="form-control" id="file_code" placeholder="กรอกรหัสไฟล์" style="text-align: right">
                                  </div>
                                       
                             
                                
                             
                               <button type="submit" name = "bt_call" id = "bt_call" class="btn btn-primary pull-right">เรียกแฟ้มงาน</button>
                        </form>
         
                    
                   </div>
               
                      
        
                </div>
                
                <!--  form ส่งไปพิมพ์  --> 
                
                  <form method="post" id="quota_form" name= "quota_form" class="form" action= "print_quotation.php?file_code=<?php echo $file_code3; ?>" target="_blank" >  
                
                      <div class="row">
                                  <div class="col-md-4">


                                    <p><b>Review ครั้งที่</b>  <input type="text" name ="quota_review"  id="quota_review" placeholder="" style="text-align: right"></p>



                                </div>
                      </div>
   <!-- รายละเอียดงาน   -->
       <div class="row">
              <div class="col-lg-12">
                <div class="left">
                   
                </div>
                                           
               <div class="row">

               
               
                   
                     <div class="row">
                       <div class="col-md-offset-1 col-md-9">
                   
                                        <table class="table table-bordered">
                                                    <thead>
                                                        <tr >
                                                                <th style="text-align: left">เรียน : <input  name="qouta_job_title_box1" id="qouta_job_title_box1" style=" text-align: left; width: 500px" type="text"  style="text-align: right" value="<?php echo $jobs_contact; ?>  "></th>

                                                               <th style="text-align: left">โทรศัพท์ : <?php echo $jobs_tel; ?></th>
                                                                
                                                                <th style="text-align: left">วันที่ :&nbsp;<input  name="quota_date_box" id="quota_date_box" style=" text-align: left; width: 100px" type="text"  style="text-align: right" value=" <?php $year1 = date(Y); $day = date("d-m-"); $year2 =$year1+543; echo $day .$year2; ?>  "></th>
                                                             

                                                            </tr>

                                                    </thead>  
                                                    <tbody>
                                                         <tr>
                                                            
                                                            <th style="text-align: left" colspan="3"><input  name="qouta_job_title_box" id="qouta_job_title_box" style=" text-align: left; width: 500px" type="text"  style="text-align: right" value="<?php echo $jobs_customer; ?>  ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แผ่นที่&nbsp;&nbsp;<input  name="qouta_page1_box" id="qouta_page1_box" style=" text-align: right; width: 50px" type="text"   value="">&nbsp;&nbsp;/&nbsp;&nbsp;<input  name="qouta_page2_box" id="qouta_page2_box" style=" text-align: right; width: 50px" type="text"   value="">&nbsp;&nbsp;รวม&nbsp;&nbsp;<input  name="qouta_page_total_box" id="qouta_page_total_box" style=" text-align: right; width: 50px" type="text"   value="">&nbsp;&nbsp;แผ่น</th>

                                                             
                                                                
                                                          </tr>
                                                             

                                                    </tbody>
                                         </table>
                            </div>
                   </div>
                   
                   
                   
                    
                        <table data-toggle="table" data-striped="true">
                                <thead>
                                        <tr>
                                            <th>บริษัทฯ ขอเสนอราคาค่าผลิต </th>
                                            <th><input  name="qouta_job_file_box" id="qouta_job_file_box" style=" text-align: left; width: 500px; font-weight: bold" type="text" class="form-control"  value="<?php echo $jobs_file; ?>"></th>

                                        </tr>

                                </thead>  
                     </table> 
                  
                        <table data-toggle="table" data-striped="true">
                                <thead>
                                        <tr>
                                            <th>วัสดุกระดาษ </th>
                                            <th><input  name="qouta_paperMatt_box" id="qouta_paperMatt_box" style=" text-align: right; width: 300px" type="text" class="form-control" style="text-align: right" value=""></th>
                                            
                                            <th> &nbsp; &nbsp;    </th>
                                              <th><input  name="qouta_sizeGram_box" id="qouta_sizeGram_box" style=" text-align: right; width: 100px" type="text" class="form-control" style="text-align: right" value="<?php echo $pur_thick_gram; ?> "></th>
                                            
                                             <th> แกรม  </th>
                                        </tr>

                                </thead>  
                     </table> 
                   
                      <table data-toggle="table" data-striped="true">
                                <thead>
                                        <tr>
                                            <th>พิมพ์&nbsp;  </th>
                                            <th><input  name="qouta_amount_color_box" id="qouta_amount_color_box" style=" text-align: right; width: 50px" type="text" class="form-control" style="text-align: right" value=" <?php echo $exa_printAmont; ?> "></th>
                                            
                                            <th> &nbsp;  สี  &nbsp; </th>
                                              <th><input  name="qouta_color_box" id="qouta_color_box" style=" text-align: right; width: 300px" type="text" class="form-control" style="text-align: right" value=""></th>
                                            
                                            
                                        </tr>

                                </thead>  
                     </table>
                   <p></p>
                   <div class="row">
                       <div class="col-md-offset-1 col-md-8">
                   
                                        <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                                <th style="text-align: center;" colspan="2"><input  name="qouta_job_file_box2" id="qouta_job_file_box2" style=" text-align: center; width: 800px; font-weight: bold" type="text" class="form-control"  value="<?php echo $jobs_file; ?>"></th>

                                                              

                                                            </tr>

                                                    </thead>  
                                                    <tbody>
                                                            <tr >
                                                                <th style="text-align: center">จำนวนผลิต</th>

                                                                <th style="text-align: center">ราคา</th>

                                                            </tr>
                                                        
                                                        <tr>
                                                             <th style="text-align: center"><input  name="qouta_amount_box1" style="text-align: right" id="qouta_amount_box1" OnChange="JavaScript:chkNum_addcomma(this)"></th>

                                                                <th style="text-align: center"><input  name="qouta_price_box1" style="text-align: right" id="qouta_price_box1" OnChange="JavaScript:chkNum_addcomma2(this)"></th>

                                                            </tr>
                                                              <tr>
                                                                <th style="text-align: center"><input  name="qouta_amount_box2" style="text-align: right" id="qouta_amount_box2" OnChange="JavaScript:chkNum_addcomma(this)"></th>

                                                                <th style="text-align: center"><input  name="qouta_price_box2" style="text-align: right" id="qouta_price_box2" OnChange="JavaScript:chkNum_addcomma2(this)"></th>

                                                            </tr>
                                                            
                                                            <tr>
                                                                <th style="text-align: center"><input  name="qouta_amount_box3" style="text-align: right" id="qouta_amount_box2" OnChange="JavaScript:chkNum_addcomma(this)"></th>

                                                                <th style="text-align: center"><input  name="qouta_price_box3" style="text-align: right" id="qouta_price_box2" OnChange="JavaScript:chkNum_addcomma2(this)"></th>

                                                            </tr>
                                                            
                                                              <tr>
                                                                <th style="text-align: center"><input  name="qouta_amount_box4" style="text-align: right" id="qouta_amount_box4" OnChange="JavaScript:chkNum_addcomma(this)"></th>

                                                                <th style="text-align: center"><input  name="qouta_price_box4" style="text-align: right" id="qouta_price_box4" OnChange="JavaScript:chkNum_addcomma2(this)"></th>

                                                            </tr>
                                                            
                                                              <tr>
                                                                <th style="text-align: center"><input  name="qouta_amount_box5" style="text-align: right" id="qouta_amount_box5" OnChange="JavaScript:chkNum_addcomma(this)"></th>

                                                                <th style="text-align: center"><input  name="qouta_price_box5" style="text-align: right" id="qouta_price_box5" OnChange="JavaScript:chkNum_addcomma2(this)"></th>

                                                            </tr>
                                                            
                                                            
                                                            

                                                    </tbody>
                                         </table>
                            </div>
                   </div>
                   
                   
                   
                   
                   <div class="row">
                       <div class="col-md-offset-1 col-md-8">
                   
                      <table class="table table-bordered">
                                <thead>
                                    <tr >
                                            <th style="text-align: left">อุปกรณ์พิเศษ  <input  name="qouta_deviceS_box" id="qouta_deviceS_box" style="text-align: right"></th>
                                           
                                            <th style="text-align: left">กำหนดส่งสินค้า <input  name="qouta_dueDeliver_box" id="qouta_dueDeliver_box" style="text-align: right"></th>
                                        
                                        </tr>
                                          <tr >
                                            <th style="text-align: left">สถานที่จัดส่ง <input  name="qouta_location_box" id="qouta_location_box" style="text-align: right"></th>
                                           
                                            <th style="text-align: left">เครดิตเทอม <input  name="qouta_credit_box" id="qouta_credit_box" style="text-align: right" OnChange="JavaScript:chkNum1(this)">&nbsp;วัน</th>
                                        
                                        </tr>
                                          <tr >
                                            <th style="text-align: left">ค่าใช้จ่ายเพิ่มเติม <input  name="qouta_payAdd_box" id="qouta_payAdd_box" style="text-align: right" ></th>
                                           
                                            <th style="text-align: left">การบรรจุ  <input  name="qouta_pack_box" id="qouta_pack_box" style="text-align: right"></th>
                                        
                                        </tr>

                                </thead> 
                      </table>
                       </div>
                   </div>
                           
                   <label>1. ราคาไม่รวมภาษีมูลค่าเพิ่ม </label>
                   <br>
                    <label>2. ราคาเปลี่ยนแปลงตามราคาวัสดุที่ใช้ผลิต  </label> <input  name="qouta_Add2_box" id="qouta_Add2_box" style="text-align: right; width: 400px;" >
                     <br>
                     <label>3. ขนาดกล่อง   <?php echo $job_width; ?> x <?php echo $job_length; ?> x <?php echo $job_hieght; ?>  หน่วยเป็น มม.  </label>
                     <br>
                     <label>4.    <input  name="qouta_Add4_box" id="qouta_Add4_box" style="text-align: right; width: 400px;" ></label>
                     <br>
                     <label>5.    <input  name="qouta_Add5_box" id="qouta_Add5_box" style="text-align: right; width: 400px;" ></label>
                     <br>
                     <label>6.   <input  name="qouta_Add6_box" id="qouta_Add6_box" style="text-align: right; width: 400px;"> </label>
                     <br>
                     <label>7.   <input  name="qouta_Add7_box" id="qouta_Add7_box" style="text-align: right; width: 400px;"> </label>
                     <br>
                     <label>8.   <input  name="qouta_Add8_box" id="qouta_Add8_box" style="text-align: right; width: 400px;"> </label>
                     <label>ชื่อผู้เสนอราคา   <input  name="qouta_name_box" id="qouta_name_box" style="text-align: left; width: 400px;"> ตำแหน่ง   <input  name="qouta_position_box" id="qouta_position_box" style="text-align: left; width: 400px;"></label>
                     
                     
                     
                     
               </div>  
               
                  
                  
             </div>
           
           
           
            </div>
   
   <button id="btn_print_quatation" name="btn_print_quatation" type="submit" class="btn btn-primary btn-lg" >พิมพ์ใบเสนอราคา</button> 
   
                  </form>
                <p></p>
   
   <!-- จบ! รายละเอียดงาน   -->
             
     
   
           
  
 

    
	
	
	
	<?php // include 'bottom.php'; ?>

    <?php include 'footer.php'; ?>
    
 <!--  ส่งหาไปหา ไฟล์ และ ชื่อลูกค้า  -->
 
 
   

  <script language="JavaScript">
			function addCommas(nStr)
			{
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
                        
                        
                        
                        
                        function chkNum(ele)
			{
				var num = parseFloat(ele.value);
				 if(!isNaN(num)){ 
                                  num2 = num.toFixed(2);
                                  ele.value = addCommas(num2);
                                  } 
			}
                        
                        
                            function chkNum1(ele)
			{
				var num = parseFloat(ele.value);
				 if(isNaN(num)){ 
                                   ele.value = '';
                                 } 
			}
                        
                        <!-- ตัวเลข ทศนิยม 2 ตำแหน่ง -->
		
                  function chkNum2(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
			   ele.value = num.toFixed(2);
            
                            }
            
                         }
                
                 function chkNum_addcomma2(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
			   num2 = num.toFixed(2);
                           ele.value = addCommas(num2);
            
                            }
            
                         }
                         
        
                 function chkNum_addcomma(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
			  // num2 = num.toFixed(2);
                           ele.value = addCommas(num);
            
                            }
            
                         }
                         
                           <!-- บังคับเป็นตัวเลข 2 หลัก และ ทศนิยม 3 ตำแหน่ง  ราคา เคลือบหน้า จนท จัดซื้อ --> 
                 
                 function chkNum3(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
                        //   var num2 = num.toPrecision(4);
			var num2 = num.toFixed(3);
                           if(num2<100){
                            ele.value = num2;
                            }else{
                           ele.value = '';
                           }
                                 
                    }
            
                         }
                         
                               <!-- บังคับเป็นตัวเลข 2 หลัก และ ทศนิยม 3 ตำแหน่ง  ราคา เคลือบหน้า จนท จัดซื้อ --> 
                 
                 function chkNum_Kratung(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
                        //   var num2 = num.toPrecision(4);
			var num2 = num.toFixed(3);
                           if(num2<10){
                            ele.value = num2;
                            }else{
                           ele.value = '';
                           }
                                 
                    }
            
                         }
                         
                         
                         
                         



</script>
         
         
         
         
         </body>
         
    


</html>