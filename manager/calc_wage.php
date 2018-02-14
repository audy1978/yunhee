<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
//if($_POST['value_gram']!=""){
   // echo $_POST['value_gram']." ";
//}


  $print_wage1color = $_POST['print_wage1Color'];
$number_color= $_POST['number_color'];
$paper_length = $_POST['paper_length'];
$paper_width = $_POST['paper_width'];

 $ch_print_wage = $_POST['ch_print_wage2'];

 
    function extract_int($str){  
    $str=str_replace(",","",$str);
     preg_match('/[[:digit:]]+\.?[[:digit:]]*/', $str, $regs);  
     return (doubleval($regs[0]));  
}
 
// คำนวณราคา ปัดเศษขึ้น
 $print_wage1color = extract_int($print_wage1color);
          if($print_wage1color<1800){
            $print_wage1color = 1800;
          }
$calc_price = $print_wage1color*$number_color;

 // $calc_price = ($ch_print_wage*$paper_width*$paper_length*$number_color);
// สิ้นสุดการคำนวณ

if($_POST['number_color']!=""){
  //  echo $number_color;
     echo number_format($calc_price,2);
}
?>