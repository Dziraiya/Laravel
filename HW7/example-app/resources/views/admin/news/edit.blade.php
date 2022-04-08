@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление новости</h1>
        </div>
        @if ( $errors->any() )
            @foreach ( $errors->all() as $error )
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="row">
            <div class="col-12 ">
                <form method="post" action="{{ route('admin.news.update', ['news'=> $news]) }}">
                    @csrf
                    @method('PUT')
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="form-group">

                                <label for="title">Название новости</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="form-group">
                                <label for="category">Категории</label>

                                <select class="custom-select" id="category" name="category_id">
                                    <option selected>Выберите категорию</option>
                                    @foreach ( $categories as $category )
                                        <option value="{{ $category->id }}"
                                                @if ( $category->id === $news->category_id ) selected @endif>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Текст новости</label>
                        <textarea type="text" class="form-control" id="text" rows="12" name="text">{{ $news->text }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
