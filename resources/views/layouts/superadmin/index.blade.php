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
        <link href="{{ asset("assets/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />

		@yield('style')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div  class="navbar-brand">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="#">Project name</a>
                    </div>
                </div>
                <script>
                    .nav-link[data-toggle].collapsed:after {
                        content: " ▾";
                    }
                    .nav-link[data-toggle]:not(.collapsed):after {
                        content: " ▴";
                    }
                </script>
            </div>
        </nav>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <a href="#home"><span class="fa fa-home solo">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Reports</span></a>
                        <div class="collapse" id="submenu1" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                                <li class="nav-item">
                                    <a class="nav-link  text-truncate collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                    <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                        <ul class="flex-column nav pl-4">
                                            <li class="nav-item">
                                                <a class="nav-link p-1 text-truncate" href="#">
                                                    <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-1 text-truncate" href="#">
                                                    <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-1 text-truncate" href="#">
                                                    <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-1 text-truncate" href="#">
                                                    <i class="fa fa-fw fa-compass"></i> Areas </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Page content -->
        <div id="page-content-wrapper bg-white">
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
