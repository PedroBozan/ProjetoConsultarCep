// Função para copiar o texto do campo para a área de transferência.
function copiarTexto(idCampo, idModal) {
    
    let texto = document.getElementById(idCampo);

    texto.select();
    texto.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(texto.value);

    abrirModal(idModal);
}

// Função para validar se o campo CEP possui dados na consulta, caso não então retorna modal com mensagem.
function validarResultadoCep(idCampo, idModal) {

    let cep = document.getElementById(idCampo).value;

    if((cep == '') || (cep == 0)) {

        abrirModal(idModal);
    }
}

// Função para abrir o modal.
function abrirModal(id) {

    const modal = new bootstrap.Modal('#' + id, {
        keyboard: false
    });

      modal.show();
}

// Função para redirecionar para a página index.
function redirecionarIndex() {

    window.location.href = "index.php";
}