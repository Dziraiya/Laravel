@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление новости</h1>
        </div>
        @if ( $errors->any() )
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="row">
            <div class="col-12 ">
                <form method="post" action="{{ route('admin.news.store') }}">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="newsName">Название новости</label>
                                <input type="text" class="form-control" id="newsName" name="newsName" value="{{ old('newsName') }}">
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="form-group">
                                <label for="category">Категории</label>
                                <select class="custom-select" id="category" name="category_id">
                                    <option selected>Выберите категорию</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newsText">Текст новости</label>
                        <textarea type="text" class="form-control" id="newsText" rows="12" name="newsText">{{ old('newsText') }}</textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="publishCheck">
                        <label class="form-check-label" for="publishCheck">Опубликовать сейчас</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Опубликовать</button>
                </form>
            </div>
        </div>
    </div>

@endsection
