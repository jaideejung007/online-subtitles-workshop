<?php

	class Wwidget_Manage{
		
		function widget_Manage(){
			return self::widget_Manage_render();
		}
		
		function widget_Manage_install(){
			
		}
		
		function widget_Manage_schema(){

		}
		
		function widget_Manage_info(){
			$info = array(
			'name' => 'User Account Manager',
			'description' => 'widget description',
			'by' => 'RealMatrix',
			'date' => '2014-14-1',
			'version' => '1.0',
			);
			return $info;
		}
		
		function widget_Manage_hooks(){
			$array = array(
				array("test", "test")
			);
			return $array;
		}
	
		function widget_Manage_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array(), // hide widget on this pages
			"loggedin"=>"yes", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_Manage_render(){
			$array = array(
				array("{AddVideo}", $GLOBALS['system']->l('widget_quicklinks_addvideo')),
				array("{AddTeam}", $GLOBALS['system']->l('widget_quicklinks_addteam')),
				array("{Logout}", $GLOBALS['system']->l('widget_quicklinks_logout')),
				array("{PMS}", $GLOBALS['system']->l('widget_quicklinks_pms')),
				array("{UserCp}", $GLOBALS['system']->l('widget_quicklinks_UserCp')),
				array("{uid}", $_SESSION['id']),
			);
			return $array;
		}	
		
	}


?>