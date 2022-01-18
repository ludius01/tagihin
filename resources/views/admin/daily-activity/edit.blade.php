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
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("daily-activity.update",$daily->id) }}">
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" class="form-control form-control-lg form-control-solid" name="tanggal" value="{{ $daily->tanggal }}">
                             
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Lokasi</label>
                            <div class="col-lg-8 fv-row">
                                
                                <div class="my-2">
                                    <input type="radio" name="lokasi" class="form-check-input" value="online" required @if($daily->lokasi =='online') checked @endif  /> Online
                                </div>
                                <div class="my-2">
                                    <input type="radio" name="lokasi" class="form-check-input" value="offline" required @if($daily->lokasi =='offline') checked @endif /> Offline
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Aktifitas</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_aktivitas" value="{{$daily->nama_aktivitas}}" class="form-control form-control-lg form-control-solid" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Lama Aktifitas</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="lama_aktivitas" value="{{$daily->lama_aktivitas}}" class="form-control form-control-lg form-control-solid" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tugas</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="tugas"  class="form-control form-control-lg form-control-solid" cols="30" rows="1">{{$daily->tugas}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Materi</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="materi"  class="form-control form-control-lg form-control-solid" cols="30" rows="1">{{$daily->materi}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Keterangan</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="keterangan"  class="form-control form-control-lg form-control-solid" cols="30" rows="10">{{$daily->keterangan}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Uraikan hasil kegiatan</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="hasil_keg"   class="form-control form-control-lg form-control-solid" cols="30" rows="10">{{$daily->hasil_keg}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Foto kegiatan (optional)</label>
                            <div class="col-lg-8 fv-row">
                                @foreach($fotos as $foto)
                                    @if(file_exists($foto))
                                        <img src="{{asset($foto)}}" class="rounded mb-7 shadow-lg" style="object-fit: cover" height="400px"  alt="" width="50%">
                                    @endif
                                @endforeach
                                <input type="file" name="foto_baru[]" class="form-control form-control-lg form-control-solid" multiple/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Presensi (optional)</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select form-select-solid" name="absen[]" data-control="select2" data-placeholder="Select an option" data-hide-search="true" multiple="multiple">
                                     @foreach($absens as $absen)
                                    <option value="{{$absen}}" selected>{{$absen}}</option>
                                    @endforeach
                                     @foreach($tkms as $tkm)
                                    <option value="{{$tkm->nama}}">{{$tkm->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("daily-activity") }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
                        {{--<a href="{{ route("daily-activity") }}" class="btn btn-primary" >Edit</a>--}}
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