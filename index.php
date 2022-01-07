<?php
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();
echo "Secret is: <br>";
echo '<input type="text" value="'.$secret.'" style="width:20em" readonly><br><br>';


$qrCodeUrl = $ga->getQRCodeGoogleUrl('PHPGangsta', $secret);
echo "Google Charts URL for the QR-Code: <br>";
echo '<input type="text" value="'.$qrCodeUrl.'" style="width:72em" readonly><br>';
echo '<img src="'.$qrCodeUrl.'" /><br><br>';

$oneCode = $ga->getCode($secret);
echo "Checking Code '$oneCode' and Secret '$secret':<br>";

$checkResult = $ga->verifyCode($secret, $oneCode, 2);
if ($checkResult) {
    echo 'OK';
} else {
    echo 'FAILED';
}



