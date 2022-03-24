@extends( 'home' )

@section('container-news')
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @forelse ( $newsList as $key => $news )
                <div class="col-md-4">
                    <h2>{{ $news[0] .' id = '. $key }}</h2>
                    <p>{{ $news[1] }}</p>
                    <p><a class="btn btn-secondary" href='{{ route('news.show', ['id' => $key]) }}' role="button">View details »</a></p>
                </div>
            @empty
                <h2>No news</h2>
            @endforelse
        </div>
    </div> <!-- /container -->

@endsection

