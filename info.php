<?php
$key = "xiaoKANGVSHd1246534789aLJSsadAUX";
$iv = "1234567890123456";
$info = file_get_contents("config.json");
echo(encrypt($info, $key, $iv));


// 加密
function encrypt($input, $key, $iv){
    return base64_encode(openssl_encrypt($input, 'AES-256-CBC', $key, OPENSSL_RAW_DATA,$iv));
}

// 解密
function decrypt($input, $key, $iv){
    return openssl_decrypt(base64_decode($input), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

?>