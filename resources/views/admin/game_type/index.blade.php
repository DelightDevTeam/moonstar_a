@extends('admin_layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">Game Type List
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
                            <th class="bg-warning text-white">Image</th>
                            <th class="bg-info text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gameTypes as $gameType)
                        @foreach($gameType->products as $product)
                        <tr>
                            <td>{{ $gameType->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td><img src="{{$product->getImgUrlAttribute()}}" alt="" width="100px"></td>
                            <td>
                                <a href="{{route('admin.gametypes.edit',[$gameType->id,$product->id])}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
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
@endsection