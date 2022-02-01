@extends('layouts.superadmin.index')

@section('title')
    Tambah Invoice
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="mb-5">
            <a class="btn btn-info" href="{{route('invoice.index')}}">Kembali</a>
        </div>
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Tambah Invoice</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="{{route('invoice.store')}}" method="post">
                    {{csrf_field()}} 
                    {{ method_field('post') }}
                    <div class="card-body border-top p-9">
                      
                        <div class="row mb-6">
                            <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">No Invoice Tagihan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="no_inv_tagihan" class="form-control form-control-lg form-control-solid" value="{{$kode}}" readonly required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label id="password" class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Tagihan</label>
                            <div class="col-lg-3 fv-row">
                                <input type="date" name="tgl_tagihan" class="form-control form-control-lg form-control-solid" placeholder="Password" required/>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pelanggan</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="id_pelanggan" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih Pelanggan-- </option>
                                    @foreach($pelanggans as $pelanggan)
                                   <option value='{{$pelanggan->id}}'>{{$pelanggan->username}}</option>
                                   @endforeach
                                </select>     
                            </div>
                        </div>
                       
                        <div class="row mb-6">
                            <label id="nik" class="col-lg-4 col-form-label required fw-bold fs-6">Alat</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="id_alat" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih alat-- </option>
                                   @foreach($alats as $alat)
                                    <option value='{{$alat->id}}'>{{$alat->nama_alat}}</option>
                                   @endforeach
                                </select>     
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Paket</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="id_paket" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih paket-- </option>
                                    @foreach($pakets as $paket)
                                   <option value='{{$paket->id}}'>{{$paket->nama_paket}}</option>
                                   @endforeach
                                </select>     
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jumlah Tagihan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="jumlah_tagihan" class="form-control form-control-lg form-control-solid" placeholder="Jumlah Tagihan" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Unik Kode</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="kode_unik" class="form-control form-control-lg form-control-solid" value="{{$unik_kode}}" readonly required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="status" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih status-- </option>
                                   <option value='1'>sudah bayar</option>
                                   <option value="2"> belum bayar</option>
                                </select>     
                            </div>
                        </div>
                        
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
