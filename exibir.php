<?php

require __DIR__.'/vendor/autoload.php';

use App\webservice\ViaCep;

/*
    Criar um objeto CEP e chamar a função consultarCep passando o CEP informado 
    como parâmetro e então obter o retorno.
*/

$dadosCep = new ViaCep();
$dadosCep->consultarCep($_POST['cep']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- Link para a fonte utilizada na página -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">

        <!-- Link para a imagem .ico da página -->
        <link rel="icon" type="image/x-icon" href="app/assets/favicon.ico">

        <!-- Link dos arquivos CSS. -->
        <link rel="stylesheet" type="text/css" href="app/css/exibir.css">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">

        <!-- Link dos arquivos de script. -->
        <script type="text/javascript" src="app/script/script.js"></script>
        <script src="app/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <title>Consulta CEP</title>
    </head>

    <body class="corpo-pagina" onload="validarResultadoCep('cep','mensagem')">

        <!-- Header da página contendo o título. -->
        <header>
            <h1>Resultado</h1>
        </header>
        
        <!-- Section com todos os campos que apresentam o resultado da consulta. -->
        <section>
            <fieldset>
                <div class="campo-conjunto">
                    <label for="cep">CEP:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="cep" name="cep" class="form-control shadow-sm p-2" value="<?=$dadosCep->numCep?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('cep','mensagem')">
                        <div>
                </div>
            </fieldset>
                
            <fieldset>
                <div class="campo-conjunto">
                    <label for="logradouro">Logradouro:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="logradouro" name="logradouro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descLogradouro?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('logradouro','mensagem')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo-conjunto">
                    <label for="complemento">Complemento:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="complemento" name="complemento" class="form-control shadow-sm p-2" value="<?=$dadosCep->descComplemento?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('complemento','mensagem')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo-conjunto">
                    <label for="bairro">Bairro:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="bairro" name="bairro" class="form-control shadow-sm p-2" value="<?=$dadosCep->descBairro?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('bairro','mensagem')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo-conjunto">
                    <label for="cidade">Cidade:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="cidade" name="cidade" class="form-control shadow-sm p-2" value="<?=$dadosCep->descCidade?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('cidade','mensagem')">
                        </div>
                </div>
            </fieldset>
            
            <fieldset>
                <div class="campo-conjunto">
                    <label for="estado">Estado:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="estado" name="estado" class="form-control shadow-sm p-2" value="<?=$dadosCep->descEstado?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('estado','mensagem')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo-conjunto">
                    <label for="ibge">Código IBGE:</label>
                        <div class="campo-conteudo">
                            <input type="text" id="ibge" name="ibge" class="form-control shadow-sm p-2" value="<?=$dadosCep->codIbge?>" readonly>
                            <img src="app/assets/copiar.png" class="botao-copiar" title="Copiar conteúdo" onclick="copiarTexto('ibge','mensagem')">
                        </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo-conjunto" id="redireciona">
                    <button class="btn btn-dark shadow-sm" id="consulta" onclick="redirecionarIndex()">Nova Consulta</button>
                </div>
            </fieldset>

            <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="elementoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">

                            <?php $mensagem = (($dadosCep->numCep == 0) || ($dadosCep->numCep == '')) ? 'Informações de CEP não encontradas, consulte novamente !' : 'Conteúdo copiado !'; ?>

                            <span><?php echo $mensagem?></span>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-dark shadow-sm" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Footer da página. -->
        <footer>
            <p>© 2022 Pedro Bozan - Todos os Direitos Reservados.</p>
        </footer>

    </body>
</html>