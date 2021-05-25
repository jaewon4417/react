<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 
    create table mobmember (
    num int auto_increment not null,
    id varchar(20) not null,
    pass varchar(20) not null,
    irum varchar(20) not null,
    tel varchar(20) not null,
    primary key(num)
    ); 
-->
<?php 
$id = $_POST["id"];
$pw = $_POST["pw"];
$irum = $_POST["irum"];
$tel = $_POST["tel"];

$con = mysqli_connect("localhost", "tsalt", "pajong", "tsalt");
$sqlid = "select * from mobmember where id='$id'";
$idresult = mysqli_query($con, $sqlid);
$record_num = mysqli_num_rows($idresult);

if ($record_num) {
    echo "<script> 
        alert('중복된 아이디입니다.'); 
        history.go(-1); 
        </script>";
    exit;
}

$sql = "insert into mobmember (id, pass, irum, tel) values('$id', '$pw', '$irum', '$tel')";

mysqli_query($con, $sql);
mysqli_close($con);

echo "<script> location.href = 'index.php' </script>";

?>


</body>
</html>