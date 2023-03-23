<?php $title = "Login Admin"?>
<?php ob_start(); ?>
  <form class="box" action="" method="post" name="login">
        <h2 class="connTitle">Connexion</h1>
        <h3 class="text-danger fs-5"> <?= $message ?></h3>
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <label>
  <input type="password" name="password" placeholder="Mot de passe">
</label>
        <input type="submit" value="Connexion " name="submit" class="box-button">
</form>
<?php $content = ob_get_clean(); 
require('layoutLogin.php');
?>
