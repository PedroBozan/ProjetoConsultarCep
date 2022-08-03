<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">
        
        <title>Buscar CEP</title>
    </head>
    <body>
        <div>
            <h1>Buscar Cep</h1>
        </div>
        <form action="exibirDadosCep.php" method="POST">
            <div class="mb-3">
                <input type="text" name="cep" class="form-control" id="cep" placeholder="Digite o cep" required>
            </div>
            <div>
                <button class="btn btn-primary" id="botao" type="submit">Buscar</button>
            </div>
        </form>
    </body>
</html>