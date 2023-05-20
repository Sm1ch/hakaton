@extends('layouts.app')

@section('content')
<header class="profil-header">
    <div class="container">
        <div class="greating">
            <div class="greating__contant">
                <h1 class="greating__title">{{ $user->name}}</h1>
                <p class="greating__text">{{ $user->email}}</p>
            </div>
            <div class="greating__edit">
                <img src="/assets/icon/edit.png" alt="edit_icon">
            </div>
        </div>
    </div>
</header>
<main class="profil">
    <div class="container">
        <div class="profil-box">
            <div class="profil-card">
                <div class="profil-card__info">
                    <div class="profil-card__title">Бонусная карта</div>
                    <div class="profil-card__price">
                        <img src="/assets/price.png" alt="price">
                    </div>
                    <div class="profil-card__text">Покажите QR-код продавцу для получения скидок</div>
                </div>
                <div class="profil-card__qcode">
                    <img src="/assets/qcode.png" alt="qcode">
                </div>
            </div>
            <div class="profil-list">
                <div class="profil__item">
                    <div>Вкусовые предпочтения</div>
                    <div class="icon"></div>
                </div>
                <div class="profil__item">
                    <div>Адрес доставки</div>
                    <div class="icon"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="nav">
        <ul class="nav__list">
            <li class="nav__item nav__item_icon-home"><a href="" class="nav__link home">Главная</a></li>
            <li class="nav__item nav__item_border nav__item_icon-basket"><a href="" class="nav__link basket">Корзина</a></li>
            <li class="nav__item nav__item_icon-profil"><a href="./sigin.html" class="nav__link profile">Профиль</a></li>
        </ul>
    </div>
</footer>
@endsection()
