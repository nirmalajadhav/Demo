<?php

function index() {
	global $template;
}

function verify() {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		// Verify login and redirect user accordingly
		// Set session

		$_SESSION['loggedin'] = 1;
	}

	header("Location: ".BASE_URL."home/restricted-page\r\n");
	exit;

}
