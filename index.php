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
        <link rel="stylesheet" type="text/css" href="app/css/index.css">
        <link rel="stylesheet" type="text/css" href="app/bootstrap/css/bootstrap.min.css">
        
        <title>Consulta CEP</title>
    </head>

    <body class="corpo-pagina">

        <!-- Header da página contendo o título. -->
        <header>
            <h1>Consulta <span>CEP</span></h1>
        </header>
        
        <!-- Formulário para preencher o CEP e consulta. -->
        <section>
            <form action="exibir.php" method="POST">
                <div class="campo-cep">
                    <input type="text" id="cep" name="cep" class="form-control shadow-sm p-2" placeholder="Digite o cep" minlength="8" maxlength="9" required>
                </div>
                <div>
                    <button id="consulta" class="btn btn-dark shadow-sm" type="submit">Consultar</button>
                </div>
            </form>
        </section>

        <!-- Footer da página -->
        <footer>
            <p>© 2022 Pedro Bozan - Todos os Direitos Reservados.</p>
        </footer>
        
    </body>
</html>