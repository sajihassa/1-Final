<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("portfolio");
	$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['txtusername'])."' 
	and password = '".mysql_real_escape_string($_POST['txtpassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["userlevel"] = $objResult["userlevel"];

			session_write_close();
			
			if($objResult["userlevel"] == "a")
			{
				echo ("<script language='JavaScript'>
			window.location.href='admin.php';
			</script>");
			
			}
			else
			{
				echo ("<script language='JavaScript'>
			window.location.href='dashboard.php';
			</script>");
			}
	}
	mysql_close();
?>