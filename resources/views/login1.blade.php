<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/auth/style.css') }}">
    <title>AUTH</title>
</head>
<body>
<div class="div">
    <div class="content">
        <form action="" method="post">
            <div class="logo">
                <img src="{{asset('styles/auth/twitter-logo.png')}}" alt="">
            </div>
            <div class="login">
                <p class="log_p">Логин</p>
                <input type="text" class="inp_log">
            </div>
            <div class="pass">
                <p class="log_p">Пароль</p>
                <input type="password" class="inp_log">
            </div>
            <button class="btn" type="submit">Войти</button>
            <div class="not_acc">
                @csrf
                <p class="">Нет аккаунта?</p>
                <a href="{{route('register')}}">Зарегистрироваться</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
