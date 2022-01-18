@extends('layouts.app')

@section('title')
    Hasil Kunjungan
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
                    <h3 class="fw-bolder m-0">Hasil Kunjungan</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("admin.tks") }}">
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{$kunjungan->tanggal}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Peserta</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{$kunjungan->nama_peserta}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{$kunjungan->jenis_usaha}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kondisi Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{$kunjungan->kondisi_usaha}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Dokumentasi (Foto)</label>
                            <div class="col-lg-8">   
                                @foreach($fotos as $foto)
                                <img src="{{asset($foto)}}" class="rounded mb-7 shadow-lg" style="object-fit: cover" height="400px"  alt="" width="50%">
                                @endforeach
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Dokumentasi (Video)</label>
                            <div class="col-lg-8"> 
                                 @foreach($videos as $video)
                                 @if(file_exists($video))
                                <video controls width="50%" class="rounded shadow-lg">
                                    <source src="{{asset($video)}}" type="video/mp4" />
                                    Browser tidak mendukung tag ini, silahkan upgrade ke versi baru.
                                </video>  
                                  @else
                                <label class="col-lg-4 col-form-label fs-6">{{$video}}</label>
                                @endif 
                                @endforeach
                              
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("result-visit") }}" class="btn btn-secondary btn-active-light-primary me-2">Kembali</a>
                        <a href="{{ route("result-visit.edit", $kunjungan->id) }}" class="btn btn-primary" id="kt_account_profile_details_submit">Edit</a>
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