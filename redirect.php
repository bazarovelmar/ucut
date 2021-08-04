<?php
require_once "db.php";

$urlNew = $_GET['code'];

$fullUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/ucut/' . $urlNew;

$result = $connect->query("SELECT url FROM short_key WHERE short_url = '$fullUrl'");
$new = $result->fetch_assoc();

if (isset($result)) {
    header('location: '.$new['url']);
    exit();
}














