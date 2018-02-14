<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

header('Content-Type: application/json');
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}

include 'db/config_db.php';


 $userName = $_POST['userName'];

// $paper_seller = $_POST['paper_seller'];

$strSQL = "SELECT COUNT(jobs_status) AS `count` FROM tb_jobs WHERE jobs_status='รอดำเนินการ'";
//$strSQL = "SELECT paper_price FROM tb_paper WHERE paper_category='$paper_cat'"; 
$objQuery = mysql_query($strSQL);

 $row = mysql_fetch_assoc($objQuery);
$count = $row['count'];       
	
echo json_encode(array('status' => '1','message'=> $count) );	


  //  echo json_encode(array('status' => '1','message1'=> $paper_cat,'message2'=> $paper_seller) );
    
    
  //   echo $paper_cat;

?>