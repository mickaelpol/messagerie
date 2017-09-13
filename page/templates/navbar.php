<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="?p=home">Accueil</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="?p=chat">messagerie</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?p=inscription"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="?p=connexion"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="?p=profilUser"><span class="glyphicon glyphicon-cog"></span> <?= isset($_SESSION['uti_pseudo']) ? $_SESSION['uti_pseudo']: "" ?></a></li>
      <li><a href="?p=deconnecter"><span class="glyphicon glyphicon-off"></span> Disconnect</a></li>
    </ul>
  </div>
</nav>