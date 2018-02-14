<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


$pur_offersale = $_POST['pur_offersale'];
$pur_thick = $_POST['pur_thick'];
$paper_length = $_POST['paper_length'];
$paper_width = $_POST['paper_width'];



// คำนวณราคา ปัดเศษขึ้น

$calc_price = ($pur_offersale*$pur_thick*$paper_length*$paper_width)/ 3100;
// สิ้นสุดการคำนวณ

if($_POST['pur_offersale']!=""){
   // echo $pur_thick;
     echo number_format($calc_price,3,'.',',');
}
?>