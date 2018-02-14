<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

include 'db/config_db.php';

$paper_cat = mysql_real_escape_string(trim($_POST['paper_cat1']));
$paper_sellers = mysql_real_escape_string(trim($_POST['paper_sellers1']));
$paper_band = mysql_real_escape_string(trim($_POST['paper_band1']));
$paper_gram = mysql_real_escape_string(trim($_POST['paper_gram1']));
$paper_size = mysql_real_escape_string(trim($_POST['paper_size1']));
$paper_type_option =  mysql_real_escape_string(trim($_POST['paper_type_option1']));
$file_code = $_SESSION['file_code'];

// บันทึกค่า ลง  tb_job 

 $strSQL1 = "UPDATE tb_jobs SET pur_cat='{$paper_cat}',pur_seller='{$paper_sellers}',pur_band='{$paper_band}',pur_thick='{$paper_gram}'"
 . ",pur_sizepaper ='{$paper_size}',pur_type ='{$paper_type_option}' WHERE jobs_filecode = '{$file_code}'";
 $objQuery1 = mysql_query($strSQL1);

// สินสุดการบันทึกค่า 

// ค้นหาข้อมูลราคาในฐานข้อมูล  

$strSQL = "SELECT paper_price FROM tb_paper2 WHERE paper_cat='$paper_cat' AND paper_seller='$paper_sellers' AND paper_band = '$paper_band' AND paper_thickness = '$paper_gram'";
//$strSQL = "SELECT paper_price FROM tb_paper WHERE paper_category='$paper_cat'"; 
$objQuery = mysql_query($strSQL);
while($objResuut = mysql_fetch_array($objQuery))
   {
	$paper_price = $objResuut["paper_price"];
			
    }
		

// จบการค้นหา

if($_POST['paper_cat1']!=""){
 
     echo number_format($paper_price,2,'.',',');
  
  // echo $paper_cat;
    
    
  // echo  $paper_sellers;
}
//if($_POST['email']!=""){
   // echo $_POST['email'];
//}
?>