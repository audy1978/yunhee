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
               
        
               
               // ค่าแรงกระทุ้ง 
               $man_kratung_Wprice =   $row_filecode['man_kratung_Wprice'];


            
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
        
        
     // ค้นหา รายละเอียดการสั่งตัวอย่าง พนักงานขาย
        
        $qry_order_exa = "SELECT * FROM tb_order_exa WHERE filecode='$file_code3'";
        $result_order_exa = mysqli_query($link,$qry_order_exa);
        if ($result_order_exa) {
            $row_order_exa =  mysqli_fetch_array($result_order_exa,MYSQLI_ASSOC);
            
           
           // GET ข้อมูล 
            
            $ck_example = $row_order_exa['ck_example'];
            $ck_art_work = $row_order_exa['ck_art_work'];
            $ck_disc = $row_order_exa['ck_disc'];
            $ck_print_prototype = $row_order_exa['ck_print_prototype'];
            $ck_barcode = $row_order_exa['ck_barcode'];
            $ck_etc1 = $row_order_exa['ck_etc1'];
            $etc1 = $row_order_exa['etc1'];
            
            $date_due = $row_order_exa['date_due'];
            
            $ck_proof = $row_order_exa['ck_proof'];
            $ck_etc2 = $row_order_exa['ck_etc2'];
            $etc2 = $row_order_exa['etc2'];
            
             $ck_hor_box = $row_order_exa['ck_hor_box'];
          // $ck_box = $row_order_exa['ck_box'];
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
            if ($ck_hor_box =="ห่อ") {
               $ck_hor_temp = "checked";
               } 
               
               // ck กล่อง
            if ($ck_hor_box =="กล่อง") {
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
        
        
          // ค้นหา รายละเอียดการสั่งตัวอย่าง เจ้าหน้าที่ตัวอย่าง
        
        $qry_order_exa2 = "SELECT * FROM tb_order_exa2 WHERE filecode='$file_code3'";
        $result_order_exa2 = mysqli_query($link,$qry_order_exa2);
        if ($result_order_exa2) {
            $row_order_exa2 =  mysqli_fetch_array($result_order_exa2,MYSQLI_ASSOC);
            
           
           // GET ข้อมูล 
            
            $OrderExa2_officer_exa = $row_order_exa2['OrderExa2_officer_exa'];
            $OrderExa2_style_job  = $row_order_exa2['OrderExa2_style_job'];
            $OrderExa2_A_W  = $row_order_exa2['OrderExa2_A_W'];
            $OrderExa2_company  = $row_order_exa2['OrderExa2_company'];
            $OrderExa2_date  = $row_order_exa2['OrderExa2_date'];
            
            // check ผู้ดำเนินการจัดทำ
            $OrderExa2_ck_typepum  = $row_order_exa2['OrderExa2_ck_typepum'];
            $OrderExa2_ck_rungsit  = $row_order_exa2['OrderExa2_ck_rungsit'];
            $OrderExa2_ck_systemBoard  = $row_order_exa2['OrderExa2_ck_systemBoard'];
            $OrderExa2_ck_etc  = $row_order_exa2['OrderExa2_ck_etc'];
            

                                  //   ck_typepum
                        if ($OrderExa2_ck_typepum !="") {
                           $OrderExa2_ck_typepum_temp = "checked";
                           }

                                 //   ck_rungsit
                        if ($OrderExa2_ck_rungsit !="") {
                           $OrderExa2_ck_rungsit_temp = "checked";
                           }

                                    //   ck_systemBoard
                        if ($OrderExa2_ck_systemBoard !="") {
                           $OrderExa2_ck_systemBoard_temp = "checked";
                           }

                           //   ck_etc
                        if ($OrderExa2_ck_etc !="") {
                           $OrderExa2_ck_etc_temp = "checked";
                           }
                           
               $OrderExa2_etc  = $row_order_exa2['OrderExa2_etc'];
               
               // check ผลสรุป
            $OrderExa2_ck_color_process = $row_order_exa2['OrderExa2_ck_color_process'];
            $OrderExa2_ck_C  = $row_order_exa2['OrderExa2_ck_C'];
            $OrderExa2_ck_M  = $row_order_exa2['OrderExa2_ck_M'];
            $OrderExa2_ck_Y  = $row_order_exa2['OrderExa2_ck_Y'];
            $OrderExa2_ck_K  = $row_order_exa2['OrderExa2_ck_K'];
            $OrderExa2_ck_special  = $row_order_exa2['OrderExa2_ck_special'];  
            
            
                      //   ck_color_process
                        if ($OrderExa2_ck_color_process !="") {
                           $OrderExa2_ck_color_process_temp = "checked";
                           }
                           
                            //   ck_C
                        if ($OrderExa2_ck_C !="") {
                           $OrderExa2_ck_C_temp = "checked";
                           }
                           
                            //   ck_M 
                        if ($OrderExa2_ck_M !="") {
                           $OrderExa2_ck_M_temp = "checked";
                           }
                           
                            //   ck_Y
                        if ($OrderExa2_ck_Y !="") {
                           $OrderExa2_ck_Y_temp = "checked";
                           }
                           
                            //   ck_K
                        if ($OrderExa2_ck_K !="") {
                           $OrderExa2_ck_K_temp = "checked";
                           }
                           
                            //   ck_special
                        if ($OrderExa2_ck_special !="") {
                           $OrderExa2_ck_special_temp = "checked";
                           }
                 $OrderExa2_krebpew   = $row_order_exa2['OrderExa2_krebpew'];          
                 $OrderExa2_code   = $row_order_exa2['OrderExa2_code']; 
                 $OrderExa2_plate  = $row_order_exa2['OrderExa2_plate']; 
                 $OrderExa2_pum  = $row_order_exa2['OrderExa2_pum']; 
                           
                    // ลำดับขั้นตอนการทำงาน
                 
                $OrderExa2_ck_cut = $row_order_exa2['OrderExa2_ck_cut'];
                $OrderExa2_ck_print = $row_order_exa2['OrderExa2_ck_print'];
                $OrderExa2_ck_kreab = $row_order_exa2['OrderExa2_ck_kreab'];
                $OrderExa2_ck_ka = $row_order_exa2['OrderExa2_ck_ka'];
                $OrderExa2_ck_palukfuk = $row_order_exa2['OrderExa2_ck_palukfuk'];
                $OrderExa2_ck_pumnun = $row_order_exa2['OrderExa2_ck_pumnun'];
                $OrderExa2_ck_pumkad = $row_order_exa2['OrderExa2_ck_pumkad'];
                $OrderExa2_ck_kea = $row_order_exa2['OrderExa2_ck_kea'];
                $OrderExa2_ck_pameu = $row_order_exa2['OrderExa2_ck_pameu'];
                $OrderExa2_ck_pakreng = $row_order_exa2['OrderExa2_ck_pakreng'];
              
                    //   ck ตัด
                        if ($OrderExa2_ck_cut !="") {
                             $OrderExa2_ck_cut_temp = "checked";
                           }
                           
                             
                        if ($OrderExa2_ck_print !="") {
                             $OrderExa2_ck_print_temp = "checked";
                           }
                           
                            if ($OrderExa2_ck_kreab !="") {
                             $OrderExa2_ck_kreab_temp = "checked";
                           }
                           
                              if ($OrderExa2_ck_ka !="") {
                             $OrderExa2_ck_ka_temp = "checked";
                           }
                           
                                if ($OrderExa2_ck_palukfuk !="") {
                             $OrderExa2_ck_palukfuk_temp = "checked";
                           }
                           
                                 if ($OrderExa2_ck_pumnun !="") {
                             $OrderExa2_ck_pumnun_temp = "checked";
                           }
                           
                                  if ($OrderExa2_ck_pumkad !="") {
                             $OrderExa2_ck_pumkad_temp = "checked";
                           }
                           
                                  if ($OrderExa2_ck_kea !="") {
                             $OrderExa2_ck_kea_temp = "checked";
                           }
                           
                                  if ($OrderExa2_ck_pameu !="") {
                             $OrderExa2_ck_pameu_temp = "checked";
                           }
                           
                                    if ($OrderExa2_ck_pakreng !="") {
                             $OrderExa2_ck_pakreng_temp = "checked";
                           }
                           
                           
                           
                   
                
                $OrderExa2_etc_mat= $row_order_exa2['OrderExa2_etc_mat'];
                
                // เพิ่มเติม
                
                $OrderExa2_ck_oldjob = $row_order_exa2['OrderExa2_ck_oldjob'];
                $OrderExa2_ck_newjob = $row_order_exa2['OrderExa2_ck_newjob'];
                $OrderExa2_ck_typepum2 = $row_order_exa2['OrderExa2_ck_typepum2'];
                $OrderExa2_ck_diecut = $row_order_exa2['OrderExa2_ck_diecut'];
                $OrderExa2_ck_replace = $row_order_exa2['OrderExa2_ck_replace'];
                $OrderExa2_ck_oldpum = $row_order_exa2['OrderExa2_ck_oldpum'];
                $OrderExa2_ck_newpum = $row_order_exa2['OrderExa2_ck_newpum'];
                $OrderExa2_ck_faseab = $row_order_exa2['OrderExa2_ck_faseab'];
                $OrderExa2_ck_takaw = $row_order_exa2['OrderExa2_ck_takaw'];
                $OrderExa2_ck_meu = $row_order_exa2['OrderExa2_ck_meu'];
                $OrderExa2_ck_kreng = $row_order_exa2['OrderExa2_ck_kreng'];
                
                    if ($OrderExa2_ck_oldjob !="") {
                             $OrderExa2_ck_oldjob_temp = "checked";
                           }
                           
                    if ($OrderExa2_ck_newjob !="") {
                             $OrderExa2_ck_newjob_temp = "checked";
                           }
                           
                    if ($OrderExa2_ck_typepum2 !="") {
                             $OrderExa2_ck_typepum2_temp = "checked";
                           }  
                    
                     if ($OrderExa2_ck_diecut !="") {
                             $OrderExa2_ck_diecut_temp = "checked";
                           }
                           
                     if ($OrderExa2_ck_replace !="") {
                             $OrderExa2_ck_replace_temp = "checked";
                           }
                           
                     if ($OrderExa2_ck_oldpum !="") {
                             $OrderExa2_ck_oldpum_temp = "checked";
                           }
                           
                     if ($OrderExa2_ck_newpum !="") {
                             $OrderExa2_ck_newpum_temp = "checked";
                           }
                           
                     if ($OrderExa2_ck_faseab !="") {
                             $OrderExa2_ck_faseab_temp = "checked";
                           }
                           
                     if ($OrderExa2_ck_takaw !="") {
                             $OrderExa2_ck_takaw_temp = "checked";
                           }
                           
                    if ($OrderExa2_ck_meu !="") {
                             $OrderExa2_ck_meu_temp = "checked";
                           }
                           
                    if ($OrderExa2_ck_kreng !="") {
                             $OrderExa2_ck_kreng_temp = "checked";
                           }
                           
                        // --- 4 ---   
                $OrderExa2_ck_real_paper = $row_order_exa2['OrderExa2_ck_real_paper'];
                $OrderExa2_ck_paperShopProof = $row_order_exa2['OrderExa2_ck_paperShopProof'];
                $OrderExa2_paperShopProof = $row_order_exa2['OrderExa2_paperShopProof'];     
                           
                          if ($OrderExa2_ck_real_paper !="") {
                              $OrderExa2_ck_real_paper_temp = "checked";
                           }  
                           
                          if ($OrderExa2_ck_paperShopProof !="") {
                              $OrderExa2_ck_paperShopProof_temp = "checked";
                           }  
                           
                           // --5---
                           
                  $OrderExa2_ck_realColor = $row_order_exa2['OrderExa2_ck_realColor'];
                  $OrderExa2_ck_colorShopProof = $row_order_exa2['OrderExa2_ck_colorShopProof'];
                  
                       if ($OrderExa2_ck_realColor !="") {
                              $OrderExa2_ck_realColor_temp = "checked";
                           }  
                           
                       if ($OrderExa2_ck_colorShopProof !="") {
                              $OrderExa2_ck_colorShopProof_temp = "checked";
                           }  
                  
                  // --6---
                        $OrderExa2_ck_refer_Oldcolor = $row_order_exa2['OrderExa2_ck_refer_Oldcolor'];
                        $OrderExa2_ck_refer_Newcolor = $row_order_exa2['OrderExa2_ck_refer_Newcolor'];   
                        $OrderExa2_ck_refer_byBoxExample = $row_order_exa2['OrderExa2_ck_refer_byBoxExample'];
                  
                       if ($OrderExa2_ck_refer_Oldcolor !="") {
                              $OrderExa2_ck_refer_Oldcolor_temp = "checked";
                           }  
                           
                       if ($OrderExa2_ck_refer_Newcolor !="") {
                              $OrderExa2_ck_refer_Newcolor_temp = "checked";
                           }
                           
                      if ($OrderExa2_ck_refer_byBoxExample !="") {
                              $OrderExa2_ck_refer_byBoxExample_temp = "checked";
                           } 
                  
                  
                           
        }
        
        // สิ้นสุดการค้นหา รายละเอียดการสั่งตัวอย่าง เจ้าหน้าที่ตัวอย่าง
        
        
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
                       <form class="form-inline" role="form" name="call_job_form" id="call_job_form" method="post" action="order_exa_exa.php">
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

                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                    <td style="text-align: left">ขนาดสำเร็จสินค้า :&nbsp;<b><?php echo $job_width; ?>&nbsp; x&nbsp; <?php echo $job_length; ?>&nbsp; x&nbsp; <?php echo $job_hieght; ?><b></td>

                                                    <td><img src="jobs/img/<?php echo $jobs_image; ?>" style="width: 220px; height: 220px;"></img></td>

                                              
                                                </tr>

                                        </thead> 
                                 </table>

                       </div>
               
              
                
                <!--  form ส่งไปบันทึก  --> 
                
                <form method="post" id="order_exa_form" name= "order_exa_form"  class="form" action= "order_exa_exa_action.php" >  
            
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
                                                   <td style="text-align: left">รหัสสินค้า :&nbsp;<b><?php echo $file_code3; ?><b></td>
                                                <td style="text-align: left">ชื่อสินค้า : <b><?php echo $jobs_file; ?></b> </td>

                                                   

                                                 


                                             </tr>
                                             
                                               <tr >
                                                <td style="text-align: left">วันที่กำหนดส่ง : <b><?php echo $date_due; ?></b> </td>

                                                  

                                                    <td style="text-align: left">ชื่อ :&nbsp;<b><?php echo $_SESSION['user_fullname']; ?><b></td>


                                                </tr>

                                        </thead> 
                                 </table>

                       </div>
              
               
              
                  
                 
                  
                   <!-- ลักษณะงาน  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                           <tr>
                                               <td style="text-align: left">ลักษณะงาน ข้อความจากพนักงานขาย<p><textarea class="form-control" rows="3" id="style_job" name="style_job"><?php echo $style_job; ?></textarea></td>
                                           </tr>
                                            <tr>
                                               <td style="text-align: left">ลักษณะงาน ของ เจ้าหน้าที่ตัวอย่าง<p><textarea class="form-control" rows="3" id="OrderExa2_style_job" name="OrderExa2_style_job"><?php echo $OrderExa2_style_job; ?></textarea></td>
                                           </tr>

                                        </thead> 
                                 </table>

                       </div>
                  
                  
                  <div class="row">
                      
                      <label>วัสดุที่ได้รับจากลูกค้า </label>    
                  </div>
                  <!-- ตัวอย่าง มี check box   -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                            <tr >
                                                <td style="text-align: left"> <input type="checkbox" name="ck_example" id="ck_example" value="ตัวอย่าง" <?php echo $ck_example_temp; ?> disabled=""> ตัวอย่าง</td>

                                                   

                                                <td style="text-align: left"><input type="checkbox" name="ck_art_work" id="ck_art_work" value="ART WORK เล่ม"  <?php echo $ck_art_work_temp; ?> disabled> ART WORK เล่ม</td>
      
                                                <td style="text-align: left"><input type="checkbox" name="ck_disc" id="ck_disc" value="แผ่น DISC"  <?php echo $ck_disc_temp; ?> disabled> แผ่น DISC</td>
                                                                
                                                <td style="text-align: left"><input type="checkbox" name="ck_print_prototype" id="ck_print_prototype" value="ฟิล์มต้นฉบับ"  <?php echo $ck_print_prototype_temp; ?> disabled> ฟิล์มต้นฉบับ</td>
      
                                                <td style="text-align: left"><input type="checkbox" name="ck_barcode" id="ck_barcode" value="บาร์โค้ด"  <?php echo $ck_barcode_temp; ?> disabled> บาร์โค้ด</td>
       
                                                <td style="text-align: left"><input type="checkbox" name="ck_etc1" id="ck_etc1" value="อื่น ๆ" <?php echo $ck_etc1_temp; ?> disabled> อื่น ๆ</td>
                                                <td style="text-align: left"><input type="text" name="etc1" id="etc1" value="<?php echo $etc1; ?>" disabled></td>
                                           </tr>
                                           
                                           <tr >
                                               <td style="text-align: left" colspan="5">สิ่งที่ต้องการ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_proof" id="ck_proof" value="บรุ๊ฟ" <?php echo $ck_proof_temp; ?> disabled> บรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_etc2" id="ck_etc2" value="อื่น ๆ"  <?php echo $ck_etc2_temp; ?> disabled> อื่น ๆ &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="etc2" id="etc2" value="<?php echo $etc2; ?>" disabled></td>
                                           </tr>
                                           
                                           <tr >
                                               <td style="text-align: left" colspan="5">การบรรจุ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_hor" id="ck_hor" value="ห่อ" <?php echo $ck_hor_temp; ?> disabled> ห่อ&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_box" id="ck_box" value="กล่อง" <?php echo $ck_box_temp; ?> disabled> กล่อง &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="ck_pallet" id="ck_pallet" value="พาเลท" <?php echo $ck_pallet_temp; ?> disabled> พาเลท</td>
                                           </tr>
                                           
                                           <tr >
                                               <td style="text-align: left" colspan="5">สถานที่ส่งบรุ๊ฟ&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="proof_locate" id="proof_locate" value="<?php echo $proof_locate; ?>" disabled>&nbsp;&nbsp; &nbsp;&nbsp; ลงชื่อ ผจก.ฝ่ายขาย&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="manager_sale_dept1" id="manager_sale_dept1" value="<?php echo $manager_sale_dept1; ?>" disabled> </td>
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
                                               <td style="text-align: left">คืน A/W ให้ลูกค้าชื่อ <input type="text" name="OrderExa2_A_W" id="OrderExa2_A_W" value="<?php echo $OrderExa2_A_W; ?>">&nbsp;&nbsp;บริษัท <input type="text" name="OrderExa2_company" id="OrderExa2_company" value="<?php echo $OrderExa2_company; ?>">&nbsp;&nbsp;วันที่&nbsp;&nbsp; <input type="text" name="OrderExa2_date" id="OrderExa2_date" value="<?php echo $OrderExa2_date; ?>"></td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left">ผู้ดำเนินการจัดทำ &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_typepum" id="OrderExa2_ck_typepum" value="แม่แบบปั้ม" <?php echo $OrderExa2_ck_typepum_temp; ?> >&nbsp;&nbsp; แม่แบบปั้ม&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_rungsit" id="OrderExa2_ck_rungsit" value="รังสิตคัตติ้ง" <?php echo $OrderExa2_ck_rungsit_temp; ?> > รังสิตคัตติ้ง 02-9583484&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_systemBoard" id="OrderExa2_ck_systemBoard" value="ซิสเต็มบอร์ด" <?php echo $OrderExa2_ck_systemBoard_temp; ?> > ซิสเต็มบอร์ด 02-4370959 &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_etc" id="OrderExa2_ck_etc" value="อื่น ๆ" <?php echo $OrderExa2_ck_etc_temp; ?> > อื่น ๆ &nbsp;&nbsp;<input type="text" name="OrderExa2_etc" id="OrderExa2_etc" value="<?php echo $OrderExa2_etc; ?>"></td>
                                       
                                           </tr>
                                          

                                        </thead> 
                                 </table>

                       </div>
                       
                       <!-- รูปแบบของงาน เพิ่มเติม  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                        <tr>
                                             <td style="text-align: left">รูปแบบของงาน&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_oldjob" id="OrderExa2_ck_oldjob" value="1. งานเก่า" <?php echo $OrderExa2_ck_oldjob_temp; ?> > 1. งานเก่า &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_newjob" id="OrderExa2_ck_newjob" value="2. งานใหม่" <?php echo $OrderExa2_ck_newjob_temp; ?> > 2. งานใหม่ &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_typepum2" id="OrderExa2_ck_typepum2" value="แบบปั๊ม" <?php echo $OrderExa2_ck_typepum2_temp; ?> > แบบปั๊ม&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" name="OrderExa2_ck_diecut" id="OrderExa2_ck_diecut" value="ไดคัท" <?php echo $OrderExa2_ck_diecut_temp; ?> > ไดคัท</td>
                                         </tr>
                                         <tr>
                                             <td style="text-align: left"><input type="checkbox" name="OrderExa2_ck_replace" id="OrderExa2_ck_replace" value="ทำทดแทน" <?php echo $OrderExa2_ck_replace_temp; ?> > ทำทดแทน &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_oldpum" id="OrderExa2_ck_oldpum" value="ปั๊มเดิม" <?php echo $OrderExa2_ck_oldpum_temp; ?> > ปั๊มเดิม &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_newpum" id="OrderExa2_ck_newpum" value="ปั๊มใหม่" <?php echo $OrderExa2_ck_newpum_temp; ?> > ปั๊มใหม่ &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_faseab" id="OrderExa2_ck_faseab" value="ฝาเสียบ" <?php echo $OrderExa2_ck_faseab_temp; ?> > ฝาเสียบ &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_takaw" id="OrderExa2_ck_takaw" value="ทากาว" <?php echo $OrderExa2_ck_takaw_temp; ?> > ทากาว </td>
                                           </tr>
                                            <tr>
                                                <td style="text-align: left"> การบรรจุของลูกค้าใหม่ (ปั๊มใหม่) &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_meu" id="OrderExa2_ck_meu" value="มือ" <?php echo $OrderExa2_ck_meu_temp; ?> > มือ &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_kreng" id="OrderExa2_ck_kreng" value="เครื่อง" <?php echo $OrderExa2_ck_kreng_temp; ?> > เครื่อง  </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left">4. กระดาษ &nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" name="OrderExa2_ck_real_paper" id="OrderExa2_ck_real_paper" value="กระดาษจริง" <?php echo $OrderExa2_ck_real_paper_temp; ?> > กระดาษจริง  &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_paperShopProof" id="OrderExa2_ck_paperShopProof" value="กระดาษร้านปรู๊ฟ" <?php echo $OrderExa2_ck_paperShopProof_temp; ?> > กระดาษร้านปรู๊ฟ &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="OrderExa2_paperShopProof" id="OrderExa2_paperShopProof" value="<?php echo $OrderExa2_paperShopProof; ?>" ></td>
                                                
                                            </tr>
                                            
                                             <tr>
                                                <td style="text-align: left">5. สีที่ใช้    &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_realColor" id="OrderExa2_ck_realColor" value="สีจริง" <?php echo $OrderExa2_ck_realColor_temp; ?> > สีจริง  &nbsp;&nbsp;&nbsp;&nbsp;   <input type="checkbox" name="OrderExa2_ck_colorShopProof" id="OrderExa2_ck_colorShopProof" value="สีร้านปรู๊ฟ" <?php echo $OrderExa2_ck_colorShopProof_temp; ?> > สีร้านปรู๊ฟ </td>
                                                
                                            </tr>
                                        
                                         <tr>
                                                <td style="text-align: left">6. สีที่ต้องการ  &nbsp;&nbsp;&nbsp;&nbsp;    <input type="checkbox" name="OrderExa2_ck_refer_Oldcolor" id="OrderExa2_ck_refer_Oldcolor" value="อ้างอิงสีเดิม" <?php echo $OrderExa2_ck_refer_Oldcolor_temp; ?> > อ้างอิงสีเดิม  &nbsp;&nbsp;&nbsp;&nbsp;     <input type="checkbox" name="OrderExa2_ck_refer_Newcolor" id="OrderExa2_ck_refer_Newcolor" value="อ้างอิงสีใหม่" <?php echo $OrderExa2_ck_refer_Newcolor_temp; ?> > อ้างอิงสีใหม่ &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="OrderExa2_ck_refer_byBoxExample" id="OrderExa2_ck_refer_byBoxExample" value="อ้างอิงสีตามกล่องตัวอย่างลูกค้า" <?php echo $OrderExa2_ck_refer_byBoxExample_temp; ?> > อ้างอิงสีตามกล่องตัวอย่างลูกค้า </td>
                                                
                                            </tr>
                                        
                                        </thead> 
                                 </table>

                       </div>
                       
                       <!-- รูปแบบของงาน เพิ่มเติม  -->
                       
                       
                       
                        <!-- ผลการทำตัวอย่าง ครั้งที่ 2  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                        <tr>
                                            <td style="text-align: left"><b>ผลสรุป</b> </td>
                                           </tr>
                                         <tr>
                                             <td style="text-align: left">จำนวนสีพิมพ์ <input type="text" name="exa_result2_date" id="exa_result2_date" style="text-align: right; width: 50px;"value="<?php echo $exa_printAmont; ?>">&nbsp;&nbsp;สีที่ใช้&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_color_process" id="OrderExa2_ck_color_process" value="สี Process" <?php echo $OrderExa2_ck_color_process_temp; ?> >&nbsp; สี Process&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_C" id="OrderExa2_ck_C" value="C" <?php echo $OrderExa2_ck_C_temp; ?> >&nbsp; C&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_M" id="OrderExa2_ck_M" value="M" <?php echo $OrderExa2_ck_M_temp; ?> >&nbsp; M&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_Y" id="OrderExa2_ck_Y" value="Y" <?php echo $OrderExa2_ck_Y_temp; ?> >&nbsp; Y&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_K" id="OrderExa2_ck_K" value="K" <?php echo $OrderExa2_ck_K_temp; ?> >&nbsp; K&nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_special" id="OrderExa2_ck_special" value="สีพิเศษ" <?php echo $OrderExa2_ck_special_temp; ?> >&nbsp; สีพิเศษ&nbsp;&nbsp; &nbsp;&nbsp;</td>
                                           </tr>
                                           

                                        </thead> 
                                 </table>

                       </div>
                        
                        <!-- ตาราง  8 column-->
                       <div class="row">
                                 <table class="table-bordered">
                                        <thead>
                                           <tr>
                                               <th style="text-align: center; width: 100px;">ชื่อกระดาษ </th>
                                          
                                               <th style="text-align: center; width: 100px;">ความหนา </th>
                                               <th style="text-align: center; width: 100px;">ขนาดกระดาษ </th>
                                          
                                               <th style="text-align: center; width: 100px;">การ LAY </th>
                                               <th style="text-align: center; width: 100px;">การเคลือบผิว</th>
                                          
                                               <th style="text-align: center; width: 100px;">รหัส </th>
                                               <th style="text-align: center; width: 100px;">เพลท </th>
                                          
                                               <th style="text-align: center; width: 100px;">ปั้ม </th>
                                           
                                        </thead> 
                                        
                                        
                                        <tbody>
                                               <td style="text-align: center; width: 100px;"><?php echo $pur_band; ?> </td>
                                          
                                               <td style="text-align: center; width: 100px;"><?php echo $pur_thick; ?> </td>
                                              <td style="text-align: center; width: 100px;"><?php echo $pur_sizepaper; ?> </td>
                                          
                                              <td style="text-align: center; width: 100px;">1 - <?php echo $pur_lay2; ?> - <?php echo $pur_lay3; ?>  </td>
                                               <td style="text-align: center; width: 100px;"><input type="text" name="OrderExa2_krebpew" id="OrderExa2_krebpew" style="text-align: right; width: 100px;" value="<?php echo $OrderExa2_krebpew; ?>"></td>
                                          
                                              <td style="text-align: center; width: 100px;"><input type="text" name="OrderExa2_code" id="OrderExa2_code" style="text-align: right; width: 50px;" value="<?php echo $OrderExa2_code; ?>"> </td>
                                              <td style="text-align: center; width: 100px;"><input type="text" name="OrderExa2_plate" id="OrderExa2_plate" style="text-align: right; width: 50px;" value="<?php echo $OrderExa2_plate; ?>"> </td>
                                          
                                             <td style="text-align: center; width: 100px;"><input type="text" name="OrderExa2_pum" id="OrderExa2_pum" style="text-align: right; width: 50px;" value="<?php echo $OrderExa2_pum; ?>"> </td>
                                        </tbody>
                                        
                                 </table>

                       </div>
                        
                        <hr>
                        
                          <!-- ใบสั่งผลิตเลขที่  -->
                       <div class="row">
                                 <table class="table table-no-bordered">
                                        <thead>
                                        <tr>
                                             <td style="text-align: left">ลำดับขั้นตอนการทำงาน</td>
                                           </tr>
                                           
                                            <tr>
                                                <td style="text-align: left"><input type="checkbox" name="OrderExa2_ck_cut" id="OrderExa2_ck_cut" value="ตัด" <?php echo $OrderExa2_ck_cut_temp; ?> >&nbsp; ตัด&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_print" id="OrderExa2_ck_print" value="พิมพ์" <?php echo $OrderExa2_ck_print_temp; ?> > &nbsp;พิมพ์&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_kreab" id="OrderExa2_ck_kreab" value="เคลือบ" <?php echo $OrderExa2_ck_kreab_temp; ?> > &nbsp;เคลือบ &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_ka" id="OrderExa2_ck_ka" value="เค" <?php echo $OrderExa2_ck_ka_temp; ?> >&nbsp;&nbsp;เค&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_palukfuk" id="OrderExa2_ck_palukfuk" value="ปะลูกฟูก" <?php echo $OrderExa2_ck_palukfuk_temp; ?> >&nbsp;&nbsp;ปะลูกฟูก&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_pumnun" id="OrderExa2_ck_pumnun" value="ปั้มนูน" <?php echo $OrderExa2_ck_pumnun_temp; ?> >&nbsp;&nbsp;ปั้มนูน&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_pumkad" id="OrderExa2_ck_pumkad" value="ปั้มขาด" <?php echo $OrderExa2_ck_pumkad_temp; ?> >&nbsp;&nbsp;ปั้มขาด&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_kea" id="OrderExa2_ck_kea" value="แกะ" <?php echo $OrderExa2_ck_kea_temp; ?> >&nbsp;&nbsp;แกะ&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_pameu" id="OrderExa2_ck_pameu" value="ปะมือ" <?php echo $OrderExa2_ck_pameu_temp; ?> >&nbsp;&nbsp;ปะมือ&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="OrderExa2_ck_pakreng" id="OrderExa2_ck_pakreng" value="ปะเครื่อง" <?php echo $OrderExa2_ck_pakreng_temp; ?> >&nbsp;&nbsp;ปะเครื่อง&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </td>
                                       
                                           </tr>
                                           
                                           <tr>
                                               <td style="text-align: left">วัสดุอื่น ๆ<p><textarea class="form-control" rows="3" id="OrderExa2_etc_mat" name="OrderExa2_etc_mat"><?php echo $OrderExa2_etc_mat; ?></textarea></td>
                                           </tr>
                                       
                                            <tr>
                                                <td style="text-align: left">ลงชื่อ&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="OrderExa2_officer_exa" id="OrderExa2_officer_exa" style="width: 250px;" value="<?php echo $OrderExa2_officer_exa; ?>">&nbsp;&nbsp; &nbsp;&nbsp;เจ้าหน้าที่ตัวอย่าง</td>
                                       
                                           </tr>
                                          
                                           

                                        </thead> 
                                 </table>

                       </div>
                       
                    
                    
                
           
      </div>   <!-- จบ row รายละเอียดงาน   -->
   <div class="row">
   <div class="col-md-2">
       <button id="btn_save_order_exa" name="btn_save_order_exa" type="submit" class="btn btn-primary btn-lg" >บันทึกข้อมูล</button> 
     </div>        
     <div class="col-md-2">
                   <a href="order_exa_print.php?filecode=<?php echo $file_code3; ?>" class="btn btn-primary btn-lg" target="blank">พิมพ์ใบสั่งตัวอย่าง</a>
              </div>
   
   </div>
   
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
                            url: 'order_exa_exa_action.php',
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
                                           window.location.href = "order_exa_exa.php";
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