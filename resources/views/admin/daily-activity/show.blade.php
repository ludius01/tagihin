@extends('layouts.app')

@section('title')
    Aktifitas Harian dan absen TKS
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
                    <h3 class="fw-bolder m-0">Aktifitas Harian dan absen TKS</h3>
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
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->tanggal}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Lokasi</label>
                            <div class="col-lg-8 fv-row">
                                <div class="my-2">
                                    <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->lokasi}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Nama Aktifitas</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->nama_aktivitas}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Lama Aktifitas</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->lama_aktivitas}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tugas</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->tugas}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Materi</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->materi}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Keterangan</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->keterangan}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Uraikan hasil kegiatan</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label text-muted fw-bold fs-6">{{$daily->hasil_keg}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Foto kegiatan (optional)</label>
                            <div class="col-lg-8 fv-row">
                                <div>
                                    @foreach($fotos as $foto)
                                     @if(file_exists($foto))
                                    <div class="">
                                        <img src="{{asset($foto)}}" class="rounded mb-7 shadow-lg" style="object-fit: cover" height="400px"  alt="" width="50%">
                                    </div>
                                     @else
                                        <label class="col-lg-4 col-form-label fs-6">{{$foto}}</label>
                                     @endif 
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Presensi</label>
                            <div class="col-lg-8 fv-row">
                                @foreach($absens as $absen)
                                    <label class="col-lg-12 col-form-label text-muted fs-6">{{$absen}}</label>
                                 @endforeach
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("daily-activity") }}" class="btn btn-secondary btn-active-light-primary me-2">Kembali</a>
                        <a href="{{ route("daily-activity.edit", $daily->id) }}" class="btn btn-primary" >Edit</a>
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