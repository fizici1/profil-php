<?php
$erreur = null;
if (!empty($_POST['username']) && !empty($_POST['password']) ) {
        if ($_POST['username'] === 'David' && $_POST['password'] === 'dfghjk' ) {
                session_start();
                $_SESSION['connecte'] = 1;
                header('Location: /profil/index.php');
                exit();
        } else {
                $erreur = "Identifiants incorrects";
        }
}
?>

<?php include("header.php"); ?>
    

<?php
if($erreur): ?>
<div class="alert alert-danger">
        <?= $erreur ?>
</div>
<?php endif ?>

        <div class="container" style="max-width:400px;margin:60px auto;">
            <form class="form-group" action="" method="post">
                <h3>Connexion</h3>
                <input class="form-control" type='text' name='username' placeholder='Username'>
                <input class="form-control" type='password' name='password' placeholder='Password'>
                <label class="checkbox"></label>
                <button class="btn btn-lg btn-primary btn-block" type='submit'>Login</button> 
            </form>
        </div>
        
<?php include("footer.php"); ?>
