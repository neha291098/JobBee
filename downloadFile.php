<!--
// We'll be outputting a PDF
//header('Content-type: application/pdf');

// It will be called downloaded.pdf
//header('Content-Disposition: attachment; filename="downloaded.pdf"');

// The PDF source is in original.pdf
//readfile('original.pdf');
//
<a href="http://localhost/job_suggestion_website/gen_resume.php" download >Download Link</a>-->
<?php
/*
Basic instantiation and usage
*/

include('html2pdf.class.php');
$h2pdf = new html2pdf();

//set the url to convert
$h2pdf->setParam('document_url','http://localhost/job_suggestion_website/gen_resume.php');

//start the conversion
$h2pdf->convertHTML();

//display the pdf file
$h2pdf->displayCapture();

?>
