<?php

     include '../mpdf/mpdf.php';
     ob_start();
?>
<?php date_default_timezone_set("Asia/Bangkok");   ?>
 <?php include 'db/config_db.php'; ?>

 <?php
     
     include 'db/database.php';
	$file_code3 =  $_GET["file_code"];	
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code3'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        if ($result_filecode) {
            $row_filecode =  mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            $user_id = $row_filecode['user_id'];
           $jobs_contact = $row_filecode['jobs_contact'];
           $jobs_file = $row_filecode['jobs_file'];
           $jobs_date = $row_filecode['jobs_date'];
           
            $pur_thick_gram = $row_filecode['pur_thick_gram'];
            $exa_printAmont = $row_filecode['exa_printAmont'];
            
            $job_width = $row_filecode['job_width'];
            $job_length = $row_filecode['job_length'];
            $job_hieght  = $row_filecode['job_hieght'];
            $job_filecode  = $row_filecode['jobs_filecode'];
            $jobs_customer  = $row_filecode['jobs_customer'];
        
            
            mysqli_free_result($result_filecode);
        }
        
       
        
        
        ?>



<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
       
   <?php
    $qouta_name  = $_POST['qouta_name'];
    $qouta_date = $_POST['quota_date_box'];
    $qouta_customer = $_POST['qouta_customer_box'];
    $qouta_job_title = $_POST['qouta_job_title_box'];
    
     $qouta_page1 = $_POST['qouta_page1_box'];
    $qouta_page2 = $_POST['qouta_page2_box'];
    $qouta_page_total = $_POST['qouta_page_total_box'];
    
    $qouta_paperMatt = $_POST['qouta_paperMatt_box'];
    $qouta_color = $_POST['qouta_color_box'];
    
    $qouta_amount1 = $_POST['qouta_amount_box1'];
    $qouta_price1 = $_POST['qouta_price_box1'];
    
    $qouta_amount2 = $_POST['qouta_amount_box2'];
    $qouta_price2 = $_POST['qouta_price_box2'];
    
     $qouta_amount3 = $_POST['qouta_amount_box3'];
    $qouta_price3 = $_POST['qouta_price_box3'];
    
    $qouta_amount4 = $_POST['qouta_amount_box4'];
    $qouta_price4 = $_POST['qouta_price_box4'];
    
    $qouta_amount5 = $_POST['qouta_amount_box5'];
    $qouta_price5 = $_POST['qouta_price_box5'];
    
    
    
    
    $qouta_deviceS = $_POST['qouta_deviceS_box'];
    $qouta_dueDeliver = $_POST['qouta_dueDeliver_box'];
    $qouta_location = $_POST['qouta_location_box'];
    $qouta_credit = $_POST['qouta_credit_box'];
    $qouta_payAdd = $_POST['qouta_payAdd_box'];
    $qouta_pack = $_POST['qouta_pack_box'];
    
    $qouta_AddPer = $_POST['qouta_AddPer_box'];
    $qouta_Add4 = $_POST['qouta_Add4_box'];
    $qouta_Add5 = $_POST['qouta_Add5_box'];
    $qouta_Add6 = $_POST['qouta_Add6_box'];
    $qouta_Add7 = $_POST['qouta_Add7_box'];
    $qouta_Add8 = $_POST['qouta_Add8_box'];
    
    $qouta_Add2 = $_POST['qouta_Add2_box'];
    
    $quota_review = $_POST['quota_review'];
    
     $qouta_name = $_POST['qouta_name_box'];
     $qouta_position = $_POST['qouta_position_box'];
    
    
    $qouta_job_title1 = $_POST['qouta_job_title_box1'];
    
    
   ?>
        <p>
        
        <p>
            <br>
            <br>
           <br>
            <br>
       
            
        
    
           
        
  
        
            <div class="row">
                <div class="col-md-12" style="padding: 50px;">
                      <h3><p class="text-center"  style="font-size: 22pt"><b>ใบเสนอราคา</b> </p></h3>
                        <p  style="font-size: 16pt">
                    <b>   &nbsp;Code : <?php echo $job_filecode;   ?> 

                     <?php 
                                if($quota_review!=''){
                                ?>

                                Review ครั้งที่ <?php echo $quota_review; ?> 
                             <?php } ?>

                    </b>



                    </p>

                    <table class="table table-bordered" >
                    <thead>
                            <tr>
                                <td style="font-size: 14pt;">เรียน : <b><?php echo $qouta_job_title1; ?></b></td>
                                
                                <td style="font-size: 14pt;">วันที่ : <b><?php echo $qouta_date; ?><b/> </td>
                            
                            </tr>
                           
                    </thead>  
                    <tbody>
                        <tr>
                            <td style="font-size: 14pt;"><b><?php echo $jobs_customer; ?></b></td>
                            <td style="font-size: 14pt;">แผ่นที่ <?php echo $qouta_page1; ?> / <?php echo $qouta_page2; ?> รวม <?php echo $qouta_page_total; ?> แผ่น</td>
                        </tr>
                    </tbody>
                    
                    </table> 
                   
                  <!-- <label><?php echo $qouta_customer; ?> </label>  -->
                   
                    
                       
                    <label> <font style="font-size: 14pt;">บริษัทฯ ขอเสนอราคาค่าผลิต <b><?php echo $jobs_file; ?></b> </font></label><p>
                                           

                   
                  
                        <label> <font style="font-size: 14pt;"> วัสดุ กระดาษ <b><?php echo $qouta_paperMatt; ?> <?php echo $pur_thick_gram; ?></b>  แกรม   </font></label><p>
                                   
                                           
                        
                    <label> <font style="font-size: 14pt;">พิมพ์ <b> <?php echo $exa_printAmont; ?></b>สี <b><?php echo $qouta_color; ?></b></font></label>
                                            
                                            
                    
                   
                    <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; font-size: 14pt;" colspan="2"><?php echo $jobs_file; ?></th>
                                        
                                    </tr>
                                    <tr >
                                            <th style="text-align: center; font-size: 14pt;">จำนวนผลิต</th>
                                           
                                            <th style="text-align: center; font-size: 14pt;">ราคา</th>
                                        
                                        </tr>

                                </thead>  
                                <tbody>
                                    
                                    <?php  if($qouta_amount1!=''){ ?>
                                     <tr>
                                         <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_amount1; ?></th>
                                           
                                         <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_price1; ?></th>
                                        
                                        </tr>
                                        
                                        <?php } ?>
                                        
                                        <?php  if($qouta_amount2!=''){ ?>
                                          <tr>
                                              <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_amount2; ?></th>
                                           
                                              <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_price2; ?></th>
                                        
                                        </tr>
                                         <?php } ?>
                                        
                                         <?php  if($qouta_amount3!=''){ ?>
                                         <tr>
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_amount3; ?></th>
                                           
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_price3; ?></th>
                                        
                                        </tr>
                                        <?php } ?>
                                        
                                         <?php  if($qouta_amount4!=''){ ?>
                                        <tr>
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_amount4; ?></th>
                                           
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_price4; ?></th>
                                        
                                        </tr>
                                        <?php } ?>
                                        
                                         <?php  if($qouta_amount5!=''){ ?>
                                           <tr>
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_amount5; ?></th>
                                           
                                             <th style="text-align: right; font-size: 14pt;"><?php echo $qouta_price5; ?></th>
                                        
                                        </tr>
                                        <?php } ?>
                                        
                                        
                                    
                                </tbody>
                     </table>
                   
                   <p></p>
                      <table class="table table-bordered">
                                <thead>
                                    <tr >
                                        <td style="text-align: left; font-size: 14pt;">อุปกรณ์พิเศษ  <b><?php echo $qouta_deviceS; ?></b></td>
                                           
                                        <td style="text-align: left; font-size: 14pt;">กำหนดส่งสินค้า <b><?php echo $qouta_dueDeliver; ?></b></td>
                                        
                                        </tr>
                                          <tr >
                                              <td style="text-align: left; font-size: 14pt;">สถานที่จัดส่ง <b><?php echo $qouta_location; ?><b></td>
                                           
                                                          <td style="text-align: left; font-size: 14pt;">เครดิต เทอม จำนวน <b><?php echo $qouta_credit; ?></b> &nbsp;วัน</td>
                                        
                                        </tr>
                                          <tr >
                                              <td style="text-align: left; font-size: 14pt;">ค่าใช้จ่ายเพิ่มเติม <b><?php echo $qouta_payAdd; ?></b></td>
                                           
                                              <td style="text-align: left; font-size: 14pt;">การบรรจุ  <b><?php echo $qouta_pack; ?></b></td>
                                        
                                        </tr>

                                </thead> 
                      </table>
                   <p>
                   <p>
                   <label><font style="font-size: 14pt;">1. ราคาไม่รวมภาษีมูลค่าเพิ่ม </font></label><p>
                 
                  
                       <label><font style="font-size: 14pt;">2. ราคาเปลี่ยนแปลงตามราคาวัสดุที่ใช้ผลิต   <?php echo $qouta_Add2; ?></font></label><p>
                  
                       <label><font style="font-size: 14pt;">3. ขนาดกล่อง <b>  <?php echo $job_width; ?> X <?php echo $job_length; ?> X <?php echo $job_hieght; ?> </b>  หน่วยเป็น มม.   </font></label><p>
                 
                      
                   <label><font style="font-size: 14pt;"> 
                        <?php 
                        if($qouta_Add4!=''){
                        ?>
                         
                         4.   <?php echo $qouta_Add4; ?>
                     <?php } ?>
                     
                         </font></label><p>
                     
                   
                   
                   <label><font style="font-size: 14pt;"> 
                        <?php 
                        if($qouta_Add5!=''){
                        ?>
                         
                         5.   <?php echo $qouta_Add5; ?>
                     <?php } ?>
                     
                         </font></label><p>
                     
                     
                     
                  
                     <label><font style="font-size: 14pt;">
                          <?php 
                        if($qouta_Add6!=''){
                        ?>
                         6.   <?php echo $qouta_Add6; ?> 
                     
                      <?php } ?>
                      </font></label><p>
                         
                         
                        <label><font style="font-size: 14pt;">
                          <?php 
                        if($qouta_Add7!=''){
                        ?>
                         7.   <?php echo $qouta_Add7; ?> 
                     
                      <?php } ?>
                      </font></label> <p>
                         
                         
                       <label><font style="font-size: 14pt;">
                          <?php 
                        if($qouta_Add8!=''){
                        ?>
                         8.   <?php echo $qouta_Add8; ?> 
                     
                      <?php } ?>
                      </font></label>
                    
                        <br>
                       <br>
                       
                     
                       <p style="font-size: 14pt;">ขอแสดงความนับถือ </p>
                       
                       <br>
                       <br>
                        <br>
                       
                       <p style="font-size: 14pt;"><b>(<?php echo $qouta_name; ?>)</b>   </p>
                       <p style="font-size: 14pt;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $qouta_position; ?> </b></p>
            <p class="text-left" style="font-size: 14pt; text-align: right;">FM MKT 01/03 REV 01 </p> 
            </div>
            
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
