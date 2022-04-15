<!DOCTYPE html>
<html lang="ru">

<x-home-header/>


<script src="{{ asset('js/app.js') }}" defer></script>

<body class="bg-dark text-white">
    <x-home-topbar/>
    <div class="container ">
        <div class="row ">

            <div class=" col-12 mt-5">
                @yield('main-content')
                @yield('container-news')
            </div>
        </div>
    </div>

    <x-home-footer/>

</body>

</html>
