<?php
		 $Username = $_POST['username'];
		 $Email = $_POST['email'];
		 $Email1 = "@";
		 $Email_Check = strpos($Email,$Email1);
		 $Password = $_POST['password'];
		 $Re_Password = $_POST['password2'];
		
		 //Check To See If All Information Is Correct
		
		 if($Username == "")
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_NoUsername');
		 }
		
		 if($Password == "" || $Re_Password == "")
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_NoPassword');
		 }
		
		 if($_POST['year'] == "" or $_POST['month'] == "" or $_POST['day'] == "")
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_NoBirthYear');
		 }
		
		 if($Password != $Re_Password)
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_PasswordDontMatch');
		 }
		
		 if($Email_Check === false)
		 {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_InvalidEmail');
		 }
		 
		 if(preg_match("/^[a-zA-Z0-9]+$/", $Username) != 1) {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_usernameaz');
		 }

		 if(preg_match("/^[a-zA-Z0-9]+$/", $Password) != 1) {
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_passwordaz');
		 }
		 
		 $params = array(
		 	array(":username", $Username, "str")
		 );
		 $res = $GLOBALS['COMMON']->db_query("SELECT * FROM users WHERE username = :username", $params);
		 if(count($res)>0){
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_UsernameExist');
		 }	
		 
		 $params = array(
		 	array(":email", $Email, "str")
		 );
		 $res = $GLOBALS['COMMON']->db_query("SELECT * FROM users WHERE email = :email", $params);
		 if(count($res)>0){
		 $GLOBALS['ERROR'][] = $GLOBALS['COMMON']->l('register_EmailExist');
		 }
		 	 
		 if(count($GLOBALS['ERROR'])==0){
		 	$Password = sha1($Password);
			$params = array(
				array(":username", $Username, "str"),
				array(":password", $Password, "str"),
				array(":email", $Email, "str"),
				array(":birth", $_POST['year'], "str"),
				array(":group", "3", "str"),
				array(":birthdate", $_POST['year']."-".$_POST['month']."-".$_POST['day'], "str"),
				array(":RegisterationDate", date("Y-m-d H:i:s"), "str"),
			);
		 	$result = $GLOBALS['COMMON']->db_query("INSERT INTO `users` (`username`, `password`, `email`, `BirthYear`, `group`, `RegisterationDate`, `birthdate`) VALUES (:username, :password, :email, :birth, :group, :RegisterationDate, :birthdate)", $params);
		 	if($result!="error")
 			{
 			 $GLOBALS['SUCCESS'][] = $GLOBALS['COMMON']->l('register_completed').'<script type="text/javascript">$("#register").empty();setTimeout(function(){ window.location = "index.php"; }, 5000);</script>';
			}

		 }
?>