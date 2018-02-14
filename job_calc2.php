<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


$value_gram = $_POST['value_gram'];
$paper_length = $_POST['paper_length'];
$paper_width = $_POST['paper_width'];
$paper_price = $_POST['paper_price'];



// คำนวณราคา ปัดเศษขึ้น

$calc_price = ($value_gram*$paper_length*$paper_width*$paper_price)/ 3100;
// สิ้นสุดการคำนวณ

if($_POST['value_gram']!=""){
   // echo $calc_price;
     echo number_format($calc_price,3,'.',',');
}
?>