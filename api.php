<?php
require_once('core.php');

if (isset($_GET['do'])) {
	$butts = $_GET['do'];
	switch ($butts) {
		case 'post':
			post($_POST['text']);
			break;
		case 'get':
			get();
			break;
		default:
			echo 'Butts forever';
			break;
	}
}
?>