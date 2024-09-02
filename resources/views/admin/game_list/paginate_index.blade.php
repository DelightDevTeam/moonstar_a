@extends('admin_layouts.app')

@section('styles')
<style>
.transparent-btn {
    background: none;
    border: none;
    padding: 0;
    outline: none;
    cursor: pointer;
    box-shadow: none;
    appearance: none; /* For some browsers */
}
</style>
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

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
                                    All Total Running Games on Site: {{ count($games) }}
                                </p>
                            </span>
                        </h5>
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            {{-- <a href="" class="btn bg-gradient-primary btn-sm mb-0 py-2">+&nbsp; Create New User</a> --}}
                            {{-- <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                @can('admin_access')
                <table class="table table-flush" id="users-search">
                    <thead>
                        <tr>
                            <th>#</th>
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
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="{{ asset('admin_app/assets/js/jquery.min.js')}}"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#users-search').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.gameLists.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
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
