<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Metal || Bienvenido</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/haz.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body style="background-color: #FAFAFA;">
    <header>
        <nav class="cls_nav_header_index">
            <div class="cls_menu_header_index item">
                <button type="button" class="cls_btn_menu_header_index cls_btn_forms" onclick="manageMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="cls_logo_header_index item">
                <img class="cls_img_mini" src="img/haz.png" alt="">
                <a href="index.php">Heavy Metal</a>
            </div>
            <div class="cls_search_header_index item">
                <form action="" method="post" class="cls_form_busquedaGral_header">
                    <input class="cls_input_search_header" type="search" name="name_input_busquedaGral_header" placeholder="¿Qué producto desea buscar?">
                    <button type="button" class="cls_btn_forms" onclick="manageFilter()">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="cls_iniciar_sesion__header_index item">
                <a href="login.php" class="cls_a_iniciar_sesion ">
                    <font class="cls_font_inicar_sesion">Iniciar sesión</font>
                    <i class="cls_icon_iniciar_sesion fas fa-lock"></i>
                </a>

            </div>
        </nav>
    </header>



    <div class="cls_cuerpo_index">
        <div class="cls_div_categorias2 cls_cuerpo" id="id_div_categorias2">
            <ul class="cls_ul_menu_categorias_index">
                <li class="cls_li_menu_categorias_index">
                    <button class="cls_btn_menu" id="id_btn_categorias_index[0]" type="button" onclick="mostrarSubCategorias(this)">
                        <i class="fas fa-wrench"></i>
                        Herramientas
                    </button>
                    <ul class="cls_ul_menu_categorias_index">
                        <li class="cls_li_menu_categorias_index">
                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[0]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-bolt"></i>
                                Herramienta electrica
                            </button>
                            <ul class="cls_ul_menu_categorias_index">
                                <li class="cls_li_menu_categorias_index">
                                    <button class="cls_btn_menu" id="id_btn_subcategorias2_index[0]" type="button">
                                        <i class="fas fa-drill"></i>
                                        Taladro
                                    </button>

                                </li>
                            </ul>
                        </li>
                        <li class="cls_li_menu_categorias_index">
                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[1]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-industry"></i>
                                Maquinaria
                            </button>


                        </li>
                        <li class="cls_li_menu_categorias_index">
                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[2]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-hard-hat"></i>
                                Maquinaria para metal
                            </button>
                        </li>
                        <li class="cls_li_menu_categorias_index">

                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[3]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-hand-rock"></i>
                                Herramienta manual
                            </button>

                        </li>
                        <li class="cls_li_menu_categorias_index">

                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[4]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-tools"></i>
                                Equipos de taller
                            </button>
                        </li>
                        <li class="cls_li_menu_categorias_index">
                            <button class="cls_btn_menu" id="id_btn_subcategorias_index[5]" type="button" onclick="mostrarSubCategorias2(this)">
                                <i class="fas fa-shield-alt"></i>
                                Equipos de protección individual
                            </button>


                        </li>
                    </ul>
                </li>
                <li class="cls_li_menu_categorias_index">
                    <button class="cls_btn_menu" id="id_btn_categorias_index[1]" type="button" onclick="mostrarSubCategorias(this)">
                        <i class="fas fa-bolt"></i>
                        Electricidad
                    </button>
                </li>
                <li class="cls_li_menu_categorias_index">
                    <button class="cls_btn_menu" id="id_btn_categorias_index[2]" type="button" onclick="mostrarSubCategorias(this)">
                        <i class="fas fa-store"></i>
                        Ferreteria
                    </button>
                </li>
                <li class="cls_li_menu_categorias_index">
                    <button class="cls_btn_menu" id="id_btn_categorias_index[2]" type="button" onclick="mostrarSubCategorias(this)">
                        <i class="fas fa-paint-roller"></i>
                        Pintura
                    </button>
                </li>

            </ul>

        </div>


        <form action="" method="post" class="cls_section1_cuerpo_index " id="id_section1_cuerpo_index">
            <h1>Busqueda de productos</h1>
            <label for="id_name_product_filtro_idx">Nombre del producto</label>
            <input type="text" id="id_name_product_filtro_idx" name="name_name_product_filtro_idx" placeholder="Nombre del producto">
            <label for="id_select_marcas_filtro">Marcas</label>
            <select name="" id="id_select_marcas_filtro">
                <option value="" selected>Seleccione la marca</option>
                <option value="">Bosch</option>
                <option value="">DeWalt</option>
                <option value="">Makita</option>
                <option value="">Milwaukee</option>
            </select>
            <label>Precio</label>
            <div class="cls_div_precios_form">
                <input type="number" placeholder=" Minimo" class="cls_inputs_precios_filtro cls_input1_precios_filtro">
                <input type="number" placeholder=" Maximo" class="cls_inputs_precios_filtro cls_input2_precios_filtro">
            </div>
            <label>Categorias</label>
            <div class="cls_div_categorias">

                <ul>
                    <li class="cls_li_categorias_filtro">
                        <input type="checkbox" name="name_checkbox_categoria1_marcas" id="id_checkbox_categoria1_marcas">
                        Electricidad
                    </li>
                    <li class="cls_li_categorias_filtro">
                        <input type="checkbox" name="name_checkbox_categoria1_marcas" id="id_checkbox_categoria2_marcas">
                        Herramientas
                    </li>
                    <li class="cls_li_categorias_filtro">
                        <input type="checkbox" name="name_checkbox_categoria2_marcas" id="id_checkbox_categoria3_marcas">

                        Ferreteria
                    </li>


                </ul>
            </div>
            <button class="cls_btn_forms" type="submit">Buscar</button>

        </form>

        <div class="cls_section2_cuerpo_index cls_cuerpo" id="id_section2_cuerpo_index">
        <br>
            <h3>Política de Cambios y Devoluciones </h3>
            <br>
            <h5>1. Satisfacción garantizada</h5>
            En Heavy Metal, nos esforzamos por brindarte productos de alta calidad y servicios excepcionales. Si por alguna razón no estás satisfecho con tu compra, ofrecemos opciones de cambios y devoluciones para garantizar tu satisfacción.<br>

            <br>
            <h5>2. Condiciones generales</h5>
            2.1. Plazo para cambios y devoluciones: Tienes un plazo de 30 días a partir de la fecha de entrega para solicitar un cambio o devolución.

            <br>2.2. Estado del producto: El producto debe estar en su estado original, sin usar y en su empaque original. Debe incluir todas las piezas, accesorios y manuales que vinieron con él.

            <br>2.3. Exclusiones: Algunos productos, debido a su naturaleza o uso específico, pueden no ser elegibles para cambios o devoluciones. Estos incluyen productos personalizados, productos perecederos o productos sujetos a restricciones legales o de seguridad.
            <br>

            <br>
            <h5>3. Procedimiento de cambios y devoluciones</h5>
            3.1. Contacto previo: Antes de realizar cualquier cambio o devolución, te recomendamos que te pongas en contacto con nuestro servicio de atención al cliente. Ellos te brindarán las instrucciones necesarias y resolverán cualquier duda que puedas tener.

            <br>3.2. Documentación requerida: Para procesar tu solicitud de cambio o devolución, necesitaremos el comprobante de compra original, que puede ser el recibo de compra, la factura o el correo electrónico de confirmación del pedido.

            <br>3.3. Opciones disponibles:

            <br>3.3.1. Cambio por otro producto: Si deseas cambiar el producto por otro de igual o mayor valor, te ofreceremos opciones de productos disponibles y te informaremos sobre cualquier diferencia de precio.

            <br>3.3.2. Devolución y reembolso: Si prefieres realizar una devolución, te reembolsaremos el monto pagado utilizando el mismo método de pago utilizado en la compra original.
            <br>

            <br>
            <h5>4. Costos de envío</h5>
            4.1. Cambios: Los costos de envío para el cambio de un producto correrán por cuenta del cliente, a menos que el cambio se deba a un error nuestro o a un producto defectuoso.

            <br>4.2. Devoluciones: En caso de devolución, los costos de envío correrán por cuenta del cliente, a menos que la devolución se deba a un error nuestro o a un producto defectuoso.
            <br>

            <br>
            <h5>5. Proceso de revisión</h5>
            Una vez recibido el producto devuelto, realizaremos una revisión para asegurarnos de que cumple con las condiciones establecidas en esta política. Si todo está en orden, procederemos a realizar el cambio o reembolso correspondiente en un plazo de [30] días hábiles. <br>

            <br>
            <h5>6. Contacto</h5>
            Para cualquier consulta o solicitud relacionada con cambios y devoluciones, puedes comunicarte con nuestro servicio de atención al cliente a través de los datos de contacto proporcionados en nuestra página web.

            <br><br>Recuerda que esta política de cambios y devoluciones está sujeta a cambios y actualizaciones. Te recomendamos revisarla periódicamente para estar al tanto de cualquier modificación.
            <br>    
            Para cualquier consulta o solicitud relacionada con cambios y devoluciones, puedes comunicarte con nuestro servicio de atención al cliente a través de los datos de contacto proporcionados en nuestra página web.

            <br><br>Recuerda que esta política de cambios y devoluciones está sujeta a cambios y actualizaciones. Te recomendamos revisarla periódicamente para estar al tanto de cualquier modificación.
            <br>
            
        </div>
    </div>




    <footer class="cls_footer_index">
        <div class="cls_div_section1_foot_index">

            <ul class="cls_ul_servicio_al_cliente_foot">
                <li>
                    <h3>Servicio al cliente</h3>
                </li>
                <li><a href="medios_de_pago.php">Medios de pago</a></li>
                <li><a href="cambios_y_devolcuiones.php">Cambios y devoluciones</a></li>
                <li><a href="prot_datos_personales.php">Politica de protección de datos personales</a></li>
                <li><a href="terminos__condiciones.php">Terminos y condiciones</a></li>
                <li><a href="estatuto_consumidor.php">Medios de pago</a></li>
            </ul>
        </div>
        <div class="cls_div_section2_foot_index">

            <ul class="cls_ul_mi_cuenta_footer">
                <li>
                    <h3>Mi cuenta</h3>
                </li>
                <li>
                    <a href="registro.php">Registrate</a>
                </li>
                <li>
                    <a href="olvide_mi_clave.php">Olvide mi clave</a>
                </li>
            </ul>
        </div>
        <div class="cls_div_section3_foot_index">
            <i class="fab fa-facebook cls_icon_redes_footer"></i>
            <i class="fab fa-whatsapp cls_icon_redes_footer"></i>
            <i class="fab fa-amazon cls_icon_redes_footer"></i>
            <i class="fab fa-tiktok cls_icon_redes_footer"></i>




        </div>
        <div class="cls_div_section4_foot_index">
            <img class="cls_img_mini cls_img_footer" src="img/haz.png" alt="">
            <span class="cls_span_copyright">© 2023 Heavy Metal</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>