
<?php

require_once('db.php');
//Создаем функцию. которая будет генерировать наш уникальный код
function random()
{
    $encryption = '1234567890qwertyuiopasdfghjklzxcvbnm';
    $count = strlen($encryption);
    $timeInterval = time();
    $resultId = '';
    for ($i = 0; $i < 3; $i++) {
        $last = $timeInterval % $count;
        $timeInterval = ($timeInterval - $last) / $count;
        $resultId .= $encryption[$last];
    }

    return $resultId;
}

$cutUrl = $_POST['cutUrl'];
//проверяем по условию значение, переданное пользователем и проводим валидацию
if (!empty($cutUrl) && filter_var($cutUrl, FILTER_VALIDATE_URL)) {

    $resultId = random();

    $response = [
        "status" => true,
        "url" => 'http://' . $_SERVER['HTTP_HOST'] . '/ucut/' . $resultId,
        "cutUrl" => $cutUrl
    ];

    $newUrl = $response['url'];
    $sql = "INSERT INTO short_key (id, url, short_url) VALUES (NULL , '$cutUrl', '$newUrl')";
    $connect->query($sql);
    echo json_encode($response);

} else {
    $response = [
        "status" => false,
        "url" => 'http://' . $_SERVER['HTTP_HOST'] . '/ucut/' . $resultId
    ];
    echo json_encode($response);
}











