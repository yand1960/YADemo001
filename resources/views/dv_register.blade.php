<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>

<p>Введите свои логин и пароль. Если вы уже регистрировались ранее, вы будете перенаправлениы на страницу заказов, если нет - будет создана новая учётная запись.</p>
<br />
<form method="post" action="/derevoxp/register/send">
    @csrf
    <input name="login" type="text">
    <input name="password" type="password">
    <input type="submit" value="SEND" />
</form>

</body>
</html>
