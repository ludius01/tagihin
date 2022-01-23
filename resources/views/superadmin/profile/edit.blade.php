@extends('layouts.superadmin.index')

@section('title')
    Edit Profile
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Navbar-->

        <!--end::Navbar-->
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
              @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit Profile</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form"  action="{{route('suprofile.update' , $user->id)}}" enctype="multipart/form-data"   method="POST" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="username" class="form-control form-control-lg form-control-solid" value="{{ $user->username}}" required/>  
                                {{--<label class="col-lg-4 col-form-label required fw-bold fs-6">{{ $user->username}}</label>--}}
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">No HP</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="No_Hp" class="form-control form-control-lg form-control-solid" value="{{ $user->username}}" required/>  
                                {{--<label class="col-lg-4 col-form-label required fw-bold fs-6">{{ $user->username}}</label>--}}
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid" value="{{ $user->username}}" required/>  
                                {{--<label class="col-lg-4 col-form-label required fw-bold fs-6">]</label>--}}
                            </div>
                        </div>
                        {{--  end: Input Group  --}}
                        {{--  begin: Input Group  --}}
                        <div class="row mb-6">
                            <label id="password" class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" required/>
                            </div>
                        </div>
                       
                       

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ url("superadmin-profile", ["id" => $user->id]) }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
    </div>
    <!--end::Container-->
</div>
@endsection
{{-- @push('scripts')
<script>
$(function () {
    $('#province').on('change', function () {
        axios.post('{{ route('kabupaten.show') }}', {id: $(this).val()})
            .then(function (response) {
                $('#id_kab').empty();

                $.each(response.data, function (id, nama_kab) {
                    $('#id_kab').append(new Option(nama_kab, id))
                })
            });
    });
 
});
</script>
@endpush --}}