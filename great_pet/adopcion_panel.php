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
    <link rel="stylesheet" href="css/adopcion.css">



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
                <a class="TEXTO-LINK" href="">
                    <h3>Adopcion</h3>
                </a>
                <a class="TEXTO-LINK" href="busqueda.html">
                    <h3>Busqueda</h3>
                </a>
                <a class="TEXTO-LINK" href="qr_panel.php">
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

        <div class="contenedor2-main-adopcion">
            <div class="caja-fodo-titulo-adopta">
                <div class="contanedora-caja-fodo-titulo-adopta">

                    <div class="logo_negro-fondo-cartel"></div>

                    <div class="img-perro-adopcion">
                    </div>

                    <div class="texto-adopcion-header">
                        <div class="titulo-adopcion-header sigmar">
                            <H5>Mascotas En ADÓPCION</H5>
                        </div>
                        <div class="mensaje-adopcion-header releway">
                            <p>¡El hogar se viste de alegría cuando adoptas una mascota!</p>
                        </div>
                    </div>

                    
                </div>
            </div>




            <div class="caja-contenedora-tarjetas-adopcion">
                <div class="caja-filtro-adopcion">
                    <div class="selec-filtro">

                        <select name="select-filtro-oficial-1" class="SELECT-1 roboto2">
                            <option value="value2" selected class="options-select">Perros</option>
                            <option value="value3" class="options-select">Gatos</option>
                        </select>

                        <select name="select-filtro-oficial-2" class="SELECT-1 roboto2">
                            <option value="value2" class="options-select">2/11 Meses</option>
                            <option value="value2" class="options-select" selected>1/3 Años</option>
                            <option value="value2" class="options-select">4/6 Años</option>
                            <option value="value2" class="options-select">7/10 Años</option>
                            <option value="value2" class="options-select">11/15 Años</option>
                        </select>


                        <select name="select-filtro-oficial-3" class="SELECT-1 roboto2">
                            <option value="value2" selected class="options-select">Masculino</option>
                            <option value="value3" class="options-select">Femenino</option>
                        </select>


                        <input type="button" value="search" class="material-icons-outlined buscar-filtro-adopcion">


                    </div>

                </div>
                <div class="linea-filtro-adopcion-tarjetas"></div>

                <div class="contenedor-tarjetas-adopcion-mini-descripcion">

                    <div class="tarjetas-adopcion-mini-descripcion-columns">

                        <div class="tarjetas-adopcion-mini-descripcion-row">



                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="tito_img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">TITO</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>



                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Del Viso, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">SIN RAZA</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">4 MESES</div>
                                        </div>
                                    </div>


                                </div>


                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>

                            </div>





                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>


                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>





                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>








                        <div class="tarjetas-adopcion-mini-descripcion-row">

                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>






                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>






                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>






                        <div class="tarjetas-adopcion-mini-descripcion-row">

                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>



                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>

                                <!-- <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                    <div class="ubicaciom_mascota_adopcion_tarjeta">
                                        <i class="material-icons-outlined ">location_on</i>
                                         <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div> 
                                    </div>
                                </div> -->

                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto">Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>
                            </div>




                            <div class="tarjeta1-adopcion-mini-descripcion">
                                <div class="img-perro-en-adopcion">

                                    <div class="cajacontenedora_nombre_huesos">
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_izquierdo.svg" alt=""></div>
                                        <div class="contenedor_nombre_centrado roboto2">Rocky</div>
                                        <div class="hueso1"><img class="medida_hueso_centrado"
                                                src="img/hueso_derecho.svg" alt=""></div>
                                    </div>



                                </div>



                                <div class="mini-informacion-tarjeta-adopcion">

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja-ubicaciom_mascota_adopcion_tarjeta">
                                            <div class="ubicaciom_mascota_adopcion_tarjeta">
                                                <i class="material-icons-outlined ">location_on</i>
                                                <div class="asd roboto"> Tortuguitas, Malvinas Argentinas</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">

                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">SEXO</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">MASCULINO</div>
                                        </div>

                                    </div>
                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">RAZA</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">CANICHE</div>
                                        </div>
                                    </div>

                                    <div class="des-mascota-adopcion-tarjeta">
                                        <div class="caja_contenedora_dato1">
                                            <div class="caja1_minidescripcion_iz roboto">EDAD</div>
                                        </div>

                                        <div class="linea-recta-medio"></div>

                                        <div class="caja_contededora_dato">
                                            <div class="caja1_minidescripcion_der roboto">1 AÑO</div>
                                        </div>
                                    </div>


                                </div>




                                <div class="contenedor_VER-MAS-mascota-adopcion-tarjeta">
                                    <a href="adop-mas-info.html">
                                        <div class="VER-MAS-mascota-adopcion-tarjeta roboto2">
                                            Ver Mas
                                        </div>
                                    </a>
                                </div>

                            </div>



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




                <!-- <div class="caja-titulo-texto-footer">
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