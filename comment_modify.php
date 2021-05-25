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
        $cnum = $_GET["cnum"];
        $content = $_GET["content"];
        $num = $_GET["num"];
        $page = $_GET["page"];
    ?>

   <div style="height:400px">
        <form name="cmi_form" action="comment_modify_insert.php?cnum=<?=$cnum?>&num=<?=$num?>&page=<?=$page?>" method="post">
            <textarea name="content" style="width:200px; height:200px"><?=$content?></textarea>
            <div>
                <button type="button" onclick="check()">변경</button>
            </div>
        </form>
   </div>

    <script>
        function check() {
            if (!document.cmi_form.content.value) {
                alert("댓글을 입력하세요.")
                document.cmi_form.content.focus()
                return false
            }
            document.cmi_form.submit()
        }
    </script>

</body>
</html>