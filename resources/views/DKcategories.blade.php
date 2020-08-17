
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Планировщик мероприятий: Все Категории</title>

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
        @foreach($categories as $category)
            <div class="panel">
                <a href = "{{ url('dk/events/'.$category->id)}}">
                    <img src="https://leisure.union.ufl.edu/Content/Images/leisure-courses.png">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                    {{ $category->description }}
                </p>
            </div>
        @endforeach

{{--        <div class="panel">--}}
{{--            <a href ="education">--}}
{{--                <img src="https://www.eurodiaconia.org/wordpress/wp-content/uploads/2017/01/education.jpg">--}}
{{--                <h2>Образование</h2>--}}
{{--            </a>--}}
{{--            <p>--}}
{{--                В этом разделе Вы найдёте самые популярные мероприятия по повышению квалификации--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="panel">--}}
{{--            <a href = "health">--}}
{{--                <img src=" https://static.wixstatic.com/media/d658a9_60a036d882f14d29b2eecde054cb3227~mv2.jpg">--}}
{{--                <h2>Здоровье</h2>--}}
{{--            </a>--}}
{{--            <p>--}}
{{--                Лучшие предложения для поддержания здоровья--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="panel">--}}
{{--            <a href = "leisure">--}}
{{--                <img src="https://leisure.union.ufl.edu/Content/Images/leisure-courses.png">--}}
{{--                <h2>Досуг</h2>--}}
{{--            </a>--}}
{{--            <p>--}}
{{--                Здесь можно найти мероприятие для души, для свободного времени--}}
{{--            </p>--}}
{{--        </div>--}}
    </div>
</div>
</body>
</html>
