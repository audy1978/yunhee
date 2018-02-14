<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    
	
	<?php include 'header.php'; ?>
    <!--/header-->
    
    
     <?php
  include 'db/config_db.php';
  
  $id_edit = mysql_real_escape_string(trim($_GET['id_edit']));
  $_SESSION["jobs_id"] = $id_edit;
  //  $meSQL = "SELECT * FROM member WHERE id='{$_SESSION['id']}' ";
    $meSQL = "SELECT * FROM tb_jobs WHERE jobs_id='{$id_edit}' ";
	$meQuery = mysql_query($meSQL);
    	if ($meQuery == TRUE) {
        $meResult = mysql_fetch_assoc($meQuery);
		
    } else {
        echo 'error';
    }
    ?>
    
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    
                    <h3>แก้ไขงาน</h3>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">หน้าหลัก</a></li>
                        <li class="active">แก้ไขงาน</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    
           
        </div><!--/.row-->
      
    
    <section class="content">
    <!-- general form elements -->
              <div class="container">
                <div class="box-header with-border">
                  <h4 class="box-title">User name  : <? echo $_SESSION['user_fullname'];?></h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                
                <form id="form2" action="edit_data_job_action.php" method="post" class="form" enctype="multipart/form-data" novalidate>
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
                  
                  <div class="box-body">
                    
                      <div class="row">  
                          <div class="col-md-6">
                                <div class="form-group">
                                     <label for="contact">ลูกค้า&nbsp;<font color="red">*</font></label>
                                     <input name="contact" type="text" class="form-control" id="contact"  value="<?php echo $meResult['jobs_contact']; ?>" placeholder="กรอกชื่อลูกค้า ผู้ติดต่อ" smk-text="กรุณากรอกชื่อลูกค้า ผู้ติดต่อ" required>
                                </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                     <label for="exampleInputPassword1">โทรศัพท์&nbsp;<font color="red">*</font></label>
                                     <input name="tel" type="text" class="form-control" id="tel"   value="<?php echo $meResult['jobs_tel']; ?>"  placeholder="กรอกเบอร์โทรศัพท์" smk-text="กรุณากรอกเบอร์โทรศัพท์" required>
                               </div>
                     
                         </div>
                      
                      </div>
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">ชื่อลูกค้า&nbsp;<font color="red">*</font></label>
                      <input name="customer" type="text" class="form-control" id="customer"   value="<?php echo $meResult['jobs_customer']; ?>" placeholder="กรอกชื่อลูกค้าหรือชื่อบริษัท" smk-text="กรุณากรอกชื่อลูกค้าหรือชื่อบริษัท" required>
                    </div>
                    
                   
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">File&nbsp;<font color="red">*</font></label>
                      <input name="file" type="text" class="form-control" id="file"    value="<?php echo $meResult['jobs_file']; ?>" placeholder="กรอกชื่อ File" smk-text="กรุณากรอกชื่อ File" required>
                    </div>
                    
                   
                      <div class="row"> 
                        
                          <div class="col-md-2">
                              <div class="form-group">
                                <label for="exampleInputPassword1">รหัสไฟล์&nbsp;<font color="red">*</font></label>
                                <input name="filecode" type="text" class="form-control" id="filecode"   value="<?php echo $meResult['jobs_filecode']; ?>" placeholder="กรอกรหัสไฟล์" smk-text="กรุณากรอกรหัสไฟล์" required>
                             </div>
                          </div>
                          
                          <div class="col-md-5">
                              
                                  <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ขนาดของงาน&nbsp;<font color="red">*</font> &nbsp; &nbsp;กว้าง</th>
                                    <th><input name="job_width_box" id="job_width_box" style="width:60px; text-align: right;" value="<?php echo $meResult['job_width']; ?>" type="text" class="form-control" style="text-align: right" value="<?php echo $pur_thick_gram; ?>" maxlength="3"  OnChange="JavaScript:chkNum_z(this)" smk-text="กรุณากรอกความกว้าง" required></th>
                                    <th> &nbsp; &nbsp;ยาว</th>
                                    <th><input name="job_length_box" id="job_length_box" style="width:60px; text-align: right;" value="<?php echo $meResult['job_length']; ?>" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $pur_size_width; ?>" smk-text="กรุณากรอกความยาว" required></th>
                                    <th>&nbsp; &nbsp;สูง</th>
                                    <th><input name="job_height_box" id="job_height_box" style="width:60px; text-align: right;" value="<?php echo $meResult['job_hieght']; ?>" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" value="<?php echo $pur_size_length; ?>" smk-text="กรุณากรอกความสูง" required></th>
                                    <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                                   
                                    </thead>
                                        </table>
                              
                          </div>
                      
                          <?php
                                       // check job format

                                      $ch_job_format = $meResult['job_format'];

                                      if($ch_job_format=="ฝาเสียบ"){
                                          $ch_format1= "checked";
                                      }

                                      if($ch_job_format=="ฝาทากาว"){
                                          $ch_format2= "checked";
                                      }

                                      if($ch_job_format=="อื่น ๆ"){
                                          $ch_format3= "checked";
                                      }
                          
                                                                              
                          ?>
                          
                          
                          <div class="col-md-5">
                              
                               <table data-toggle="table" data-striped="true">
                            <thead>
                            <tr>
                            <th></th>
                            <th>&nbsp; &nbsp;รูปแบบงาน&nbsp;<font color="red">*</font></th>
                             <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                             <th><input type="radio" id="cr_check_1" name="cr_check" value="ฝาเสียบ" <?php echo $ch_format1;?> ></th>
                            <th>ฝาเสียบ</th>
                             <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                            <th><input type="radio" id="cr_check_2" name="cr_check" value="ฝาทากาว" <?php echo $ch_format2;?> ></th>
                            <th>ฝาทากาว</th>
                            <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                            <th><input type="radio" id="cr_check_3" name="cr_check" value="อื่น ๆ" <?php echo $ch_format3;?> ></th>
                            <th>อื่น ๆ</th>
                            
                            </thead>
                          </table>
                              
                              
                              
                          </div>
                          
                          
                      
                      </div>
                      
                      <?php
                         // คืนต่า พลาสติก
                      $sales_plastic_check   = $meResult['sales_plastic_check'];
                        if($sales_plastic_check=='มีพลาสติก'){
                            $plastic_chk = 'checked';
                             }
                             
                         // check ปั้ม ไม่ปั้ม 
                          $pum_check   = $meResult['pur_checkP'];  
                                  if($pum_check=='ปั้ม'){
                                      $pum_check1='checked';
                                  }else if($pum_check=='ไม่ปั้ม'){
                                      $pum_check2='checked';
                                  }else{
                                      $pum_check1='';
                                      $pum_check2='';
                                  }
                          
                      ?>
                      
                      
                       <!--  แก้ไข 1-07-2017  -->
                      <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ความหนา&nbsp;<font color="red">*</font></th>
                                    <th><input name="sales_thick_gram_box" id="sales_thick_gram_box" style="width:60px; text-align: right;" type="text" class="form-control" style="text-align: right"  value="<?php echo $meResult['pur_thick_gram']; ?>" smk-text="กรุณากรอกความหนา" required></th>
                                    <th> &nbsp; &nbsp;แกรม</th>
                                    
                                     <th> &nbsp; &nbsp;ประเภทกระดาษ</th>
                                     <th>
                                         
                                            <?php

                    $sql = "SELECT pur_cat FROM tb_jobs WHERE jobs_id='{$id_edit}'";
                    $result = mysql_query($sql);
                    echo "<select name='sale_paper_cat' id='sale_paper_cat' class='form-control'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['pur_cat'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
                                         
                                         
                                        </th>
                                    
                                    
                                      <th> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;2. งานพิมพ์ จำนวน&nbsp;<font color="red">*</font></th>
                                    <th><input name="sales_printAmont_box" id="sales_printAmont_box" value="<?php echo $meResult['exa_printAmont']; ?>" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกจำนวนงานพิมพ์" required></th>
                                    <th>&nbsp; &nbsp;สี</th>
                                    <th> &nbsp; &nbsp;2.1 งานพลาสติก&nbsp;<font color="red">*</font> &nbsp;</th>
                                    <th><input type="checkbox" id="sales_plastic_check" name="sales_plastic_check" value="มีพลาสติก" <?php echo $plastic_chk ?> ></th>
                                    <th>&nbsp; มี&nbsp;&nbsp; &nbsp;&nbsp;</th>
                                    <th><input disabled type="radio" id="sales_check_pum1" name="sales_check_pum" value="ปั้ม" <?php echo $pum_check1 ?>></th>
                                   <th>&nbsp; ปั้ม&nbsp; &nbsp;&nbsp;</th>
                                   <th><input disabled type="radio" id="sales_check_pum2" name="sales_check_pum" value="ไม่ปั้ม" <?php echo $pum_check2 ?>></th>
                                   <th>&nbsp;ไม่ปั้ม</th>
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                       <p></p>
                                              <!-- 3   -->   
                         <?php                    
                             // คืนค่า ข้อ 3 เคลือบผิวหน้า
                                          $exa_3front1_type =  $meResult['exa_3front1_type'];
                                          $exa_3front2_type =  $meResult['exa_3front2_type'];
                                          $exa_3front3_type =  $meResult['exa_3front3_type'];
                                          $exa_3front4_type =  $meResult['exa_3front4_type'];                   
                         
                                            switch ($exa_3front1_type) {
                                                 case "-":
                                                    $check10 = "selected";
                                                     break;
                                                 case "อาบเงา":
                                                    $check11 = "selected";
                                                    break;
                                                case "อาบด้าน":
                                                    $check12 = "selected";
                                                    break;
                                                case "ขัดเงา เว้นลิ้น":
                                                    $check13 = "selected";
                                                    break;
                                                 case "UV เว้นลิ้น":
                                                    $check14 = "selected";
                                                    break;
                                                case "OPP เงา":
                                                    $check15 = "selected";
                                                    break;
                                                case "OOP ด้าน":
                                                    $check16 = "selected";
                                                    break;
                                                case "SPOT UV":
                                                    $check17 = "selected";
                                                    break;
                                                case "อื่น ๆ":
                                                    $check18 = "selected";
                                                    break;

                                                        }
                                                        
                                                      switch ($exa_3front2_type) {
                                                    case "-":
                                                        $check20 = "selected";
                                                          break;
                                                    case "อาบเงา":
                                                        $check21 = "selected";
                                                           break;
                                                    case "อาบด้าน":
                                                         $check22 = "selected";
                                                        break;
                                                    case "ขัดเงา เว้นลิ้น":
                                                        $check23 = "selected";
                                                        break;
                                                     case "UV เว้นลิ้น":
                                                        $check24 = "selected";
                                                        break;
                                                    case "OPP เงา":
                                                        $check25 = "selected";
                                                        break;
                                                    case "OOP ด้าน":
                                                        $check26 = "selected";
                                                        break;
                                                    case "SPOT UV":
                                                        $check27 = "selected";
                                                        break;
                                                    case "อื่น ๆ":
                                                        $check28 = "selected";
                                                        break;

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
                                                            break;
                                                         case "UV เว้นลิ้น":
                                                            $check34 = "selected";
                                                            break;
                                                        case "OPP เงา":
                                                            $check35 = "selected";
                                                            break;
                                                        case "OOP ด้าน":
                                                            $check36 = "selected";
                                                            break;
                                                        case "SPOT UV":
                                                            $check37 = "selected";
                                                            break;
                                                        case "อื่น ๆ":
                                                            $check38 = "selected";
                                                            break;

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
                                                            break;
                                                         case "UV เว้นลิ้น":
                                                            $check44 = "selected";
                                                            break;
                                                        case "OPP เงา":
                                                            $check45 = "selected";
                                                            break;
                                                        case "OOP ด้าน":
                                                            $check46 = "selected";
                                                            break;
                                                        case "SPOT UV":
                                                            $check47 = "selected";
                                                            break;
                                                        case "อื่น ๆ":
                                                            $check48 = "selected";
                                                            break;

                                                                }
                                          
                          
                          ?>

                        <div class="row">

                            <table  data-toggle="table" data-striped="true">
                        <thead>
                        <th>&nbsp;&nbsp;3. เคลือบผิวหน้าแบบ 1</th>
                        <th><select class="form-control" id="drop3_1" name="drop3_1"  onchange="run_drop311()">
                          <option value="-" <?php echo $check10; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>
                          <option value="อาบเงา" <?php echo $check11; ?> >อาบเงา</option>
                          <option value="อาบด้าน" <?php echo $check12; ?>>อาบด้าน</option>
                          <option value="ขัดเงา เว้นลิ้น" <?php echo $check13; ?> >ขัดเงา เว้นลิ้น</option>
                          <option value="UV เว้นลิ้น" <?php echo $check14; ?>>UV เว้นลิ้น</option>
                          <option value="OPP เงา" <?php echo $check15; ?>>OPP เงา</option>
                          <option value="OOP ด้าน" <?php echo $check16; ?>>OOP ด้าน</option>
                          <option value="SPOT UV"<?php echo $check17; ?>>SPOT UV</option>
                          <option value="อื่น ๆ"<?php echo $check18; ?>>อื่น ๆ</option>


                                </select></th>
                                
                              <!--  เคลือบหน้าแบบบ 2  -->  
                              
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 2</th>
                        <td><select class="form-control" id="drop3_2" name="drop3_2"  onchange="run_drop312()">
                           <option value="-" <?php echo $check20; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>   
                           <option value="อาบเงา" <?php echo $check21; ?> >อาบเงา</option>
                          <option value="อาบด้าน" <?php echo $check22; ?>>อาบด้าน</option>
                          <option value="ขัดเงา เว้นลิ้น" <?php echo $check23; ?> >ขัดเงา เว้นลิ้น</option>
                          <option value="UV เว้นลิ้น" <?php echo $check24; ?>>UV เว้นลิ้น</option>
                          <option value="OPP เงา" <?php echo $check25; ?>>OPP เงา</option>
                          <option value="OOP ด้าน" <?php echo $check26; ?>>OOP ด้าน</option>
                          <option value="SPOT UV"<?php echo $check27; ?>>SPOT UV</option>
                          <option value="อื่น ๆ"<?php echo $check28; ?>>อื่น ๆ</option>


                                </select></td>
                                
                                 <!--  เคลือบหน้าแบบบ 3  -->  
                                
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 3</th>
                        <td><select class="form-control" id="drop3_3" name="drop3_3"  onchange="run_drop313()">
                           <option value="-" <?php echo $check30; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>    
                           <option value="อาบเงา" <?php echo $check31; ?> >อาบเงา</option>
                          <option value="อาบด้าน" <?php echo $check32; ?>>อาบด้าน</option>
                          <option value="ขัดเงา เว้นลิ้น" <?php echo $check33; ?> >ขัดเงา เว้นลิ้น</option>
                          <option value="UV เว้นลิ้น" <?php echo $check34; ?>>UV เว้นลิ้น</option>
                          <option value="OPP เงา" <?php echo $check35; ?>>OPP เงา</option>
                          <option value="OOP ด้าน" <?php echo $check36; ?>>OOP ด้าน</option>
                          <option value="SPOT UV"<?php echo $check37; ?>>SPOT UV</option>
                          <option value="อื่น ๆ"<?php echo $check38; ?>>อื่น ๆ</option>


                                </select></td>
                                
                             <!--  เคลือบหน้าแบบบ 4  -->  
                             
                                   
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;เคลือบผิวหน้าแบบ 4</th>
                        <td><select class="form-control" id="drop3_4" name="drop3_4"  onchange="run_drop314()">
                           <option value="-" <?php echo $check40; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</option>    
                          <option value="อาบเงา" <?php echo $check41; ?> >อาบเงา</option>
                          <option value="อาบด้าน" <?php echo $check42; ?>>อาบด้าน</option>
                          <option value="ขัดเงา เว้นลิ้น" <?php echo $check43; ?> >ขัดเงา เว้นลิ้น</option>
                          <option value="UV เว้นลิ้น" <?php echo $check44; ?>>UV เว้นลิ้น</option>
                          <option value="OPP เงา" <?php echo $check45; ?>>OPP เงา</option>
                          <option value="OOP ด้าน" <?php echo $check46; ?>>OOP ด้าน</option>
                          <option value="SPOT UV"<?php echo $check47; ?>>SPOT UV</option>
                          <option value="อื่น ๆ"<?php echo $check48; ?>>อื่น ๆ</option>


                                </select></td>
                        
                        </thead>
                       
                       

                            </table>


                        </div>

                        <!-- End 3   -->  
                      
                        <p></p>
                      
                        <?php
                           //  check ลูกฟูก
                         $sales_check_LF   = $meResult['sales_check_LF'];
                            if($sales_check_LF=='มีลูกฟูก'){
                                $check_LF='checked';
                            }else{
                                $chk_lf2 = 'disabled';
                            }
                            
                        ?>
                      
                       <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;4. ลูกฟูก&nbsp;</th>
                                    <th><input  type="checkbox" id="sales_check_LF" name="sales_check_LF"  value="มีลูกฟูก" <?php echo $check_LF; ?> ></th>
                                    <th> &nbsp; &nbsp;มี</th>
                                      <th> &nbsp; &nbsp;จำนวน</th>
                                      <th>  <input <?php echo $chk_lf2; ?> name="sales_4LF_layer_box" id="sales_4LF_layer_box" value="<?php echo $meResult['exa_4LF_layer']; ?>" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                   
                                    <th>&nbsp; &nbsp;ชั้น</th>
                                    <th> &nbsp; &nbsp;ชนิดลูกฟูก &nbsp;</th>
                                    <th><input <?php echo $chk_lf2; ?> name="sales_4LF_type_box" id="sales_4LF_type_box"  value="<?php echo $meResult['sales_4LF_type']; ?>" style="width:60px; text-align: right;" type="text" class="form-control" maxlength="1" placeholder=""  style="text-align: right" OnChange="JavaScript:chkChar(this)" ></th>
                                   
                               
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                        
                        <?php
                           //  check ปั้มนูน  ปั้มขาด
                             $sales_check_pumNoon =  $meResult['sales_check_pumNoon'];
                          $sales_check_pumKad =  $meResult['sales_check_pumKad'];
                             if($sales_check_pumNoon=='ปั้มนูน'){
                                 $check_PN ='checked';
                             }
                             
                              if($sales_check_pumKad=='ปั้มขาด'){
                                 $check_PK ='checked';
                             }
                             
                        ?>
                      
                         <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;5. &nbsp;</th>
                                    <th><input  type="checkbox" id="sales_check_pumNoon" name="sales_check_pumNoon" value="ปั้มนูน" <?php echo $check_PN; ?>></th>
                                    <th>   ปั้มนูน&nbsp;</th>
                                   
                                    <th><input disabled name="sales_pumNoon_box" value="<?php echo $meResult['exa_PN_amount']; ?>" id="sales_pumNoon_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                   
                                    <th>&nbsp; &nbsp;รอบ&nbsp; &nbsp;&nbsp; &nbsp;</th>
                                     <th><input type="checkbox" id="sales_check_pumKad" name="sales_check_pumKad" value="ปั้มขาด"  <?php echo $check_PK; ?>></th>
                                    <th> &nbsp;ปั้มขาด &nbsp;</th>
                                     <th><input disabled name="sales_pumKad_box" value="<?php echo $meResult['exa_PY_amount']; ?>" id="sales_pumKad_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                    <th>&nbsp; &nbsp;รอบ</th>
                               
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                      
                      
                      <!--  แก้ไข 1-07-2017  -->
                   
                      
                         <?php
                         // check ปั้มเค  
                          $pumk_check   = $meResult['pur_pumk_check'];  
                                  if($pumk_check!=''){
                                      $pumk_check1='checked';
                                  }else{
                                      
                                      $chk_pumk = 'disabled';
                                  }
                          
                      ?>
                      
                      
                      <p></p>
                      <!-- ปั้มเค -->
                    
                      <div class = "row">
                          
                          <div class="col-md-12">

                        <table data-toggle="table" data-striped="true">
                        <thead>
                        <tr>
                        
                        <th><input type="checkbox" id="ch_pumk" name="ch_pumk" value="ปั๊มเค" <?php echo $pumk_check1;  ?>></th>
                        <th>&nbsp;ปั้มเค&nbsp; </th>
                        <th>รอบ 1 ก.</th>
                        <th><input  <?php echo $chk_pumk;  ?> id="R1_width" name="R1_width" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R1A']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input <?php echo $chk_pumk;  ?> id="R1_lenght" name="R1_lenght" type="text" class="form-control" style="width:80px;" value="<?php echo $meResult['exa_R1AY']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                         
                         
                         <!--  ปั๊มเค รอบ 2  -->
                         
                          <th> &nbsp;&nbsp;  </th>
                        <th>รอบ 2 ก.</th>
                        <th><input <?php echo $chk_pumk;  ?> id="R2_width" name="R2_width" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R2A']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp;&nbsp;ย.</th>
                        <th><input <?php echo $chk_pumk;  ?> id="R2_lenght" name="R2_lenght" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R2Y']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                         
                        <!--  ปั๊มเค รอบ 3  -->
                        
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ 3 ก.</td>
                        <th><input <?php echo $chk_pumk;  ?> id="R3_width" name="R3_width" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R3A']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input <?php echo $chk_pumk;  ?> id="R3_lenght" name="R3_lenght" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R3Y']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>

                          <!--  ปั๊มเค รอบ 4  -->
                           <th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ 4 ก.</th>
                        <th><input <?php echo $chk_pumk;  ?> id="R4_width" name="R4_width" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R4A']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                        <th>&nbsp;&nbsp;ย.</td>
                        <th><input <?php echo $chk_pumk;  ?> id="R4_lenght" name="R4_lenght" type="text" class="form-control" style="width:80px;"  value="<?php echo $meResult['exa_R4AY']; ?>" placeholder="" OnChange="JavaScript:chkNum2(this)"></th>
                         </tr>
                        </thead>
      
                        </table>

                          </div>
                         
                        </div>
                      
                      
                      <div class="row">
                          
                          <div class="col-md-8">
                             <label for="exampleInputFile">ข้อความ</label> 
                             <textarea class="form-control" rows="5" id="job_note" name="job_note"  ><?php echo $meResult['job_note'];?></textarea> 
                          </div>
                      </div>
                    
                    <p>
                    <!-- สิ้นสุด ปั๊มเค -->
                      
                      <!-- จำนวน order -->
                      <div class="row">
                          <div class="">
                                <label for="">จำนวน Order</label>

                          </div>
                      <div class="col-md-2">
                         <label for="jobs_order1">&nbsp;<font color="red">*</font> 1.</label> 
                            <input name="jobs_order1" type="text" class="form-control" id="jobs_order1"   value="<?php echo $meResult['jobs_order1']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                        
                       </div>
                      
                      <div class="col-md-2">
                          <label for="jobs_order2"><font color="red">*</font>&nbsp;2.</label>    
                          <input name="jobs_order2" type="text" class="form-control" id="jobs_order2"   value="<?php echo $meResult['jobs_order2']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                          </div>
                      <div class="col-md-2">
                          <label for="jobs_order3"><font color="red">*</font>&nbsp;3.</label>    
                          <input name="jobs_order3" type="text" class="form-control" id="jobs_order3"   value="<?php echo $meResult['jobs_order3']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                          </div>
                     
                       <div class="col-md-2">
                         <label for="jobs_order4">4.</label> 
                            <input name="jobs_order4" type="text" class="form-control" id="jobs_order4"   value="<?php echo $meResult['jobs_order4']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                        
                       </div>
                      
                       <div class="col-md-2">
                          <label for="jobs_order5">5.</label>    
                          <input name="jobs_order5" type="text" class="form-control" id="jobs_order5"   value="<?php echo $meResult['jobs_order5']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                          </div>
                      <div class="col-md-2">
                          <label for="jobs_order6">6.</label>    
                          <input name="jobs_order6" type="text" class="form-control" id="jobs_order6"   value="<?php echo $meResult['jobs_order6']; ?>" placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                          </div>  
                      
                      </div>             
                       
                     
                    
                    
                    
                    
                   
                    <!-- สิ้นสุด จำนวน order -->
                    <p>
                    
                    
                    
                    
                     <!-- NOTE -->
                    
                   
                    
                    <p>
                    
                    <div class="form-group">
                      <label for="image_job">ภาพงาน</label>
                      <table data-toggle="table" data-striped="true">
<thead>
<tr>


<td><input type="text" class="form-control" style="width:200px; text-align: right;" id="exa_file1_box" name="exa_file1_box" value="<?php echo $meResult['jobs_image']; ?>" placeholder="" ></td>
<!-- <td><span class="glyphicon glyphicon-remove" aria-hidden="true"  id="del_exa_file1_icon"  name="del_exa_file1_icon"></span>&nbsp; &nbsp;</td> -->
<td><input name="edit_image_sale" type="file" id="edit_image_sale" ></td>
</thead>
    </table>
                     
                      <p class="help-block">ขนาดของภาพไม่เกิน 2 MB</p>
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button  id="btn2" type="submit" class="btn btn-primary">บันทึก</button>
                  </div>
                </form>
              </div><!-- /.box -->
              
              <div id="spin"></div>  
              
            
    
    </section>

    <?php // include 'bottom.php'; ?>
    <!--/#bottom-->
    
    <?php include 'footer.php'; ?>
    

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
          
               // check not same selected
               var element2 = document.getElementById('drop3_2').value;
               var element3 = document.getElementById('drop3_3').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element1==element2 ||element1==element3 || element1==element4 ){
                  
                      document.getElementById('drop3_1').value='-';
                      document.getElementById('exa_3front1_price_box').disabled = !this.checked;
                      document.getElementById('exa_3front1_price_box').value="";
                }
               // end check
                
                
         }
         
    
    </script>
    
    <script>
         function run_drop312() {
             var element2 = document.getElementById('drop3_2').value;
           
                
                // จบการ check  อาบด้าน อาบเงา
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element3 = document.getElementById('drop3_3').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element2==element1 ||element2==element3 || element2==element4 ){
                  
                      document.getElementById('drop3_2').value='-';
                      document.getElementById('exa_3front2_price_box').disabled = !this.checked;
                      document.getElementById('exa_3front2_price_box').value="";
                }
               // end check
                
         }
    
    </script>
    
    <script>
         function run_drop313() {
             var element3 = document.getElementById('drop3_3').value;
          
                
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element2 = document.getElementById('drop3_2').value;
               var element4 = document.getElementById('drop3_4').value;
               
               if (element3==element1 ||element3==element2 || element3==element4 ){
                  
                      document.getElementById('drop3_3').value='-';
                      document.getElementById('exa_3front3_price_box').disabled = !this.checked;
                      document.getElementById('exa_3front3_price_box').value="";
                }
               // end check
         }
    
    </script>
    
    <script>
         function run_drop314() {
             var element4 = document.getElementById('drop3_4').value;
           
             
                
                
                // check not same selected
               var element1 = document.getElementById('drop3_1').value;
               var element2 = document.getElementById('drop3_2').value;
               var element3 = document.getElementById('drop3_3').value;
              
               if (element4==element1 ||element4==element2 || element4==element3 ){
                  
                      document.getElementById('drop3_4').value='-';
                      document.getElementById('exa_3front4_price_box').disabled = !this.checked;
                      document.getElementById('exa_3front4_price_box').value="";
                }
               // end check
                
                
         }
    
    </script>
    
    
    
    <!--  end script DROP 3-->
    
    
    <script>
            $( document ).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
                $("#contact").focus();
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                $("#spin").hide();

                $('#form2').on("submit",function(e) {
                  
                
                   
        
                 
                      
                     // ไม่ disable เพื่อการ บันทึก
                
                document.getElementById('sales_check_pum1').disabled = this.checked;
                document.getElementById('sales_check_pum2').disabled = this.checked;
                document.getElementById('sales_pumNoon_box').disabled = this.checked;
                document.getElementById('sales_pumKad_box').disabled = this.checked;
                      
            
            
                   $.ajax({
                            url: 'edit_data_job_action.php',
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
                                           window.location.href = "index.php";
                                         // then reload the page.(3)
                                      }, 2000); 
                                
                             // clear input form   
                             var input = $("#image_job");

                                input.replaceWith(input.val('').clone(true));      
                                
                             // end of clear input form
                             
                                $("#form2").smkClear();
    
                             } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                           // $("#form2").smkClear();
                            $("#contact").focus();
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
				// ele.value = num.toFixed();
                               if(!isNaN(num)){ 
                                ele.value = addCommas(num.toFixed());
                               }
    
                             }
                             
                    
                
                function chkChar(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(!isNaN(num)){  
                                    ele.value = '';
                               } 
			}          
                             
                             
                        
		</script>
                
                <!-- enable inputbox ปั้มเค -->
                
                <script>
                                                
                        document.getElementById('ch_pumk').onchange = function() {
                        document.getElementById('R1_width').disabled = !this.checked;
                        document.getElementById('R1_lenght').disabled = !this.checked;
                        document.getElementById('R2_width').disabled = !this.checked;
                        document.getElementById('R2_lenght').disabled = !this.checked;
                        document.getElementById('R3_width').disabled = !this.checked;
                        document.getElementById('R3_lenght').disabled = !this.checked;
                        document.getElementById('R4_width').disabled = !this.checked;
                        document.getElementById('R4_lenght').disabled = !this.checked;
    
                        };
                        
                </script>
                
               <!-- enable checkbox พลาสติก ปั้ม ไม่ปั้ม -->
                
                <script>
                                                
                        document.getElementById('sales_plastic_check').onchange = function() {
                       
                                  document.getElementById('sales_check_pum1').disabled = !this.checked;
                                  document.getElementById('sales_check_pum2').disabled = !this.checked;
                         
                               
                        };
                        
                </script> 
                <!--  check ปั้มนูน  -->
                  <script>
                                                
                        document.getElementById('sales_check_pumNoon').onchange = function() {
                       
                                  document.getElementById('sales_pumNoon_box').disabled = !this.checked;
                               
                        };
                        
                </script> 
                 <!--  check ปั้มขาด  -->
                 <script>
                                                
                        document.getElementById('sales_check_pumKad').onchange = function() {
                       
                                  document.getElementById('sales_pumKad_box').disabled = !this.checked;
                                 
                        };
                        
                </script> 
                
                
                <!--  check  // check 4. ลูกฟูก -->
                 <script>
                                                
                        document.getElementById('sales_check_LF').onchange = function() {
                       
                                  document.getElementById('sales_4LF_layer_box').disabled = !this.checked;
                                  document.getElementById('sales_4LF_type_box').disabled = !this.checked;
                                 
                        };
                        
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
     <!-- บังคับเป็นตัวเลขเท่านั้น  ขนาดของงาน กว้าง ยาว สูง -->
                
                function chkNum(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }
			}
                 <!-- บังคับเป็นตัวเลข และ ทศนิยมสองตำแหน่ง  ปั้มเค กว้าง ยาว สูง -->       
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
                     <!-- บังคับเป็นตัวเลข และ ใส่คอมม่า ไม่ต้องมีทศนิยม  จำนวน Order -->      
                        
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
                        
                        
                        
                        
		</script>
                
                
                  
                                 <script>
                
                                                
                       document.getElementById('sales_thick_gram_box').onkeydown= function() {
                        var e = document.getElementById("sales_thick_gram_box");
                        var e1 = document.getElementById("sale_paper_cat");
                        
                        
         
                        var str_thick_gram = e.value;
                     
                        var txt12 = $('#form2').serialize(); 
                                  $.ajax({
					   type: "POST",
					   url: "get_cat_paper.php",
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
                        
                      
                
                
</body>
</html>