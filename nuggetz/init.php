<?php 

## Turn off notice reporting
$ebits = ini_get('error_reporting');
error_reporting($ebits ^ E_NOTICE);

## Turn off all error reporting
error_reporting(0);

## Class files
require("nuggetz/class/nuggetz.class.php");

## Start the session to track login
session_start();

## Keep things tidy
print "\n";

## Include CSS and Javascript
?>
<!-- 
## Nuggetz Version 2.0.0, Ollie Phillips, http://wwww.nuggetz.co.uk
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="nuggetz/jscript/nuggetz.js"></script>
<link href="nuggetz/css/nuggetz.css" rel="stylesheet" type="text/css" />
<?php
## If logged initialise TinyMCE
if(isset($_SESSION['mode']) && ($_SESSION['mode']=='edit')){
?>
<script type="text/javascript" src="nuggetz/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<!--
<script type="text/javascript" src="nuggetz/tinymce/jscripts/tiny_mce/plugins/smexplorer/smplugins.js"></script>
<script type="text/javascript" src="nuggetz/tinymce/jscripts/tiny_mce/plugins/smimage/smplugins.js"></script>
-->
<script type="text/javascript" src="nuggetz/jscript/nuggetztinymce.js"></script >
<?php
}
?>
<!-- Nuggetz javascript and CSS end -->
<?php 
## Keep things tidy
print "\n";
?>