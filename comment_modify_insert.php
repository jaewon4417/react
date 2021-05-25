<?php 
    $cnum = $_GET["cnum"];
    $content = $_POST["content"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "tsalt", "truesalt9!", "tsalt");
    $sql = "update comment set content='$content' where cnum='$cnum'";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
           window.opener.location.href = 'board_view.php?num=$num&page=$page';
           self.close()
        </script>
    ";


?>
