<!DOCTYPE html>
<html>
<body>

<h1>暗証番号検索</h1>
<p>名前とパスワードを入力すると、暗証番号が表示されます。</p>
<form method="post">
    名前: <input name="name" type="text" style="width: 200px; margin-right: 20px">
    パスワード: <input name="password" type="password" style="width: 200px"><br>
    <input type="submit" value="送信">
    <p>名前とパスワードを入力して下さい。</p>
</form>

<?php
    include 'ConnectionDB.php';
    if(isset($_POST["name"]) && isset($_POST["password"])) {
//        $str = filter_var($_POST["str"], FILTER_SANITIZE_STRING);
        $sql = "SELECT * FROM users WHERE name = '".$_POST["name"]."' AND password = '".$_POST["password"]."'";
        $result = mysqli_query($conn, $sql);
        if($result === false) {
            echo "false";
        } else {
            echo <<<EOM
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                        </tr>
                EOM;
            while ($row = mysqli_fetch_row($result)) {
                echo <<<EOM
                   <tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[3]</td>
                   </tr>
                EOM;
            }
            echo <<<EOM
                    </table>
                EOM;
        }
    }
    mysqli_close($conn);

?>
</body>
</html>