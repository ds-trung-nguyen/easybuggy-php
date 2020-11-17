<!DOCTYPE html>
<html>
<body>

<h1> 文字列の逆転</h1>
<form method="post">
    文字列: <input name="str" type="text" style="width: 200px">
    <input type="submit" value="送信">
</form>

<?php
    if(isset($_POST["str"])) {
//        $str = filter_var($_POST["str"], FILTER_SANITIZE_STRING);
        $str = $_POST["str"];
        echo "逆転した文字列 :".strrev($str);
    }
?>

</body>
</html>