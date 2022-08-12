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
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="app/img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="app/css/exibir.css">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">

        <script type="text/javascript" src="app/js/script.js"></script>
        
        <title>Consulta CEP</title>
    </head>

    <body class="body">

        <header>
            <h1>Resultado</h1>
        </header>
        
        <section>

            <div class="campo">
                <label for="cep">CEP:</label>
                <input type="text" id="cep "name="cep" class="form-control shadow-sm p-2" value="<?=$dadosCep->numCep?>" readonly>
            </div>
                
            <div class="campo">
                <label for="logradouro">Logradouro:</label>
                <input type="text" id="logradouro" name="logradouro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descLogradouro?>" readonly>
            </div>

            <div class="campo">
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento" class="form-control shadow-sm p-2" value="<?=$dadosCep->descComplemento?>" readonly>
            </div>

            <div class="campo">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descBairro?>" readonly>
            </div>

            <div class="campo">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control shadow-sm p-2" value="<?=$dadosCep->descCidade?>" readonly>
            </div>
            
            <div class="campo">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" class="form-control shadow-sm p-2" value="<?=$dadosCep->descEstado?>" readonly>
            </div>

            <div class="campo">
                <label for="ibge">Código IBGE:</label>
                <input type="text" id="ibge" name="ibge" class="form-control shadow-sm p-2" value="<?=$dadosCep->codIbge?>" readonly>
            </div>

        </section>

        <footer>
            <p>© 2022 Pedro Bozan - Todos os Direitos Reservados.</p>
        </footer>

    </body>
</html>