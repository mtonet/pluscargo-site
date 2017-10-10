<?php
// Class scripts for nuggetz and nuggetzControl 
class nuggetz{

	var $name;
	
	function __construct($name){
		
			// Set the nuggetz name		
			$this->name = strtolower($name);
	
			// Check if nuggetz file exists, if not create
			if(!file_exists("nuggetz/data/$this->name.nuggetz")){
				$fhandle = fopen("nuggetz/data/$this->name.nuggetz",'x');
				// Write some data
				fwrite($fhandle,"This is your \"$this->name\" nugget.");
				fclose($fhandle);
			}
		return $this->display();
	}

	public function display(){

		// Choose between edit and display modes
		if(session_is_registered('mode')){
			if($_SESSION['mode'] == 'edit'){
				// edit mode
				print $this->getContent('edit');
			}			
		}else{
			// read mode
			print $this->getContent('read');			
		}
	}	

	protected function getContent($mode){
		$fname = "nuggetz/data/$this->name.nuggetz";
		$fhandle = fopen($fname,'r');			
		$contents = fread($fhandle, filesize($fname));
		fclose($fhandle);

		if($mode=='read'){
			$output = "<div id='".$this->name."' class='nuggetz ".$this->name."'>\n";
			$output .= $contents."\n</div>\n\n";
		}else{
			$output = "<div class='nuggetzeditmode'>\n";
			$output .="\t<div class='nuggetzeditbar'><a href='#' onclick='editor(\"".$this->name."\",\"".session_id()."\");return false;'><img src='nuggetz/images/edit.gif' alt='Edit Nugget' /></a>\n\t</div>\n";
			$output .="\t\t<div id='".$this->name."' class='nuggetz ".$this->name."'>\n";
			$output .= $contents."\n\t\t</div>\n</div>\n\n";

		}
		
		return $output;
	}

}

class nuggetzControl{

	// Provides simple login/logout facility
	public function __construct($class=null){
		// Choose between edit and display modes
		if(session_is_registered('mode')){
			if($_SESSION['mode'] == 'edit'){
				// print edit toolbar
				$toolbar = "\n<a href='#' class='".$class."' onclick='logout();' rel='noindex,nofollow'>Log Out</a>";
				echo $toolbar;	
			}			
		}else{
			// print read toolbar
				$this->badLoginCheck();
				$toolbar = "\n<a href='#' class='".$class."' onclick='login();' rel='noindex,nofollow'>Log In</a>";
				echo $toolbar;							
		}		
	}
	
	private function badLoginCheck(){
		
		## Login fail check
		if((isset($_GET['login'])) && ($_GET['login']=='fail')){
			
			echo '<script type="text/javascript">';
			echo 'login(1);';
			echo '</script>';

		}
	}
}
?>