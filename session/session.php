<?php

/**
 * Las variables de session
 * Son variables de enganche globales para toda la sesion de inicio. Esto significa que
 * puede establecer la variable de session en cualquier tipo de engache y posrterioemnte, 
 * leerla de nuevo en cualquier tipo de enganche. El valor persiste en todo el sistema
 */
if (isset($_POST["login"])) {
    if ($_POST["user"] === "joselito21" || $_POST["password"] === "123456") {
        session_start();
        $idUser = 21;
        $nombreUser = "Jose Hernandez";
        $_SESSION["nombre_usuario"] = $nombreUser;
        $_SESSION["id_usuario"] = $idUser;
        header("Location:panel.php");
    } else {
        echo 'Error ';
    }
}


echo '
    <form method="post">
    <input type="text" name="user">
    <input type="password" name="password">
    <input type="submit" name="login" value="Login">
    </form>
';
