@forelse ( $newsList as $key => $news )
    {{ $news }} <a href='{{ route('news.show', ['id' => $key]) }}'>Display text</a><br>
@empty
    <h2>No news</h2>
@endforelse
