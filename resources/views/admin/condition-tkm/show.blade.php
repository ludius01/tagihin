@extends('layouts.app')

@section('title')
    Kondisi TKM (bulanan)
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
                    <h3 class="fw-bolder m-0"> Kondisi TKM (bulanan)</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div >
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("admin.tks") }}">
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Nama Peserta</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->nama_peserta}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Nama Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->nama_usaha}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Jenis Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->jenis_usaha}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Lama Usaha (tahun)</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->lama_usaha}} (tahun)</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Jumlah Produksi / bulan</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->jml_produksi}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Omzet/bulan</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->omzet}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Media Promosi</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->media_promo}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Area Pemasaran</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->area_pemasaran}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Jumlah Pekerja</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->jml_pekerja}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Bidang Permasalahan Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->bidang_permasalahan}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Uraian Masalah</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->uraian_masalah}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Upaya Pemecahan masalah</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$kondisi->pemecahan_masalah}}</label>
                            </div>
                        </div>
                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("condition-tkm") }}" class="btn btn-secondary btn-active-light-primary me-2">Kembali</a>
                        <a href="{{ route("condition-tkm.edit",$kondisi->id) }}" class="btn btn-primary" id="kt_account_profile_details_submit">Edit</a>
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