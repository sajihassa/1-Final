<?php
error_reporting(0);

//เชื่อมต่อ Database
$con = mysqli_connect("localhost","root","","portfolio");

$con->set_charset("utf8");
date_default_timezone_set("Asia/Bangkok");

function checkLogin($username,$password){
	$data = array();
	global $con;
	$sql = "select * from users where username = '".$username."' AND password='".$password."'";
	$res = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($res)) {
		$data['id'] = $row['id'];

	}
	if (!empty($data)) {

		session_start();
		$id = $data['id'];
		$_SESSION['id'] = $data['id'];
		echo ("<script language='JavaScript'>
			window.location.href='dashboard.php';
			</script>");

	}else{
		echo "<script type='text/javascript'>alert('ไม่สามารถเข้าสู่ระบบได้ ');</script>";
	}

	mysqli_close($con);

}


function logout(){
	session_start();
	session_unset();
	session_destroy();
	echo ("<script language='JavaScript'>
		window.location.href='index.php';
		</script>");
	exit();
}

function getUser($id){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM users WHERE id = '".$id."'");
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}
?>