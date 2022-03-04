@extends( 'layouts.home' )

@section( 'title' )
    Главная страница
@endsection

@section( 'main-content' )
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron bg-warning">
            <div class="container ">
                <h1 class="display-3">Главная страница!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
            </div>
        </div>

        @yield( 'container-news' )

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
        </div> <!-- /container -->

    </main>
@endsection
