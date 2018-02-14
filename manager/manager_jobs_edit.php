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
      
          $pur_pricePtype_calc = $_POST['pur_pricePtype_box'];

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
          $man_check_pl_factor = $_POST['check_pl_factor'];
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
          
          // เก็บค่า Pieces ในตาราง ด้านล่าง
          $man_calc_pieces1 = $_POST['calc_pieces1'];
          $man_calc_pieces2 = $_POST['calc_pieces2'];
          $man_calc_pieces3 = $_POST['calc_pieces3'];
          $man_calc_pieces4 = $_POST['calc_pieces4'];
          $man_calc_pieces5 = $_POST['calc_pieces5'];
          $man_calc_pieces6 = $_POST['calc_pieces6'];
          
       // บันทึกการ ยืนยันราคา
          
        $jobs_real_wage2 = $_POST['wage_print_box2'];
	$jobs_real_price2 = $_POST['paper_price_box2'];
	
        $jobs_real_plastic = $_POST['price_plastic2'];
        
        $jobs_real_Pfront1R2 = $_POST['price_front1R'];
        $jobs_real_Pfront2R2 = $_POST['price_front2R'];
	$jobs_real_Pfront3R2 = $_POST['price_front3R'];
        $jobs_real_Pfront4R2 = $_POST['price_front4R'];
        
        $jobs_real_lf_price2 = $_POST['lf_price_box2'];
        $jobs_real_lami_price = $_POST['lami_price_box2'];
        
        $jobs_real_Blf_price2 = $_POST['Blf_price_box2'];
        
        $jobs_real_price_R1PK2 = $_POST['price_R1PK2_box'];
        $jobs_real_price_R2PK2 = $_POST['price_R2PK2_box'];
        $jobs_real_price_R3PK2 = $_POST['price_R3PK2_box'];
        $jobs_real_price_R4PK2 = $_POST['price_R4PK2_box'];
        
        $man_total_price_PKR = $_POST['total_price_PKR_box'];
        $man_total_PNR = $_POST['man_total_PNR_box'];
        
        // ค่าบล็อคปั้มนูน
        $man_real_priceBoxPN1 = $_POST['pur_priceBoxPN1R_box'];
        $man_real_priceBoxPN2 = $_POST['pur_priceBoxPN2R_box'];
        $man_real_priceBoxPN3 = $_POST['pur_priceBoxPN3R_box'];
        $man_total_price_BPNR = $_POST['total_price_BPNR_box'];
        
        // ค่าบล็อคปั้มเค
        
        $man_real_priceBoxPK1 = $_POST['pur_priceBoxPK1R_box'];
        $man_real_priceBoxPK2 = $_POST['pur_priceBoxPK2R_box'];
        $man_real_priceBoxPK3 = $_POST['pur_priceBoxPK3R_box'];
        $man_real_priceBoxPK4 = $_POST['pur_priceBoxPK4R_box'];
        
        // รวมค่าบล็อคปั้มเคจริง
        $man_total_price_BPKR = $_POST['total_price_BPKR_box'];
        
        $jobs_real_price_PY = $_POST['price_PY_box2'];
        $jobs_real_price_logis = $_POST['price_logis_box2'];
        
     
        $jobs_real_ALU_price = $_POST['ALU_price_box2'];
        $man_priceAluCalc = $_POST['man_priceAluCalc_box'];
        
        
         //   ค่าแรงปะมือ ปะเครื่อง ค่าวัสดุพิเศษ ห่อ แกะ ค่าขนส่ง
         $man_price_wage_PM = $_POST['price_wage_PM_box'];
         $man_price_wage_PK = $_POST['price_wage_PK_box'];
        
         $man_paper_weight = $_POST['paper_weight_box'];
         
         $man_price_mat_special = $_POST['price_mat_special_box'];
         $man_price_hor = $_POST['price_hor_box'];
         $man_price_kea = $_POST['price_kea_box'];
        
        // ค่าเพลทจริง
         $jobs_real_plate_price = $_POST['plate_price_box2'];
        // ค่าแบบปั้มจริง
         $jobs_real_pur_pricePtype = $_POST['pur_pricePtype_box2'];
          
         // ค่ากระทุ้งจริง 
         
          $man_Kratung_price_real = $_POST['man_Kratung_price_box2'];
          
        // บันทึกจาก ผู้จัดการ
           $man_job_note = $_POST['man_job_note_box'];
           
        // ค่าแรงกระทุ้ง
            $man_kratung_Wprice = $_POST['man_kratung_Wprice_box'];
            $man_kratung_Wprice_real = $_POST['man_kratung_Wprice_box2'];
            
        // น้ำหนักต่อรีม
            $man_weight_perReam = $_POST['man_weight_perReam_box'];
            
       // แก้ไข 8 /9/2560
             $man_printer_width = $_POST['man_printer_width_box'];
             $man_printer_lenght = $_POST['man_printer_lenght_box'];
             
             $man_wagePrint1Color = $_POST['man_wagePrint1Color_box'];
             $man_wagePrint1Color_real = $_POST['man_wagePrint1Color_real_box'];
             
            $pur_thick  =  $_POST['pur_thick_box'];
            
            
            // แก้ไข 4/10/2560
            $pur_offersale  =  $_POST['pur_offersale_box'];
            $pur_thick_gram  =  $_POST['exa_plastic_thick_box_gram'];
            
            $pur_size_width  =  $_POST['exa_plastic_width_box'];
            $pur_size_length  =  $_POST['exa_plastic_length_box'];
            
            $pur_lay2  =  $_POST['lay_2'];
            $pur_lay3  =  $_POST['lay_3'];
            
            $exa_printAmont  =  $_POST['exa_printAmont_box'];
            $exa_color  =  $_POST['exa_color_box'];
            
            $pur_plastic_width  =  $_POST['exa_plastic_width_box2'];
            $pur_plastic_length  =  $_POST['exa_plastic_length_box2'];
            $pur_plastic_thick  =  $_POST['exa_plastic_thick_box'];
            $pur_company  =  $_POST['exa_company_box'];
            
            $pur_Bluk  =  $_POST['exa_Bluk_box'];
            $exa_bluk_pack  =  $_POST['exa_bluk_pack_box'];
            
           // 12 ปั้มนูน 
            $exa_PN_R1A  =  $_POST['R1_width'];
            $exa_PN_R1Y  =  $_POST['R1_lenght'];
            $exa_PN_R2A  =  $_POST['R2_width'];
            $exa_PN_R2Y  =  $_POST['R2_lenght'];
            $exa_PN_R3A  =  $_POST['R3_width'];
            $exa_PN_R3Y  =  $_POST['R3_lenght'];
            
            // 13 ปั้มนูน 
            $exa_R1A  =  $_POST['13R1_width'];
            $exa_R1AY  =  $_POST['13R1_lenght'];
            
            $exa_R2A  =  $_POST['13R2_width'];
            $exa_R2Y  =  $_POST['13R2_lenght'];
            
            $exa_R3A  =  $_POST['13R3_width'];
            $exa_R3Y  =  $_POST['13R3_lenght'];
            
            $exa_R4A  =  $_POST['13R4_width'];
            $exa_R4AY  =  $_POST['13R4_lenght'];
            
            $exa_PN_amount  =  $_POST['man_PN_amount_box'];
            $exa_PY_amount  =  $_POST['man_PK_amount_box'];
            
       // สิ้นสุดการเก็บค่า บันทึกการ ยืนยันราคา
            
            
            
          
          
                                       
      $file_code = $_SESSION['file_code'];
        
               
    
    
    // $sql = "UPDATE tb_jobs SET pur_thick_gram='{$pur_thick_gram}',pur_size_width='{$pur_size_width}',pur_size_length='{$pur_size_length}',pur_lay2='{$lay_2}'";
       
       $sql = "UPDATE tb_jobs SET  exa_PY_amount ='{$exa_PY_amount}',exa_PN_amount ='{$exa_PN_amount}',exa_R4AY ='{$exa_R4AY}',exa_R4A ='{$exa_R4A}',exa_R3Y ='{$exa_R3Y}',exa_R3A ='{$exa_R3A}',exa_R2Y ='{$exa_R2Y}',exa_R2A ='{$exa_R2A}',exa_R1AY ='{$exa_R1AY}',exa_R1A ='{$exa_R1A}',pur_size_length ='{$pur_size_length}',pur_size_width ='{$pur_size_width}',pur_thick_gram ='{$pur_thick_gram}',pur_offersale ='{$pur_offersale}',man_check_pl_factor ='{$man_check_pl_factor}',pur_thick ='{$pur_thick}',man_kratung_Wprice_real ='{$man_kratung_Wprice_real}',man_wagePrint1Color_real ='{$man_wagePrint1Color_real}',man_wagePrint1Color ='{$man_wagePrint1Color}',man_printer_lenght ='{$man_printer_lenght}',man_printer_width ='{$man_printer_width}',man_weight_perReam ='{$man_weight_perReam}',man_kratung_Wprice ='{$man_kratung_Wprice}',man_job_note ='{$man_job_note}',man_Kratung_price_real ='{$man_Kratung_price_real}',man_calc_pieces6 ='{$man_calc_pieces6}',man_calc_pieces5 ='{$man_calc_pieces5}',man_calc_pieces4 ='{$man_calc_pieces4}',man_calc_pieces3 ='{$man_calc_pieces3}',man_calc_pieces2 ='{$man_calc_pieces2}',man_calc_pieces1 ='{$man_calc_pieces1}',pur_pricePtype_calc ='{$pur_pricePtype_calc}',man_priceAluCalc ='{$man_priceAluCalc}',jobs_real_pur_pricePtype ='{$jobs_real_pur_pricePtype}',jobs_real_plate_price ='{$jobs_real_plate_price}',man_price_kea ='{$man_price_kea}',man_price_hor ='{$man_price_hor}',man_price_mat_special ='{$man_price_mat_special}',man_paper_weight ='{$man_paper_weight}',man_price_wage_PK ='{$man_price_wage_PK}',man_price_wage_PM ='{$man_price_wage_PM}',jobs_real_ALU_price ='{$jobs_real_ALU_price}',jobs_real_price_logis ='{$jobs_real_price_logis}',jobs_real_price_PY ='{$jobs_real_price_PY}',man_total_price_BPKR ='{$man_total_price_BPKR}',man_real_priceBoxPK4 ='{$man_real_priceBoxPK4}',man_real_priceBoxPK3 ='{$man_real_priceBoxPK3}',man_real_priceBoxPK2 ='{$man_real_priceBoxPK2}',man_real_priceBoxPK1 ='{$man_real_priceBoxPK1}',man_total_price_BPNR ='{$man_total_price_BPNR}',man_real_priceBoxPN3 ='{$man_real_priceBoxPN3}',man_real_priceBoxPN2 ='{$man_real_priceBoxPN2}',man_real_priceBoxPN1 ='{$man_real_priceBoxPN1}',man_total_PNR ='{$man_total_PNR}',man_total_price_PKR ='{$man_total_price_PKR}',jobs_real_price_R4PK2 ='{$jobs_real_price_R4PK2}',jobs_real_price_R3PK2 ='{$jobs_real_price_R3PK2}',jobs_real_price_R2PK2 ='{$jobs_real_price_R2PK2}',jobs_real_price_R1PK2 ='{$jobs_real_price_R1PK2}',jobs_real_Blf_price ='{$jobs_real_Blf_price2}',jobs_real_lami_price ='{$jobs_real_lami_price}',jobs_real_lf_price ='{$jobs_real_lf_price2}',jobs_real_Pfront4R ='{$jobs_real_Pfront4R2}',jobs_real_Pfront3R ='{$jobs_real_Pfront3R2}',jobs_real_Pfront2R ='{$jobs_real_Pfront2R2}',jobs_real_Pfront1R ='{$jobs_real_Pfront1R2}',jobs_real_plastic ='{$jobs_real_plastic}',jobs_real_price ='{$jobs_real_price2}',jobs_real_wage ='{$jobs_real_wage2}',man_calc_R6='{$man_calc_R6}',man_calc_R5='{$man_calc_R5}',man_calc_R4='{$man_calc_R4}',man_calc_R3='{$man_calc_R3}',man_calc_R2='{$man_calc_R2}',man_calc_R1='{$man_calc_R1}',man_check_logis_factor='{$man_check_logis_factor}',man_check_plusPK_factor='{$man_check_plusPK_factor}',man_factor_paperF='{$man_factor_paperF}',man_check_paperf_factor='{$man_check_paperf_factor}',man_factor_lf='{$man_factor_lf}',man_total_price_PN='{$man_total_price_PN}',man_total_price_PK='{$man_total_price_PK}',man_check_Blf_factor='{$man_check_Blf_factor}',jobs_factor_lami_box='{$factor_lami_box}',jobs_check_lami_factor='{$check_lami_factor}',jobs_print_wage='{$print_wage}',jobs_ch_print_wage='{$ch_print_wage2}',paper_price_calc='{$paper_price_box}',wage_print_calc='{$wage_print_box}',price_front1_calc='{$price_front1}',price_front2_calc='{$price_front2}'"
        . ",exa_PN_R3Y ='{$exa_PN_R3Y}',exa_PN_R3A ='{$exa_PN_R3A}',exa_PN_R2Y ='{$exa_PN_R2Y}',exa_PN_R2A ='{$exa_PN_R2A}',exa_PN_R1Y ='{$exa_PN_R1Y}',exa_PN_R1A ='{$exa_PN_R1A}',exa_bluk_pack ='{$exa_bluk_pack}',pur_Bluk ='{$pur_Bluk}',pur_company ='{$pur_company}',pur_plastic_thick ='{$pur_plastic_thick}',pur_plastic_length ='{$pur_plastic_length}',pur_plastic_width ='{$pur_plastic_width}',exa_color ='{$exa_color}',exa_printAmont ='{$exa_printAmont}',pur_lay3 ='{$pur_lay3}',pur_lay2 ='{$pur_lay2}',man_calc_paper6 ='{$man_calc_paper6}',man_calc_paper5 ='{$man_calc_paper5}',man_calc_paper4 ='{$man_calc_paper4}',man_calc_paper3 ='{$man_calc_paper3}',man_calc_paper2 ='{$man_calc_paper2}',man_calc_paper1 ='{$man_calc_paper1}',man_factor_SP_box ='{$man_factor_SP_box}',man_check_sp_factor ='{$man_check_sp_factor}',man_calc_total6 ='{$man_calc_total6}',man_calc_total5 ='{$man_calc_total5}',man_calc_total4 ='{$man_calc_total4}',man_calc_total3 ='{$man_calc_total3}',man_calc_total2 ='{$man_calc_total2}',man_calc_total1 ='{$man_calc_total1}',Blf_price_calc ='{$Blf_price_calc}',pur_plastic_price ='{$pur_plastic_price}',price_PY_calc ='{$price_PY_box}',price_logis_calc ='{$price_logis_box}',plate_price_calc ='{$plate_price_box }' "
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

