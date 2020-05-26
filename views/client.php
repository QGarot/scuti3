<html>
   <head>
      <meta charset="utf-8">
      <title><?= $name ?>: Hôtel</title>
      <script src="public/assets/js/client_flash.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   </head>
   <body style="background: #A69C7E;">
      <div id="client-ui">
         <div id="client" style="position:absolute; left:0; right:0; top:0; bottom:0; overflow:hidden; height:100%; width:100%;color: white;font-family:Poppins, sans-serif;">
            <img src="public/assets/img/yobba.gif" style="position:absolute;right:0px;top:13px;" />
            <div style="text-align:center;margin:130px;">
               <hr style="background-color:#ffffff;top:0px;width:50%;height:2px;">
               <h1 class="text-center" style="color:rgb(255,255,255);"><strong>HEY</strong></h1>
               <h1 class="text-center" style="color:rgb(255,255,255);"><strong>YOBBA A BESOIN D'ACCÉDER&nbsp;À</strong><br></h1>
               <h1 class="text-center" style="color:rgb(255,255,255);"><strong>FLASH !</strong></h1>
               <hr style="background-color:#ffffff;bottom:0px;position:relative;width:50%;height:2px;">
            </div>
            <div style="text-align:center;margin-top:-60px;">
               <a href="https://www.adobe.com/go/getflashplayer"><img src="https://media.discordapp.net/attachments/587694663654178828/596680716897615876/bokehlicia-captiva-flash-player.png" style="width:118px;"></a>
            </div>
         </div>
         <script>
            var Client = new SWFObject("<?= $swfs["production.habbo"] ?>", "client", "100%", "100%", "10.0.0");
            Client.addVariable("client.allow.cross.domain", "0"); 
            Client.addVariable("client.notify.cross.domain", "1");
            Client.addVariable("connection.info.host", "<?= $swfs["server.ip"] ?>");
            Client.addVariable("connection.info.port", "<?= $swfs["server.port"] ?>");
            Client.addVariable("site.url", "<?= $url ?>/hotel.php");
            Client.addVariable("url.prefix", "<?= $url ?>/hotel.php"); 
            Client.addVariable("client.reload.url", "<?= $url ?>/hotel.php");
            Client.addVariable("client.fatal.error.url", "<?= $url ?>/moi.php");
            Client.addVariable("client.connection.failed.url", "<?= $url ?>/moi.php");
            Client.addVariable("external.variables.txt", "<?= $swfs["gamedata.external_variables"] ?>");
            Client.addVariable("external.texts.txt", "<?= $swfs["gamedata.external_flash_texts"] ?>");
            Client.addVariable("external.override.texts.txt", "<?= $swfs["gamedata.override.external_override_texts"] ?>");
            Client.addVariable("external.override.variables.txt", "<?= $swfs["gamedata.override.external_override_variables"] ?>");
            Client.addVariable("figuredata.load.url", "<?= $swfs["gamedata.figuredata"] ?>");  
            Client.addVariable("productdata.load.url", "<?= $swfs["gamedata.productdata"] ?>"); 
            Client.addVariable("furnidata.load.url", "<?= $swfs["gamedata.furnidata"] ?>");
            Client.addVariable("use.sso.ticket", "1"); 
            Client.addVariable("sso.ticket", "<?php if($_SESSION["id"] > 0) { $base = ""; for($i = 1; $i <= 3; $i++): { $base = $base . rand(0,99); $base = uniqid($base); } endfor; $base = $base . ""; $TU = $db->prepare("UPDATE users SET auth_ticket = ? WHERE id = ?"); $TU->execute(array($base, $_SESSION["id"])); echo $base; } ?>");
            Client.addVariable("processlog.enabled", "0");
            Client.addVariable("client.starting", "Chargement de <?= $name ?>...");
            Client.addVariable("flash.client.url", "<?= $swfs["production"] ?>"); 
            Client.addVariable("user.hash", ""); 
            Client.addVariable("flash.client.origin", "popup");
            Client.addVariable("nux.lobbies.enabled", "true");
            Client.addVariable("country_code", "FR");
            Client.addParam('base', '<?= $swfs["production"] ?>');
            Client.addParam('allowScriptAccess', 'always');
            Client.addParam('menu', false);
            Client.addParam('wmode', "opaque");
            Client.write('client');
            FlashExternalInterface.signoutUrl = "<?= $url ?>/hotel";
         </script>
      </div>
      <script>
        // TODO: script
      </script>
      <script src="public/assets/js/functions.js"></script>
   </body>
</html>