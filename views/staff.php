<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Untitled</title>
      <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
      <link rel="stylesheet" href="public/assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="public/assets/fonts/material-icons.min.css">
      <link rel="stylesheet" href="public/assets/css/Navigation-with-Search.css">
      <link rel="stylesheet" href="public/assets/css/Registration-Form-with-Photo.css">
      <link rel="stylesheet" href="public/assets/css/styles.css">
   </head>
   <body style="font-family: ABeeZee, sans-serif;background-color: #EAEAEA;min-height: 100%;">
      <div style="background-image: url('public/assets/img/1536292421.gif');padding-top: 25px;padding-bottom: 25px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12" style="margin-left: -10px;">
                  <img src="public/assets/img/yobba.gif" style="float: left;margin-left: 10px;">
                  <div style="background-color: #ffffff;float: left;margin-top: 20px;margin-left: 10px;border-radius: 20px;padding-top: 10px;padding-left: 15px;height: 38px;padding-right: 15px;"><img src="public/assets/img/habbo_online_anim.gif" style="float: left;"><span style="float: left;margin-top: -2px;margin-left: 3px;color: rgb(85,85,85);">10 connectés</span></div>
               </div>
            </div>
         </div>
      </div>
        <?php require("public/template/navbar.php"); ?>
      <div>
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <?php while($rankInfo = $ranks->fetch()) { ?>
                     <div style="margin-top: 20px;background-color: #ffffff;float: left;width: 100%;border-radius: 5px;box-shadow: 0px 3px 4px rgba(0,0,0,0.09);">
                        <div>
                           <div style="float: right;background-image: url('public/assets/img/<?= $rankInfo["badge"] ?>.gif');width: 60px;height: 44px;background-repeat: no-repeat;background-position: 50%;background-color: rgba(255,255,255,0.22);border-top-left-radius: 50px;border-bottom-left-radius: 50px;"></div>
                           <h5 style="background-color: <?= $rankInfo["prefix_color"] ?>;color: rgb(255,255,255);padding: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;margin-bottom: 0px;"><?= $rankInfo["rank_name"] ?></h5>
                        </div>
                        <div style="float: left;width: 100%;padding: 15px;padding-left: 0px;padding-top: 0px;">
                           <?php
                           $reqUserStaff = getUsersRanked($rankInfo["id"]);
                           while($staff = $reqUserStaff->fetch()) { ?>
                           <div style="width: calc(25% - 15px);height: 100px;float: left;margin-left: 15px;background-color: #dedede;margin-top: 15px;background-image: url('https://media.discordapp.net/attachments/699294500425695283/719270058496491601/unknown.png');border-top-right-radius: 15px;border-top-left-radius: 15px;">
                              <div style="height: 78px;width: 100%;background-color: rgba(0,0,0,0.45);border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                 <div style="height: 78px;background-image: url('https://www.avatar-api.com/habbo-imaging/avatarimage.php?figure=<?= $staff["look"] ?>');background-repeat: no-repeat;width: 100%;-webkit-filter: drop-shadow(2px 1px 0 #fff) drop-shadow(-2px 0px 0 #fff) drop-shadow(0 -3px 0 #fff);background-position: center 0px;"></div>
                              </div>
                              <span class="text-truncate text-center" style="width: 100%;float: left;background-color: #eaeaea;color: rgb(85,85,85);font-size: 15px;"><?= $staff["username"] ?></span>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  <?php } ?>
               </div>
               <div class="col-md-5">
                  <div style="margin-top: 20px;background-color: #ffffff;float: left;width: 100%;border-radius: 5px;box-shadow: 0px 3px 4px rgba(0,0,0,0.09);">
                     <h5 style="color: rgb(116,116,116);padding: 10px;border-bottom: 1px solid #EAEAEA;margin-bottom: 10px;"><img src="public/assets/img/toolbar_08.gif" style="margin-right: 5px;">Informations</h5>
                     <p class="text-justify" style="margin-bottom: 10px;margin-right: 10px;margin-left: 10px;font-size: 15px;">ing Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now&nbsp;<br></p>
                  </div>
                  <div style="margin-top: 15px;background-color: #ffffff;float: left;width: 100%;border-radius: 5px;box-shadow: 0px 3px 4px rgba(0,0,0,0.09);">
                     <h5 style="color: rgb(116,116,116);padding: 10px;border-bottom: 1px solid #EAEAEA;margin-bottom: 10px;"><img src="public/assets/img/nieuws.gif" style="margin-right: 5px;">Recrutements</h5>
                     <div style="margin: 10px;align-items: center;font-size: 15px;height: 86px;">
                        <img style="float: left;margin-right: 20px;" src="https://habborator.org/archive/Frank/frank_17.gif">
                        <p style="margin-bottom: 6px;">Recrutements :&nbsp;<span class="badge badge-success" style="margin-right: 2px;">Ouverts</span><span class="badge badge-danger" style="margin-right: 2px;">Fermés</span></p>
                        <p style="margin-bottom: 6px;">Prochaine session :&nbsp;<span class="badge badge-info" style="margin-right: 2px;">09/06/2036</span></p>
                        <p style="margin-bottom: 6px;">Postes :&nbsp;<span class="badge badge-info" style="margin-right: 2px;">#Modo</span><span class="badge badge-info" style="margin-right: 2px;">#GM</span><span class="badge badge-info" style="margin-right: 2px;">#Pub</span></p>
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
                  <div style="margin-top: 20px;padding: 10px;margin-bottom: 20px;background-color: #ffffff;float: left;width: 100%;border-radius: 5px;"><img src="public/assets/img/me_credits_active.gif"><span style="margin-left: 10px;">© <strong>Scuti3</strong> | Développé avec <i class="fa fa-heart" style="color: rgb(238,82,72);"></i>&nbsp;par <strong>Tig3r</strong></span></div>
               </div>
            </div>
         </div>
      </div>
      <script src="public/assets/js/jquery.min.js"></script>
      <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="public/assets/js/functions.js"></script>
   </body>
</html>