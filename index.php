
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=style.css>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>
        Сервис сокращения ссылок Ucut
    </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="images/123124.png" alt="#" class="center-block">
                <div class="btn-wrapper-end"><button type="button" class="btn btn-outline-dark">Установить расширение</button></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p>С помощью данного сервиса сокращения URL Вы можете сделать из длинной ссылки короткую, или просто - сократить или укоротить ссылку.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="infoMes" style="margin: 70px 35% 0 44%;width: 50%;color: red;"></div>

    </div>

    <div class="col-md-6 offset-md-3" style="margin-top: -36px;">
        <form class="pt-5 pb-5 pl-5 pr-5" method="post" action="short.php" id="sendForm">

            <input type="text" class="form-control" id="inputUrl" name="url" placeholder="Введите ссылку" value="http://">
            <button class="btn btn-outline-dark" type="button" id="sendBtn">Сократить</button>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="resultMessage"></p>
                <a href="" id="shortUrl" style="margin-left: 218px;"></a>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>