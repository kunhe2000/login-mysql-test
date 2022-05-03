<?php
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '1234';
$mysql_database = 'ranking';
$mysql_charset = 'utf8';

$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
mysqli_query($connect,"set names utf8"); //UTF-8로 데이터 변경 (한글 깨짐 처리)
if($connect->connect_errno){
	echo '[연결실패] : '.$connect->connect_error.''; 
} else {
	echo '[연결성공]<br>';
}

//2. 문자셋 지정
if(! $connect->set_charset($mysql_charset))
{
	echo '[문자열변경오류] : '.$connect->connect_error;
}
 
    $scoreQuery = mysqli_query($connect,"SELECT * FROM rank ORDER BY `점수` DESC")
	or die(mysqli_error($connect));;
          
   $i = 0;
   while($row = mysqli_fetch_array($scoreQuery)) {
    $i++;
    echo "Rank ".$i.": 이름#".$row['이름']." - 점수: ".$row['점수']."<br />\n";
   }
?>