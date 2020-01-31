<?php

if (!isset($_SESSION['logged'])) {
	header("location: index.php?page=connection&last=cart");
	exit();
}

if (isset($_GET['remove'])) {

	array_splice($_SESSION['total'], $_GET['remove'], 1);
}

if (isset($_GET['paid'])) {
	$_SESSION['total'] = [];
}

require_once(PATH_VIEWS.$page.".php");