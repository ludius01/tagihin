@extends('layouts.superadmin.index')
@section('title')
    Overview Admin
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="mb-5">
            <a class="btn btn-primary" href="{{route('client.create')}}">Tambah Client</a>
        </div>
        <div class="card">
            {{--  begin: Card -Header  --}}
            <div class="card-header card-header-stretch border-bottom border-gray-200">
                <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search" id="myInput" class="form-control form-control-solid w-250px ps-15" placeholder="Cari Client" />
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
                                    <td class="min-w-20px text-center">No</td>
                                    <td class="min-w-100px text-center">Username</td>
                                    <td class="min-w-300px text-center">Email</td>
                                    <!-- <td class="min-w-150px text-center">Password</td> -->
                                    <td class="min-w-200px text-center">NO HP</td>
                                    <td class="min-w-100px text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600" id="myTable">
                                {{--  begin: Row  --}}
                     
                                @foreach($users as $user)
                                <tr>
                                    <td class=" text-center">{{++$i}}</td>
                                    <td class=" text-center">{{$user->username}}</td>
                                    <td class=" text-center">{{$user->email}}</td>
                                    <!-- <td class=" text-center">*****************</td> -->
                                    <td class=" text-center">{{$user->No_Hp}}</td>
                                    {{-- <td class=" text-center"></td> --}}
                                    <td class="text-center">
                                         <button class="btn btn-primary btn-active-light-primary p-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1{{$user->id}}"> <i class="far fa-fw fa-eye"></i></button>
                                        <a href="{{route('client.edit',$user->id)}}" class="btn btn-info btn-active-light-info p-3"><i class="fas fa-fw fa-edit"></i></a>
                                        <a href="{{route('client.delete',$user->id)}}" id="delete-confirm" class="btn btn-danger btn-active-light-danger p-3"><i class="fas fa-fw fa-trash-alt"></i></a>
                                    </td>
                                    <!-- <td class="text-center">
                                         <button class="btn btn-sm btn-primary btn-active-light-primary mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_1{{$user->id}}">Detail</button>
                                        <a href="{{route('client.edit',$user->id)}}" class="btn btn-sm btn-info btn-active-light-info mx-2">Edit</a>
                                        <a href="{{route('client.delete',$user->id)}}" id="delete-confirm" class="btn btn-sm btn-danger btn-active-light-danger mx-2">Hapus</a>
                                    </td> -->
                                </tr>
                             @endforeach

                                {{--  end: Row  --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="py-5">
                    <!--begin::Pages-->
                    <ul class="pagination float-right">
                        {{ $users->links() }}
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

    @foreach($users as $user)
  
    <div class="modal fade" tabindex="-1" id="kt_modal_1{{$user->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <center>  <h5 class="modal-title">Detail Paket</h5>
            </div>
            <div class="modal-body">
             
               <p>
                <label class="col-lg-4 col-form-label fw-bold fs-6">ID User</label> : {{$user->id}}
                  <br> <label class="col-lg-4 col-form-label fw-bold fs-6">Username</label> : {{$user->username}}
                   <br> <label class="col-lg-4 col-form-label fw-bold fs-6">Email</label> : {{$user->email}}
                    <br> <label class="col-lg-4 col-form-label fw-bold fs-6">Password</label> : ***********
                     <br> <label class="col-lg-4 col-form-label fw-bold fs-6">No HP</label> : {{$user->No_Hp}}
                      <br> <label class="col-lg-4 col-form-label fw-bold fs-6">Alamat</label> : {{$user->alamat}}
                      
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>
  
@endforeach

