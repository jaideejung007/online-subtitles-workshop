<?php

	class CViewSubtitle{
			
		function ViewSubtitle(){
			return self::ViewSubtitle_content();
		}
	
		function ViewSubtitle_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
			
		function ViewSubtitle_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function ViewSubtitle_content(){
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_ViewSubtitle_title")),
				 );
			 
		return $content;
		}
		
		

	
			
	}
	
	
	
?>