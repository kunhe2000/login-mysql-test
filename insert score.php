<!DOCTYPPE html>
<html>
<meta charset="utf-8">
<?php

     $conn = mysqli_connect("localhost", "root", "1234" , "RANKING") or die("MySQL 접속 실패!!");

     $sql = "INSERT INTO rank ( 이름, 점수) VALUES ( '이건희', '50');";

     $a = mysqli_query( $conn , $sql );
     if( $a ){ echo("데이터 입력성공"); }
     else { echo("데이터 입력실패"); }

?>