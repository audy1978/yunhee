<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<!--/head-->
<body>
     <?php include 'header.php'; ?>
    <!--/header-->
    
   <?php include 'db/config_db.php'; ?>
    
     <!--/ ค้นหาข้อมูล file code -->
     <?php
     
     // เปิด ปิด ปุ่ม เพื่อกำหนดสิทธฺ์การทำงาน
     if($_SESSION['user_level']=='จนท. จัดซื้อ'){
         
         $disable_exa = 'disabled';
     }else if($_SESSION['user_level']=='จนท.ตัวอย่าง'){
         $disable_purc = 'disabled';
         
     }else {
         $disable_exa = '';
          $disable_purc = '';
     }
     
     // จบการปิดปุ่ม
     
     // ปิด  3. เคลือบผิวหน้าแบบ
    // $dis_box1_w_l = "disabled";
    // $dis_box2_w_l = "disabled";
   //  $dis_box3_w_l = "disabled";
   //  $dis_box4_w_l = "disabled";
     
     // ราคา
     
     $dis_price_front_box1 = "disabled";
     $dis_price_front_box2 = "disabled";
     $dis_price_front_box3 = "disabled";
     $dis_price_front_box4 = "disabled";
     
     // จบการปิด การให้ key  3. เคลือบผิวหน้าแบบ
     
     include 'db/database.php';
	$file_code3 =  $_GET["file_code"];	
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code3'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        if ($result_filecode) {
            $row_filecode = mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            
            $job_image = $row_filecode['jobs_image'];
            
             
             $job_width  = $row_filecode['job_width'];
             $job_length  = $row_filecode['job_length'];
             $job_height   = $row_filecode['job_hieght'];
       
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
            $pur_3fwidth1 = $row_filecode['pur_3fwidth1'];
            $pur_3flength1 = $row_filecode['pur_3flength1'];
          
            $pur_3type2 = $row_filecode['pur_3type2'];
            $pur_3fwidth2 = $row_filecode['pur_3fwidth2'];
            $pur_3flength2 = $row_filecode['pur_3flength2'];
            $pur_3type3 = $row_filecode['pur_3type3'];
            $pur_3fwidth3 = $row_filecode['pur_3fwidth3'];
            $pur_3flength3 = $row_filecode['pur_3flength3'];
            $pur_3type4 = $row_filecode['pur_3type4'];
            $pur_3fwidth4 = $row_filecode['pur_3fwidth4'];
            $pur_3flength4 = $row_filecode['pur_3flength4'];
            
            $pur_4width = $row_filecode['pur_4width'];
            $pur_4length = $row_filecode['pur_4length'];
            $pur_4lami_width = $row_filecode['pur_4lami_width'];
            $pur_4lami_length = $row_filecode['pur_4lami_length'];
                    
            $pur_3checkluk = $row_filecode['pur_3checkluk'];
            $pur_3priceluk = $row_filecode['pur_3priceluk'];
            $pur_3pricelumi = $row_filecode['pur_3pricelumi'];
           
            $pur_Bluk = $row_filecode['pur_Bluk'];
            $pur_9pricemat = $row_filecode['pur_9pricemat'];
            $pur_hor = $row_filecode['pur_hor'];
            $pur_9kae = $row_filecode['pur_9kae'];
            $purc_file_purc = $row_filecode['purc_file_purc'];

            $pur_plastic_width = $row_filecode['pur_plastic_width'];
            $pur_plastic_length = $row_filecode['pur_plastic_length'];
            $pur_plastic_thick = $row_filecode['pur_plastic_thick'];
            $pur_company = $row_filecode['pur_company'];
            $pur_plastic_price = $row_filecode['pur_plastic_price'];
            
            $pur_checkP = $row_filecode['pur_checkP'];
            
            $pur_typepum_check   = $row_filecode['pur_typepum_check'];
            $pur_pumN_check    = $row_filecode['pur_pumN_check'];  
            $pur_pumk_check   = $row_filecode['pur_pumk_check']; 
            $pur_alu_check   = $row_filecode['pur_alu_check'];
            
            $pur_price_plate  = $row_filecode['pur_price_plate'];
            $pur_pricePtype  = $row_filecode['pur_pricePtype'];
            $pur_pricePN  = $row_filecode['pur_pricePN'];
            $pur_priceBoxk  = $row_filecode['pur_priceBoxk'];
            $pur_priceAlu  = $row_filecode['pur_priceAlu'];
            
            
            // ข้อ 12
            $pur_boxPN_R1A = $row_filecode['pur_boxPN_R1A'];
            $pur_boxPN_R1Y = $row_filecode['pur_boxPN_R1Y'];
            $pur_boxPN_R2A = $row_filecode['pur_boxPN_R2A'];
            $pur_boxPN_R2Y = $row_filecode['pur_boxPN_R2Y'];
            $pur_boxPN_R3A = $row_filecode['pur_boxPN_R3A'];
            $pur_boxPN_R3Y = $row_filecode['pur_boxPN_R3Y'];
            
            
            
    
           // แนบไฟล์ 3 ไฟล์ 
            $pur_fileAtt1 = $row_filecode['pur_fileAtt1'];
            $pur_fileAtt2 = $row_filecode['pur_fileAtt2'];
            $pur_fileAtt3 = $row_filecode['pur_fileAtt3'];
            $pur_fileAtt4 = $row_filecode['pur_fileAtt4'];
            $pur_fileAtt5 = $row_filecode['pur_fileAtt5'];
            $pur_fileAtt6 = $row_filecode['pur_fileAtt6'];
            $pur_fileAtt7 = $row_filecode['pur_fileAtt7'];
            $pur_fileAtt8 = $row_filecode['pur_fileAtt8'];
            
            $pur_cat = $row_filecode['pur_cat'];
            $pur_job_note = $row_filecode['pur_job_note']; // note เจ้าหน้าที่จัดซื้อ


           // เจ้าหน้าที่ตัวอย่าง
            $exa_job_note = $row_filecode['exa_job_note']; // note เจ้าหน้าที่ตัวอย่าง
            
            $exa_printAmont = $row_filecode['exa_printAmont'];
            $exa_color = $row_filecode['exa_color'];
            
            $exa_3front1_type = $row_filecode['exa_3front1_type'];
            $exa_3front1_width = $row_filecode['exa_3front1_width'];
            $exa_3front1_lenght = $row_filecode['exa_3front1_lenght'];
            $exa_3front1_price = $row_filecode['exa_3front1_price'];
            $exa_3front2_type = $row_filecode['exa_3front2_type'];
            $exa_3front2_width = $row_filecode['exa_3front2_width'];
            $exa_3front2_lenght = $row_filecode['exa_3front2_lenght'];
            $exa_3front2_price = $row_filecode['exa_3front2_price'];
            $exa_3front3_type = $row_filecode['exa_3front3_type'];
            $exa_3front3_width = $row_filecode['exa_3front3_width'];
            $exa_3front3_lenght = $row_filecode['exa_3front3_lenght'];
            $exa_3front3_price = $row_filecode['exa_3front3_price'];
            $exa_3front4_type = $row_filecode['exa_3front4_type'];
            $exa_3front4_width = $row_filecode['exa_3front4_width'];
            $exa_3front4_lenght = $row_filecode['exa_3front4_lenght'];
            $exa_3front4_price = $row_filecode['exa_3front4_price'];
            $exa_4checkbox = $row_filecode['exa_4checkbox'];
            $exa_4LF_width = $row_filecode['exa_4LF_width'];
            $exa_4LF_lenght = $row_filecode['exa_4LF_lenght'];
            $exa_4LF_layer = $row_filecode['exa_4LF_layer'];
            $exa_lami_width = $row_filecode['exa_lami_width'];
            $exa_lami_lenght = $row_filecode['exa_lami_lenght'];
            $exa_R1A = $row_filecode['exa_R1A'];
            $exa_R1AY = $row_filecode['exa_R1AY'];
            $exa_R2A = $row_filecode['exa_R2A'];
            $exa_R2Y = $row_filecode['exa_R2Y'];
            $exa_R3A = $row_filecode['exa_R3A'];
            $exa_R3Y = $row_filecode['exa_R3Y'];
            $exa_R4A = $row_filecode['exa_R4A'];
            $exa_R4AY = $row_filecode['exa_R4AY'];
            
            $exa_PN_R1A = $row_filecode['exa_PN_R1A'];
            $exa_PN_R1Y = $row_filecode['exa_PN_R1Y'];
            $exa_PN_R2A = $row_filecode['exa_PN_R2A'];
            $exa_PN_R2Y = $row_filecode['exa_PN_R2Y'];
            $exa_PN_R3A = $row_filecode['exa_PN_R3A'];
            $exa_PN_R3Y = $row_filecode['exa_PN_R3Y'];

                    
            $exa_PN_check_temp = $row_filecode['exa_PN_check'];
            $exa_PN_amount = $row_filecode['exa_PN_amount'];
            $exa_PY_check_temp = $row_filecode['exa_PY_check'];
            $exa_PY_amount =  $row_filecode['exa_PY_amount'];
            $exa_checkP = $row_filecode['exa_checkP'];
            
            $exa_pm_temp =  $row_filecode['exa_pm'];
            $exa_pk_temp =  $row_filecode['exa_pk'];
            
            $exa_Bluk = $row_filecode['exa_Bluk'];
            $exa_bluk_pack = $row_filecode['exa_bluk_pack'];
            $exa_file_purc = $row_filecode['exa_file_purc'];
            
            
            // แนบไฟล์ 3 ไฟล์ 
            $exa_fileAtt1 = $row_filecode['exa_fileAtt1'];
            $exa_fileAtt2 = $row_filecode['exa_fileAtt2'];
            $exa_fileAtt3 = $row_filecode['exa_fileAtt3'];
            $exa_fileAtt4 = $row_filecode['exa_fileAtt4'];
            $exa_fileAtt5 = $row_filecode['exa_fileAtt5'];
            $exa_fileAtt6 = $row_filecode['exa_fileAtt6'];
            $exa_fileAtt7 = $row_filecode['exa_fileAtt7'];
            $exa_fileAtt8 = $row_filecode['exa_fileAtt8'];
            
            // ชนิดของลูกฟูก
            $sales_4LF_type = $row_filecode['sales_4LF_type'];
            $man_factor_lf = $row_filecode['man_factor_lf'];
            
            // ค่ากระทุ้ง
            $exa_Kratung_price = $row_filecode['exa_Kratung_price'];
            
            
            // end เจ้าหน้าที่ตัวอย่าง
            
            
            // check status 4. ลูกฟูก
            $sales_check_LF = $row_filecode['sales_check_LF'];

                 if($sales_check_LF!=''){
                     $ck_LF = "";

                 }else {
                     $ck_LF = "disabled";
                 }


           
            // check ปะมือ ปะเครื่อง  ปั้มนูน  ปั้มขาด  / ปั้ม ไม่ปั้ม
            
               if ($exa_pm_temp !="") {
               $exa_pm_temp = "checked";
               } 
               
               if ($exa_pk_temp !="") {
               $exa_pk_temp = "checked";
               } 
               
               if ($exa_PN_check_temp !="") {
               $exa_PN_check_temp = "checked";
               } 
               
               if ($exa_PY_check_temp !="") {
               $exa_PY_check_temp = "checked";
               } 
               
               if ($exa_4checkbox !="") {
               $exa_4checkbox = "checked";
               } 
               
               if ($pur_checkP =="ปั้ม") {
               $pur_checkP1 = "checked";
               } 
               
               if ($pur_checkP =="ไม่ปั้ม") {
                $pur_checkP2 = "checked";
               } 
               
               // checkbox จัดซื้อ
                if ($pur_typepum_check !="") {
               $pur_typepum_check = "checked";
               } 
                if ($pur_pumN_check !="") {
               $pur_pumN_check = "checked";
               } 
                if ($pur_pumk_check !="") {
               $pur_pumk_check = "checked";
               } 
                if ($pur_alu_check  !="") {
               $pur_alu_check = "checked";
               } 
               
               
               
               
               
               
           // สิ้นสุดการ check
               
               
           
   switch ($exa_3front1_type) {
     case "-":
        $check10 = "selected";
        $dis_box1_w_l = "disabled";
        break;
     case "อาบเงา":
        $check11 = "selected";
        $dis_box1_w_l = "disabled";
        break;
    case "อาบด้าน":
        $check12 = "selected";
        $dis_box1_w_l = "disabled";
        break;
    case "ขัดเงา เว้นลิ้น":
        $check13 = "selected";
        $dis_box1_w_l = "";
        break;
     case "UV เว้นลิ้น":
        $check14 = "selected";
        break;
    case "OPP เงา":
        $check15 = "selected";
        $dis_box1_w_l = "";
        break;
    case "OOP ด้าน":
        $check16 = "selected";
        $dis_box1_w_l = "";
        break;
    case "SPORT UV":
        $check17 = "selected";
        break;
    case "อื่น ๆ":
        $check18 = "selected";
        break;
    
            }
            
            // check เปิด ปิด ให้ key ราคา
            
            if($exa_3front1_type=="SPORT UV" || $exa_3front1_type=="อื่น ๆ"){
                $dis_price_front_box1 = "";
            }else{
                $dis_price_front_box1 = "disabled";
            }
            
            
  switch ($exa_3front2_type) {
    case "-":
        $check20 = "selected";
        $dis_box2_w_l = "disabled";
        break;
    case "อาบเงา":
        $check21 = "selected";
        $dis_box2_w_l = "disabled";
        break;
    case "อาบด้าน":
         $check22 = "selected";
        $dis_box2_w_l = "disabled";
        break;
    case "ขัดเงา เว้นลิ้น":
        $check23 = "selected";
        break;
     case "UV เว้นลิ้น":
        $check24 = "selected";
        $dis_box2_w_l = "";
        break;
    case "OPP เงา":
        $check25 = "selected";
        $dis_box2_w_l = "";
        break;
    case "OOP ด้าน":
        $check26 = "selected";
        $dis_box2_w_l = "";
        break;
    case "SPORT UV":
        $check27 = "selected";
        break;
    case "อื่น ๆ":
        $check28 = "selected";
        break;
    
            }
            
            // check เปิด ปิด ให้ key ราคา
            
            if($exa_3front2_type=="SPORT UV" || $exa_3front2_type=="อื่น ๆ"){
                $dis_price_front_box2 = "";
            }else{
                $dis_price_front_box2 = "disabled";
            }
            
 switch ($exa_3front3_type) {
     case "-":
        $check30 = "selected";
        $dis_box3_w_l = "disabled";
        break;
    case "อาบเงา":
        $check31 = "selected";
        $dis_box3_w_l = "disabled";
        break;
    case "อาบด้าน":
         $check32 = "selected";
         $dis_box3_w_l = "disabled";
        break;
    case "ขัดเงา เว้นลิ้น":
        $check33 = "selected";
        $dis_box3_w_l = "";
        break;
     case "UV เว้นลิ้น":
        $check34 = "selected";
        $dis_box3_w_l = "";
        break;
    case "OPP เงา":
        $check35 = "selected";
        $dis_box3_w_l = "";
        break;
    case "OOP ด้าน":
        $check36 = "selected";
        $dis_box3_w_l = "";
        break;
    case "SPORT UV":
        $check37 = "selected";
        break;
    case "อื่น ๆ":
        $check38 = "selected";
        break;
    
            }
            
            // check เปิด ปิด ให้ key ราคา
            
            if($exa_3front3_type=="SPORT UV" || $exa_3front3_type=="อื่น ๆ"){
                $dis_price_front_box3 = "";
            }else{
                $dis_price_front_box3 = "disabled";
            }
            
  switch ($exa_3front4_type) {
     case "-":
        $check40 = "selected";
        $dis_box4_w_l = "disabled";
         break;
    case "อาบเงา":
        $check41 = "selected";
        $dis_box4_w_l = "disabled";
        break;
    case "อาบด้าน":
         $check42 = "selected";
        $dis_box4_w_l = "disabled";
        break;
    case "ขัดเงา เว้นลิ้น":
        $check43 = "selected";
        $dis_box4_w_l = "";
        break;
     case "UV เว้นลิ้น":
        $check44 = "selected";
        $dis_box4_w_l = "";
        break;
    case "OPP เงา":
        $check45 = "selected";
        $dis_box4_w_l = "";
        break;
    case "OOP ด้าน":
        $check46 = "selected";
        $dis_box4_w_l = "";
        break;
    case "SPORT UV":
        $check47 = "selected";
        break;
    case "อื่น ๆ":
        $check48 = "selected";
        break;
    
            }
            
            // check เปิด ปิด ให้ key ราคา
            
            if($exa_3front4_type=="SPORT UV" || $exa_3front4_type=="อื่น ๆ"){
                $dis_price_front_box4 = "";
            }else{
                $dis_price_front_box4 = "disabled";
            }
            // check เคลือบผิวหน้าแบบ 
               
               
            // สิ้นสุดการ check เคลือบผิวหน้าแบบ   
            
            mysqli_free_result($result_filecode);
        }
     
         session_start();
        $_SESSION['file_code'] = $file_code3;
        
        $_SESSION['lay_333'] = $pur_lay3;
     ?>
     
      <!--/สิ้นสุดการค้นหาข้อมูล file code-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>เรียกแฟ้มงาน</h3>
                    
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
                      
              <h4>User name : <? echo $_SESSION['user_fullname'];?></h4>
               
           </div>
                
                <!-- form start -->
                <div class="row">
                 
                   <div class="col-md-4">
     <form class="form-inline" role="form" name="call-job-form" id="call-job-form" method="post" action="call-job-action.php">
  <div class="form-group">
    
    <p class="form-control-static">รหัสไฟล์</p>
  </div>
  <div class="form-group">
  
    <input type="text" name ="file_code" class="form-control" id="file_code" placeholder="กรอกรหัสไฟล์">
  </div>
  <button type="submit" name = "submit1" id = "submit1" class="btn btn-primary pull-right">เรียกแฟ้มงาน</button>
</form>
         
        
                   </div>
        
                </div>
            
   <!-- รายละเอียดงาน   -->
       <div class="row">
              <div class="col-lg-12">
                <div class="left">
                   
                </div>
                                           
               <div class="row">
                   <div class="col-md-3"> 
                   <label>ลูกค้า : <?php $jobs_customer3 = $_GET["jobs_customer2"]; 
					if($jobs_customer3==""){
					  $jobs_customer3 = "ไม่พบข้อมูล";
					  echo $jobs_customer3;
					} else {
					echo $jobs_customer3; } ?>   </label>
              
                   </div>
                   <div class="col-md-3">
               
                   <label>File : <?php $jobs_file3 = $_GET["jobs_file2"]; echo $jobs_file3 ?></label>
                   </div>
               
                <div class="col-md-3">
               
                   <label>รหัสไฟล์ : <?php $file_code3 = $_GET["file_code"]; echo $file_code3; ?></label>
                  
                     
                
                  </div>
               
             
               <div class="col-md-3">
        
                   <a href=<?php echo "jobs/img/".$job_image; ?> target="blank"> <img src="<?php echo "jobs/img/".$job_image; ?>" alt="แนบเอกสารเสนอราคา" style="width:204px;height:128px;"></a>
        
            </div>
               
               
               
               </div>  

             
               
             </div>
           
           
           
            </div>
   
   <!-- จบ! รายละเอียดงาน   -->
                     
   <div class="row">
       
           
     <div class="col-md-8 col-md-offset-6">
                              
                                  <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ขนาดของงาน &nbsp; &nbsp;กว้าง</th>
                                    <th><input disabled name="job_width_box" id="job_width_box" style="width:60px; text-align: right;" type="text" class="form-control" style="text-align: right" value="<?php echo $job_width; ?>" maxlength="3"  OnChange="JavaScript:chkNum_z(this)"></th>
                                    <th> &nbsp; &nbsp;ยาว</th>
                                    <th><input disabled name="job_length_box" id="job_length_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $job_length; ?>" </th>
                                    <th>&nbsp; &nbsp;สูง</th>
                                    <th><input disabled name="job_height_box" id="job_height_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $job_height; ?>" </th>
                                    <th>&nbsp; </th>
                                    <th>&nbsp; &nbsp;ความหนา</th>
                                    <th><input disabled name="pur_thick_gram_box" id="pur_thick_gram_box" style="width:100px; text-align: right;" type="text" class="form-control" style="text-align: right" value="<?php echo $pur_thick_gram; ?>" maxlength="3"  OnChange="JavaScript:chkNum_z(this)"></th>
                                    <th>&nbsp; แกรม </th>

                                    </thead>
                                        </table>
                              
                          </div>
   
   
   
   </div>
   
   <div class="row">
       
           
       <div class="col-md-8 col-md-offset-6">
          
          <div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th></th>


<th>Size กระดาษ &nbsp; &nbsp;กว้าง&nbsp;<font color="red">*</font></th>
<th><input disabled name="pur_size_width_box2" id="pur_size_width_box2" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="กว้าง" maxlength="3" style="text-align: right" value="<?php echo $pur_size_width; ?>" OnChange="JavaScript:chkNum2(this)" smk-text="กรุณากรอกความกว้าง" required></th>
<th>&nbsp; &nbsp;ยาว&nbsp;<font color="red">*</font></th>
<th><input disabled name="pur_size_length_box2" id="pur_size_length_box2" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="ยาว" maxlength="3" style="text-align: right" value="<?php echo $pur_size_length; ?>" OnChange="JavaScript:chkNum2(this)" smk-text="กรุณากรอกความยาว" required></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
<th>การเลย์&nbsp;<font color="red">*</font>&nbsp; &nbsp;</th>
<th><input name="lay_12" id="lay_12" style="width:50px; text-align: right;" type="text" class="form-control" placeholder="" style="text-align: center" value="1" readonly></th>
<th>&nbsp; &nbsp;-&nbsp; &nbsp;</th>
<th><input disabled name="lay_22" id="lay_22" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay2; ?>" OnChange="JavaScript:chkNum1(this)" smk-text="กรุณากรอกค่าการเลย์" required></th>
<th>&nbsp; &nbsp;-&nbsp; &nbsp;</th>
<th><input disabled name="lay_32" id="lay_32" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay3; ?>" OnChange="JavaScript:chkNum1(this)" smk-text="กรุณากรอกค่าการเลย์" required></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</thead>
    </table>
    
</div>  
           
           
       </div>
       
   </div>
   
  
   <!-- Tab รายละเอียดงาน   -->
                
   <div class="row">
       
       <ul class="nav nav-tabs">

    <?php 
    
   if($_SESSION['user_level']=='จนท. จัดซื้อ'){
         
         echo '<li class="active"><a data-toggle="tab" href="#home">เจ้าหน้าที่จัดซื้อ กรอกข้อมูล</a></li>'; 
         
         $active_tab1 = "tab-pane fade in active";
         $active_tab2 = "tab-pane fade";
                 
     }else if($_SESSION['user_level']=='จนท.ตัวอย่าง'){
        
         
         echo '<li ><a data-toggle="tab" href="#menu1">เจ้าหน้าที่ตัวอย่าง กรอกข้อมูล</a></li>';
          $active_tab2 = "tab-pane fade in active";
         $active_tab1 = "tab-pane fade";
         
     }else {
         echo '<li class="active"><a data-toggle="tab" href="#home">เจ้าหน้าที่จัดซื้อ กรอกข้อมูล</a></li>'; 
 
         echo '<li ><a data-toggle="tab" href="#menu1">เจ้าหน้าที่ตัวอย่าง กรอกข้อมูล</a></li>';  
     
          $active_tab1 = "tab-pane fade in active";
         $active_tab2 = "tab-pane fade";
         
         
     }
          
 

?>

       
 </ul>
       

<div class="tab-content">

<div id="home" class="<?php echo $active_tab1;?>">

   <form method="post" id="purc_edit" name= "purc_edit" class="form" action= "purc_jobs_edit.php" enctype="multipart/form-data" novalidate > 
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
      
       <div class="row">
               
                <!-- ชื่อกระดาษ -->
               
     
                 <div class="box box-danger">
                <div class="box-header with-border">
                    <p></p>
                    <label>1. ชื่อกระดาษ</label>
                </div>
              
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-1">
                      <label>ประเภท</label>
                      
                     
                      <input  disabled name="paper_cat" id="paper_cat"  class="form-control" value="<?php echo $pur_cat; ?>">  </input>
                   
                    </div>
                    <div class="col-xs-2">
                      <label>ผู้ขาย</label>
               
                      <?php

                    $sql = "SELECT distinct paper_seller FROM tb_paper2 WHERE paper_thickness='$pur_thick_gram' && paper_cat='$pur_cat'";
                    $result = mysql_query($sql);
                    echo "<select name='paper_seller' id='paper_seller' class='form-control' onclick='doajax()'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['paper_seller'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
               
                      
                      
                    </div>
                    <div class="col-xs-2">
                      <label>ยี่ห้อ</label>
                     
                      
                      
                     <?php

                    $sql = "SELECT distinct paper_band FROM tb_paper2 WHERE paper_thickness='$pur_thick_gram' && paper_cat='$pur_cat'";
                    $result = mysql_query($sql);
                    echo "<select name='paper_band' id='paper_band' class='form-control' onclick='doajax()'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['paper_band'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
                   
                    
                    
                    
                    </div>
                  
                  <div class="col-xs-1">
                      <label>ความหนา</label>
                      <input disabled name="gram_value" id="gram_value"  class="form-control" value="<?php echo $pur_thick_gram; ?>">  </input>
                     
                    </div>
                    <div class="col-xs-2">
                      <label>ขนาด</label>
                      
              <?php

                    $sql = "SELECT distinct paper_size FROM tb_paper2 WHERE paper_thickness='$pur_thick_gram' && paper_cat='$pur_cat'";
                    $result = mysql_query($sql);
                    echo "<select name='paper_size' id='paper_size' class='form-control' onclick='doajax()'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['paper_size'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
                      
                      
                    </div>
                    <div class="col-xs-2">
                      <label>แบบ</label>
                     
                    
                    <?php

                    $sql = "SELECT distinct paper_type FROM tb_paper2 WHERE paper_thickness='$pur_thick_gram' && paper_cat='$pur_cat' ";
                    $result = mysql_query($sql);
                    echo "<select name='paper_type' id='paper_type' class='form-control' onclick='doajax()'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['paper_type'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
                  
                    
                    </div>
                    <div class="col-xs-2">
                      <label> ราคาจัดซื้อ</label>
                      <input name="paper_price_box" id="paper_price_box" type="text" class="form-control"  style="background: #F9E79F; text-align: right;"  value="<?php echo $pur_offersale; ?>" readonly>
                   
                    </div>
                
                  
                  
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                
                
                
              <!--  1. ความหนากระดาษ  --> 
<hr> </hr>



<!--  สิ้นสุด ความหน่ากระดาษ -->
              
              
                         
                
              <!-- การเลย์ / ราคาจริง / คำนวณได้ -->
              
              <div class="box box-danger">
              
              
                <div class="box-body">
                  
                
                
                
                </div><!-- /.box-body -->
              </div>
              <!-- จบ การเลย์ / ราคาจริง / คำนวณได้ --><!--/.col-md-4--><!--/.col-md-4--><!--/.col-md-4-->
            
            
               
    
       
  </div>
                  
                  <?php 
                  //  check ว่า sale check ว่ามีพลาสติก มั้ย
                  
                  $sales_plastic_check = $row_filecode['sales_plastic_check'];

                     if($sales_plastic_check!=''){
                         $ck_PT = "";

                     }else {
                         $ck_PT = "disabled";
                     }
                  
                  ?>

   
       
       <!-- แก้ -->
   <div class="row">
     <table data-toggle="table" data-striped="true">   
     <tbody>    
    <tr>

<th>2. พลาสติก&nbsp; &nbsp; </th>
<th>กว้าง</th>
<td><input <?php echo $ck_PT; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="pur_plastic_width_box" name="pur_plastic_width_box" value="<?php echo $pur_plastic_width; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp; &nbsp; ยาว</th>
<td><input <?php echo $ck_PT; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="pur_plastic_length_box" name="pur_plastic_length_box" value="<?php echo $pur_plastic_length; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>

<th>&nbsp; &nbsp; หนา</th>
<td><input <?php echo $ck_PT; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="pur_plastic_thick_box" name="pur_plastic_thick_box" value="<?php echo $pur_plastic_thick; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>

<th>&nbsp; &nbsp; บริษัท</th>
<th> <input <?php echo $ck_PT; ?> type="text" class="form-control" id="pur_company_box" name="pur_company_box" value="<?php echo $pur_company; ?>" placeholder=""></th>
<th>&nbsp; &nbsp; &nbsp; &nbsp;</th>
<th> ราคาพลาสติก</th>
<td><input <?php echo $ck_PT; ?> type="text" class="form-control" style="width:100px; text-align: right;" id="pur_plastic_price_box" name="pur_plastic_price_box" maxlength="4" value="<?php echo number_format($pur_plastic_price,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;บาท&nbsp; &nbsp; &nbsp; &nbsp;</th>

<th>&nbsp;&nbsp;[ <?php echo $pur_checkP; ?> ] &nbsp; &nbsp; &nbsp;</th>





</tr>

</tbody>
</table>
     </div>

<!-- แก้ -->

 <!-- 3  1 เคลือบผิวหน้าแบบ จนท จัดซื้อ-->    
 <p></p>
                        <div class="row">

                            <table  data-toggle="table" data-striped="true">
                        <thead>
                        <th>3. เคลือบผิวหน้าแบบ 1&nbsp;</th>
                        <th> <input name="pur_frontType1_box" id="pur_frontType1_box" type="text" class="form-control"  style="width:120px;"  value="<?php echo $exa_3front1_type; ?>" readonly></th>

                         <th>&nbsp;กว้าง</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front1_width_box" name="pur_3front1_width_box" placeholder="" value="<?php echo $exa_3front1_width; ?>" ></th>
                          <th>&nbsp;ยาว</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front1_lenght_box" name="pur_3front1_lenght_box" placeholder="" value="<?php echo $exa_3front1_lenght; ?>" ></th>

                            
                                 <th>&nbsp;&nbsp;&nbsp;&nbsp;ราคา</th>
                        <th> <input <?php echo $dis_price_front_box1; ?> name="pur_frontType1_price_box" id="pur_frontType1_price_box" type="text" class="form-control"  style="width:100px; text-align: right;"  value="<?php echo $exa_3front1_price; ?>" OnChange="JavaScript:chkNum3(this)"></th>

                        
                                
                              <!-- จบ เคลื่อบเผิวหน้าแบบที่ 1   -->   
                            </thead>
                            </table> 
                        </div>
                              
                          <div class="row">

                            <table  data-toggle="table" data-striped="true">     
                        <thead>      
                              <!-- เคลื่อบเผิวหน้าแบบที่ 2   -->     
                                
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 2&nbsp;</th>
                        <th> <input name="pur_frontType2_box" id="pur_frontType2_box" type="text" class="form-control"  style="width:120px;"  value="<?php echo $exa_3front2_type; ?>" readonly></th>

                        <th>&nbsp;กว้าง</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front2_width_box" name="pur_3front2_width_box" placeholder="" value="<?php echo $exa_3front2_width; ?>" ></th>
                          <th>&nbsp;ยาว</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front1_lenght_box" name="pur_3front1_lenght_box" placeholder="" value="<?php echo $exa_3front2_lenght; ?>" ></th>

                                
                                
                                  <th>&nbsp;&nbsp;&nbsp;&nbsp;ราคา</th>
                        <th> <input <?php echo $dis_price_front_box2; ?> name="pur_frontType2_price_box" id="pur_frontType2_price_box" type="text" class="form-control"  style="width:100px; text-align: right;"  value="<?php echo $exa_3front2_price; ?>" OnChange="JavaScript:chkNum3(this)"></th>

                        
                                
                                <!-- จบ เคลื่อบเผิวหน้าแบบที่ 2   -->   
                                 
                                
                         </thead>
                            </table> 
                        </div>

                        <!-- End 3 1   -->  
                        
                        <div class="row">

                            <table  data-toggle="table" data-striped="true">     
                        <thead> 
                            
                        
                        <!-- 3  แถว 2 -->   
                            <div class="row">

                            <table  data-toggle="table" data-striped="true">
                        <thead>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 3&nbsp;</th>
                        <th> <input name="pur_frontType3_box" id="pur_frontType3_box" type="text" class="form-control"  style="width:120px;"  value="<?php echo $exa_3front3_type; ?>" readonly></th>

                         <th>&nbsp;กว้าง</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front3_width_box" name="pur_3front3_width_box" placeholder="" value="<?php echo $exa_3front3_width; ?>" ></th>
                          <th>&nbsp;ยาว</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front3_lenght_box" name="pur_3front3_lenght_box" placeholder="" value="<?php echo $exa_3front3_lenght; ?>" ></th>

                           
                            
                                 <th>&nbsp;&nbsp;&nbsp;&nbsp;ราคา</th>
                        <th> <input <?php echo $dis_price_front_box3; ?> name="pur_frontType3_price_box" id="pur_frontType3_price_box" type="text" class="form-control"  style="width:100px; text-align: right;"  value="<?php echo $exa_3front3_price; ?>" OnChange="JavaScript:chkNum3(this)"></th>

                         </thead>
                            </table> 
                        </div>
                                
                              <!-- จบ เคลื่อบเผิวหน้าแบบที่ 3   -->   
                              
                              <!-- เคลื่อบเผิวหน้าแบบที่ 4   -->    
                              
                       <div class="row">

                            <table  data-toggle="table" data-striped="true">     
                        <thead> 
                                
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 4&nbsp;</th>
                        <th> <input name="pur_frontType4_box" id="pur_frontType4_box" type="text" class="form-control"  style="width:120px;"  value="<?php echo $exa_3front4_type; ?>" readonly></th>

                         <th>&nbsp;กว้าง</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front4_width_box" name="pur_3front4_width_box" placeholder="" value="<?php echo $exa_3front4_width; ?>" ></th>
                          <th>&nbsp;ยาว</th>
                        <th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_3front4_lenght_box " name="pur_3front4_lenght_box " placeholder="" value="<?php echo $exa_3front4_lenght; ?>" ></th>

                                
                                 
                                  <th>&nbsp;&nbsp;&nbsp;&nbsp;ราคา</th>
                        <th> <input <?php echo $dis_price_front_box4; ?> name="pur_frontType4_price_box" id="pur_frontType4_price_box" type="text" class="form-control"  style="width:100px; text-align: right;"  value="<?php echo $exa_3front4_price; ?>" OnChange="JavaScript:chkNum3(this)"></th>

                        
                                
                                <!-- จบ เคลื่อบเผิวหน้าแบบที่ 4   -->   
                                 
                                
                        </thead>
                       
                  

                            </table>


                        </div>

                        <!-- End 3  แถว 2 -->    

<p>
<hr>
    <!-- 4.  ลูกฟูก หน้า จนท จัดซื้อ edit 12-07-2017 --->
    
    <div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>4.  ลูกฟูก</th>
<th><input  <?php echo $ck_LF;  ?>  type="text" class="form-control"  style="width:60px; text-align: right;" id="factor_lf_box" name="factor_lf_box" placeholder="" value="<?php echo $man_factor_lf; ?>" ></th>
<th> &nbsp; ราคาต่อตารางฟุต</th>
<th>&nbsp; &nbsp; ขนาด กว้าง</th>
<th><input disabled  type="text" class="form-control"  style="width:60px; text-align: right;" id="pur_4LF_width_box" name="pur_4LF_width_box" placeholder="" value="<?php echo $exa_4LF_width; ?>" ></th>

<th>&nbsp; &nbsp; ยาว</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="pur_4LF_lenght_box" name="pur_4LF_lenght_box" placeholder="" value="<?php echo $exa_4LF_lenght; ?>" ></th>
<th>&nbsp; &nbsp; จำนวน&nbsp;</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="pur_4LF_layer_box" name="pur_4LF_layer_box" placeholder="" value="<?php echo $exa_4LF_layer; ?>"  maxlength="1" onkeydown="JavaScript: CheckNum1_5(this)"></th>

<th>&nbsp;  ชั้น</th>
<th>&nbsp; &nbsp; ชนิดของลูกฟูก&nbsp;</th>
<th><input disabled type="text" class="form-control" style="width:220px; text-align: right;" id="pur_4LF_type_box" name="pur_4LF_type_box" placeholder="" value="<?php echo $sales_4LF_type; ?>"  ></th>


</thead>
    </table>
    
</div>
    
    <!-- end 4.  ลูกฟูก หน้า จนท จัดซื้อ edit 12-07-2017 --->
 
<hr>
        <!--  13. ค่าบล็อคเค แก้ -->

<div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>10. จำนวน</th>
<td><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="pur_price_plate_box" name="pur_price_plate_box" value="<?php echo $exa_printAmont; ?>" placeholder="" maxlength="1" OnChange="JavaScript:chkNum1(this)"></td>
<th>&nbsp;&nbsp;เพลท</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;11. &nbsp;  แบบปั้ม</th>
<td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePtype_box" name="pur_pricePtype_box" value="<?php echo $pur_lay3; ?>" placeholder="" maxlength="1" OnChange="JavaScript:chkNum1(this)"></td>

<th>&nbsp; &nbsp;&nbsp;ค่าแบบปั้ม&nbsp; </th>
<td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePtype_box2" name="pur_pricePtype_box2" value="<?php echo number_format(1100*$pur_lay3,2); ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma2(this)"></td>

<th>&nbsp; &nbsp;&nbsp;11.1 ค่ากระทุ้ง&nbsp; </th>
<td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_Kratung_price_box" name="pur_Kratung_price_box" value="<?php echo $exa_Kratung_price; ?>" ></td>



</thead>
    </table>
    
</div>
     
        <hr>
      
       
       
     
        
         <div class = "row">
                          
                          <div class="col-md-12">

                        <table data-toggle="table" data-striped="true">
                        <thead>
                        <tr>
                        <th></th>
                        <th>12.</th>
                        <th>ปั้มนูน</th>
                        <th>&nbsp;รอบ1 ก.</th>
                        <th><input  disabled id="R1_width" name="R1_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R1A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  disabled id="R1_lenght" name="R1_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R1Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp; &nbsp;&nbsp;ค่าบล็อคปั้มนูน&nbsp; </th>
                        <th><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePN1_box" name="pur_pricePN1_box" value="<?php if($exa_PN_R1A ==0 || $exa_PN_R1Y==0) { echo '0'; }else { echo number_format(((($exa_PN_R1A+1)*($exa_PN_R1Y+1)*$pur_lay3*30)+2300),2);} ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

                          <!-- ยกข้อ 12 2 ขึ้นมา  -->
                          
                        <th>&nbsp;&nbsp;&nbsp;รอบ2 ก.</th>
                        <th><input  disabled id="R2_width" name="R2_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R2A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  disabled id="R2_lenght" name="R2_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R2Y,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;ค่าบล็อคปั้มนูน&nbsp; </th>
                        <th><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePN2_box" name="pur_pricePN2_box" value="<?php if($exa_PN_R2A ==0 || $exa_PN_R2Y==0) { echo '0'; }else { echo number_format(((($exa_PN_R2A+1)*($exa_PN_R2Y+1)*$pur_lay3*30)+2300),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

                        
                       
                        
                        </tr>
                        
                        </thead>
      

                        <tbody>
                    
                       
                        
                        <tr>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <th>&nbsp;รอบ3 ก.</th>
                        <td><input  disabled id="R3_width" name="R3_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R3A,2); ?>" placeholder="" ></td>
                        <th>&nbsp;&nbsp;ย.</th>
                        <td><input  disabled id="R3_lenght" name="R3_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_PN_R3Y,2); ?>" placeholder="" ></td>
                        <th>&nbsp; &nbsp;&nbsp;ค่าบล็อคปั้มนูน&nbsp; </th>
                        <td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePN3_box" name="pur_pricePN3_box" value="<?php if($exa_PN_R3A ==0 || $exa_PN_R3Y==0) { echo '0'; }else { echo number_format(((($exa_PN_R3A+1)*($exa_PN_R3Y+1)*$pur_lay3*30)+2300),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                       <td></td>
                       <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                                          
                        </tr>
                       
                     
                        </tbody>
                        </table>

                          </div>
                          
                       

                        </div>
        
        <!--   สิ้นสุด  12. new -->
        
     
       <hr style="color:#99CC99"></hr>  
    
 

<!-- 13 new  -->

 <div class = "row">
                          
                          <div class="col-md-12">

                        <table data-toggle="table" data-striped="true">
                        <thead>
                        <tr>
                        <th></th>
                        <th>13.</th>
                        <th>ปั้มเค</th>
                        <th>&nbsp;รอบ1 ก.&nbsp;</th>
                        <th><input   disabled id="13R1_width" name="13R1_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R1A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  disabled id="13R1_lenght" name="13R1_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R1AY,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <th><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK1_box" name="pur_pricePumK1_box" value="<?php if($exa_R1A ==0 || $exa_R1AY==0) { echo '0'; }else { echo number_format((($exa_R1A+1)*($exa_R1AY+1)*$pur_lay3*15),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></th>

                           <td></td>
                        <td></td>
                        <th> </th>
                        <th>&nbsp;&nbsp;รอบ2 ก.</th>
                        <th><input  disabled id="13R2_width" name="13R2_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R2A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input  disabled id="13R2_lenght" name="13R2_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R2Y,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK2_box" name="pur_pricePumK2_box" value="<?php if($exa_R2A ==0 || $exa_R2Y==0) { echo '0'; }else { echo number_format((($exa_R2A+1)*($exa_R2AY+1)*$pur_lay3*15),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>

                        
                        
                        
                        </tr>
                        
                        </thead>
      

                        <tbody>
                      
                       
                        
                        <tr>
                        <td></td>
                        <th></th>
                        <th> </th>
                        <th>&nbsp;รอบ3 ก.</td>
                        <th><input  disabled id="13R3_width" name="13R3_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R3A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input  disabled id="13R3_lenght" name="13R3_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R3Y,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input  disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK3_box" name="pur_pricePumK3_box" value="<?php if($exa_R3A ==0 || $exa_R3Y==0) { echo '0'; }else { echo number_format((($exa_R3A+1)*($exa_R3AY+1)*$pur_lay3*15),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                
                        <td></td>
                        <th></th>
                        <th> </th>
                        <th>&nbsp;&nbsp;รอบ4 ก.</td>
                        <th><input  disabled id="13R3_width" name="13R3_width" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R4A,2); ?>" placeholder="" ></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input  disabled id="13R3_lenght" name="13R3_lenght" type="text" class="form-control" style="width:80px; text-align: right;"  value="<?php echo number_format($exa_R4AY,2); ?>" placeholder="" ></th>
                        <th>&nbsp; &nbsp;&nbsp;&nbsp;ค่าบล็อคปั้มเค&nbsp; </th>
                        <td><input   disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_pricePumK4_box" name="pur_pricePumK4_box" value="<?php if($exa_R4A ==0 || $exa_R4AY==0) { echo '0'; }else { echo number_format((($exa_R4A+1)*($exa_R4AY+1)*$pur_lay3*15),2); } ?>" placeholder="" OnChange="JavaScript:chkNum(this)"></td>
                
                        
                        </tr>
                      
                    
                        
                     
                        </tbody>
                        </table>

                          </div>
                          
                       

                        </div>
     
<!-- 13 new จบ -->

<hr>

<!-- 14 new -->

<div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>

<th>&nbsp; &nbsp;&nbsp; &nbsp;14. &nbsp; &nbsp;<input type="checkbox" name = "pur_priceAlu_check" id="pur_priceAlu_check" value="ค่าอลูมิเนียม" <?php echo $pur_alu_check; ?>>&nbsp; ค่าอลูมิเนียม</th>
<td><input disabled type="text" class="form-control" style="width:100px; text-align: right;" id="pur_priceAlu_box" name="pur_priceAlu_box" value="<?php echo $pur_priceAlu; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma2(this)"></td>


<th>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </th>
<th>B ลูกฟูก</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;ราคา</th>
<td><input type="text" class="form-control" style="width:100px; text-align: right;" id="pur_Bluk_box" name="pur_Bluk_box" value="<?php echo $pur_Bluk; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;&nbsp;/ กล่อง</th>

</thead>
    </table>
    
</div>


<hr>
     <div class="row">
                               <div class="col-md-8">
                           <label for="pur_job_note_box">ข้อความ</label> 
                        
                            <textarea class="form-control" rows="5" id="pur_job_note_box" name="pur_job_note_box" ><?php echo $pur_job_note; ?></textarea> 
                        </div>
                          
                      </div>

<hr>

     <label for="purc_file_purc_box">แนบเอกสารเสนอราคา</label>
              <div class="row">
          
     <div class="col-md-5">      
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>1.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file1_box" name="pur_file1_box" value="<?php echo $pur_fileAtt1; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"  id="del_pur_file1_icon"  name="del_pur_file1_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file1_purc_box" type="file" id="purc_file1_purc_box" ></td>
</thead>
    </table>
     </div>
      
       <div class="col-md-5">      
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>5.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file5_box" name="pur_file5_box" value="<?php echo $pur_fileAtt5; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"  id="del_pur_file5_icon"  name="del_pur_file5_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file5_purc_box" type="file" id="purc_file5_purc_box" ></td>
</thead>
    </table>
     </div>
     
      </div>

     <div class="row">
        <div class="col-md-5"> 
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>2.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file2_box" name="pur_file2_box" value="<?php echo $pur_fileAtt2; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"id="del_pur_file2_icon"  name="del_pur_file2_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file2_purc_box" type="file" id="purc_file2_purc_box" ></td>
</thead>
    </table>
        </div>
      <div class="col-md-5"> 
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>6.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file6_box" name="pur_file6_box" value="<?php echo $pur_fileAtt6; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"id="del_pur_file6_icon"  name="del_pur_file6_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file6_purc_box" type="file" id="purc_file6_purc_box" ></td>
</thead>
    </table>
        </div>
     
     
     </div>

     
     <div class="row">
         <div class="col-md-5">   
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>3.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file3_box" name="pur_file3_box" value="<?php echo $pur_fileAtt3; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_pur_file3_icon"  name="del_pur_file3_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file3_purc_box" type="file" id="purc_file3_purc_box" ></td>
</thead>
    </table>
         </div>

    
      <div class="col-md-5">   
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>7.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file7_box" name="pur_file7_box" value="<?php echo $pur_fileAtt7; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_pur_file7_icon"  name="del_pur_file7_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file7_purc_box" type="file" id="purc_file7_purc_box" ></td>
</thead>
    </table>
         </div>

</div>
 
     
     
<div class="row">
    <div class="col-md-5">    
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>4.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file4_box" name="pur_file4_box" value="<?php echo $pur_fileAtt4; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_pur_file4_icon"  name="del_pur_file4_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file4_purc_box" type="file" id="purc_file4_purc_box" ></td>
</thead>
    </table>
    </div>

<div class="col-md-5">    
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>8.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="pur_file8_box" name="pur_file8_box" value="<?php echo $pur_fileAtt8; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_pur_file8_icon"  name="del_pur_file8_icon"></span>&nbsp; &nbsp;</td>
<td><input name="purc_file8_purc_box" type="file" id="purc_file8_purc_box" ></td>
</thead>
    </table>
    </div>

</div>     
  <p class="help-block">ขนาดของเอกสารไม่เกิน 2 MB</p>    
<hr>




<button  id="submit_edit" name="submit_edit" type="submit" class="btn btn-primary" <?php echo $disable_purc;  ?> >ส่งข้อมูล จนท. จัดซื้อ</button>  

   
   </form>

</div>

    <!--  สิ้นสุด tab 1 กระดาษ-->
    
    


<!--  สิ้นสุด tab 2 งานพิมพ์ / SP-->
    
   
<!--  เริ่ม tab 3 เคลือบ / ลูกฟูก-->


 

  <div id="menu1" class="<?php echo $active_tab2;?>">

  <form class="form" name="exa_edit" id="exa_edit" action ="exa_jobs_edit.php" method="post" enctype="multipart/form-data" novalidate>   
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
      

      <p>  
    <!-- ยกมาจาก จหท. จัดซื้อ--> 
   <div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th></th>


<th>Size กระดาษ &nbsp; &nbsp;กว้าง&nbsp;<font color="red">*</font></th>
<th><input  name="pur_size_width_box" id="pur_size_width_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="กว้าง" maxlength="3" style="text-align: right" value="<?php echo $pur_size_width; ?>" OnChange="JavaScript:chkNum2(this)" smk-text="กรุณากรอกความกว้าง" required></th>
<th>&nbsp; &nbsp;ยาว&nbsp;<font color="red">*</font></th>
<th><input  name="pur_size_length_box" id="pur_size_length_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="ยาว" maxlength="3" style="text-align: right" value="<?php echo $pur_size_length; ?>" OnChange="JavaScript:chkNum2(this)" smk-text="กรุณากรอกความยาว" required></th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
<th>การเลย์&nbsp;<font color="red">*</font>&nbsp; &nbsp;</th>
<th><input name="lay_1" id="lay_1" style="width:50px; text-align: right;" type="text" class="form-control" placeholder="" style="text-align: center" value="1" readonly></th>
<th>&nbsp; &nbsp;-&nbsp; &nbsp;</th>
<th><input name="lay_2" id="lay_2" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay2; ?>" OnChange="JavaScript:chkNum1(this)" smk-text="กรุณากรอกค่าการเลย์" required></th>
<th>&nbsp; &nbsp;-&nbsp; &nbsp;</th>
<th><input name="lay_3" id="lay_3" style="width:50px; text-align: right;" maxlength="2" type="text" class="form-control" placeholder="" style="text-align: right" value="<?php echo $pur_lay3; ?>" OnChange="JavaScript:chkNum1(this)" smk-text="กรุณากรอกค่าการเลย์" required></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</thead>
    </table>
    
</div>
   
  <!-- ยกมาจาก จหท. จัดซื้อ--> 
  <hr>
  <!-- แก้ 2 งานพิมพ์-->
   <div class="row">
     <table data-toggle="table" data-striped="true">   
     <tbody>    
    <tr>

<th>2. งานพิมพ์ จำนวน&nbsp;  </th>

<td><input disabled type="text" class="form-control" id="exa_printAmont_box" name="exa_printAmont_box" style="width:60px; text-align: right;" maxlength="1" value="<?php echo $exa_printAmont; ?>" placeholder="" OnChange="JavaScript:chkNum_z(this)"></td>
<th>&nbsp; &nbsp; สี</th>
<td><input type="text" class="form-control" id="exa_color_box" name="exa_color_box" style="width:600px;" value="<?php echo $exa_color; ?>" placeholder="" > </td>



</tr>

</tbody>
</table>
     </div>
      
      <p>

<!-- แก้ 2 งานพิมพ์ -->
   
                 
     

   
<hr>

<!-- 3   -->    

<div class="row">
  
    <table  data-toggle="table" data-striped="true">
<thead>
<th>3. เคลือบผิวหน้าแบบ</th>
<th><select disabled class="form-control" id="drop3_1" name="drop3_1"  onchange="run_drop311()">
  <option value="-" <?php echo $check10; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>
  <option value="อาบเงา" <?php echo $check11; ?> >อาบเงา</option>
  <option value="อาบด้าน" <?php echo $check12; ?>>อาบด้าน</option>
  <option value="ขัดเงา เว้นลิ้น" <?php echo $check13; ?> >ขัดเงา เว้นลิ้น</option>
  <option value="UV เว้นลิ้น" <?php echo $check14; ?>>UV เว้นลิ้น</option>
  <option value="OPP เงา" <?php echo $check15; ?>>OPP เงา</option>
  <option value="OOP ด้าน" <?php echo $check16; ?>>OOP ด้าน</option>
  <option value="SPORT UV"<?php echo $check17; ?>>SPORT UV</option>
  <option value="อื่น ๆ"<?php echo $check18; ?>>อื่น ๆ</option>
  
    
        </select></th>

<th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<th><input <?php echo $dis_box1_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front1_width_box" name="exa_3front1_width_box" placeholder="" maxlength="5"  value="<?php echo $exa_3front1_width; ?>" OnChange="JavaScript:chkNum2(this)"></th>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<th><input <?php echo $dis_box1_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front1_lenght_box" name="exa_3front1_lenght_box" placeholder="" maxlength="5" value="<?php echo $exa_3front1_lenght; ?>" OnChange="JavaScript:chkNum2(this)"></th>



</thead>

<tbody>

<th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ</th>
<td><select disabled class="form-control" id="drop3_2" name="drop3_2"  onchange="run_drop312()">
   <option value="-" <?php echo $check20; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>   
   <option value="อาบเงา" <?php echo $check21; ?> >อาบเงา</option>
  <option value="อาบด้าน" <?php echo $check22; ?>>อาบด้าน</option>
  <option value="ขัดเงา เว้นลิ้น" <?php echo $check23; ?> >ขัดเงา เว้นลิ้น</option>
  <option value="UV เว้นลิ้น" <?php echo $check24; ?>>UV เว้นลิ้น</option>
  <option value="OPP เงา" <?php echo $check25; ?>>OPP เงา</option>
  <option value="OOP ด้าน" <?php echo $check26; ?>>OOP ด้าน</option>
  <option value="SPORT UV"<?php echo $check27; ?>>SPORT UV</option>
  <option value="อื่น ๆ"<?php echo $check28; ?>>อื่น ๆ</option>
  
    
        </select></td>
        
        <th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input <?php echo $dis_box2_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front2_width_box" name="exa_3front2_width_box" placeholder=""  maxlength="5"  value="<?php echo $exa_3front2_width; ?>" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input <?php echo $dis_box2_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front2_lenght_box" name="exa_3front2_lenght_box" placeholder=""  maxlength="5" value="<?php echo $exa_3front2_lenght; ?>" OnChange="JavaScript:chkNum2(this)"></td>





<tr>

 <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ</th>
<td><select disabled class="form-control" id="drop3_3" name="drop3_3"  onchange="run_drop313()">
   <option value="-" <?php echo $check30; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>    
   <option value="อาบเงา" <?php echo $check31; ?> >อาบเงา</option>
  <option value="อาบด้าน" <?php echo $check32; ?>>อาบด้าน</option>
  <option value="ขัดเงา เว้นลิ้น" <?php echo $check33; ?> >ขัดเงา เว้นลิ้น</option>
  <option value="UV เว้นลิ้น" <?php echo $check34; ?>>UV เว้นลิ้น</option>
  <option value="OPP เงา" <?php echo $check35; ?>>OPP เงา</option>
  <option value="OOP ด้าน" <?php echo $check36; ?>>OOP ด้าน</option>
  <option value="SPORT UV"<?php echo $check37; ?>>SPORT UV</option>
  <option value="อื่น ๆ"<?php echo $check38; ?>>อื่น ๆ</option>
  
    
        </select></td>
        
        <th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input <?php echo $dis_box3_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front3_width_box" name="exa_3front3_width_box" placeholder=""  maxlength="5"  value="<?php echo $exa_3front3_width; ?>" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input <?php echo $dis_box3_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front3_lenght_box" name="exa_3front3_lenght_box" placeholder=""  maxlength="5" value="<?php echo $exa_3front3_lenght; ?>" OnChange="JavaScript:chkNum2(this)"></td>




</tr>
<th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ</th>
<td><select disabled class="form-control" id="drop3_4" name="drop3_4"  onchange="run_drop314()">
   <option value="-" <?php echo $check40; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>    
  <option value="อาบเงา" <?php echo $check41; ?> >อาบเงา</option>
  <option value="อาบด้าน" <?php echo $check42; ?>>อาบด้าน</option>
  <option value="ขัดเงา เว้นลิ้น" <?php echo $check43; ?> >ขัดเงา เว้นลิ้น</option>
  <option value="UV เว้นลิ้น" <?php echo $check44; ?>>UV เว้นลิ้น</option>
  <option value="OPP เงา" <?php echo $check45; ?>>OPP เงา</option>
  <option value="OOP ด้าน" <?php echo $check46; ?>>OOP ด้าน</option>
  <option value="SPORT UV"<?php echo $check47; ?>>SPORT UV</option>
  <option value="อื่น ๆ"<?php echo $check48; ?>>อื่น ๆ</option>
  
    
        </select></td>
        
 <th>&nbsp; &nbsp;&nbsp;ขนาด</th>
<th>กว้าง</th>
<td><input <?php echo $dis_box4_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front4_width_box" name="exa_3front4_width_box" placeholder=""  maxlength="5" value="<?php echo $exa_3front4_width; ?>" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp; &nbsp;&nbsp;ยาว</th>
<td><input <?php echo $dis_box4_w_l; ?> type="text" class="form-control" style="width:70px; text-align: right;" id="exa_3front4_lenght_box" name="exa_3front4_lenght_box" placeholder=""  maxlength="5" value="<?php echo $exa_3front4_lenght; ?>" OnChange="JavaScript:chkNum2(this)"></td>

       


    </tbody>
    
    </table>
    
    
</div>

<!-- End 3   -->  
<hr>

    
<!--  4. B ลูกฟูก  --> 



<div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>4.  ลูกฟูก</th>
<th>&nbsp; &nbsp; ขนาด กว้าง</th>
<th><input <?php echo $ck_LF;  ?> type="text" class="form-control"  style="width:60px; text-align: right;" id="exa_4LF_width_box" name="exa_4LF_width_box" placeholder="" value="<?php echo $exa_4LF_width; ?>" ></th>
<th>&nbsp; &nbsp; ยาว</th>
<th><input <?php echo $ck_LF;  ?> type="text" class="form-control" style="width:60px; text-align: right;" id="exa_4LF_lenght_box" name="exa_4LF_lenght_box" placeholder="" value="<?php echo $exa_4LF_lenght; ?>" ></th>
<th>&nbsp; &nbsp; จำนวน&nbsp;</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_4LF_layer_box" name="exa_4LF_layer_box" placeholder="" value="<?php echo $exa_4LF_layer; ?>"  maxlength="1" onkeydown="JavaScript: CheckNum1_5(this)"></th>

<th>&nbsp;  ชั้น</th>
<th>&nbsp; &nbsp; ชนิดของลูกฟูก&nbsp;</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_4LF_type_box" name="exa_4LF_type_box" placeholder="" value="<?php echo $sales_4LF_type; ?>"  ></th>



<th>&nbsp; &nbsp; &nbsp; &nbsp; LAMINATE ขนาด กว้าง</th>
<th><input <?php echo $ck_LF; ?>  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_lami_width_box" name="exa_lami_width_box" placeholder="" value="<?php echo $exa_lami_width; ?>" ></th>
<th>&nbsp; &nbsp; ยาว</th>
<th><input  <?php echo $ck_LF; ?>  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_lami_lenght_box" name="exa_lami_lenght_box" placeholder="" value="<?php echo $exa_lami_lenght; ?>" ></th>

</thead>
    </table>
    
</div>

<hr>

<!--   ข้อ 5 -->
    
    <div class = "row">

<table data-toggle="table" data-striped="true">
<thead>

<th>5. &nbsp; &nbsp;</th>
<th>  ปั้มเค </th>
<th>&nbsp; &nbsp;รอบ 1 ก.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R1A_box" name="exa_R1A_box" value="<?php echo number_format($exa_R1A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
<th>&nbsp;ย.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R1AY_box" name="exa_R1AY_box" value="<?php echo number_format($exa_R1AY,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>

<th>&nbsp; &nbsp;รอบ 2 ก.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R2A_box" name="exa_R2A_box" value="<?php echo number_format($exa_R2A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
<th>&nbsp;ย.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R2Y_box"  name="exa_R2Y_box" value="<?php echo number_format($exa_R2Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>

<th>&nbsp; &nbsp;รอบ 3 ก.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R3A_box" name="exa_R3A_box" value="<?php echo number_format($exa_R3A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
<th>&nbsp;ย.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R3Y_box" name="exa_R3Y_box" value="<?php echo number_format($exa_R3Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>


<th>&nbsp; &nbsp;รอบ 4 ก.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R4A_box" name="exa_R4A_box" value="<?php echo number_format($exa_R4A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
<th>&nbsp;ย.</th>
<th><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_R4AY_box" name="exa_R4AY_box" value="<?php echo number_format($exa_R4AY,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>

</thead>

</table>
</div>



<div class = "row">

<table data-toggle="table" data-striped="true">
<thead>
<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
 <th>   ปั้มนูน&nbsp;</th>                             
<th><input disabled name="exa_pumNoon_box" value="<?php echo $exa_PN_amount; ?>" id="exa_pumNoon_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                   
<th>&nbsp; &nbsp;รอบ&nbsp; &nbsp;&nbsp; &nbsp;</th>

<th>  ขนาดบล๊อคปั้มนูน </th>
<th>&nbsp;&nbsp;รอบ1 ก</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R1A_box" name="exa_PN_R1A_box" value="<?php echo number_format($exa_PN_R1A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;ย.</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R1Y_box" name="exa_PN_R1Y_box" value="<?php echo number_format($exa_PN_R1Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ2 ก.</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R2A_box" name="exa_PN_R2A_box" value="<?php echo number_format($exa_PN_R2A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;ย.</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R2Y_box" name="exa_PN_R2Y_box" value="<?php echo number_format($exa_PN_R2Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)" ></td>
<th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ3 ก.</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R3A_box" name="exa_PN_R3A_box" value="<?php echo number_format($exa_PN_R3A,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>
<th>&nbsp;ย.</th>
<td><input  type="text" class="form-control" style="width:60px; text-align: right;" id="exa_PN_R3Y_box" name="exa_PN_R3Y_box" value="<?php echo number_format($exa_PN_R3Y,2); ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></td>




<th>&nbsp; &nbsp;&nbsp; &nbsp;  ปั้มขาด </th>
<th>&nbsp;จำนวน</th>
<td><input disabled type="text" class="form-control" style="width:60px; text-align: right;" id="exa_pumY_amount_box" name="exa_pumY_amount_box" value="<?php echo $exa_PY_amount; ?>" placeholder="" maxlength="1" OnChange="JavaScript:chkNum1(this)"></td>
<th>&nbsp;รอบ</th>


</thead>

</table>


</div>
    

     <!--   จบ ข้อ 5 -->
     <p>
     
     <hr>    
      
     <!--  13. ค่าบล็อคเค แก้ -->


     
     <!--  จบ 13. ค่าบล็อคเค แก้ -->
     <p>
        <!-- 6. ติดกาว แก้ -->  

<div class="row">
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>6. ติดกาว</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name = "exa_check_PM" id="exa_check_PM" value="ปะมือ" <?php echo $exa_pm_temp; ?> > ปะมือ</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name = "exa_check_PK" id="exa_check_PK" value="ปะเครื่อง" <?php echo $exa_pk_temp; ?> > ปะเครื่อง</th>
<th>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</th>

<th>B ลูกฟูก</th>

<th>&nbsp;&nbsp;บรรจุ ลังละ &nbsp;&nbsp;</th>
<td><input type="text" class="form-control" style="width:60px; text-align: right;" id="exa_bluk_pack_box" name="exa_bluk_pack_box" value="<?php echo $exa_bluk_pack; ?>" placeholder="" maxlength="4" OnChange="JavaScript:chkNum_addcomma(this)"></td>
   
<th>&nbsp;&nbsp;กล่อง &nbsp;&nbsp;</th>

<th>&nbsp;&nbsp;11.1 ค่ากระทุ้ง &nbsp;&nbsp;</th>
<td><input type="text" class="form-control" style="width:60px; text-align: right;" id="exa_Kratung_price_box" name="exa_Kratung_price_box" value="<?php echo $exa_Kratung_price; ?>" placeholder="" OnChange="JavaScript:chkNum_Kratung(this)"></td>
  

</thead>
 
    </table>
    
</div>
     
     <!--  จบ 6. ติดกาว แก้ -->     
     <hr>      
       
    <!-- ข้อความ จนท ตัวอย่าง -->  

                     <div class="row">
                            <div class="col-md-8">
                                    <label for="exa_job_note_box">ข้อความ</label> 
                                    <textarea class="form-control" rows="5" id="exa_job_note_box" name="exa_job_note_box" ><?php echo $exa_job_note; ?></textarea> 
                            </div>
                          
                      </div>
     
     <!--  จบ ข้อความ จนท ตัวอย่าง -->   
 
  
     
     <hr>
    

     <label for="purc_file_purc_box">แนบเอกสารเสนอราคา</label>
   
        
      <div class="row">
          
     <div class="col-md-5">      
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>1.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file1_box" name="exa_file1_box" value="<?php echo $exa_fileAtt1; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"  id="del_exa_file1_icon"  name="del_exa_file1_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file1_purc_box" type="file" id="exa_file1_purc_box" ></td>
</thead>
    </table>
     </div>
      
       <div class="col-md-5">      
     <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>5.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file5_box" name="exa_file5_box" value="<?php echo $exa_fileAtt5; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"  id="del_exa_file5_icon"  name="del_exa_file5_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file5_purc_box" type="file" id="exa_file5_purc_box" ></td>
</thead>
    </table>
     </div>
     
      </div>

     <div class="row">
        <div class="col-md-5"> 
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>2.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file2_box" name="exa_file2_box" value="<?php echo $exa_fileAtt2; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"id="del_exa_file2_icon"  name="del_exa_file2_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file2_purc_box" type="file" id="exa_file2_purc_box" ></td>
</thead>
    </table>
        </div>
      <div class="col-md-5"> 
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>6.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file6_box" name="exa_file6_box" value="<?php echo $exa_fileAtt6; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true"id="del_exa_file6_icon"  name="del_exa_file6_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file6_purc_box" type="file" id="exa_file6_purc_box" ></td>
</thead>
    </table>
        </div>
     
     
     </div>

     
     <div class="row">
         <div class="col-md-5">   
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>3.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file3_box" name="exa_file3_box" value="<?php echo $exa_fileAtt3; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_exa_file3_icon"  name="del_exa_file3_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file3_purc_box" type="file" id="exa_file3_purc_box" ></td>
</thead>
    </table>
         </div>

    
      <div class="col-md-5">   
         <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>7.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file7_box" name="exa_file7_box" value="<?php echo $exa_fileAtt7; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_exa_file7_icon"  name="del_exa_file7_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file7_purc_box" type="file" id="exa_file7_purc_box" ></td>
</thead>
    </table>
         </div>

</div>
 
     
     
<div class="row">
    <div class="col-md-5">    
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>4.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file4_box" name="exa_file4_box" value="<?php echo $exa_fileAtt4; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_exa_file4_icon"  name="del_exa_file4_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file4_purc_box" type="file" id="exa_file4_purc_box" ></td>
</thead>
    </table>
    </div>

<div class="col-md-5">    
    <table data-toggle="table" data-striped="true">
<thead>
<tr>
<th>8.</th>

<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file8_box" name="exa_file8_box" value="<?php echo $exa_fileAtt8; ?>" placeholder="" ></td>
<td><span class="glyphicon glyphicon-remove" aria-hidden="true" id="del_exa_file8_icon"  name="del_exa_file8_icon"></span>&nbsp; &nbsp;</td>
<td><input name="exa_file8_purc_box" type="file" id="exa_file8_purc_box" ></td>
</thead>
    </table>
    </div>





</div>     
     
     
     <p class="help-block">ขนาดของเอกสารไม่เกิน 2 MB</p>    
<hr>
        
   

    
     <button  id="exa_submit" name="exa_submit" type="submit" class="btn btn-primary" <?php echo $disable_exa; ?> >ส่งข้อมูล จนท. ตัวอย่าง</button>

  </form>
    
    
<!-- สิ้นสุด die cut -->  
          
       
   </div>
  
    <!-- จบ! Tab รายละเอียดงาน   -->
   
   
   
   
    
    
    
</div>   <!-- end tab conttent  -->
    
   
    
        </div>   <!--  end row tab -->
        
    
        </div>   <!-- end contrainner  -->
    
    
    
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
    
 
 
    
    <!--   script dropdown drop3_!  -->
    
   
                        
      
    <script>
         function run_drop311() {
             
                
        
        var element1 = document.getElementById('drop3_1').value;
           
                
                if(element1=='-'){
                    document.getElementById('exa_3front1_width_box').value="0";
                    document.getElementById('exa_3front1_lenght_box').value="0";
                    document.getElementById('exa_3front1_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front1_lenght_box').disabled = !this.checked;
                } else {
                 document.getElementById('exa_3front1_width_box').disabled = this.checked;
                 document.getElementById('exa_3front1_lenght_box').disabled = this.checked;   
                    
                }
                // CHECK อาบด้าน อาบเงา  3
                  if(element1=='อาบด้าน' || element1=='อาบเงา'){
                      
                    document.getElementById('exa_3front1_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front1_lenght_box').disabled = !this.checked;
                  }
                
                // จบการ check  อาบด้าน อาบเงา
                // 
               // check not same selected
               var element2 = document.getElementById('drop3_2').value;
               var element3 = document.getElementById('drop3_3').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element1==element2 ||element1==element3 || element1==element4 ){
                  
                      document.getElementById('drop3_1').value='-';
                      
                }
               // end check
                
                
         }
         
    
    </script>
    
    <script>
         function run_drop312() {
             var element2 = document.getElementById('drop3_2').value;
            
                
                if(element2=='-'){
                    document.getElementById('exa_3front2_width_box').value="0";
                    document.getElementById('exa_3front2_lenght_box').value="0";
                    document.getElementById('exa_3front2_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front2_lenght_box').disabled = !this.checked;
                    
                }else {
                    
                    document.getElementById('exa_3front2_width_box').disabled = this.checked;
                    document.getElementById('exa_3front2_lenght_box').disabled = this.checked;
                }
                
                 // CHECK อาบด้าน อาบเงา  3
                  if(element2=='อาบด้าน' || element2=='อาบเงา'){
                      
                    document.getElementById('exa_3front2_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front2_lenght_box').disabled = !this.checked;
                  }
                
                // จบการ check  อาบด้าน อาบเงา
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element3 = document.getElementById('drop3_3').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element2==element1 ||element2==element3 || element2==element4 ){
                  
                      document.getElementById('drop3_2').value='-';
                      
                }
               // end check
                
         }
    
    </script>
    
    <script>
         function run_drop313() {
             var element3 = document.getElementById('drop3_3').value;
            
                
                if(element3=='-'){
                    document.getElementById('exa_3front3_width_box').value="0";
                    document.getElementById('exa_3front3_lenght_box').value="0";
                    document.getElementById('exa_3front3_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front3_lenght_box').disabled = !this.checked;
                    
                }else {
                     document.getElementById('exa_3front3_width_box').disabled = this.checked;
                    document.getElementById('exa_3front3_lenght_box').disabled = this.checked;
                }
                
                // CHECK อาบด้าน อาบเงา  3
                  if(element3=='อาบด้าน' || element3=='อาบเงา'){
                      
                    document.getElementById('exa_3front3_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front3_lenght_box').disabled = !this.checked;
                  }
                
                // จบการ check  อาบด้าน อาบเงา
                
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element2 = document.getElementById('drop3_2').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element3==element1 ||element3==element2 || element3==element4 ){
                  
                      document.getElementById('drop3_3').value='-';
                      
                }
               // end check
         }
    
    </script>
    
    <script>
         function run_drop314() {
             var element4 = document.getElementById('drop3_4').value;
             
                
                if(element4=='-'){
                    document.getElementById('exa_3front4_width_box').value="0";
                    document.getElementById('exa_3front4_lenght_box').value="0";
                    document.getElementById('exa_3front4_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front4_lenght_box').disabled = !this.checked;
                    
                }else {
                     document.getElementById('exa_3front4_width_box').disabled = this.checked;
                    document.getElementById('exa_3front4_lenght_box').disabled = this.checked;
                    
                }
                
                // CHECK อาบด้าน อาบเงา  4
                  if(element4=='อาบด้าน' || element4=='อาบเงา'){
                      
                    document.getElementById('exa_3front4_width_box').disabled = !this.checked;
                    document.getElementById('exa_3front4_lenght_box').disabled = !this.checked;
                  }
                
                // จบการ check  อาบด้าน อาบเงา
                
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element2 = document.getElementById('drop3_2').value;
               var element3 = document.getElementById('drop3_3').value;
              
               if (element4==element1 ||element4==element2 || element4==element3 ){
                  
                      document.getElementById('drop3_4').value='-';
                      
                }
               // end check
                
                
         }
    
    </script>
    
    
    
    <!--  end script -->
    
    <!--  script หาค่าราคากระดาษ  -->

<script language="javascript" src="js/ajax.js"></script>
<script language="javascript">
function doajax(mydata){
    // กรอง ผู้ขาย กระดาษ
    
 
    
    
    
    // end กรอง ผู้ขาย กระดาษ
    
    
    
    var ajax1=createAjax(); 
    ajax1.onreadystatechange=function(){
        if(ajax1.readyState==4 && ajax1.status==200){
            // document.getElementById('myplace').innerHTML=ajax1.responseText;
            document.purc_edit.paper_price_box.value=ajax1.responseText;
          //  document.purc_edit.paper_price_edit.value=ajax1.responseText;
        }else{
            return false;
        }
    }
    ajax1.open("POST","paper_calc1.php",true);
    ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
  //  ajax1.send("paper_cat1="+$("#paper_cat").val());
    ajax1.send("paper_cat1="+$("#paper_cat").val()+"&paper_sellers1="+$("#paper_seller option:selected").text()+"&paper_band1="+$("#paper_band option:selected").text()+"&paper_gram1="+<?php echo $pur_thick_gram ?>+"&paper_size1="+$("#paper_size option:selected").text()+"&paper_type_option1="+$("#paper_type option:selected").text());

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

<!-- บันทึกรายละเอียดเกี่ยวกับงาน   -->



   

<!-- จบ บันทึกรายละเอียดเกี่ยวกับงาน   -->

<!-- แก้ไขรายละเอียดงาน พนักงานตัวอย่าง  -->

  <script>
            $( document ).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
                $("#pur_thick_gram_box").focus();
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $('#exa_edit').on("submit",function(e) {
                       
                        document.getElementById('exa_3front1_width_box').disabled = this.checked;
                        document.getElementById('exa_3front1_lenght_box').disabled = this.checked;
        
                        document.getElementById('exa_3front2_width_box').disabled = this.checked;
                        document.getElementById('exa_3front2_lenght_box').disabled = this.checked;
                        
                        document.getElementById('exa_3front3_width_box').disabled = this.checked;
                        document.getElementById('exa_3front3_lenght_box').disabled = this.checked;
                        
                        document.getElementById('exa_3front4_width_box').disabled = this.checked;
                        document.getElementById('exa_3front4_lenght_box').disabled = this.checked;
        
        
                        
                        
                        
                        
                        
                        document.getElementById('exa_4LF_layer_box').disabled = this.checked;
                        document.getElementById('exa_4LF_width_box').disabled = this.checked;
                        document.getElementById('exa_4LF_lenght_box').disabled = this.checked;
                        
                        document.getElementById('exa_lami_width_box').disabled = this.checked;
                        document.getElementById('exa_lami_lenght_box').disabled = this.checked;
                        
                        document.getElementById('exa_PN_R1A_box').disabled = this.checked;
                        document.getElementById('exa_PN_R1Y_box').disabled = this.checked;
                        document.getElementById('exa_PN_R2A_box').disabled = this.checked;
                        document.getElementById('exa_PN_R2Y_box').disabled = this.checked;
                        document.getElementById('exa_PN_R3A_box').disabled = this.checked;
                        document.getElementById('exa_PN_R3Y_box').disabled = this.checked;
                        
                        
                        
                         document.getElementById('exa_pumY_amount_box').disabled = this.checked;
                        
                        document.getElementById('drop3_1').disabled = this.checked;
                        document.getElementById('drop3_2').disabled = this.checked;
                        document.getElementById('drop3_3').disabled = this.checked;
                        document.getElementById('drop3_4').disabled = this.checked;
                        
                        document.getElementById('exa_printAmont_box').disabled = this.checked;
                        
                         document.getElementById('exa_R1A_box').disabled = this.checked;
                        document.getElementById('exa_R1AY_box').disabled = this.checked;
                        document.getElementById('exa_R2A_box').disabled = this.checked;
                        document.getElementById('exa_R2Y_box').disabled = this.checked;
                        document.getElementById('exa_R3A_box').disabled = this.checked;
                        document.getElementById('exa_R3Y_box').disabled = this.checked;
                        document.getElementById('exa_R4A_box').disabled = this.checked;
                        document.getElementById('exa_R4AY_box').disabled = this.checked;
                        
                        
                       
                       $.ajax({
                            url: 'exa_jobs_edit.php',
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
                              
                             //   $.post( "gmail.php",  $( "#form2" ).serialize() );
                            } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                        //    $("#purc_edit").smkClear();
                         //   $("#pur_thick_gram_box").focus();
                         
                         document.getElementById('drop3_1').disabled = !this.checked;
                        document.getElementById('drop3_2').disabled = !this.checked;
                        document.getElementById('drop3_3').disabled = !this.checked;
                        document.getElementById('drop3_4').disabled = !this.checked;
                         
                        });          
                        e.preventDefault();
               
               
			   
    
    
    
                     });
                
               
                
            });
    
    </script>

<!-- สิ้นสุดการแก้ไข พนักงานตัวอย่าง  -->





<!-- แก้ไขรายละเอียดงาน พนักงานจัดซื้อ  -->

 <script>
          $(document).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
                $("#pur_thick_gram_box").focus();
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $("#purc_edit").on("submit",function(e) {
                    
        
                        document.getElementById('pur_pricePtype_box').disabled = this.checked;
                        document.getElementById('pur_priceAlu_box').disabled = this.checked;
                        
                        document.getElementById('pur_pricePN1_box').disabled = this.checked;
                        document.getElementById('pur_pricePN2_box').disabled = this.checked;
                        document.getElementById('pur_pricePN3_box').disabled = this.checked;
                        
                        document.getElementById('pur_pricePumK1_box').disabled = this.checked;
                        document.getElementById('pur_pricePumK2_box').disabled = this.checked;
                        document.getElementById('pur_pricePumK3_box').disabled = this.checked;
                        document.getElementById('pur_pricePumK4_box').disabled = this.checked;
                        
                        document.getElementById('pur_price_plate_box').disabled = this.checked;
                        document.getElementById('pur_pricePtype_box2').disabled = this.checked;
                        
                        document.getElementById('pur_frontType1_price_box').disabled = this.checked;
                        document.getElementById('pur_frontType2_price_box').disabled = this.checked;
                        document.getElementById('pur_frontType3_price_box').disabled = this.checked;
                        document.getElementById('pur_frontType4_price_box').disabled = this.checked;
        
        
                     if ($("#purc_edit").smkValidate()) {
                       $.ajax({
                            url: 'purc_jobs_edit.php',
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
                            //   พอบันทึกเสร็จให้ disabled box  
                            document.getElementById('pur_priceAlu_box').disabled = !this.checked;
                            // disabled ค่าบล็อคปั้มนูน
                            document.getElementById('pur_pricePN1_box').disabled = !this.checked;
                            document.getElementById('pur_pricePN2_box').disabled = !this.checked;
                            document.getElementById('pur_pricePN3_box').disabled = !this.checked;      
                            //    disabled ค่าบล็อคปั้มเค
                         document.getElementById('pur_pricePumK1_box').disabled = !this.checked;
                         document.getElementById('pur_pricePumK2_box').disabled = !this.checked;
                         document.getElementById('pur_pricePumK3_box').disabled = !this.checked;
                         document.getElementById('pur_pricePumK4_box').disabled = !this.checked;
                       


                         });          
                        e.preventDefault();
                    }
                   e.preventDefault();
               
			    });
                            
                            
                           
                          
                
            });
    </script>

<!-- สิ้นสุดการแก้ไข พนักงานจัดซื้อ  -->







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

<script language="JavaScript">
			function chkNum_z(ele)
			{
				var num = parseFloat(ele.value);
				ele.value = num.toFixed(0);
			}
		</script>
    
  <!-- script ป้อนตัวเลข 1-5 -->
     <script language="javascript">
function CheckNum1_5(){
		
                 if(event.keyCode == 8 || event.keyCode == 97 || event.keyCode == 98 || event.keyCode == 99  || event.keyCode == 100  || event.keyCode == 101){
                     
                     event.returnValue = true;
                 } else if(event.keyCode < 49 || event.keyCode > 53) {
		      event.returnValue = false;
	    	}
	}
</script>    
<!-- จบ script ป้อนตัวเลข 1-5 -->
    
<!--  check ลูกฟูก -->
    
     <script>
                                                
                        document.getElementById('exa_lukf_check').onchange= function() {
                        document.getElementById('exa_4LF_width_box').disabled = !this.checked;
                        document.getElementById('exa_4LF_lenght_box').disabled = !this.checked;
                        document.getElementById('exa_4LF_layer_box').disabled = !this.checked;
                        
                            };
                        
               
                      document.getElementById('exa_4LF_width_box').onchange= function() {
                            var num =  document.getElementById('exa_4LF_width_box').value;
                           if(isNaN(num)){  
                                document.getElementById('exa_4LF_width_box').value = '';
                                document.getElementById('exa_lami_width_box').value = '';
                            }else{
			     num2 = parseFloat(num);
                             num2 = num2.toFixed(2);
                       document.getElementById('exa_4LF_width_box').value = num2;
                       document.getElementById('exa_lami_width_box').value = num2;
                            }
                        
                 
                        
                                                    };
                                                    
                                                    
                        
                       document.getElementById('exa_4LF_lenght_box').onchange= function() {
                       
                     var num =  document.getElementById('exa_4LF_lenght_box').value;
                           if(isNaN(num)){  
                                document.getElementById('exa_4LF_lenght_box').value = '';
                                document.getElementById('exa_lami_lenght_box').value = '';
                            }else{
			     num2 = parseFloat(num);
                             num2 = num2.toFixed(2);
                       document.getElementById('exa_4LF_lenght_box').value = num2;
                       document.getElementById('exa_lami_lenght_box').value = num2;
                            }
                      
                                                    };
                                                    
                                                    
                                                    
                        document.getElementById('pumN_check').onchange= function() {
                        document.getElementById('exa_PN_R1A_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R1A_box').value = 0;
                        document.getElementById('exa_PN_R1Y_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R1Y_box').value = 0;
                        document.getElementById('exa_PN_R2A_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R2A_box').value = 0;
                        document.getElementById('exa_PN_R2Y_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R2Y_box').value = 0;
                        document.getElementById('exa_PN_R3A_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R3A_box').value = 0;
                        document.getElementById('exa_PN_R3Y_box').disabled = !this.checked;
                        document.getElementById('exa_PN_R3Y_box').value = 0;
                        
                        
                        
                        
                            };  
                            
                            document.getElementById('pumY_check').onchange= function() {
                        document.getElementById('exa_pumY_amount_box').disabled = !this.checked;
                        document.getElementById('exa_pumY_amount_box').value = 0;
                        
                            };  
                            
                           
                          document.getElementById('pricePtype_check').onchange= function() {
                         document.getElementById('pur_pricePtype_box').disabled = !this.checked;
                        document.getElementById('pur_pricePtype_box').value =  document.getElementById('lay_3').value
                        
                            };  
                            
                            document.getElementById('pricePN_check').onchange= function() {
                        document.getElementById('R1_width').disabled = !this.checked;
                        document.getElementById('R1_lenght').disabled = !this.checked;
                        document.getElementById('R2_width').disabled = !this.checked;
                        document.getElementById('R2_lenght').disabled = !this.checked;
                        document.getElementById('R3_width').disabled = !this.checked;
                        document.getElementById('R3_lenght').disabled = !this.checked;
                        
                        document.getElementById('R1_width').value = 0;
                        document.getElementById('R1_lenght').value = 0;
                        document.getElementById('R2_width').value = 0;
                        document.getElementById('R2_lenght').value = 0;
                        document.getElementById('R3_width').value = 0;
                        document.getElementById('R3_lenght').value = 0;
                        
                        
                        
                            };  
                            
                            
                            
                            
                            
                            
                             
                             
                            
                            
     
 
         
     </script>
    
                            
                            <script>
                                    
                                
                            document.getElementById('pur_priceAlu_check').onchange= function() {
                           document.getElementById('pur_priceAlu_box').disabled = !this.checked;
                           document.getElementById('pur_priceAlu_box').value ="";
                        
                            };  
                        
                    </script>
                                    
                            
                            
       <!--  ลบไฟล์แนบ -->
                       <script>
                                                
                        document.getElementById('del_Pur_file1_icon').onclick= function() {
                        document.getElementById('pur_file1_box').value = "";
                        };
                        
                        document.getElementById('del_Pur_file2_icon').onclick= function() {
                        document.getElementById('pur_file2_box').value = "";
                        };
                        
                        document.getElementById('del_Pur_file3_icon').onclick= function() {
                        document.getElementById('pur_file3_box').value = "";
                        };
                        
                        document.getElementById('del_exa_file1_icon').onclick= function() {
                        document.getElementById('exa_file1_box').value = "";
                        };
                        
                        document.getElementById('del_exa_file2_icon').onclick= function() {
                        document.getElementById('exa_file2_box').value = "";
                        };
                        
                        document.getElementById('del_exa_file3_icon').onclick= function() {
                        document.getElementById('exa_file3_box').value = "";
                        
                        
                        };
                        
                        
                        
            
                        
                            
                            
                            </script>
     
                        
                             <!-- 	Size กระดาษ    กว้าง  ยาว หน้า จนท ตัวอย่าง แล้ว ข้อ 4 กว้างยาวเปลี่ยนตาม -->
                        
                         <script>
                                                
                        document.getElementById('pur_size_width_box').onchange= function() {
                        
                       var chk_lf4 = "<?php echo $sales_check_LF;?>";
                        if(chk_lf4 !==""){
                        
                        document.getElementById('exa_4LF_width_box').value = document.getElementById('pur_size_width_box').value;
                        document.getElementById('exa_lami_width_box').value = document.getElementById('exa_4LF_width_box').value;
                        }
        
                       }
    
                     
                        
                        document.getElementById('pur_size_length_box').onchange= function() {
                        var chk_lf4 = "<?php echo $sales_check_LF;?>";
                        if(chk_lf4 !==""){
                             
        
                        document.getElementById('exa_4LF_lenght_box').value = document.getElementById('pur_size_length_box').value;
                         document.getElementById('exa_lami_lenght_box').value = document.getElementById('exa_4LF_lenght_box').value;
                         }
        
                        };
                        
                        </script>
                        
                        <!-- 	จบ Size กระดาษ    กว้าง  ยาว หน้า จนท ตัวอย่าง แล้ว ข้อ 4 กว้างยาวเปลี่ยนตาม -->
                        
                   
                        
                        <!-- script check ค่า ประเภท กระดาษ ให้ seller เปลี่ยน ไปตาม ประเภทกระดาษ   -->  
                                 <script>
                
                                                
                       document.getElementById('paper_cat').onchange= function() {
                        var e = document.getElementById("paper_cat");
                        var e1 = document.getElementById("paper_seller");
                        
                        
         
                        var str_cat = e.options[e.selectedIndex].text;
                     
                        var txt12 = $('#purc_edit').serialize(); 
                                  $.ajax({
					   type: "POST",
					   url: "get_seller.php",
					   data: txt12,
					   success: function(result) {
						//	var length = e1.options.length;
                                                  //      for (i = 0; i < length; i++) {
                                                //          e1.options[i].text = '';
                                                   //     }
                                                  //  
                                                  
                                                   $("#spin").hide(); 
                                                        e1.options.length = result.count;
                                                    
                                                        
                                                        
                                                       if(result.status == 1) // Success
							{
								// alert(result.message1); 
                                                            
                                                            
                                                            
                                                               e1.options[0].text = result.message1;
                                                               e1.options[1].text = result.message2;
                                                               e1.options[2].text = result.message3;
                                                               e1.options[3].text = result.message4;
                                                               e1.options[4].text = result.message5;
                                                               e1.options[5].text = result.message6;
                                                               e1.options[6].text = result.message7;
                                                               e1.options[7].text = result.message8;
                                                               e1.options[8].text = result.message9;   
                                                               e1.options[9].text = result.message10;
                                                                   
                                                          
                                                               
            
                                                         }
							else // Err
							{
								alert(result.message);
							}
					   }
					 });
                       
                 
                        };
                                             
                        </script>
                        
                        <!-- script check ค่า ประเภท กระดาษ ให้ seller เปลี่ยน ไปตาม ประเภทกระดาษ   -->
     
     
                         <!-- script check ค่า ประเภท กระดาษ  band เปลี่ยน ไปตาม seller   -->  
                                 <script>
                
                                                
                       document.getElementById('paper_seller').onchange= function() {
                        var e = document.getElementById("paper_seller");
                        var e1 = document.getElementById("paper_band");
                        
                        
         
                        var str_cat = e.options[e.selectedIndex].text;
                     
                        var txt12 = $('#purc_edit').serialize(); 
                                
                                           $.ajax({
					   type: "POST",
					   url: "get_band.php",
					   data: txt12,
					   success: function(result) {
						//	var length = e1.options.length;
                                                  //      for (i = 0; i < length; i++) {
                                                //          e1.options[i].text = '';
                                                   //     }
                                                  //  
                                                  
                                                   $("#spin").hide(); 
                                                        e1.options.length = result.count;
                                                    
                                                        
                                                        
                                                       if(result.status == 1) // Success
							{
								// alert(result.message1); 
                                                            
                                                            
                                                            
                                                               e1.options[0].text = result.message1;
                                                               e1.options[1].text = result.message2;
                                                               e1.options[2].text = result.message3;
                                                               e1.options[3].text = result.message4;
                                                               e1.options[4].text = result.message5;
                                                               e1.options[5].text = result.message6;
                                                               e1.options[6].text = result.message7;
                                                               e1.options[7].text = result.message8;
                                                               e1.options[8].text = result.message9;   
                                                               e1.options[9].text = result.message10; 
                                                               
            
                                                         }
							else // Err
							{
								alert(result.message);
							}
					   }
					 });
                       
                 
                        };
                                             
                        </script>
                        
                        <!-- script check ค่า ประเภท กระดาษ ให้ band เปลี่ยน ไปตาม seller   -->
                        
                        
     
                                 
                                 
                </body>


</html>