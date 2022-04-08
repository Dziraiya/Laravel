@extends( 'layouts.home' )

@section('title', 'Главная страница')

<main role="main">
    @section('main-content')
        @switch( Request::is() )
            @case( '' )
            <x-home-jumbotron text="Главная"/>
            @break

            @case( 'news' )
            <x-home-jumbotron text="Новости"/>
            @break

            @case( 'about' )
            <x-home-jumbotron text="О нас"/>
            @break

            @default
            Default case...
        @endswitch

    @endsection

    @section('container-news')
        <div class="container">
            <div class="row">
                @foreach ($news as $newsItem)
                    @if ($loop->last)
                        <div class="col-md-12">
                            <h2>{{ $newsItem->title }}</h2>
                            <h4>Категория: {{ $newsItem->category->title }}</h4>
                            <p>{!! $newsItem->text !!}</p>
                            <p><a class="btn btn-secondary" href='{{ route('news.show', ['id' => $newsItem->id]) }}' role="button">View details »</a></p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endsection


</main>
