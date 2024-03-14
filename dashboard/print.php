<?php

require "vendor/autoload.php";

$html = '<h1>My First PDF</h1>';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream('papers.pdf');

?>

