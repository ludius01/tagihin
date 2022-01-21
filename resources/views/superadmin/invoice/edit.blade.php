@extends('layouts.superadmin.index')

@section('title')
    Ubah Invoice
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
                    <h3 class="fw-bolder m-0">Ubah Invoice</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="{{route('invoice.update',$tagihan->id)}}" method="post">
                    {{csrf_field()}} 
                    {{ method_field('PUT') }}
                    <div class="card-body border-top p-9">
                      
                        <div class="row mb-6">
                            <label id="username" class="col-lg-4 col-form-label required fw-bold fs-6">No Invoice Tagihan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="no_inv_tagihan" class="form-control form-control-lg form-control-solid" value="{{$tagihan->no_inv_tagihan}}" readonly required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label id="password" class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Tagihan</label>
                            <div class="col-lg-3 fv-row">
                                <input type="date" name="tgl_tagihan" class="form-control form-control-lg form-control-solid" value="{{$tagihan->tgl_tagihan}}" required/>
                            </div>
                        </div>
                         <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pelanggan</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="id_pelanggan" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih Pelanggan-- </option>
                                    @foreach($pelanggans as $pelanggan)
                                   <option value='{{$pelanggan->id}}' @if($pelanggan->id == $tagihan->id_pelanggan) selected @endif  >{{$pelanggan->username}}</option>
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
                                    <option value='{{$alat->id}}'  @if($alat->id == $tagihan->id_alat) selected @endif >{{$alat->nama_alat}}</option>
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
                                   <option value='{{$paket->id}}'  @if($paket->id == $tagihan->id_paket) selected @endif>{{$paket->nama_paket}}</option>
                                   @endforeach
                                </select>     
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jumlah Tagihan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="jumlah_bayar" class="form-control form-control-lg form-control-solid" value="{{$tagihan->jumlah_bayar}}" required/>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Unik Kode</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="kode_unik" class="form-control form-control-lg form-control-solid" value="{{$tagihan->kode_unik}}" readonly required/>
                            </div>
                        </div>
                      
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="status" data-control="select2" data-placeholder="Select an option" required/>
                                    <option> --pilih status-- </option>
                                   <option value='1' @if($tagihan->status == 1) selected @endif>sudah bayar</option>
                                   <option value="2" @if($tagihan->status == 2) selected @endif> belum bayar</option>
                                </select>     
                            </div>
                        </div>
                        
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
