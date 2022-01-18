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
                <form id="kt_account_profile_details_form" class="form" method="POST" enctype="multipart/form-data" action="{{ route('kelola-lpj.store') }}">
                    
                    <div class="card-body border-top p-9">
                        <input type="text" hidden value='{{ Auth::user()->id }}' name='id_user'>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama File</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama_dokumen" class="form-control form-control-lg form-control-solid"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')"/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Dokumen (pdf)</label>
                            <div class="col-lg-8">                                
                                <input type="file" name="dokumen" class="form-control form-control-lg form-control-solid" required oninvalid="this.setCustomValidity('data tidak boleh kosong')"/>
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route('kelola-lpj.index') }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
                        {{--<a href="{{ route("result-visit") }}" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</a>--}}
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