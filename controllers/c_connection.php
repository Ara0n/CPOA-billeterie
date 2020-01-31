<?php

if (isset($_GET["disconnect"])) {
	session_destroy();

	header("location: index.php?page=home");
	exit();
} else {

	if (!isset($_SESSION['logged'])) {

		require_once(PATH_MODELS . "DAO.php");

		$db = new DAO();

		if (isset($_POST["login"])) {
			if ($db->check_login($_POST["mail"], $_POST["password"])) {
				$_SESSION["logged"] = 1;
				$_SESSION['cart price'] = 0;
				$_SESSION['total'] = [];

				require_once(PATH_VIEWS . "connected.php");
			}
		} elseif (isset($_POST["sign_in"])) {
			$create_err = !$db->create_user($_POST["mail"], $_POST["password"]);

			if ($create_err) {
				require_once(PATH_VIEWS . "connection.php");
			} else {
				$_SESSION["logged"] = 1;

				$_SESSION['cart price'] = 0;
				$_SESSION['total'] = [];

				require_once(PATH_VIEWS . "connected.php");
			}
		} else {
			require_once(PATH_VIEWS . "connection.php");
		}
	} else {
		require_once(PATH_VIEWS . "connected.php");
	}
}