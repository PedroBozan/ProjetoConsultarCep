<?php

require __DIR__.'/vendor/autoload.php';

use App\webservice\ViaCep;

$dadosCep = new ViaCep();
$dadosCep->consultarCep($_POST['cep']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exibir dados CEP</title>
    </head>
    <body>

        <input type="text" value="<?=$dadosCep->numCep?>" name="cep">
        <input type="text" value="<?=$dadosCep->descLogradouro?>" name="cep">
        <input type="text" value="<?=$dadosCep->descComplemento?>" name="cep">
        <input type="text" value="<?=$dadosCep->descBairro?>" name="cep">
        <input type="text" value="<?=$dadosCep->descCidade?>" name="cep">
        <input type="text" value="<?=$dadosCep->descEstado?>" name="cep">
        <input type="text" value="<?=$dadosCep->codIbge?>" name="cep">
    </body>
</html>