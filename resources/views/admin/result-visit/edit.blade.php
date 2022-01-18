@extends('layouts.app')

@section('title')
    Hasil Kunjungan
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Navbar-->
  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route("result-visit.update",$kunjungan->id) }}">
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="tanggal" class="form-control form-control-lg form-control-solid"  required value="{{$kunjungan->tanggal}}" />
                           </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Peserta</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" data-control="select2" name="nama_peserta" data-placeholder="Pilih Peserta">
                                  
                                    @foreach($tkms as $tkm)
                                    <option value="{{$tkm->nama}}" {{ $kunjungan->nama_peserta == $tkm->nama ? 'selected' : '' }}>{{$tkm->nama}}</option>
                                   @endforeach
                                </select>                                
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="jenis_usaha" class="form-control form-control-lg form-control-solid"  required value="{{$kunjungan->jenis_usaha}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kondisi Usaha</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="kondisi_usaha" class="form-control form-control-lg form-control-solid" required value="{{$kunjungan->kondisi_usaha}}" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Dokumentasi (Foto)</label>
                            
                            <div class="col-lg-8">             
                                 @foreach($fotos as $foto)
                                    @if(file_exists($foto))
                                        <img src="{{asset($foto)}}" class="rounded mb-7 shadow-lg" style="object-fit: cover" height="400px"  alt="" width="50%">
                                    @endif
                                @endforeach
                                <input type="file" name="foto_baru[]" class="form-control form-control-lg form-control-solid" multiple/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Dokumentasi (Video/optional)</label>
                              
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
                                <input type="file" name="video_baru[]" class="form-control form-control-lg form-control-solid" multiple/>
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("result-visit") }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
                       {{-- <a href="{{ route("result-visit.update",$kunjungan->id) }}" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</a> --}}
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