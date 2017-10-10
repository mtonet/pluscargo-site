<?php
require("../config.php");
session_start();

if(!($_POST['nuggetzuser'] == $nuggetzUser && $_POST['nuggetzpassword'] == $nuggetzPassword)){

	header("Location: http://".$domainName."?login=fail");	
	
}else{

	$_SESSION['mode'] = 'edit';
	header("Location: http://".$domainName);
	
}
?>