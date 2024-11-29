@extends('admin_layouts.app')
@section('content')

<div class="container-fluid my-3 py-3">
    <div class="row mb-5">
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="card mt-4" id="password">
                <div class="card-header">
                    <h5>Edit Information</h5>
                </div>
                <div class="card-body pt-0">
                    <form role="form" method="POST" class="text-start" action="{{ route('admin.agent.update',$user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-outline my-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                        <div class="input-group input-group-outline my-4">
                            <label class="form-label">ReferralCode</label>
                            <input type="text" class="form-control" name="name" value="{{$user->referral_code}}" readonly>
                        </div>
                        <div class="input-group input-group-outline my-4">
                            <label class="form-label">Phone No</label>
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        </div>
                        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0" type="submit">Update</button>
                    </form>
                </div>
            </div>


        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="card mt-4" id="password">
                <div class="card-header">
                    <h5>Change Password</h5>
                </div>
                <div class="card-body pt-0">
                <form action="{{ route('admin.profile.updatePassword',$user->id) }}" method="POST">
                @csrf
                    <div class="input-group input-group-outline my-4">
                        <label class="form-label">New password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @error('password')
                        <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                    <div class="input-group input-group-outline">
                        <label class="form-label">Confirm New password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0" type="submit">Update password</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    @endsection
    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var errorMessage =  @json(session('error'));
        var successMessage =  @json(session('success'));
        console.log(successMessage);
    @if(session()->has('success'))
    Swal.fire({
      icon: 'success',
      title: successMessage,
      text: '{{ session('
      SuccessRequest ') }}',
      background: 'hsl(230, 40%, 10%)',
      timer: 3000,
      showConfirmButton: false
    });
    @elseif(session()->has('error'))
    Swal.fire({
      icon: 'error',
      title: '',
      text: errorMessage,
      background: 'hsl(230, 40%, 10%)',
      timer: 3000,
      showConfirmButton: false
    });
    @endif
  });

    </script>
    @endsection
