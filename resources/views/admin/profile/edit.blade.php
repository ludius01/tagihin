@extends('layouts.app')

@section('title')
    Edit Profile
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
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit Profile</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form"  action="{{route('profile.update' , $tks->id)}}" enctype="multipart/form-data"   method="POST" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lengkap</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ $tks->nama_lengkap}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pendidikan Terkahir</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="p_terakhir" class="form-control form-control-lg form-control-solid" value="{{ $tks->p_terakhir}}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                            <div class="col-lg-8 fv-row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ $tks->nik}}</label>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid" value="{{ $tks->alamat}}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Provinsi</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" data-control="select2" name="provinsi"  id="province" data-placeholder="Pilih Provinsi" required>
                                    <option value="{{ $tks->provinsi}}">{{ $tks->provinsi}} </option>
                                    @foreach ($provinsi as $item)
                                        <option value="{{ $item->nama_provinsi}}">{{ $item->nama_provinsi}}</option>
                                    @endforeach
                                </select>      
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kabupaten</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" data-control="select2" name="kabupaten" data-placeholder="Pilih Kabupaten" required>
                                    <option value="{{ $tks->kabupaten}}"> {{ $tks->kabupaten}}</option>
                                    @foreach ($kabupaten as $item)
                                    <option value="{{ $item->nama_kab}}">{{ $item->nama_kab}}</option>
                                @endforeach
                                </select>      
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor HP</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="no_hp" class="form-control form-control-lg form-control-solid" value="{{ $tks->no_hp}}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="email" class="form-control form-control-lg form-control-solid" value="{{ $tks->email}}" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pengalaman Menjadi Pendamping</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="pmp" id="" cols="30" rows="4"  class="form-control form-control-lg form-control-solid" required>{{ $tks->pmp}}</textarea>
                            </div>
                        </div>
                         
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Motivasi Menjadi Pendamping</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="motivasi"  cols="30" rows="4"   class="form-control form-control-lg form-control-solid" required>{{ $tks->mmp}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Peran Pendamping bagi TKM lanjutan</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="peran" id="" cols="30" rows="4"   class="form-control form-control-lg form-control-solid" required>{{ $tks->peran}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold required fs-6">Image</label>
                            <div class="col-lg-8">                                
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset($tks->foto)}})">
                                    <div class="image-input-wrapper w-400px h-400px" style="background-image: url({{ asset($tks->foto)}})"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="foto" accept=".png, .jpg, .jpeg"  />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                        </div>

                        
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        @csrf
                        <a href="{{ route("profile.show", ["id" => $tks->id]) }}" class="btn btn-danger btn-active-light-primary me-2">Batal</a>
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
{{-- @push('scripts')
<script>
$(function () {
    $('#province').on('change', function () {
        axios.post('{{ route('kabupaten.show') }}', {id: $(this).val()})
            .then(function (response) {
                $('#id_kab').empty();

                $.each(response.data, function (id, nama_kab) {
                    $('#id_kab').append(new Option(nama_kab, id))
                })
            });
    });
 
});
</script>
@endpush --}}