<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$id = $_POST["id"];
$pw = $_POST["pw"];

$con = mysqli_connect("localhost", "tsalt", "pajong", "tsalt");
$sql = "select * from mobmember where id='$id'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ( !$count ) {
    echo "
        <script>
            alert('등록되지 않은 아이디입니다.')
            history.go(-1)
        </script>
         ";
} else {
    $row = mysqli_fetch_array($result);
    $db_pass = $row["pass"];

    mysqli_close($con);

    if ( $pw != $db_pass ) {
        echo "
        <script>
            alert('비밀번호가 틀립니다.')
            history.go(-1)
        </script>
         ";
    } else {
        session_start();
        $_SESSION["userid"] = $row["id"];
        $_SESSION["username"] = $row["irum"];

        echo "
            <script>
                location.href = 'index.php';
            </script>
            ";

    }

}

?>

</body>
</html>