<?php
require_once("config/config.php");

// start session system
session_name('p1812104');
session_start();

if(isset($_GET['page']))
{
	$page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
	if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
	{
		$page = '404'; //page demandée inexistante
	}
}
else
	$page='home'; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php');