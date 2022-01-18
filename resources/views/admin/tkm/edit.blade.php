@extends('layouts.app')

@section('title')
    Edit TKM
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
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit TKM</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("tkm.update",$tkm->id) }}">
                    <div class="card-body border-top p-9">

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lengkap</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama" class="form-control form-control-lg form-control-solid" placeholder="" required value="{{$tkm->nama}}" /> 
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text"  maxlength="16" onkeypress="return hanyaAngka(event)" name="nik" class="form-control form-control-lg form-control-solid" placeholder="" required value="{{$tkm->nik}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Usia (Optional)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number"  maxlength="3" name="usia" class="form-control form-control-lg form-control-solid" placeholder="" value="{{$tkm->usia}}"/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Provinsi</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" data-control="select2" name='id_prov' data-placeholder="Select an option">
                                    @foreach($provinsis as $provinsi)    
                                    <option value="{{$provinsi->id}}" {{ $provinsi->id == $tkm->prov->id ? 'selected' : '' }}>{{$provinsi->nama_provinsi}}</option>
                                    @endforeach
                                </select>     
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kab/Kota</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name='id_kab' data-control="select2" data-placeholder="Select an option">
                                    @foreach($kabupatens as $kabupaten)    
                                    <option value="{{$kabupaten->id}}" {{ $kabupaten->id == $tkm->kab->id ? 'selected' : '' }}>{{$kabupaten->nama_kab}}</option>
                                    @endforeach
                                </select>     
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor HP</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text"  maxlength="14" onkeypress="return hanyaAngka(event)" name="no_hp" class="form-control form-control-lg form-control-solid" placeholder="" required  value="{{$tkm->no_hp}}"/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Ide Pengembangan Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="ide_p_usaha" class="form-control form-control-lg form-control-solid" placeholder="" required value="{{$tkm->ide_p_usaha}}"/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Bantuan usaha yang diajukan (Rp)</label>
                            <div class="col-lg-8 fv-row">
                             <input type="number" name="b_usaha" class="form-control form-control-lg form-control-solid" placeholder="" required value="{{ $tkm->b_usaha }}"/>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("tkm") }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
                        <!-- <input type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" value="edit" > -->
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