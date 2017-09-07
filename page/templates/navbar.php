<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="?p=home">Accueil</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="?p=chat">messagerie</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?p=inscription"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="?p=connexion"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href=""><?= isset($_SESSION['uti_pseudo']) ? $_SESSION['uti_pseudo']: "" ?></a></li>
      <li><a href="?p=deconnecter"><span class="glyphicon glyphicon-off"></span> Disconnect</a></li>
    </ul>
  </div>
</nav>