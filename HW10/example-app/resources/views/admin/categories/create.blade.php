@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление категории</h1>
        </div>
        @if ( $errors->any() )
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="row">
            <div class="col-12 ">
                <form method="post" action="{{ route('admin.categories.store') }}">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Название категории</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea type="text" class="form-control" id="description" rows="6" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_visible" class="form-check-input" id="publishCheck" value="1" @if ( boolval(old('is_visible')) === TRUE ) checked @endif>
                        <label class="form-check-label" for="publishCheck">Отображать</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Опубликовать</button>
                </form>
            </div>
        </div>
    </div>

@endsection
