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
        <script src="app/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <title>Consulta CEP</title>
    </head>

    <body class="body">

        <header>
            <h1>Resultado</h1>
        </header>
        
        <section>
            <fieldset>
                <div class="campos">
                    <label for="cep">CEP:</label>
                        <div class="conteudo">
                            <input type="text" id="cep" name="cep" class="form-control shadow-sm p-2" value="<?=$dadosCep->numCep?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('cep')">
                        <div>
                </div>
            </fieldset>
                
            <fieldset>
                <div class="campos">
                    <label for="logradouro">Logradouro:</label>
                        <div class="conteudo">
                            <input type="text" id="logradouro" name="logradouro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descLogradouro?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('logradouro')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campos">
                    <label for="complemento">Complemento:</label>
                        <div class="conteudo">
                            <input type="text" id="complemento" name="complemento" class="form-control shadow-sm p-2" value="<?=$dadosCep->descComplemento?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('complemento')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campos">
                    <label for="bairro">Bairro:</label>
                        <div class="conteudo">
                            <input type="text" id="bairro" name="bairro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descBairro?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('bairro')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campos">
                    <label for="cidade">Cidade:</label>
                        <div class="conteudo">
                            <input type="text" id="cidade" name="cidade" class="form-control shadow-sm p-2" value="<?=$dadosCep->descCidade?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('cidade')">
                        </div>
                </div>
            </fieldset>
            
            <fieldset>
                <div class="campos">
                    <label for="estado">Estado:</label>
                        <div class="conteudo">
                            <input type="text" id="estado" name="estado" class="form-control shadow-sm p-2" value="<?=$dadosCep->descEstado?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('estado')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campos">
                    <label for="ibge">Código IBGE:</label>
                        <div class="conteudo">
                            <input type="text" id="ibge" name="ibge" class="form-control shadow-sm p-2" value="<?=$dadosCep->codIbge?>" readonly>
                            <img src="app/img/copiar.png" class="copiar" title="Copiar conteúdo" onclick="copiarTexto('ibge')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campos" id="botao-redirecionar">
                    <button class="btn btn-dark shadow-sm" id="botaoNovaConsulta" onclick="redirecionar()">Nova Consulta</button>
                </div>
            </fieldset>

            <div class="modal fade" id="modalMensagem" tabindex="-1" aria-labelledby="elementoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            Conteúdo copiado!
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-dark shadow-sm" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <footer>
            <p>© 2022 Pedro Bozan - Todos os Direitos Reservados.</p>
        </footer>

    </body>
</html>