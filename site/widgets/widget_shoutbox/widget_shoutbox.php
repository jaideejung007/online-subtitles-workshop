<?php

	class Wwidget_shoutbox{
		
		function widget_shoutbox(){
			return self::widget_shoutbox_render();
		}
		
		function widget_shoutbox_install(){
			
		}
		
		function widget_shoutbox_schema(){

		}
		
		function widget_shoutbox_info(){
			$info = array(
			'name' => 'ShoutBox',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_shoutbox_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_shoutbox_options(){
			$options = array(
			"show"=>array("home"), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_shoutbox_render(){
			$array = array();
			return $array;
		}	
		
	}


?>