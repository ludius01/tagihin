@extends('layouts.superadmin.index')

@section('title')
    Ubah Alat
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="mb-5">
            <a class="btn btn-info" href="{{route('alat.index')}}">Kembali</a>
        </div>
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit Data Alat</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="{{route('alat.update',$alat->id)}}" method="POST">
                    {{csrf_field()}} 
                    {{ method_field('PUT') }}
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">Nama Alat</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_alat" class="form-control form-control-lg form-control-solid" value="{{$alat->nama_alat}}" required/>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Deskripsi</label>
                            <div class="col-lg-8 fv-row">
                                 <textarea name="deskripsi" id="" cols="30" rows="4"  class="form-control form-control-lg form-control-solid" required>{{$alat->deskripsi}}</textarea>
                            </div>
                        </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
        <!--end::Basic info-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection
