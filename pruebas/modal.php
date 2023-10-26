
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Modal</title>
    <style>
        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }

        /* Estilo para el botón de mostrar modal */
        #showModalButton {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Botón para mostrar el modal -->
    <button id="showModalButton">Mostrar modal a través de una función</button>

    <!-- Modal oculto por defecto -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <h2>Hola mundo</h2>
            <p>Este es un modal de prueba.</p>
            <button id="closeModalButton">Cerrar</button>
        </div>
    </div>

    <script>
        // Obtener el botón y el modal por su ID
        var showModalButton = document.getElementById("showModalButton");
        var modal = document.getElementById("myModal");
        var closeModalButton = document.getElementById("closeModalButton");

        // Función para mostrar el modal
        function showModal() {
            modal.style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Asociar la función showModal al evento de clic del botón
        showModalButton.addEventListener("click", showModal);

        // Asociar la función closeModal al evento de clic del botón de cerrar
        closeModalButton.addEventListener("click", closeModal);
    </script>
</body>
</html>
