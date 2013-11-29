<?php

	class CEditorInfo{
			
		function EditorInfo(){
			return self::EditorInfo_content();
		}
	
		function EditorInfo_hooks(){
			$array = array(
				array("test", "test"),
			);
			return $array;
		}
			
		function EditorInfo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function EditorInfo_content(){
			$SubtitleContent = self::GetSubtitleContent();
			$CheckedLines = self::GetChecked();
			$FinishedLines = self::GetFinished();
			$TeamMembers = self::GetTeamCount();
			$FinishedProgress = (count($FinishedLines)*100)/count($SubtitleContent);
			$CheckedProgress = (count($CheckedLines)*100)/count($SubtitleContent);
				$content = array
				  (
				  array("{title}", $GLOBALS['COMMON']->l("subtitle_EditorInfo_title")),
				  array("{TotalLines}", count($SubtitleContent)),
				  array("{CheckedLines}", count($CheckedLines)),
				  array("{FinishedLines}", count($FinishedLines)),
				  array("{TeamMembers}", count($TeamMembers)),
				  array("{FinishedProgress}", $FinishedProgress),
				  array("{CheckedProgress}", $CheckedProgress),
				 );
			 
		return $content;
		}
		
		function GetSubtitleContent(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid", $args);
			return $res;
		}

		function GetChecked(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `checked` <> 0", $args);
			return $res;
		}		

		function GetFinished(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
				array(":cid", $GLOBALS['vars']['cid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `SubtitlesContent` WHERE `sid` = :sid and `cid` = :cid and `done` = 1", $args);
			return $res;
		}	
		
		function GetTeamCount(){
			$args = array(
				array(":sid", $GLOBALS['vars']['sid'], "str"),
			);
			$res = $GLOBALS['COMMON']->db_query("SELECT * FROM `TeamSubtitles` WHERE `sid` = :sid", $args);
			if(count($res)<1){return array();}
			$TeamID = $res[0]['tid'];
			$res = $GLOBALS['COMMON']->GetTeamMembers($TeamID);
			return $res;		
		}	

	
			
	}
	
	
	
?>