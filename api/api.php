<?php
require_once(__DIR__.'/MyAPI.php');
//Request from the same server don't have HTTP_ORIGIN header
if(!array_key_exists('HTTP_ORIGIN', $_SERVER)){
	$_SERVER['HTTP_ORIGIN']	= $_SERVER['SERVER_NAME'];
}

try{
	$API = new MyAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
	echo $API->processAPI();
}catch(Exception $e){
	echo json_encode(Array('error' => $e->getMessage()));
}
