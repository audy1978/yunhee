<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


$exa_R1A = $_POST['exa_R1A'];
$exa_R1AY = $_POST['exa_R1AY1'];
$exa_printAmont = $_POST['exa_printAmont'];
$variable_print = $_POST['variable_print'];



// คำนวณราคา ปัดเศษขึ้น

$calc_price = ($exa_R1A*$exa_R1AY*$variable_print)/ $exa_printAmont;
// สิ้นสุดการคำนวณ

if($_POST['exa_R1A']!=""){
   // echo $calc_price;
     echo number_format($calc_price,3,'.',',');
}
?>