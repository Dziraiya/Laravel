@extends('layouts.home')

@section('title', 'Отзывы')


@section('main-content')
    <h1>Форма добавления отзыва</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Ведите email" class="form-control mb-3">
        <input type="text" name="subject" id="subject" placeholder="Ведите отзыв" class="form-control mb-3">
        <textarea name="message" id="message" placeholder="Ведите сообщение" class="form-control mb-3"></textarea>
        <button type="submit" class="btn btn-success">Отправить</button>

        <h1>Все отзывы</h1>
        @foreach ($reviews as $element)
            <div class="alert-warning alert">
                <h3>{{ $element->subject }}</h3>
                <b>{{ $element->email }}</b>
                <p>{{ $element->message }}</p>

            </div>
        @endforeach
    </form>
@endsection
