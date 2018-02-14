<?php
    session_start();
    include 'db/database.php';
       
	
	//data 
	
	$filecode = $_SESSION['file_code'];
         
        
        
        // วัสดุที่ได้รับจากลูกค้า
        
            $product_name = $_POST['product_name'];
            $date_due = $_POST['date_due'];
            $product_code = $_POST['product_code'];
            $customer_no = $_POST['customer_no'];
        
        
        $ck_example = $_POST['ck_example'];
        $ck_art_work = $_POST['ck_art_work'];
	$ck_disc = $_POST['ck_disc'];
	$ck_print_prototype = $_POST['ck_print_prototype'];
        $ck_barcode = $_POST['ck_barcode'];
        $ck_etc1 = $_POST['ck_etc1'];
        $etc1 = $_POST['etc1'];
        
        
        //   จบ วัสดุที่ได้รับจากลูกค้า
        
        // สิ่งที่ต้องการ
        $ck_proof = $_POST['ck_proof'];
        $ck_etc2 = $_POST['ck_etc2'];
        $etc2 = $_POST['etc2'];
       
        //การบรรจุ
        
        $ck_hor_box       = $_POST['ck_hor_box'];
       // $ck_box       = $_POST['ck_box'];
        $ck_pallet       = $_POST['ck_pallet'];
        
        
        
         $proof_locate       = $_POST['proof_locate'];
         $manager_sale_dept1     = $_POST['manager_sale_dept1'];

         $style_job     = $_POST['style_job'];
         
            
         $exa_result1_date     = $_POST['exa_result1_date'];

         $ck_digital_proof1     = $_POST['ck_digital_proof1'];
         $ck_proof_soft1      = $_POST['ck_proof_soft1'];

         $ck_proof_real_paper1       = $_POST['ck_proof_real_paper1'];
         $ck_etc3       = $_POST['ck_etc3'];

         $etc3   = $_POST['etc3'];
         $ck_accept1  = $_POST['ck_accept1'];
        $by_box11   = $_POST['by_box11'];

          $exa1_accept_date       = $_POST['exa1_accept_date'];

          // read radio

          $ck_no_accept1  = $_POST['ck_no_accept1']; 
          // edit 1-7-2017
          $by_box12   = $_POST['by_box12'];
          $exa1_no_accept_date   = $_POST['exa1_no_accept_date'];
          $detial_edit1   = $_POST['detial_edit1'];
          $plate_value1   = $_POST['plate_value1'];
          // 3.
          $bill_no11=  $_POST['bill_no11'];
          $bill_date11=  $_POST['bill_date11'];
          $type_pum_value1=  $_POST['type_pum_value1'];
          $bill_no12=  $_POST['bill_no12'];
          $bill_date12=  $_POST['bill_date12'];
          // 4. ลูกฟูก
          $exa_result2_date   = $_POST['exa_result2_date'];
          $ck_digital_proof2 =  $_POST['ck_digital_proof2'];
          $ck_proof_soft2 =  $_POST['ck_proof_soft2'];

          // 5. ปั้มนูน ปั้มขาด
          $ck_proof_real_paper2 =  $_POST['ck_proof_real_paper2'];
          $ck_etc4 =  $_POST['ck_etc4'];
          
          
          $etc4 =  $_POST['etc4'];
          $ck_accept2 =  $_POST['ck_accept2'];
          $by_box21 =  $_POST['by_box21'];
          $exa1_accept_date2 =  $_POST['exa1_accept_date2'];
          
          
          
          // 14
          
          $ck_no_accept2 =  $_POST['ck_no_accept2'];
          
          $by_box22 =  $_POST['by_box22'];
          $exa2_no_accept_date =  $_POST['exa2_no_accept_date'];
          $detial_edit2 =  $_POST['detial_edit2'];
          $plate_value2 =  $_POST['plate_value2'];
          $bill_no21 =  $_POST['bill_no21'];
          $bill_date21 =  $_POST['bill_date21'];
          
          $type_pum_value2 =  $_POST['type_pum_value2'];
          
          $bill_no22 =  $_POST['bill_no22'];
          $bill_date22 =  $_POST['bill_date22'];
          $product_no =  $_POST['order_produce_no'];
          $order_no =  $_POST['order_buy_no'];
          $amount =  $_POST['amount'];
          $manager_sale_dept2 =  $_POST['manager_sale_dept2'];
          // 14
          




// new edit
        
        
        
        $user_id = $_SESSION['user_id'];
                    	
	date_default_timezone_set('UTC');
	$date = date("d-m-Y");
   
   	
// เช็คว่ามีข้อมูลอยู่แล้วหรือไม่  ถ้ามีให้ update ถ้าไม่มี insert
         
        
        $qry_filecode = "SELECT filecode FROM tb_order_exa WHERE filecode='$filecode'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        $rowcount=mysqli_num_rows($result_filecode);
        
        if ($rowcount==NULL) {
           
        
           $sql = "INSERT INTO `tb_order_exa` (`customer_no`,`product_code`,`date_due`,`product_name`,`filecode`, `ck_example`, `ck_art_work`,`ck_disc`,`ck_print_prototype`,`ck_barcode`,`ck_etc1`,`etc1`,`ck_proof`,`ck_etc2`,`etc2`,`ck_hor_box`,`ck_pallet`,`proof_locate`,`manager_sale_dept1`,`style_job`,`exa_result1_date`,`ck_digital_proof1`,`ck_proof_soft1`,`ck_proof_real_paper1`,`ck_etc3`,`etc3`,`ck_accept1`,`by_box11`,`exa1_accept_date`,`ck_no_accept1`,`by_box12`,`exa1_no_accept_date`,`detial_edit1`,`plate_value1`,`bill_no11`,`bill_date11`,`type_pum_value1`,`bill_no12`,`bill_date12`,`exa_result2_date`,`ck_digital_proof2`,`ck_proof_soft2`,`ck_proof_real_paper2`,`ck_etc4`,`etc4`,`ck_accept2`,`by_box21`,`exa1_accept_date2`,`ck_no_accept2`,`by_box22`,`exa2_no_accept_date`,`detial_edit2`,`plate_value2`,`bill_no21`,`bill_date21`,`type_pum_value2`,`bill_no22`,`bill_date22`,`product_no`,`order_no`,`amount`,`manager_sale_dept2`) VALUES ('$customer_no','$product_code','$date_due','$product_name','$filecode','$ck_example', '$ck_art_work','$ck_disc','$ck_print_prototype','$ck_barcode','$ck_etc1','$etc1','$ck_proof','$ck_etc2','$etc2','$ck_hor_box','$ck_pallet','$proof_locate','$manager_sale_dept1','$style_job','$exa_result1_date','$ck_digital_proof1','$ck_proof_soft1','$ck_proof_real_paper1','$ck_etc3','$etc3','$ck_accept1','$by_box11','$exa1_accept_date','$ck_no_accept1','$by_box12','$exa1_no_accept_date','$detial_edit1','$plate_value1','$bill_no11','$bill_date11','$type_pum_value1','$bill_no12','$bill_date12','$exa_result2_date','$ck_digital_proof2','$ck_proof_soft2','$ck_proof_real_paper2','$ck_etc4','$etc4','$ck_accept2','$by_box21','$exa1_accept_date2','$ck_no_accept2','$by_box22','$exa2_no_accept_date','$detial_edit2','$plate_value2','$bill_no21','$bill_date21','$type_pum_value2','$bill_no22','$bill_date22','$product_no','$order_no','$amount','$manager_sale_dept2')";
        }else{
          
   
       $sql = "UPDATE tb_order_exa SET customer_no='{$customer_no}',product_code='{$product_code}',date_due='{$date_due}',product_name='{$product_name}',ck_example='{$ck_example}',ck_art_work='{$ck_art_work}',ck_disc='{$ck_disc}',ck_print_prototype='{$ck_print_prototype}',ck_barcode='{$ck_barcode}',ck_etc1='{$ck_etc1}',etc1='{$etc1}',ck_proof='{$ck_proof}',ck_etc2='{$ck_etc2}',etc2='{$etc2}',ck_hor_box='{$ck_hor_box}',ck_pallet='{$ck_pallet}',proof_locate='{$proof_locate}',manager_sale_dept1='{$manager_sale_dept1}',style_job='{$style_job}',exa_result1_date='{$exa_result1_date}',ck_digital_proof1='{$ck_digital_proof1}',ck_proof_soft1='{$ck_proof_soft1}',ck_proof_real_paper1='{$ck_proof_real_paper1}',ck_etc3='{$ck_etc3}'"  
             . ",etc3 ='{$etc3}',ck_accept1 ='{$ck_accept1}',by_box11 ='{$by_box11}',exa1_accept_date ='{$exa1_accept_date}',bill_date12 ='{$bill_date12}',exa_result2_date ='{$exa_result2_date}',ck_digital_proof2 ='{$ck_digital_proof2}',ck_proof_soft2 ='{$ck_proof_soft2}',ck_proof_real_paper2 ='{$ck_proof_real_paper2}',ck_etc4 ='{$ck_etc4}',etc4 ='{$etc4}',ck_accept2 ='{$ck_accept2}',by_box21 ='{$by_box21}',exa1_accept_date2 ='{$exa1_accept_date2}'"
             . ",ck_no_accept2 ='{$ck_no_accept2}',by_box22 ='{$by_box22}',exa2_no_accept_date ='{$exa2_no_accept_date}',detial_edit2 ='{$detial_edit2}',plate_value2 ='{$plate_value2}',bill_no21 ='{$bill_no21}',bill_date21 ='{$bill_date21}',type_pum_value2 ='{$type_pum_value2}',bill_no22 ='{$bill_no22}',bill_date22 ='{$bill_date22}',product_no ='{$product_no}',order_no ='{$order_no}',amount ='{$amount}',manager_sale_dept2  ='{$manager_sale_dept2 }'"
              . ",ck_no_accept1 ='{$ck_no_accept1}',by_box12 ='{$by_box12}',exa1_no_accept_date ='{$exa1_no_accept_date}',detial_edit1 ='{$detial_edit1}',plate_value1 ='{$plate_value1}',bill_no11 ='{$bill_no11}',bill_date11 ='{$bill_date11}',type_pum_value1 ='{$type_pum_value1}',bill_no12 ='{$bill_no12}' WHERE filecode = '{$filecode}'";
   
            
        }
        // เช็คว่ามีข้อมูลอยู่แล้วหรือไม่  ถ้ามีให้ update ถ้าไม่มี insert
        
        
    
    
        
      //  $sql = "INSERT INTO `tb_order_exa` (`filecode`, `ck_example`, `ck_art_work`,`ck_disc`,`ck_print_prototype`,`ck_barcode`,`ck_etc1`,`etc1`,`ck_proof`,`ck_etc2`,`etc2`,`ck_hor`,`ck_box`,`ck_pallet`,`proof_locate`,`manager_sale_dept1`,`style_job`,`exa_result1_date`,`ck_digital_proof1`,`ck_proof_soft1`,`ck_proof_real_paper1`,`ck_etc3`,`etc3`,`ck_accept1`,`by_box11`,`exa1_accept_date`,`ck_no_accept1`,`by_box12`,`exa1_no_accept_date`,`detial_edit1`,`plate_value1`,`bill_no11`,`bill_date11`,`type_pum_value1`,`bill_no12`,`bill_date12`,`exa_result2_date`,`ck_digital_proof2`,`ck_proof_soft2`,`ck_proof_real_paper2`,`ck_etc4`,`etc4`,`ck_accept2`,`by_box21`,`exa1_accept_date2`,`ck_no_accept2`,`by_box22`,`exa2_no_accept_date`,`detial_edit2`,`plate_value2`,`bill_no21`,`bill_date21`,`type_pum_value2`,`bill_no22`,`bill_date22`,`product_no`,`order_no`,`amount`,`manager_sale_dept2`) VALUES ('$filecode','$ck_example', '$ck_art_work','$ck_disc','$ck_print_prototype','$ck_barcode','$ck_etc1','$etc1','$ck_proof','$ck_etc2','$etc2','$ck_hor','$ck_box','$ck_pallet','$proof_locate','$manager_sale_dept1','$style_job','$exa_result1_date','$ck_digital_proof1','$ck_proof_soft1','$ck_proof_real_paper1','$ck_etc3','$etc3','$ck_accept1','$by_box11','$exa1_accept_date','$ck_no_accept1','$by_box12','$exa1_no_accept_date','$detial_edit1','$plate_value1','$bill_no11','$bill_date11','$type_pum_value1','$bill_no12','$bill_date12','$exa_result2_date','$ck_digital_proof2','$ck_proof_soft2','$ck_proof_real_paper2','$ck_etc4','$etc4','$ck_accept2','$by_box21','$exa1_accept_date2','$ck_no_accept2','$by_box22','$exa2_no_accept_date','$detial_edit2','$plate_value2','$bill_no21','$bill_date21','$type_pum_value2','$bill_no22','$bill_date22','$product_no','$order_no','$amount','$manager_sale_dept2')";
    
   
    
    
    
    $result = mysqli_query($link, $sql);
    // $errors1 = mysqli_error($link);
    
	
	if ($result) {
         
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success','message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'));
    	
		      	
	} else {
        header('Content-Type: application/json');
        $errors = "เกิดข้อผิดพลาด";
         
        echo json_encode(array('status' => 'danger','message' => $errors));
       
      
        
        }

