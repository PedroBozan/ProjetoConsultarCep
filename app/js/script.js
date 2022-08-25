function copiarTexto(id) {
    
    let texto = document.getElementById(id);

    texto.select();
    texto.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(texto.value);

    mostrarModal();
}

function mostrarModal() {

    const modal = new bootstrap.Modal('#modalMensagem', {
        keyboard: false
    });

      modal.show();
}

function redirecionar() {

    window.location.href = "index.php";
}