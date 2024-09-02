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
 appearance: none;
 /* For some browsers */
}
</style>
@endsection
@section('content')
<div class="row mt-4">
 <div class="col-12">
  <div class="card">
   <!-- Card header -->
   <div class="card-header pb-0">
    <div class="d-lg-flex">
     <div>
      <h5 class="mb-0">Debit Transfer Log</h5>

     </div>
     <div class="ms-auto my-auto mt-lg-0 mt-4">
     </div>
    </div>
   </div>
   <div class="table-responsive">
    <table class="table table-flush" id="users-search">
     <thead class="thead-light">
    <tr>
        <th>Date</th>
        <th>From User</th>
        <th><i class="fas fa-right-left"></i></th>
        <th>To User</th>
        <th>Amount</th>
    </tr>
</thead>
<tbody>
    @foreach($transferLogs as $log)
        <tr>
            <td>{{ $log->created_at->format('Y-m-d') }}</td>
            <td>{{ optional($log->targetUser)->name }}</td>
            {{-- <td class="text-danger">{{ $log->amountFloat }}</td> --}}
              <td>
               <img src="{{ asset('admin_app/assets/img/arrow.png')}}"  class="img-thumbnail" width="10" height="10" alt="arrow">
              </td>
            <td>{{ Auth::user()->name }}</td>
            <td class="text-danger font-weight-bold">{{ abs($log->amountFloat) }}</td>
        </tr>
    @endforeach
</tbody>
    </table>
   </div>
  </div>
 </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('admin_app/assets/js/plugins/datatables.js') }}"></script>
{{-- <script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: true
    });
  </script> --}}
<script>
if (document.getElementById('users-search')) {
 const dataTableSearch = new simpleDatatables.DataTable("#users-search", {
  searchable: true,
  fixedHeight: false,
  perPage: 7
 });

 document.querySelectorAll(".export").forEach(function(el) {
  el.addEventListener("click", function(e) {
   var type = el.dataset.type;

   var data = {
    type: type,
    filename: "material-" + type,
   };

   if (type === "csv") {
    data.columnDelimiter = "|";
   }

   dataTableSearch.export(data);
  });
 });
};
</script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
 return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection
