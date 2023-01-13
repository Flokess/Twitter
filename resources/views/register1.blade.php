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
    <link rel="stylesheet" href="{{ asset('styles/auth/style_register.css') }}">
    <title>Register</title>
</head>
<body>
<div class="div">
    <div class="content">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="logo">
                <img src="{{asset('styles/auth/twitter-logo.png')}}" alt="">
            </div>
            <div class="login">
                <p>Логин / Телефон / Эл.почта</p>
                <input type="text" class="auth_register" name="email" id="email" value="{{old('email')}}" required autocomplete="email">
            </div>
            <div class="pass">
                <p>Пароль</p>
                <input type="password" class="auth_register" id="password" name="password" required autocomplete="new-password">
            </div>
            <div class="confirm_pass">
                <p>Повторите пароль</p>
                <input type="password" class="auth_register" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="agreement">
                <input type="checkbox" class="agreement"> <span> Я принимаю условия лицензионного соглашения</span>
            </div>
            <div class="btn_register">
                <button class="btn" type="submit">Зарегистрироваться</button>
            </div>
            <div class="not_acc">
                @csrf
                <p class="">Уже есть аккаунт?</p>
                <a href="{{route('auth_login')}}">Войти</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
