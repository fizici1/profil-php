<?php include("header.php"); ?>
        <?php include("menu.php"); ?>
        
        <div class="container" style="max-width:400px;margin:60px auto;">
            <form class="form-group" action="/profil/ajouter.php" method="post">
                <h3>Ajouter</h3>
                <input class="form-control" type='text' name='username' placeholder='Username'>
                <input class="form-control" type='password' name='password' placeholder='Password'>
                <input class="form-control" type='text' name='qualite' placeholder='Qualité'>
                <label class="checkbox"></label>
                <button class="btn btn-lg btn-primary btn-block" type='submit'>Ajouter</button> 
            </form>
        </div>

<?php include("footer.php"); ?>
