<?php

$html = 
$documentTemplate = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Apresente esse documento quando for pagar em nossa loja</h1>

<p class="aviso">*Esse documento só poderá ser acessado uma única vez</p>

</body>
</html>';

require __DIR__.'/vendor/autoload.php';

use Dompdf\dompdf;
use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__);

$dompdf = new Dompdf($options);

$dompdf-> loadHTMLFile(__DIR__ .'/exemplo.html');

$dompdf->setPaper('A4');

$dompdf->render();

/*header('Content-type: application/pdf');
echo $dompdf-> output();*/

$dompdf->stream('boleto-breaktime.pdf');
?>