<?php
        include '../MinWebsida/connect.php';
		session_start();
        $query = "SELECT * FROM `user` WHERE `name`=\"$_POST[myUser]\"";;
        $result = mysql_query($query);
		$num_rows =  mysql_num_rows($result);
		if ($num_rows == 1) {
				 header('Location: index.html');
			
		else{
		$sql = "INSERT INTO `minwebsida`.`user` (`name`, `password`, `ID`) VALUES (\'$_POST[myUser]\', \'$_POST[myPassword]\', NULL);";
        $result = mysql_query($query);
		}
		}
		 
?>
