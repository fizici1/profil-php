<?php
function is_connected(): bool {
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	return !empty($_SESSION['connecte']);
}

function force_connection () {
	if(!is_connected()) {
		header('Location: /profil/login.php');
		exit();
	}
}
