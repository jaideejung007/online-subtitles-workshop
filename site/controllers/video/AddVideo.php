<?php

	class CAddVideo{
		
		function AddVideo(){
			return self::AddVideo_content();
		}
	
		function AddVideo_hooks(){
			$array = array(
				array("SubmitVideo", "SubmitVideo"),
			);
			return $array;
		}
		
		function AddVideo_options(){
			$options = array(
			"show"=>array(),
			"hide"=>array(),
			"loggedin"=>"yes",
			);
			return $options;
		}
				
		function AddVideo_content(){
				$content = array
				  (
				  array("{VideoType}", self::types()),
				  array("{VideoCategory}", self::categories()),
				  array("{VideoLanguage}", self::languages()),
				  array("{Countries}", self::countries()),			  
				  array("{rd-day}", self::days()),
				  array("{rd-month}", self::months()),
				  array("{rd-year}", self::years()),
				  array("{length}", self::minutes()),
				  array("{title}", $GLOBALS['system']->l("video_AddVideo_title")),
				  array("{htitle}", $GLOBALS['vars']['VideoTitle']),
				  array("{hothertitle}", $GLOBALS['vars']['VideoOtherTitle']),
				  array("{hvideourl}", $GLOBALS['vars']['VideoUrl']),
				  array("{hcasting}", $GLOBALS['vars']['casting']),
				  array("{htags}", $GLOBALS['vars']['tags']),
				  array("{hsynopsis}", $GLOBALS['vars']['synopsis']),
				  array("{hdirector}", $GLOBALS['vars']['director']),
				  array("{Type}", $GLOBALS['system']->l('video_AddVideo_NewVideoType')),
				  array("{Category}", $GLOBALS['system']->l('video_AddVideo_Category')),
				  array("{Language}", $GLOBALS['system']->l('video_AddVideo_Language')),
				  array("{Title}", $GLOBALS['system']->l('video_AddVideo_Original_Title')),
				  array("{OtherTitle}", $GLOBALS['system']->l('video_AddVideo_OtherTitle')),
				  array("{Country}", $GLOBALS['system']->l('video_AddVideo_Country')),
				  array("{Genres}", $GLOBALS['system']->l('video_AddVideo_Genres')),
				  array("{ReleaseDate}", $GLOBALS['system']->l('video_AddVideo_ReleaseDate')),
				  array("{Casting}", $GLOBALS['system']->l('video_AddVideo_Casting')),
				  array("{Director}", $GLOBALS['system']->l('video_AddVideo_Director')),
				  array("{Length}", $GLOBALS['system']->l('video_AddVideo_Length')),
				  array("{Synopsis}", $GLOBALS['system']->l('video_AddVideo_Synopsis')),
				  array("{Tags}", $GLOBALS['system']->l('video_AddVideo_Tags')),
				  array("{Submit}", $GLOBALS['system']->l('video_AddVideo_Submit')),
				  array("{VideoUrl}", $GLOBALS['system']->l('video_AddVideo_VideoUrl')),
				  array("{VideoGenres}", self::genres()),
				  array("{page}", $GLOBALS['vars']['page']),
				  array("{sec}", $GLOBALS['vars']['sec']),
				 );
			 
		return $content;
		}
		
		function languages(){
			$languages = $GLOBALS['system']->GetLanguages();
			for ($i=0; $i < count($languages); $i++) {
				if($GLOBALS['vars']['VideoLanguage'] == $languages[$i]['id']){$selected = "selected='selected'";}else{$selected="";}
				$res .= "<option value='".$languages[$i]['id']."' ".$selected.">".$languages[$i]['language']."</option>";
			}
			return $res;
		}
		
		function types(){
			$types = $GLOBALS['system']->GetVideoTypes();
			for ($i=0; $i < count($types); $i++) {
				if($GLOBALS['vars']['VideoType'] == $types[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$types[$i]['id']."' ".$selected.">".$types[$i]['type']."</option>";
			}
			return $res;
		}
		
		function categories(){
			$categories = $GLOBALS['system']->GetVideoCategories();
			for ($i=0; $i < count($categories); $i++) {
				if($GLOBALS['vars']['VideoCategory'] == $categories[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$categories[$i]['id']."' ".$selected.">".$categories[$i]['category']."</option>";
			}
			return $res;
		}
		
		function countries(){
			$countries = $GLOBALS['system']->GetCountries();
			for ($i=0; $i < count($countries); $i++) {
				if($GLOBALS['vars']['country'] == $countries[$i]['id']){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$countries[$i]['id']."' ".$selected.">".$countries[$i]['short_name']."</option>";
			}
			return $res;
		}

		function genres(){
			$genres = $GLOBALS['system']->GetGenres();			
			for ($i=0; $i < count($genres); $i++) {
				if(is_array($GLOBALS['vars']['genres'])){
				if(in_array($genres[$i]['id'], $GLOBALS['vars']['genres'])){$checked="checked";}else{$checked="";}
				}
				$res .= "<div class='checkbox-genre'><label for='chkgenre".$genres[$i]['id']."'><input type='checkbox' name='genres[]' id='chkgenre".$genres[$i]['id']."' value='".$genres[$i]['id']."' ".$checked."> ".$genres[$i]['genre']."</label></div>";
			}
			return $res;
		}
		
		function days(){
			$days = $GLOBALS['system']->days();
			for ($i=0; $i < count($days); $i++) {
				if($GLOBALS['vars']['rd-day'] == $days[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$days[$i]."' ".$selected.">".$days[$i]."</option>";
			}
			return $res;
		}
		
		function months(){
			$months = $GLOBALS['system']->months();
			for ($i=0; $i < count($months); $i++) {
				if($GLOBALS['vars']['rd-month'] == $months[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$months[$i]."' ".$selected.">".date("F", mktime(0, 0, 0, $months[$i], 10))."</option>";
			}
			return $res;
		}

		function years(){
			$years = $GLOBALS['system']->years();
			for ($i=0; $i < count($years); $i++) {
				if($GLOBALS['vars']['rd-year'] == $years[$i]){$selected = "selected='selected'";}else{$selected="";}  
				$res .= "<option value='".$years[$i]."' ".$selected.">".$years[$i]."</option>";
			}
			return $res;
		}
		
		function minutes(){
			$minutes = $GLOBALS['system']->minutes(300);
			for ($i=0; $i < count($minutes); $i++) {
				if($GLOBALS['vars']['length'] == $minutes[$i]){$selected = "selected='selected'";}else{$selected="";} 
				$res .= "<option value='".$minutes[$i]."' ".$selected.">".$minutes[$i]."</option>";
			}
			return $res;	
		}
		
		function SubmitVideo($args){
			if(is_array($args['genres'])){$args['genres'] = implode(",", $args['genres']);}
			if($args['VideoType']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectVideoType');}
			if($args['VideoCategory']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectVideoCategory');}
			if($args['VideoLanguage']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectVideoLanguage');}
			if($args['VideoTitle']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterVideoTitle');}
			if($args['VideoOtherTitle']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterVideoOtherTitle');}
			if($args['country']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectCountry');}
			if($args['genres']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectGenres');}
			if($args['rd-month']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectREleaseMonth');}
			if($args['rd-day']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectReleaseDay');}
			if($args['rd-year']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectReleaseYear');}			
			if($args['casting']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterCast');}
			if($args['director']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterDirector');}
			if($args['length']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_SelectVideoLength');}
			if($args['tags']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterVideoTags');}			
			if($args['synopsis']==""){$ERROR[]=$GLOBALS['system']->l('video_AddVideo_EnterVideoSynopsis');}
			if($GLOBALS['vars']['VideoUrl']!="" and !filter_var($GLOBALS['vars']['VideoUrl'], FILTER_VALIDATE_URL)){$ERROR[]="invalid url";}		
			if(count($ERROR)>0){$GLOBALS['ERROR'] = $ERROR; return FALSE;}
			
			//$genres = implode(",", $_POST['genres']);
			
			$params = array(
			array(":uid", $_SESSION['id'], "str"),
			array(":title", trim($args['VideoTitle']), "str"),
			array(":other_title", trim($args['VideoOtherTitle']), "str"),
			array(":type", $args['VideoType'], "str"),
			array(":category", $args['VideoCategory'], "str"),
			array(":language", $args['VideoLanguage'], "str"),
			array(":country", $args['country'], "str"),
			array(":genres", $args['genres'], "str"),
			array(":releasedate", $args['rd-year']."-".$args['rd-month']."-".$args['rd-day'], "str"),
			array(":casting", trim($args['casting']), "str"),
			array(":director", trim($args['director']), "str"),
			array(":length", $args['length'], "str"),
			array(":tags", trim($args['tags']), "str"),
			array(":synopsis", trim($args['synopsis']), "str"),
			array(":source", trim($args['VideoUrl']), "str"),
			);
			$res = $GLOBALS['system']->db_query("INSERT INTO `videos` (`uid`, `title`, `other_title`, `type`, `category`, `language`, `country`, `genres`, `release_date`, `casting`, `director`, `length`, `tags`, `synopsis`, `source`) VALUES (:uid, :title, :other_title, :type, :category, :language, :country, :genres, :releasedate, :casting, :director, :length, :tags, :synopsis, :source )", $params);			
			$GLOBALS['SUCCESS'][] = "video '".$args['VideoTitle']."' added successfully";
			$GLOBALS['vars']['VideoTitle'] = "";
			$GLOBALS['vars']['VideoOtherTitle'] = "";
			$GLOBALS['vars']['VideoType'] = "";
			$GLOBALS['vars']['VideoCategory'] = "";
			$GLOBALS['vars']['VideoLanguage'] = "";
			$GLOBALS['vars']['country'] = "";
			$GLOBALS['vars']['genres'] = "";
			$GLOBALS['vars']['rd-year'] = "";
			$GLOBALS['vars']['rd-month'] = "";
			$GLOBALS['vars']['rd-day'] = "";
			$GLOBALS['vars']['casting'] = "";
			$GLOBALS['vars']['director'] = "";
			$GLOBALS['vars']['length'] = "";
			$GLOBALS['vars']['tags'] = "";
			$GLOBALS['vars']['synopsis'] = "";
			$GLOBALS['vars']['VideoUrl'] = "";
			return TRUE;
		}
		
	}
	
	
	
?>