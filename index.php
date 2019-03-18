<?php
require_once __DIR__ . '/vendor/autoload.php';

$html = file_get_contents('./index.html', true);

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
