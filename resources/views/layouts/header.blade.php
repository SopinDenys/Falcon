<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-2 top-header-left">
                <div class="cart box_1">
                    <a href="{{ url('/checkout') }}">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="images/cart-1.png" alt="" />
                    </a>

                        <!-- Authentication Links -->

                    @guest
                        @if (Route::has('login'))
                            <ul>
                                <li class="nav-item">
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                                    <a class="popup nav-link" href="{{'#form_login'}}" data-tagret="#form_login"><i class="fa fa-user"></i> {{ __('Войдите в личный кабинет') }}</a>
                                </li>
                            </ul>
                        @endif

                        @if (Route::has('register'))
                            <ul>
                                <li class="nav-item user">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            </ul>
                        @endif
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

                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>



        </div>
    </div>
</div>
<script>
    $("#form_login").submit(function (e){
        $.ajax({
            type: "POST",
            url : "{{ route('login') }}",
            data: $(this).serialize()
        }).done(function (){
            alert('удачный вход в учетку')
            setTimeout(function (){
                $.magnificPopup.close();
            },500);
        });
        return false;
    });
</script>
