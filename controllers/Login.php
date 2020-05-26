<?php
/*
    TODO: check if user is banned
*/
if(isset($_POST["login-username"], $_POST["login-password"])) {
    if(!empty($_POST["login-username"]) AND !empty($_POST["login-password"])) {
        $loginUsername = htmlspecialchars($_POST["login-username"]);
        if(userExist($loginUsername)) {
            if(password_verify($_POST["login-password"], getPasswordCrypted($loginUsername))) {
                $userInfo = getUserByUsername($loginUsername);
                $_SESSION["id"] = $userInfo["id"];
                header("Location: ?action=me");
            } else {
                $error = "Données incorrectes !";
            }
        } else {
            $error = "Ce compte n'existe pas !";
        }
    } else {
        $error = "Veuillez remplir tous les champs !";
    }
}

require("views/index.php");