<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="app/img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="app/css/index.css">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">
        
        <title>Consulta CEP</title>
    </head>

    <body class="body">

        <header>
            <h1>Consulta <span>CEP</span></h1>
        </header>
            
        <section>
            <form action="exibirDadosCep.php" method="POST">
                <div class="campoCep">
                    <input type="text" id="cep" name="cep" class="form-control shadow-sm p-2" placeholder="Digite o cep" maxlength="9" required>
                </div>
                <div>
                    <button id="botao" class="btn btn-dark shadow-sm" type="submit">Consultar</button>
                </div>
            </form>
        </section>

        <footer>
            <p>© 2022 Pedro Bozan - Todos os Direitos Reservados.</p>
        </footer>
        
    </body>
</html>