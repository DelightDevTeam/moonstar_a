@extends('admin_layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">Game List Dashboards
                            <span>
                                <p>
                                    All Total Running Games on Site: {{ $games }}
                                </p>
                            </span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                @can('admin_access')
                <table class="table table-flush" id="users-search">
                    <thead>
                        <tr>
                            <th class="bg-success text-white">Game Type</th>
                            <th class="bg-danger text-white">Product</th>
                            <th class="bg-info text-white">Game Name</th>
                            <th class="bg-warning text-white">Image</th>
                            <th class="bg-success text-white">Status</th>
                            <th class="bg-info text-white">Hot Status</th>
                            <th class="bg-warning text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('admin_app/assets/js/jquery.min.js')}}"></script>
<!-- DataTables JS -->
<script src="{{asset('admin_app/assets/js/jquery.datatable.min.js')}}"></script>
<script src="{{asset('admin_app/assets/js/datatable.bootstarp.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('#users-search').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.gameLists.index') }}",
        columns: [
            {data: 'game_type', name: 'gameType.name'},
            {data: 'product', name: 'product.name'},
            {data: 'name', name: 'name'},
            {data: 'image_url', name: 'image_url', render: function(data, type, full, meta) {
                return '<img src="' + data + '" width="100px">';
            }},
            {data: 'status', name: 'status'},
            {data: 'hot_status', name: 'hot_status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        language: {
            paginate: {
                next: '<i class="fas fa-angle-right"></i>', // or '→'
                previous: '<i class="fas fa-angle-left"></i>' // or '←'
            }
        },
        pageLength: 7, // Adjust this to your preference
    });
});
</script>


@endsection
