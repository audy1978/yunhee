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
           $jobs_tel = $row_filecode['jobs_tel'];
           $jobs_file = $row_filecode['jobs_file'];
           $jobs_date = $row_filecode['jobs_date'];
           
            $pur_thick_gram = $row_filecode['pur_thick_gram'];
            $exa_printAmont = $row_filecode['exa_printAmont'];
            
            $job_width = $row_filecode['job_width'];
            $job_length = $row_filecode['job_length'];
            $job_hieght  = $row_filecode['job_hieght'];
            $job_filecode  = $row_filecode['jobs_filecode'];
            $jobs_customer  = $row_filecode['jobs_customer'];
            
            $pur_lay2 = $row_filecode['pur_lay2'];
            $pur_lay3 = $row_filecode['pur_lay3'];
            $pur_band = $row_filecode['pur_band'];
            $pur_thick = $row_filecode['pur_thick'];
            $pur_sizepaper = $row_filecode['pur_sizepaper'];
            
            
            
            mysqli_free_result($result_filecode);
        }
        
        
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
            
            $style_job = $row_order_exa['style_job'];
            
            $ck_example = $row_order_exa['ck_example'];
            $ck_art_work = $row_order_exa['ck_art_work'];
            $ck_disc = $row_order_exa['ck_disc'];
            $ck_print_prototype = $row_order_exa['ck_print_prototype'];
            $ck_barcode = $row_order_exa['ck_barcode'];
            $ck_etc1 = $row_order_exa['ck_etc1'];
            
            
            
                 if ($ck_example !="") {
                             $ck_example_temp = "img_checked.png";
                           }else{
                             $ck_example_temp = "img_no_checked.png";
                           } 
                           
               if ($ck_art_work !="") {
                             $ck_art_work_temp = "img_checked.png";
                           }else{
                             $ck_art_work_temp = "img_no_checked.png";
                           }   
                           
                if ($ck_disc !="") {
                     $ck_disc_temp = "img_checked.png";
               }else{
                     $ck_disc_temp = "img_no_checked.png";
               }  
                           
             if ($ck_print_prototype !="") {
                     $ck_print_prototype_temp = "img_checked.png";
               }else{
                     $ck_print_prototype_temp = "img_no_checked.png";
               } 
               
               if ($ck_barcode !="") {
                     $ck_barcode_temp = "img_checked.png";
               }else{
                     $ck_barcode_temp = "img_no_checked.png";
               } 
               
                 if ($ck_etc1 !="") {
                     $ck_etc1_temp = "img_checked.png";
               }else{
                     $ck_etc1_temp = "img_no_checked.png";
               } 
               
             $ck_proof = $row_order_exa['ck_proof'];
            $ck_etc2 = $row_order_exa['ck_etc2'];
               
                if ($ck_proof !="") {
                     $ck_proof_temp = "img_checked.png";
               }else{
                     $ck_proof_temp = "img_no_checked.png";
               } 
               
                if ($ck_etc2 !="") {
                     $ck_etc2_temp = "img_checked.png";
               }else{
                     $ck_etc2_temp = "img_no_checked.png";
               } 
               
              $ck_hor_box = $row_order_exa['ck_hor_box'];
              $ck_pallet = $row_order_exa['ck_pallet']; 
               
                     if ($ck_hor_box =="ห่อ") {
                     $ck_hor_temp = "img_checked.png";
               }else{
                     $ck_hor_temp = "img_no_checked.png";
               } 
               
                if ($ck_hor_box =="กล่อง") {
                     $ck_box_temp = "img_checked.png";
               }else{
                     $ck_box_temp = "img_no_checked.png";
               } 
               
                if ($ck_pallet !="") {
                     $ck_pallet_temp = "img_checked.png";
               }else{
                     $ck_pallet_temp = "img_no_checked.png";
               } 
               
               
             $proof_locate = $row_order_exa['proof_locate'];
            $manager_sale_dept1 = $row_order_exa['manager_sale_dept1'];
               
            
            $exa_result1_date = $row_order_exa['exa_result1_date'];
            $ck_digital_proof1 = $row_order_exa['ck_digital_proof1'];
            $ck_proof_soft1 = $row_order_exa['ck_proof_soft1'];
            $ck_proof_real_paper1 = $row_order_exa['ck_proof_real_paper1'];
            $ck_etc3 = $row_order_exa['ck_etc3'];
            $etc3 = $row_order_exa['etc3'];
            
           
            
                if ($ck_digital_proof1 !="") {
                     $ck_digital_proof1_temp = "img_checked.png";
               }else{
                     $ck_digital_proof1_temp = "img_no_checked.png";
               } 
               
               if ($ck_proof_soft1 !="") {
                     $ck_proof_soft1_temp = "img_checked.png";
               }else{
                     $ck_proof_soft1_temp = "img_no_checked.png";
               }  
               
               if ($ck_proof_real_paper1 !="") {
                     $ck_proof_real_paper1_temp = "img_checked.png";
               }else{
                     $ck_proof_real_paper1_temp = "img_no_checked.png";
               }  
            
               if ($ck_etc3 !="") {
                     $ck_etc3_temp = "img_checked.png";
               }else{
                     $ck_etc3_temp = "img_no_checked.png";
               }  
            
            
           $ck_accept1 = $row_order_exa['ck_accept1'];     
               
           
           
               if ($ck_accept1 !="") {
                     $ck_accept1_temp = "img_checked.png";
               }else{
                     $ck_accept1_temp = "img_no_checked.png";
               }  
               
            $by_box11 = $row_order_exa['by_box11'];
            $exa1_accept_date = $row_order_exa['exa1_accept_date'];
              
            $ck_no_accept1 = $row_order_exa['ck_no_accept1'];
            $by_box12 = $row_order_exa['by_box12'];
            $exa1_no_accept_date = $row_order_exa['exa1_no_accept_date'];
            
                if ($ck_no_accept1 !="") {
                    $ck_no_accept1_temp = "img_checked.png";
               }else{
                     $ck_no_accept1_temp = "img_no_checked.png";
               }  
               
               
              $detial_edit1 = $row_order_exa['detial_edit1'];
              $plate_value1 = $row_order_exa['plate_value1'];
              $bill_no11 = $row_order_exa['bill_no11'];
              $bill_date11 = $row_order_exa['bill_date11'];
              $type_pum_value1 = $row_order_exa['type_pum_value1'];
              $bill_no12 = $row_order_exa['bill_no12'];
              $bill_date12 = $row_order_exa['bill_date12'];
             
              $exa_result2_date = $row_order_exa['exa_result2_date'];
              $ck_digital_proof2 = $row_order_exa['ck_digital_proof2'];
                if ($ck_digital_proof2 !="") {
                    $ck_digital_proof2_temp = "img_checked.png";
               }else{
                     $ck_digital_proof2_temp = "img_no_checked.png";
               }  
               
               $ck_proof_soft2 = $row_order_exa['ck_proof_soft2'];
                      if ($ck_proof_soft2 !="") {
                            $ck_proof_soft2_temp = "img_checked.png";
                       }else{
                            $ck_proof_soft2_temp = "img_no_checked.png";
                       }  
              
             $ck_proof_real_paper2 = $row_order_exa['ck_proof_real_paper2'];
                       if ($ck_proof_real_paper2 !="") {
                            $ck_proof_real_paper2_temp = "img_checked.png";
                       }else{
                            $ck_proof_real_paper2_temp = "img_no_checked.png";
                       } 
                       
                       
             $ck_etc4 = $row_order_exa['ck_etc4'];
             if ($ck_etc4 !="") {
                            $ck_etc4_temp = "img_checked.png";
                       }else{
                            $ck_etc4_temp = "img_no_checked.png";
                       } 
                       
            $ck_accept2 = $row_order_exa['ck_accept2'];        
                  if ($ck_accept2 !="") {
                            $ck_accept2_temp = "img_checked.png";
                       }else{
                            $ck_accept2_temp = "img_no_checked.png";
                       }   
                       
             $by_box21 = $row_order_exa['by_box21'];
             $exa1_accept_date2 = $row_order_exa['exa1_accept_date2'];
                       
             $ck_no_accept2 = $row_order_exa['ck_no_accept2'];
                     if ($ck_no_accept2 !="") {
                            $ck_no_accept2_temp = "img_checked.png";
                       }else{
                            $ck_no_accept2_temp = "img_no_checked.png";
                       }
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
             
             
        }
        
        
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
                          $OrderExa2_ck_typepum_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_typepum_temp = "img_no_checked.png";  
                           }

                                 //   ck_rungsit
                        if ($OrderExa2_ck_rungsit !="") {
                          $OrderExa2_ck_rungsit_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_rungsit_temp = "img_no_checked.png";  
                           }

                                    //   ck_systemBoard
                        if ($OrderExa2_ck_systemBoard !="") {
                           $OrderExa2_ck_systemBoard_temp = "img_checked.png";
                           }else{
                            $OrderExa2_ck_systemBoard_temp = "img_no_checked.png";  
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
                           $OrderExa2_ck_color_process_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_color_process_temp = "img_no_checked.png"; 
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
                           $OrderExa2_ck_special_temp = "img_checked.png";
                        }else{
                               
                             $OrderExa2_ck_special_temp = "img_no_checked.png"; 
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
                             $OrderExa2_ck_cut_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_cut_temp = "img_no_checked.png";  
                           }
                           
                             
                        if ($OrderExa2_ck_print !="") {
                             $OrderExa2_ck_print_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_print_temp = "img_no_checked.png";  
                           }
                           
                            if ($OrderExa2_ck_kreab !="") {
                             $OrderExa2_ck_kreab_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_kreab_temp = "img_no_checked.png";  
                           }
                           
                              if ($OrderExa2_ck_ka !="") {
                             $OrderExa2_ck_ka_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_ka_temp = "img_no_checked.png";  
                           }
                           
                                if ($OrderExa2_ck_palukfuk !="") {
                             $OrderExa2_ck_palukfuk_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_palukfuk_temp = "img_no_checked.png";  
                           }
                           
                                 if ($OrderExa2_ck_pumnun !="") {
                             $OrderExa2_ck_pumnun_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_pumnun_temp = "img_no_checked.png";  
                           }
                           
                                  if ($OrderExa2_ck_pumkad !="") {
                             $OrderExa2_ck_pumkad_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_pumkad_temp = "img_no_checked.png";  
                           }
                           
                                  if ($OrderExa2_ck_kea !="") {
                            $OrderExa2_ck_kea_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_kea_temp = "img_no_checked.png";  
                           }
                           
                                  if ($OrderExa2_ck_pameu !="") {
                             $OrderExa2_ck_pameu_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_pameu_temp = "img_no_checked.png";  
                           }
                           
                                    if ($OrderExa2_ck_pakreng !="") {
                             $OrderExa2_ck_pakreng_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_pakreng_temp = "img_no_checked.png";  
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
                             $OrderExa2_ck_oldjob_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_oldjob_temp = "img_no_checked.png";  
                           }
                           
                    if ($OrderExa2_ck_newjob !="") {
                             $OrderExa2_ck_newjob_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_newjob_temp = "img_no_checked.png";    
                           }
                           
                    if ($OrderExa2_ck_typepum2 !="") {
                             $OrderExa2_ck_typepum2_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_typepum2_temp = "img_no_checked.png";
                           }  
                    
                     if ($OrderExa2_ck_diecut !="") {
                             $OrderExa2_ck_diecut_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_diecut_temp = "img_no_checked.png";
                           }
                           
                     if ($OrderExa2_ck_replace !="") {
                             $OrderExa2_ck_replace_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_replace_temp = "img_no_checked.png";  
                           }
                           
                     if ($OrderExa2_ck_oldpum !="") {
                             $OrderExa2_ck_oldpum_temp  = "img_checked.png";
                           }else{
                               $OrderExa2_ck_oldpum_temp  = "img_no_checked.png";
                           }
                           
                     if ($OrderExa2_ck_newpum !="") {
                             $OrderExa2_ck_newpum_temp = "img_checked.png";
                           }else{
                               $OrderExa2_ck_newpum_temp = "img_no_checked.png";
                           }
                           
                     if ($OrderExa2_ck_faseab !="") {
                             $OrderExa2_ck_faseab_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_faseab_temp = "img_no_checked.png";
                           }
                           
                     if ($OrderExa2_ck_takaw !="") {
                             $OrderExa2_ck_takaw_temp = "img_checked.png";
                           }else{
                             $OrderExa2_ck_takaw_temp = "img_no_checked.png";
                           }
                           
                    if ($OrderExa2_ck_meu !="") {
                             $OrderExa2_ck_meu_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_meu_temp = "img_no_checked.png";
                           }
                           
                    if ($OrderExa2_ck_kreng !="") {
                             $OrderExa2_ck_kreng_temp = "img_checked.png";
                           }else{
                               
                             $OrderExa2_ck_kreng_temp = "img_no_checked.png";
                           }
                           
                        // --- 4 ---   
                $OrderExa2_ck_real_paper = $row_order_exa2['OrderExa2_ck_real_paper'];
                $OrderExa2_ck_paperShopProof = $row_order_exa2['OrderExa2_ck_paperShopProof'];
                $OrderExa2_paperShopProof = $row_order_exa2['OrderExa2_paperShopProof'];     
                           
                          if ($OrderExa2_ck_real_paper !="") {
                              $OrderExa2_ck_real_paper_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_real_paper_temp = "img_no_checked.png"; 
                           }  
                           
                          if ($OrderExa2_ck_paperShopProof !="") {
                              $OrderExa2_ck_paperShopProof_temp = "img_checked.png";
                           } else{
                              $OrderExa2_ck_paperShopProof_temp = "img_no_checked.png";
                           } 
                           
                           // --5---
                           
                  $OrderExa2_ck_realColor = $row_order_exa2['OrderExa2_ck_realColor'];
                  $OrderExa2_ck_colorShopProof = $row_order_exa2['OrderExa2_ck_colorShopProof'];
                  
                       if ($OrderExa2_ck_realColor !="") {
                              $OrderExa2_ck_realColor_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_realColor_temp =  "img_no_checked.png";
                           }  
                           
                       if ($OrderExa2_ck_colorShopProof !="") {
                              $OrderExa2_ck_colorShopProof_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_colorShopProof_temp = "img_no_checked.png"; 
                           }  
                  
                  // --6---
                        $OrderExa2_ck_refer_Oldcolor = $row_order_exa2['OrderExa2_ck_refer_Oldcolor'];
                        $OrderExa2_ck_refer_Newcolor = $row_order_exa2['OrderExa2_ck_refer_Newcolor'];   
                        $OrderExa2_ck_refer_byBoxExample = $row_order_exa2['OrderExa2_ck_refer_byBoxExample'];
                  
                       if ($OrderExa2_ck_refer_Oldcolor !="") {
                              $OrderExa2_ck_refer_Oldcolor_temp = "img_checked.png";
                           }else{
                               
                               $OrderExa2_ck_refer_Oldcolor_temp = "img_no_checked.png"; 
                           }  
                           
                       if ($OrderExa2_ck_refer_Newcolor !="") {
                              $OrderExa2_ck_refer_Newcolor_temp = "img_checked.png";
                           }else{
                              $OrderExa2_ck_refer_Newcolor_temp = "img_no_checked.png"; 
                           }
                           
                      if ($OrderExa2_ck_refer_byBoxExample !="") {
                              $OrderExa2_ck_refer_byBoxExample_temp = "img_checked.png";
                           } else{
                              $OrderExa2_ck_refer_byBoxExample_temp = "img_no_checked.png"; 
                           }
                  
                
          
                           
                           
                           
                           
               
        }
        
        // สิ้นสุดการค้นหา รายละเอียดการสั่งตัวอย่าง เจ้าหน้าที่ตัวอย่าง
        
        
       
        
        
        ?>



<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
       

       
            <div class="row">
             <!--   <div class="col-md-12">  -->
                      <h3><p class="text-center"  style="font-size: 22pt"><b>ใบสั่งทำตัวอย่าง</b> </p></h3>
                

                    <table class="table table-bordered" >
                    <thead>
                            <tr>
                                <td style="font-size: 14pt;" colspan="2">วันที่  <b><?php $year1 = date(Y); $day = date("d-m-"); $year2 =$year1+543; echo $day .$year2; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่กำหนดส่ง <?php echo $date_due; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เลขที่  <?php echo $customer_no; ?> <br><br><br>
                                
                                    <font style="font-size: 14pt;">ลูกค้า      <?php echo $jobs_customer; ?>                 ชื่อลูกค้า     <?php echo $jobs_contact; ?>                                 โทรศัพท์ติดต่อ <?php echo $jobs_tel; ?> </font><br><br><br>
                                
                              <font style="font-size: 14pt;">     ชื่อสินค้า    <?php echo $jobs_file; ?>                                                  รหัสสินค้า    <?php echo $file_code3; ?>  </font>
                              
                                </td>
                    
                                
                            </tr>
                            
                            <tr>
                                <td style="font-size: 14pt;" rowspan="3">รูปแบบของงาน &nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_oldjob_temp; ?>" width="10" height="10"> 1. งานเก่า &nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_replace_temp; ?>" width="10" height="10"> ทำทดแทน   <br><br><br>
                                
                                <img src="images/<?php echo $OrderExa2_ck_newjob_temp; ?>" width="10" height="10">  2. งานใหม่   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php echo $OrderExa2_ck_typepum2_temp; ?>" width="10" height="10"> 3. แบบปั๊ม &nbsp;&nbsp;<img src="images/<?php echo $OrderExa2_ck_oldpum_temp; ?>" width="10" height="10"> ปั๊มเดิม   &nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_newpum_temp; ?>" width="10" height="10"> ปั๊มใหม่  <br><br><br>
                                
                                <img src="images/<?php echo $OrderExa2_ck_diecut_temp; ?>" width="10" height="10"> 4. ไดคัท             &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <img src="images/<?php echo $OrderExa2_ck_faseab_temp; ?>" width="10" height="10"> ฝาเสียบ    &nbsp;&nbsp;      <img src="images/<?php echo $OrderExa2_ck_faseab_temp; ?>" width="10" height="10"> ทากาว   <br><br><br>
                                   
                                
                                การบรรจุของลูกค้า (ปั๊มใหม่)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="images/<?php echo $OrderExa2_ck_meu_temp; ?>" width="10" height="10">  มือ      &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;<img src="images/<?php echo $OrderExa2_ck_kreng_temp; ?>" width="10" height="10"> เครื่อง  <br><br><br>
                                ถ้าลูกค้าบรรจุด้วยเครื่อง ต้องส่งตัวอย่างให้ลูกค้าทำการทดลองก่อนทุกครั้ง
                                
                                </td>
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                <td style="font-size: 14pt;">4.) กระดาษ  &nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_real_paper_temp; ?>" width="10" height="10">  กระดาษจริง  &nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_paperShopProof_temp; ?>" width="10" height="10"> กระดาษร้านปรู๊ฟ <br><br><br>
                                ................................................................................
                                </td>
              
                                
                            </tr>
                            
                            <tr>
                           
                            <td style="font-size: 14pt;">5.) สีที่ใช้        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <img src="images/<?php echo $OrderExa2_ck_realColor_temp; ?>" width="10" height="10"> สีจริง     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <img src="images/<?php echo $OrderExa2_ck_colorShopProof_temp; ?>" width="10" height="10"> สีร้านปรู๊ฟ</td>
                        </tr>
                        
                        <tr>
                            
                                 <td style="font-size: 14pt;">6.) สีที่ต้องการ &nbsp;&nbsp;<img src="images/<?php echo $OrderExa2_ck_refer_Oldcolor_temp; ?>" width="10" height="10"> อ้างอิงสีเดิม  <img src="images/<?php echo $OrderExa2_ck_refer_Newcolor_temp; ?>" width="10" height="10"> อ้างอิงสีใหม่ <br><br><br>
                                  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="images/<?php echo $OrderExa2_ck_refer_byBoxExample_temp; ?>" width="10" height="10"> อ้างอิงสีตามกล่องตัวอย่างลูกค้า  
                            
                                 </td>
                        </tr>
                            
                    </thead>  
                    <tbody>
                        <tr>
                            <td style="font-size: 14pt;">รูปแบบการ LAY <b>1&nbsp;-&nbsp;<?php echo $pur_lay2; ?>&nbsp;-&nbsp;<?php echo $pur_lay3; ?></b>           </td>
                            <td style="font-size: 14pt;">ขนาดสำเร็จสินค้า <b><?php echo $job_width; ?>&nbsp; x&nbsp; <?php echo $job_length; ?>&nbsp; x&nbsp; <?php echo $job_hieght; ?></b> </td>
                        </tr>
                  
                        <tr>
                             <td style="font-size: 14pt;" colspan="2">ลักษณะงาน  <b>   <?php echo $style_job; ?>        </b></td>
                           
                        </tr>
                    <!-- วัสดุที่ได้รับจากลูกค้า  -->   
                     <tr>
                             <td style="font-size: 14pt;" colspan="2">วัสดุที่ได้รับจากลูกค้า  &nbsp;<img src="images/<?php echo $ck_example_temp; ?>" width="10" height="10"> ตัวอย่าง  &nbsp;&nbsp; <img src="images/<?php echo $ck_art_work_temp; ?>" width="10" height="10"> ART WORK เล่ม  &nbsp;&nbsp; <img src="images/<?php echo $ck_disc_temp; ?>" width="10" height="10"> แผ่น DISC  &nbsp;&nbsp; <img src="images/<?php echo $ck_print_prototype_temp; ?>" width="10" height="10"> ฟิล์มต้นฉบับ &nbsp;&nbsp; <img src="images/<?php echo $ck_barcode_temp; ?>" width="10" height="10"> บาร์โค้ด  &nbsp;<img src="images/<?php echo $ck_etc1_temp; ?>" width="10" height="10"> อื่น ๆ  <br><br><br>
                             
                                 สิ่งที่ต้องการ           &nbsp;    <img src="images/<?php echo $ck_proof_temp; ?>" width="10" height="10"> ปรู๊ฟ    &nbsp;    <img src="images/<?php echo $ck_etc2_temp; ?>" width="10" height="10"> อื่น ๆ              &nbsp; &nbsp; &nbsp;     การบรรจุ  &nbsp; <img src="images/<?php echo $ck_hor_temp; ?>" width="10" height="10"> ห่อ   &nbsp; <img src="images/<?php echo $ck_box_temp; ?>" width="10" height="10"> กล่อง   &nbsp; <img src="images/<?php echo $ck_pallet_temp; ?>" width="10" height="10"> พาเลท  <br><br><br>
                                สถานที่ส่งปรู๊ฟ  <?php echo $proof_locate; ?>    ลงชื่อ ผจก.ฝ่ายขาย <?php echo $manager_sale_dept1; ?> 
                             </td>
                           
                        </tr>
                        
                      <!-- คืน A/W ให้ลูกค้าชื่อ   -->
                    
                       <tr>
                             <td style="font-size: 14pt;" colspan="2">คืน A/W ให้ลูกค้าชื่อ <?php echo $OrderExa2_A_W; ?> บริษัท <?php echo $OrderExa2_company; ?> วันที่ <?php echo $OrderExa2_date; ?>   <br><br><br>          
                             
                                ผู้ดำเนินการจัดทำ   &nbsp;&nbsp;   <img src="images/<?php echo $OrderExa2_ck_typepum_temp; ?>" width="10" height="10"> แม่แบบปั๊ม &nbsp; &nbsp;    <img src="images/<?php echo $OrderExa2_ck_rungsit_temp; ?>" width="10" height="10"> รังสิตคัดติ้ง 02-9583484  &nbsp; &nbsp;   <img src="images/<?php echo $OrderExa2_ck_systemBoard_temp; ?>" width="10" height="10"> ซิสเท็มบอร์ด 02-4370959                  
                             
                             
                             
                             </td>
                           
                        </tr>
                        
                       <!-- ผลการทำตัวอย่างครั้งที่ 1  -->
                          <tr>
                                     <td style="font-size: 14pt;" colspan="2">ผลการทำตัวอย่างครั้งที่ 1 <?php echo $exa_result1_date; ?>  &nbsp; &nbsp;  <img src="images/<?php echo $ck_digital_proof1_temp; ?>" width="10" height="10"> ดิจิตอลปรู๊ฟ  &nbsp; &nbsp;  <img src="images/<?php echo $ck_proof_soft1_temp; ?>" width="10" height="10"> ปรู๊ฟอ่อน &nbsp; &nbsp;  <img src="images/<?php echo $ck_proof_real_paper1_temp; ?>" width="10" height="10"> ปรู๊ฟกระดาษจริง &nbsp; &nbsp;  <img src="images/<?php echo $ck_etc3_temp; ?>" width="10" height="10"> อื่น ๆ   <br><br><br>          

                                      <img src="images/<?php echo $ck_accept1_temp; ?>" width="10" height="10"> ยอมรับ  &nbsp;&nbsp; โดย <?php echo $by_box11; ?>  &nbsp;&nbsp;วันที่ <?php echo $exa1_accept_date; ?> &nbsp;&nbsp;<img src="images/<?php echo $ck_no_accept1_temp; ?>" width="10" height="10"> ไม่ยอมรับ  &nbsp;&nbsp;โดย <?php echo $by_box12; ?> &nbsp;&nbsp;วันที่ <?php echo $exa1_no_accept_date; ?>   <br><br><br>               

                                      รายละเอียดการแก้ไข <?php echo $detial_edit1; ?>  <br><br><br> 
                                     ค่าเพลท <?php echo $plate_value1; ?> บิลเลขที่ <?php echo $bill_no11; ?> ลงวันที่ <?php echo $bill_date11; ?> ค่าแบบปั๊ม <?php echo $type_pum_value1; ?> บิลเลขที่ <?php echo $bill_no12; ?> ลงวันที่ <?php echo $bill_date12; ?> <br><br><br>
                                    ผลการทำตัวอย่างครั้งที่ 2 <?php echo $exa_result2_date; ?>  &nbsp;&nbsp; <img src="images/<?php echo $ck_digital_proof2_temp; ?>" width="10" height="10"> ดิจิตอลปรู๊ฟ &nbsp;&nbsp;  <img src="images/<?php echo $ck_proof_soft2_temp; ?>" width="10" height="10"> ปรู๊ฟอ่อน &nbsp;&nbsp; <img src="images/<?php echo $ck_proof_real_paper2_temp; ?>" width="10" height="10"> ปรู๊ฟกระดาษจริง &nbsp;&nbsp; <img src="images/<?php echo $ck_etc4_temp; ?>" width="10" height="10"> อื่น ๆ <br><br><br>
                                    <img src="images/<?php echo $ck_accept2_temp; ?>" width="10" height="10"> ยอมรับ โดย <?php echo $by_box21; ?> วันที่ <?php echo $exa1_accept_date2; ?> &nbsp;&nbsp;<img src="images/<?php echo $ck_no_accept2_temp; ?>" width="10" height="10"> ไม่ยอมรับ โดย <?php echo $by_box22; ?> วันที่ <?php echo $exa2_no_accept_date; ?> <br><br><br>
                                     รายละเอียดการแก้ไข <?php echo $detial_edit2; ?> <br><br><br>
                                     ค่าเพลท <?php echo $plate_value2; ?> บิลเลขที่ <?php echo $bill_no21; ?> ลงวันที่ <?php echo $bill_date21; ?> ค่าแบบปั๊ม <?php echo $type_pum_value2; ?> บิลเลขที่ <?php echo $bill_no22; ?> ลงวันที่ <?php echo $bill_date22; ?>
                                     </td>
                           
                          </tr>
                       
                          
                             <tr>
                                  <td style="font-size: 14pt; text-align: center" colspan="2"><b>ผลสรุป</b></td>
                           
                             </tr>  
                        <!-- ตารางพิเศษ  -->
                        
                        

                         <!-- ตารางพิเศษ  -->
                    </tbody>
                    
                    </table> 
                      
                       <table class="table table-bordered" >
                           <thead>
                               
                                <tr>
                                  <td style="font-size: 14pt; text-align: center"><b>จำนวนสีพิมพ์ <?php echo $exa_printAmont; ?> </b></td>
                                  <td style="font-size: 14pt; text-align: center"><b>ชื่อกระดาษ</b></td>
                                  <td style="font-size: 14pt; text-align: center"><b>ความหนา</b></td>
                                  <td style="font-size: 14pt; text-align: center"><b>ขนาดกระดาษ</b></td>
                                  <td style="font-size: 14pt; text-align: center; width: 80px"><b>การ LAY</b></td>
                                  <td style="font-size: 14pt; text-align: center"><b>การเคลือบผิว</b></td>
                                  <td style="font-size: 14pt; text-align: center" colspan="2"><b>รหัส <?php echo $OrderExa2_code; ?></b></td>
                                  
                           
                             </tr>  
                               
                           </thead>
                           <tbody>
                               <tr>
                                   <td style="font-size: 14pt; text-align: center" rowspan="2"><b>สีที่ใช้ </b><img src="images/<?php echo $OrderExa2_ck_color_process_temp; ?>" width="10" height="10"> สี Process<br><br><br>
                                       &nbsp;&nbsp;&nbsp;<img src="images/<?php echo $OrderExa2_ck_special_temp; ?>" width="10" height="10"> สีพิเศษ
                                  
                                   </td>
                                   <td style="font-size: 14pt; text-align: center" rowspan="2"><?php echo $pur_band; ?></td>
                                  <td style="font-size: 14pt; text-align: center" rowspan="2"><?php echo $pur_thick; ?></td>
                                  <td style="font-size: 14pt; text-align: center" rowspan="2"><?php echo $pur_sizepaper; ?></td>
                                  <td style="font-size: 14pt; text-align: center" rowspan="2">1 - <?php echo $pur_lay2; ?> - <?php echo $pur_lay3; ?></td>
                                  <td style="font-size: 14pt; text-align: center" rowspan="2"><?php echo $OrderExa2_krebpew; ?></td>
                                  <td style="font-size: 14pt; text-align: center"><b>เพลท</b></td>
                                  <td style="font-size: 14pt; text-align: center"><b>ปั๊ม</b></td>
                               </tr>
                               
                               <tr>
                                  <td style="font-size: 14pt; text-align: center"><?php echo $OrderExa2_plate; ?></td>
                                  <td style="font-size: 14pt; text-align: center"><?php echo $OrderExa2_pum; ?></td>
                                 
                                  
                               </tr>
                               
                           </tbody>
                               
                           
                       </table>
                      
                      <!--  ลำดับขั้นตอนการทำงาน -->
                      
                       <table class="table table-bordered" >
                           <thead>
                                <tr>
                                  <td style="font-size: 14pt; width: 80px">ลำดับขั้นตอนการทำงาน</td>
                                  <td style="font-size: 14pt; text-align: center; width: 50px"><img src="images/<?php echo $OrderExa2_ck_cut_temp; ?>" width="10" height="10"> ตัด   </td>
                                 <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_print_temp; ?>" width="10" height="10"> พิมพ์   </td>
                                  <td style="font-size: 14pt;"><img src="images/<?php echo $OrderExa2_ck_kreab_temp; ?>" width="10" height="10"> เคลือบ <br><br><img src="images/<?php echo $OrderExa2_ck_ka_temp; ?>" width="10" height="10"> เค     </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_palukfuk_temp; ?>" width="10" height="10"> ปะลูกฟูก </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_pumnun_temp; ?>" width="10" height="10"> ปั๊มนูน   </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_pumkad_temp; ?>" width="10" height="10"> ปั้มขาด   </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_kea_temp; ?>" width="10" height="10"> แกะ   </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_pameu_temp; ?>" width="10" height="10"> ปะมือ   </td>
                                  <td style="font-size: 14pt; text-align: center"><img src="images/<?php echo $OrderExa2_ck_pakreng_temp; ?>" width="10" height="10"> ปะเครื่อง </td>
                                  
                               </tr>
                           </thead>
                           <tbody>
                                    <tr>
                                        <td style="font-size: 14pt; text-align: left" colspan="10">วัสดุอื่นๆ <?php echo $OrderExa2_etc_mat; ?></td>
                                
                                   </tr>
                                   
                                    <tr>
                                        <td style="font-size: 14pt; text-align: left" colspan="10">ใบสั่งผลิตเลขที่ <?php echo $product_no; ?> ใบสั่งซื้อเลขที่ <?php echo $order_no; ?> จำนวน <?php echo $amount; ?> <br><br><br> 
                                        
                                        
                                                                                            ลงชื่อ <?php echo $OrderExa2_officer_exa; ?> จนท.ตัวอย่าง     ลงชื่อ <?php echo $manager_sale_dept2; ?> ผจก.ฝ่ายขาย
                                        
                                        </td>
                                
                                   </tr>
                                   
                                   
                               
                           </tbody>
                               
                           
                       </table>
                      
                      
                   
                  <!-- <label><?php echo $qouta_customer; ?> </label>  -->
                   
                    
                       
                    <label> <font style="font-size: 14pt;"> <b>FM-MKT-01/02  REV:22</b> </font></label><p>
                                           

             
                     
                     
                       
                      
            <!-- </div>  col 12 -->  
            
            </div>  
        
       

  
     
        
 
        
      
  <?php
            $html = ob_get_contents();
            ob_end_clean();
            
             $mpdf = new mPDF('utf-8');
            // $mpdf = new mPDF('','A4',16,'dejavusans');
            //$mpdf = new mPDF('utf-8','A4-L');
            //$mpdf = new mPDF('utf-8', array(100,30)); 
            
             
            $mpdf->margin_header = 9;
            $mpdf->SetHeader('');
            $mpdf->margin_footer = 9;
           // $mpdf->SetLeftMargin( 5 );
          //  $mpdf->SetFooter('หน้าที่ {PAGENO}');
            $stylesheet = file_get_contents('../admin/bootstrap/css/printpdf.css');
            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html,2);
            $mpdf->Output();
            
            exit;
        ?>
    </body>
</html>
