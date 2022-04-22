<?php
$file = $_GET['dl'];



header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"". basename($file) ."\"");
header('Expires: 0');
header('Content-Length: ' . filesize($file));

readfile ($file);
exit();
?>