
(function ($) {
    "use strict";
    
    $(document).ready(function(){
        $('.validate-form').trigger("reset");
    });

    //activo la ultima pregunta y remuevo el alerta si esta activo
    $("input[name='hobby']").on('click',function(){
        if ($("input[name='hobby']").is(':checked')){
            hideValidate($('.validate-input .input-radio100-hobby'));
            if (($("input:radio[name='hobby']:checked").val() != 0)){ //si tiene un hobby, muestro el tiempo mensual dedicado         
                $("#tiempo_mensual").removeClass('radio100-none');
            }else{                                                    //si no tiene hobby, no muestro el tiempo dedicado 
                $("#tiempo_mensual").addClass('radio100-none');         
                $("#tiempo_mensual_dedicado").val("No corresponde");         
            }
        }
    });
    
    $("#nueva_encuesta").on('click',function(e){
        e.preventDefault();
        window.location.href = 'index.php'
    })
    //remuevo el alerta de genero
    $("input[name='genero']").on('click',function(){
        if ($("input[name='genero']").is(':checked')){
            hideValidate($('.validate-input .input-radio100-genero'));
        }
    });

    /*==================================================================
     [ Validate after type ]*/
    $('.validate-input .input100').each(function () {
        $(this).on('blur', function () {
            if (validate(this) == false) {
                showValidate(this);
            } else {
                $(this).parent().addClass('true-validate');
            }
        })
    })

    /*==================================================================
     [ Validate ]*/
    var input = $('.validate-input .input100');
    var genero = $("input[name='genero']");
    var hobby = $("input[name='hobby']");

    $('.validate-form').on('submit', function (e) {
        e.preventDefault();
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        if (!$(genero).is(':checked')) {
            showValidate($('.validate-input .input-radio100-genero'));
            check = false;
        }
        
        if (!$(hobby).is(':checked')) {
            showValidate($('.validate-input .input-radio100-hobby'));
            check = false;
        }else{
            if (($("input:radio[name='hobby']:checked").val() == 0)){ 
                check = true;
            }
        }
        
        if (check){ //si esta ok el formulario, guardo los datos
            $.ajax({
                type: "POST",
                url: "backend/funciones.php",
                dataType: 'json',
                data: {tipo:'guardar',nombre: $("#nombre").val(), genero:  $("input:radio[name='genero']:checked").val(), hobby:  $("input:radio[name='hobby']:checked").val(), tiempo_mensual_dedicado: $("#tiempo_mensual_dedicado").val()}
            })
                    .done(function (event) {
                        console.log(event);
                        if (event.result == 'ok') {
                            alert('Muchas gracias por responder la encuesta');
                            window.location.href = 'resultados.php';
                        }else{
                            alert("No se pudo guardar la encuesta,<br> por favor intente nuevamente más tarde<br>"+event.result);
                        }
                    });
        }else
            alert("Por favor complete todos los campos");
        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
            $(this).parent().removeClass('true-validate');
        });
    });

    function validate(input) {
        if ($(input).val().trim() == '') {
            return false;
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');

        $(thisAlert).append('<span class="btn-hide-validate">&#xf136;</span>')
        $('.btn-hide-validate').each(function () {
            $(this).on('click', function () {
                hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }

    

})(jQuery);
