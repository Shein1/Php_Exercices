<?
 session_start();

	session_destroy();
	echo 'Bye bye ! ' . $_SESSION['user'];

?>