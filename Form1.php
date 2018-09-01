<?php
/**
 * Created by PhpStorm.
 * User: C1_ro
 * Date: 29/08/2018
 * Time: 08:33
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="../style/Paratodos.css">
</head>
<body>
<div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
<section id="formulario">
    <form action="">


<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso
    form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso
    form button:hover{color: white !important;} .asteriskField{color: red;}</style>

        <p id="titulo">Ingresa tus datos personales</p>
        <p></p>
<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form method="post">
                    <div class="form-group ">
                        <label id ="" class="control-label requiredField" for="nombre1">

                            Primer Nombre
                            <span class="asteriskField">
    *
       </span>
                        </label>
                        <input class="form-control" id="nombre1" name="nombre1" placeholder="ingresa primer nombre " type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="name2">
                            Segundo Nombre

                        </label>
                        <input class="form-control" id="name2" name="name2" placeholder="Ingresa segundo nombre" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="apellido1">
                            Primer Apellido

                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="apellido1" name="apellido1" placeholder="Ingresa primer apellido" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="apellido2">
                            Segundo Apellido

                        </label>
                        <input class="form-control" id="apellido2" name="apellido2" placeholder="Ingresa segundo apellido" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="email">
                            Email
                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="email" name="email" placeholder="ingresa email" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="numero1">
                            N&uacute;mero C&eacute;lular

                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="numero1" name="numero1" placeholder="ingresa c&eacute;lular" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="telefono">
                            Tel&eacute;fono Casa

                        </label>
                        <input class="form-control" id="telefono" name="telefono" placeholder="ingresa telefono" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField">
                            Sexo

                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <div class="">
                            <div class="radio">
                                <label class="radio">
                                    <input name="radio_sexo" type="radio" value="Masculino"/>
                                    Masculino

                                </label>
                            </div>
                            <div class="radio">
                                <label class="radio">
                                    <input name="radio_sexo" type="radio" value="Femenino"/>
                                   Femenino

                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="fechanacimiento">
                            Fecha de nacimiento

                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="MM/DD/YYYY" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="pais">
                            Pa&iacute;s de residencia

                            <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="pais" name="pais" placeholder="Ingresa pa&iacute;s donde vives" type="text"/>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="btn btn-primary " name="submit" type="submit">
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </form>
</section>
</div>

</body>
</html>