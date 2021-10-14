<?php
	session_start();
	session_id();
	if(isset($_COOKIE['PHPSESSID'])) echo 'Previous Session ID = ' . $_COOKIE['PHPSESSID'];
?>