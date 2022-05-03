<!DOCTYPPE html>
<html>
<meta charset="utf-8">
<?php

	$con=mysqli_connect("localhost", "root", "1234", "RANKING") or die("MySQL 접속 실패!!");
     mysqli_query($con,"set names utf8"); //UTF-8로 데이터 변경 (한글 깨짐 처리)
	# $name = iconv("utf-8","utf-8",$_POST['name'])
	$이름 = $_POST['이름'];
	$점수 = $_POST['점수'];
	
     $sql =("INSERT INTO rank (`이름`, `점수`) VALUES ('$이름', '$점수')"); 

	$ret = mysqli_query($con, $sql);
	echo "<h1> 신규 회원 입력 결과 </h1>";
	if($ret) {
		echo "데이터가 성공적으로 입력됨.";
	}
	else {
		echo "데이터 입력 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}
	mysqli_close($con);

	echo "<br> <a href='main.html'> 홈으로 </a> ";
?>

