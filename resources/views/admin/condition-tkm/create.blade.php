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
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("condition-tkm.store") }}">
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <input name="tanggal" readonly class="form-control form-control-lg form-control-solid" value="{{ date("d-F-Y") }}">
                            </div>
                        </div>
                        <input type="text" name="id_user" value="{{Auth::user()->id}}" hidden>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Peserta</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="nama_peserta" data-control="select2" data-placeholder="Select an option" required>
                                    <option></option>
                                    @foreach($tkms as $tkm)
                                    <option value="{{$tkm->nama}}">{{$tkm->nama}}</option>
                                    @endforeach
                                </select>                                
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_usaha" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="jenis_usaha" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Lama Usaha (tahun)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="lama_usaha" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jumlah Produksi / bulan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="jml_produksi" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Omzet/bulan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="omzet" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Media Promosi</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="media_promo" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Area Pemasaran</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="area_pemasaran" class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jumlah Pekerja</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="jml_pekerja"  class="form-control form-control-lg form-control-solid" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Bidang Permasalahan Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="bidang_permasalahan" class="form-control form-control-lg form-control-solid" id="" cols="30" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Uraian Masalah</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="uraian_masalah" class="form-control form-control-lg form-control-solid" id="" cols="30" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Upaya Pemecahan masalah</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="pemecahan_masalah" class="form-control form-control-lg form-control-solid" id="" cols="30" rows="3" required></textarea>
                            </div>
                        </div>
                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("condition-tkm") }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
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