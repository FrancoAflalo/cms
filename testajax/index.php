<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $("#submit").click(function () {
                    
                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    
                    $.post("query.php?fn=1", {nombre: nombre, apellido: apellido}, function(datos) {
                        $("#resultado").html(datos);
                    });
                });
            });
        </script>
    </head>
    <body>
        <input type="text" name="nombre" id="nombre" />
        <input type="text" name="apellido" id="apellido" />
        <input type="submit" value="Enviar" id="submit" />
        
        <div id="resultado">
            
        </div>
    </body>
</html>