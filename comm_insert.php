<!-- 
    create table comment (
        cnum int not null auto_increment,
        id varchar(20) not null,
        irum varchar(20) not null,
        onum int not null,
        content text not null,
        regist_day varchar(20) not null,
        primary key(cnum);
    )
 -->

 <?php

        $userid = $_GET["userid"];
        $username = $_GET["username"];
        $onum = $_GET["onum"];
        $page = $_GET["page"];
        $content = $_POST["content"];

        $content = htmlspecialchars($content, ENT_QUOTES);
        $regist_day = date("Y-m-d (H:i)");

        $con = mysqli_connect("localhost", "tsalt", "truesalt9!", "tsalt");
        $sql = "insert into comment (id, irum, onum, content, regist_day) ";
        $sql .= "values('$userid', '$username', '$onum', '$content', '$regist_day')";
        mysqli_query($con, $sql);
        mysqli_close($con); 

        echo "
            <script>
                location.href = 'board_view.php?num=$onum&page=$page'
            </script>
        ";


 ?>