<?php
	session_start();
	$filename = $_SESSION['passid'] .".pdf";
	$filename = (string)$filename;   
	header('Pragma: public');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Cache-Control: private', false); // required for certain browsers 
	header('Content-Type: application/pdf');
	header("Content-Type: application/download");
	header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
	header('Content-Transfer-Encoding: binary');
	header("Content-Description: File Transfer");
	header('Content-Length: ' . filesize($filename));
	readfile($filename);
	exit;
?>
