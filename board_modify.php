<?php

$page = $_GET["page"];
$num = $_GET["num"];

$subject = $_POST["subject"];
$content = $_POST["content"];

$con = mysqli_connect("localhost", "pineapple9716", "a27364417^^", "pineapple9716");
$sql = "update mobboard set subject='$subject', content='$content' where num='$num'";
mysqli_query($con, $sql);
mysqli_close($con);

echo "
    <script>
        location.href = 'board_list.php?page=$page';
    </script>
";



?>