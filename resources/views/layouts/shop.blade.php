<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>main - ГеймсМаркет</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Scripts -->
        @vite(['resources/css/guest.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="main-wrapper">
            <header class="main-header">
                <div class="logotype-container"><a href="{{ url('/') }}" class="logotype-link"><img src="{{ asset('img/logo.png') }}" alt="Логотип"></a></div>
                <nav class="main-navigation">
                <ul class="nav-list">
                    <li class="nav-list__item"><a href="{{ url('/') }}" class="nav-list__item__link">Главная</a></li>
                    <li class="nav-list__item"><a href="#" class="nav-list__item__link">Мои заказы</a></li>
                    <li class="nav-list__item"><a href="#" class="nav-list__item__link">Новости</a></li>
                    <li class="nav-list__item"><a href="#" class="nav-list__item__link">О компании</a></li>
                </ul>
                </nav>
                <div class="header-contact">
                <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
                </div>
                <div class="header-container">
                    <div class="payment-container">
                        <div class="payment-basket__status">
                        <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link" href="{{ route('cart') }}"><i class="fa fa-shopping-basket"></i></a></div>
                        <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">{{ session('quanity') ?? '0' }}</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
                        </div>
                    </div>
                    <div class="authorization-block">
                        @if(Auth::user())
                            <a href="{{ route('dashboard') }}" class="authorization-block__link">Профиль</a>
                        @else
                            <a href="{{ route('register') }}" class="authorization-block__link">Регистрация</a>
                            <a href="{{ route('login') }}" class="authorization-block__link">Войти</a>
                        @endif
                    </div>
                </div>
            </header>
            <div class="middle">
                {{ $slot }}
            </div>
            <footer class="footer">
                <div class="footer__footer-content">
                <div class="random-product-container">
                    <div class="random-product-container__head">Случайный товар</div>
                    <div class="random-product-container__content">
                    <div class="item-product">
                        <div class="item-product__title-product"><a href="#" class="item-product__title-product__link">The Witcher 3: Wild Hunt</a></div>
                        <div class="item-product__thumbnail"><a href="#" class="item-product__thumbnail__link"><img src="{{ asset('img/cover/game-1.jpg') }}" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                        <div class="item-product__description">
                        <div class="item-product__description__products-price"><span class="products-price">400 руб</span></div>
                        <div class="item-product__description__btn-block"><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="footer__footer-content__main-content">
                    <p>Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                    онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                    У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                    и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                    коды продления и многое друго. Также здесь всегда можно узнать последние новости
                    из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                    актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                    что немаловажно, выгодно!</p>
                </div>
                </div>
                <div class="footer__social-block">
                    <ul class="social-block__list bcg-social">
                        <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
          </footer>
        </div>
    </body>
</html>
