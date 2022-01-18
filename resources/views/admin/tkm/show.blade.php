@extends('layouts.app')

@section('title')
    Tambah TKM
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
                    <h3 class="fw-bolder m-0">View TKM</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("admin.tks") }}">
                    <div class="card-body border-top p-9">

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lengkap</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->nama}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->nik}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Usia</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->usia}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Provinsi</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->prov->nama_provinsi}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kab/Kota</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->kab->nama_kab}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor HP</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->no_hp}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Ide Pengembangan Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{$tkm->ide_p_usaha}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Bantuan usaha yang diajukan</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Rp. {{ number_format($tkm->b_usaha,0,',','.') }}</label>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("tkm") }}" class="btn btn-secondary btn-active-light-primary me-2">Kembali</a>
                        <a href="{{ route('tkm.edit', $tkm->id) }}" class="btn btn-primary" id="kt_account_profile_details_submit">Edit</a>
                        {{-- <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button> --}}
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