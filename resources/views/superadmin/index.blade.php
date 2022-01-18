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
                        <span class="card-label fw-bolder fs-3 mb-1">Peningkatan Tenaga Kerja</span>
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
                        <div class="mt-5 col-12 col-lg-3">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <i class="bi bi-bar-chart-fill"></i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-6 text-gray-800 text-hover-primary fw-bolder">Laju Tenaga Kerja</div>
                                        <div class="fs-7 text-muted fw-bold mt-1">Kenaikan dan Penurunan</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <div class="badge badge-light fw-bold py-4 px-3"></div>
                                <!--end::Label-->
                            </div>
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
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah Tenga Kerja</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">Keseluruhan</div>
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
                            <div class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah TKS</div>
                        </div>
                    </div>
                    <div class="badge badge-light fw-bold py-4 px-3"></div>
                </div>
                <div class="d-flex flex-stack mb-5">
                    <div class="d-flex align-items-center me-2">
                        <div class="symbol symbol-50px me-3">
                            <div class="symbol-label bg-light">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah TKM</a>
                        </div>
                    </div>
                    <div class="badge badge-light fw-bold py-4 px-3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5 g-xl-8 mt-5">
                {{--  PIE CHART  --}}
                <div class="col">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">RingkasanTKM</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body d-flex flex-row justify-content-around">
                            <!--begin::Chart-->
                            <div>
                                <canvas class="mx-auto" id="pie-tkm" style="width:100%; height:200px"></canvas>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-6 text-gray-800 text-hover-primary fw-bolder">Jumlah TKM :
                                                <span class="fw-bold"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <div>
                                            <p href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Keterangan :</p>
                                            <div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia 18-25 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia 25-30 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia 30-35 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia 35-40 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia 40-45 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                                <div class="d-flex align-items-center me-2 justify-content-beetwen">
                                                    <p>Usia > 45 Tahun : <span class="fw-bold"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>

                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
    </div>
</div>
@endsection

@section('script')
    <script>
        let xLine = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
        var jumlah_user =  ;

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



        let xValues = ["18-25 Tahun", "25-30 Tahun", "30-35 Tahun", "35-40 Tahun", "40-45 Tahun", "> 45 Tahun"];
        let yValues = [];
        let barColors = [
        "#fa6b64",
        "#fcc06d",
        "#77fcac",
        "#759cff",
        "#8461ff",
        "#d0cfd1",
        ];

        new Chart("pie-tkm", {
        type: "pie",
        data: {
            labels: "Tenaga Kerja",
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Ringkasan TKM"
            }
        }
        });
    </script>
@endsection
