<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Untitled</title>
        <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee" />
        <link rel="stylesheet" href="public/assets/fonts/font-awesome.min.css" />
        <link rel="stylesheet" href="public/assets/fonts/material-icons.min.css" />
        <link rel="stylesheet" href="public/assets/css/Navigation-with-Search.css" />
        <link rel="stylesheet" href="public/assets/css/Registration-Form-with-Photo.css" />
        <link rel="stylesheet" href="public/assets/css/styles.css" />
    </head>

    <body style="font-family: ABeeZee, sans-serif; background-color: #eaeaea; min-height: 100%;">
        <div style="background-image: url('public/assets/img/1536292421.gif'); padding-top: 25px; padding-bottom: 25px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-left: -10px;">
                        <img src="public/assets/img/yobba.gif" style="float: left; margin-left: 10px;" />
                        <div style="background-color: #ffffff; float: left; margin-top: 20px; margin-left: 10px; border-radius: 20px; padding-top: 10px; padding-left: 15px; height: 38px; padding-right: 15px;">
                            <img src="public/assets/img/habbo_online_anim.gif" style="float: left;" /><span style="float: left; margin-top: -2px; margin-left: 3px; color: rgb(85, 85, 85);">10 connectés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light navbar-expand-sm navigation-clean-search" style="background-color: #fff;">
            <div class="container">
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <div class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;">Tig3r</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <div class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;">Communauté</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <div class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;">Boutique</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form style="margin-bottom:0px;" class="form-inline mr-auto" target="_self">
                        <div class="form-group">
                            <label for="search-field"><i class="fa fa-search" style="color: #aaaaaa;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" />
                        </div>
                    </form>
                    <a class="btn btn-light action-button" role="button" href="#" style="margin-right: 5px; background-color: rgb(86, 198, 131);">Jouer</a>
                    <a class="btn btn-light action-button" role="button" href="?action=logout" style="background-color: rgb(222, 104, 96);">Déconnexion</a>
                </div>
            </div>
        </nav>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div style="box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09); float: left; width: 100%; margin-top: 20px;">
                            <div style="height: 80px; width: 100px; background-image: url('public/assets/img/backdrop.png'); background-position: 50%; border-top-left-radius: 5px; float: left;">
                                <div
                                    style="
                                        background-image: url('https://www.avatar-api.com/habbo-imaging/avatarimage.php?figure=<?= $userInfo["look"] ?>');
                                        height: 80px;
                                        background-repeat: no-repeat;
                                        background-position: 50% 10%;
                                        background-color: rgba(0, 0, 0, 0.3);
                                        border-top-left-radius: 5px;
                                    "
                                ></div>
                            </div>
                            <div style="width: calc(100% - 100px); height: 80px; background-color: rgb(203, 203, 203); float: right; border-top-right-radius: 5px; float: left;">
                                <h5 style="display: block; margin-bottom: 0px; color: rgb(91, 91, 91); margin-right: 30px; margin-left: 30px; margin-top: 18px;"><?= $userInfo["username"] ?></h5>
                                <span style="margin-left: 30px; color: rgb(119, 120, 120); margin-right: 30px;"><?= $userInfo["motto"] ?></span>
                            </div>
                            <div style="background-color: #fff; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; padding-top: 15px; padding-bottom: 15px; padding-right: 15px; float: left; width: 100%;">
                                <div style="background-color: #f8e272; width: calc(33.33333% - 15px); margin-left: 15px; padding: 10px; border-radius: 10px; float: left;">
                                    <img src="public/assets/img/credits.png" /><span style="margin-left: 5px; color: rgb(255, 255, 255);">10000</span>
                                </div>
                                <div style="background-color: #ef8fb2; width: calc(33.33333% - 15px); margin-left: 15px; padding: 10px; border-radius: 10px; float: left;">
                                    <img src="public/assets/img/duckets.png" /><span style="margin-left: 5px; color: rgb(255, 255, 255);">10000</span>
                                </div>
                                <div style="background-color: #9fcffb; width: calc(33.33333% - 15px); margin-left: 15px; padding: 10px; border-radius: 10px; float: left;">
                                    <img src="public/assets/img/diamonds.png" /><span style="margin-left: 5px; color: rgb(255, 255, 255);">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div style="margin-top: 20px; background-color: #ffffff; border-radius: 5px; box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09); float: left; width: 100%;">
                            <h5 style="color: rgb(116, 116, 116); padding: 10px; border-bottom: 1px solid #eaeaea;">Apparts actifs</h5>
                            <div style="float: left; width: 100%; margin-bottom: 10px; padding-right: 10px;">
                                <?php while($room = $reqRooms->fetch()) { ?>
                                    <div class="room-thumbnails"
                                        style="
                                            float: left;
                                            width: calc(20% - 10px);
                                            height: 92px;
                                            background-image: url('https://habbolswfs.ddns.net/swfs/camera/thumbnails/<?= $room["id"] ?>.png');
                                            background-color:#e8e8e8;
                                            background-repeat: no-repeat;
                                            border-radius: 10px;
                                            margin-left: 10px;
                                            cursor:pointer;
                                        "
                                    ><div class="content-hover" style="text-align:center;background-color:rgba(0, 0, 0, 0.30);border-radius:10px;width:100%;height:100%;display:none;">
                                        <p style="padding-top:30px;text-decoration:underline;color:white">Voir</p>
                                    </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div style="margin-top: 20px; padding: 10px; background-color: #7289da; float: left; width: 100%; border-radius: 5px; box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);">
                            <div style="float: left; background-image: url('public/assets/img/discord.png'); width: 63px; height: 55px; background-repeat: no-repeat; background-position: 0;"></div>
                            <a href="#" style="color: rgb(255, 255, 255); font-size: 20px; float: left; margin-top: 13px; margin-left: 5px; text-decoration: none;">Discord</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="margin-top: 20px; padding: 10px; background-color: #55acee; float: left; width: 100%; border-radius: 5px; box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);">
                            <div style="float: left; background-image: url('public/assets/img/twitter.png'); width: 63px; height: 55px; background-repeat: no-repeat; background-position: 0;"></div>
                            <a href="#" style="color: rgb(255, 255, 255); font-size: 20px; float: left; margin-top: 13px; margin-left: 5px; text-decoration: none;">Twitter</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="margin-top: 20px; padding: 10px; background-color: #e93323; float: left; width: 100%; border-radius: 5px; box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);">
                            <div style="float: left; background-image: url('public/assets/img/youtube.png'); width: 63px; height: 55px; background-repeat: no-repeat; background-position: 0;"></div>
                            <a href="#" style="color: rgb(255, 255, 255); font-size: 20px; float: left; margin-top: 13px; margin-left: 5px; text-decoration: none;">YouTube</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xl-6">
                        <div style="margin-top: 20px; height: 271px; border-radius: 5px; background-image: url('public/assets/img/h1460020471bc.png'); float: left; width: 100%; box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09); background-position: 80%;">
                            <h5 class="text-break" style="color: rgb(255, 255, 255); margin: 18px; margin-bottom: 0px;">Article</h5>
                            <div style="float: right; text-align: center; padding: 8px; background-color: #62ab50; border-radius: 10px; cursor: pointer; margin-right: 5px; margin-top: 183px;">
                                <span style="color: rgb(255, 255, 255);">En savoir plus</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div style="margin-top: 20px; background-color: #ffffff; float: left; width: 100%; border-radius: 5px;">
                            <h5 style="color: rgb(116, 116, 116); padding: 10px; border-bottom: 1px solid #eaeaea; margin-bottom: 10px;">Mes amis<i class="material-icons" style="float: right;">expand_more</i></h5>
                            <div class="friends" style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-image: url('public/assets/img/backdrop.png'); background-position: -95px 100%; margin-left: 10px;">
                                    <img src="public/assets/img/avatarimage.png" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Pseudo</span>
                            </div>
                            <div style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-image: url('public/assets/img/backdrop.png'); background-position: -95px 100%; margin-left: 10px;">
                                    <img src="public/assets/img/avatarimage.png" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Pseudo</span>
                            </div>
                            <div style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-image: url('public/assets/img/backdrop.png'); background-position: -95px 100%; margin-left: 10px;">
                                    <img src="public/assets/img/avatarimage.png" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Pseudo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div style="margin-top: 20px; background-color: #ffffff; float: left; width: 100%; border-radius: 5px;">
                            <h5 style="color: rgb(116, 116, 116); padding: 10px; border-bottom: 1px solid #eaeaea; margin-bottom: 10px;">Mes groupes<i class="material-icons" style="float: right;">expand_more</i></h5>
                            <div style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-position: -15px 100%; margin-left: 10px; background-color: #e8e8e8;">
                                    <img src="https://habbolswfs.ddns.net/swfs/c_images/Badgeparts/generated/b021124s001017s185065s196083s060014.png" style="margin-top: 12px; margin-left: 7px;" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Groupe</span>
                            </div>
                            <div style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-position: -15px 100%; margin-left: 10px; background-color: #e8e8e8;">
                                    <img src="https://habbolswfs.ddns.net/swfs/c_images/Badgeparts/generated/b027064s056114s038011s195055s197053.png" style="margin-top: 12px; margin-left: 7px;" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Groupe</span>
                            </div>
                            <div style="float: left; width: 100%; margin-bottom: 10px;">
                                <div style="float: left; width: 54px; height: 62px; border-radius: 10px; background-position: -15px 100%; margin-left: 10px; background-color: #e8e8e8;">
                                    <img src="https://habbolswfs.ddns.net/swfs/c_images/Badgeparts/generated/b028244s044145s195132s183240.png" style="margin-top: 12px; margin-left: 7px;" />
                                </div>
                                <span style="float: left; margin-top: 15px; margin-left: 10px; color: rgb(91, 91, 91);">Groupe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="margin-top: 20px; padding: 10px; margin-bottom: 20px; background-color: #ffffff; float: left; width: 100%; border-radius: 5px;">
                            <img src="public/assets/img/me_credits_active.gif" /><span style="margin-left: 10px;">© <strong>Scuti3</strong> | Développé par <strong>Tig3r</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/assets/js/functions.js"></script>
    </body>
</html>
