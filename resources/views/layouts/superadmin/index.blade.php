<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Tagihin - @yield('title')</title>
		{{-- <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> --}}
		<meta charset="utf-8" />
		{{-- <meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" /> --}}
		<link rel="shortcut icon" href="{{ asset("assets/media/logos/favicon.ico")}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset("assets/plugins/custom/leaflet/leaflet.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset("assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <!-- ------------------------------------------------------------- -->
        <link href="{{ asset("assets/css/sidebars.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/vendor/fontawesome/css/all.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />

		@yield('style')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body class="body">
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top bg-white shadow-sm" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div  class="navbar-brand" style="height:70px; align-items:center; display:flex;">
                            <a id="menu-toggle" href="#" class="my-auto glyphicon glyphicon-align-justify btn-menu text-primary toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                            <a style="" href="#"><h4>Dashboard Admin</h4></a>
                        </div>
                    </div>
                    <div class="cursor-pointer symbol symbol-10px symbol-md-20px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img src="{{ asset("assets/media/logobiru1.png")}}" style="width: 115px; height: 35px;" alt="user" />
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content px-3">
                                <div class="symbol mb-2 d-flex justify-content-center symbol-50px">
                                    <img alt="Logo" style="width: 115px; height: 35px;" src="{{ asset("assets/media/logobiru1.png")}}" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                    </div>
                                    <a href="#" class="fw-bold text-muted fs-7">{{ Auth::user()->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5 pb-3">
                            <a href="{{ url("superadmin-profile", Auth::user()->id) }}" class="fw-bolder text-dark">Edit Profile</a>
                        </div>
                        <div class="menu-item px-5">
                            <form action="{{ route("logout")}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger text-white menu-link px-5">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="bg-white  shadow-sm" style="margin-top:-52px;">
                <nav id="spy">
                    <ul class="sidebar-nav nav">
                        <li class="sidebar-brand" style="height:75px; align-items:center; display:flex; margin-left: auto; margin-right: auto;">
                            <a href="{{route('home')}}"><img alt="Logo" style="width: 115px; height: 45px; "
                            src="{{ asset("assets/media/logobiru2.png")}}" /></a>
                        </li>
                        <li class="nav-item flex-column" style="width: 100%; justify-content: left; margin-top: 30px;">
                            <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"> <i class="fas fa-fw fa-table gelap"></i> Data Master</a>
                            <div class="collapse" id="submenu1" aria-expanded="false">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link py-1 active" href="{{route('client.index')}}"><span> <i class="fas fa-fw fa-user gelap"></i>Data Client</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-1" href="{{route('paket.index')}}"><span> <i class="fas fa-fw fa-cubes gelap"></i>Data Paket</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-1" href="{{route('alat.index')}}"><span><i class="fas fa-fw fa-tools gelap"></i>Data Alat</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-1" href="{{route('metode-pembayaran.index')}}"><span><i class="fas fa-fw fa-wallet gelap"></i>Kelola Metode Pembayaran</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item flex-column" style="width: 100%; justify-content: left;">
                            <a class="nav-link collapsed text-truncate" href="{{route('invoice.index')}}"><i class="fas fa-fw fa-file-invoice gelap"></i>Invoice Pembayaran</a>
                        </li>
                        <li class="nav-item flex-column" style="width: 100%; justify-content: left;">
                            <a class="nav-link collapsed text-truncate" href="#submenu3" data-toggle="collapse" data-target="#submenu3"> <i class="fas fa-fw fa-clipboard-list gelap"></i> Laporan Tagihan</a>
                            <div class="collapse" id="submenu3" aria-expanded="false">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link py-1" href="{{route('cetak.index.bulan')}}"><span><i class="fas fa-fw fa-file-alt gelap"></i>Tagihan Bulanan</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-1" href="{{route('cetak.index.tahunan')}}"><span><i class="fas fa-fw fa-file-alt gelap"></i>Tagihan Tahunan</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="page-content-wrapper">
                @yield('content')
            </div>
        </div>
        <!-- ========================= -->
		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset("assets/plugins/global/plugins.bundle.js")}}"></script>
		<script src="{{ asset("assets/js/scripts.bundle.js")}}"></script>
		<script src="{{ asset("assets/plugins/custom/leaflet/leaflet.bundle.js")}}"></script>
		<script src="{{ asset("assets/js/custom/modals/select-location.js")}}"></script>
		<script src="{{ asset("assets/js/custom/widgets.js")}}"></script>
		<script src="{{ asset("assets/js/custom/apps/chat/chat.js")}}"></script>
		<script src="{{ asset("assets/js/custom/modals/create-app.js")}}"></script>
		<script src="{{ asset("assets/js/custom/modals/upgrade-plan.js")}}"></script>
        <!-- =============================================== -->
        <script src="{{ asset("assets/js/sidebars.js")}}"></script>
        <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <script src="{{ asset("assets/vendor/jquery/jquery.min.js")}}"></script>
        <!-- ============================================\== -->
		<script>
			$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
			});
		</script>
        <script>
                        .nav-link[data-toggle].collapsed:after {
                            content: " ▾";
                        }
                        .nav-link[data-toggle]:not(.collapsed):after {
                            content: " ▴";
                        }
                    </script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						'excelHtml5'
					]
				} );
				$('#example2').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						'excelHtml5'
					]
				} );
			} );
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		@yield('script')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
