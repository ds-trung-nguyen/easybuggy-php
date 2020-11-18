<!DOCTYPE html>
<html>
<body>

<h1>管理者ログインページ</h1>
<p>ここから先は管理者権限が必要です。ユーザーIDとパスワードを入力して下さい。</p>
<form method="post">
    ユーザーID :  <input name="username" type="text" style="width: 200px; margin-right: 20px">
    パスワード: <input name="password" type="password" style="width: 200px"><br>
    <input type="submit" value="ログイン">
</form>

<?php
    echo "<h3>LDAP query test</h3>";
    echo "Connecting ...";
   
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $ldap = ldap_connect("localhost", "80");
        echo "connect result is " . $ldap . "<br />";
        if ($bind = ldap_bind($ldap, "root@localhost", "")) {
            // log them in!
            echo "a";
        } else {
            // error message
            echo "b";
        }
    }
   

?>
</body>
</html>