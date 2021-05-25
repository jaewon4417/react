<meta charset="utf-8">
<!-- 
    create table mobboard (
        num int not null auto_increment,
        id char(20) not null,
        irum char(20) not null,
        subject char(200) not null,
        content text not null,
        regist_day char(20) not null,
        hit int not null,
        file_name char(40),
        file_type char(40),
        file_copied char(40),
        primary key(num)
    );
 -->
<?php 

session_start();
if ( isset($_SESSION["userid"]) ) {
    $userid = $_SESSION["userid"];
} else {
    $userid = "";
}
if ( isset($_SESSION["username"]) ) {
    $username = $_SESSION["username"];
} else {
    $username = "";
}



$subject = $_POST["subject"];
$content = $_POST["content"];

$subject = htmlspecialchars($subject, ENT_QUOTES);
$content = htmlspecialchars($content, ENT_QUOTES);

$regist_day = date("Y-m-d (H:i)");
$upload_dir = './data/';

$upfile_name = $_FILES["upfile"]["name"];           // abcd.jpg
$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];   // ./임시디렉토리/?????.jpg
$upfile_type = $_FILES["upfile"]["type"];           // image/jpg
$upfile_size = $_FILES["upfile"]["size"];           // 용량
$upfile_error = $_FILES["upfile"]["error"];         // 오류여부

if ( $upfile_name && !$upfile_error ) {
    $file = explode(".", $upfile_name);      // abcd.jpg
    $file_name = $file[0];                   // abcd
    $file_ext = $file[1];                    // jpg

    $new_file_name = date("Y_m_d_H_i_s");   // 21_04_09_09_45_03
    $copied_file_name =  $new_file_name.".".$file_ext;   // 21_04_09_09_45_03.jpg
    $uploaded_file = $upload_dir.$copied_file_name;      // ./data/21_04_09_09_45_03.jpg

    if ( $upfile_size > 2000000) {
        echo "<script> 
        alert('업로드 파일 크기는 2MB 이하여야 합니다.!');
        history.go(-1);
        </script>
        ";
        exit;
    }
   
    if ( !move_uploaded_file($upfile_tmp_name, $uploaded_file) ) {
            echo "<script> 
            alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
            history.go(-1);
            </script>
            ";
            exit;
    }
} else {
    $upfile_name = "";
    $upfile_type = "";
    $copied_file_name = "";
}

$con = mysqli_connect("localhost", "tsalt", "truesalt9!", "tsalt");
$sql = "insert into mobboard (id, irum, subject, content, regist_day, hit, file_name, file_type, file_copied) ";
$sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0, '$upfile_name', '$upfile_type', '$copied_file_name')";
mysqli_query($con, $sql);
mysqli_close($con); 

echo "
    <script>
    location.href = 'board_list.php';
    </script>
";

?>
