<!doctype html>
<html lang="en">
<head>
           <?php
			// Place this in your between your <head> and </head> tags
			require_once("nuggetz/init.php");
		?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pluscargo</title>
        
    <link rel="stylesheet" href="bower_components/BigVideo/css/bigvideo.css">


   <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<style type="text/css">


*  {
	margin:0;
	padding:0;
}
 

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	color:#FFF;
	background-color:#000;
	overflow:hidden;
	font-weight:400;
}

 
.geral {
	min-height:100%;
	position:relative;
}

.container-fluid { height: 85px;}
        
        .banner {
    position: absolute;
    top: 100px;
    left: 30%;
        }


</style>    


    <style id='page-skin-1' type='text/css'><!--
#fanback{display:none;background:rgba(0,0,0,0.2);width:100%;height:100%;position:fixed;top:0;left:0;z-index:99999}
#fan-exit{width:100%;height:100%}
#fanbox {width: 520px;height: 270px;position: absolute;top: 48%;left: 52%; margin: -220px 0 0 -375px;}
#fanclose {
	float: right;
	cursor: pointer;
	height: 15px;
	padding: 4px;
	position: absolute;
	padding-right: 5px;
	margin-top: 0px;
	margin-right: 0px;
	width: 0px;
	top: -11px;
    left: 608px;
    background-color: #FEFEFE;
    width: 90px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#666;
	text-align:right;
}

--></style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js?ver=3.3.1' type='text/javascript'></script>
<script src='js/jquery.cookie.js' type='text/javascript'></script>
<script type='text/javascript'>
jQuery(document).ready(function($){
if($.cookie('popup_user_login') != 'yes'){
$('#fanback').delay(100).fadeIn('medium');
$('#fanclose, #fan-exit').click(function(){
$('#fanback').stop().fadeOut('medium');
});
}
});
</script>

    
        
                
    
    
</head>
<body>
   
<!--<div id='fanback'><div id='fan-exit'></div><div id='fanbox'><div id='fanclose'>Ir para o site X</div>
<iframe allowTransparency='true' frameborder='0' scrolling='no' src='popup.html' style='border: none; overflow: hidden; margin-top: -19px; width: 710px; height: 600px;'></iframe>
</div>
</div>-->
   
         
    <?php include("includes/nav.php"); ?>  


<div class="geral">

</div>
<div id="text"><img src="assets/text.png"></div>
<!--<div id="buttons"><img src="assets/home.png"></div> -->

<div class="footer">
<div class="container-rodape">
<?php new nuggetz('infos');?>
</div>
</div>



    <!-- BigVideo Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="js/video.js"></script>

    <!-- BigVideo -->
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>



    <!-- Demo -->
    <script>
	    $(function() {
            var BV = new $.BigVideo();
            var vids = [
                'vids/2.mp4',
                'vids/3.mp4',
				'vids/1.mp4',
                'vids/6.mp4'
                
            ];
            vids.sort(function() { return 0.5 - Math.random() }); // random order on load
			BV.init();
			BV.showPlaylist(vids,{ambient:true});
			
			if (Modernizr.touch) {
                BV.show('img/banner-servicos.jpg');
            } else {
                BV.show('vids/1.mp4',{ambient:true});
            }
			
	    });
    </script>





    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     
    
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80464322-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/23421967-7143-4515-9dde-f9406cbb0d31-loader.js"></script>
</body>
</html>