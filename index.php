<?php
	require_once 'Savant3\Savant3.php';

	$mpage_tpl = new Savant3();

	$mpage_tpl->aboutRef = 'index.php';
	$mpage_tpl->participantsRef = "./participants/index.php";
	$mpage_tpl->arenasRef = "";

	$mpage_tpl->navcontainer = $mpage_tpl->fetch('templates/navcontainer.tpl.php');

	$mpage_tpl->display('templates/main.tpl.php');
?>