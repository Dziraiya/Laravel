<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Панель управления</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Интерфейс
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMainView"
           aria-expanded="true" aria-controls="collapseMainView">
            <i class="fas fa-fw fa-home"></i>
            <span>Главная страница</span>
        </a>
        <div id="collapseMainView" class="collapse" aria-labelledby="headingMainView" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Компоненты:</h6>
                <a class="collapse-item" href="buttons.html">Кнопки</a>
                <a class="collapse-item" href="cards.html">Блоки</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Компоненты</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Компоненты:</h6>
                <a class="collapse-item" href="buttons.html">Кнопки</a>
                <a class="collapse-item" href="cards.html">Блоки</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Новости
    </div>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
           aria-expanded="true" aria-controls="collapseNews">
            <i class="fas fa-fw fa-rss"></i>
            <span>Управление</span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{--<h6 class="collapse-header">Компоненты:</h6>--}}
                <a class="collapse-item" href="{{ route('admin.news.create') }}">Создать новость</a>
                <a class="collapse-item" href="{{ route('admin.news.index') }}">Все новости</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
           aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-list"></i>
            <span>Категории</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{--<h6 class="collapse-header">Компоненты:</h6>--}}
                <a class="collapse-item" href="{{ route('admin.categories.create') }}">Создать категорию</a>
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">Все категории</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Утилиты</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Утилиты:</h6>
                <a class="collapse-item" href="utilities-color.html">Цвета</a>
                <a class="collapse-item" href="utilities-border.html">Обводка</a>
                <a class="collapse-item" href="utilities-animation.html">Анимация</a>
                <a class="collapse-item" href="utilities-other.html">Разное</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Дополнения
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Страницы</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Экраны входа:</h6>
                <a class="collapse-item" href="login.html">Вход</a>
                <a class="collapse-item" href="register.html">Регистрация</a>
                <a class="collapse-item" href="forgot-password.html">Восстановлене пароля</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Остальные страницы:</h6>
                <a class="collapse-item" href="404.html">Страница 404</a>
                <a class="collapse-item" href="blank.html">Пустая страница</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Диаграммы</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tables.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Таблицы</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
