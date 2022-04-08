@extends( 'layouts.admin' )

@section( 'content' )
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">

            <x-admin-earnings/>
        </div>

        <!-- Content Row -->
        <div class="row">
            <x-admin-charts/>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
                <!-- Project Card Example -->
                <x-admin-sample-cards/>

                <!-- Color System -->
                <x-admin-color-system/>
            </div>

            <div class="col-lg-6 mb-4">
                <!-- Illustrations -->
                <x-admin-illustrations/>

                <!-- Approach -->
                <x-admin-approach/>
            </div>
        </div>

    </div>
@endsection

@push( 'js-charts' )
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
@endpush
