
<button onclick="mostrarError()">Mostrar Error</button>

<script>
function mostrarError() {
    try {
        // Simular un error lanzando una excepción
        throw new Error("Este es un mensaje de error.");
    } catch (error) {
        // Capturar la excepción y mostrar un mensaje de error
        alert("¡Se ha producido un error!\nMensaje: " + error.message);
    }
}
</script>


