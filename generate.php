<?php

use Classes\GeneratePDF;

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit;
};

define('ACCESSCHECK', TRUE);

require_once 'vendor/autoload.php';

$data = [
    'NOME_2' => $_POST['colaborador'],
    'ENDEREÇORow1_1' => $_POST['endereco'],
    'ENDEREÇORow1_2' => $_POST['endereco2'],
    'CEP_2' => $_POST['cep'],
    'UF_2' => $_POST['estado'],
    'CIDADE_2' => $_POST['cidade']
];

$pdf = new GeneratePDF;
$response = $pdf->generate($data);

header('Location: end.php?colaborador=' . $_POST['colaborador'] . '&link=' . $response);

extract($_REQUEST);
$filename=date('m-d-Y_hia_s') . '.txt';
$file=fopen("./output/" . $filename , "a");
fwrite($file, "Colaborador:");
fwrite($file, $_POST['colaborador'] . "\n");
fclose($file);

?>