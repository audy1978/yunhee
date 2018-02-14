<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


$factor_lf = $_POST['factor_lf_data'];
$lf_width = $_POST['lf_width_data'];
$lf_length = $_POST['lf_length_data'];
$exa_printAmont = $_POST['exa_printAmont'];

// คำนวณราคา ปัดเศษขึ้น

$calc_price = ((($lf_width*$lf_length)/144)*$factor_lf)/ $exa_printAmont;
// สิ้นสุดการคำนวณ

if($_POST['factor_lf_data']!=""){
   // echo $calc_price;
     echo number_format($calc_price,2,'.',',');
}
?>