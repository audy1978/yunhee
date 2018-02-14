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
           $jobs_image = $row_filecode['jobs_image'];
            
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
        
        
        // ค้นหา รายละเอียดการสั่งตัวอย่าง
        
          $qry_order_exa = "SELECT * FROM tb_order_exa WHERE filecode='$file_code3'";
        $result_order_exa = mysqli_query($link,$qry_order_exa);
        if ($result_order_exa) {
            $row_order_exa =  mysqli_fetch_array($result_order_exa,MYSQLI_ASSOC);
            
           
           // เพิ่ม แก้ไข 4 รายการ
            
            $product_name = $row_order_exa['product_name'];
            $date_due = $row_order_exa['date_due'];
            $product_code = $row_order_exa['product_code'];
            $customer_no = $row_order_exa['customer_no'];
            
           // GET ข้อมูล 
            
            
            
            $ck_example = $row_order_exa['ck_example'];
            $ck_art_work = $row_order_exa['ck_art_work'];
            $ck_disc = $row_order_exa['ck_disc'];
            $ck_print_prototype = $row_order_exa['ck_print_prototype'];
            $ck_barcode = $row_order_exa['ck_barcode'];
            $ck_etc1 = $row_order_exa['ck_etc1'];
            $etc1 = $row_order_exa['etc1'];
            
            $ck_proof = $row_order_exa['ck_proof'];
            $ck_etc2 = $row_order_exa['ck_etc2'];
            $etc2 = $row_order_exa['etc2'];
            
             $ck_hor = $row_order_exa['ck_hor'];
            $ck_box = $row_order_exa['ck_box'];
            $ck_pallet = $row_order_exa['ck_pallet'];
            
             $proof_locate = $row_order_exa['proof_locate'];
            $manager_sale_dept1 = $row_order_exa['manager_sale_dept1'];
            
            $style_job = $row_order_exa['style_job'];
            
            $exa_result1_date = $row_order_exa['exa_result1_date'];
            $ck_digital_proof1 = $row_order_exa['ck_digital_proof1'];
            $ck_proof_soft1 = $row_order_exa['ck_proof_soft1'];
            $ck_proof_real_paper1 = $row_order_exa['ck_proof_real_paper1'];
            $ck_etc3 = $row_order_exa['ck_etc3'];
            $etc3 = $row_order_exa['etc3'];
            
             $ck_accept1 = $row_order_exa['ck_accept1'];
            $by_box11 = $row_order_exa['by_box11'];
            $exa1_accept_date = $row_order_exa['exa1_accept_date'];
            
            $ck_no_accept1 = $row_order_exa['ck_no_accept1'];
            $by_box12 = $row_order_exa['by_box12'];
            $exa1_no_accept_date = $row_order_exa['exa1_no_accept_date'];
            $detial_edit1 = $row_order_exa['detial_edit1'];
            $plate_value1 = $row_order_exa['plate_value1'];
            $bill_no11 = $row_order_exa['bill_no11'];
            $bill_date11 = $row_order_exa['bill_date11'];
            $type_pum_value1 = $row_order_exa['type_pum_value1'];
            $bill_no12 = $row_order_exa['bill_no12'];
            $bill_date12 = $row_order_exa['bill_date12'];
            
            // -------------------------------------------------
            $exa_result2_date = $row_order_exa['exa_result2_date'];
            $ck_digital_proof2 = $row_order_exa['ck_digital_proof2'];
            $ck_proof_soft2 = $row_order_exa['ck_proof_soft2'];
            $ck_proof_real_paper2 = $row_order_exa['ck_proof_real_paper2'];
            $ck_etc4 = $row_order_exa['ck_etc4'];
            $etc4 = $row_order_exa['etc4'];
            
            $ck_accept2 = $row_order_exa['ck_accept2'];
            $by_box21 = $row_order_exa['by_box21'];
            $exa1_accept_date2 = $row_order_exa['exa1_accept_date2'];
            
            $ck_no_accept2 = $row_order_exa['ck_no_accept2'];
            $by_box22 = $row_order_exa['by_box22'];
            $exa2_no_accept_date = $row_order_exa['exa2_no_accept_date'];
            $detial_edit2 = $row_order_exa['detial_edit2'];
            $plate_value2 = $row_order_exa['plate_value2'];
            $bill_no21 = $row_order_exa['bill_no21'];
            $bill_date21 = $row_order_exa['bill_date21'];
            $type_pum_value2 = $row_order_exa['type_pum_value2'];
            $bill_no22 = $row_order_exa['bill_no22'];
            $bill_date22 = $row_order_exa['bill_date22'];
            
            $product_no = $row_order_exa['product_no'];
            $order_no = $row_order_exa['order_no'];
            $amount = $row_order_exa['amount'];
            
            
            
            $manager_sale_dept2 = $row_order_exa['manager_sale_dept2'];
            
           // ck ตัวอย่าง
            if ($ck_example !="") {
               $ck_example_temp = "checked";
               } 
               
               // ck ART WORK เล่ม
            if ($ck_art_work !="") {
               $ck_art_work_temp = "checked";
               } 
               
               // ck disc
            if ($ck_disc !="") {
               $ck_disc_temp = "checked";
               } 
               
               // ck ฟิล์มต้นฉบับ
            if ($ck_print_prototype !="") {
               $ck_print_prototype_temp = "checked";
               } 
               
                   // ck บาร์โค้ด
            if ($ck_barcode !="") {
               $ck_barcode_temp = "checked";
               } 
               
                   // ck อื่น ๆ 
            if ($ck_etc1 !="") {
               $ck_etc1_temp = "checked";
               } 
               
               // ck บรุ๊ฟ  
            if ($ck_proof !="") {
               $ck_proof_temp = "checked";
               } 
               
                // ck อื่น ๆ 
            if ($ck_etc2 !="") {
               $ck_etc2_temp = "checked";
               } 
               
               // ck ห่อ
            if ($ck_hor !="") {
               $ck_hor_temp = "checked";
               } 
               
               // ck กล่อง
            if ($ck_box !="") {
               $ck_box_temp = "checked";
               } 
               
               // ck พาเลท
            if ($ck_pallet !="") {
               $ck_pallet_temp = "checked";
               } 
               
                 // ck ดิจิตอลบรุ๊ฟ
            if ($ck_digital_proof1 !="") {
               $ck_digital_proof1_temp = "checked";
               } 
               
                  // ck บรุ๊ฟอ่อน
            if ($ck_proof_soft1 !="") {
               $ck_proof_soft1_temp = "checked";
               } 
               
                  // ck บรุ๊ฟกระดาษจริง
            if ($ck_proof_real_paper1 !="") {
               $ck_proof_real_paper1_temp = "checked";
               } 
               
                  // ck อื่น ๆ
            if ($ck_etc3 !="") {
               $ck_etc3_temp = "checked";
               }
               
                    // ck  ยอมรับ
            if ($ck_accept1 !="") {
               $ck_accept1_temp = "checked";
               }
               
               // ck  ไม่ยอมรับ
            if ($ck_no_accept1 !="") {
               $ck_no_accept1_temp = "checked";
               }
               
                  //   ck_digital_proof2
            if ($ck_digital_proof2 !="") {
               $ck_digital_proof2_temp = "checked";
               }
               
                    //   ck_proof_soft2
            if ($ck_proof_soft2 !="") {
               $ck_proof_soft2_temp = "checked";
               }
               
                      //   ck_proof_real_paper2
            if ($ck_proof_real_paper2 !="") {
               $ck_proof_real_paper2_temp = "checked";
               }
               
                     //   ck_etc4
            if ($ck_etc4 !="") {
               $ck_etc4_temp = "checked";
               }
               
                        //   ck_accept2
            if ($ck_accept2 !="") {
               $ck_accept2_temp = "checked";
               }
               
               //   ck_no_accept2
            if ($ck_no_accept2 !="") {
               $ck_no_accept2_temp = "checked";
               }
               
             
               
        }
        
        
        
         // สิ้นสุดการค้นหา รายละเอียดการสั่งตัวอย่าง
        
        
        session_start();
        $_SESSION['file_code'] = $file_code3;
        
     ?>
     
      <!--/สิ้นสุดการค้นหาข้อมูล file code-->
    
    
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <br>
                    <label style="font-size: 18pt;">ใบสั่งทำตัวอย่าง</label>
                                        
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
                       <form class="form-inline" role="form" name="call_job_form" id="call_job_form" method="post" action="order_exa.php">
                                  <div class="form-group">

                                    <p class="form-control-static">เลขที่</p>
                                  </div>
                                  <div class="form-group">

                                      <input type="text" name ="file_code" class="form-control" id="file_code" placeholder="กรอกรหัสไฟล์" style="text-align: right" value="<?php echo $file_code3; ?>">
                                  </div>
                                         <button type="submit" name = "bt_call" id = "bt_call" class="btn btn-primary pull-right">เรียกแฟ้มงาน</button>
                        </form>
         
                    
                   </div>
                    
                 
        
                </div>
                
                   <!-- รูปแบบการ lay   -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left">รูปแบบการ LAY <b>1&nbsp;-&nbsp;<?php echo $pur_lay2; ?>&nbsp;-&nbsp;<?php echo $pur_lay3; ?></b> </td>

                                                   

                                                    <td style="text-align: left">ขนาดสำเร็จสินค้า :&nbsp;<b><?php echo $job_width; ?>&nbsp; x&nbsp; <?php echo $job_length; ?>&nbsp; x&nbsp; <?php echo $job_hieght; ?><b></td>
                                                                <td><img src="jobs/img/<?php echo $jobs_image; ?>" style="width: 200px; height: 200px;"></img></td>

                                                </tr>

                                        </thead> 
                                 </table>

                       </div>
               
                <hr>
                
                <!--  form ส่งไปบันทึก  --> 
                
                <form method="post" id="order_exa_form" name= "order_exa_form"  class="form" action= "order_exa_action.php" >  
            
                    <!--    ป้องกันการ กดปุ่ม enter แล้ว submit form -->
                   <script language="JavaScript">
document.onkeydown = chkEvent 
function chkEvent(e) {
	var keycode;
	if (window.event) keycode = window.event.keyCode; //*** for IE ***//
	else if (e) keycode = e.which; //*** for Firefox ***//
	if(keycode==13)
	{
		return false;
	}
}
</script>

   <!-- รายละเอียดงาน   -->
       <div class="row">
                      <!-- ลูกค้า   -->
                        <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left">ลูกค้า : <b><?php echo $jobs_customer; ?></b> </td>

                                                    <td style="text-align: left">ชื่อ ลูกค้า : <b><?php echo $jobs_contact; ?></b></td>

                                                    <td style="text-align: left">โทรศัพท์ :&nbsp;<b><?php echo $jobs_tel; ?><b></td>


                                                </tr>
                                                  <tr >
                                                  <td style="text-align: left">ชื่อสินค้า :&nbsp;&nbsp;<input type="text" name="product_name" id="product_name" value="<?php echo $product_name; ?>"> </td>

                                                    

                                                    <td style="text-align: left">รหัสสินค้า :&nbsp;&nbsp;<input type="text" name="product_code" id="product_code" value="<?php echo $product_code; ?>"></td>


                                                </tr> 

                                        </thead> 
                                 </table>

                       </div>
               <!-- ชื่อสินค้า   -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left">ชื่อสินค้า :&nbsp;&nbsp;<input type="text" name="product_name" id="product_name" value="<?php echo $product_name; ?>"> </td>

                                                    

                                                    <td style="text-align: left">รหัสสินค้า :&nbsp;&nbsp;<input type="text" name="product_code" id="product_code" value="<?php echo $product_code; ?>"></td>


                                                </tr>

                                        </thead> 
                                 </table>

                       </div>
               
                  <!-- วันที่กำหนดส่ง   -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left">วันที่กำหนดส่ง : &nbsp;&nbsp;<input type="text" name="date_due" id="date_due" value="<?php echo $date_due; ?>"> </td>

                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                    <td style="text-align: left">เลขที่ :&nbsp;&nbsp;<input type="text" name="customer_no" id="customer_no" value="<?php echo $customer_no; ?>"></td>

                   

                                                </tr>

                                        </thead> 
                                 </table>

                       </div>
                  
               
                    
                  
                  <hr>
                  <div class="row">
                      
                      <label>วัสดุที่ได้รับจากลูกค้า </label>    
                  </div>
                  <!-- ตัวอย่าง มี check box   -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left"> <input type="checkbox" name="ck_example" id="ck_example" value="ตัวอย่าง" <?php echo $ck_example_temp; ?> > ตัวอย่าง</td>

                                                   

                                                <td style="text-align: left"><input type="checkbox" name="ck_art_work" id="ck_art_work" value="ART WORK เล่ม"  <?php echo $ck_art_work_temp; ?>> ART WORK เล่ม</td>
      
                                                <td style="text-align: left"><input type="checkbox" name="ck_disc" id="ck_disc" value="แผ่น DISC"  <?php echo $ck_disc_temp; ?> > แผ่น DISC</td>
                                                                
                                                <td style="text-align: left"><input type="checkbox" name="ck_print_prototype" id="ck_print_prototype" value="ฟิล์มต้นฉบับ"  <?php echo $ck_print_prototype_temp; ?> > ฟิล์มต้นฉบับ</td>
      
                                                <td style="text-align: left"><input type="checkbox" name="ck_barcode" id="ck_barcode" value="บาร์โค้ด"  <?php echo $ck_barcode_temp; ?>> บาร์โค้ด</td>
       
                                                <td style="text-align: left"><input type="checkbox" name="ck_etc1" id="ck_etc1" value="อื่น ๆ" <?php echo $ck_etc1_temp; ?>> อื่น ๆ</td>
                                                <td style="text-align: left"><input type="text" name="etc1" id="etc1" value="<?php echo $etc1; ?>"></td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
            
                <!-- สิ่งที่ต้องการ  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                           <tr >
                                               <td style="text-align: left">สิ่งที่ต้องการ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof" id="ck_proof" value="บรุ๊ฟ" <?php echo $ck_proof_temp; ?>> บรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_etc2" id="ck_etc2" value="อื่น ๆ"  <?php echo $ck_etc2_temp; ?> > อื่น ๆ &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="etc2" id="etc2" value="<?php echo $etc2; ?>"></td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
                
                  <!-- กระบรรจุ  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                           <tr >
                                               <td style="text-align: left">การบรรจุ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_hor" id="ck_hor" value="ห่อ" <?php echo $ck_hor_temp; ?>> ห่อ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_box" id="ck_box" value="กล่อง" <?php echo $ck_box_temp; ?>> กล่อง &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_pallet" id="ck_pallet" value="พาเลท" <?php echo $ck_pallet_temp; ?>> พาเลท</td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
                  
                    <!-- สถานที่ส่งบรุ๊ฟ  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                           <tr >
                                               <td style="text-align: left">สถานที่ส่งบรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="proof_locate" id="proof_locate" value="<?php echo $proof_locate; ?>">&nbsp;&nbsp; &nbsp;&nbsp; ลงชื่อ ผจก.ฝ่ายขาย&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="manager_sale_dept1" id="manager_sale_dept1" value="<?php echo $manager_sale_dept1; ?>"> </td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
                    
                    <hr>
                    
                       <!-- ลักษณะงาน  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                           <tr>
                                               <td style="text-align: left">ลักษณะงาน<p><textarea class="form-control" rows="3" id="style_job" name="style_job"><?php echo $style_job; ?></textarea></td>
                                           </tr>
                                           <tr>
                                               <td style="text-align: left">ผลการทำตัวอย่าง ครั้งที่ 1 วันที่ <input type="text" name="exa_result1_date" id="exa_result1_date" value="<?php echo $exa_result1_date; ?>"</td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left"><input type="checkbox" name="ck_digital_proof1" id="ck_digital_proof1" value="ดิจิตอลบรุ๊ฟ" <?php echo $ck_digital_proof1_temp; ?> >&nbsp;&nbsp; ดิจิตอลบรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof_soft1" id="ck_proof_soft1" value="บรุ๊ฟอ่อน" <?php echo $ck_proof_soft1_temp; ?> > บรุ๊ฟอ่อน&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof_real_paper1" id="ck_proof_real_paper1" value="บรุ๊ฟกระดาษจริง" <?php echo $ck_proof_real_paper1_temp; ?> > บรุ๊ฟกระดาษจริง &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_etc3" id="ck_etc3" value="อื่น ๆ" <?php echo $ck_etc3_temp; ?> > อื่น ๆ &nbsp;&nbsp;<input type="text" name="etc3" id="etc3" value="<?php echo $etc3; ?>"></td>
                                       
                                           </tr>
                                           <tr>
                                               <td style="text-align: left"><input type="checkbox" name="ck_accept1" id="ck_accept1" value="ยอมรับ" <?php echo $ck_accept1_temp; ?> >&nbsp;&nbsp; ยอมรับ โดย&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="by_box11" id="by_box11" value="<?php echo $by_box11; ?>"> วันที่&nbsp;&nbsp; <input type="text" name="exa1_accept_date" id="exa1_accept_date" value="<?php echo $exa1_accept_date; ?>"> &nbsp;&nbsp;<input type="checkbox" name="ck_no_accept1" id="ck_no_accept1" value="ไม่ยอมรับ" <?php echo $ck_no_accept1_temp; ?> > ไม่ยอมรับ โดย&nbsp;&nbsp; <input type="text" name="by_box12" id="by_box12" value="<?php echo $by_box12; ?>">&nbsp;&nbsp;วันที่ <input type="text" name="exa1_no_accept_date" id="exa1_no_accept_date" value="<?php echo $exa1_no_accept_date; ?>"></td>
                                       
                                           </tr>
                                           
                                           <tr>
                                               <td style="text-align: left">รายละเอียดการแก้ไข ครั้งที่ 1<p><textarea class="form-control" rows="3" id="detial_edit1" name="detial_edit1" > <?php echo $detial_edit1; ?></textarea></td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left">ค่าเพลท&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="plate_value1" id="plate_value1" value="<?php echo $plate_value1; ?>">&nbsp;&nbsp; &nbsp;&nbsp;บิลเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="bill_no11" id="bill_no11" value="<?php echo $bill_no11; ?>">&nbsp;&nbsp; &nbsp;&nbsp;วันที่ <input type="text" name="bill_date11" id="bill_date11" value="<?php echo $bill_date11; ?>"></td>
                                           </tr>
                                             <tr>
                                                 <td style="text-align: left">ค่าแบบปั้ม&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="type_pum_value1" id="type_pum_value1" value="<?php echo $type_pum_value1; ?>">&nbsp;&nbsp; &nbsp;&nbsp;บิลเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="bill_no12" id="bill_no12" value="<?php echo $bill_no12; ?>">&nbsp;&nbsp; &nbsp;&nbsp;วันที่ <input type="text" name="bill_date12" id="bill_date12" value="<?php echo $bill_date12; ?>"></td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
                       
                       <hr>
                       
                        <!-- ผลการทำตัวอย่าง ครั้งที่ 2  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                       
                                         <tr>
                                               <td style="text-align: left">ผลการทำตัวอย่าง ครั้งที่ 2 วันที่ <input type="text" name="exa_result2_date" id="exa_result2_date" value="<?php echo $exa_result2_date; ?>"></td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left"><input type="checkbox" name="ck_digital_proof2" id="ck_digital_proof2" value="ดิจิตอลบรุ๊ฟ" <?php echo $ck_digital_proof2_temp; ?> >&nbsp;&nbsp; &nbsp;&nbsp;ดิจิตอลบรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof_soft2" id="ck_proof_soft2" value="บรุ๊ฟอ่อน" <?php echo $ck_proof_soft2_temp; ?> > บรุ๊ฟอ่อน&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof_real_paper2" id="ck_proof_real_paper2" value="บรุ๊ฟกระดาษจริง" <?php echo $ck_proof_real_paper2_temp; ?> > บรุ๊ฟกระดาษจริง &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_etc4" id="ck_etc4" value="อื่น ๆ"  <?php echo $ck_etc4_temp; ?> > อื่น ๆ &nbsp;&nbsp;<input type="text" name="etc4" id="etc4" value="<?php echo $etc4; ?>"></td>
                                       
                                           </tr>
                                           <tr>
                                               <td style="text-align: left"><input type="checkbox" name="ck_accept2" id="ck_accept2" value="ยอมรับ" <?php echo $ck_accept2_temp; ?>  >&nbsp;&nbsp; &nbsp;&nbsp;ยอมรับ โดย&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="by_box21" id="by_box21" value="<?php echo $by_box21; ?>"> วันที่&nbsp;&nbsp; <input type="text" name="exa1_accept_date2" id="exa1_accept_date2" value="<?php echo $exa1_accept_date2; ?>"> &nbsp;&nbsp;<input type="checkbox" name="ck_no_accept2" id="ck_no_accept2" value="ไม่ยอมรับ"  <?php echo $ck_no_accept2_temp; ?> > ไม่ยอมรับ โดย&nbsp;&nbsp; <input type="text" name="by_box22" id="by_box22" value="<?php echo $by_box22; ?>">&nbsp;&nbsp;วันที่ <input type="text" name="exa2_no_accept_date" id="exa2_no_accept_date" value="<?php echo $exa2_no_accept_date; ?>"></td>
                                       
                                           </tr>
                                           
                                           <tr>
                                               <td style="text-align: left">รายละเอียดการแก้ไข ครั้งที่ 2<p><textarea class="form-control" rows="3" id="detial_edit2" name="detial_edit2" ><?php echo $detial_edit2; ?></textarea></td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left">ค่าเพลท&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="plate_value2" id="plate_value2" value="<?php echo $plate_value2; ?>">&nbsp;&nbsp; &nbsp;&nbsp;บิลเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="bill_no21" id="bill_no21" value="<?php echo $bill_no21; ?>">&nbsp;&nbsp; &nbsp;&nbsp;วันที่ <input type="text" name="bill_date21" id="bill_date21" value="<?php echo $bill_date21; ?>"></td>
                                           </tr>
                                             <tr>
                                                 <td style="text-align: left">ค่าแบบปั้ม&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="type_pum_value2" id="type_pum_value2" value="<?php echo $type_pum_value2; ?>">&nbsp;&nbsp; &nbsp;&nbsp;บิลเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="bill_no22" id="bill_no22" value="<?php echo $bill_no22; ?>">&nbsp;&nbsp; &nbsp;&nbsp;วันที่ <input type="text" name="bill_date22" id="bill_date22" value="<?php echo $bill_date22; ?>"></td>
                                           </tr>
                                           

                                        </thead> 
                                 </table>

                       </div>
                        
                        <hr>
                        
                          <!-- ใบสั่งผลิตเลขที่  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                       
                                         <tr>
                                             <td style="text-align: left">ใบสั่งผลิตเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="order_produce_no" id="order_produce_no" value="<?php echo $product_no; ?>">&nbsp;&nbsp; &nbsp;&nbsp;ใบสั่งซื้อเลขที่&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="order_buy_no" id="order_buy_no" value="<?php echo $order_no; ?>">&nbsp;&nbsp; &nbsp;&nbsp;จำนวน&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="amount" id="amount" value="<?php echo $amount; ?>"></td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left">ลงชื่อ&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="manager_sale_dept2" id="manager_sale_dept2" value="<?php echo $manager_sale_dept2; ?>">&nbsp;&nbsp; &nbsp;&nbsp;ผจก.ฝ่ายขาย</td>
                                       
                                           </tr>
                                          
                                           

                                        </thead> 
                                 </table>

                       </div>
                       
                    
                    
                
           
      </div>   <!-- จบ row รายละเอียดงาน   -->
   
   <button id="btn_save_order_exa" name="btn_save_order_exa" type="submit" class="btn btn-primary btn-lg" >บันทึกข้อมูล</button> 
   <button id="btn_print_order_exa" name="btn_print_order_exa" type="button" class="btn btn-primary btn-lg" >พิมพ์ใบสั่งตัวอย่าง</button> 
   
               </form>
                <p></p>
   
   <!-- จบ! รายละเอียดงาน   -->
             
     
   
 
  
 

    
	<div id="spin"></div> 
	
	
	<?php // include 'bottom.php'; ?>

    <?php include 'footer.php'; ?>
    
 <!--  ส่งหาไปหา ไฟล์ และ ชื่อลูกค้า  -->
 
 <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/app.min.js"></script>
    
    <script src="admin/bootstrap/js/smoke.min.js"></script>
    
    <script src="admin/bootstrap/js/spin.min.js"></script>
   

  <!--  script บันทึก -->
  
   <script>
            $( document ).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
               
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $('#order_exa_form').on("submit",function(e) {
                   
                   
                        $.ajax({
                            url: 'order_exa_action.php',
                            type: 'POST',
                            data: new FormData( this ),
                            processData: false,
                            contentType: false,
                            dataType: 'json'
                        }).done(function( data ) {
                            if (data.status === "success") {
								
                                $.smkAlert({text: data.message , type: data.status});
                                // กลับไปหน้าหลัก
                                   setTimeout(function(){// wait for 5 secs(2)
                                         //  window.location("index.php"); 
                                           window.location.href = "order_exa.php";
                                         // then reload the page.(3)
                                      }, 2000); 
                              
                            
                                
                            
                             
                                $("#order_exa_form").smkClear();
    
                             } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                           // $("#form2").smkClear();
                            
                        });          
                        e.preventDefault();
                    
               
			    });
                
               
                
            });
    
    </script>
  
  
  
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