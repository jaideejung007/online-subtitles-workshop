<?php

	class Wwidget_LatestVideosByCategory{
		
		function widget_LatestVideosByCategory(){
			return self::widget_LatestVideosByCategory_render();
		}
		
		function widget_LatestVideosByCategory_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_LatestVideosByCategory_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_LatestVideosByCategory_render(){
			$array = array(
				//array("{AddVideo}", $GLOBALS['COMMON']->l('widget_LatestVideosByCategory_addvideo')),
			);
			return $array;
		}	
		
	}


?>