@extends('layouts.superadmin.index')

@section('title')
    Tambah Paket
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="mb-5">
            <a class="btn btn-info" href="{{route('paket.index')}}">Kembali</a>
        </div>
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Tambah Paket</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="{{route('paket.update',$paket->id)}}" method="post">
                    {{csrf_field()}} 
                    {{ method_field('PUT') }}
                    <div class="card-body border-top p-9">
                      
                        <div class="row mb-6">
                                <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">Kode Paket</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kode_paket" class="form-control form-control-lg form-control-solid" value="{{$paket->kode_paket}}" readonly required/>
                                </div>
                            </div>
                        <div class="row mb-6">
                            <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">Nama Paket</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_paket" class="form-control form-control-lg form-control-solid" value="{{$paket->nama_paket}}" required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tipe Paket</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="tipe_paket" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih tipe paket-- </option>
                                   <option value='1' @if($paket->tipe_paket == 1) selected @endif>Harian</option>
                                   <option value="2" @if($paket->tipe_paket == 2) selected @endif> Mingguan </option>
                                   <option value="3" @if($paket->tipe_paket == 3) selected @endif> Bulanan </option>
                                </select>     
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="username" class="form-control form-control-lg form-control-solid" value="{{$paket->username}}" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label id="password" class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="password" class="form-control form-control-lg form-control-solid" value="{{$paket->password}}" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label id="nik" class="col-lg-4 col-form-label required fw-bold fs-6">Harga</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="harga" class="form-control form-control-lg form-control-solid" value="{{$paket->harga}}" required/>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Deskripsi</label>
                            <div class="col-lg-8 fv-row">
                                 <textarea name="deskripsi" id="" cols="30" rows="4"  class="form-control form-control-lg form-control-solid" required>{{$paket->deskripsi}}</textarea>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="status" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih status-- </option>
                                   <option value='1' @if($paket->status == 1) selected @endif>Aktif</option>
                                   <option value="2" @if($paket->status == 2) selected @endif> Tidak Aktif</option>
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
