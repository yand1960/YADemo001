
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Главная</title>

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
        <h1>Все товары</h1>
        <form method="GET" action="">
            <div class="filters row">
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">Время от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                    </label>
                    <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                    </label>
                </div>
            </div>
        </form>

        <nav>
            <ul class="pagination">

                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>





                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


                <li class="page-item">
                    <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
</body>
</html>
