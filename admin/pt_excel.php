<?php

include '../db/database.php';
require_once '../phpexcel/Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


// Set document properties
$objPHPExcel->getProperties()->setCreator("akenarin komkoon")
			     ->setLastModifiedBy("akenarin komkoon")
			     ->setTitle("PHPExcel Tutorial from codingthailand.com")
			     ->setSubject("PHPExcel Tutorial from codingthailand.com")
		   	     ->setDescription("This is the tutorial for PHP Excel from codingthailand.com")
			      ->setKeywords("office PHPExcel")
		      	     ->setCategory("Tutorial Result");


// Add Data in your file
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'prodTypeID ')
            ->setCellValue('B1', 'prodTypeName');


//from mysql
$sql2 = "SELECT * FROM product_type";
$result = mysqli_query($link, $sql2);
$cell = 2;
while ($row = mysqli_fetch_assoc($result)) {     
        $objPHPExcel->getActiveSheet()
                ->setCellValue('A'.$cell, $row['prodTypeID'])
                ->setCellValue('B'.$cell,  $row['prodTypeName']);
            $cell++;
}


// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('codingthailand.com');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file

//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save('product_type.xlsx');

// Save Excel 2003 file

//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
//$objWriter->save("product_type.xls");

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="product_type.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
$objWriter->save("php://output");
exit;


/*header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"product_type.xls\"");
header("Cache-Control: max-age=0");
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output")
 */

       