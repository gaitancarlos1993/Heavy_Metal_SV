<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cls_div_prueba_menu {
            width: 15%;
            height: 800px;
            overflow: hidden;
        }

        ul {
            list-style-type: none;
            margin-left: 1px;
            padding: 0;

        }

        li {
            margin-top: 5%;
            margin-left: 2px;
            margin-bottom: 4px;
            width: 95%;
            background-color: none;
        }



        #id_ul_subcategoria2_menu {
            display: none;
        }

        #id_ul_subcategoria_menu {
            display: none;
        }

        @keyframes brillo {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 0;
            }
        }

        #id_btn_categoria_menu {
            background-color: #007bff;
            /* Gradiente de fondo */
            background-size: 200% 100%;
            /* Tamaño del fondo */
            color: white;
            /* Color de texto */
            padding: 10px 20px;
            /* Espaciado interno */
            border: none;
            /* Sin borde */
            border-radius: 5px;
            /* Bordes redondeados */
            animation: brillo 1s linear infinite;
            /* Animación de brillo */
            /* Transición suave en hover */
        }

        #id_btn_categoria_menu:hover {
            transform: scale(1.05);
            /* Aumenta el tamaño en hover */
            background: linear-gradient(90deg, #007bff, #fff);
            transition: transform 0.3s;
            animation: brillo 1s linear infinite;
            
            /* Detiene la animación en hover */
        }


        #id_btn_subcategoria_menu {

            /* Gradiente de fondo */
            background-size: 200% 100%;
            /* Tamaño del fondo */
            color: white;
            /* Color de texto */
            padding: 10px 20px;
            /* Espaciado interno */
            border: none;
            /* Sin borde */
            border-radius: 5px;
            /* Bordes redondeados */
            animation: brillo 1s linear infinite;
            /* Animación de brillo */

        }
        #id_btn_subcategoria_menu:hover {
            transform: scale(1.05);
            /* Aumenta el tamaño en hover */
            animation: brillo 1s linear infinite;
            transition: transform 60s;
            background: linear-gradient(90deg, #007bff, #fff);

            
            /* Detiene la animación en hover */
        }

        #id_btn_subcategoria2_menu {

            background: linear-gradient(90deg, #007bff, #fff);
            /* Gradiente de fondo */
            background-size: 200% 100%;
            /* Tamaño del fondo */
            color: white;
            /* Color de texto */
            padding: 10px 20px;
            /* Espaciado interno */
            border: none;
            /* Sin borde */
            border-radius: 5px;
            /* Bordes redondeados */
            /* Animación de brillo */
            transition: transform 0.3s;

        }
        #id_btn_subcategoria2_menu:hover {
            transform: scale(1.05);
            /* Aumenta el tamaño en hover */
            animation: brillo 1s linear infinite;
            
            /* Detiene la animación en hover */
        }
    </style>
</head>

<body>
    <div class="cls_div_prueba_menu">
        <ul class="cls_ul_categoria_menu">
            <li class="cls_li_categoria_menu">
                <button type="submit" onclick="func_Mostrar_subcategoria()" id="id_btn_categoria_menu">Categoria</button>
                <ul class="cls_ul_subcategoria_menu" id="id_ul_subcategoria_menu">
                    <li class="cls_ul_subcategoria_menu">
                        <button type="submit" onclick="func_Mostrar_subcategoria2()" id="id_btn_subcategoria_menu">Subcategoria</button>
                        <ul class="cls_ul_subcategoria2_menu" id="id_ul_subcategoria2_menu">
                            <li class="cls_li_subcategoria2_menu">
                                <button type="submit" id="id_btn_subcategoria2_menu">Subcategoria Nivel 2</button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
    <script>
        function func_Mostrar_subcategoria() {
            var w__subcategoria_menu = document.getElementById("id_ul_subcategoria_menu");
            if (w__subcategoria_menu.style.display === "" || w__subcategoria_menu.style.display === "none") {

                w__subcategoria_menu.style.display = "block";
            }
        }

        function func_Mostrar_subcategoria2() {
            var w__subcategoria2_menu = document.getElementById("id_ul_subcategoria2_menu");
            if (w__subcategoria2_menu.style.display === "" || w__subcategoria2_menu.style.display === "none") {

                w__subcategoria2_menu.style.display = "block";
            }
        }
    </script>
</body>

</html>