@extends('layouts.superadmin.index')

@section('title')
    Tambah TKS
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="mb-5">
            <a class="btn btn-info" href="{{route('client.index')}}">Kembali</a>
        </div>
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit Client</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="{{route('client.update',$users->id)}}" method="POST">
                    {{csrf_field()}} 
                    {{ method_field('PUT') }}
                    <div class="card-body border-top p-9">
                      
                        <div class="row mb-6">
                            <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="username" class="form-control form-control-lg form-control-solid" value="{{$users->username}}" required/>
                            </div>
                        </div>
                      
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email" class="form-control form-control-lg form-control-solid" value="{{$users->email}}" required/>
                            </div>
                        </div>
                       
                        <div class="row mb-6">
                            <label id="nik" class="col-lg-4 col-form-label required fw-bold fs-6">No HP</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="No_Hp" class="form-control form-control-lg form-control-solid" value="{{$users->No_Hp}}" required/>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid" value="{{$users->alamat}}" required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="status" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih status-- </option>
                                    
                                   <option value='1' @if($users->status == 1) selected @endif >bayar</option>
                                   <option value="2"  @if($users->status == 2) selected @endif> belum bayar</option>
                                </select>     
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Akses</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="is_permission" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih akses-- </option>
                                   <option value='1'  @if($users->id_permission == 1) selected @endif>Admin</option>
                                   <option value="2"  @if($users->is_permission == 2) selected @endif> Client</option>
                                </select>     
                            </div>
                        </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
