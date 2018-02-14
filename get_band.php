<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

header('Content-Type: application/json');
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}

include 'db/config_db.php';


$paper_seller = $_POST['paper_seller'];

// $paper_seller = $_POST['paper_seller'];

$strSQL = "SELECT distinct paper_band FROM tb_paper2 WHERE paper_seller='$paper_seller'";
//$strSQL = "SELECT paper_price FROM tb_paper WHERE paper_category='$paper_cat'"; 
$objQuery = mysql_query($strSQL);
$i=1;
while($objResuut = mysql_fetch_array($objQuery))
   {
	$paper_band1[$i] = $objResuut["paper_band"];
	// echo json_encode(array('status' => '1','message1'=> $paper_seller1) );		
       $i++;
        }
        $i= $i-1;
	
echo json_encode(array('count' => $i,'status' => '1','message1'=> $paper_band1[1],'message2'=> $paper_band1[2],'message3'=> $paper_band1[3],'message4'=> $paper_band1[4],'message5'=> $paper_band1[5],'message6'=> $paper_band1[6],'message7'=> $paper_band1[7],'message8'=> $paper_band1[8],'message9'=> $paper_band1[9],'message10'=> $paper_band1[10]) );	


  //  echo json_encode(array('status' => '1','message1'=> $paper_cat,'message2'=> $paper_seller) );
    
    
  //   echo $paper_cat;

?>