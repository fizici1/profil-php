<?php
require_once 'auth.php';
function nav_item (string $lien, string $titre): string
{
	$classe = 'nav_item';
	if ($_SERVER['SCRIPT_NAME'] === $lien) {
		$classe = $classe . ' active';
	}
	return <<<HTML
	<li class="$classe">
			<a class="nav-link" href="$lien">$titre</a>
		</li>
HTML;
}
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
	<a class="navbar-brand" href="/profil">Profil</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<?= nav_item('/profil/eleves.php', 'Elèves');?>
			<?= nav_item('/profil/notes.php', 'Notes');?>
			<?= nav_item('/profil/logout.php', 'Se déconnecter');?>
		</ul>
	</div>
</nav>
