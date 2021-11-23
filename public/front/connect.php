<?php
header("Strict-Transport-Security:max-age=63072000");
header("Referrer-Policy: no-referrer-when-downgrade");
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1");
header("X-Frame-Options: DENY");
session_start();
if(isset( $_SESSION['token'] ) && $_SESSION['token'] === true){
    require_once "md5.php";
    $host = 'localhost';
    $db_name   = decrypt('dgaBhJULMkY3Zzyu7L9LRyh/1XHzF4ZbSDAQVJcdNV3ZbXVBjBGqbihVM8B0ZVlh',$salt);
    $user = decrypt('q2mCA3EF68w5WrAIndFifg==',$salt);
    $pass = decrypt('1ri+PP61nIcL0+RLpk8GOA==',$salt);
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $db = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}else{
    session_destroy();
}
?>    