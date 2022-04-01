@extends( 'global.home' )

@section( 'title', 'Новости' )

@section( 'container-news' )
    <div class="container ">
        <!-- Example row of columns -->
        <div class="row">
            @forelse ( $news as $newsItem )
                <div class="col-md-4">
                    <h2>{{ $newsItem->title }}</h2>
                    <p>{{ $newsItem->text }}</p>
                    <p><a class="btn btn-secondary" href='{{ route('news.show', ['id' => $newsItem->id]) }}' role="button">View details »</a></p>
                </div>
            @empty
                <h2>No news</h2>
            @endforelse
        </div>
    </div> <!-- /container -->
@endsection
