<?php 
    $cnum = $_GET["cnum"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "tsalt", "truesalt9!", "tsalt");
    $sql = "delete from comment where cnum='$cnum'";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
           location.href = 'board_view.php?num=$num&page=$page';
        </script>
    ";


?>
