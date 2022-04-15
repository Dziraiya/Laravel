@extends( 'layouts.home' )

@section( 'container-news' )
    <h2>{{ $news->title }} </h2>
    <p>{!! $news->text !!}</p>
@endsection

