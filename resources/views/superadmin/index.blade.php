@extends('layouts.superadmin.index')

@section('title')
    Overview Admin
@endsection

@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="row g-5 g-xl-8 mt-5">
        <!--begin::Col-->
        <div class="col">
            <!--begin::Mixed Widget 5-->
            <div class="card card-xxl-stretch">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Peningkatan Pelanggan</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-row justify-content-around">
                    <!--begin::Chart-->
                    <div class="row">
                        <div class="col-12 col-lg-9 ">
                            <canvas id="tk-line"></canvas>
                        </div>
                        <div class="mt-5 col-12 col-lg-2">
                            <!--begin::Item-->
                           
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah Pelanggan</a>
                                        <div class="fs-7 text-muted fw-bold mt-1"><center>{{$client}}</center></div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <div class="badge badge-light fw-bold py-4 px-3"></div>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 5-->
        </div>
    </div>

    <div class="row d-flex flex-row g-5 g-xl-8 mt-5">
        {{--  Item  --}}
        <div class="col bg-white">
            <div class="mt-5">
                <div class="d-flex flex-stack mb-5">
                    <div class="d-flex align-items-center me-2">
                        <div class="symbol symbol-50px me-3">
                            <div class="symbol-label bg-light">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah Alat</div>
                        </div>
                    </div>
                    <div class="badge badge-light fw-bold py-4 px-3">{{$alat}}</div>
                </div>
                <div class="d-flex flex-stack mb-5">
                    <div class="d-flex align-items-center me-2">
                        <div class="symbol symbol-50px me-3">
                            <div class="symbol-label bg-light">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah Paket</a>
                        </div>
                    </div>
                    <div class="badge badge-light fw-bold py-4 px-3">{{$paket}}</div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
    <script>
        let xLine = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
        var jumlah_user = <?php echo json_encode($jumlah_user) ?> ;

        new Chart("tk-line", {
        type: "line",
        data: {
            labels: xLine,
            datasets: [{
            fill: true,
            lineTension: 0,
            backgroundColor: "#c7d7ff",
            borderColor: "#3d73fc",
            data: jumlah_user
            }]
        },
        options: {
            legend: {display: false},
            scales: {
            yAxes: [{ticks: {min: 6, max:16}}],
            }
        }
        });



    </script>
@endsection
