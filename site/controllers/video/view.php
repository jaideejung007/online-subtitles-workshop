<?php

	class Cview{
			
		function view_sections(){
			$array = array(
				array("video", "UploadThumbnail", $GLOBALS['vars'], self::Show()),
				array("video", "ViewVideo", $GLOBALS['vars'], TRUE),
				array("player", "ViewPlayer", $GLOBALS['vars'], self::CheckVideoSource()),
				array("video", "VideoSynopsis", $GLOBALS['vars'], TRUE),
				array("subtitle", "VideoSubtitles", $GLOBALS['vars'], TRUE),
				array("subtitle", "AddSubtitle", $GLOBALS['vars'], $GLOBALS['system']->IsLoggedin()),
			);
			return $array;
		}
		
		function view_set(){
			$VideoInfo = self::GetVideoInfo();
			$GLOBALS['vars']['PageTitle'] = $VideoInfo[0]['title'];
			$GLOBALS['vars']['PageDesc'] = $VideoInfo[0]['synopsis'];
			$GLOBALS['BreadCrumbs'] = array(
				array("my videos", "page=video&sec=list")
			);
		}
		
		function Show(){
			if(self::CheckOwner() and !self::IsThumbnailExist()){return TRUE;}else{return FALSE;}
		}
		
		function CheckOwner(){
			$VideoInfo = $GLOBALS['system']->GetVideoInfo($GLOBALS['vars']['vid']);
			$owner = $VideoInfo[0][uid];
			if($_SESSION['id']==$owner){return TRUE;}else{return FALSE;}
		}
		
		function CheckVideoSource(){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` WHERE `id` = :id", $args);
			if($res[0]['source']!=""){return TRUE;}else{return FALSE;}
		}
		
		function IsThumbnailExist(){
			if(self::CheckOwner()){
			$args = array(
				array(":id", $GLOBALS['vars']['vid'], "str"),
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM `videos` WHERE `id` = :id", $args);
			if($res[0]['thumbnail']!=""){return TRUE;}else{return FALSE;}
			}
		}
		
		function GetVideoInfo(){
			$args = array(
				array("vid", $GLOBALS['vars']['vid'], "str")
			);
			$res = $GLOBALS['system']->db_query("SELECT * FROM videos WHERE id = :vid", $args);
			return $res;
		}	
			
	}

	
?>