<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>TKS - @yield('title')</title>
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
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset("assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		@yield('style')
	 
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

		
		<script src="{{ asset("assets/plugins/global/plugins.bundle.js")}}"></script>
		<script src="{{ asset("assets/js/scripts.bundle.js")}}"></script>
		</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside bg-primary" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Logo-->
					<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-8" id="kt_aside_logo">
						<a href="{{ route("home") }}">
							<img alt="Logo" src="{{ asset("assets/media/logos/logo-kemnaker-white.png")}}" class="h-55px" style="object-fit: cover;" />
						</a>
					</div>
					<!--end::Logo-->
					<!--begin::Nav-->
					<div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
						<!--begin::Primary menu-->
						<div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-6" data-kt-menu="true">
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route("home") }}" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-house fs-2"></i>
									</span>
								</a>
							</div>
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route("daily-activity") }}" title="Aktifitas Harian & Absen TKM" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-calendar-day fs-2"></i>
									</span>
								</a>
							</div>
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route("condition-tkm") }}" title="Kondisi TKM" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-journal-richtext fs-2"></i>
									</span>
								</a>
							</div>
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route("result-visit") }}" title="Hasil Kunjungan" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-journal-check fs-2"></i>
									</span>
								</a>
							</div>
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route("tkm") }}" title="TKM" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-people-fill fs-2"></i>
									</span>
								</a>
							</div>
							<div class="menu-item py-3">
								<a class="menu-link menu-center" href="{{ route('kelola-lpj.index') }}" title="LPJ" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon me-0">
										<i class="bi bi-file-earmark-pdf fs-2"></i>
									</span>
								</a>
							</div>
						</div>
						
					</div>
						<!--end::Primary menu-->

					<!--begin::Footer-->
					<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
						<!--begin::Menu-->
						<div class="mb-7">
							<a href="{{ route("profile.show", ["id" => Auth::user()->id]) }}" class="btn btm-sm btn-icon btn-color-white btn-active-color-primary btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Profile">
								<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
								<span class="menu-icon me-0">
									<i class="bi bi-gear fs-2"></i>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Footer-->
					</div>
					<!--end::Nav-->
					
					
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header bg-white align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-40px h-40px" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo4/dist/index.html" class="d-lg-none">
									<img alt="Logo" src="assets/media/logos/logo-1.png" class="h-30px"  />
								</a>
							</div>
							<!--end::Mobile logo-->
							<div class="d-flex align-items-center" id="kt_header_wrapper">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_wrapper'}">
									<!--begin::Heading-->
									<h1 class="text-dark fw-bolder my-1 fs-3 lh-1">Dashboard TKS</h1>
									<!--end::Heading-->
								</div>
								<!--end::Page title=-->
							</div>
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch justify-self-end flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="d-flex align-items-stretch flex-shrink-0">

										<!--begin::User-->
										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											<!--begin::Menu wrapper-->
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<img src="{{ asset('')}}{{ Auth::user()->foto}}" alt="user" style="object-fit: cover;" />
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px me-5">
															<img alt="Logo" src="{{ asset('')}}{{ Auth::user()->foto}}" style="object-fit: cover;" />
														</div>
														<!--end::Avatar-->
														<!--begin::Username-->
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}
															</div>
															<a href="#" class="fw-bold text-muted fs-7">{{ Auth::user()->email }}</a>
														</div>
														<!--end::Username-->
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5 pb-3">
													<a href="{{ route("profile.show", ["id" => Auth::user()->id]) }}" class="fw-bolder text-dark">Profile</a>
												</div>
												<div class="menu-item px-5">
													<form action="{{ route("logout")}}" method="post">
														@csrf
														<button type="submit" class="btn btn-danger text-white menu-link px-5">Sign Out</button>
													</form>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::User -->
										<!--begin::Heaeder menu toggle-->
										<!--end::Heaeder menu toggle-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							{{-- <div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
							</div> --}}
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Modals-->
		<!--end::Modals-->
		<!--end::Main-->

		
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset("assets/plugins/custom/leaflet/leaflet.bundle.js")}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset("assets/js/custom/modals/select-location.js")}}"></script>
		<script src="{{ asset("assets/js/custom/widgets.js")}}"></script>
		<script src="{{ asset("assets/js/custom/apps/chat/chat.js")}}"></script>
		<script src="{{ asset("assets/js/custom/modals/create-app.js")}}"></script>
		<script src="{{ asset("assets/js/custom/modals/upgrade-plan.js")}}"></script>
		<!--end::Page Custom Javascript-->
 <script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
    </script>

	@if (Session::has("msg"))
		<script>
			Swal.fire({
			text: `{{ Session::get("msg") }}`,
			icon: "success",
			buttonsStyling: false,
			confirmButtonText: "Ok",
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});
		</script>
	@endif
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

		@yield('script')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>