<?php
header("Strict-Transport-Security:max-age=63072000");
header("Referrer-Policy: no-referrer-when-downgrade");
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1");
header("X-Frame-Options: DENY");
// Encrypt Function
$salt = 16;
function encrypt($plainText, $key) {
    $secretKey = md5($key);
    $iv = hash('sha256',"saaaabbbbcccccddddeweee");
    $encryptedText = openssl_encrypt($plainText, 'AES-128-CBC', $secretKey, OPENSSL_RAW_DATA, $iv);
    return base64_encode($encryptedText);

}

//Decrypt Function
function decrypt($encryptedText, $key) {

    $key = md5($key);
    $iv = hash('sha256',"aaaabbbbcccccddddeweee");
    $decryptedText = openssl_decrypt(base64_decode($encryptedText), 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return $decryptedText;

}

?>
