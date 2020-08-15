
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Планировщик мероприятий: Мероприятие</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Планировщик мероприятий</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a >Все мероприятия</a></li>
                <li ><a >Категории</a>
                </li>
                <li ><a >Мои мероприятия</a></li>
                <li><a >Сбросить проект в начальное состояние</a></li>
                <li><a >en</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a >Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>Мероприятие: Экзамен</h1>
        <h2>Экзамен по PHP</h2>
{{--        <h2>{{ $event }}</h2>--}}
        <h2>{{ $event ?? '' }}</h2>
        <p>Время: <b>15-00</b></p>
        <img src="https://www.php.net/images/logos/php-logo.svg">

        <p>Cдача экзамена по дипломному проекту</p>


{{--        <span>product.not_available</span>--}}
{{--        <br>--}}
{{--        <span>Сообщить мне, когда товар появится в наличии:</span>--}}
        <div class="warning">
        </div>
{{--        <form method="POST" action="http://internet-shop.tmweb.ru/subscription/1">--}}
{{--            <input type="hidden" name="_token" value="c8B2E444liOd13nrLklbOfo5e41RpiWMEua0sok4">            <input type="text" name="email"></input>--}}
{{--            <button type="submit">Отправить</button>--}}
{{--        </form>--}}
    </div>
</div>
</body>
</html>
