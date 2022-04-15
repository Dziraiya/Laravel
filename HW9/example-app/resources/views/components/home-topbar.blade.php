<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Geekbrains</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="{{ route('home') }}">Главная</a>
        <a class="p-2 text-white" href="{{ route('news') }}">Новости</a>
        <a class="p-2 text-white" href="{{ route('review') }}">Отзывы</a>
        <a class="p-2 text-white" href="{{ route('about') }}">О нас</a>
    </nav>
    <nav class="my-2 my-md-0 mr-md-3">

        {{--<a class="btn btn-success" href="/admin">Вход</a>--}}


        @guest
            @if ( Route::has('login') )

                <a class="btn btn-success" href="{{ route('login') }}">{{ __('Вход') }}</a>

            @endif

            @if ( Route::has('register') )

                <a class="btn btn-secondary" href="{{ route('register') }}">{{ __('Регистрация') }}</a>

            @endif
        @else


            <a id="navbarDropdown" class="btn btn-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Выход') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>


        @endguest

    </nav>


</div>
