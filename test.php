<?php 
$userId = 1;
$path = './test/'.$userId.'/images';
$mode = 0777;
$recursive = true;
mkdir($path, $mode, $recursive);
?>