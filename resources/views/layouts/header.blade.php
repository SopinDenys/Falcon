<div class="top-header">
    <div class="container-fluid">
        <div class="top-header-main">
            <div class="col-md-4 top-header-left">
                <h6>Доставка по Украине</h6>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 top-header-center">
                <div class="col-md-4">
                    <a href="#">О магазине</a>
                </div>
                <div class="col-md-4">
                    <a href="#">Оплата и доставка</a>
                </div>
                <div class="col-md-4">
                    <a href="#">Контакты</a>
                </div>
            </div>
            <div class="col-md-4 top-header-right">
                <div class="col-md-4">
                    <div class="cart box_1">
                        <a href="#"><i class="fa fa-heart"> Желания</i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart box_1">
                        <a href="{{ url('/checkout') }}">
                            <i class="fa fa-shopping-cart"> Корзина</i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart box_1">
                        @guest
                            @if (Route::has('login'))
                                <ul>
                                    <li class="nav-item">
                                        <a class="popup" href="#"><i class="fa fa-user"> Вход</i></a>
                                        {{--                                    <a class="popup" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                                        {{--                                    <a class="popup" href="../auth/login.blade.php">{{ __('Login') }}</a>--}}
                                        {{--                                    <a class="popup" href="{{'#form_login'}}" data-tagret="#form_login"><i class="fa fa-user"></i> {{ __('Вход') }}</a>--}}
                                    </li>
                                </ul>
                            @endif

                            {{--                        @if (Route::has('register'))--}}
                            {{--                            <ul>--}}
                            {{--                                <li class="nav-item user">--}}
                            {{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                            {{--                        @endif--}}
                        @else
                            <ul>
                                <li class="nav-item dropdown">
                                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       id="navbarDropdown" class="btn nav-link dropdown-toggle" href="{{ route('logout') }}" type="button" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
{{--                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>--}}
{{--                    <div class="clearfix"> </div>--}}
        </div>
    </div>
</div>

<div class="hidden">
    <form method="POST" action="{{ route('login') }}" id="form_login">
        @csrf
        <h4>Вход в личный кабинет</h4>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Логин(Email)">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">

                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="remember">{{ __('Запомнить меня') }}</label>
                </div>
                <button type="submit" class="btn btn_login">{{ __('Войти') }}</button>


        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                @if (Route::has('password.request'))
                    <ul>
                        <li class="nav-item user">
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Забыли пароль?') }}</a>
                        </li>
                    </ul>
                @endif
            </div>
            <div class="col-md-6 offset-md-4">
                @if (Route::has('register'))
                    <ul>
                        <li class="nav-item user">
                            <a class="btn btn-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>

    </form>
</div>

<!--top-header-->
<!--start-logo-->
<div class="logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/') }}"><img style="width: 120px;" src="images/logo-det-dom.png" alt="https://www.klipartz.com/ru/sticker-png-oxxhg"></a>
            </div>
            <div class="col-md-4">

                    <div class="search-bar">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </div>

                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4">
                <div class="logo_info">
                    <h6>+38 (093) 867 50 02</h6><br>
                    <h6>Время работы:</h6><br>
                    <h6>Ежедневно с 8:00 до 22:00</h6><br>
                    <h6>Онлайн заказы: 24/7</h6>
                </div>
            </div>
        </div>
    </div>

</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container-fluid">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="grid"><a href="#">Детская комната</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Аксессуары для детской мебели</h4>
                                        <ul>
                                            <li><a href="#">Аксессуары для детской мебели</a></li>
                                            <li><a href="#">Детская безопастность</a></li>
                                            <li><a href="#">Детские кроватки</a></li>
                                            <li><a href="#">Детские увложнители воздуха</a></li>
                                            <li><a href="#">Доски для ресования</a></li>
                                            <li><a href="#">Игрушки-ночники</a></li>
                                            <li><a href="#">Комоды и пеленаторы</a></li>
                                            <li><a href="#">Манежи</a></li>
                                            <li><a href="#">Мобили</a></li>
                                            <li><a href="#">Мольберты</a></li>
                                            <li><a href="#">Парты</a></li>
                                            <li><a href="#">Столы для творчества</a></li>
                                            <li><a href="#">Шкафы в детскую комнату</a></li>
                                            <li><a href="#">Ящики для игрушек</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Детские игрушки</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Машинки, модели техники и оружие</h4>
                                        <ul>
                                            <li><a href="products.html">Автомобильные треки</a></li>
                                            <li><a href="products.html">Железные дороги и аксессуары</a></li>
                                            <li><a href="products.html">Игрушечное оружие</a></li>
                                            <li><a href="products.html">Игрушечные машинки и техника</a></li>
                                            <li><a href="products.html">Коллекцыонные модельки</a></li>
                                            <li><a href="products.html">Моделирование</a></li>
                                            <li><a href="products.html">Радиоуправляемые игрушки</a></li>
                                            <li><a href="products.html">Детские конструкторы</a></li>
                                            <li><a href="products.html">Игрушки для пляжа, песочницы и ванной</a></li>
                                            <li><a href="products.html">Волшебные палочки</a></li>
                                            <li><a href="products.html">Робототехника</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Мягкие игрушки, фигурки, куклы</h4>
                                        <ul>
                                            <li><a href="products.html">Игровые наборы</a></li>
                                            <li><a href="products.html">Игровые фигурки</a></li>
                                            <li><a href="products.html">Мягкие игрушки</a></li>
                                            <li><a href="products.html">Куклы</a></li>
                                            <li><a href="products.html">Пупсы</a></li>
                                            <li><a href="products.html">Аксессуары для кукол и пупсов</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Развитие и творчество</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Развитие</h4>
                                        <ul>
                                            <li><a href="products.html">Детские компьютеры</a></li>
                                            <li><a href="products.html">Детские музыкальные инструменты</a></li>
                                            <li><a href="products.html">Интерактивные игрушки</a></li>
                                            <li><a href="products.html">Наборы для научных исследований</a></li>
                                            <li><a href="products.html">Пазлы</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Творчество</h4>
                                        <ul>
                                            <li><a href="products.html">Апликации из бумаги</a></li>
                                            <li><a href="products.html">Вышивание</a></li>
                                            <li><a href="products.html">Декупаж и роспись</a></li>
                                            <li><a href="products.html">Изготовление игрушек</a></li>
                                            <li><a href="products.html">Лепка</a></li>
                                            <li><a href="products.html">Мозаики</a></li>
                                            <li><a href="products.html">Наклейки, стикеры и тату</a></li>
                                            <li><a href="products.html">Плетение</a></li>
                                            <li><a href="products.html">Наборы для детского творчества</a></li>
                                            <li><a href="products.html">Рисование</a></li>
                                            <li><a href="products.html">Скрабукинг и кардмейкинг</a></li>
                                            <li><a href="products.html">Шитье вязание</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Творчество в 3D</h4>
                                        <ul>
                                            <li><a href="products.html">3D-апликации</a></li>
                                            <li><a href="products.html">3D-пластик</a></li>
                                            <li><a href="products.html">3D-раскраски</a></li>
                                            <li><a href="products.html">3D-рисование</a></li>
                                            <li><a href="products.html">3D-ручки</a></li>
                                            <li><a href="products.html">Наборы с 3D-гелем</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Для самых маленьких</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Ежедневный уход и здоровье</h4>
                                        <ul>
                                            <li><a href="products.html">Детские весы</a></li>
                                            <li><a href="products.html">Наборы для новорожденных</a></li>
                                            <li><a href="products.html">Принадлежности по уходу</a></li>
                                            <li><a href="products.html">Термометры</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Игрушки для малышей, развлечения</h4>
                                        <ul>
                                            <li><a href="products.html">Игрушки для малышей</a></li>
                                            <li><a href="products.html">Погремушки и грызуны</a></li>
                                            <li><a href="products.html">Развивающие центры, коврики и кресла качалки</a></li>
                                            <li><a href="products.html">Для юных модниц</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Купание и гигиена</h4>
                                        <ul>
                                            <li><a href="products.html">Детские ванночки и аксессуары</a></li>
                                            <li><a href="products.html">Детские горшки, сиденья и подставки</a></li>
                                            <li><a href="products.html">Зубные щетки и пасты</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Питание и кормление</h4>
                                        <ul>
                                            <li><a href="products.html">Бутылочки</a></li>
                                            <li><a href="products.html">Детская посуда</a></li>
                                            <li><a href="products.html">Детские кухонные комбайны</a></li>
                                            <li><a href="products.html">Поильники</a></li>
                                            <li><a href="products.html">Пустышки</a></li>
                                            <li><a href="products.html">Слюнявчики и нагрудники</a></li>
                                            <li><a href="products.html">Соски</a></li>
                                            <li><a href="products.html">Стерилизаторы и подогреватели</a></li>
                                            <li><a href="products.html">Стульчики для кормления</a></li>
                                            <li><a href="products.html">Чехлы термосумки для бутылочек</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Детское питание</h4>
                                        <ul>
                                            <li><a href="products.html">Детские каши</a></li>
                                            <li><a href="products.html">Детские смеси</a></li>
                                            <li><a href="products.html">Детские соки и напитки</a></li>
                                            <li><a href="products.html">Детское печенье и батончики</a></li>
                                            <li><a href="products.html">Детское пюре</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Подгузники и пилинание</h4>
                                        <ul>
                                            <li><a href="products.html">Детские салфетки, платочки и полотенца</a></li>
                                            <li><a href="products.html">Пеленки</a></li>
                                            <li><a href="products.html">Подгузники</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Коляски и автокресла</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Коляски и автокресла</h4>
                                        <ul>
                                            <li><a href="products.html">Детские коляски</a></li>
                                            <li><a href="products.html">Детские автокресла</a></li>
                                            <li><a href="products.html">Детские автоаксессуары</a></li>
                                            <li><a href="products.html">Игрушки для колясок и автокресел</a></li>
                                            <li><a href="products.html">Аксессуары для колясок и автокресел</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Прогулка и активный отдых</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Средства передвижения</h4>
                                        <ul>
                                            <li><a href="products.html">Аксессуары для детского транспорта</a></li>
                                            <li><a href="products.html">Детские велосипеды</a></li>
                                            <li><a href="products.html">Детские роликовые коньки</a></li>
                                            <li><a href="products.html">Детские самокаты</a></li>
                                            <li><a href="products.html">Детские электро и веломобили</a></li>
                                            <li><a href="products.html">Защита</a></li>
                                            <li><a href="products.html">Чудомобили, ходунки, качалки</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Скейтборды для детей</h4>
                                        <ul>
                                            <li><a href="products.html">Лонгборды</a></li>
                                            <li><a href="products.html">Пенни борды</a></li>
                                            <li><a href="products.html">Рипстики</a></li>
                                            <li><a href="products.html">Скейтборды</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Для мам</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Товары для мам</h4>
                                        <ul>
                                            <li><a href="products.html">Молокоотсосы</a></li>
                                            <li><a href="products.html">Наборы в роддом</a></li>
                                            <li><a href="products.html">Слинги, рюкзаки и переноски</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--bottom-header-->

