<?php
        include '../MinWebsida/connect.php';
		session_start();
		$pw=md5($_POST['myPassword']);
         $query = "SELECT * FROM `user` WHERE `name`=\"$_POST[myUser]\" and `password`=\"$pw\"";;
         $result = mysql_query($query);
		 $num_rows =  mysql_num_rows($result);
		 if ($num_rows == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: loginsuccess.php');
		 }
		 else {
			  header('Location: index.html');
		 }
		
?>
