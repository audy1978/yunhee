<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    
	
	<?php include 'header.php'; ?>
     <?php include 'db/config_db.php'; ?>
    <!--/header-->
    
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    
                    <h3>สร้างงาน</h3>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">หน้าหลัก</a></li>
                        <li class="active">สร้างงาน</li>
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
                
                
                <form id="form2" action="insert_jobs.php" method="post" class="form" enctype="multipart/form-data" novalidate>
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
                                     <input name="contact" type="text" class="form-control" id="contact"  placeholder="กรอกชื่อลูกค้า" smk-text="กรุณากรอกชื่อลูกค้า ผู้ติดต่อ" required>
                                </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                     <label for="exampleInputPassword1">โทรศัพท์&nbsp;<font color="red">*</font></label>
                                     <input name="tel" type="text" class="form-control" id="tel"   placeholder="กรอกเบอร์โทรศัพท์" smk-text="กรุณากรอกเบอร์โทรศัพท์" required>
                               </div>
                     
                         </div>
                      
                      </div>
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">ชื่อลูกค้า&nbsp;<font color="red">*</font></label>
                      <input name="customer" type="text" class="form-control" id="customer"   placeholder="กรอกชื่อลูกค้าหรือชื่อบริษัท" smk-text="กรุณากรอกชื่อลูกค้าหรือชื่อบริษัท" required>
                    </div>
                    
                   
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">File&nbsp;<font color="red">*</font></label>
                      <input name="file" type="text" class="form-control" id="file"   placeholder="กรอกชื่อ File" smk-text="กรุณากรอกชื่อ File" required>
                    </div>
                    
                   
                      <div class="row"> 
                        
                          <div class="col-md-2">
                              <div class="form-group">
                                <label for="exampleInputPassword1">รหัสไฟล์&nbsp;<font color="red">*</font></label>
                                <input name="filecode" type="text" class="form-control" id="filecode"   placeholder="กรอกรหัสไฟล์" smk-text="กรุณากรอกรหัสไฟล์" required>
                             </div>
                          </div>
                          
                          <div class="col-md-5">
                              
                                  <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ขนาดของงาน&nbsp;<font color="red">*</font> &nbsp; &nbsp;กว้าง</th>
                                    <th><input class="form-control" name="job_width_box" id="job_width_box" style="width:60px; text-align: right;" type="text"  placeholder="มม." style="text-align: right"  maxlength="3"  OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกความกว้าง" required></th>
                                    <th> &nbsp; &nbsp;ยาว</th>
                                    <th><input name="job_length_box" id="job_length_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="มม." maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกความยาว" required></th>
                                    <th>&nbsp; &nbsp;สูง</th>
                                    <th><input name="job_height_box" id="job_height_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="มม." maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกความสูง" required></th>
                                    <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                                   
                                    </thead>
                                        </table>
                              
                          </div>
                      
                          <div class="col-md-5">
                              
                               <table data-toggle="table" data-striped="true">
                            <thead>
                            <tr>
                            <th></th>
                            <th>&nbsp; &nbsp;รูปแบบงาน&nbsp;<font color="red">*</font></th>
                             <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                             <th><input type="radio" id="cr_check_1" name="cr_check" value="ฝาเสียบ" smk-text="กรุณากรอกเลือกรูปแบบงาน" required></th>
                            <th>ฝาเสียบ</th>
                             <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                            <th><input type="radio" id="cr_check_2" name="cr_check" value="ฝาทากาว" smk-text="กรุณากรอกเลือกรูปแบบงาน" required></th>
                            <th>ฝาทากาว</th>
                            <th>&nbsp; &nbsp;&nbsp; &nbsp;</th>
                            <th><input type="radio" id="cr_check_3" name="cr_check" value="อื่น ๆ" smk-text="กรุณากรอกเลือกรูปแบบงาน" required></th>
                            <th>อื่น ๆ</th>
                            
                            </thead>
                          </table>
                              
                              
                              
                          </div>
                          
                          
                      
                      </div>
                      
                      <!--  แก้ไข 29-06-2017  -->
                      <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;ความหนา&nbsp;<font color="red">*</font></th>
                                    <th><input name="sales_thick_gram_box" id="sales_thick_gram_box" style="width:60px; text-align: right;" type="text" class="form-control" style="text-align: right"  maxlength="3"  OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกความหนา" required></th>
                                    <th> &nbsp; &nbsp;แกรม</th>
                                    <th> &nbsp; &nbsp;ประเภทกระดาษ&nbsp;<font color="red">*</font></th>
                                     <th>
                                         
                                            <?php

                    $sql = "SELECT distinct paper_cat FROM tb_paper2";
                    $result = mysql_query($sql);
                    echo "<select name='sale_paper_cat' id='sale_paper_cat' class='form-control'>";
                    while($row1 = mysql_fetch_array($result)){
                     $value = $row1['paper_cat'];
                      echo "<option value='".$value."'>".$value."</option>";
                    }
                    echo "</select>";
                    ?>
                                         
                                         
                                        </th>
                                  
                                     
                                     
                                      <th> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;2. งานพิมพ์ จำนวน&nbsp;<font color="red">*</font></th>
                                    <th><input name="sales_printAmont_box" id="sales_printAmont_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" smk-text="กรุณากรอกจำนวนงานพิมพ์" required></th>
                                    <th>&nbsp; &nbsp;สี</th>
                                    <th> &nbsp; &nbsp;&nbsp; &nbsp; 2.1 งานพลาสติก&nbsp;<font color="red">*</font> &nbsp;</th>
                                     <th><input type="checkbox" id="sales_plastic_check" name="sales_plastic_check" value="มีพลาสติก"  ></th>
                                    <th>&nbsp; มี&nbsp;&nbsp; &nbsp;&nbsp;</th>
                                    <th><input disabled type="radio" id="sales_check_pum1" name="sales_check_pum" value="ปั้ม" ></th>
                                   <th>&nbsp; ปั้ม&nbsp; &nbsp;&nbsp;</th>
                                   <th><input disabled type="radio" id="sales_check_pum2" name="sales_check_pum" value="ไม่ปั้ม" ></th>
                                   <th>&nbsp;ไม่ปั้ม</th>
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                       <p></p>
                                              <!-- 3   -->    

                        <div class="row">

                            <table  data-toggle="table" data-striped="true">
                        <thead>
                        <th>&nbsp;&nbsp;&nbsp;3. เคลือบผิวหน้าแบบ 1</th>
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

                        
                            <!-- เคลื่อบเผิวหน้าแบบที่ 2   -->    
                            
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
                                
                              <!-- จบ เคลื่อบเผิวหน้าแบบที่ 2   -->   
                              
                              <!-- เคลื่อบเผิวหน้าแบบที่ 3   -->     
                                
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
                                
                                <!-- จบ เคลื่อบเผิวหน้าแบบที่ 3   -->   
                                
                                
                                 <!-- เคลื่อบเผิวหน้าแบบที่ 4   -->     
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
                                
                                <!-- จบ เคลื่อบเผิวหน้าแบบที่ 4   -->   
                                 
                                
                        </thead>
                       
                  

                            </table>


                        </div>

                        <!-- End 3   -->  
                      
                        <p></p>
                      
                      
                       <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;4. ลูกฟูก&nbsp;</th>
                                    <th><input type="checkbox" id="sales_check_LF" name="sales_check_LF" value="มีลูกฟูก" ></th>
                                    <th> &nbsp; &nbsp;มี</th>
                                      <th> &nbsp; &nbsp;จำนวน</th>
                                    <th><input disabled name="sales_4LF_layer_box" id="sales_4LF_layer_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="3" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                   
                                    <th>&nbsp; &nbsp;ชั้น</th>
                                    <th> &nbsp; &nbsp;ชนิดลูกฟูก &nbsp;</th>
                                    <th><input disabled name="sales_4LF_type_box" id="sales_4LF_type_box" style="width:270px; text-align: right;" type="text" maxlength="30" class="form-control" placeholder=""  style="text-align: right" OnChange="JavaScript:chkChar(this)" ></th>
                                   
                               
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                      
                         <div class="row">
                               <table data-toggle="table" data-striped="true">
                                    <thead>
                                    <tr>
                                    <th></th>
                                    <th>&nbsp; &nbsp;5. &nbsp;</th>
                                    <th><input  type="checkbox" id="sales_check_pumNoon" name="sales_check_pumNoon" value="ปั้มนูน" ></th>
                                    <th>   ปั้มนูน&nbsp;</th>
                                   
                                    <th><input disabled name="sales_pumNoon_box" id="sales_pumNoon_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="2" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                   
                                    <th>&nbsp; &nbsp;รอบ&nbsp; &nbsp;&nbsp; &nbsp;</th>
                                     <th><input type="checkbox" id="sales_check_pumKad" name="sales_check_pumKad" value="ปั้มขาด" ></th>
                                    <th> &nbsp;ปั้มขาด &nbsp;</th>
                                     <th><input disabled name="sales_pumKad_box" id="sales_pumKad_box" style="width:60px; text-align: right;" type="text" class="form-control" placeholder="" maxlength="2" style="text-align: right" OnChange="JavaScript:chkNum(this)" ></th>
                                    <th>&nbsp; &nbsp;รอบ</th>
                               
                                   
                                    </thead>
                                        </table>
                            
                      </div>
                      
                      
                      <!--  แก้ไข 29-06-2017  -->
                      
                      <p></p>
                      <!-- ปั้มเค -->
                    
                  <div class = "row">
                          
                     <div class="col-md-12">

                        <table data-toggle="table" data-striped="true">
                                <thead>
                                <tr>
                                <th><input type="checkbox" id="ch_pumk" name="ch_pumk" value="ปั๊มเค" ></th>
                                <th>&nbsp;ปั้มเค </th>
                                <th>รอบ 1 ก.</th>
                                <th><input disabled  id="R1_width" name="R1_width" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R1A; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)"></th>
                                <th>&nbsp;&nbsp;ย.</th>
                                <th><input disabled id="R1_lenght" name="R1_lenght" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R1AY; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)" ></th>

                                <!--  ปั๊มเค รอบ 2 -->
                                 <th> &nbsp;&nbsp;  </th>
                                <th>รอบ 2 ก.</th>
                                <th><input disabled id="R2_width" name="R2_width" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R2A; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)"></th>
                                <th>&nbsp;&nbsp;ย.</th>
                                <th><input disabled id="R2_lenght" name="R2_lenght" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R2Y; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)" ></th>

                                <!--  ปั๊มเค รอบ 3 -->
                                 <th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ 3 ก.</td>
                                <th><input disabled id="R3_width" name="R3_width" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R3A; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)" ></th>
                                <th>&nbsp;&nbsp;ย.</td>
                                <th><input disabled id="R3_lenght" name="R3_lenght" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R3Y; ?>" placeholder="นิ้ว"  OnChange="JavaScript:chkNum2(this)"></th>

                                <!--  ปั๊มเค รอบ 4 -->
                                 <th>&nbsp;&nbsp;&nbsp;&nbsp;รอบ 4 ก.</th>
                                <th><input disabled id="R4_width" name="R4_width" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R4A; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)"></th>
                                <th>&nbsp;&nbsp;ย.</td>
                                <th><input disabled id="R4_lenght" name="R4_lenght" type="text" class="form-control" maxlength="5" style="width:80px; text-align: right;"  value="<?php echo $exa_R4AY; ?>" placeholder="นิ้ว" OnChange="JavaScript:chkNum2(this)"></th>

                                </tr>

                                </thead>
      
                        </table>

                      </div>
                  
                </div>
                      
                      <div class="row">
                               <div class="col-md-8">
                           <label for="exampleInputFile">ข้อความ</label> 
                        
                            <textarea class="form-control" rows="5" id="job_note" name="job_note" ></textarea> 
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
                            <input name="jobs_order1" type="text" class="form-control" id="jobs_order1"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                        
                       </div>
                      
                      <div class="col-md-2">
                          <label for="jobs_order2"><font color="red">*</font>&nbsp;2.</label>    
                          <input name="jobs_order2" type="text" class="form-control" id="jobs_order2"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                          </div>
                      <div class="col-md-2">
                          <label for="jobs_order3"><font color="red">*</font>&nbsp;3.</label>    
                          <input name="jobs_order3" type="text" class="form-control" id="jobs_order3"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)" smk-text="กรุณากรอกจำนวน Order" required> 
                          </div>
                     
                       <div class="col-md-2">
                         <label for="jobs_order4">4.</label> 
                            <input name="jobs_order4" type="text" class="form-control" id="jobs_order4"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                        
                       </div>
                      
                       <div class="col-md-2">
                          <label for="jobs_order5">5.</label>    
                          <input name="jobs_order5" type="text" class="form-control" id="jobs_order5"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                          </div>
                      <div class="col-md-2">
                          <label for="jobs_order6">6.</label>    
                          <input name="jobs_order6" type="text" class="form-control" id="jobs_order6"   placeholder="" OnChange="JavaScript:chkNum_addcomma(this)"> 
                          </div>  
                      
                      </div>             
                       
                     
                    
                    
                    
                    
                   
                    <!-- สิ้นสุด จำนวน order -->
                    <p>
                    
                    
                    
                    
                     <!-- NOTE -->
                    
                   
                    
                    <p>
                    
                    <div class="form-group">
                      <label for="image_job">ภาพงาน</label>
                      <input name="image_job" type="file" id="image_job">
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
                    if ($('#form2').smkValidate()) {
                        //upload file via ajax setting
                        $.ajax({
                            url: 'insert_jobs.php',
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
                              
                             //   $.post( "gmail.php",  $( "#form2" ).serialize() );
                                
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
                    }
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
     <!-- บังคับเป็นตัวเลขเท่านั้น  ขนาดของงาน กว้าง ยาว สูง ใส่จุดไม่ได้-->
                
                 function chkNum(ele)
			{
				var num = parseInt(ele.value);
				// ele.value = num.toFixed();
                               if(isNaN(num)){  
                                ele.value = '';
                            }else{
                            ele.value = num;
                                   }
                            
			}
                        
                        
                        
                        
                        
                   <!-- บังคับเป็นตัวอักษรเท่านั้น  ขนาดของงาน ชนิดลูกฟูก  -->
                
                function chkChar(ele)
			{
				var num = parseFloat(ele.value);
				// ele.value = num.toFixed();
                               if(!isNaN(num)){  
                         
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
                        //   var num2 = num.toPrecision(4);
			var num2 = num.toFixed(2);
                           if(num2<100){
                            ele.value = num2;
                            }else{
                           ele.value = '';
                           }
                                 
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
                
                <!-- script check ค่า ความหนา ให้ ประเภทกระดาษ เปลี่ยน หน้า sale  --> 
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
                        
                        <!-- script check ค่า ความหนา ให้ ประเภทกระดาษ เปลี่ยน   --> 
                
             
    
                
                
</body>
</html>