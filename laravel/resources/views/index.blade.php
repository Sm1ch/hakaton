@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/style.css">

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
                @foreach($menus as $menu)

                    <a class="chips__btn chips__btn_1 chips__btn_activ" href="{{ route('getMenu',['id' => $menu->id]) }}">{{$menu->name}}</a>

                @endforeach
            </div>

            <div class="coffee-cards-box">
                @foreach($goods as $good)
                    <div class="coffee-card coffee-card_1"><a href="{{route('addItem',['id' => $good->id])}}">добавить</a></div>
                @endforeach
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="nav">
            <ul class="nav__list">
                <li class="nav__item nav__item_icon-home"><a href="/" class="nav__link home">Главная</a></li>
                <li class="nav__item nav__item_border nav__item_icon-basket"><a href="" class="nav__link basket">Корзина</a></li>
                @if(auth()->user())
                    <li class="nav__item nav__item_icon-profil"><a href="{{route("profile")}}" class="nav__link profile">Профиль</a></li>
                @else
                    <li class="nav__item nav__item_icon-profil"><a href="{{route("login")}}" class="nav__link profile">Логин</a></li>
                @endif
            </ul>
        </div>
    </footer>
    <script src="scripts.js"></script>
@endsection
