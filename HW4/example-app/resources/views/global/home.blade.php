@extends( 'layouts.home' )

@section( 'title', 'Главная страница' )

<main role="main">
    @section( 'main-content' )

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

    @section( 'container-news' )
        <div class="container">
            <div class="row">
                @foreach ( $newsList as $key => $news )
                    @if ( $loop->last )
                        <div class="col-md-12">
                            <h2>{{ $news[0] .' id = '. $key }}</h2>
                            {{--<p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>--}}
                            <p>{{ $news[1] }}</p>
                            <p><a class="btn btn-secondary" href='{{ route('news.show', ['id' => $key]) }}' role="button">View details »</a></p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endsection
</main>
