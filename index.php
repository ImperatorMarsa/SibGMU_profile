<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$html = file_get_contents('./index.html', true);

try {
  $html2pdf = new Html2Pdf('P','A4','ru', true, 'UTF-8', 0);
  // $html2pdf->setDefaultFont('TimesNewRoman');
  $html2pdf->writeHTML($html);
  $html2pdf->output();
} catch (Html2PdfException $e) {
  $html2pdf->clean();

  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}
?>