<?php

	class Wwidget_breadcrumbs{
		
		function widget_breadcrumbs(){
			return self::widget_breadcrumbs_render();
		}
		
		function widget_breadcrumbs_options(){
			$options = array(
			"show"=>array(), //show widget on this pages only - leave blank to show on all pages
			"hide"=>array("home"), // hide widget on this pages
			"loggedin"=>"", // show widget if user loggen in options "yes" for logged in only "no" for not logged in "" for both states
			);
			return $options;
		}
		
		function widget_breadcrumbs_render(){
			$array = array(
				array("{TemplatePath}",$GLOBALS['config']['TemplatesDir'].$GLOBALS['config']['template']),
				array("{page}", $GLOBALS['vars']['page']),
				array("{section}", $GLOBALS['vars']['sec']),
			);
			return $array;
		}

	}

	
?>