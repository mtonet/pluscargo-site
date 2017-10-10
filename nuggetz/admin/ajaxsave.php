<?php
// Turn off notice reporting
$ebits = ini_get('error_reporting');
error_reporting($ebits ^ E_NOTICE);

// Turn off all error reporting
error_reporting(0);

// Session started
session_start();
$mysession = session_id();

// Only allow access to nuggetz if logged in
if($_SESSION['mode'] == 'edit'){
	$sessioncheck=$_GET['sid'];
	if($sessioncheck==$mysession){

		$save = str_replace('\"','"',$_POST['pagevalue']);
		$nugget = $_GET['nugget']; 
	

		// Some further checks on the data to prevent anything being executed
		$savereplace = array("<?php","<?PHP","<?","?>","<script","<SCRIPT","</script>","</SCRIPT>");
		$nuggetreplace = array(".","&#46;","%2E","%00");

		$nugget= str_replace($nuggetreplace,'',$nugget);
		$save = str_replace($savereplace,'',$save);

		// Catch empty pagevalue
		if($save==""){
			$save= "&nbsp;";
		}

		$fhandle = fopen("../data/$nugget.nuggetz",'w');
		// Write some data
		fwrite($fhandle,$save);
		fclose($fhandle);
		print $save;
	}
}
?>