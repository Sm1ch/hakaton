@extends('layouts.app')

@section('content')
<div class="register-box wrapper">
    <h1 class="sign_h1">Вход</h1>
    <form class="form" action="" >
        <label for="email">Имейл</label>
        <input class="form-input" id="email" type="email" placeholder="Email" value="{{ old('email') }}">
        <label for="password">Пароль</label>
        <input class="form-input" id="password" type="password" placeholder="Password" >
        <input class="form-input form-input_btn" type="submit">
    </form>
</div>
<div class="footer">
    <div class="nav">
        <ul class="nav__list">
            <li class="nav__item nav__item_icon-home"><a href="./index.html" class="nav__link home">Главная</a></li>
            <li class="nav__item nav__item_border nav__item_icon-basket"><a href="" class="nav__link basket">Корзина</a></li>
            <li class="nav__item nav__item_icon-profil nav__item-profil_activ"><a href="" class="nav__link profile">Профиль</a></li>
        </ul>
    </div>
</div>
@endsection
