@extends('layouts.superadmin.index')
@section('title')
    Overview Admin
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!-- <div class="mb-5">
            <a class="btn btn-primary" href="">Tambah Client</a>
        </div> -->
        <form action="{{route('pilih_cetak_tahunan')}}" method="POST">
            @csrf
 <div class="card shadow mb-4 border-0">
                <div class="card-header py-3 form-inline justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Tahunan</h6>
                    <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahmataujian"> <i class="fas fa-fw fa-plus-square"></i> Tambah Mata Ujian</a> -->
                </div>
                <div class="card-body py-5">
                    <div class="form-row">
                      
                        <div class="form-group col-md-4">
                            <label for="inputState">Pilih Tahun</label>
                            <select id="inputState" class="form-control" name="tahun">
                            <option selected>Pilih Tahun...</option>
                            @foreach($tahun as $y)
                            <option value="{{$y}}">{{$y}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="" style="display:flex; height:40px; margin-bottom:10px; justify-content:center;">
  <input type="submit" style="width: 400px; margin-left: 15px;" class="btn btn-primary btn-block" value="Lihat Laporan">
  
</form>

<!-- <button class="btn btn-primary btn-block"> Lihat Laporan</button> -->

@if(isset($datas))
<input type="hidden" value="{{$th}}" name="th">
<form action="{{route('print_tahunan',$th)}}" method="get">
  <input type="submit" style="width: 400px; margin-left: 15px;" class="btn btn-primary btn-block" value="Print Laporan">
</form>
</div>

        <div class="card">
            {{--  begin: Card -Header  --}}
            <div class="card-header card-header-stretch border-bottom border-gray-200">
                <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <!-- <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span> -->
                            <!--end::Svg Icon-->
                            <!-- <input type="text" data-kt-customer-table-filter="search" id="myInput" class="form-control form-control-solid w-250px ps-15" placeholder="Cari TKS" /> -->
                        </div>      
            </div>
            </div>
            
            {{--  end: Card Header  --}}

            {{--  begin: Content  --}}
            <div class="tab-content">
                <div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_billing_months">
                    {{--  begin: Container  --}}
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissable">
                            <h4><i class="icon fa fa-check"></i> Alert!</h4>
                            {{$message}}
                        </div>
                    @endif
                    
                    <div class="table-responsive">
                        
                        <table class="table table-row-bordered align-middle gy-4 gs-9">
                            <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                                <tr>
                                    <td class="min-w-200px text-center">Tanggal Tagihan</td>
                                    <td class="min-w-150px text-center">No invoice</td>
                                    <td class="min-w-200px text-center">Pelanggan</td>
                                    <td class="min-w-100px text-center">Alat</td>
                                    <td class="min-w-150px text-center">Paket</td>
                                    <td class="min-w-100px text-center">Jumlah Tagihan</td>
                                    <td class="min-w-100px text-center">Kode Unik</td>
                                    <td class="min-w-200px text-center">Status</td>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600" id="myTable">
                                {{--  begin: Row  --}}
                     
                                @foreach($datas as $data)
                                <tr>
                                    <td class=" text-center">{{$data->tgl_tagihan}}</td>
                                    <td class=" text-center">{{$data->no_inv_tagihan}}</td>      
                                    <td class=" text-center">@foreach($pelanggans as $p)@if($p->id == $data->id_pelanggan){{$p->username}}@endif    @endforeach</td>
                                    <td class=" text-center">@foreach($alats as $a) @if($a->id == $data->id_alat){{$a->nama_alat}}@endif    @endforeach</td>
                                    <td class=" text-center">@foreach($pakets as $pa)@if($pa->id == $data->id_paket){{$pa->nama_paket}}@endif @endforeach</td>
                                    <td class=" text-center">{{$data->jumlah_bayar}}</td>
                                    <td class="text-center"> {{$data->kode_unik}}</td>
                                    <td class="text-center"> @if($data->status == 1) Sudah bayar @elseif($data->status == 2) Belum Bayar<@endif/td>
                                </tr>
                             @endforeach

                                {{--  end: Row  --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="py-5">
                    <!--begin::Pages-->
                    <ul class="pagination float-right">
                        {{ $datas->links() }}
                    </ul>
                    <!--end::Pages-->
                </div>
                    {{--  end: Container  --}}
                </div>
            </div>
            {{--  End: Content  --}}
        </div>
        {{--  <!--begin::Pagination-->  --}}
        <div class="d-flex flex-stack flex-wrap pt-10">
            <!--begin::Pages-->
            <ul class="pagination">
                
            </ul>
            <!--end::Pages-->
        </div>
        {{--  <!--end::Pagination-->  --}}
         @endif
    </div>
</div>
@endsection
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(Session::has('success'))
<script>
    Swal.fire(
      'The Internet?',
      'That thing is still around?',
      'question'
    )
</script>

    @endif
    
    <script type="text/javascript">
        $('#delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            Swal.fire({
                title: 'Anda Sudah Yakin?',
                text: 'Data ini Dihapus!',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#FF585E',
                confirmButtonColor: '#00A8DC',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
                reverseButtons: true
    
            }).then((res) => {
                if (res.value) {
                    console.log('confirmed');
                    window.location.href = url;
                } else if (res.dismiss == 'cancel') {
                    console.log('cancel');
                    return false;
                } else if (res.dismiss == 'esc') {
                    console.log('cancle-esc**strong text**');
                }
            });
        });
    </script>
   
