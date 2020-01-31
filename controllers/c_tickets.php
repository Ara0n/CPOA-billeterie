<?php

if (!isset($_SESSION['logged'])) {
	header("location: index.php?page=connection&last=tickets");
	exit();
}

require_once(PATH_MODELS."DAO.php");

$db = new DAO();

// total array format: day, category, promo/license code, <12yo, price
if ($_POST["promo"] == "p0") {
	$price = $db->get_price($_POST['day'], $_POST['category'], 0, 0);

	array_push($_SESSION['total'], [$_POST['day'], $_POST['category'], false, false, $price]);
	$ok = 1;
} elseif ($_POST["promo"] == "p1") {
	if ($reduc = $db->check_promo($_POST['code'])) {
		$price = $db->get_price($_POST['day'], $_POST['category'], 0, 0);
		$price = $price *(100-$reduc)/100;

		array_push($_SESSION['total'], [$_POST['day'], $_POST['category'], $_POST['code'], false, $price]);
		$ok = 1;
	} else {
		$bad_promo = 1;
	}
} elseif ($_POST["promo"] == "p2") {
	if ($db->is_license($_POST['code'])) {
		$price = $db->get_price($_POST['day'], $_POST['category'], 1, 0);

		array_push($_SESSION['total'], [$_POST['day'], $_POST['category'], $_POST['code'], false, $price]);
		$ok = 1;
	} else {
		$bad_license = 1;
	}
} elseif ($_POST["promo"] == "p3") {
	if ($_POST['category'] == 2) {
		$price = $db->get_price($_POST['day'], $_POST['category'], 0, 1);

		array_push($_SESSION['total'], [$_POST['day'], $_POST['category'], false, true, $price]);
		$ok = 1;
	} else {
		$bad_child = 1;
	}
}

require_once(PATH_VIEWS.$page.".php");