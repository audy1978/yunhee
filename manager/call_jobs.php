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
            $exa_kratung = $row_filecode['exa_kratung'];

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
            $man_check_pl_factor =  $row_filecode['man_check_pl_factor'];
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
               $man_kratung_Wprice_real =   $row_filecode['man_kratung_Wprice_real'];

               // เพิ่ม 8 กันยายน 2560
            $exa_printer_width  = $row_filecode['exa_printer_width'];
            $exa_printer_lenght  = $row_filecode['exa_printer_lenght'];

            $man_wagePrint1Color  = $row_filecode['man_wagePrint1Color'];
            $man_wagePrint1Color_real  = $row_filecode['man_wagePrint1Color_real'];

            $man_printer_width  = $row_filecode['man_printer_width'];
            $man_printer_lenght  = $row_filecode['man_printer_lenght'];

            // แก้ไข 24 09 2017

            $man_calc_plate1 = $row_filecode['man_calc_plate1'];
            $man_calc_plate2 = $row_filecode['man_calc_plate2'];
            $man_calc_plate3 = $row_filecode['man_calc_plate3'];
            $man_calc_plate4 = $row_filecode['man_calc_plate4'];
            $man_calc_plate5 = $row_filecode['man_calc_plate5'];
            $man_calc_plate6 = $row_filecode['man_calc_plate6'];

// check ค่าแรงปะมือ กับ ค่าแรงปะเครื่อง
              if ($exa_pm =="") {
               $exa_pm_temp = "disabled";
               }

               if ($exa_pk =="") {
               $exa_pk_temp = "disabled";
               }

          // check status ค่าตัวเลือก plate 1 2 3

             if ($man_check_pl_factor =="1") {
               $man_checkPlate1 = "checked";
               }

               if ($man_check_pl_factor =="2") {
               $man_checkPlate2 = "checked";
               }

               if ($man_check_pl_factor =="3") {
               $man_checkPlate3 = "checked";
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

            // $print_wage_calc  นำไปคำนวณ ค่าแรงพิมพ์ต่อ 1 สี

            // check status ค่าแรงพิมพ์
                if ($ch_print_wage_value =="3.0") {
               $ch_print_wage_value1 = "checked";
               $print_wage_calc = 3.0;
               }

               if ($ch_print_wage_value =="3.3") {
                $ch_print_wage_value2 = "checked";
                $print_wage_calc = 3.3;
               }

                if ($ch_print_wage_value =="3.6") {
               $ch_print_wage_value3 = "checked";
               $print_wage_calc = 3.6;
               }

               if ($ch_print_wage_value =="4") {
                $ch_print_wage_value4 = "checked";
                $print_wage_calc = $wage_print_value;
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
                    <h3>แฟ้มงาน(ผู้จัดการ)</h3>

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
                       <form class="form-inline" role="form" name="call_job_form" id="call_job_form" method="post" action="call_jobs.php">
  <div class="form-group">

    <p class="form-control-static">รหัสไฟล์</p>
  </div>
  <div class="form-group">

    <input type="text" name ="file_code" class="form-control" id="file_code" placeholder="กรอกรหัสไฟล์">
  </div>
         <button type="submit" name = "bt_call" id = "bt_call" class="btn btn-primary pull-right">เรียกแฟ้มงาน</button>
</form>


                   </div>

                    <div class="col-md-4">
                        <label>พนักงานขาย : <?php echo $user_fullname; ?></label>

                    </div>

                </div>

   <!-- รายละเอียดงาน   -->
       <div class="row">
              <div class="col-lg-12">
                <div class="left">

                </div>

               <div class="row">
                   <div class="col-md-3">
                   <label>ลูกค้า : <?php echo $jobs_customer; ?>   </label>

                   </div>
                   <div class="col-md-3">

                   <label>File : <?php  echo $jobs_file;  ?></label>
                   </div>
               <div class="col-md-3">

                   <label>รหัสไฟล์ : <?php  echo $file_code3;  ?></label>
                   </div>
                <div class="col-md-3">

                       <img src="<?php echo "../jobs/img/".$job_image; ?>" alt="แนบเอกสารเสนอราคา" style="width:204px;height:128px;">

            </div>

               </div>

             </div>



            </div>

   <!-- จบ! รายละเอียดงาน   -->


   <!-- ขนาดของงาน -->

      <div class="row">


     <div class="col-md-5 col-md-offset-8">

                                  <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ขนาดของงาน &nbsp; &nbsp;กว้าง</th>
                                    <th><input disabled name="job_width_box" id="job_width_box" style="width:60px; text-align: right;" type="text" class="form-control" style="text-align: right" value="<?php echo $job_width; ?>" maxlength="3"  OnChange="JavaScript:chkNum_z(this)"></th>
                                    <th> &nbsp; &nbsp;ยาว</th>
                                    <th><input disabled name="job_length_box" id="job_length_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $job_length; ?>" </th>
                                    <th>&nbsp; &nbsp;สูง</th>
                                    <th><input disabled name="job_height_box" id="job_height_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $job_hieght; ?>" </th>
                                    <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>

                                    </thead>
                                        </table>

                          </div>



   </div>

   <!-- End ขนาดของงาน -->


   <!-- Tab รายละเอียดงาน   -->

   <div class="row">

       <ul class="nav nav-tabs">

<li class="active"><a data-toggle="tab" href="#home">รายละเอียดงาน</a></li>
<li ><a data-toggle="tab" href="#note_file">ข้อความและเอกสารแนบ</a></li>
<li ><a data-toggle="tab" href="#tab1">tab1</a></li>





 </ul>

<div class="tab-content">

<div id="home" class="tab-pane fade in active">

    <p>

  <div class="row">

                <!-- ชื่อกระดาษ -->

       <form method="post" id="sales_edit" name= "sales_edit" class="form" action= "manager_jobs_edit.php" >

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

                  <!--    สิ้นสุด ป้องกันการ กดปุ่ม enter แล้ว submit form -->

           <div class="box box-danger">

                     <div class="row">
                   <div class="col-md-12">
                <div class="col-md-2">

                    <label>1. ชื่อกระดาษ</label>

                </div>

                      <div class="col-xs-2">

                   <button type="button" name = "bt_calc1" id = "bt_calc1" class="btn btn-primary pull-right" onclick="calc_paper()">คำนวณค่ากระดาษ</button>
                    </div>

                     </div>

                     </div>

                <div class="box-body">
                  <div class="row">
                      <div class="col-md-12">
                    <div class="col-xs-1">
                      <label>ประเภท</label>



         <input type="text" class="form-control" style="width:100px;" id="pur_cat_box" value="<?php echo $pur_cat; ?>" placeholder="" >



                    </div>
                    <div class="col-xs-2">
                      <label>ผู้ขาย</label>
               <input type="text" class="form-control" style="width:150px;" id="pur_seller_box" value="<?php echo $pur_seller; ?>" placeholder="" OnChange="JavaScript:chkNum(this)" >

                    </div>
                    <div class="col-xs-1">
                      <label>ยี่ห้อ</label>
                       <input type="text" class="form-control" style="width:100px;" id="pur_band_box" value="<?php echo $pur_band; ?>" placeholder=""  >
                    </div>

                    <div class="col-xs-1">
                        <label>ความหนา</label>
                        <input type="text" class="form-control" style="width:100px; text-align: right;" name="pur_thick_box" id="pur_thick_box" value="<?php echo $pur_thick; ?>" placeholder="" OnChange="JavaScript:chkNum0(this)" required>
                    </div>

                      <div class="col-xs-1">
                        <label>ขนาด</label>
                        <input type="text" class="form-control" style="width:100px; text-align: right;" name="man_SizePaper_box" id="man_SizePaper_box" value="<?php echo $pur_sizepaper; ?>" placeholder="" OnChange="JavaScript:chkNum(this)" >
                    </div>

                      <div class="col-xs-1">
                        <label>แบบ</label>
                        <input type="text" class="form-control" style="width:100px; text-align: right;" name="man_TypePaper_box" id="man_TypePaper_box" value="<?php echo $pur_type; ?>" placeholder="" OnChange="JavaScript:chkNum(this)" >
                    </div>



                    <div class="col-xs-1">
                         <label>ราคาจัดซื้อ</label>
                         <input type="text" class="form-control" style="width:100px; text-align: right;" id="pur_offersale_box" name ="pur_offersale_box" value="<?php echo $pur_offersale; ?>" placeholder=""  onchange="calc_paper()" >
                     </div>

                      <div class="col-xs-1">
                          <label>ราคากระดาษ</label>
                          <input name="paper_price_box" id="paper_price_box" type="text" class="form-control"   value="<?php echo $paper_price_calc; ?>" style="text-align: right;background: #F9E79F " readonly>
                     </div>

                      <div class="col-xs-2">
                            <label> <font color=red>*</font> ราคากระดาษจริง</label>
                            <input name="paper_price_box2"  id="paper_price_box2" type="text" class="form-control" style="width:150px; text-align: right; background: #4FFF7E" value="<?php echo $jobs_real_price_save; ?>" OnChange="JavaScript:chkNum(this)">
                    </div>
                      <div class="col-xs-1">
                          <label> <font color="f7f7f7"> _</font></label>
            <!--         <button type="button" name = "bt_confirm_price_paper" id = "bt_confirm_price_paper" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_paper">ยืนยันราคา</button> -->
                    </div>

                      </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


  <!-- ความหนากระดาษ -->


               <div class="row">
           <div class="col-md-12">

    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th></th>
<th>&nbsp;ความหนา</th>
<th><input name="exa_plastic_thick_box_gram" id="exa_plastic_thick_box_gram" style="width:60px; text-align: right;" type="text" class="form-control" style="text-align: right" value="<?php echo $pur_thick_gram; ?>" maxlength="3"  OnChange="JavaScript:chkNum_z(this)"></th>
<th>แกรม &nbsp; &nbsp;Size กระดาษ  &nbsp;กว้าง</th>
<th><input name="exa_plastic_width_box" id="exa_plastic_width_box" style="width:80px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="8"  value="<?php echo $pur_size_width; ?>" ></th>
<th> &nbsp;ยาว</th>
<th><input name="exa_plastic_length_box" id="exa_plastic_length_box" style="width:80px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="8"  value="<?php echo $pur_size_length; ?>" ></th>
<th>&nbsp; &nbsp;น้ำหนักต่อรีม</th>
<th><input name="man_weight_perReam_box" id="man_weight_perReam_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo number_format((($pur_thick_gram*$pur_size_width*$pur_size_length)/3100)); ?>" ></th>


<th>&nbsp;การเลย์&nbsp; &nbsp;</th>
<th><input name="lay_1" id="lay_1" style="width:50px; text-align: right;" type="text" class="form-control" placeholder="" style="text-align: center" value="1" readonly></th>
<th> &nbsp;-&nbsp; </th>
<th><input name="lay_2" id="lay_2" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay2; ?>" OnChange="JavaScript:chkNum_z(this)"></th>
<th> &nbsp;-&nbsp; </th>
<th><input name="lay_3" id="lay_3" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay3; ?>" OnChange="JavaScript:chkNum_z(this)"></th>



</tr>

</thead>

    </table>
               </div>
</div>


           <!-- จบ ความหนากระดาษ -->

           <?php

               // หากเจ้าหน้าที่ตัวอย่างไม่กรอกมา ให้ กว้าง ยาว (เจ้าหน้าที่ตัวอย่าง = 1

           if($exa_printer_width==''){
               $exa_printer_width = 1;
           }

           if($exa_printer_lenght==''){
               $exa_printer_lenght = 1;
           }

           ?>

                <div class="row">
                 <div class="col-md-12">
    <table data-toggle="table" data-striped="true">
<thead>
    <tr>
         <th >&nbsp;ขนาดกระดาษเข้าเครื่อง <font color=red>*&nbsp;</font>กว้าง  &nbsp; </th>
         <th><input name="man_printer_width_box" id="man_printer_width_box" style="width:60px; text-align: right;"  type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $man_printer_width; ?>"   required OnChange="JavaScript:chkNum2(this)"></th>
        <th>&nbsp; &nbsp;และ <font color=red>*&nbsp;</font> ยาว &nbsp;</th>
        <th><input name="man_printer_lenght_box" id="man_printer_lenght_box" style="width:60px; text-align: right;"  type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $man_printer_lenght; ?>" required OnChange="JavaScript:chkNum2(this)"></th>
        <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
        <th><button  id="btn_confirm_manager" name="btn_confirm_manager" type="submit" class="btn btn-primary" >บันทึก</button>  </th>
    </tr>
</thead>
    </table>
                </div>
                </div>





           <hr>
                <!-- การเลย์ / ราคาจริง / คำนวณได้ -->


              <!-- จบ การเลย์ / ราคาจริง / คำนวณได้ --><!--/.col-md-4--><!--/.col-md-4--><!--/.col-md-4-->





    <!-- งานพิมพ์จำนวน -->

     <div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th></th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. งานพิมพ์  จำนวน</th>
<th><input type="text" class="form-control" style="width:50px; text-align: right;" id="exa_printAmont_box" name="exa_printAmont_box" value="<?php echo $exa_printAmont; ?>" placeholder="" OnChange="JavaScript:chkNum0(this)" ></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
<th>สี&nbsp; &nbsp;</th>
<th> <input type="text" class="form-control" id="exa_color_box" name="exa_color_box" value="<?php echo $exa_color; ?>" placeholder="">  </th>

<th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
<th> <button type="button" name = "bt_calc_wage" id = "bt_calc_wage" class="btn btn-primary pull-right" onclick="calc_wage()">คำนวณค่าแรงพิมพ์(WAGE)</button></th>
<?php
   // คำนวน ค่าแรงพิมพ์ต่อ 1 สี
   $cal_wagePrintColor = $print_wage_calc*$man_printer_width*$man_printer_lenght;


   $man_wagePrint1Color1 = extract_int($man_wagePrint1Color_real);
   $man_wagePrint1Color  = number_format($cal_wagePrintColor,2);
   if($cal_wagePrintColor<1800 && $man_wagePrint1Color1<1800){
            echo "<script>alert('ค่าแรงพิมพ์ต่อ 1 สี ต้องมีค่าเริ่มต้นที่ 1,800 บาท');</script>";

         $man_wagePrint1Color_real = '1,800.00';
     }

     if($cal_wagePrintColor>=1800){
        $man_wagePrint1Color = number_format($cal_wagePrintColor,2);
        $man_wagePrint1Color_real = $man_wagePrint1Color;
     }

       if($man_wagePrint1Color_real ==''){
              $man_wagePrint1Color_real = $man_wagePrint1Color;
         }

?>

<th>&nbsp; &nbsp;ค่าจริงที่คำนวณได้&nbsp;</th>
<th> <input type="text" class="form-control" id="man_wagePrint1Color_box" name="man_wagePrint1Color_box" style="width:80px; text-align: right; background: #F9E79F" value="<?php echo $man_wagePrint1Color; ?>">  </th>

<th>&nbsp; &nbsp;ค่าแรงพิมพ์ต่อ 1 สี จริง&nbsp;</th>
<th> <input type="text" class="form-control" id="man_wagePrint1Color_real_box" name="man_wagePrint1Color_real_box" style="width:80px; text-align: right; background: #4FFF7E" value="<?php echo $man_wagePrint1Color_real; ?>" placeholder="" OnChange="JavaScript:chkNum(this)">  </th>

</thead>
    </table>

</div>
    <p>
    <!-- จบ งานพิมพ์จำนวน -->

    <!-- ค่าแรงพิมพ์ -->
    <div class="row">

     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th><font color=red>&nbsp; &nbsp;&nbsp; &nbsp;*</font> ค่าแรงพิมพ์</th>

    <th>&nbsp; &nbsp;&nbsp; &nbsp;<input  id="ch_wage1" name="ch_print_wage" value="3" type="radio" <?php echo $ch_print_wage_value1; ?>>  3.0 </th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;<input   id="ch_wage2" name="ch_print_wage" value="3.3" type="radio" <?php echo $ch_print_wage_value2; ?>>  3.3</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;<input   id="ch_wage3"name="ch_print_wage" value="3.6" type="radio" <?php echo $ch_print_wage_value3; ?>>  3.6</th>

<th>&nbsp; &nbsp;&nbsp; &nbsp;<input   id="ch_wage4" name="ch_print_wage" value="4" type="radio" <?php echo $ch_print_wage_value4; ?>>  อื่น ๆ</th>
<th><input type="text" class="form-control" style="width:60px;" id="print_wage" name="print_wage" placeholder="" maxlength="3" value="<?php echo $wage_print_value; ?>" onkeypress="return isNumberKey(event)" disabled></th>

<th>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;ค่าแรงพิมพ์&nbsp; &nbsp;</th>
<th><input type="text" class="form-control"   style="width:150px; text-align: right; background: #F9E79F" id="wage_print_box" name="wage_print_box" value="<?php echo $wage_print_calc; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th><font color=red>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;*</font> ค่าแรงพิมพ์จริง&nbsp; &nbsp;</th>
<th><input type="text" class="form-control" style="width:150px; text-align: right; background: #4FFF7E" id="wage_print_box2" name="wage_print_box2" placeholder="" value="<?php echo $jobs_real_wage_save; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; &nbsp;&nbsp;</th>
<!-- <th><button type="button" name = "bt_calc1" id = "bt_calc1" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_wage">ยืนยันราคา</button></th>  -->
</tr>
</thead>
     </table>

    </div>


    <!-- End ค่าแรงพิมพ์ -->



    <!--  พลาสติก กว้าง -->
    <p>
    <div class="row">

     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;พลาสติก&nbsp; &nbsp;&nbsp; &nbsp;</th>
<th>กว้าง&nbsp; </th>
<th><input type="text" class="form-control" style="width:80px; text-align: right;" id="exa_plastic_width_box2" name="exa_plastic_width_box2" value="<?php echo $pur_plastic_width; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;ยาว&nbsp; </th>
<th><input type="text" class="form-control" style="width:80px; text-align: right;" id="exa_plastic_length_box2" name="exa_plastic_length_box2" value="<?php echo $pur_plastic_length; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;หนา&nbsp;</th>

<th><input type="text" class="form-control" style="width:80px; text-align: right;" id="exa_plastic_thick_box" name="exa_plastic_thick_box" value="<?php echo $pur_plastic_thick; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;บริษัท&nbsp;</th>
<th><input type="text" class="form-control" style="width:150px;" id="exa_company_box" name="exa_company_box" value="<?php echo $pur_company; ?>" placeholder="" ></th>

<th>&nbsp;&nbsp;ราคา</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="price_plastic" name="price_plastic" placeholder="" value="<?php echo number_format($pur_plastic_price,2); ?>" OnChange="JavaScript:chkNum(this)"></th>
<th><font color=red>&nbsp;&nbsp;*</font> ราคาจริง</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="price_plastic2" name="price_plastic2" placeholder="" value="<?php echo number_format($jobs_real_plastic,2); ?>" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp; &nbsp;&nbsp; &nbsp;[ <?php echo $pur_checkP; ?> ]</th>

</tr>
</thead>
     </table>

    </div>
    <!-- จบ พลาสติก กว้าง -->
    <hr>



   <div class="row">
     <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>&nbsp;&nbsp;3. เคลือบผิวหน้าแบบ</th>
<th><input type="text" class="form-control" id="exa_3front1_type_box" name="exa_3front1_type_box" value="<?php echo $exa_3front1_type; ?>" style="width:110px;"  placeholder="" ></th>

<th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<th><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front1_width_box" name="exa_3front1_width_box" placeholder=""   value="<?php echo $exa_3front1_width; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<th><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front1_lenght_box" name="exa_3front1_lenght_box" placeholder=""  value="<?php echo $exa_3front1_lenght; ?>" OnChange="JavaScript:chkNum(this)"></th>


<th>&nbsp;&nbsp;ราคาเคลือบผิวหน้า</th>
<th><input type="text" class="form-control"  style="width:100px; text-align: right; background: #F9E79F" id="price_front1" name="price_front1" value="<?php echo $price_front1_calc; ?>" placeholder="" ></th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าเคลือบผิวจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_front1R" name="price_front1R" placeholder="" value="<?php echo $jobs_real_Pfront1R_save; ?>" OnChange="JavaScript:chkNum3(this)"></th>

</tr>
</thead>
     </table>
   </div>
    </div>

    <p>

    <div class="row">
      <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>&nbsp; &nbsp;&nbsp;&nbsp; เคลือบผิวหน้าแบบ</th>
<th><input type="text" class="form-control" style="width:110px;"  placeholder="" id="exa_3front2_type_box" name="exa_3front2_type_box" value="<?php echo $exa_3front2_type; ?>" ></th>

 <th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front2_width_box" name="exa_3front2_width_box" placeholder=""    value="<?php echo $exa_3front2_width; ?>" OnChange="JavaScript:chkNum(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front2_lenght_box" name="exa_3front2_lenght_box" placeholder=""   value="<?php echo $exa_3front2_lenght; ?>" OnChange="JavaScript:chkNum(this)"></td>



<th>&nbsp;&nbsp;ราคาเคลือบผิวหน้า</th>
<th><input type="text" class="form-control"  style="width:100px; text-align: right; background: #F9E79F" id="price_front2" name= "price_front2" value="<?php echo $price_front2_calc; ?>" placeholder="" ></th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าเคลือบผิวจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_front2R" name= "price_front2R" value="<?php echo $jobs_real_Pfront2R_save; ?>" placeholder="" OnChange="JavaScript:chkNum3(this)" ></th>

</tr>
</thead>
     </table>
    </div>
    </div>

    <p>

    <div class="row">
     <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th> &nbsp; &nbsp; &nbsp;  เคลือบผิวหน้าแบบ</th>
<th><input type="text" class="form-control" style="width:110px;"  placeholder="" id="exa_3front3_type_box" name="exa_3front3_type_box" value="<?php echo $exa_3front3_type; ?>" ></th>

<th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front3_width_box" name="exa_3front3_width_box" placeholder=""    value="<?php echo $exa_3front3_width; ?>" OnChange="JavaScript:chkNum(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front3_lenght_box" name="exa_3front3_lenght_box" placeholder=""   value="<?php echo $exa_3front3_lenght; ?>" OnChange="JavaScript:chkNum(this)"></td>



<th>&nbsp;&nbsp;ราคาเคลือบผิวหน้า</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="price_front3" name="price_front3" placeholder="" value="<?php echo $price_front3_calc; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าเคลือบผิวจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_front3R" name="price_front3R" placeholder="" value="<?php echo $jobs_real_Pfront3R_save; ?>" OnChange="JavaScript:chkNum3(this)"></th>

</tr>
</thead>
     </table>
    </div>
    </div>

    <p>

    <div class="row">
     <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>  &nbsp; &nbsp;  &nbsp; เคลือบผิวหน้าแบบ</th>
<th><input type="text" class="form-control" style="width:110px;"  placeholder="" id="exa_3front4_type_box" name="exa_3front4_type_box" value="<?php echo $exa_3front4_type; ?>" ></th>

 <th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front4_width_box" name="exa_3front4_width_box" placeholder=""   value="<?php echo $exa_3front4_width; ?>" OnChange="JavaScript:chkNum(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front4_lenght_box" name="exa_3front4_lenght_box" placeholder=""   value="<?php echo $exa_3front4_lenght; ?>" OnChange="JavaScript:chkNum(this)"></td>



<th>&nbsp;&nbsp;ราคาเคลือบผิวหน้า</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="price_front4" name="price_front4" placeholder="" value="<?php echo $price_front4_calc; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าเคลือบผิวจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_front4R" name="price_front4R" placeholder="" value="<?php echo $jobs_real_Pfront4R_save; ?>" OnChange="JavaScript:chkNum3(this)"></th>

<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_front" id = "bt_confirm_price_front" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_front">ยืนยันราคา</button>
          </th>  -->
</tr>
</thead>
     </table>



    </div>
    </div>

    <p>



    <div class="row">
        <div class="col-md-12">
      &nbsp;&nbsp;  <button type="button" name = "bt_calc_front" id = "bt_calc_front" class="btn btn-primary"  >คำนวณค่าเคลือบผิวหน้า</button>
        </div>
    </div>

    <p>


       <hr>

   <div class="row">

     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. ลูกฟูก</th>
<th><input type="text" class="form-control" style="width:60px; text-align: right;" id="factor_lf_box" name="factor_lf_box" value="<?php echo $man_factor_lf; ?>" placeholder="" ></th>
<th>&nbsp; ราคาต่อตารางฟุต</th>
<th> &nbsp;&nbsp;กว้าง</th>
<th><input disabled type="text" class="form-control" style="width:70px; text-align: right;" id="lf_width_box" name="lf_width_box" value="<?php echo $exa_4LF_width; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th> &nbsp;&nbsp;ยาว</th>
<th><input disabled type="text" class="form-control" style="width:70px; text-align: right;" id="lf_length_box" name="lf_length_box" value="<?php echo $exa_4LF_lenght; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th> &nbsp;&nbsp;จำนวน</th>
<th><input disabled type="text" class="form-control" style="width:40px; text-align: right;" id="amount_layer_box" name="amount_layer_box" value="<?php echo $exa_4LF_layer; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;ชั้น</th>

<th>&nbsp; &nbsp;ชนิดลูกฟูก</th>
<th><input type="text" class="form-control" style="width:220px; text-align: right; background: #F9E79F" id="man_TypeLF_box" name="man_TypeLF_box" value="<?php echo $sales_4LF_type; ?>" placeholder="" ></th>

<th>&nbsp; &nbsp;&nbsp;ค่าลูกฟูก</th>
<th><input type="text" class="form-control" style="width:70px; text-align: right; background: #F9E79F" id="lf_price_box" name="lf_price_box" value="<?php echo $lf_price_calc; ?>" placeholder="" ></th>

<th><font color=red>&nbsp; &nbsp;&nbsp;*</font> ค่าลูกฟูกจริง</th>
<th><input type="text" class="form-control" style="width:70px; text-align: right; background: #4FFF7E" id="lf_price_box2" name="lf_price_box2" placeholder="" value="<?php echo $jobs_real_lf_price; ?>" OnChange="JavaScript:chkNum(this)"></th>

</tr>
</thead>
     </table>

    </div>

    <p>


    <p>



<div class="row">

     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;LAMINATE</th>
<th>&nbsp;&nbsp;<input id ="check_lami_factor1" name ="check_lami_factor" type="radio" value="0.15" <?php echo $ch_lami_factor_value1; ?>>  0.15 </th>
<th>&nbsp;&nbsp;<input id ="check_lami_factor2" name ="check_lami_factor" type="radio" value="0.18" <?php echo $ch_lami_factor_value2; ?>>  0.18</th>
<th>&nbsp;&nbsp;<input id ="check_lami_factor3" name ="check_lami_factor" type="radio" value="0.20" <?php echo $ch_lami_factor_value3; ?>>  0.20</th>
<th>&nbsp;&nbsp;<input id ="check_lami_factor4" name ="check_lami_factor" type="radio" value="4" <?php echo $ch_lami_factor_value4; ?>>  อื่น ๆ</th>
<th><input disabled type="text" class="form-control" style="width:60px;" id="factor_lami_box" name="factor_lami_box" value="<?php echo $factor_lami_box_value; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

 <th>  &nbsp; &nbsp;&nbsp;ค่า LAMINATE</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="lami_price_box" name="lami_price_box" value="<?php echo $lami_price_calc; ?>" placeholder="" > </th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่า LAMINATE จริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="lami_price_box2" name="lami_price_box2" value="<?php echo $jobs_real_lami_price; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_4" id = "bt_confirm_price_4" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_4">ยืนยันราคา</button>
          </th>  -->
</tr>
</thead>
     </table>

    </div>

    <p>

         <div class="row">
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;     <button type="button" name = "bt_calc_lf" id = "bt_calc_lf" class="btn btn-primary"  >คำนวณราคาลูกฟูก</button>
        </div>

    <div class="row">

     <table data-toggle="table" data-striped="true">
<thead>
<tr>

 <th>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;B ลูกฟูก</th>
<th>&nbsp;&nbsp;<input id ="check_Blf_factor1" name ="check_Blf_factor" type="radio" value="1" <?php echo $check_Blf_factor1; ?>>  1 </th>
<th>&nbsp;&nbsp;<input id ="check_Blf_factor2" name ="check_Blf_factor" type="radio" value="2" <?php echo $check_Blf_factor2; ?>>  2</th>
<th>&nbsp;&nbsp;<input id ="check_Blf_factor3" name ="check_Blf_factor" type="radio" value="3" <?php echo $check_Blf_factor3; ?>>  3</th>

 <th>&nbsp; &nbsp;&nbsp;ราคา</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right;" id="exa_Bluk_box" name="exa_Bluk_box" value="<?php echo $pur_Bluk; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; บาท/กล่อง</th>
<th>&nbsp; &nbsp;&nbsp;</th>
<th>&nbsp; &nbsp;&nbsp;บรรจุลังละ</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right;" id="exa_bluk_pack_box" name="exa_bluk_pack_box" value="<?php echo $exa_bluk_pack; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;กล่อง</th>

<th>&nbsp;&nbsp;ค่า B ลูกฟูก</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="Blf_price_box" name="Blf_price_box" value="<?php echo $Blf_price_calc; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th><font color=red>&nbsp;&nbsp;*</font> ค่า B ลูกฟูกจริง</th>
<th><input type="text" class="form-control" style="width:150px; text-align: right; background: #4FFF7E" id="Blf_price_box2" name="Blf_price_box2" value="<?php echo $jobs_real_Blf_price; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>


</tr>
</thead>
     </table>

    </div>


    <p>

    <div class="row">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type="button" name = "bt_calc_B_lf" id = "bt_calc_B_lf" class="btn btn-primary"  >คำนวณราคา B ลูกฟูก</button>
    </div>


    <hr>

    <!--   ข้อ 5 -->

    <div class = "row">
   <div class="col-md-12">

   <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>  &nbsp; &nbsp;5. ฟอยล์</th>
    <th>&nbsp;&nbsp;<input id ="check_paperF_factor1" name ="check_paperf_factor" type="radio" value="0.25" <?php echo $man_checkFf1; ?>>  0.25 </th>
<th>&nbsp;&nbsp;<input id ="check_paperF_factor2" name ="check_paperf_factor" type="radio" value="0.30" <?php echo $man_checkFf2; ?>>  0.30</th>
<th>&nbsp;&nbsp;<input id ="check_paperF_factor3" name ="check_paperf_factor" type="radio"value="0.35" <?php echo $man_checkFf3; ?>>  0.35</th>
<th>&nbsp;&nbsp;<input id ="check_paperF_factor4" name ="check_paperf_factor" type="radio"value="0.40" <?php echo $man_checkFf4; ?>>  0.40</th>
<th>&nbsp;&nbsp;<input id ="check_paperF_factor5" name ="check_paperf_factor" type="radio"value="อื่น ๆ" <?php echo $man_checkFf5; ?>>  อื่น ๆ</th>
<th><input disabled type="text" class="form-control" style="width:60px;" id="factor_paperF_box" name="factor_paperF_box" value="<?php echo $man_factor_paperF; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;</th>
<th>  &nbsp; &nbsp;ค่าบวกปั๊มเค</th>
<th>&nbsp;&nbsp;<input id ="check_plusPK_factor1" name ="check_plusPK_factor" type="radio" value="1" <?php echo $man_checkPlusPK1; ?>>  1% </th>
<th>&nbsp;&nbsp;<input id ="check_plusPK_factor2" name ="check_plusPK_factor" type="radio" value="1.05" <?php echo $man_checkPlusPK2; ?>>  5%</th>
<th>&nbsp;&nbsp;<input id ="check_plusPK_factor3" name ="check_plusPK_factor" type="radio" value="1.10" <?php echo $man_checkPlusPK3; ?>>  10%</th>
</tr>
</thead>
     </table>

        <p>

<table data-toggle="table" data-striped="true">


 <thead>
<tr>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th>ปั้มเค </th>
<th>1 ก.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R1KA_box" id="exa_R1KA_box" value="<?php echo number_format($exa_R1A,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ย.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R1KY_box" id="exa_R1KY_box" value="<?php echo number_format($exa_R1AY,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="price_R1PK_box" name="price_R1PK_box" value="<?php echo $price_R1PK_calc; ?>" placeholder="" </th>
<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="price_R1PK2_box" name="price_R1PK2_box" value="<?php echo $jobs_real_price_R1PK2; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ปั้มเค </th>
<th>2 ก.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R2KA_box" id="exa_R2KA_box" value="<?php echo number_format($exa_R2A,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ย.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R2KY_box" id="exa_R2KY_box" value="<?php echo number_format($exa_R2Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="price_R2PK_box"  name="price_R2PK_box" placeholder="" value="<?php echo $price_R2PK_calc; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="price_R2PK2_box"  name="price_R2PK2_box" value="<?php echo $jobs_real_price_R2PK2; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>


</tr>
</thead>



<tbody>
<tr>

<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th>ปั้มเค </th>
<th>3 ก.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R3KA_box" id="exa_R3KA_box" value="<?php echo number_format($exa_R3A,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ย.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R3KY_box" id="exa_R3KY_box" value="<?php echo number_format($exa_R3Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="price_R3PK_box" name="price_R3PK_box" placeholder="" value="<?php echo $price_R3PK_calc; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="price_R3PK2_box" name="price_R3PK2_box" value="<?php echo $jobs_real_price_R3PK2; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ปั้มเค </th>
<th>4 ก.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R4KA_box" id="exa_R4KA_box" value="<?php echo number_format($exa_R4A,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ย.</th>
<th><input type="text" class="form-control" style="width:65px; text-align: right;" name="exa_R4KY_box" id="exa_R4KY_box" value="<?php echo number_format($exa_R4AY,2); ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="price_R4PK_box" name="price_R4PK_box" placeholder="" value="<?php echo $price_R4PK_calc; ?>" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp;&nbsp;ค่าปั๊มเค</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="price_R4PK2_box" name="price_R4PK2_box" value="<?php echo $jobs_real_price_R4PK2; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>


</tr>


</tbody>
</table>

<!--   รวมค่าปั๊มเค   -->

<table data-toggle="table" data-striped="true">

    <thead>


             <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมค่าปั๊มเค</th>
             <th><input type="text" class="form-control" style="width:80px; text-align: right; background: #F9E79F" id="total_price_PK_box" name="total_price_PK_box" placeholder="" value="<?php echo $man_total_price_PK; ?>" OnChange="JavaScript:chkNum(this)"></th>
             <th>&nbsp;&nbsp;รวมค่าปั๊มเคจริง</th>
             <th><input type="text" class="form-control" style="width:80px; text-align: right; background: #4FFF7E" id="total_price_PKR_box" name="total_price_PKR_box" value="<?php echo $man_total_price_PKR; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

    </thead>

</table>

<p></p>



<!--  ค่านูน 3 -->

<table data-toggle="table" data-striped="true">
    <tbody>
<tr>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปั๊มนูน จำนวน</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; " id="man_PN_amount_box" name="man_PN_amount_box" placeholder="" value="<?php echo $exa_PN_amount; ?>" ></th>
<th>&nbsp;รอบ</th>

<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมค่าปั๊มนูน</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #FFCCFF" id="man_total_PN_box" name="man_total_PN_box" placeholder="" value="<?php echo $man_total_price_PN; ?>" ></th>

<th>&nbsp;&nbsp;รวมค่าปั๊มนูนจริง</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; background: #9999FF" id="man_total_PNR_box" name="man_total_PNR_box" value="<?php echo $man_total_PNR; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>


<!--  จบ ค่านูน 3 -->


<td></td>
<th></th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปั๊มขาด จำนวน</th>
<th><input type="text" class="form-control" style="width:80px; text-align: right; " id="man_PK_amount_box" name="man_PK_amount_box" placeholder="" value="<?php echo $exa_PY_amount; ?>" ></th>
<th>&nbsp;รอบ</th>

<th>  &nbsp; &nbsp;&nbsp;ค่าปั๊มขาด</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #CCFFFF" id="price_PY_box" name="price_PY_box" placeholder="" value="<?php echo $price_PY_calc;?>"> </th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าปั๊มขาดจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #6699FF" id="price_PY_box2" name="price_PY_box2" placeholder="" value="<?php echo $jobs_real_price_PY;?>" ></th>

<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_5" id = "bt_confirm_price_5" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_5">ยืนยันราคา</button>
          </th>   -->
</tr>


</tbody>
</table>

 <p>

<!--   ค่าแรงกระทุ้ง   -->

<table data-toggle="table" data-striped="true">

    <thead>


             <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ค่าแรงกระทุ้ง</th>
             <th><input type="text" class="form-control" style="width:120px; text-align: right; background: #F9E79F" id="man_kratung_Wprice_box" name="man_kratung_Wprice_box" placeholder="" value="<?php echo $man_kratung_Wprice; ?>" OnChange="JavaScript:chkNum3(this)"></th>

              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ค่าแรงกระทุ้งจริง</th>
             <th><input type="text" class="form-control" style="width:120px; text-align: right; background: #6699FF" id="man_kratung_Wprice_box2" name="man_kratung_Wprice_box2" placeholder="" value="<?php echo $man_kratung_Wprice_real; ?>" OnChange="JavaScript:chkNum3(this)"></th>

    </thead>

</table>
<!--   จบ ค่าแรงกระทุ้ง   -->
    </div>
</div>

    <P>

     <div class="row">
       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<button type="button" name = "bt_calc_price_pum" id = "bt_calc_price_pum" class="btn btn-primary"  >คำนวณราคาปั๊ม</button>
    </div>

    <!--   จบ ข้อ 5 -->





    <hr>

    <!--  ข้อ 6  -->

    <div class="row">
   <div class="col-md-12">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th> &nbsp;&nbsp; 6. ติดกาว </th>


<th>  <font color=red>&nbsp;&nbsp;*&nbsp;</font>ค่าแรงปะมือ</th>
<th><input <?php echo $exa_pm_temp; ?> type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_wage_PM_box" name="price_wage_PM_box" value="<?php echo $man_price_wage_PM; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"> </th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าแรงปะเครื่อง</th>
<th><input <?php echo $exa_pk_temp; ?> type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_wage_PK_box" name="price_wage_PK_box" value="<?php echo $man_price_wage_PK; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>



</thead>
     </table>

        <p>
    <hr>
    <table data-toggle="table" data-striped="true">
<thead>
<tr>

 <th>&nbsp;&nbsp; 8. ค่าขนส่ง</th>


 <th>&nbsp;&nbsp;<input id ="check_logis_factor2" name ="check_logis_factor" type="radio" value="1000" <?php echo $man_check_logis2; ?>>  1000</th>
<th>&nbsp;&nbsp;<input id ="check_logis_factor3" name ="check_logis_factor" type="radio" value="1200" <?php echo $man_check_logis3; ?>>  1200</th>
<th>&nbsp;&nbsp;<input id ="check_logis_factor4" name ="check_logis_factor" type="radio" value="1500" <?php echo $man_check_logis4; ?>>  1500</th>
<th>&nbsp;&nbsp;<input id ="check_logis_factor5" name ="check_logis_factor" type="radio" value="3000" <?php echo $man_check_logis5; ?>>  3000</th>

 <th>&nbsp; &nbsp;&nbsp;นน. กระดาษ</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="paper_weight_box" name="paper_weight_box" value="<?php echo $man_paper_weight; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<th>&nbsp; </th>
<th>&nbsp; &nbsp;&nbsp;</th>
<th>&nbsp; &nbsp;&nbsp;ค่าขนส่ง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="price_logis_box" name="price_logis_box" value="<?php echo $price_logis_calc; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<th>&nbsp;</th>

<th>&nbsp; &nbsp;&nbsp;<font color=red>&nbsp;&nbsp;*&nbsp;</font>ค่าขนส่งจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_logis_box2" name="price_logis_box2" value="<?php echo $jobs_real_price_logis; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_logis" id = "bt_confirm_price_logis" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_logis">ยืนยันราคา</button>
          </th>  -->

</tr>
</thead>
     </table>

         <div class="row">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <button type="button" name = "bt_calc_logis" id = "bt_calc_logis" class="btn btn-primary"  >คำนวณค่าขนส่ง</button>
    </div>

        <hr>
          <p>
        <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>&nbsp;&nbsp; 9. ค่าวัสดุพิเศษอื่น ๆ </th>



<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_mat_special_box" name="price_mat_special_box" value="<?php echo $man_price_mat_special; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"> </th>
<th>&nbsp;&nbsp; ค่าห่อ</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_hor_box" name="price_hor_box" value="<?php echo  $man_price_hor; ?>" placeholder="" OnChange="JavaScript:chkNum(this)" ></th>


<th>  &nbsp; &nbsp;&nbsp;ค่าแกะ</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="price_kea_box" name="price_kea_box" value="<?php echo  $man_price_kea; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"> </th>


</thead>
     </table>



    </div>


    </div>

   <!-- จบข้อ 6 -->

   <hr>

   <!-- ข้อ 10 -->
   <div class="row">


    <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. จำนวนเพลท </th>

<th><input type="text" class="form-control" style="width:50px; text-align: right;" id="pur_price_plate_box" name="pur_price_plate_box" value="<?php echo $pur_price_plate; ?>" placeholder="" ></th>

<th> &nbsp;&nbsp; ค่าเพลท</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="plate_price_box" name="plate_price_box" value="<?php echo $plate_price_calc; ?>" placeholder="" > </th>
<th><font color=red>&nbsp;&nbsp;*</font> ค่าเพลทจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="plate_price_box2" name="plate_price_box2" placeholder="" value="<?php echo $jobs_real_plate_price; ?>" OnChange="JavaScript:chkNum(this)"></th>

<th> &nbsp;&nbsp; 11.&nbsp;  แบบปั๊ม</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; " id="pur_Ptype_box" name="pur_Ptype_box"  value="<?php echo $pur_lay3; ?>" placeholder="" > </th>

<th> &nbsp;&nbsp; ค่าแบบปั๊ม</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="pur_pricePtype_box" name="pur_pricePtype_box"  value="<?php echo $pur_pricePtype_calc; ?>" placeholder="" > </th>

<th><font color=red>&nbsp;&nbsp;*</font> ค่าแบบปั๊มจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_pricePtype_box2" name="pur_pricePtype_box2" value="<?php echo $jobs_real_pur_pricePtype; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_10" id = "bt_confirm_price_10" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_10">ยืนยันราคา</button>
          </th>  -->

</thead>
     </table>

   <!-- 11.1 ค่ากระทุ้ง -->

   <table data-toggle="table" data-striped="true">
<thead>
<tr>

<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.1 ค่าแบบกระทุ้ง</th>
 <?php
              $man_Kratung_price_real_temp = extract_int($man_Kratung_price_real);
                 if($man_Kratung_price_real_temp<2000){
                             $kratung_price_temp = (($pur_lay3*100)+1000);
                              if($kratung_price_temp<2000 && $exa_kratung!=''){
                                  echo "<script type='text/javascript'>alert('ค่าแบบกระทุ้ง ต้องมีค่าเริ่มต้นที่ 2,000 บาท');</script>";

                                  $kratung_price_temp = '2,000.000';
                              }else{
                                  $kratung_price_temp = number_format($kratung_price_temp,3);
                              }
                 }else{
                   $kratung_price_temp =   $man_Kratung_price_real;
                 }

 ?>

<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="man_Kratung_price_box2" name="man_Kratung_price_box2" placeholder="" value="<?php if($exa_kratung!=''){echo $kratung_price_temp;}else{echo '';} ?>" OnChange="JavaScript:chkNum3(this)"></th>



</thead>
     </table>

   <!-- จบ 11.1 ค่ากระทุ้ง -->

       <p>

       <div class="row">
         <div class="col-md-12">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" name = "bt_calc_plate" id = "bt_calc_plate" class="btn btn-primary"  >คำนวณราคาค่าเพลท ค่าแบบปั๊ม</button>
       </div>
       </div>

       <hr>


       <!-- ปั้มนูน 3 รอบในการคำนวณ  -->
         <p>

                      <div class = "row">

                          <div class="col-md-8">

                        <table data-toggle="table" data-striped="true">
                        <thead>
                        <tr>
                        <th></th>
                        <th></th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12. ค่าบล็อคปั้มนูน</th>
                        <th>&nbsp;รอบ1 ก.</th>
                        <th><input   id="R1_width" name="R1_width" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R1A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  id="R1_lenght" name="R1_lenght" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R1Y,2); ?>" placeholder="" ></th>

                        <th>  &nbsp;&nbsp;ค่าบล็อกปั๊มนูน </th>
                        <th><input disabled type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="pur_pricePN1_box" name="pur_pricePN1_box"  placeholder=""  value="<?php echo $pur_priceBoxPN1; ?>" OnChange="JavaScript:chkNum(this)"></th>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มนูนจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPN1R_box" name="pur_priceBoxPN1R_box" value="<?php echo $man_real_priceBoxPN1; ?>" placeholder=""  ></th>


                        </tr>

                        </thead>


                        <tbody>
                        <tr>
                        <td></td>
                        <th></th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>รอบ2 ก.</th>
                        <th><input  id="R2_width" name="R2_width" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R2A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  id="R2_lenght" name="R2_lenght" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R2Y,2); ?>" placeholder="" ></th>

                        <th>  &nbsp;&nbsp;ค่าบล็อกปั๊มนูน </th>
                        <th><input disabled type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="pur_pricePN2_box" name="pur_pricePN2_box"  placeholder=""  value="<?php echo $pur_priceBoxPN2; ?>" OnChange="JavaScript:chkNum(this)"></th>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มนูนจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPN2R_box" name="pur_priceBoxPN2R_box" value="<?php echo $man_real_priceBoxPN2; ?>" placeholder=""  ></th>

                        </tr>
                        <tr>
                        <td></td>
                         <th></th>
                        <th> </th>
                        <th>รอบ3 ก.</td>
                        <th><input  id="R3_width" name="R3_width" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R3A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input  id="R3_lenght" name="R3_lenght" type="text" class="form-control" style="width:60px; text-align: right;"  value="<?php echo number_format($exa_PN_R3Y,2); ?>" placeholder="" ></th>


                        <th>  &nbsp;&nbsp;ค่าบล็อกปั๊มนูน </th>
                        <th><input disabled type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="pur_pricePN3_box" name="pur_pricePN3_box"  placeholder=""  value="<?php echo $pur_priceBoxPN3; ?>" OnChange="JavaScript:chkNum(this)"></th>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มนูนจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPN3R_box" name="pur_priceBoxPN3R_box" value="<?php echo $man_real_priceBoxPN3; ?>" placeholder="" ></th>

                        </tr>



                        </tbody>
                        </table>


                           <table data-toggle="table" data-striped="true">
                                <tbody>
                                        <tr>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมค่าบล็อกปั๊มนูน</th>
                                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #FFCCFF" id="total_price_BPN_box" name="total_price_BPN_box" placeholder="" value="<?php echo number_format((extract_int($pur_priceBoxPN1)+extract_int($pur_priceBoxPN2)+extract_int($pur_priceBoxPN3)),2); ?>" OnChange="JavaScript:chkNum(this)"></th>
                                        <th>&nbsp;&nbsp;รวมค่าบล็อกปั๊มนูนจริง</th>
                                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #9999FF" id="total_price_BPNR_box" name="total_price_BPNR_box" value="<?php echo number_format((extract_int($man_real_priceBoxPN1)+extract_int($man_real_priceBoxPN2)+extract_int($man_real_priceBoxPN3)),2); ?>" placeholder="" ></th>


                                        </tr>


                            </tbody>
                            </table>






                          </div>



                        </div>


       <P>

       <p>
      <hr>


     <!-- 13 new  -->

 <div class = "row">

                          <div class="col-md-12">

                        <table data-toggle="table" data-striped="true">
                        <thead>
                        <tr>
                        <th></th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.</th>
                        <th>ค่าบล็อคปั้มเค</th>
                        <th>&nbsp;รอบ1 ก.&nbsp;</th>
                        <th><input    id="13R1_width" name="13R1_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R1A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input   id="13R1_lenght" name="13R1_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R1AY,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <th><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK1_box" name="pur_pricePumK1_box" value="<?php echo $pur_priceBoxPumK1; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มเคจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPK1R_box" name="pur_priceBoxPK1R_box" value="<?php echo $man_real_priceBoxPK1; ?>" placeholder="" ></th>


                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <th> </th>
                        <th>&nbsp;&nbsp;รอบ2 ก.</th>
                        <th><input   id="13R2_width" name="13R2_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R2A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input   id="13R2_lenght" name="13R2_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R2Y,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK2_box" name="pur_pricePumK2_box" value="<?php echo $pur_priceBoxPumK2; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มเคจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPK2R_box" name="pur_priceBoxPK2R_box" value="<?php echo $man_real_priceBoxPK2; ?>" placeholder="" ></th>




                        </tr>

                        </thead>


                        <tbody>



                        <tr>
                        <td></td>
                        <th></th>
                        <th> </th>
                        <th>&nbsp;รอบ3 ก.</td>
                        <th><input   id="13R3_width" name="13R3_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R3A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input   id="13R3_lenght" name="13R3_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R3Y,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK3_box" name="pur_pricePumK3_box" value="<?php echo $pur_priceBoxPumK3; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มเคจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPK3R_box" name="pur_priceBoxPK3R_box" value="<?php echo $man_real_priceBoxPK3; ?>" placeholder="" ></th>

                        </tr>

                        <tr>
                        <td></td>
                        <th></th>
                        <th> </th>
                        <th>&nbsp;&nbsp;รอบ4 ก.</td>
                        <th><input   id="13R4_width" name="13R4_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R4A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input   id="13R4_lenght" name="13R4_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R4AY,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input   disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK4_box" name="pur_pricePumK4_box" value="<?php echo $pur_priceBoxPumK4; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                        <th><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</font> ค่าบล็อกปั๊มเคจริง</th>
                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="pur_priceBoxPK4R_box" name="pur_priceBoxPK4R_box" value="<?php echo $man_real_priceBoxPK4; ?>" placeholder="" ></th>


                        </tr>




                        </tbody>
                        </table>

                       <table data-toggle="table" data-striped="true">
                                <tbody>
                                        <tr>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                         <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมค่าบล็อกปั๊มเค</th>
                                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #FFCCFF" id="total_price_BPN_box" name="total_price_BPN_box" placeholder="" value="<?php echo number_format((extract_int($pur_priceBoxPumK1)+extract_int($pur_priceBoxPumK2)+extract_int($pur_priceBoxPumK3)+extract_int($pur_priceBoxPumK4)),2); ?>" OnChange="JavaScript:chkNum(this)"></th>
                                        <th>&nbsp;&nbsp;รวมค่าบล็อกปั๊มเคจริง</th>
                                        <th><input type="text" class="form-control" style="width:100px; text-align: right; background: #9999FF" id="total_price_BPKR_box" name="total_price_BPKR_box" value="<?php echo number_format((extract_int($man_real_priceBoxPK1)+extract_int($man_real_priceBoxPK2)+extract_int($man_real_priceBoxPK3)+extract_int($man_real_priceBoxPK4)),2); ?>" placeholder=""></th>


                                        </tr>


                            </tbody>
                            </table>





                          </div>



                        </div>

<!-- 13 new จบ -->




<hr></hr>

      <table data-toggle="table" data-striped="true">
<thead>
<tr>


<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14. ค่าอลูมิเนียม(จัดซื้อ)</th>
<th><input disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_priceAlu_box" name="pur_priceAlu_box" value="<?php echo $pur_priceAlu; ?>"  placeholder="" > </th>
<th> &nbsp;&nbsp; ค่าอลูมิเนียม </th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #F9E79F" id="man_priceAluCalc_box" name="man_priceAluCalc_box" value="<?php echo number_format((extract_int($pur_priceAlu)*$pur_lay3),2); ?>"  placeholder="" > </th>

<th><font color=red>&nbsp;&nbsp;*</font> ค่าอลูมิเนียมจริง</th>
<th><input type="text" class="form-control" style="width:100px; text-align: right; background: #4FFF7E" id="ALU_price_box2" name="ALU_price_box2" value="<?php echo $jobs_real_ALU_price; ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>
<!-- <th> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name = "bt_confirm_price_13" id = "bt_confirm_price_13" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Md_confirm_price_13">ยืนยันราคา</button>
          </th>  -->

</thead>
     </table>


   </div>

   <P>






    <!-- จบข้อ 10 -->





    <hr>


    <!-- ข้อความจาก จนท. ผจก -->

    <div class="row">
        <label for="man_job_note_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อความจาก ผจก.</label>
    </div>
    <div class="row">

              <div class="col-md-12">

                           <div class="col-md-8">
                                 <textarea class="form-control" rows="5" id="man_job_note_box" name="man_job_note_box" ><?php echo $man_job_note; ?></textarea>
                           </div>
                      </div>

         </div>
    <p></p>
   <!--  <button id="btn_confirm_manager" name="btn_confirm_manager" type="submit" class="btn btn-info btn-lg" >บันทึก</button>  -->



    <!--  สิ้นสุด tab 1 กระดาษ-->




<!--  สิ้นสุด tab 2 งานพิมพ์ / SP-->


<!--  เริ่ม tab 3 เคลือบ / ลูกฟูก-->






<!-- สิ้นสุด die cut -->



<!-- audy เอา div row ออก -->

  <!--    </div>     -->




    <!-- จบ! Tab รายละเอียดงาน   -->


    <?php

    function extract_int($str){
    $str=str_replace(",","",$str);
     preg_match('/[[:digit:]]+\.?[[:digit:]]*/', $str, $regs);
     return (doubleval($regs[0]));
}




    if($jobs_order1=='' || $pur_lay3==0){
        $jobs_order1 ='';
        $pieces1 ='';
    }else{
        $jobs_order11 = extract_int($jobs_order1);
        $pieces1 = number_format($jobs_order11/$pur_lay3);

    }

     if($jobs_order2=='' || $pur_lay3==0){
        $jobs_order2 ='';
        $pieces2 ='';
     }else {
         $jobs_order22 = extract_int($jobs_order2);
         $pieces2 = number_format($jobs_order22/$pur_lay3);


          }



       if($jobs_order3=='' || $pur_lay3==0){
         $jobs_order3 ='';
         $pieces3 ='';
     }else{
         $jobs_order33 = extract_int($jobs_order3);
         $pieces3 = number_format($jobs_order33/$pur_lay3);


         }

        if($jobs_order4=='' || $pur_lay3==0){
         $jobs_order4 ='';
         $pieces4 ='';
     }else{
         $jobs_order44 = extract_int($jobs_order4);
         $pieces4 = number_format($jobs_order44/$pur_lay3);


     }
        if($jobs_order5=='' || $pur_lay3==0){
          $jobs_order5 ='';
          $pieces5 ='';
     }else{
         $jobs_order55 = extract_int($jobs_order5);
         $pieces5 = number_format($jobs_order55/$pur_lay3);


     }

        if($jobs_order6=='' || $pur_lay3==0){
          $jobs_order6 ='';
          $pieces6 ='';
     }else{
         $jobs_order66 = extract_int($jobs_order6);
         $pieces6 = number_format($jobs_order66/$pur_lay3);



     }


    ?>

    <?php
    // หาค่า R


      if($pur_lay2=="1"){
           $pur_lay22=500;
       }else if($pur_lay2=="2"){
          $pur_lay22=1000;
         }else if($pur_lay2=="3"){
         $pur_lay22=1500;
         }else if($pur_lay2=="4"){
         $pur_lay22=2000;
        }else {
         $pur_lay22=2500;
         }

        if($pur_lay3!=0){   //เช็ดว่ามีค่า z มั้ย
    // R1
    $order1R =  $jobs_order11/$pur_lay3;

    if($order1R >= 10000){
           $R_count = 1;
          $value_R1 = ($order1R*1.06)/$pur_lay22;
   }else{
       $R_count = 0;
       $value_R1 = ($order1R+600)/$pur_lay22;
        }

   // R2

         $order2R =  $jobs_order22/$pur_lay3;

    if($order2R >= 10000){

                if($R_count==1){
                    $value_R2 = ($order2R*1.055)/$pur_lay22;
                    $R_count=2;

                }else{
                    $value_R2 = ($order2R*1.06)/$pur_lay22;
                    $R_count=1;

                }

    }else{
           $value_R2 = ($order2R+600)/$pur_lay22;
        }

     // R3


       $order3R =  $jobs_order33/$pur_lay3;


    if($order3R >= 10000){


             if($R_count==1){
                    $value_R3 = ($order3R*1.055)/$pur_lay22;
                    $R_count=2;

              }else if($R_count==2){
                    $value_R3 = ($order3R*1.050)/$pur_lay22;
                    $R_count=3;

                }else {
                    $value_R3 = ($order3R*1.06)/$pur_lay22;
                    $R_count=1;
                }



    }else{
           $value_R3 = ($order3R+600)/$pur_lay22;
        }

      // R4

       $order4R =  $jobs_order44/$pur_lay3;

    if($order4R >= 10000){



              if($R_count==1){
                    $value_R4 = ($order4R*1.055)/$pur_lay22;
                    $R_count=2;

              }else if($R_count==2){
                    $value_R4 = ($order4R*1.050)/$pur_lay22;
                    $R_count=3;


              }else if($R_count==3){

                  $value_R4 = ($order4R*1.050)/$pur_lay22;
                    $R_count=4;
              }else {
                    $value_R4 = ($order4R*1.06)/$pur_lay22;
                    $R_count=1;
                }


    }else{
           $value_R4 = ($order4R+600)/$pur_lay22;
        }




// R5

       $order5R =  $jobs_order55/$pur_lay3;

    if($order5R >= 10000){




              if($R_count==1){
                    $value_R5 = ($order5R*1.055)/$pur_lay22;
                    $R_count=2;

              }else if($R_count==2){
                    $value_R5 = ($order5R*1.050)/$pur_lay22;
                    $R_count=3;


              }else if($R_count==3){

                    $value_R5 = ($order5R*1.050)/$pur_lay22;
                    $R_count=4;
              }else if($R_count==4){

                  $value_R5 = ($order5R*1.050)/$pur_lay22;
                    $R_count=5;

              }else {
                    $value_R5 = ($order5R*1.06)/$pur_lay22;
                    $R_count=1;
                }



    }else{
           $value_R5 = ($order5R+600)/$pur_lay22;
        }


         // R6

        $order6R =  $jobs_order66/$pur_lay3;



    if($order6R >= 10000){
          if($R_count==1){
                    $value_R6 = ($order6R*1.055)/$pur_lay22;
                    $R_count=2;

              }else if($R_count==2){
                    $value_R6 = ($order6R*1.050)/$pur_lay22;
                    $R_count=3;


              }else if($R_count==3){

                  $value_R6 = ($order6R*1.050)/$pur_lay22;
                    $R_count=4;
              }else if($R_count==4){

                    $value_R6 = ($order6R*1.050)/$pur_lay22;
                    $R_count=5;
              }else if($R_count==5){
                  $value_R6 = ($order6R*1.050)/$pur_lay22;
                    $R_count=6;

              }else {
                    $value_R6 = ($order6R*1.06)/$pur_lay22;
                    $R_count=1;
                }




    }else{
           $value_R6 = ($order6R+600)/$pur_lay22;
        }

     // ปรับทศนิยม

        $value_R1 = number_format($value_R1,2);
        $value_R2 = number_format($value_R2,2);
        $value_R3 = number_format($value_R3,2);
        $value_R4 = number_format($value_R4,2);
        $value_R5 = number_format($value_R5,2);
        $value_R6 = number_format($value_R6,2);


   }


  $jobs_real_price_temp =    extract_int($jobs_real_price_save);

   // ตรวจสอบค่าว่าง
    if($jobs_order1==''){
       $value_R1='';

   } else {
       // คำนวณค่า paper

        $price_paper1 = number_format((($jobs_real_price_temp*$value_R1)/$jobs_order11),3);
   }


   if($jobs_order22==''){
       $value_R2='';
   }else {
       // คำนวณค่า paper

        $price_paper2 = number_format((($jobs_real_price_temp*$value_R2)/$jobs_order22),3);
   }


   if($jobs_order33==''){
       $value_R3='';
   }else {
       // คำนวณค่า paper

        $price_paper3 = number_format((($jobs_real_price_temp*$value_R3)/$jobs_order33),3);
   }

   if($jobs_order44==''){
       $value_R4='';
   }else {
       // คำนวณค่า paper

        $price_paper4 = number_format((($jobs_real_price_temp*$value_R4)/$jobs_order44),3);
   }

    if($jobs_order55==''){
       $value_R5='';
   }else {
       // คำนวณค่า paper

        $price_paper5 = number_format((($jobs_real_price_temp*$value_R5)/$jobs_order55),3);
   }

   if($jobs_order66==''){
       $value_R6='';
   }else {
       // คำนวณค่า paper

        $price_paper6 = number_format((($jobs_real_price_temp*$value_R6)/$jobs_order66),3);
   }



   // ตำนวนค่า wage

     //  wage order 1

  // หาค่า เคลือบผิวหน้า แบบ อาบเงา และ อาบด้าน

   $add_price_front = 0;
                          if($exa_3front1_type=="อาบเงา" || $exa_3front1_type=="อาบด้าน"  ){
                               $add_price_front = extract_int($jobs_real_Pfront1R_save);
                           }

                           if($exa_3front2_type=="อาบเงา" || $exa_3front2_type=="อาบด้าน"  ){
                               $add_price_front =  $add_price_front+extract_int($jobs_real_Pfront2R_save);
                           }

                           if($exa_3front3_type=="อาบเงา" || $exa_3front3_type=="อาบด้าน"  ){
                               $add_price_front =  $add_price_front+extract_int($jobs_real_Pfront3R_save);
                           }

                           if($exa_3front4_type=="อาบเงา" || $exa_3front4_type=="อาบด้าน"  ){
                               $add_price_front =  $add_price_front+extract_int($jobs_real_Pfront4R_save);
                           }


// หา % ในการคิดค่าแรงพิมพ์
          // (%1)
       if(extract_int($pieces1)>= 1 && extract_int($pieces1) <= 2500){
           $percent_calc_wage1 = 0.8;
       } else if (extract_int($pieces1)>= 2501 && extract_int($pieces1) <= 3500){
          $percent_calc_wage1 = 0.85;
       } else if (extract_int($pieces1)>= 3501 && extract_int($pieces1) <= 4999){
          $percent_calc_wage1 = 0.90;
       } else if (extract_int($pieces1)>= 5000 && extract_int($pieces1) <= 9999){
              $percent_calc_wage1 = 0.95;
       }

       // (%2)
       if(extract_int($pieces2)>= 1 && extract_int($pieces2) <= 2500){
           $percent_calc_wage2 = 0.8;
       } else if (extract_int($pieces2)>= 2501 && extract_int($pieces2) <= 3500){
          $percent_calc_wage2 = 0.85;
       } else if (extract_int($pieces2)>= 3501 && extract_int($pieces2) <= 4999){
          $percent_calc_wage2 = 0.90;
       } else if (extract_int($pieces2)>= 5000 && extract_int($pieces2) <= 9999){
              $percent_calc_wage2 = 0.95;
       }

       // (%3)
       if(extract_int($pieces3)>= 1 && extract_int($pieces3) <= 2500){
           $percent_calc_wage3 = 0.8;
       } else if (extract_int($pieces3)>= 2501 && extract_int($pieces3) <= 3500){
          $percent_calc_wage3 = 0.85;
       } else if (extract_int($pieces3)>= 3501 && extract_int($pieces3) <= 4999){
          $percent_calc_wage3 = 0.90;
       } else if (extract_int($pieces3)>= 5000 && extract_int($pieces3) <= 9999){
              $percent_calc_wage3 = 0.95;
       }

        // (%4)
       if(extract_int($pieces4)>= 1 && extract_int($pieces4) <= 2500){
           $percent_calc_wage4 = 0.8;
       } else if (extract_int($pieces4)>= 2501 && extract_int($pieces4) <= 3500){
          $percent_calc_wage4 = 0.85;
       } else if (extract_int($pieces4)>= 3501 && extract_int($pieces4) <= 4999){
          $percent_calc_wage4 = 0.90;
       } else if (extract_int($pieces4)>= 5000 && extract_int($pieces4) <= 9999){
              $percent_calc_wage4 = 0.95;
       }

          // (%5)
       if(extract_int($pieces5)>= 1 && extract_int($pieces5) <= 2500){
           $percent_calc_wage5 = 0.8;
       } else if (extract_int($pieces5)>= 2501 && extract_int($pieces5) <= 3500){
          $percent_calc_wage5 = 0.85;
       } else if (extract_int($pieces5)>= 3501 && extract_int($pieces5) <= 4999){
          $percent_calc_wage5 = 0.90;
       } else if (extract_int($pieces5)>= 5000 && extract_int($pieces5) <= 9999){
              $percent_calc_wage5 = 0.95;
       }

             // (%6)
       if(extract_int($pieces6)>= 1 && extract_int($pieces6) <= 2500){
           $percent_calc_wage6 = 0.8;
       } else if (extract_int($pieces6)>= 2501 && extract_int($pieces6) <= 3500){
          $percent_calc_wage6 = 0.85;
       } else if (extract_int($pieces6)>= 3501 && extract_int($pieces6) <= 4999){
          $percent_calc_wage6 = 0.90;
       } else if (extract_int($pieces6)>= 5000 && extract_int($pieces6) <= 9999){
              $percent_calc_wage6 = 0.95;
       }





// จบการหา ค่า เคลือบผิวหน้า แบบ อาบเงา และ อาบด้าน

   // wage 1

   if ($jobs_order1 !==''){
   if(extract_int($pieces1) >= 10000) {


       $wage1_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage1_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage1)/$jobs_order11),3);

   }

   }


   // wage 2

   if ($jobs_order2 !==''){
   if(extract_int($pieces2) >= 10000) {


       $wage2_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage2_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage2)/$jobs_order22),3);

   }

   }

    // wage 3

   if ($jobs_order3 !==''){
   if(extract_int($pieces3) >= 10000) {


       $wage3_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage3_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage3)/$jobs_order33),3);

   }

   }


    // wage 4

   if ($jobs_order4 !==''){
   if(extract_int($pieces4) >= 10000) {


       $wage4_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage4_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage4)/$jobs_order44),3);

   }

   }

    // wage 5

   if ($jobs_order5 !==''){
   if(extract_int($pieces5) >= 10000) {


       $wage5_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage5_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage5)/$jobs_order55),3);

   }

   }

    // wage 6

   if ($jobs_order6 !==''){
   if(extract_int($pieces6) >= 10000) {


       $wage6_value = number_format(((extract_int($jobs_real_wage_save)+$add_price_front)/(10000*$pur_lay3)),3);

   } else {

       $wage6_value = number_format((((extract_int($jobs_real_wage_save)+$add_price_front)*$percent_calc_wage6)/$jobs_order66),3);

   }

   }

   // คำนวณ  Diecut

    // Diecut 1

   if ($jobs_order1 !==''){
   if(extract_int($pieces1) >= 10000) {


     //  $Diecut1_value = number_format( ( (  (  (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+$add_price_front) ) /(10000*$pur_lay3) )+ extract_int($man_total_price_PKR) ),3);
        $Diecut1_value = number_format( ((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice)))/(10000*$pur_lay3))+ extract_int($man_total_price_PKR)),3);


   } else {

       $Diecut1_value = number_format(( ( ( ( (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage1)/$jobs_order11)+extract_int($man_total_price_PKR))  ) ,3);
     //    $Diecut1_value = extract_int($man_Kratung_price_real);
       }

   }

    // Diecut 2

   if ($jobs_order2 !==''){
   if(extract_int($pieces2) >= 10000) {


       $Diecut2_value = number_format(( ( ( (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))) /(10000*$pur_lay3))+extract_int($man_total_price_PKR)),3);

   } else {

       $Diecut2_value = number_format(((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage2)/$jobs_order22)+extract_int($man_total_price_PKR)),3);

   }

   }


    // Diecut 3

   if ($jobs_order3 !==''){
   if(extract_int($pieces3) >= 10000) {


       $Diecut3_value = number_format((  (( (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))) /(10000*$pur_lay3))+extract_int($man_total_price_PKR)),3);

   } else {

       $Diecut3_value = number_format(((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage3)/$jobs_order33)+extract_int($man_total_price_PKR)),3);

   }

   }

   // Diecut 4

   if ($jobs_order4 !==''){
   if(extract_int($pieces4) >= 10000) {


       $Diecut4_value = number_format((  (( (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))) /(10000*$pur_lay3))+extract_int($man_total_price_PKR)),3);

   } else {

      $Diecut4_value = number_format(((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage4)/$jobs_order44)+extract_int($man_total_price_PKR)),3);
     // $Diecut4_value = (((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY))*$percent_calc_wage4)/$jobs_order44)+extract_int($man_total_price_PKR);
   }

   }

   // Diecut 5

   if ($jobs_order5 !==''){
   if(extract_int($pieces5) >= 10000) {


       $Diecut5_value = number_format((  ( ((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))) /(10000*$pur_lay3))+extract_int($man_total_price_PKR)),3);

   } else {

       $Diecut5_value = number_format(((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage5)/$jobs_order55)+extract_int($man_total_price_PKR)),3);

   }

   }

    // Diecut 6

   if ($jobs_order6 !==''){
   if(extract_int($pieces6) >= 10000) {


       $Diecut6_value = number_format((  (( (extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))) /(10000*$pur_lay3))+extract_int($man_total_price_PKR)),3);

   } else {

       $Diecut6_value = number_format(((((extract_int($man_total_PNR)+extract_int($jobs_real_price_PY)+extract_int($man_kratung_Wprice))*$percent_calc_wage6)/$jobs_order66)+extract_int($man_total_price_PKR)),3);

   }

   }

   // คิดค่าเพลท
   // เพลท 1
    if ($jobs_order1 !==''){
   $plate1_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order11),3);
    }else{
     $plate1_value = '0';
    }

     // เพลท 2
    if ($jobs_order2 !==''){
   $plate2_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order22),3);
    }else{
     $plate2_value = '0';
    }

     // เพลท 3
    if ($jobs_order3 !==''){
   $plate3_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order33),3);
    }else{
     $plate3_value = '0';
    }

     // เพลท 4
    if ($jobs_order4 !==''){
   $plate4_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order44),3);
    }else{
     $plate4_value = '0';
    }

     // เพลท 5
    if ($jobs_order5 !==''){
   $plate5_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order55),3);
    }else{
     $plate5_value = '0';
    }

     // เพลท 6
    if ($jobs_order6 !==''){
   $plate6_value = number_format(((extract_int($jobs_real_plate_price)+extract_int($man_Kratung_price_real)+extract_int($jobs_real_pur_pricePtype)+extract_int($man_total_price_BPNR)+extract_int($man_total_price_BPKR)+extract_int($jobs_real_ALU_price))/$jobs_order66),3);
   }else{
     $plate6_value = '0';
    }


    // คำนวนค่า Transport

 // transport 1

    if ($jobs_order1 !==''){

    $trans1_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order11),3);

    }

     // transport 2

    if ($jobs_order2 !==''){

    $trans2_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order22),3);

    }

     // transport 3

    if ($jobs_order3 !==''){

    $trans3_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order33),3);

    }

      // transport 4

    if ($jobs_order4 !==''){

    $trans4_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order44),3);

    }

     // transport 5

    if ($jobs_order5 !==''){

    $trans5_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order55),3);

    }

      // transport 6

    if ($jobs_order6 !==''){

    $trans6_value = number_format((extract_int($jobs_real_price_logis)/$jobs_order66),3);

    }

    // ตำนวนค่า SP

     // ขั้นตอนแรก คำเคลือบผิว โดยที่ ถ้าเป็น อาบเงา กับ อาบด้าน จะไม่เอามารวม

            $total_price_frontR = 0;
                          if( ($exa_3front1_type!=="อาบเงา") && ($exa_3front1_type!=="อาบด้าน") ){
                               $total_price_frontR = extract_int($jobs_real_Pfront1R_save);
                           }

                           if(($exa_3front2_type!=="อาบเงา") && ($exa_3front2_type!=="อาบด้าน")  ){
                               $total_price_frontR =  $total_price_frontR+extract_int($jobs_real_Pfront2R_save);
                           }

                           if(($exa_3front3_type!=="อาบเงา") && ($exa_3front3_type!=="อาบด้าน")  ){
                               $total_price_frontR =  $total_price_frontR+extract_int($jobs_real_Pfront3R_save);
                           }

                           if(($exa_3front4_type!=="อาบเงา") && ($exa_3front4_type!=="อาบด้าน" ) ){
                               $total_price_frontR =  $total_price_frontR+extract_int($jobs_real_Pfront4R_save);
                           }

              // คำนวน หาค่า sp

             if ($jobs_order1 !==''){
               $sp1 = extract_int($price_paper1)+extract_int($wage1_value)+extract_int($Diecut1_value)+extract_int($plate1_value)+extract_int($trans1_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
             //   $sp1 = extract_int($man_price_mat_special);
               $sp1 = number_format($sp1,3);
             //  $sp1 = extract_int($man_price_wage_PK);

             }else{
                  $sp1="0";
                  }

             if ($jobs_order2 !==''){
             $sp2 = extract_int($price_paper2)+extract_int($wage2_value)+extract_int($Diecut2_value)+extract_int($plate2_value)+extract_int($trans2_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
             $sp2 = number_format($sp2,3);

             } else{
                  $sp2="0";
                  }

             if ($jobs_order3 !==''){
             $sp3 = extract_int($price_paper3)+extract_int($wage3_value)+extract_int($Diecut3_value)+extract_int($plate3_value)+extract_int($trans3_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
             $sp3 = number_format($sp3,3);
             } else{
                  $sp3="0";
                  }

             if ($jobs_order4 !==''){
             $sp4 = extract_int($price_paper4)+extract_int($wage4_value)+extract_int($Diecut4_value)+extract_int($plate4_value)+extract_int($trans4_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
             $sp4 = number_format($sp4,3);

             } else{
                  $sp4="0";
                  }



             if ($jobs_order5 !==''){
                  $sp5 = extract_int($price_paper5)+extract_int($wage5_value)+extract_int($Diecut5_value)+extract_int($plate5_value)+extract_int($trans5_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
                  $sp5 = number_format($sp5,3);

             }else{
                  $sp5="0";
                  }

             if ($jobs_order6 !==''){
                   $sp6 = extract_int($price_paper6)+extract_int($wage6_value)+extract_int($Diecut6_value)+extract_int($plate6_value)+extract_int($trans6_value)+extract_int($total_price_frontR)+extract_int($jobs_real_plastic)+extract_int($jobs_real_lf_price)+extract_int($jobs_real_lami_price)+extract_int($man_price_wage_PM)+extract_int($man_price_wage_PK)+extract_int($man_price_mat_special)+extract_int($man_price_hor)+extract_int($man_price_kea)+extract_int($jobs_real_Blf_price);
                   $sp6 = number_format($sp6,3);
              }else{
                  $sp6="0";
                  }




        ?>

    <!-- ปุ่ม บันทึกและยืนยันรวมกัน -->
    <div class="row">
              <div class="col-md-12">
                  &nbsp;&nbsp;   <button  id="btn_confirm_manager" name="btn_confirm_manager" type="submit" class="btn btn-primary" >บันทึก และ ยืนยันราคา</button>
               </div>

    </div>

    <hr>

 <div class="container">
  <h2> สูตรคำนวณ</h2>

  <table class="table table-bordered">
    <thead>
      <tr >
          <th style="text-align: center;">Order</th>
        <th style="text-align: center; width: 20px;">Pieces</th>
        <th style="text-align: center; width: 20px;">Ream</th>
       <th style="text-align: center; width: 20px;">Paper</th>
        <th style="text-align: center; width: 20px;">Wage</th>
        <th style="text-align: center; width: 20px;">Diecut</th>
        <th style="text-align: center; width: 20px;">Plate</th>
        <th style="text-align: center; width: 20px;">Trans.</th>
       <th style="text-align: center; width: 20px;">SP</th>
        <th style="text-align: center; width: 20px;"></th>
     <th style="text-align: center; width: 20px;"></th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td align="right"><?php echo $jobs_order1; ?></td>

         <td><input  type="text" name="calc_pieces1" id="calc_pieces1" value="<?php echo $pieces1; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R1" id="calc_R1" value="<?php echo $value_R1; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>


        <td><input  type="text" name="calc_paper1" id="calc_paper1" value="<?php echo $price_paper1; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

       <td><input  type="text" name="calc_wage1" id="calc_wage1" value="<?php echo $wage1_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_Diecut1" id="calc_Diecut1" value="<?php echo $Diecut1_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_plate1" id="calc_plate1" value="<?php echo $man_calc_plate1; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_trans1" id="calc_trans1" value="<?php echo $trans1_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_sp1" id="calc_sp1" value="<?php if($sp1=='0'){ echo ''; }else{echo $sp1;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>


        <td><input  type="text" name="calc_total1" id="calc_total1" value="<?php if($man_calc_total1=='0'){ echo ''; }else{echo $man_calc_total1;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input   type="text" name="final1_box" id="final1_box" value="<?php echo $man_final1; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>

      </tr>

        <td align="right"><?php echo $jobs_order2; ?></td>

        <td><input  type="text" name="calc_pieces2" id="calc_pieces2" value="<?php echo $pieces2; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R2" id="calc_R2" value="<?php echo $value_R2; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

       <td><input  type="text" name="calc_paper2" id="calc_paper2" value="<?php echo $price_paper2; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

       <td><input  type="text" name="calc_wage2" id="calc_wage2" value="<?php echo $wage2_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_Diecut2" id="calc_Diecut2" value="<?php echo $Diecut2_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_plate2" id="calc_plate2" value="<?php echo $man_calc_plate2; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_trans2" id="calc_trans2" value="<?php echo $trans2_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_sp2" id="calc_sp2" value="<?php if($sp2=='0'){ echo ''; }else{echo $sp2;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_total2" id="calc_total2" value="<?php if($man_calc_total2=='0'){ echo ''; }else{echo $man_calc_total2;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>
        <td><input  type="text" name="final2_box" id="final2_box" value="<?php echo $man_final2; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>


        <tr>
        <td align="right"><?php echo $jobs_order3; ?></td>

         <td><input  type="text" name="calc_pieces3" id="calc_pieces3" value="<?php echo $pieces3; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R3" id="calc_R3" value="<?php echo $value_R3; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

       <td><input  type="text" name="calc_paper3" id="calc_paper3" value="<?php echo $price_paper3; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

       <td><input  type="text" name="calc_wage3" id="calc_wage3" value="<?php echo $wage3_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_Diecut3" id="calc_Diecut3" value="<?php echo $Diecut3_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_plate3" id="calc_plate3" value="<?php echo $man_calc_plate3; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_trans3" id="calc_trans3" value="<?php echo $trans3_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_sp3" id="calc_sp3" value="<?php if($sp3=='0'){ echo ''; }else{echo $sp3;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_total3" id="calc_total3" value="<?php if($man_calc_total3=='0'){ echo ''; }else{echo $man_calc_total3;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>
         <td><input   type="text" name="final3_box" id="final3_box" value="<?php echo $man_final3; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>

      </tr>
        <tr>
        <td align="right"><?php echo $jobs_order4; ?></td>

        <td><input  type="text" name="calc_pieces4" id="calc_pieces4" value="<?php echo $pieces4; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R4" id="calc_R4" value="<?php echo $value_R4; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_paper4" id="calc_paper4" value="<?php echo $price_paper4; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_wage4" id="calc_wage4" value="<?php echo $wage4_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_Diecut4" id="calc_Diecut4" value="<?php echo $Diecut4_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_plate4" id="calc_plate4" value="<?php echo $man_calc_plate4; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_trans4" id="calc_trans4" value="<?php echo $trans4_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_sp4" id="calc_sp4" value="<?php if($sp4=='0'){ echo ''; }else{echo $sp4;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_total4" id="calc_total4" value="<?php if($man_calc_total4=='0'){ echo ''; }else{echo $man_calc_total4;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>
        <td><input   type="text" name="final4_box" id="final4_box" value="<?php echo $man_final4; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>

      </tr>
        <tr>
        <td align="right"><?php echo $jobs_order5; ?></td>

         <td><input  type="text" name="calc_pieces5" id="calc_pieces5" value="<?php echo $pieces5; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R5" id="calc_R5" value="<?php echo $value_R5; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_paper5" id="calc_paper5" value="<?php echo $price_paper5; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_wage5" id="calc_wage5" value="<?php echo $wage5_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_Diecut5" id="calc_Diecut5" value="<?php echo $Diecut5_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_plate5" id="calc_plate5" value="<?php echo $man_calc_plate5; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_trans5" id="calc_trans5" value="<?php echo $trans5_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_sp5" id="calc_sp5" value="<?php  if($sp5=='0'){ echo ''; }else{echo $sp5;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_total5" id="calc_total5" value="<?php  if($man_calc_total5=='0'){ echo ''; }else{echo $man_calc_total5;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>
        <td><input  type="text" name="final5_box" id="final5_box" value="<?php echo $man_final5; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>

      </tr>
        <tr>
        <td align="right"><?php echo $jobs_order6; ?></td>

        <td><input  type="text" name="calc_pieces6" id="calc_pieces6" value="<?php echo $pieces6; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_R6" id="calc_R6" value="<?php echo $value_R6; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_paper6" id="calc_paper6" value="<?php echo $price_paper6; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_wage6" id="calc_wage6" value="<?php echo $wage6_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_Diecut6" id="calc_Diecut6" value="<?php echo $Diecut6_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_plate6" id="calc_plate6" value="<?php echo $man_calc_plate6; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

         <td><input  type="text" name="calc_trans6" id="calc_trans6" value="<?php echo $trans6_value; ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td><input  type="text" name="calc_sp6" id="calc_sp6" value="<?php if($sp6=='0'){ echo ''; }else{echo $sp6;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>

        <td ><input  type="text" name="calc_total6" id="calc_total6" value="<?php if($man_calc_total6=='0'){ echo ''; }else{echo $man_calc_total6;} ?>" style="width:80px; text-align: right; background-color: #F5F5F5; border: 0px;"></td>
        <td><input  type="text" name="final6_box" id="final6_box" value="<?php echo $man_final6; ?>" style="width:80px; text-align: right;" OnChange="JavaScript:chkNum(this)"></td>

      </tr>



    </tbody>
  </table>



 </div>

    <!--  ตัวเลือก คำนวณค่า plate -->
       <div class="row">
       <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>  &nbsp; &nbsp;&nbsp;ค่าตัวเลือก plate</th>
<th>&nbsp;&nbsp;<input id ="check_pl_factor1" name ="check_pl_factor" type="radio" value="1" <?php echo $man_checkPlate1; ?>> 1</th>
<th>&nbsp;&nbsp;<input id ="check_pl_factor2" name ="check_pl_factor" type="radio" value="2" <?php echo $man_checkPlate2; ?>> 2</th>
<th>&nbsp;&nbsp;<input id ="check_pl_factor3" name ="check_pl_factor" type="radio" value="3" <?php echo $man_checkPlate3; ?>> 3</th>

</tr>
</thead>
     </table>
       </div>
    </div>

    <!--  ตัวเลือก คำนวณค่า plate -->


    <!--  ตัวเลือก คำนวณค่า sp -->

    <div class="row">
    <div class="col-md-12">
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
    <th>  &nbsp; &nbsp;&nbsp;ค่าตัวเลือก</th>
<th>&nbsp;&nbsp;<input id ="check_sp_factor1" name ="check_sp_factor" type="radio" value="1" <?php echo $man_checkSP1; ?>>  ไม่คิดเพิ่ม </th>
<th>&nbsp;&nbsp;<input id ="check_sp_factor2" name ="check_sp_factor" type="radio" value="1.05" <?php echo $man_checkSP2; ?>>  5%</th>
<th>&nbsp;&nbsp;<input id ="check_sp_factor3" name ="check_sp_factor" type="radio" value="1.08" <?php echo $man_checkSP3; ?>>  8%</th>
<th>&nbsp;&nbsp;<input id ="check_sp_factor4" name ="check_sp_factor" type="radio" value="1.10" <?php echo $man_checkSP4; ?>>  10%</th>
<th>&nbsp;&nbsp;<input id ="check_sp_factor5" name ="check_sp_factor" type="radio"value="ค่าอิสระ" <?php echo $man_checkSP5; ?>>  ค่าอิสระ</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="factor_SP_box" name="factor_SP_box" value="<?php echo $man_factor_SP_box; ?>" placeholder="" ></th>

</tr>
</thead>
     </table>
    </div>
    </div>

    <!--  จบ ตัวเลือก คำนวณค่า sp -->
    <p></p>





    <div id="spin"></div>



    <div class="row">
        <div class="col-md-12">
              <div class="col-md-1">
                  <button  id="btn_confirm_manager2" name="btn_confirm_manager2" type="button" class="btn btn-primary" >อนุมัติ</button>
               </div>

               <div class="col-md-1">
                   <a href="print_report_pdf.php?filecode=<?php echo $file_code3; ?>" class="btn btn-primary pull-right" target="blank">พิมพ์งาน</a>
              </div>
        </div>

  </div>





       </form>    <!--  form   sale_edit  -->

  </div>    <!--  div>  row  -->

</div>

    <div id="note_file" class="tab-pane fade">
        <p></p>
        <!-- ข้อความจาก พนักงานขาย -->

         <div class="row">
                               <div class="col-md-8">
                           <label for="pur_job_note_box">ข้อความจาก พนักงานขาย</label>

                            <textarea class="form-control" rows="5" id="job_note_box" name="job_note_box" ><?php echo $job_note; ?></textarea>
                        </div>

                      </div>
        <p></p>

         <!-- ข้อความจาก จนท. ตัวอย่าง -->
          <div class="row">
                               <div class="col-md-8">
                           <label for="pur_job_note_box">ข้อความจาก เจ้าหน้าที่ ตัวอย่าง</label>

                            <textarea class="form-control" rows="5" id="exa_job_note_box" name="exa_job_note_box" ><?php echo $exa_job_note; ?></textarea>
                        </div>

                      </div>

        <p></p>

        <!-- ข้อความจาก จนท. จัดซื้อ -->
          <div class="row">
                               <div class="col-md-8">
                           <label for="pur_job_note_box">ข้อความจาก เจ้าหน้าที่ จัดซื้อ</label>

                            <textarea class="form-control" rows="5" id="pur_job_note_box" name="pur_job_note_box" ><?php echo $pur_job_note; ?></textarea>
                        </div>

                      </div>

         <!-- ข้อความจาก จนท. ผจก -->
          <div class="row">
                               <div class="col-md-8">
                           <label for="man_job_note_box2">ข้อความจาก ผจก.</label>

                           <textarea class="form-control" rows="5" id="man_job_note_box2" name="man_job_note_box2" ><?php echo $man_job_note; ?></textarea>
                        </div>

                      </div>



        <div class="row">

            <div class="col-md-6">
                <label>เอกสารแนบจาก จนท. ตัวอย่าง</label>
            </div>
            <div class="col-md-6">
               <label>เอกสารแนบจาก จนท. จัดซื้อ</label>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
            <!-- ตารางเอกสารแนบ จนท ตัวอย่าง-->
                           <table class="table table-bordered">
                    <thead>
                      <tr>
                          <td><b>1.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt1; ?>" target="blank"><?php echo $exa_fileAtt1; ?></a></td>
                          <td><b>2.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt2; ?>" target="blank"><?php echo $exa_fileAtt2; ?></a></td>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td><b>3.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt3; ?>" target="blank"><?php echo $exa_fileAtt3; ?></a></td>
                          <td><b>4.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt4; ?>" target="blank"><?php echo $exa_fileAtt4; ?></a></td>

                      </tr>
                      <tr>
                          <td><b>5.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt5; ?>" target="blank"><?php echo $exa_fileAtt5; ?></a></td>
                          <td><b>6.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt6; ?>" target="blank"><?php echo $exa_fileAtt6; ?></a></td>

                      </tr>
                      <tr>
                          <td><b>7.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt7; ?>" target="blank"><?php echo $exa_fileAtt7; ?></a></td>
                          <td><b>8.</b> <a href="../jobs/exa_file/<?php echo $exa_fileAtt8; ?>" target="blank"><?php echo $exa_fileAtt8; ?></a></td>

                      </tr>



                    </tbody>
                  </table>

            </div>

            <div class="col-md-6">
                 <!-- ตารางเอกสารแนบ จนท จัดซื้อ-->
                           <table class="table table-bordered">
                    <thead>
                      <tr>
                          <td><b>1.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt1; ?>" target="blank"><?php echo $pur_fileAtt1; ?></a></td>
                          <td><b>2.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt2; ?>" target="blank"><?php echo $pur_fileAtt2; ?></a></td>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td><b>3.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt3; ?>" target="blank"><?php echo $pur_fileAtt3; ?></a></td>
                          <td><b>4.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt4; ?>" target="blank"><?php echo $pur_fileAtt4; ?></a></td>

                      </tr>
                      <tr>
                          <td><b>5.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt5; ?>" target="blank"><?php echo $pur_fileAtt5; ?></a></td>
                          <td><b>6.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt6; ?>" target="blank"><?php echo $pur_fileAtt6; ?></a></td>

                      </tr>
                      <tr>
                          <td><b>7.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt7; ?>" target="blank"><?php echo $pur_fileAtt7; ?></a></td>
                          <td><b>8.</b> <a href="../jobs/purc_file/<?php echo $pur_fileAtt8; ?>" target="blank"><?php echo $pur_fileAtt8; ?></a></td>

                      </tr>



                    </tbody>
                  </table>

            </div>



        </div>


    </div>
     <!-- สิ้นสุด tab ข้อความ -->
<div id="tab1" class="tab-pane fade">
  <h4> test</h4>
</div>
 <!-- สิ้นสุด tab1 -->

</div>





	<?php // include 'bottom.php'; ?>

    <?php include 'footer.php'; ?>

 <!--  ส่งหาไปหา ไฟล์ และ ชื่อลูกค้า  -->


    <!--  script หาค่าราคากระดาษ  -->

<script language="javascript" src="js/ajax.js"></script>
<script language="javascript">
function doajax(mydata){
    var ajax1=createAjax();
    ajax1.onreadystatechange=function(){
        if(ajax1.readyState==4 && ajax1.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
          //  document.sales_edit.paper_price_box.value=ajax1.responseText;
            document.sales_edit.paper_price_edit.value=ajax1.responseText;
        }else{
            return false;
        }
    }
    ajax1.open("POST","paper_calc1.php",true);
    ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  //  ajax1.send("paper_cat="+document.sales_edit.cat_name.text()+"&paper_sellers="+document.sales_edit.sellers_name.value+"&paper_band="+document.sales_edit.band_name.value+"&paper_gram="+document.sales_edit.gram_name.value+"&paper_size="+document.sales_edit.size_paper_name.value);
    ajax1.send("paper_cat="+$("#cat_name option:selected").text()+"&paper_sellers="+$("#sellers_name option:selected").text()+"&paper_band="+$("#band_name option:selected").text()+"&paper_gram="+$("#gram_name option:selected").text()+"&paper_size="+$("#size_paper_name option:selected").text());

}



</script>
<!--  จบ script การหาค่าราคากระดาษ  -->

<!--  script ส่งค่าเพื่อการคำนวณราคา  -->

<script language="javascript">
function doajax2(mydata){


var ajax2=createAjax();
    ajax2.onreadystatechange=function(){
        if(ajax2.readyState==4 && ajax2.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.sales_edit.calc_value.value=ajax2.responseText;
            document.sales_edit.real_price.value=ajax2.responseText;
        }else{
            return false;
        }
    }
    ajax2.open("POST","job_calc2.php",true);
    ajax2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax2.send("value_gram="+document.sales_edit.value_gram.value+"&paper_width="+document.sales_edit.paper_width.value+"&paper_length="+document.sales_edit.paper_length.value+"&paper_price="+document.sales_edit.paper_price_edit.value);


}




</script>

<!--  จบ script ส่งค่าเพื่อการคำนวณราคา  -->

<!--  คำนวนค่ากระดาษ  -->

<script language="javascript">
function calc_paper(mydata){


var ajax3=createAjax();
    ajax3.onreadystatechange=function(){
        if(ajax3.readyState==4 && ajax3.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.sales_edit.paper_price_box.value=ajax3.responseText;
            document.sales_edit.paper_price_box2.value=ajax3.responseText;
            // document.sales_edit.real_price.value=ajax2.responseText;
        }else{
            return false;
        }
    }
    ajax3.open("POST","calc_paper.php",true);
    ajax3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax3.send("pur_offersale="+document.sales_edit.pur_offersale_box.value+"&pur_thick="+document.sales_edit.exa_plastic_thick_box_gram.value+"&paper_length="+document.sales_edit.exa_plastic_length_box.value+"&paper_width="+document.sales_edit.exa_plastic_width_box.value);


}




</script>


<!--   สิ้นสุดการคำนวน ค่า กระดาษ  -->

<!--  คำนวนค่าแรงพิมพ์ wage  -->

<script language="javascript">
function calc_wage(mydata){


var ajax3=createAjax();
    ajax3.onreadystatechange=function(){
        if(ajax3.readyState==4 && ajax3.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.sales_edit.wage_print_box.value=ajax3.responseText;
            document.sales_edit.wage_print_box2.value=ajax3.responseText;

            // document.sales_edit.real_price.value=ajax2.responseText;
        }else{
            return false;
        }


    }

   //var ch_wage2 =document.getElementById('ch_print_wage').value;

   var ch_wage11 =document.getElementById('ch_wage1');
   var ch_wage22 =document.getElementById('ch_wage2');
   var ch_wage33 =document.getElementById('ch_wage3');
   var ch_wage44 =document.getElementById('print_wage');

   if (ch_wage11.checked) {
ch_wage = ch_wage11.value;
} else if (ch_wage22.checked) {
ch_wage = ch_wage22.value;
} else if (ch_wage33.checked) {
ch_wage = ch_wage33.value;
} else {
ch_wage = ch_wage44.value;
}

    ajax3.open("POST","calc_wage.php",true);
    ajax3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //var ch_wage_status = $
    ajax3.send("print_wage1Color="+document.sales_edit.man_wagePrint1Color_box.value+"&number_color="+document.sales_edit.exa_printAmont_box.value+"&paper_length="+document.sales_edit.exa_plastic_length_box.value+"&paper_width="+document.sales_edit.exa_plastic_width_box.value+"&ch_print_wage2="+ch_wage);


}




</script>


<!--   สิ้นสุดการคำนวน ค่าแรงพิมพ์ wage  -->

<!--  คำนวนราคาเคลือบผิวหน้า -->




<!--   สิ้นสุดการคำนวนราคาเคลือบผิวหน้า  -->


<!--  คำนวนราคาลูกฟูก -->

<script language="javascript">
function calc_price_lf(mydata){


var ajax4=createAjax();
    ajax4.onreadystatechange=function(){
        if(ajax4.readyState==4 && ajax4.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.sales_edit.lf_price_box.value=ajax4.responseText;
             document.sales_edit.lf_price_box2.value=ajax4.responseText;
            // document.sales_edit.real_price.value=ajax2.responseText;
        }else{
            return false;
        }
    }
    ajax4.open("POST","calc_price_lf.php",true);
    ajax4.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax4.send("factor_lf_data="+document.sales_edit.factor_lf_box.value+"&lf_width_data="+document.sales_edit.lf_width_box.value+"&lf_length_data="+document.sales_edit.lf_length_box.value+"&exa_printAmont="+document.sales_edit.exa_printAmont_box.value);


}




</script>


<!--   สิ้นสุดการคำนวนราคาลูกฟูก -->

<!--  คำนวนราคา LAMINATE -->

<script language="javascript">
function calc_price_lami(mydata){


var ajax4=createAjax();
    ajax4.onreadystatechange=function(){
        if(ajax4.readyState==4 && ajax4.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.sales_edit.lami_price_box.value=ajax4.responseText;
            document.sales_edit.lami_price_box2.value=ajax4.responseText;
            // document.sales_edit.real_price.value=ajax2.responseText;
        }else{
            return false;
        }
    }
    ajax4.open("POST","calc_price_lami.php",true);
    ajax4.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax4.send("factor_lami_data="+document.sales_edit.factor_lami_box.value+"&lami_width_data="+document.sales_edit.lami_width_box.value+"&lamin_length_data="+document.sales_edit.lamin_length_box.value+"&exa_printAmont="+document.sales_edit.exa_printAmont_box.value);


}




</script>


<!--   สิ้นสุดการคำนวนราคา LAMINATE -->



<!-- บันทึกรายละเอียดเกี่ยวกับงาน   -->


<!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
      <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
   <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/app.min.js"></script>

    <script src="admin/bootstrap/js/smoke.min.js"></script>

    <script src="admin/bootstrap/js/spin.min.js"></script>


     <!--  คำนวณ รวมค่าบล็อกปั๊มเคจริง -->


      <script>

                        document.getElementById('pur_priceBoxPK1R_box').onchange= function() {

                        function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                         var pur_priceBoxPK1R =document.getElementById('pur_priceBoxPK1R_box');
                         var pur_priceBoxPK2R =document.getElementById('pur_priceBoxPK2R_box');
                         var pur_priceBoxPK3R =document.getElementById('pur_priceBoxPK3R_box');
                         var pur_priceBoxPK4R =document.getElementById('pur_priceBoxPK4R_box');


                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pk1_del_comma = removeCommas(pur_priceBoxPK1R.value);
                         pk2_del_comma = removeCommas(pur_priceBoxPK2R.value);
                         pk3_del_comma = removeCommas(pur_priceBoxPK3R.value);
                         pk4_del_comma = removeCommas(pur_priceBoxPK4R.value);

                         total_PK1C =  parseFloat(pk1_del_comma)+parseFloat(pk2_del_comma)+parseFloat(pk3_del_comma)+parseFloat(pk4_del_comma);
                           total_PK1C = total_PK1C.toFixed(2);

                           total_PK1C = addCommas(total_PK1C);

                        document.getElementById('total_price_BPKR_box').value= total_PK1C;

                            };


                        document.getElementById('pur_priceBoxPK2R_box').onchange= function() {

                        function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                         var pur_priceBoxPK1R =document.getElementById('pur_priceBoxPK1R_box');
                         var pur_priceBoxPK2R =document.getElementById('pur_priceBoxPK2R_box');
                         var pur_priceBoxPK3R =document.getElementById('pur_priceBoxPK3R_box');
                         var pur_priceBoxPK4R =document.getElementById('pur_priceBoxPK4R_box');


                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pk1_del_comma = removeCommas(pur_priceBoxPK1R.value);
                         pk2_del_comma = removeCommas(pur_priceBoxPK2R.value);
                         pk3_del_comma = removeCommas(pur_priceBoxPK3R.value);
                         pk4_del_comma = removeCommas(pur_priceBoxPK4R.value);

                         total_PK1C =  parseFloat(pk1_del_comma)+parseFloat(pk2_del_comma)+parseFloat(pk3_del_comma)+parseFloat(pk4_del_comma);
                           total_PK1C = total_PK1C.toFixed(2);

                           total_PK1C = addCommas(total_PK1C);

                        document.getElementById('total_price_BPKR_box').value= total_PK1C;

                            };




                          document.getElementById('pur_priceBoxPK3R_box').onchange= function() {

                        function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                         var pur_priceBoxPK1R =document.getElementById('pur_priceBoxPK1R_box');
                         var pur_priceBoxPK2R =document.getElementById('pur_priceBoxPK2R_box');
                         var pur_priceBoxPK3R =document.getElementById('pur_priceBoxPK3R_box');
                         var pur_priceBoxPK4R =document.getElementById('pur_priceBoxPK4R_box');


                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pk1_del_comma = removeCommas(pur_priceBoxPK1R.value);
                         pk2_del_comma = removeCommas(pur_priceBoxPK2R.value);
                         pk3_del_comma = removeCommas(pur_priceBoxPK3R.value);
                         pk4_del_comma = removeCommas(pur_priceBoxPK4R.value);

                         total_PK1C =  parseFloat(pk1_del_comma)+parseFloat(pk2_del_comma)+parseFloat(pk3_del_comma)+parseFloat(pk4_del_comma);
                           total_PK1C = total_PK1C.toFixed(2);

                           total_PK1C = addCommas(total_PK1C);

                        document.getElementById('total_price_BPKR_box').value= total_PK1C;

                            };


                          document.getElementById('pur_priceBoxPK4R_box').onchange= function() {

                        function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                         var pur_priceBoxPK1R =document.getElementById('pur_priceBoxPK1R_box');
                         var pur_priceBoxPK2R =document.getElementById('pur_priceBoxPK2R_box');
                         var pur_priceBoxPK3R =document.getElementById('pur_priceBoxPK3R_box');
                         var pur_priceBoxPK4R =document.getElementById('pur_priceBoxPK4R_box');


                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pk1_del_comma = removeCommas(pur_priceBoxPK1R.value);
                         pk2_del_comma = removeCommas(pur_priceBoxPK2R.value);
                         pk3_del_comma = removeCommas(pur_priceBoxPK3R.value);
                         pk4_del_comma = removeCommas(pur_priceBoxPK4R.value);

                         total_PK1C =  parseFloat(pk1_del_comma)+parseFloat(pk2_del_comma)+parseFloat(pk3_del_comma)+parseFloat(pk4_del_comma);
                           total_PK1C = total_PK1C.toFixed(2);

                           total_PK1C = addCommas(total_PK1C);

                        document.getElementById('total_price_BPKR_box').value= total_PK1C;

                            };




     </script>


      <!--  จบ คำนวณ รวมค่าบล็อกปั๊มเคจริง -->


    <!--  Factor  ค่าตัวเลือก -->

        <script>

                        document.getElementById('check_sp_factor5').onchange= function() {
                        document.getElementById('factor_SP_box').disabled = !this.checked;

                                                    };

     </script>


    <!--  จบ  Factor ค่าตัวเลือก -->




   <!--  Factor  Factor ฟอยล์	 checkbox radio -->

        <script>

                        document.getElementById('check_paperF_factor5').onchange= function() {
                        document.getElementById('factor_paperF_box').disabled = !this.checked;

                                                    };

                         document.getElementById('check_paperF_factor1').onchange= function() {
                        document.getElementById('factor_paperF_box').disabled = this.checked;
                        document.getElementById('factor_paperF_box').value="";
                                                    };
                        document.getElementById('check_paperF_factor2').onchange= function() {
                        document.getElementById('factor_paperF_box').disabled = this.checked;
                        document.getElementById('factor_paperF_box').value="";
                                                    };
                        document.getElementById('check_paperF_factor3').onchange= function() {
                        document.getElementById('factor_paperF_box').disabled = this.checked;
                        document.getElementById('factor_paperF_box').value="";
                                                    };
                        document.getElementById('check_paperF_factor4').onchange= function() {
                        document.getElementById('factor_paperF_box').disabled = this.checked;
                        document.getElementById('factor_paperF_box').value="";
                                                    };






     </script>


    <!--  จบ  Factor ฟอยล์	 checkbox radio -->


    <script>

                        document.getElementById('ch_wage4').onchange= function() {
                        document.getElementById('print_wage').disabled = !this.checked;

                                                    };

                         document.getElementById('ch_wage1').onchange= function() {
                        document.getElementById('print_wage').disabled = this.checked;
                        document.getElementById('print_wage').value="";
                                                    };
                        document.getElementById('ch_wage2').onchange= function() {
                        document.getElementById('print_wage').disabled = this.checked;
                        document.getElementById('print_wage').value="";
                                                    };
                        document.getElementById('ch_wage3').onchange= function() {
                        document.getElementById('print_wage').disabled = this.checked;
                        document.getElementById('print_wage').value="";
                                                    };


     </script>


     <!--  Factor LAMINATE checkbox radio -->
      <script>

                        document.getElementById('check_lami_factor4').onchange= function() {
                        document.getElementById('factor_lami_box').disabled = !this.checked;

                                                    };

                         document.getElementById('check_lami_factor1').onchange= function() {
                        document.getElementById('factor_lami_box').disabled = this.checked;
                        document.getElementById('factor_lami_box').value="";
                                                    };
                        document.getElementById('check_lami_factor2').onchange= function() {
                        document.getElementById('factor_lami_box').disabled = this.checked;
                        document.getElementById('factor_lami_box').value="";
                                                    };
                        document.getElementById('check_lami_factor3').onchange= function() {
                        document.getElementById('factor_lami_box').disabled = this.checked;
                        document.getElementById('factor_lami_box').value="";
                                                    };






     </script>

     <!--  Factor  Factor ฟอยล์	 checkbox radio -->

     <!--  คำนวณ บล็อคปั้มนูนรวม -->


      <script>

                        document.getElementById('pur_priceBoxPN1R_box').onchange= function() {

                        function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                         var pur_priceBoxPN1R =document.getElementById('pur_priceBoxPN1R_box');
                         var pur_priceBoxPN2R =document.getElementById('pur_priceBoxPN2R_box');
                        var pur_priceBoxPN3R =document.getElementById('pur_priceBoxPN3R_box');

                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pn1_del_comma = removeCommas(pur_priceBoxPN1R.value);
                         pn2_del_comma = removeCommas(pur_priceBoxPN2R.value);
                         pn3_del_comma = removeCommas(pur_priceBoxPN3R.value);

                         total_PN1C =  parseFloat(pn1_del_comma)+parseFloat(pn2_del_comma)+parseFloat(pn3_del_comma);
                           total_PN1C = total_PN1C.toFixed(2);

                           total_PN1C = addCommas(total_PN1C);

                        document.getElementById('total_price_BPNR_box').value= total_PN1C;

                            };


                         document.getElementById('pur_priceBoxPN2R_box').onchange= function() {

                           function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                        var pur_priceBoxPN1R =document.getElementById('pur_priceBoxPN1R_box');
                        var pur_priceBoxPN2R =document.getElementById('pur_priceBoxPN2R_box');
                        var pur_priceBoxPN3R =document.getElementById('pur_priceBoxPN3R_box');

                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pn1_del_comma = removeCommas(pur_priceBoxPN1R.value);
                         pn2_del_comma = removeCommas(pur_priceBoxPN2R.value);
                         pn3_del_comma = removeCommas(pur_priceBoxPN3R.value);

                         total_PN1C =  parseFloat(pn1_del_comma)+parseFloat(pn2_del_comma)+parseFloat(pn3_del_comma);
                           total_PN1C = total_PN1C.toFixed(2);

                           total_PN1C = addCommas(total_PN1C);

                        document.getElementById('total_price_BPNR_box').value= total_PN1C;


                              };



                        document.getElementById('pur_priceBoxPN3R_box').onchange= function() {

                         function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };

                          var pur_priceBoxPN1R =document.getElementById('pur_priceBoxPN1R_box');
                         var pur_priceBoxPN2R =document.getElementById('pur_priceBoxPN2R_box');
                        var pur_priceBoxPN3R =document.getElementById('pur_priceBoxPN3R_box');

                    //    total_PNR_CH = parseFloat(removeCommas(pur_priceBoxPN1R.value))+parseFloat(removeCommas(pur_priceBoxPN2R.value))+parseFloat(removeCommas(pur_priceBoxPN3R.value));
                         pn1_del_comma = removeCommas(pur_priceBoxPN1R.value);
                         pn2_del_comma = removeCommas(pur_priceBoxPN2R.value);
                         pn3_del_comma = removeCommas(pur_priceBoxPN3R.value);

                         total_PN1C =  parseFloat(pn1_del_comma)+parseFloat(pn2_del_comma)+parseFloat(pn3_del_comma);
                           total_PN1C = total_PN1C.toFixed(2);

                           total_PN1C = addCommas(total_PN1C);

                        document.getElementById('total_price_BPNR_box').value= total_PN1C;




                      };







     </script>


      <!--  จบ คำนวณ บล็อคปั้มนูนรวม -->

     <!-- คำนวนค่า sp ที่มีค่าตัวเลือก  -->


      <script>

                       // total sp factor 2
                        document.getElementById('check_sp_factor2').onchange= function() {

                         // ปิดปุ่ม  ใส่ค่าอิสระ
                         document.getElementById('factor_SP_box').disabled = this.checked;
                         document.getElementById('factor_SP_box').value="";

                        var sp_factor2 =document.getElementById('check_sp_factor2');

                         var sp1_value = <?php echo $sp1 ?>;
                         var sp2_value = <?php echo $sp2 ?>;
                         var sp3_value = <?php echo $sp3 ?>;
                         var sp4_value = <?php echo $sp4 ?>;
                         var sp5_value = <?php echo $sp5 ?>;
                         var sp6_value = <?php echo $sp6 ?>;

                           total1 = sp_factor2.value*sp1_value;
                           total1 = total1.toFixed(3);
                           total1 = addCommas(total1);

                           total2 = sp_factor2.value*sp2_value;
                           total2 = total2.toFixed(3);
                           total2 = addCommas(total2);

                           total3 = sp_factor2.value*sp3_value;
                           total3 = total3.toFixed(3);
                           total3 = addCommas(total3);

                           total4 = sp_factor2.value*sp4_value;
                           total4 = total4.toFixed(3);
                           total4 = addCommas(total4);

                           total5 = sp_factor2.value*sp5_value;
                           total5 = total5.toFixed(3);
                           total5 = addCommas(total5);

                          total6 = sp_factor2.value*sp6_value;
                         total6 = total6.toFixed(3);
                         total6 = addCommas(total6);

                         if (total1==0.000){
                             total1='';
                         }

                          if (total2==0.000){
                             total2='';
                         }

                          if (total3==0.000){
                             total3='';
                         }

                          if (total4==0.000){
                             total4='';
                         }

                          if (total5==0.000){
                             total5='';
                         }

                          if (total6==0.000){
                             total6='';
                         }


                          document.getElementById('calc_total1').value = total1;
                          document.getElementById('calc_total2').value = total2;
                          document.getElementById('calc_total3').value = total3;
                          document.getElementById('calc_total4').value = total4;
                          document.getElementById('calc_total5').value = total5;
                          document.getElementById('calc_total6').value = total6;

                          };


                          </script>



                           <script>





                           document.getElementById('check_pl_factor2').onchange= function() {




                        var ck_cal_plate1 =document.getElementById('calc_plate1');
                        var ck_cal_plate2 =document.getElementById('calc_plate2');
                        var ck_cal_plate3 =document.getElementById('calc_plate3');
                        var ck_cal_plate4 =document.getElementById('calc_plate4');
                        var ck_cal_plate5 =document.getElementById('calc_plate5');
                        var ck_cal_plate6 =document.getElementById('calc_plate6');






                        if(ck_cal_plate1.value!=0 || ck_cal_plate1.value ==''){
                           var  calc_palte1_option = <?php  echo $plate1_value; ?>;
                            calc_palte1_option = calc_palte1_option/2;
                            calc_palte1_option = calc_palte1_option.toFixed(3);
                             if(calc_palte1_option=='0.000'){
                                         calc_palte1_option = '';
                                     }
                          }else{
                            calc_palte1_option = '';
                          }

                         if(ck_cal_plate2.value!=0 || ck_cal_plate2.value ==''){
                           var  calc_palte2_option = <?php  echo $plate2_value; ?>;
                            calc_palte2_option = calc_palte2_option/2;
                            calc_palte2_option = calc_palte2_option.toFixed(3);
                             if(calc_palte2_option=='0.000'){
                                         calc_palte2_option = '';
                                     }
                          }else{
                            calc_palte2_option = '';
                          }

                          if(ck_cal_plate3.value!=0 || ck_cal_plate3.value ==''){
                           var  calc_palte3_option = <?php  echo $plate3_value; ?>;
                            calc_palte3_option = calc_palte3_option/2;
                            calc_palte3_option = calc_palte3_option.toFixed(3);
                             if(calc_palte3_option=='0.000'){
                                         calc_palte3_option = '';
                                     }
                          }else{
                            calc_palte3_option = '';
                          }

                          if(ck_cal_plate4.value!=0 || ck_cal_plate4.value ==''){
                           var  calc_palte4_option = <?php  echo $plate4_value; ?>;
                            calc_palte4_option = calc_palte4_option/2;
                            calc_palte4_option = calc_palte4_option.toFixed(3);
                             if(calc_palte4_option=='0.000'){
                                         calc_palte4_option = '';
                                     }
                          }else{
                            calc_palte4_option = '';
                          }

                           if(ck_cal_plate5.value!=0 || ck_cal_plate5.value ==''){
                           var  calc_palte5_option = <?php  echo $plate5_value; ?>;
                            calc_palte5_option = calc_palte5_option/2;
                            calc_palte5_option = calc_palte5_option.toFixed(3);
                             if(calc_palte5_option=='0.000'){
                                         calc_palte5_option = '';
                                     }
                          }else{
                            calc_palte5_option = '';
                          }


                           if(ck_cal_plate6.value!=0 || ck_cal_plate6.value ==''){
                           var  calc_palte6_option = <?php  echo $plate6_value; ?>;
                            calc_palte6_option = calc_palte6_option/2;
                            calc_palte6_option = calc_palte6_option.toFixed(3);
                             if(calc_palte6_option=='0.000'){
                                         calc_palte6_option = '';
                                     }
                          }else{
                            calc_palte6_option = '';
                          }





                          document.getElementById('calc_plate1').value = calc_palte1_option;
                          document.getElementById('calc_plate2').value = calc_palte2_option;
                          document.getElementById('calc_plate3').value = calc_palte3_option;
                          document.getElementById('calc_plate4').value = calc_palte4_option;
                          document.getElementById('calc_plate5').value = calc_palte5_option;
                          document.getElementById('calc_plate6').value = calc_palte6_option;


                                                    };

                                   // ตัวเลือก 3
                         document.getElementById('check_pl_factor3').onchange= function() {


                        var ck_cal_plate1 =document.getElementById('calc_plate1');
                        var ck_cal_plate2 =document.getElementById('calc_plate2');
                        var ck_cal_plate3 =document.getElementById('calc_plate3');
                        var ck_cal_plate4 =document.getElementById('calc_plate4');
                        var ck_cal_plate5 =document.getElementById('calc_plate5');
                        var ck_cal_plate6 =document.getElementById('calc_plate6');






                        if(ck_cal_plate1.value!=0 || ck_cal_plate1.value ==''){
                           var  calc_palte1_option = <?php  echo $plate1_value; ?>;
                            calc_palte1_option = calc_palte1_option/3;
                            calc_palte1_option = calc_palte1_option.toFixed(3);
                            if(calc_palte1_option=='0.000'){
                                         calc_palte1_option = '';
                                     }
                          }else{
                            calc_palte1_option = '';
                          }

                         if(ck_cal_plate2.value!=0 || ck_cal_plate2.value ==''){
                           var  calc_palte2_option = <?php  echo $plate2_value; ?>;
                            calc_palte2_option = calc_palte2_option/3;
                            calc_palte2_option = calc_palte2_option.toFixed(3);
                            if(calc_palte2_option=='0.000'){
                                         calc_palte2_option = '';
                                     }
                          }else{
                            calc_palte2_option = '';
                          }

                          if(ck_cal_plate3.value!=0 || ck_cal_plate3.value ==''){
                           var  calc_palte3_option = <?php  echo $plate3_value; ?>;
                            calc_palte3_option = calc_palte3_option/3;
                            calc_palte3_option = calc_palte3_option.toFixed(3);
                            if(calc_palte3_option=='0.000'){
                                         calc_palte3_option = '';
                                     }
                          }else{
                            calc_palte3_option = '';
                          }

                          if(ck_cal_plate4.value!=0 || ck_cal_plate4.value ==''){
                           var  calc_palte4_option = <?php  echo $plate4_value; ?>;
                            calc_palte4_option = calc_palte4_option/3;
                            calc_palte4_option = calc_palte4_option.toFixed(3);
                            if(calc_palte4_option=='0.000'){
                                         calc_palte4_option = '';
                                     }
                          }else{
                            calc_palte4_option = '';
                          }

                           if(ck_cal_plate5.value!=0 || ck_cal_plate5.value ==''){
                           var  calc_palte5_option = <?php  echo $plate5_value; ?>;
                            calc_palte5_option = calc_palte5_option/3;
                            calc_palte5_option = calc_palte5_option.toFixed(3);
                            if(calc_palte5_option=='0.000'){
                                         calc_palte5_option = '';
                                     }
                          }else{
                            calc_palte5_option = '';
                          }


                           if(ck_cal_plate6.value!=0 || ck_cal_plate6.value ==''){
                           var  calc_palte6_option = <?php  echo $plate6_value; ?>;
                            calc_palte6_option = calc_palte6_option/3;
                            calc_palte6_option = calc_palte6_option.toFixed(3);
                            if(calc_palte6_option=='0.000'){
                                         calc_palte6_option = '';
                                     }
                          }else{
                            calc_palte6_option = '';
                          }






                          document.getElementById('calc_plate1').value = calc_palte1_option;
                          document.getElementById('calc_plate2').value = calc_palte2_option;
                          document.getElementById('calc_plate3').value = calc_palte3_option;
                          document.getElementById('calc_plate4').value = calc_palte4_option;
                          document.getElementById('calc_plate5').value = calc_palte5_option;
                          document.getElementById('calc_plate6').value = calc_palte6_option;

                          };
                                   //  ตัวเลือก 3


                                    // ตัวเลือก 1
                         document.getElementById('check_pl_factor1').onchange= function() {


                        var ck_cal_plate1 =document.getElementById('calc_plate1');
                        var ck_cal_plate2 =document.getElementById('calc_plate2');
                        var ck_cal_plate3 =document.getElementById('calc_plate3');
                        var ck_cal_plate4 =document.getElementById('calc_plate4');
                        var ck_cal_plate5 =document.getElementById('calc_plate5');
                        var ck_cal_plate6 =document.getElementById('calc_plate6');






                        if(ck_cal_plate1.value!=0 || ck_cal_plate1.value ==''){
                           var  calc_palte1_option = <?php  echo $plate1_value; ?>;
                            calc_palte1_option = calc_palte1_option/1;
                            calc_palte1_option = calc_palte1_option.toFixed(3);
                             if(calc_palte1_option=='0.000'){
                                         calc_palte1_option = '';
                                     }
                          }else{
                            calc_palte1_option = '';
                          }

                         if(ck_cal_plate2.value!=0 || ck_cal_plate2.value ==''){
                           var  calc_palte2_option = <?php  echo $plate2_value; ?>;
                            calc_palte2_option = calc_palte2_option/1;
                            calc_palte2_option = calc_palte2_option.toFixed(3);
                            if(calc_palte2_option=='0.000'){
                                         calc_palte2_option = '';
                                     }
                          }else{
                            calc_palte2_option = '';
                          }

                          if(ck_cal_plate3.value!=0 || ck_cal_plate3.value ==''){
                           var  calc_palte3_option = <?php  echo $plate3_value; ?>;
                            calc_palte3_option = calc_palte3_option/1;
                            calc_palte3_option = calc_palte3_option.toFixed(3);
                               if(calc_palte3_option=='0.000'){
                                         calc_palte3_option = '';
                                     }
                          }else{
                            calc_palte3_option = '';
                          }

                          if(ck_cal_plate4.value!=0 || ck_cal_plate4.value ==''){
                           var  calc_palte4_option = <?php  echo $plate4_value; ?>;
                            calc_palte4_option = calc_palte4_option/1;
                            calc_palte4_option = calc_palte4_option.toFixed(3);
                                  if(calc_palte4_option=='0.000'){
                                         calc_palte4_option = '';
                                     }
                          }else{
                            calc_palte4_option = '';
                          }

                           if(ck_cal_plate5.value!=0 || ck_cal_plate5.value ==''){
                           var  calc_palte5_option = <?php  echo $plate5_value; ?>;
                            calc_palte5_option = calc_palte5_option/1;
                            calc_palte5_option = calc_palte5_option.toFixed(3);
                              if(calc_palte5_option=='0.000'){
                                         calc_palte5_option = '';
                                     }
                         }else{
                            calc_palte5_option = '';
                          }


                           if(ck_cal_plate6.value!=0 || ck_cal_plate6.value ==''){
                           var  calc_palte6_option = <?php  echo $plate6_value; ?>;
                            calc_palte6_option = calc_palte6_option/1;
                            calc_palte6_option = calc_palte6_option.toFixed(3);
                                    if(calc_palte6_option=='0.000'){
                                         calc_palte6_option = '';
                                     }
                           }else{
                            calc_palte6_option = '';
                          }






                          document.getElementById('calc_plate1').value = calc_palte1_option;
                          document.getElementById('calc_plate2').value = calc_palte2_option;
                          document.getElementById('calc_plate3').value = calc_palte3_option;
                          document.getElementById('calc_plate4').value = calc_palte4_option;
                          document.getElementById('calc_plate5').value = calc_palte5_option;
                          document.getElementById('calc_plate6').value = calc_palte6_option;

                          };
                                   //  ตัวเลือก 1




                           </script>



                          <script>

                          // total factor 1

                           document.getElementById('check_sp_factor1').onchange= function() {

                         // ปิดปุ่ม  ใส่ค่าอิสระ
                         document.getElementById('factor_SP_box').disabled = this.checked;
                         document.getElementById('factor_SP_box').value="";


                         var sp_factor1 =document.getElementById('check_sp_factor1');

                          var sp1_value = <?php echo $sp1 ?>;
                         var sp2_value = <?php echo $sp2 ?>;
                         var sp3_value = <?php echo $sp3 ?>;
                         var sp4_value = <?php echo $sp4 ?>;
                         var sp5_value = <?php echo $sp5 ?>;
                         var sp6_value = <?php echo $sp6 ?>;

                         total1 = sp_factor1.value*sp1_value;
                           total1 = total1.toFixed(3);
                           total1 = addCommas(total1);

                           total2 = sp_factor1.value*sp2_value;
                           total2 = total2.toFixed(3);
                           total2 = addCommas(total2);

                           total3 = sp_factor1.value*sp3_value;
                           total3 = total3.toFixed(3);
                           total3 = addCommas(total3);

                           total4 = sp_factor1.value*sp4_value;
                           total4 = total4.toFixed(3);
                           total4 = addCommas(total4);

                           total5 = sp_factor1.value*sp5_value;
                           total5 = total5.toFixed(3);
                           total5 = addCommas(total5);

                           total6 = sp_factor1.value*sp6_value;
                           total6 = total6.toFixed(3);
                           total6 = addCommas(total6);

                            if (total1==0.000){
                             total1='';
                         }

                          if (total2==0.000){
                             total2='';
                         }

                          if (total3==0.000){
                             total3='';
                         }

                          if (total4==0.000){
                             total4='';
                         }

                          if (total5==0.000){
                             total5='';
                         }

                          if (total6==0.000){
                             total6='';
                         }

                          document.getElementById('calc_total1').value = total1;
                          document.getElementById('calc_total2').value = total2;
                          document.getElementById('calc_total3').value = total3;
                          document.getElementById('calc_total4').value = total4;
                          document.getElementById('calc_total5').value = total5;
                          document.getElementById('calc_total6').value = total6;

                                                    };


       // total factor 3

                           document.getElementById('check_sp_factor3').onchange= function() {

                         // ปิดปุ่ม  ใส่ค่าอิสระ
                         document.getElementById('factor_SP_box').disabled = this.checked;
                         document.getElementById('factor_SP_box').value="";

                         var sp_factor3 =document.getElementById('check_sp_factor3');

                          var sp1_value = <?php echo $sp1 ?>;
                         var sp2_value = <?php echo $sp2 ?>;
                         var sp3_value = <?php echo $sp3 ?>;
                         var sp4_value = <?php echo $sp4 ?>;
                         var sp5_value = <?php echo $sp5 ?>;
                         var sp6_value = <?php echo $sp6 ?>;

                         total1 = sp_factor3.value*sp1_value;
                           total1 = total1.toFixed(3);
                           total1 = addCommas(total1);

                           total2 = sp_factor3.value*sp2_value;
                           total2 = total2.toFixed(3);
                           total2 = addCommas(total2);

                           total3 = sp_factor3.value*sp3_value;
                           total3 = total3.toFixed(3);
                           total3 = addCommas(total3);

                           total4 = sp_factor3.value*sp4_value;
                           total4 = total4.toFixed(3);
                           total4 = addCommas(total4);

                           total5 = sp_factor3.value*sp5_value;
                           total5 = total5.toFixed(3);
                           total5 = addCommas(total5);

                           total6 = sp_factor3.value*sp6_value;
                           total6 = total6.toFixed(3);
                           total6 = addCommas(total6);

                            if (total1==0.000){
                             total1='';
                         }

                          if (total2==0.000){
                             total2='';
                         }

                          if (total3==0.000){
                             total3='';
                         }

                          if (total4==0.000){
                             total4='';
                         }

                          if (total5==0.000){
                             total5='';
                         }

                          if (total6==0.000){
                             total6='';
                         }

                          document.getElementById('calc_total1').value = total1;
                          document.getElementById('calc_total2').value = total2;
                          document.getElementById('calc_total3').value = total3;
                          document.getElementById('calc_total4').value = total4;
                          document.getElementById('calc_total5').value = total5;
                          document.getElementById('calc_total6').value = total6;



                                                    };

                     // total factor 4

                           document.getElementById('check_sp_factor4').onchange= function() {

                       // ปิดปุ่ม  ใส่ค่าอิสระ
                         document.getElementById('factor_SP_box').disabled = this.checked;
                         document.getElementById('factor_SP_box').value="";

                         var sp_factor4 =document.getElementById('check_sp_factor4');

                          var sp1_value = <?php echo $sp1 ?>;
                         var sp2_value = <?php echo $sp2 ?>;
                         var sp3_value = <?php echo $sp3 ?>;
                         var sp4_value = <?php echo $sp4 ?>;
                         var sp5_value = <?php echo $sp5 ?>;
                         var sp6_value = <?php echo $sp6 ?>;

                         total1 = sp_factor4.value*sp1_value;
                           total1 = total1.toFixed(3);
                           total1 = addCommas(total1);

                           total2 = sp_factor4.value*sp2_value;
                           total2 = total2.toFixed(3);
                           total2 = addCommas(total2);

                           total3 = sp_factor4.value*sp3_value;
                           total3 = total3.toFixed(3);
                           total3 = addCommas(total3);

                           total4 = sp_factor4.value*sp4_value;
                           total4 = total4.toFixed(3);
                           total4 = addCommas(total4);

                           total5 = sp_factor4.value*sp5_value;
                           total5 = total5.toFixed(3);
                           total5 = addCommas(total5);

                           total6 = sp_factor4.value*sp6_value;
                           total6 = total6.toFixed(3);
                           total6 = addCommas(total6);

                            if (total1==0.000){
                             total1='';
                         }

                          if (total2==0.000){
                             total2='';
                         }

                          if (total3==0.000){
                             total3='';
                         }

                          if (total4==0.000){
                             total4='';
                         }

                          if (total5==0.000){
                             total5='';
                         }

                          if (total6==0.000){
                             total6='';
                         }

                          document.getElementById('calc_total1').value = total1;
                          document.getElementById('calc_total2').value = total2;
                          document.getElementById('calc_total3').value = total3;
                          document.getElementById('calc_total4').value = total4;
                          document.getElementById('calc_total5').value = total5;
                          document.getElementById('calc_total6').value = total6;



                                                    };

               // กรอกเอง

                          document.getElementById('factor_SP_box').onchange= function() {



                         var sp_factor_box =document.getElementById('factor_SP_box');

                          var sp1_value = <?php echo $sp1 ?>;
                         var sp2_value = <?php echo $sp2 ?>;
                         var sp3_value = <?php echo $sp3 ?>;
                         var sp4_value = <?php echo $sp4 ?>;
                         var sp5_value = <?php echo $sp5 ?>;
                         var sp6_value = <?php echo $sp6 ?>;

                         sp_factor_box = (parseFloat(sp_factor_box.value)+100)/100;


                         total1 = sp_factor_box*sp1_value;
                           total1 = total1.toFixed(3);
                           total1 = addCommas(total1);

                           total2 = sp_factor_box*sp2_value;
                           total2 = total2.toFixed(3);
                           total2 = addCommas(total2);

                           total3 = sp_factor_box*sp3_value;
                           total3 = total3.toFixed(3);
                           total3 = addCommas(total3);

                           total4 = sp_factor_box*sp4_value;
                           total4 = total4.toFixed(3);
                           total4 = addCommas(total4);

                           total5 = sp_factor_box*sp5_value;
                           total5 = total5.toFixed(3);
                           total5 = addCommas(total5);

                           total6 = sp_factor_box*sp6_value;
                           total6 = total6.toFixed(3);
                           total6 = addCommas(total6);

                            if (total1==0.000){
                             total1='';
                         }

                          if (total2==0.000){
                             total2='';
                         }

                          if (total3==0.000){
                             total3='';
                         }

                          if (total4==0.000){
                             total4='';
                         }

                          if (total5==0.000){
                             total5='';
                         }

                          if (total6==0.000){
                             total6='';
                         }

                          document.getElementById('calc_total1').value = total1;
                          document.getElementById('calc_total2').value = total2;
                          document.getElementById('calc_total3').value = total3;
                          document.getElementById('calc_total4').value = total4;
                          document.getElementById('calc_total5').value = total5;
                          document.getElementById('calc_total6').value = total6;



                                                    };



               // จงการคิดค่า total จากการกรอก % เอง
     </script>



     <!-- script เปิด ปิด ช่อง ให้กรอก final  -->


        <script>


                            document.getElementById('checkbox_sp_factor').onchange= function() {
                            document.getElementById('final1').disabled = !this.checked;
                            document.getElementById('final1').value ="";

                            document.getElementById('final2').disabled = !this.checked;
                            document.getElementById('final2').value ="";

                            document.getElementById('final3').disabled = !this.checked;
                            document.getElementById('final3').value ="";

                            document.getElementById('final4').disabled = !this.checked;
                            document.getElementById('final4').value ="";

                            document.getElementById('final5').disabled = !this.checked;
                            document.getElementById('final5').value ="";

                            document.getElementById('final6').disabled = !this.checked;
                            document.getElementById('final6').value ="";
                            };



        </script>


     <!--  จบ คำนวนค่า sp ที่มีค่าตัวเลือก -->



     <!-- script บันทึกค่าต่าง ๆ ของผู้จัดการ  -->

 <script>
          $(document).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide();
             });

            $(document).ready(function(){


                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $("#sales_edit").on("submit",function(e) {

                   document.getElementById('print_wage').disabled = this.checked;
                   document.getElementById('factor_lami_box').disabled = this.checked;
                   document.getElementById('factor_paperF_box').disabled = this.checked;
                   document.getElementById('factor_SP_box').disabled = this.checked;

                     if ($("#sales_edit").smkValidate()) {
                       $.ajax({
                            url: 'manager_jobs_edit.php',
                            type: 'POST',
                            data: new FormData( this ),
                            processData: false,
                            contentType: false,
                            dataType: 'json'
                              })  .done(function( data ) {
                                  if (data.status === "success") {

                                   $.smkAlert({text: data.message , type: data.status});

                                    setTimeout(function(){// wait for 5 secs(2)
                                           location.reload(); // then reload the page.(3)
                                      }, 5000);
                              // $.post( "purc_jobs_edit2.php",  $( "#cat_name").serialize() );
                            } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                        //    $("#purc_edit").smkClear();
                         //   $("#pur_thick_gram_box").focus();
                      // window.location.reload();

                          });
                        e.preventDefault();

                    }
                   e.preventDefault();

			    });


                       //   window.location.reload();


            });
    </script>

<!-- สิ้นสุดการบันทึกค่า ของ ผู้จัดการ  -->


<!-- script อนุมัติ ของผู้จัดการ  -->

 <script>
          $(document).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide();
             });

            $(document).ready(function(){


                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $("#btn_confirm_manager2").on("click",function(e) {



                     if ($("#sales_edit").smkValidate()) {
                       $.ajax({
                            url: 'manager_approve.php',
                            type: 'POST',
                            data: new FormData( this ),
                            processData: false,
                            contentType: false,
                            dataType: 'json'
                              })  .done(function( data ) {
                                  if (data.status === "success") {

                                   $.smkAlert({text: data.message , type: data.status});

                                    // กลับไปหน้าหลัก
                                   setTimeout(function(){// wait for 5 secs(2)
                                         //  window.location("index.php");
                                           window.location.href = "index.php";
                                         // then reload the page.(3)
                                      }, 2000);
                              // $.post( "purc_jobs_edit2.php",  $( "#cat_name").serialize() );
                            } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                        //    $("#purc_edit").smkClear();
                         //   $("#pur_thick_gram_box").focus();
                      // window.location.reload();

                          });
                        e.preventDefault();

                    }
                   e.preventDefault();

			    });


                       //   window.location.reload();


            });
    </script>

<!-- สิ้นสุดการอนุมัติ ของ ผู้จัดการ  -->


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

                $('#btn_confirm_price_paper').on("click",function(e) {

                     var vjs_paper_price =  document.sales_edit.paper_price_box2.value;
                     var vjs_wage =  document.sales_edit.wage_print_box2.value;
                    var vjs_file_code = "<?php echo $file_code3;?>";

            // alert(file_code5);


    $.ajax({
  type: 'POST',
  url: 'call_jobs.php',
  data: {'paper_price2': vjs_paper_price,'filecode4' : vjs_file_code,'wage2': vjs_wage}
});

                              <?php
                          include 'db/database.php';


	$jobs_real_price2 = $_POST['paper_price2'];
	$jobs_real_wage2 = $_POST['wage2'];
	// $jobs_calc_value = isset($_POST['paper_price_box2']);
        $jobs_filecode = $_POST['filecode4'];




	// include 'gmail.php';

	// send email


	   // end of send E-mail



    $sql = "UPDATE tb_jobs SET 	jobs_real_price='{$jobs_real_price2}',jobs_real_wage='{$jobs_real_wage2}'  WHERE jobs_filecode='{$jobs_filecode}'";

    $result = mysqli_query($link, $sql);



                       ?>

                     alert("บันทึกข้อมูลเรียบร้อยแล้ว");



            });
       });


    </script>

     <!--  end of script confirm paper price  -->


       <!--  script confirm wage  -->

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

                $('#btn_confirm_wage').on("click",function(e) {

                     var vjs_wage =  document.sales_edit.wage_print_box2.value;
                      var vjs_paper_price =  document.sales_edit.paper_price_box2.value;
                    var vjs_file_code = "<?php echo $file_code3;?>";

            // alert(file_code5);


    $.ajax({
  type: 'POST',
  url: 'call_jobs.php',
  data: {'wage2': vjs_wage,'filecode4' : vjs_file_code,'paper_price2' : vjs_paper_price}
});

                              <?php
                          include 'db/database.php';


	$jobs_real_wage2 = $_POST['wage2'];
	$jobs_real_price2 = $_POST['paper_price2'];
	// $jobs_calc_value = isset($_POST['paper_price_box2']);
        $jobs_filecode = $_POST['filecode4'];




	// include 'gmail.php';

	// send email


	   // end of send E-mail



    $sql = "UPDATE tb_jobs SET 	jobs_real_wage='{$jobs_real_wage2}',	jobs_real_price='{$jobs_real_price2}'  WHERE jobs_filecode='{$jobs_filecode}'";

    $result = mysqli_query($link, $sql);



                       ?>

                     alert("บันทึกข้อมูลเรียบร้อยแล้ว");



            });
       });


    </script>

     <!--  end of script confirm wage  -->


      <!--  script confirm 13  -->

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

                $('#btn_confirm_price_132').on("click",function(e) {

                     var vjs_pur_priceBoxk =  document.sales_edit.pur_priceBoxk_box2.value;


                    var vjs_file_code = "<?php echo $file_code3;?>";

           //  alert("HI");


    $.ajax({
  type: 'POST',
  url: 'call_jobs.php',
  data: {'pur_priceBoxk_box3': vjs_pur_priceBoxk,'filecode4' : vjs_file_code}
});

                              <?php
                          include 'db/database.php';


	$jobs_real_priceBoxk2 = $_POST['pur_priceBoxk_box3'];



	// $jobs_calc_value = isset($_POST['paper_price_box2']);
        $jobs_filecode = $_POST['filecode4'];






    $sql = "UPDATE tb_jobs SET 	jobs_real_priceBoxk = '{$jobs_real_priceBoxk2}'  WHERE jobs_filecode='{$jobs_filecode}'";

    $result = mysqli_query($link, $sql);



                       ?>

                     alert("บันทึกข้อมูลเรียบร้อยแล้ว");



            });
       });



     <!--  END script confirm 13  -->


     </script>


      <!--  script confirm paper price  -->


      <!--  script confirm 3  -->

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



                $('#btn_confirm_price_front2').on("click",function(e) {

                      var vjs_wage =  document.sales_edit.wage_print_box2.value;
                      var vjs_paper_price =  document.sales_edit.paper_price_box2.value;
                      var vjs_price_plastic2 =  document.sales_edit.price_plastic2.value;

                      var vjs_price_front1R =  document.sales_edit.price_front1R.value;
                      var vjs_price_front2R =  document.sales_edit.price_front2R.value;
                      var vjs_price_front3R =  document.sales_edit.price_front3R.value;
                      var vjs_price_front4R =  document.sales_edit.price_front4R.value;

                      var vjs_lf_price =  document.sales_edit.lf_price_box2.value;
                      var vjs_lami_price =  document.sales_edit.lami_price_box2.value;
                      var vjs_Blf_price =  document.sales_edit.Blf_price_box2.value;

                      var vjs_price_R1PK2 =  document.sales_edit.price_R1PK2_box.value;
                      var vjs_price_R2PK2 =  document.sales_edit.price_R2PK2_box.value;
                      var vjs_price_R3PK2 =  document.sales_edit.price_R3PK2_box.value;
                      var vjs_price_R4PK2 =  document.sales_edit.price_R4PK2_box.value;

                      var vjs_total_price_PKR =  document.sales_edit.total_price_PKR_box.value;
                      var vjs_man_total_PNR =  document.sales_edit.man_total_PNR_box.value;

                       //  ค่าบล็อคปั้มนูน
                     var vjs_pur_priceBoxPN1R =  document.sales_edit.pur_priceBoxPN1R_box.value;
                     var vjs_pur_priceBoxPN2R =  document.sales_edit.pur_priceBoxPN2R_box.value;
                     var vjs_pur_priceBoxPN3R =  document.sales_edit.pur_priceBoxPN3R_box.value;
                     var vjs_total_price_BPNR =  document.sales_edit.total_price_BPNR_box.value;


                       //  ค่าบล็อคปั้มเค
                     var vjs_pur_priceBoxPK1R =  document.sales_edit.pur_priceBoxPK1R_box.value;
                     var vjs_pur_priceBoxPK2R =  document.sales_edit.pur_priceBoxPK2R_box.value;
                     var vjs_pur_priceBoxPK3R =  document.sales_edit.pur_priceBoxPK3R_box.value;
                     var vjs_pur_priceBoxPK4R =  document.sales_edit.pur_priceBoxPK4R_box.value;
                     //  รวมค่าบล็อคปั้มเคจริง
                     var vjs_total_price_BPKR =  document.sales_edit.total_price_BPKR_box.value;


                      var vjs_price_PY =  document.sales_edit.price_PY_box2.value;

                      var vjs_price_logis =  document.sales_edit.price_logis_box2.value;
                  //    var vjs_pur_pricePtype =  document.sales_edit.pur_pricePtype_box2.value;

                      var vjs_ALU_price =  document.sales_edit.ALU_price_box2.value;

                        // ค่าแรงปะมือ ปะเครื่อง ค่าวัสดุพิเศษ ห่อ แกะ
                        var vjs_price_wage_PM =  document.sales_edit.price_wage_PM_box.value;
                        var vjs_price_wage_PK =  document.sales_edit.price_wage_PK_box.value;
                       // ค่าขนส่ง ค่าขยส่งจริง
                        var vjs_paper_weight =  document.sales_edit.paper_weight_box.value;

                        var vjs_price_mat_special =  document.sales_edit.price_mat_special_box.value;
                        var vjs_price_hor =  document.sales_edit.price_hor_box.value;
                        var vjs_price_kea =  document.sales_edit.price_kea_box.value;

                      //  ค่าเพลทจริง
                       var vjs_plate_price =  document.sales_edit.plate_price_box2.value;
                      // ค่าแบบปั๊มจริง
                      var vjs_pur_pricePtype =  document.sales_edit.pur_pricePtype_box2.value;



                    var vjs_file_code = "<?php echo $file_code3;?>";

           //  alert("HI");


    $.ajax({
  type: 'POST',
  url: 'call_jobs.php',
  data: {'paper_weight_box3': vjs_paper_weight,'pur_pricePtype_box3': vjs_pur_pricePtype,'plate_price_box3': vjs_plate_price,'price_kea_box3': vjs_price_kea,'price_hor_box3': vjs_price_hor,'price_mat_special_box3': vjs_price_mat_special,'price_wage_PK_box3': vjs_price_wage_PK,'price_wage_PM_box3': vjs_price_wage_PM,'total_price_BPKR_box3': vjs_total_price_BPKR,'pur_priceBoxPK4R_box3': vjs_pur_priceBoxPK4R,'pur_priceBoxPK3R_box3': vjs_pur_priceBoxPK3R,'pur_priceBoxPK2R_box3': vjs_pur_priceBoxPK2R,'pur_priceBoxPK1R_box3': vjs_pur_priceBoxPK1R,'total_price_BPNR_box3': vjs_total_price_BPNR,'pur_priceBoxPN3R_box3': vjs_pur_priceBoxPN3R,'pur_priceBoxPN2R_box3': vjs_pur_priceBoxPN2R,'pur_priceBoxPN1R_box3': vjs_pur_priceBoxPN1R,'man_total_PNR_box3': vjs_man_total_PNR,'total_price_PKR_box3': vjs_total_price_PKR,'ALU_price_box3': vjs_ALU_price,'Blf_price_box3': vjs_Blf_price,'price_plastic2_box3': vjs_price_plastic2,'price_logis_box3': vjs_price_logis,'price_PY_box3': vjs_price_PY,'price_R1PK2_box3': vjs_price_R1PK2,'price_R2PK2_box3': vjs_price_R2PK2,'price_R3PK2_box3': vjs_price_R3PK2,'price_R4PK2_box3': vjs_price_R4PK2,'lami_price_box3': vjs_lami_price,'wage2': vjs_wage,'paper_price2' : vjs_paper_price,'price_front1R_box3': vjs_price_front1R,'price_front2R_box3': vjs_price_front2R,'price_front3R_box3': vjs_price_front3R,'price_front4R_box3': vjs_price_front4R,'filecode4' : vjs_file_code,'lf_price_box3': vjs_lf_price}


});

                              <?php
                          include 'db/database.php';

	$jobs_real_wage2 = $_POST['wage2'];
	$jobs_real_price2 = $_POST['paper_price2'];

        $jobs_real_plastic = $_POST['price_plastic2_box3'];

        $jobs_real_Pfront1R2 = $_POST['price_front1R_box3'];
        $jobs_real_Pfront2R2 = $_POST['price_front2R_box3'];
	$jobs_real_Pfront3R2 = $_POST['price_front3R_box3'];
        $jobs_real_Pfront4R2 = $_POST['price_front4R_box3'];

        $jobs_real_lf_price2 = $_POST['lf_price_box3'];
        $jobs_real_lami_price = $_POST['lami_price_box3'];

        $jobs_real_Blf_price2 = $_POST['Blf_price_box3'];

        $jobs_real_price_R1PK2 = $_POST['price_R1PK2_box3'];
        $jobs_real_price_R2PK2 = $_POST['price_R2PK2_box3'];
        $jobs_real_price_R3PK2 = $_POST['price_R3PK2_box3'];
        $jobs_real_price_R4PK2 = $_POST['price_R4PK2_box3'];

        $man_total_price_PKR = $_POST['total_price_PKR_box3'];
        $man_total_PNR = $_POST['man_total_PNR_box3'];

        // ค่าบล็อคปั้มนูน
        $man_real_priceBoxPN1 = $_POST['pur_priceBoxPN1R_box3'];
        $man_real_priceBoxPN2 = $_POST['pur_priceBoxPN2R_box3'];
        $man_real_priceBoxPN3 = $_POST['pur_priceBoxPN3R_box3'];
        $man_total_price_BPNR = $_POST['total_price_BPNR_box3'];

        // ค่าบล็อคปั้มเค

        $man_real_priceBoxPK1 = $_POST['pur_priceBoxPK1R_box3'];
        $man_real_priceBoxPK2 = $_POST['pur_priceBoxPK2R_box3'];
        $man_real_priceBoxPK3 = $_POST['pur_priceBoxPK3R_box3'];
        $man_real_priceBoxPK4 = $_POST['pur_priceBoxPK4R_box3'];

        // รวมค่าบล็อคปั้มเคจริง
        $man_total_price_BPKR = $_POST['total_price_BPKR_box3'];

        $jobs_real_price_PY = $_POST['price_PY_box3'];
        $jobs_real_price_logis = $_POST['price_logis_box3'];


        $jobs_real_ALU_price = $_POST['ALU_price_box3'];

         //   ค่าแรงปะมือ ปะเครื่อง ค่าวัสดุพิเศษ ห่อ แกะ ค่าขนส่ง
         $man_price_wage_PM = $_POST['price_wage_PM_box3'];
         $man_price_wage_PK = $_POST['price_wage_PK_box3'];

         $man_paper_weight = $_POST['paper_weight_box3'];

         $man_price_mat_special = $_POST['price_mat_special_box3'];
         $man_price_hor = $_POST['price_hor_box3'];
         $man_price_kea = $_POST['price_kea_box3'];

        // ค่าเพลทจริง
         $jobs_real_plate_price = $_POST['plate_price_box3'];
        // ค่าแบบปั้มจริง
         $jobs_real_pur_pricePtype = $_POST['pur_pricePtype_box3'];



        $jobs_filecode = $_POST['filecode4'];






    $sql = "UPDATE tb_jobs SET 	man_paper_weight='{$man_paper_weight}',jobs_real_pur_pricePtype='{$jobs_real_pur_pricePtype}',jobs_real_plate_price='{$jobs_real_plate_price}',man_price_kea='{$man_price_kea}',man_price_hor='{$man_price_hor}',man_price_mat_special='{$man_price_mat_special}',man_price_wage_PK='{$man_price_wage_PK}',man_price_wage_PM='{$man_price_wage_PM}',man_total_price_BPKR='{$man_total_price_BPKR}',man_real_priceBoxPK4='{$man_real_priceBoxPK4}',man_real_priceBoxPK3='{$man_real_priceBoxPK3}',man_real_priceBoxPK2='{$man_real_priceBoxPK2}',man_real_priceBoxPK1='{$man_real_priceBoxPK1}',man_total_price_BPNR='{$man_total_price_BPNR}',man_real_priceBoxPN3='{$man_real_priceBoxPN3}',man_real_priceBoxPN2='{$man_real_priceBoxPN2}',man_real_priceBoxPN1='{$man_real_priceBoxPN1}',man_total_PNR='{$man_total_PNR}',man_total_price_PKR='{$man_total_price_PKR}',jobs_real_ALU_price='{$jobs_real_ALU_price}',jobs_real_price_PY='{$jobs_real_price_PY}',jobs_real_plastic='{$jobs_real_plastic}',jobs_real_price_logis='{$jobs_real_price_logis}',jobs_real_wage='{$jobs_real_wage2}',jobs_real_price='{$jobs_real_price2}',jobs_real_Pfront1R='{$jobs_real_Pfront1R2}',jobs_real_Pfront2R='{$jobs_real_Pfront2R2}',jobs_real_Pfront3R ='{$jobs_real_Pfront3R2}'"
    . ",jobs_real_price_R3PK2='{$jobs_real_price_R3PK2}' ,jobs_real_price_R4PK2='{$jobs_real_price_R4PK2}',jobs_real_price_R1PK2='{$jobs_real_price_R1PK2}' ,jobs_real_price_R2PK2='{$jobs_real_price_R2PK2}',jobs_real_Pfront4R='{$jobs_real_Pfront4R2}',jobs_real_lf_price='{$jobs_real_lf_price2}'"
    . ",jobs_real_lami_price='{$jobs_real_lami_price}',jobs_real_Blf_price='{$jobs_real_Blf_price2}'  WHERE jobs_filecode='{$jobs_filecode}'";





    $result = mysqli_query($link, $sql);



                       ?>

                     alert("บันทึกข้อมูลเรียบร้อยแล้ว");



            });
       });


    </script>

     <!--  end of script confirm 3  -->


<!-- จบ บันทึกรายละเอียดเกี่ยวกับงาน   -->

<!-- scrip เรียกข้อมูลกระดาษ  -->

<script type="text/javascript">
$(function(){

    // เมื่อโหลดขึ้นมาครั้งแรก ให้ ajax ไปดึงข้อมูลจังหวัดทั้งหมดมาแสดงใน
    // ใน select ที่ชื่อ cat_name
    // หรือเราไม่ใช้ส่วนนี้ก็ได้ โดยไปใช้การ query ด้วย php แสดงจังหวัดทั้งหมดก็ได้
    $.post("getAddress.php",{
        IDTbl:1
    },function(data){
        $("select[name=cat_name]").html(data);
    });

    // สร้างตัวแปร สำหรับเก็บค่าข้อความให้เลือกรายการ เช่น เลือกจังหวัด
    // เราจะเก็บค่านี้ไว้ใช้กรณีมีการรีเซ็ต หรือเปลี่ยนแปลงรายการใหม่
    var chooseText=[];
    $(".ajax_address").each(function(i,k){
        var initObj=$(".ajax_address").eq(i).find("option:eq(0)")[0];
        chooseText[i]=initObj;
    });

    // ส่วนของการตรวจสอบ และดึงข้อมูล ajax สังเกตว่าเราใช้ css คลาสชื่อ ajax_address
    // ดังนั้น css คลาสชื่อนี้จำเป็นต้องกำหนด หรือเราจะเปลี่ยนเป็นชื่ออื่นก็ได้ แต่จำไว้ว่า
    // ต้องเปลี่ยนในส่วนนี้ด้วย
    $(".ajax_address").on("change",function(){
        var indexObj = $(".ajax_address").index(this); // เก็บค่า index ไว้ใช้งานสำหรับอ้างอิง
        // วนลูปรีเซ็ตค่า select ของแต่ละรายการ โดยเอาค่าจาก array ด้านบนที่เราได้เก็บไว้
        $(".ajax_address").each(function(i,k){
            if(i>indexObj){ // รีเซ็ตค่าของรายการที่ไม่ได้เลือก
                $(".ajax_address").eq(i).html(chooseText[i]);
            }
        });

        var obj=$(this);
        var IDCheck=obj.val();  // ข้อมูลที่เราจะใช้เช็คกรณี where เช่น id ของจังหวัด
        var IDWhere=obj.data("where"); // ค่าจาก data-where ค่าน่าจะเป็นตัวฟิลด์เงื่อนไขที่เราจะใช้
        var targetObj=$("select[data-where='"+(IDWhere+1)+"']"); // ตัวที่เราจะเปลี่ยนแปลงข้อมูล
        if(targetObj.length>0){ // ถ้ามี obj เป้าหมาย
            targetObj.html("<option>.. กำลังโหลดข้อมูล.. </option>");  // แสดงสถานะกำลังโหลด
            setTimeout(function(){ // หน่วงเวลานิดหน่อยให้เห็นการทำงาน ตัดเออกได้
                // ส่งค่าไปทำการดึงข้อมูล option ตามเงื่อนไข
                 $.post("getAddress.php",{
                    IDTbl:IDWhere,
                    IDCheck:IDCheck,
                    IDWhere:IDWhere-1
                },function(data){
                    targetObj.html(data);   // แสดงค่าผลลัพธ์
                });
            },100);
        }
    });

});
</script>
<!-- จบ scrip เรียกข้อมูลกระดาษ  -->

<!--  script เช็คตัวเลข -->
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode == 46 && evt.srcElement.value.split('.').length>1) {
        return false;
    }
        if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
    return true;
}
<!--- จบ script -->
</script>

<!--  script เช็คตัวเลขให้กรอก 2 ตำแหน่ง -->
<script language="JavaScript">


                        function chkNum0(ele)
			{
				var num = parseFloat(ele.value);
				 if(!isNaN(num)){
                                  num2 = num.toFixed(0);
                                  ele.value = addCommas(num2);
                                  } else{
                                  ele.value = '';
                                  }
                            //     ele.value = (ele.value).toFixed(2);


                     }

                        function chkNum(ele)
			{
				var num = parseFloat(ele.value);
				 if(!isNaN(num)){
                                  num2 = num.toFixed(2);
                                  ele.value = addCommas(num2);
                                  } else{
                                  ele.value = '';
                                  }
                            //     ele.value = (ele.value).toFixed(2);


                     }

                   <!--  ทศนิยม 3 ตำแหน่ง   -->
                     function chkNum3(ele)
			{
				var num = parseFloat(ele.value);
				 if(!isNaN(num)){
                                  num2 = num.toFixed(3);
                                  ele.value = addCommas(num2);
                                  }
                            //     ele.value = (ele.value).toFixed(2);


                     }


                     <!-- บังคับเป็นตัวเลข 1 หลัก และ ทศนิยม 3 ตำแหน่ง  ค่ากระทุ้ง จนท ตัวอย่าง -->

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


                             function chkNum2(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){
                                ele.value = '';
                            }else{
                        //   var num2 = num.toPrecision(4);
			var num2 = num.toFixed(2);
                           if(num2<100){
                            ele.value = num2;
                            }else{
                           ele.value = '';
                           }

                    }

                         }

		</script>

<!--  script เช็คตัวเลข -->
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode == 46 && evt.srcElement.value.split('.').length>1) {
        return false;
    }
        if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
    return true;
}
<!--- จบ script -->
</script>
    <!--  script add comma -->
<script>
function addCommas(nStr){
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

</script>






    <!-- modal ยืนยันราคาค่ากระดาษ  -->

    <div class="modal fade" id="Md_confirm_price_paper" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคานี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_paper" name ="btn_confirm_price_paper" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ยืนยันราคาค่ากระดาษ -->




     <!-- modal ยืนยันค่าแรงจริงนี้  -->

    <div class="modal fade" id="Md_confirm_price_wage" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ค่าแรงนี้ ?</p>

</div>

<div class="modal-footer">

<button type="button" class="btn btn-primary" id="btn_confirm_wage" name= "btn_confirm_wage" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ยืนยันค่าแรงจริงนี้ -->


    <!-- modal เคลือบผิวหน้าแบบ	  -->

    <div class="modal fade" id="Md_confirm_price_front" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการยืนยันราคา ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_front2" name ="btn_confirm_price_front2" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal เคลือบผิวหน้าแบบ	 -->


    <!-- modal ข้อ 4	-->

    <div class="modal fade" id="Md_confirm_price_4" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคาค่าลูกฟูกนี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_42" name ="btn_42" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ข้อ 4	 -->

     <!-- modal ข้อ 5	-->

    <div class="modal fade" id="Md_confirm_price_5" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคาค่าปั๊มนี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_52" name ="btn_confirm_price_52" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ข้อ 5	 -->

     <!-- modal ข้อ 10	-->

    <div class="modal fade" id="Md_confirm_price_10" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคาค่าเพลทนี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_102" name ="btn_confirm_price_102" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ข้อ 10	 -->


     <!-- modal ข้อ 12	-->

    <div class="modal fade" id="Md_confirm_price_12" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคาค่าบล็อกปั๊มนูนนี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_122" name ="btn_confirm_price_122" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ข้อ 12	 -->

    <!-- modal ข้อ 13	-->

    <div class="modal fade" id="Md_confirm_price_13" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<div class="modal-body">

<p>คุณต้องการใช้ราคาค่าบล๊อคเคนี้ ?</p>

</div>

<div class="modal-footer">

<button id="btn_confirm_price_132" name ="btn_confirm_price_132" type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

</div>

</div>

</div>

    </div>

    <!-- end modal ข้อ 13	 -->

    <script>

                        document.getElementById('bt_calc_front').onclick= function() {

                           var ch_wage11 =document.getElementById('ch_wage1');
                           var ch_wage22 =document.getElementById('ch_wage2');
                           var ch_wage33 =document.getElementById('ch_wage3');
                           var ch_wage44 =document.getElementById('print_wage');

                           var value_Z =document.getElementById('lay_3');

                           var type1 =document.getElementById('exa_3front1_type_box');


                           var type2 =document.getElementById('exa_3front2_type_box');


                            var type3 =document.getElementById('exa_3front3_type_box');


                           var type4 =document.getElementById('exa_3front4_type_box');


                           var exa_plastic_width =document.getElementById('exa_plastic_width_box');
                           var exa_plastic_length =document.getElementById('exa_plastic_length_box');

                           // ค่า กว้าง x ยาว ของ size เคลือบผิว

                           var exa_3front1_width =document.getElementById('exa_3front1_width_box');
                           var exa_3front1_lenght =document.getElementById('exa_3front1_lenght_box');
                           var exa_3front2_width =document.getElementById('exa_3front2_width_box');
                           var exa_3front2_lenght =document.getElementById('exa_3front2_lenght_box');
                           var exa_3front3_width =document.getElementById('exa_3front3_width_box');
                           var exa_3front3_lenght =document.getElementById('exa_3front3_lenght_box');
                           var exa_3front4_width =document.getElementById('exa_3front4_width_box');
                           var exa_3front4_lenght =document.getElementById('exa_3front4_lenght_box');

                           // ขนาดเข้าเครื่องพิมพ์ กว้าง  ยาว
                           var man_printer_width =document.getElementById('man_printer_width_box');
                           var man_printer_lenght =document.getElementById('man_printer_lenght_box');



                           if (ch_wage11.checked) {
                                ch_wage = ch_wage11.value;
                                } else if (ch_wage22.checked) {
                                ch_wage = ch_wage22.value;
                                } else if (ch_wage33.checked) {
                                ch_wage = ch_wage33.value;
                                } else {
                                ch_wage = ch_wage44.value;
                                }


                                  if (type1.value=="อื่น ๆ" || type1.value=="SPOT UV" || type1.value=="-"){

                                    result_type1 = exa_3front1_width.value*exa_3front1_lenght.value;
                                    result_type1 = result_type1 + (result_type1*0.05);

                                    } else if(type1.value=="อาบเงา")  {
                                      result_type1 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                      result_type1 = result_type1 + (result_type1*0.05);

                                    } else if(type1.value=="อาบด้าน")  {
                                      result_type1 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type1 = result_type1 + (result_type1*0.05);

                                    }else if(type1.value=='ขัดเงา เว้นลิ้น'){
                                    result_type1 = ((man_printer_width.value*man_printer_lenght.value*0.0013)/value_Z.value);
                                    result_type1 = result_type1 + (result_type1*0.05);

                                   }else if(type1.value=='UV เว้นลิ้น'){
                                    result_type1 = ((man_printer_width.value*man_printer_lenght.value*0.0012)/value_Z.value);
                                    result_type1 = result_type1 + (result_type1*0.05);

                                   }else if(type1.value=='OPP เงา'){
                                    result_type1 = ((man_printer_width.value*man_printer_lenght.value*0.0030)/value_Z.value);
                                    result_type1 = result_type1 + (result_type1*0.05);

                                   }else if(type1.value=='OOP ด้าน'){
                                    result_type1 = ((man_printer_width.value*man_printer_lenght.value*0.0040)/value_Z.value);
                                    result_type1 = result_type1 + (result_type1*0.05);
                                      }



                                 if (type2.value=="อื่น ๆ" || type2.value=="SPOT UV" || type2.value=="-"){

                                    result_type2 = exa_3front2_width.value*exa_3front2_lenght.value;
                                   result_type2 = result_type2 + (result_type2*0.05);


                                  } else if(type2.value=="อาบเงา")  {
                                      result_type2 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type2 = result_type2 + (result_type2*0.05);

                                   } else if(type2.value=="อาบด้าน")  {
                                      result_type2 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type2 = result_type2 + (result_type2*0.05);

                                    }else if(type2.value=='ขัดเงา เว้นลิ้น'){
                                    result_type2 = ((man_printer_width.value*man_printer_lenght.value*0.0013)/value_Z.value);
                                   result_type2 = result_type2 + (result_type2*0.05);

                                   }else if(type2.value=='UV เว้นลิ้น'){
                                    result_type2 = ((man_printer_width.value*man_printer_lenght.value*0.0012)/value_Z.value);
                                   result_type2 = result_type2 + (result_type2*0.05);

                                   }else if(type2.value=='OPP เงา'){
                                    result_type2 = ((man_printer_width.value*man_printer_lenght.value*0.0030)/value_Z.value);
                                   result_type2 = result_type2 + (result_type2*0.05);

                                   }else if(type2.value=='OOP ด้าน'){
                                    result_type2 = ((man_printer_width.value*man_printer_lenght.value*0.0040)/value_Z.value);
                                   result_type2 = result_type2 + (result_type2*0.05);
                                      }



                                     if (type3.value=="อื่น ๆ" || type3.value=="SPOT UV" || type3.value=="-"){

                                    result_type3 = exa_3front3_width.value*exa_3front3_lenght.value;
                                    result_type3 = result_type3 + (result_type3*0.05);


                                  } else if(type3.value=="อาบเงา")  {
                                       result_type3 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type3 = result_type3 + (result_type3*0.05);

                                   } else if(type3.value=="อาบด้าน")  {
                                      result_type3 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type3 = result_type3 + (result_type3*0.05);

                                    }else if(type3.value=='ขัดเงา เว้นลิ้น'){
                                    result_type3 = ((man_printer_width.value*man_printer_lenght.value*0.0013)/value_Z.value);
                                   result_type3 = result_type3 + (result_type3*0.05);

                                   }else if(type3.value=='UV เว้นลิ้น'){
                                    result_type3 = ((man_printer_width.value*man_printer_lenght.value*0.0012)/value_Z.value);
                                   result_type3 = result_type3 + (result_type3*0.05);

                                   }else if(type3.value=='OPP เงา'){
                                    result_type3 = ((man_printer_width.value*man_printer_lenght.value*0.0030)/value_Z.value);
                                   result_type3 = result_type3 + (result_type3*0.05);

                                   }else if(type3.value=='OOP ด้าน'){
                                    result_type3 = ((man_printer_width.value*man_printer_lenght.value*0.0040)/value_Z.value);
                                   result_type3 = result_type3 + (result_type3*0.05);
                                      }



                           if (type4.value=="อื่น ๆ" || type4.value=="SPOT UV" || type4.value=="-"){

                                    result_type4 = exa_3front4_width.value*exa_3front4_lenght.value;
                                    result_type4 = result_type4 + (result_type4*0.05);


                                  } else if(type4.value=="อาบเงา")  {
                                      result_type4 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type4 = result_type4 + (result_type4*0.05);

                                   } else if(type4.value=="อาบด้าน")  {
                                       result_type4 = man_printer_width.value*man_printer_lenght.value*ch_wage;
                                       result_type4 = result_type4 + (result_type4*0.05);

                                    }else if(type4.value=='ขัดเงา เว้นลิ้น'){
                                    result_type4 = ((man_printer_width.value*man_printer_lenght.value*0.0013)/value_Z.value);
                                   result_type4 = result_type4 + (result_type4*0.05);

                                   }else if(type4.value=='UV เว้นลิ้น'){
                                    result_type4 = ((man_printer_width.value*man_printer_lenght.value*0.0012)/value_Z.value);
                                   result_type4 = result_type4 + (result_type4*0.05);

                                   }else if(type4.value=='OPP เงา'){
                                    result_type4 = ((man_printer_width.value*man_printer_lenght.value*0.0030)/value_Z.value);
                                   result_type4 = result_type4 + (result_type4*0.05);

                                   }else if(type4.value=='OOP ด้าน'){
                                    result_type4 = ((man_printer_width.value*man_printer_lenght.value*0.0040)/value_Z.value);
                                   result_type4 = result_type4 + (result_type4*0.05);
                                      }



                         result_type1 =  result_type1.toFixed(3);
                         result_type1 =  addCommas(result_type1);

                         result_type2 =  result_type2.toFixed(3);
                         result_type2 =  addCommas(result_type2);

                         result_type3 =  result_type3.toFixed(3);
                         result_type3 =  addCommas(result_type3);

                         result_type4 =  result_type4.toFixed(3);
                         result_type4 =  addCommas(result_type4);


                       document.getElementById('price_front1').value = result_type1;
                       document.getElementById('price_front1R').value = result_type1;

                       document.getElementById('price_front2').value = result_type2;
                       document.getElementById('price_front2R').value = result_type2;

                       document.getElementById('price_front3').value = result_type3;
                       document.getElementById('price_front3R').value = result_type3;

                       document.getElementById('price_front4').value = result_type4;
                       document.getElementById('price_front4R').value = result_type4;




        };



                            </script>



                            <script>

                        document.getElementById('bt_calc_lf').onclick= function() {

                           var lami_factor1 =document.getElementById('check_lami_factor1');
                           var lami_factor2 =document.getElementById('check_lami_factor2');
                           var lami_factor3 =document.getElementById('check_lami_factor3');
                           var lami_factor4 =document.getElementById('factor_lami_box');

                           var value_Z =document.getElementById('lay_3');

                           var factor_lf =document.getElementById('factor_lf_box');
                           var lf_width =document.getElementById('lf_width_box');
                           var lf_length =document.getElementById('lf_length_box');

                           var man_printer_width =document.getElementById('man_printer_width_box');
                           var man_printer_lenght =document.getElementById('man_printer_lenght_box');



                            if (lami_factor1.checked) {
                                lm_fac = lami_factor1.value;
                                } else if (lami_factor2.checked) {
                                lm_fac = lami_factor2.value;
                                } else if (lami_factor3.checked) {
                                lm_fac = lami_factor3.value;
                                } else {
                                lm_fac = lami_factor4.value;
                                }


                           result_lf_price = (((man_printer_width.value*man_printer_lenght.value)/144)*factor_lf.value)/value_Z.value;

                              result_lf_price =  result_lf_price.toFixed(4);
                           document.getElementById('lf_price_box').value = result_lf_price;
                           document.getElementById('lf_price_box2').value = result_lf_price;



                           result_lami_price = (((man_printer_width.value*man_printer_lenght.value)/144)*lm_fac)/value_Z.value;

                                result_lami_price =  result_lami_price.toFixed(4);
                                 document.getElementById('lami_price_box').value = result_lami_price;
                                 document.getElementById('lami_price_box2').value = result_lami_price;


                   };







                            </script>


    <!--   คำนวนค่าเพลท -->

       <!--   คำนวนราคา B ลูกฟูก -->

               <script>

                        document.getElementById('bt_calc_B_lf').onclick= function() {

                           var Blf_factor1 =document.getElementById('check_Blf_factor1');
                           var Blf_factor2 =document.getElementById('check_Blf_factor2');
                           var Blf_factor3 =document.getElementById('check_Blf_factor3');

                           var exa_Bluk = document.getElementById('exa_Bluk_box');
                           var exa_bluk_pack =document.getElementById('exa_bluk_pack_box');

                            if (Blf_factor1.checked) {
                                blf_fac = Blf_factor1.value;
                                } else if (Blf_factor2.checked) {
                                blf_fac = Blf_factor2.value;
                                } else {
                                blf_fac = Blf_factor3.value;
                                }


                           result_blf_price = exa_Bluk.value/(exa_bluk_pack.value*blf_fac);

                          //  result_blf_price = 0;

                              result_blf_price =  result_blf_price.toFixed(3);
                           document.getElementById('Blf_price_box').value = result_blf_price;
                           document.getElementById('Blf_price_box2').value = result_blf_price;

                           };

                            </script>

    <!--   จบ คำนวนราคา B ลูกฟูก-->


                   <script>

                        document.getElementById('bt_calc_plate').onclick= function() {


                           var value_Z =document.getElementById('lay_3');

                           var plate_amount =document.getElementById('pur_price_plate_box');


                          // เช็คค่า อาบเงา อาบด้าน

                          var exa_3front1_type =document.getElementById('exa_3front1_type_box');
                          var exa_3front2_type =document.getElementById('exa_3front2_type_box');
                          var exa_3front3_type =document.getElementById('exa_3front3_type_box');
                          var exa_3front4_type =document.getElementById('exa_3front4_type_box');

                          add_plate = 0;
                          if(exa_3front1_type.value=="อาบเงา" || exa_3front1_type.value=="อาบด้าน"  ){
                               add_plate = 1;
                           }

                           if(exa_3front2_type.value=="อาบเงา" || exa_3front2_type.value=="อาบด้าน"  ){
                               add_plate =  add_plate+1;
                           }

                           if(exa_3front3_type.value=="อาบเงา" || exa_3front3_type.value=="อาบด้าน"  ){
                               add_plate =  add_plate+1;
                           }

                           if(exa_3front4_type.value=="อาบเงา" || exa_3front4_type.value=="อาบด้าน"  ){
                               add_plate =  add_plate+1;
                           }




                           result_plate_price = (parseFloat(plate_amount.value)+add_plate)*2000;

                           result_plate_price =  result_plate_price.toFixed(2);
                            result_plate_price = addCommas(result_plate_price);


                            result_ptype_price = 1100*value_Z.value;

                          if(result_ptype_price<5500 && result_ptype_price!=='0.00'){
                                     alert('ค่าแบบปั๊ม ต้องมีค่าเริ่มต้นที่ 5,500 บาท');

                                     result_ptype_price =  result_ptype_price.toFixed(2);
                                 result_ptype_price = addCommas(result_ptype_price);

                                     document.getElementById('pur_pricePtype_box').value = result_ptype_price;
                                     document.getElementById('pur_pricePtype_box2').value = '5,500.00';
                               }else{

                                 result_ptype_price =  result_ptype_price.toFixed(2);
                                 result_ptype_price = addCommas(result_ptype_price);




                                   document.getElementById('pur_pricePtype_box').value = result_ptype_price;
                                   document.getElementById('pur_pricePtype_box2').value = result_ptype_price;


                               }


                                  document.getElementById('plate_price_box').value = result_plate_price;
                                  document.getElementById('plate_price_box2').value = result_plate_price;








                   };

                     </script>


                 <!--   คำนวนข้อ 5. Factor  -->
                        <script>

                        document.getElementById('bt_calc_price_pum').onclick= function() {


                         function removeCommas(str) {
                            while (str.search(",") >= 0) {
                                str = (str + "").replace(',', '');
                            }
                            return str;
                        };


                           var paperF_factor1 =document.getElementById('check_paperF_factor1');
                           var paperF_factor2 =document.getElementById('check_paperF_factor2');
                           var paperF_factor3 =document.getElementById('check_paperF_factor3');
                           var paperF_factor4 =document.getElementById('check_paperF_factor4');
                           var paperF_factor5 =document.getElementById('factor_paperF_box');


                           var plusPK_factor1 =document.getElementById('check_plusPK_factor1');
                           var plusPK_factor2 =document.getElementById('check_plusPK_factor2');
                           var plusPK_factor3 =document.getElementById('check_plusPK_factor3');

                           var exa_R1KA =document.getElementById('exa_R1KA_box');
                           var exa_R1KY =document.getElementById('exa_R1KY_box');

                           var exa_R2KA =document.getElementById('exa_R2KA_box');
                           var exa_R2KY =document.getElementById('exa_R2KY_box');

                           var exa_R3KA =document.getElementById('exa_R3KA_box');
                           var exa_R3KY =document.getElementById('exa_R3KY_box');

                           var exa_R4KA =document.getElementById('exa_R4KA_box');
                           var exa_R4KY =document.getElementById('exa_R4KY_box');

                           //ขนาดเข้าเครื่องพิมพ์ กว้าง ยาว

                           var man_printer_width =document.getElementById('man_printer_width_box');
                           var man_printer_lenght =document.getElementById('man_printer_lenght_box');








                               if (plusPK_factor1.checked) {
                                       plusPK_fac = plusPK_factor1.value;
                                } else if (plusPK_factor2.checked) {
                                       plusPK_fac = plusPK_factor2.value;
                               } else if (plusPK_factor3.checked) {
                                       plusPK_fac = plusPK_factor3.value;
                                } else {
                                      plusPK_fac = 0;
                               }



                         if (paperF_factor1.checked) {
                               paperF_fac = paperF_factor1.value;
                                } else if (paperF_factor2.checked) {
                              paperF_fac = paperF_factor2.value;
                                } else if (paperF_factor3.checked) {
                               paperF_fac = paperF_factor3.value;
                                } else if (paperF_factor4.checked) {
                                paperF_fac = paperF_factor4.value;
                                } else if (paperF_factor5.checked) {
                                 paperF_fac = paperF_factor5.value;
                                }else {
                                paperF_fac =0;
                                  }






                           result_price_pk1 = (parseFloat(exa_R1KA.value)*parseFloat(exa_R1KY.value))-1;
                           result_price_pk2 = (parseFloat(exa_R2KA.value)*parseFloat(exa_R2KY.value))-1;
                           result_price_pk3 = (parseFloat(exa_R3KA.value)*parseFloat(exa_R3KY.value))-1;
                           result_price_pk4 = (parseFloat(exa_R4KA.value)*parseFloat(exa_R4KY.value))-1;










                              result_price_pk1 =  result_price_pk1.toFixed();
                              result_price_pk2 =  result_price_pk2.toFixed();
                              result_price_pk3 =  result_price_pk3.toFixed();
                              result_price_pk4 =  result_price_pk4.toFixed();




                                 if(paperF_fac=="0.25") {
                                       result_price_pk1 = 0.25 + (result_price_pk1*0.025);
                                       result_price_pk2 = 0.25 + (result_price_pk2*0.025);
                                       result_price_pk3 = 0.25 + (result_price_pk3*0.025);
                                       result_price_pk4 = 0.25 + (result_price_pk4*0.025);

                                       }else if(paperF_fac=="0.30"){
                                         result_price_pk1 = 0.30 + (result_price_pk1*0.030);
                                         result_price_pk2 = 0.30 + (result_price_pk2*0.030);
                                         result_price_pk3 = 0.30 + (result_price_pk3*0.030);
                                         result_price_pk4 = 0.30 + (result_price_pk4*0.030);

                                       }else if(paperF_fac=="0.35"){
                                        result_price_pk1 = 0.35 + (result_price_pk1*0.035);
                                        result_price_pk2 = 0.35 + (result_price_pk2*0.035);
                                        result_price_pk3 = 0.35 + (result_price_pk3*0.035);
                                        result_price_pk4 = 0.35 + (result_price_pk4*0.035);

                                       }else if(paperF_fac=="0.40"){
                                         result_price_pk1 = 0.40 + (result_price_pk1*0.040);
                                         result_price_pk2 = 0.40 + (result_price_pk2*0.040);
                                         result_price_pk3 = 0.40 + (result_price_pk3*0.040);
                                         result_price_pk4 = 0.40 + (result_price_pk4*0.040);
                                           }

                                   result_price_pk1 = result_price_pk1*plusPK_fac;
                                   result_price_pk2 = result_price_pk2*plusPK_fac;
                                   result_price_pk3 = result_price_pk3*plusPK_fac;
                                   result_price_pk4 = result_price_pk4*plusPK_fac;


                                       result_price_pk1 =  result_price_pk1.toFixed(2);
                                       result_price_pk2 =  result_price_pk2.toFixed(2);
                                       result_price_pk3 =  result_price_pk3.toFixed(2);
                                       result_price_pk4 =  result_price_pk4.toFixed(2);





                                  // check ถ้า กว้าง ยาว มาเป็น 0 จะได้ 0

                                  exa_R1KA_te = exa_R1KA.value;
                                  exa_R1KY_te = exa_R1KY.value;
                                  exa_R2KA_te = exa_R2KA.value;
                                  exa_R2KY_te = exa_R2KY.value;
                                  exa_R3KA_te = exa_R3KA.value;
                                  exa_R3KY_te = exa_R3KY.value;
                                  exa_R4KA_te = exa_R4KA.value;
                                  exa_R4KY_te = exa_R4KY.value;

                                if(exa_R3KA_te=='0.00' || exa_R3KY_te=='0.00'){
                              result_price_pk3 = "0.00";
                              }
                              if(exa_R4KA_te=='0.00' || exa_R4KY_te=='0.00'){
                              result_price_pk4 = "0.00";
                              }

                              if(exa_R1KA_te=='0.00' || exa_R1KY_te=='0.00'){
                              result_price_pk1 = "0.00";
                              }

                              if(exa_R2KA_te=='0.00' || exa_R2KY_te=='0.00'){
                              result_price_pk2 = "0.00";
                              }



                                    document.getElementById('price_R1PK_box').value = result_price_pk1;
                                    document.getElementById('price_R1PK2_box').value = result_price_pk1;

                                    document.getElementById('price_R2PK_box').value = result_price_pk2;
                                    document.getElementById('price_R2PK2_box').value = result_price_pk2;

                                    document.getElementById('price_R3PK_box').value = result_price_pk3;
                                    document.getElementById('price_R3PK2_box').value = result_price_pk3;

                                    document.getElementById('price_R4PK_box').value = result_price_pk4;
                                    document.getElementById('price_R4PK2_box').value = result_price_pk4;


                             // แสดงค่าผลรวมของ รวมค่าปั๊มเค
                             result_total_pk = parseFloat(result_price_pk1)+parseFloat(result_price_pk2)+parseFloat(result_price_pk3)+parseFloat(result_price_pk4);
                             result_total_pk = result_total_pk.toFixed(2);
                             document.getElementById('total_price_PK_box').value = result_total_pk;
                             document.getElementById('total_price_PKR_box').value = result_total_pk;

                            // แสดงค่าผลรวมของ รวมค่าปั๊มเคจริง

                            // คำนวณปั๊มนูน

                           var ch_wage11 =document.getElementById('ch_wage1');
                           var ch_wage22 =document.getElementById('ch_wage2');
                           var ch_wage33 =document.getElementById('ch_wage3');
                           var ch_wage44 =document.getElementById('print_wage');

                           if (ch_wage11.checked) {
                        ch_wage = ch_wage11.value;
                        } else if (ch_wage22.checked) {
                        ch_wage = ch_wage22.value;
                        } else if (ch_wage33.checked) {
                        ch_wage = ch_wage33.value;
                        } else {
                        ch_wage = ch_wage44.value;
                        }



                            var exa_plastic_width =document.getElementById('exa_plastic_width_box');
                            var exa_plastic_length =document.getElementById('exa_plastic_length_box');

                            // จำนวนรอบ ปั๊มนูน
                            var PN_amount =document.getElementById('man_PN_amount_box');



                           // คำนวณ ปั้มนูน

                                   result_price_pn1 = man_printer_width.value*man_printer_lenght.value*ch_wage*PN_amount.value;


                                       result_price_pn1 =  result_price_pn1.toFixed(2);

                                       result_price_pn1 =  addCommas(result_price_pn1);
                                      // แสดงผล

                                      document.getElementById('man_total_PN_box').value = result_price_pn1;
                                    document.getElementById('man_total_PNR_box').value = result_price_pn1;



                       // คำนวณปั้มขาด


                       // var PY_amount = <?php echo $exa_PY_amount; ?>;
                       var PY_amount =document.getElementById('man_PK_amount_box');

                       result_priee_py = man_printer_width.value*man_printer_lenght.value*ch_wage*PY_amount.value;

                         result_priee_py =  result_priee_py.toFixed(2);
                         result_priee_py =  addCommas(result_priee_py);


                          document.getElementById('price_PY_box').value = result_priee_py;
                          document.getElementById('price_PY_box2').value = result_priee_py;


                       var ck_kratung = '<?=$exa_kratung?>' ;// สร้างตัวแปรมารับก่อนนะครับ
                       // คำนวณค่าแรงกระทุ้ง

                       result_price_kratung = man_printer_width.value*man_printer_lenght.value*ch_wage;
                       result_price_kratung = result_price_kratung.toFixed(3);
                       result_price_kratung =  addCommas(result_price_kratung);

                       if(ck_kratung !=''){
                           document.getElementById('man_kratung_Wprice_box').value = result_price_kratung;
                           document.getElementById('man_kratung_Wprice_box2').value = result_price_kratung;
                       }else{
                           document.getElementById('man_kratung_Wprice_box').value = '0.00';
                           document.getElementById('man_kratung_Wprice_box2').value = '0.00';
                       }

                         // แปลงค่า เอา comma ออกจากตัวแปร
                         result_price_kratung2 = removeCommas(result_price_kratung);
                         result_price_pn2 =  removeCommas(result_price_pn1);
                         result_priee_py2 = removeCommas(result_priee_py);


                          if(result_price_kratung2<2200 || result_price_pn2<2200 || result_priee_py2<2200){
                            alert('ค่าแรงปั๊มนูน ปั๊มขาด และค่าแรงกระทุ้ง ต้องมีค่าเริ่มต้นที่ 2,200 บาท');

                                    if(result_price_kratung2<2200){
                                            if(ck_kratung !=''){

                                               document.getElementById('man_kratung_Wprice_box2').value = '2,200.00';
                                               }else{
                                               document.getElementById('man_kratung_Wprice_box').value = '0.00';
                                               document.getElementById('man_kratung_Wprice_box2').value = '0.00';
                                               }
                                    }

                                    if(result_price_pn2<2200 && result_price_pn2!=='0.00'){
                                        document.getElementById('man_total_PN_box').value = result_price_pn1;
                                        document.getElementById('man_total_PNR_box').value = '2,200.00';
                                     }

                                     if(result_priee_py2<2200 && result_priee_py2!=='0.00') {
                                        document.getElementById('price_PY_box').value = result_priee_py;
                                        document.getElementById('price_PY_box2').value = '2,200.00';
                                     }




                          }

                   };




                            </script>


    <!--   คำนวน ข็อ 12 -->
      <script>

                        document.getElementById('bt_calc_pumN').onclick= function() {


                           var value_Z =document.getElementById('lay_3');

                           var exa_plastic_width = document.getElementById('exa_plastic_width_box');
                           var exa_plastic_length = document.getElementById('exa_plastic_length_box');





                           result_boxPN_price = (parseFloat(exa_plastic_width.value)+1)*(parseFloat(exa_plastic_length.value)+1)*value_Z.value*30;


                                  result_boxPN_price =  result_boxPN_price.toFixed(2);
                                 result_boxPN_price = addCommas(result_boxPN_price);


                                  document.getElementById('pur_pricePN_box').value = result_boxPN_price;
                                  document.getElementById('pur_pricePN_box2').value = result_boxPN_price;


                   };

                     </script>



     <!--   คำนวน ข้อ 13 -->
         <script>






                        document.getElementById('bt_calc_boxK').onclick= function() {


                           var value_Z =document.getElementById('lay_3');

                           var exa_plastic_width = document.getElementById('exa_plastic_width_box');
                           var exa_plastic_length = document.getElementById('exa_plastic_length_box');





                           result_boxK_price = (((parseFloat(exa_plastic_width.value)+1)*(parseFloat(exa_plastic_length.value)+1)*value_Z.value*15))+2300;

                               result_boxK_price =  result_boxK_price.toFixed(2);
                                   result_boxK_price = addCommas(result_boxK_price);

                            document.getElementById('pur_priceBoxk_box').value = result_boxK_price;
                             document.getElementById('pur_priceBoxk_box2').value = result_boxK_price;


                   };

                     </script>



          <!--   คำนวน ข้อ 8 -->
         <script>






                        document.getElementById('bt_calc_logis').onclick= function() {



                           var exa_plastic_width = document.getElementById('exa_plastic_width_box');
                           var exa_plastic_length = document.getElementById('exa_plastic_length_box');
                           var exa_plastic_thick = document.getElementById('exa_plastic_thick_box_gram');

                           var value_y =document.getElementById('lay_2').value;
                           var value_z =document.getElementById('lay_3').value;

                          //  var order1 = document.getElementById('order1_box');
                             var order1 = <?php echo $jobs_order11; ?>;
                            // factor ค่าขนส่ง


                           var logis_factor2 =document.getElementById('check_logis_factor2');
                           var logis_factor3 =document.getElementById('check_logis_factor3');
                           var logis_factor4 =document.getElementById('check_logis_factor4');
                           var logis_factor5 =document.getElementById('check_logis_factor5');


                               if (logis_factor2.checked) {
                                       logis_fac = logis_factor2.value;
                               } else if (logis_factor3.checked) {
                                       logis_fac = logis_factor3.value;
                                } else if (logis_factor4.checked) {
                                      logis_fac = logis_factor4.value;
                               } else if (logis_factor5.checked) {
                                      logis_fac = logis_factor5.value;
                                   } else {
                                      logis_fac = 0;
                                   }





                            // หาค่า y
                             if(value_y=="1"){
                                 value_y=500;
                                 }else if(value_y=="2"){
                                  value_y=1000;
                                 }else if(value_y=="3"){
                                 value_y=1500;
                                 }else if(value_y=="4"){
                                 value_y=2000;
                                 }else {
                                 value_y=2500;
                                 }

                                // จำนวน order หาร z

                                order1 = order1/value_z;

                                // คำนวณหาค่า R


                                if(order1>10000){
                                   value_R = (order1*1.06)/value_y;
                                 }else{
                                   value_R = (parseFloat(order1)+600)/value_y;
                                  }

                             // หาน้ำหนักกระดาษ

                             result_weight = ((exa_plastic_width.value*exa_plastic_length.value*exa_plastic_thick.value)/3100)*(value_R/1000);





                               result_weight =  result_weight.toFixed(3);


                               // คำนวณค่าขนส่ง

                               result_calc_logis = result_weight*logis_fac;

                               result_calc_logis =  result_calc_logis.toFixed(2);
                               result_calc_logis = addCommas(result_calc_logis);



                            //  ส่วนแสดงผล
                            document.getElementById('paper_weight_box').value = result_weight;
                             document.getElementById('price_logis_box').value = result_calc_logis;
                             document.getElementById('price_logis_box2').value = result_calc_logis;


                   };

                     </script>





         </body>


</html>
