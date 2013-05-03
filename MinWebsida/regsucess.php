<?php
        include '../MinWebsida/connect.php';
		session_start();
        $query = "SELECT * FROM `user` WHERE `name`=\"$_POST[myUser]\"";;
        $result = mysql_query($query);
		$Pw=md5($_POST['myPassword']);
		$num_rows =  mysql_num_rows($result);
		if ($num_rows == 1) {
				 header('Location: index.html');
			}
		else{
		$sql = "INSERT INTO `minwebsida`.`user` (`name`, `password`, `ID`) VALUES (\"$_POST[myUser]\", \"$Pw\", NULL)";
		echo $sql;
        $result = mysql_query($sql);
		echo $result;
		header ('Location: index.html');
		}
		 
?>
