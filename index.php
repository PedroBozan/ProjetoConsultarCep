<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="app/img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="app/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">
        
        <title>Consulta CEP</title>
    </head>
    <body class="body">

        <div>
            <img class="logo" src="app/img/logo.png" alt="logo">
        </div>

        <div class="container-md">
            <form action="exibirDadosCep.php" method="POST">
                <fieldset class="camposForm">
                    <div class="campoCep">
                        <input type="text" name="cep" class="form-control shadow-sm p-2" id="cep" placeholder="Digite o cep" maxlength="9" required>
                    </div>
                    <div class="botaoConsulta">
                        <button id="botao" class="btn btn-dark shadow-sm" type="submit">Consultar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>