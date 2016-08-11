<?php
/**
 * Created by PhpStorm.
 * User: Imel
 * Date: 08-Aug-16
 * Time: 15:53
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Pagina de conexcion || GEPETROL OIL</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body class="bg_login">
<div class="login_area">
    <div class="login_intro">
        <h2>Intranet de GEPETROL</h2>
        <hr/>
        <p>Por favor utilisa su nombre de usuario y contrasena para conectarse!!!</p>
    </div>
    <div>
        <form>
            <fieldset>
                <legend>Iniciar sesión</legend>
                <div>
                    <label for="user">Usuario:</label>
                    <input type="text" name="user" id="user" size="30" placeholder="Pone su usuario"/>
                </div>
                <div>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" maxlength="255" placeholder="Contraseña"/>
                </div>
                <div>
                    <input type="checkbox" name="USER_REMEMBER" id="USER_REMEMBER" value="Y"
                           title="Pulse para recordar sus accesos!" checked="checked"/>
                    <label for="USER_REMEMBER" title="Pulse para recordar sus accesos!">Recuérdeme</label>
                </div>
                <div>
                    <input type="submit" name="submit" value="Iniciar"/>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="footer_login">
    <?php echo "&copy; " . date("F Y") . " GEPETROL OIL, todos derechos reservados" ?>
</div>
</body>
</html>


