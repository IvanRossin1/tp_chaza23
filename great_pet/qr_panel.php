<?php
session_start();

if (isset($_SESSION["nombreUsuario"])) {
    $nombreUsuario = $_SESSION["nombreUsuario"];
} else{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_pestaña.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/qr.css">

    <title>Great Pet</title>
</head>

<body>
    <header>
        <div class="headersi">
            <a href="panel.php">
                <img class="img-header FOTO-LOGO" src="img/logo_definitivo.png" alt="s">
            </a>
            <div class="navegacion roboto">
                <a class="TEXTO-LINK" href="panel.php">
                    <h3>Inicio</h3>
                </a>
                <a class="TEXTO-LINK" href="adopcion_panel.php">
                    <h3>Adopcion</h3>
                </a>
                <a class="TEXTO-LINK" href="busqueda.html">
                    <h3>Busqueda</h3>
                </a>
                <a class="TEXTO-LINK" href="">
                    <h3>QR</h3>
                </a>
                <a class="TEXTO-LINK" href="servicios.html">
                    <h3>Servicios</h3>
                </a>
            </div>
            <div class="redesu roboto">
                <?php
                    echo '<p style="color:black">Bienvenido, '.$nombreUsuario.'</p>';
                    echo '<div class="puto">';
                    echo '<a href="perfil.php" class="perfil"><h3>Perfil</h3></a>';
                    echo '<a href="logout.php">
                            <span class="material-icons-outlined log-off">
                                logout
                            </span>
                        </a></div>';
                ?>
            </div>
        </div>
    </header>









    <main>

        <div class="contenedor-QR-main-adopcion">
            <div class="fondo_contenedor-cartel_gato_qr">
                <div class="contenedor-cartel_gato_qr">

                    <div class="logo_negro-fondo-cartel"></div>

                    <div class="contenedor_img_gato_qr"> </div>

                    <div class="titulo_mensaje_gato_qr">
                        <div class="titulo_gato_qr sigmar">
                            <p>Sistema QR</p>
                        </div>
                        <div class="mensaje_gato_qr releway">
                            <p>¡Descarga el QR de tu mascota para mas seguridad!</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="fondo_contenedor_tarjetas_mascotas_qr">
                <div class="contenedor_tarjetas_mascotas_qr">
                    <div class="titulo_selecciona_mascota lexend">
                        <P>SELECCIONA TU MASCOTA</P>
                    </div>
                    <div class="linea_titulo_tarjetas_mascotas_qr"></div>
                    <div class="contenedor_tarjetas_qr">

                        <div class="contenedor_horizontal_tarjetas_mascotas_qr">

                            <div class="tarjetas_mascotas_qr">

                                <div class="img_tarjeta_qr_mascota"></div>

                                <div class="contenedor_nombre_crear_qr_mascota">
                                    <div class="nombre_mascota_tarjeta_qr lexend">
                                        <p>Laika</p>
                                    </div>
                                    <a href="qr-realizado.html">
                                    <div class="contenedor_generador_qr roboto2">
                                        <p>Descargar QR</p>
                                    </div>
                                </a>
                                </div>

                            </div>




                            <div class="tarjetas_mascotas_qr">
                                <div class="img_tarjeta_qr_mascotaB"></div>

                                <div class="contenedor_nombre_crear_qr_mascota">
                                    <div class="nombre_mascota_tarjeta_qr lexend">
                                        <p>Greta</p>
                                    </div>
                                    <a href="qr-realizado.html">
                                        <div class="contenedor_generador_qr roboto2">
                                            <p>Descargar QR</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>



                        <div class="contenedor_horizontal_tarjetas_mascotas_qr">

                            <div class="tarjetas_mascotas_qr">

                                <div class="img_tarjeta_qr_mascotaC"></div>

                                <div class="contenedor_nombre_crear_qr_mascota">
                                    <div class="nombre_mascota_tarjeta_qr lexend">
                                        <p>Juanita</p>
                                    </div>
                                    <a href="qr-realizado.html">
                                        <div class="contenedor_generador_qr roboto2">
                                            <p>Descargar QR</p>
                                        </div>
                                    </a>
                                </div>

                            </div>



                            <a href="#">
                            <div class="tarjetas_mascotas_qr_añadir_mascota">
                                <div class="contenedor_mas_a_m">
                                    <span class="material-icons-outlined mas_añadir_m">
                                        add
                                    </span>

                                    <div class="texto_añadir_mascota roboto2"><P>AÑADIR MASCOTA</P></div>

                                </div>
                            </div>
                            </a>

                        </div>



                    </div>
                </div>
            </div>






        </div>
    </main>




























    <footer>
        <div class="caja-contenedora-footer">

            <div class="caja-footer_1">
                <img class="img-footer" src="img/logo-footer.png" alt="">
            </div>

            <div class="contenedor_caja_2_3_4">
                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>¿Quienes somos?</h2>
                        </div>
                    </div>


                    <div class="caja-footer_3-linea"></div>


                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des roboto">

                            <div class="a-footer">
                                <a>
                                    Great Peat es una asociación civil sin fines de lucro abocada a difundir, proteger y
                                    promover los derechos de los animales.</a>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>Contactos</h2>
                        </div>
                    </div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des roboto">

                            <div class="a-footer">
                                <H5>Gmail :</H5>
                                <a><u>greatpet2023@gmail.com</u></a>
                            </div>
                            <div class="a-footer ">
                                <H5 class="hlds">whastapp :</H5>
                                <a><u>+54 9 11 6244 - 4423</u></a>
                            </div>
                            <div class="a-footer">
                                <H5 class="hlds">facebook :</H5>
                                <a><u>Great Pet Arg</u></a>
                            </div>
                        </div>
                    </div>
                </div>




               <!--  <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo"></div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">

                    </div>
                </div> -->
            </div>

        </div>
    </footer>

</body>

</html>