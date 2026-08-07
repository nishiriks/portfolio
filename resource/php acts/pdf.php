<?php
require_once('tcpdf/tcpdf.php');

 if(isset($_POST['text'])) {
     // sanitize user input
     $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

     // create new TCPDF object
     $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

     // set document information
     $pdf->SetCreator('Your Name');
     $pdf->SetAuthor('Your Name');
     $pdf->SetTitle('Title of your PDF');
     $pdf->SetSubject('Subject of your PDF');
     $pdf->SetKeywords('Keywords for your PDF');

     // add new page
     $pdf->AddPage();

     // set font and font size
     $pdf->SetFont('helvetica', '', 12);

     // add user input to PDF
     $pdf->Write(0, $text);

     ob_end_clean();
     // output PDF
     $pdf->Output('yourpdf.pdf', 'D');
   }
 ?>
