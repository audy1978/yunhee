<?php

     include '../mpdf/mpdf.php';
     ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <p class="text-center">สวัสดี mPDF</p>
        
        
        <?php
            $html = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new mPDF('utf-8');
            //$mpdf = new mPDF('utf-8','A4-L');
            //$mpdf = new mPDF('utf-8', array(100,30)); 
            
            $mpdf->margin_header = 9;
            $mpdf->SetHeader('รายงานโดย codingthailand | รายงานลูกค้าทั้งหมด | ออกรายงานเมื่อ '.date('d/m/Y H:i:s'));
            $mpdf->margin_footer = 9;
            $mpdf->SetFooter('หน้าที่ {PAGENO}');
            $stylesheet = file_get_contents('./bootstrap/css/printpdf.css');
            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html,2);
            $mpdf->Output();
            
            exit;
        ?>
    </body>
</html>
