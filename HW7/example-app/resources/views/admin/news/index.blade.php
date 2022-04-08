@extends( 'layouts.admin' )

@section( 'content' )
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список новостей (Всего: {{ $count }} новостей)</h1>
            <a href="{{ route('admin.news.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Добавить новость</a>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            @if ( session()->has('success') )
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Дата создания</th>
                            <th>Действие</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ( $news as $newsItem )
                            <tr>
                                <td>{{ $newsItem->id }}</td>
                                <td>{{ $newsItem->title }}</td>
                                <td>{{ $newsItem->created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href={{ route('admin.news.edit', $newsItem->id) }}>
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form class="d-inline" action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push( 'js-datatables' )
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endpush


