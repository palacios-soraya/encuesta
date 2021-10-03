<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Resultados Encuesta</title>
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
        <link rel="stylesheet" type="text/css" href="css/main.css?v=1">
        <link rel="stylesheet" href="library/codebase/chart.css">
        <link rel="stylesheet" href="library/codebase/auxiliary_controls.css">
        <link rel="stylesheet" href="library/codebase/grid.css">
    </head>
    <body>


        <div class="container-contact100">
            <div class="wrap-contact100">
                    <span class="contact100-form-title">
                        Resultados
                        <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn" id="nueva_encuesta">
                            <span>
                                Nueva Encuesta
                                <i class="fa fa-long-arrow-left m-l-1" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    </span>
                    <div class="wrap-input100 bg1">
                        <span class="label-input100">NOMBRE</span>
                        <div id="chart_nombre"></div>
                    </div>
                    <div class="wrap-input100 bg1">
                        <span class="label-input100">GENERO</span>
                        <div id="chart_genero"></div>
                    </div>
                    <div class="wrap-input100 bg1">
                        <span class="label-input100">HOBBY</span>
                        <div id="chart_hobby"></div>
                    </div>
                    <div class="wrap-input100 bg1">
                        <span class="label-input100">TIEMPO DEDICADO AL MES (Horas)</span>
                        <div id="chart_tiempo_dedicado"></div>
                    </div>
                    <div class="wrap-input100 bg1">
                        <span class="label-input100">RESÚMEN DE LOS RESULTADOS</span>
                        <button class="dhx_sample-btn dhx_sample-btn--flat" onclick="exportXlsx()">Exportar a Excel</button><br>
                        <!-- component container -->
                        <div style="height:300px; width:100%" id="grid"></div>
                    </div>
                    
                       
                  
            </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="vendor/bootstrap/js/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="js/main.js?v=<?php echo rand(); ?>"></script>
        <script type="text/javascript" src="library/codebase/chart.js"></script>       
        <script type="text/javascript" src="library/codebase/grid.js"></script>     
       <script src="js/graficos.js?v=<?php echo rand(); ?>"></script>
       <script src="js/tabla_resumen.js?v=<?php echo rand(); ?>"></script>
      

    </body>
</html>
