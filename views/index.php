<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $name ?></title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="public/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="public/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="public/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">
</head>

<body style="background-color: #EAEAEA;background-repeat: no-repeat;background-position: bottom right;background-image: url(&quot;public/assets/img/habbo-hotel-png-5.png&quot;);background-attachment: fixed;">
<div class="register-photo" style="background-color: rgba(241,247,252,0);margin-top: 80px;margin-right: 30px;margin-left: 30px;">
    <div class="form-container">
        <div class="image-holder" style="background-image: url(&quot;public/assets/img/h1480966641bc.png&quot;);background-position: 80%;border-top-left-radius: 5px;border-bottom-left-radius: 5px;"><img src="public/assets/img/yobba.gif" style="margin-left: 0px;margin-top: -58px;padding: 4px;border-top-left-radius: 5px;border-bottom-right-radius: 5px;"></div>
        <form method="post" style="border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
            <?php if(isset($error)) { ?>
                <div class="alert alert-danger" role="alert"><span><strong>Alert</strong> <?= $error ?></span></div>
            <?php } ?>
            <div class="form-group">
                <input name="login-username" class="form-control" type="text" name="username" placeholder="Pseudo" style="background-color: rgb(238,238,238);">
            </div>
            <div class="form-group">
                <input name="login-password" class="form-control" type="password" name="password" placeholder="Mot de passe" style="background-color: rgb(238,238,238);">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="margin-top: 25px;background-color: #62ab50;">Se connecter</button>
            </div>
            <a class="already" id="register-link" href="#">S'inscrire</a>
            <a class="already" id="register-link" href="?action=me">me.php</a>
        </form>
    </div>
</div>

<script src="public/assets/js/jquery.min.js"></script>
<script src="public/assets/js/functions.js"></script>
</body>

</html>