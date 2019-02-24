<?php

include('phpqrcode/qrlib.php'); 
         
    $param = $_GET['cpf']; 
     

     
    ob_start("callback"); 
     

    $codeText = 'DEMO - '.$param; 
     
    $debugLog = ob_get_contents(); 
    ob_end_clean(); 
     

    QRcode::png($codeText);

?>