<?php
 
    // On démarre la session
    session_start();
 
   session_destroy();

   header('Location: index.php?p=connexion');
 
?>