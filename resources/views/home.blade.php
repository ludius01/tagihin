@extends('layouts.app')

@section('title')
    Overview 
@endsection

@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="row g-5 g-xl-8 my-5">
        <!--begin::Col-->
        <div class="col">
            <!--begin::Mixed Widget 5-->
            <div class="card">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Peningkatan Tenaga Kerja</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body  d-flex flex-row justify-content-around">
                    <!--begin::Chart-->
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <canvas id="tk-line"></canvas>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Items-->
                        <div class="my-auto col-12 col-lg-3">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder">Jumlah Tenaga Kerja</a>
                                        <div class="fs-3 text-muted fw-bold mt-1">{{ $cokt}}</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                    
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 5-->
        </div>
    </div>

    <div class="row g-5 g-xl-8 mb-5">
                {{--  PIE CHART  --}}
                <div class="col">
                    <!--begin::Mixed Widget 5-->
                    <div class="card">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Ringkasan</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body row d-flex justify-content-around ">
							<div class="card shadow-sm card-bordered col-12 col-md-3 mb-5">
								<div class=" border-0 my-4 pt-4">
									<p class="fw-bolder mb-2 text-dark fs-2 text-center">Jumlah TKM</p>
									<p class="text-muted fw-bold fs-2 text-center">{{ $ctkm}}</p>
								</div>
							</div>
							<div class="card shadow-sm card-bordered col-12 col-md-3 mb-5">
								<div class=" border-0 my-4 pt-4">
									<p class="fw-bolder mb-2 text-dark fs-2 text-center">Jumlah Aktifitas</p>
									<p class="text-muted fw-bold fs-2 text-center">{{ $ctks}}</p>
								</div>
							</div>
							<div class="card shadow-sm card-bordered col-12 col-md-3 mb-5">
								<div class=" border-0 my-4 pt-4">
									<p class="fw-bolder mb-2 text-dark fs-2 text-center">Jumlah Hasil Kunjungan</p>
									<p class="text-muted fw-bold fs-2 text-center">{{ $ckunjungan}}</p>
								</div>
							</div>
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
        var jumlah_user =  <?php echo json_encode($jumlah_user) ?>;
        new Chart("tk-line", {
        type: "line",
        data: {
            labels: xLine,
            datasets: [{
				label: "Tenaga Kerja",
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
