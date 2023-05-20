@extends('layouts.app')

@section('content')
    <header class="header">
        <div class="container">
            <div class="logo-header"></div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="contant-box">
                <div class="card card_1"></div>
                <div class="card card_2"></div>
            </div>
            <div class="chips">
                <div class="chips__btn chips__btn_1 chips__btn_activ">Кофе</div>
                <div class="chips__btn chips__btn_2">Чай</div>
                <div class="chips__btn chips__btn_3">Авторскике</div>
                <div class="chips__btn chips__btn_4">Пончики</div>
            </div>
            <div class="coffee-cards-box">
                <div class="coffee-card coffee-card_1"></div>
                <div class="coffee-card coffee-card_2"></div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="nav">
            <ul class="nav__list">
                <li class="nav__item nav__item_icon-home"><a href="" class="nav__link home">Главная</a></li>
                <li class="nav__item nav__item_border nav__item_icon-basket"><a href="" class="nav__link basket">Корзина</a></li>
                <li class="nav__item nav__item_icon-profil"><a href="" class="nav__link profile">Профиль</a></li>
            </ul>
        </div>
    </footer>
    <script src="scripts.js"></script>
@endsection
