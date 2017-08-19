<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuário efetuado</title>
    </head>
    <body>
        <h1>Ressultado</h1>
        <?php
            if (isset($_GET['user']) && isset($_GET['mail'])){
                echo '<br>Usuário:' .$_GET['user'] .
                     '<br>E-mail:' .$_GET['mail'];
            }
        ?>
    </body>       
</html>
