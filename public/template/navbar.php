<nav class="navbar navbar-light navbar-expand-sm navigation-clean-search" style="background-color: #fff;">
   <div class="container">
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
         <ul class="nav navbar-nav">
            <li class="nav-item" role="presentation">
               <div class="nav-item dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;"><?= getUserById($_SESSION["id"])["username"] ?></a>
                  <div class="dropdown-menu" role="menu">
                     <a class="dropdown-item" role="presentation" href="?action=me">Profil</a>
                     <a class="dropdown-item" role="presentation" href="#">Paramètres</a>
                     <a class="dropdown-item" role="presentation" href="#">bla</a>
                  </div>
               </div>
            </li>
         </ul>
         <ul class="nav navbar-nav">
            <li class="nav-item" role="presentation">
               <div class="nav-item dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;">Communauté</a>
                  <div class="dropdown-menu" role="menu">
                     <a class="dropdown-item" role="presentation" href="?action=staff">Equipe</a>
                     <a class="dropdown-item" role="presentation" href="#">Palmares</a>
                     <a class="dropdown-item" role="presentation" href="#">Photos</a>
                  </div>
               </div>
            </li>
         </ul>
         <ul class="nav navbar-nav">
            <li class="nav-item" role="presentation">
               <div class="nav-item dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(85, 85, 85); margin-right: 10px; text-decoration: none;">Boutique</a>
                  <div class="dropdown-menu" role="menu">
                     <a class="dropdown-item" role="presentation" href="#">VIP Club</a>
                     <a class="dropdown-item" role="presentation" href="#">Packs</a>
                     <a class="dropdown-item" role="presentation" href="#">Autres</a>
                  </div>
               </div>
            </li>
         </ul>
         <form style="margin-bottom:0px;" class="form-inline mr-auto" target="_self">
            <div class="form-group">
               <label for="search-field"><i class="fa fa-search" style="color: #aaaaaa;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" />
            </div>
         </form>
         <a class="btn btn-light action-button" role="button" href="index.php?action=client" style="margin-right: 5px; background-color: rgb(86, 198, 131);">Jouer</a>
         <a class="btn btn-light action-button" role="button" href="index.php?action=logout" style="background-color: rgb(222, 104, 96);">Déconnexion</a>
      </div>
   </div>
</nav>