@extends( 'home' )

@section('container-news')
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @forelse ( $newsList as $key => $news )
                <div class="col-md-4">
                    <h2>{{ $news[0] .' id = '. $key }}</h2>
                    {{--<p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>--}}
                    <p>{{ $news[1] }}</p>
                    <p><a class="btn btn-secondary" href='{{ route('news.show', ['id' => $key]) }}' role="button">View details »</a></p>
                </div>
            @empty
                <h2>No news</h2>
            @endforelse
        </div>
    </div> <!-- /container -->

@endsection

