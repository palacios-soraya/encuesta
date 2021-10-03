<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Encuesta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="Last-Modified" content="0">
            <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
            <meta http-equiv="Pragma" content="no-cache">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo rand(); ?>">
    </head>
    <body>


        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title p-b-0">
                        Encuesta
                    </span>
                    <div class="wrap-input100 validate-input bg1" data-validate="Ingrese su nombre">
                        <span class="label-input100">NOMBRE *</span>
                        <input class="input100" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="wrap-input100">
                        <div class="wrap-contact100-form-radio validate-input" data-validate="Seleccione género">
                            <label class="input-radio100-genero w-100">&nbsp;</label>

                            <span class="label-input100">GÉNERO *</span>
                            <div class="contact100-form-radio m-t-15"><br>
                                <input class="input-radio100" id="mujer" type="radio" name="genero" value="0" >
                                <label class="label-radio100" for="mujer">
                                    Mujer
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="hombre" type="radio" name="genero" value="1" >
                                <label class="label-radio100" for="hombre">
                                    Hombre
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-input100">
                        <div class="wrap-contact100-form-radio validate-input" data-validate="Seleccione hobby">
                            <label class="input-radio100-hobby w-100">&nbsp;</label>

                            <span class="label-input100">¿TIENES ALGÚN HOBBY? *</span>
                            <div class="contact100-form-radio m-t-15"><br>
                                <input class="input-radio100" id="ninguno" type="radio" name="hobby" value="0" >
                                <label class="label-radio100" for="ninguno">
                                    Ninguno
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="deporte" type="radio" name="hobby" value="1" >
                                <label class="label-radio100" for="deporte">
                                    Deporte
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="musical" type="radio" name="hobby" value="2" >
                                <label class="label-radio100" for="musical">
                                    Musical
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="cocina" type="radio" name="hobby" value="3" >
                                <label class="label-radio100" for="cocina">
                                    Cocina
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="literario" type="radio" name="hobby" value="4" >
                                <label class="label-radio100" for="literario">
                                    Literario
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="manualidades" type="radio" name="hobby" value="5" >
                                <label class="label-radio100" for="manualidades">
                                    Manualidades
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="juegos" type="radio" name="hobby" value="6" >
                                <label class="label-radio100" for="juegos">
                                    Juegos
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="modelismo" type="radio" name="hobby" value="7" >
                                <label class="label-radio100" for="modelismo">
                                    Modelismo
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="baile" type="radio" name="hobby" value="8" >
                                <label class="label-radio100" for="baile">
                                    Baile
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="cine" type="radio" name="hobby" value="9" >
                                <label class="label-radio100" for="cine">
                                    Cine
                                </label>
                            </div>
                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="otro" type="radio" name="hobby" value="10" >
                                <label class="label-radio100" for="otro">
                                    Otro
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-input100 validate-input bg1 radio100-none" id="tiempo_mensual" data-validate="Ingresa el número de horas">
                        <span class="label-input100">¿CUÁNTO TIEMPO LE DEDICAS AL MES? (indicar en cantidad de horas mensuales)*</span>
                        <input class="input100" type="number" name="tiempo_mensual_dedicado" id="tiempo_mensual_dedicado" placeholder="Ingresa el número de horas"> hs
                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            <span>
                                Siguiente
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="vendor/bootstrap/js/popper.min.js"></script> 
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="js/main.js?v=<?php echo rand(); ?>"></script>
 


    </body>
</html>
