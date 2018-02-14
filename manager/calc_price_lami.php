<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


$factor_lami = $_POST['factor_lami_data'];
$lami_width = $_POST['lami_width_data'];
$lamin_length = $_POST['lamin_length_data'];
$exa_printAmont = $_POST['exa_printAmont'];

// คำนวณราคา ปัดเศษขึ้น
// $calc_price = 55;
 $calc_price = ((($lami_width*$lamin_length)/144)*$factor_lami)/ $exa_printAmont;
// สิ้นสุดการคำนวณ

if($_POST['factor_lami_data']!=""){
   // echo $calc_price;
     echo number_format($calc_price,2,'.',',');
}
?>