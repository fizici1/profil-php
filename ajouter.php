<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=profil;charset=utf8', 'profiluser', 'Pr0f1L');
}
catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}
// Hachage du mot de passe
$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO user(username, password, qualite) VALUES(:username, :password, :qualite)');
$req->execute(array(
    'username' => $_POST['username'],
    'password' => $pass_hache,
    'qualite' => $_POST['qualite']));
echo "<p>Ajouté </p>";
echo $_POST['username'];
?>
