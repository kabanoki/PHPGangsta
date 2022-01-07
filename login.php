<?php
require_once 'PHPGangsta/GoogleAuthenticator.php';

if(isset($_POST['send'])){
    $ga = new PHPGangsta_GoogleAuthenticator();

    $checkResult = $ga->verifyCode($_POST['secretkey'], $_POST['gacode'], 2);
    if ($checkResult) {
        echo 'OK';
    } else {
        echo 'FAILED';
    }
}
?>

<html>
<body>
<form action="" method="post">
    <div>
        シークレットキー
        <input type="text" name="secretkey">
    </div>
    <div>
        6桁コード
        <input type="text" name="gacode">
    </div>
    <div><button type="submit" name="send" value="send">Send</button>
</form>
</body>
</html>







