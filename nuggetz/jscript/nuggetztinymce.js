tinyMCE.init({
    mode : "none",
    theme : "advanced", 
	content_css : "/nuggetz/css/nuggetztinymce.css", 

	height: "280",
	plugins : "table,paste",
	
	/*
	plugins : "table,paste,smexplorer,smimage",

	plugin_smexplorer_directory : "/nuggetz/myfiles/",
	plugin_smexplorer_check_session_variable : "mode",
	plugin_smexplorer_show_chmod: 1,
	
	plugin_smimage_directory : "/nuggetz/myfiles/",
	plugin_smimage_check_session_variable : "mode",
	
	file_browser_callback : "SMPlugins",
	*/
	
	// Theme options
	theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,sub,sup,|,charmap,|,smexplorer,smimage",
		
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "none",
        theme_advanced_resizing : false

});