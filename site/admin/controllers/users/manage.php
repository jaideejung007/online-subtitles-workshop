<?php

	class Cmanage{
			
		function manage_sections(){
			$array = array(
				array("users", "ManageUsers", $GLOBALS['vars'], TRUE),
				array("users", "UsersStatistics", $GLOBALS['vars'], self::ViewStatistics()),
			);
			return $array;
		}
		
		function ViewStatistics(){
			if($GLOBALS['vars']['sec']=="manage"){return TRUE;}else{return FALSE;}
		}
			
	}


?>