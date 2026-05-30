<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="light">
<head>
	@include('partials.head')
	@livewireStyles
</head>

<body class="" >
	<div> {{-- se debe dejar este div como raiz para que no salga error --}}

		<!-- Switcher -->
		<x-layouts.app.switcher></x-layouts.app.switcher>
		
		<!-- End switcher -->

		<!-- Loader -->
		<div id="loader">
			<img src="https://php.spruko.com/tailwind/valex/valex/assets/images/media/loader.svg" alt="">
		</div>
		<!-- Loader -->

		<div class="page">

			<!-- Main-Header -->

			<x-layouts.app.header></x-layouts.app.header>
			<!-- End Main-Header -->

			<!-- start sidebar -->
			<x-layouts.app.sidebar></x-layouts.app.sidebar>
			<!-- End sidebar -->



			<!-- Start::content  -->
			<div class="content">
				{{ $slot }}
			</div>

			<!-- End::content  -->

			<!-- Footer opened -->
			<x-layouts.app.footer></x-layouts.app.footer>
			<!-- End Footer -->

			<!--    -->

		</div>

		<!-- Scripts-->

		<!-- Back To Top -->
		<div class="scrollToTop">
			<span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
		</div>

		<div id="responsive-overlay"></div>
	</div>
	<!-- popperjs -->
	<script src="{{ asset('admin/app/assets/libs/popperjs/core/umd/popper.min.js')}}"></script>

	<!-- Color Picker JS -->
	<script src="{{ asset('admin/app/assets/libs/simonwep/pickr/pickr.es5.min.js')}}"></script>

	<!-- Switch JS -->
	<script src="{{ asset('admin/app/assets/js/switch.js')}}"></script>

	<!-- Simplebar JS -->
	<script src="{{ asset('admin/app/assets/libs/simplebar/simplebar.min.js')}}"></script>

	<!-- Preline JS -->
	<script src="{{ asset('admin/app/assets/libs/preline/preline.js')}}"></script>

	<!-- Apex Charts JS -->
	<script src="{{ asset('admin/app/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

	<!-- JSVector Maps JS -->
	<script src="{{ asset('admin/app/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

	<!-- JSVector Maps MapsJS -->
	<script src="{{ asset('admin/app/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
	<script src="{{ asset('admin/app/assets/js/us-merc-en.js')}}"></script>

	<!-- CRM-Dashboard -->
	<script src="{{ asset('admin/app/assets/js/index.js')}}"></script>


	<!-- Sticky JS -->
	<script src="{{ asset('admin/app/assets/js/sticky.js')}}"></script>

	<!-- Defaultmenu JS -->
	<script src="{{ asset('admin/app/assets/js/defaultmenu.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('admin/app/assets/js/custom.js')}}"></script>

	<!-- Custom-Switcher JS -->
	<script src="{{ asset('admin/app/assets/js/custom-switcher.js')}}"></script>

	<!-- Choices JS -->
    <script src="{{ asset('admin/app/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
	
	<!-- Sweetalert JS -->
    <script src="{{asset('admin/app/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin/app/assets/js/swetalert.js')}}"></script>

	 <!-- Date & Time Picker JS -->
	<script src="{{asset('admin/app/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/js/date%26time_pickers.js')}}"></script>

	<!-- Quill Editor JS -->
	<script src="{{asset('admin/app/assets/libs/quill/quill.min.js')}}"></script>

	<!-- Internal Quill JS -->
	<script src="{{asset('admin/app/assets/js/quill-editor.js')}}"></script>
	

	<!-- DropZone File Upload JS -->
	<script src="{{asset('admin/app/assets/libs/dropzone/dropzone-min.js')}}"></script>

	<!-- Filepond File Upload JS -->
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>
	<script src="{{asset('admin/app/assets/libs/filepond/filepond.min.js')}}"></script>

	<script src="{{asset('admin/app/assets/js/fileupload.js')}}"></script>

	@livewireScripts
	
    @wireUiScripts
	@stack('scripts')
	
<script>
		// Este evento se dispara cada vez que Livewire termina de navegar (incluso con wire:navigate)
		document.addEventListener("livewire:navigated", () => {

			// 1. Re-inicializar componentes de Preline (Dropdowns, Modales, etc.)
			if (window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
				window.HSStaticMethods.autoInit();
			}

			Livewire.on('openModal', (id) => {
				const modal = document.querySelector(`#${id}`);
				if (modal) {
					window.HSOverlay.open(modal); // abre correctamente
				}
			});

			Livewire.on('close-modal', (payload) => {
				const id = payload.id;
				const modal = document.querySelector(`#${id}`);
				if (!modal) return;

				// Forzar cierre manual
				modal.classList.remove('open', 'opened');
				modal.classList.add('hidden');

				// Remover cualquier backdrop que quede
				document.querySelectorAll('.hs-overlay-backdrop').forEach(backdrop => backdrop.remove());

				// Desbloquear scroll
				document.body.classList.remove('overflow-hidden');
			});

		});

		// Mantener compatibilidad con carga inicial tradicional (F5)
		document.addEventListener("DOMContentLoaded", () => {
			// Aquí puedes dejar lógica que NO dependa de elementos que cambian con Livewire
		});
	</script>
	<script>
		Livewire.on('notify', (data) => {
			// Ejemplo con SweetAlert2:
			
			Swal.fire({
				text: data[0]?.message || 'info',
				icon: data[0]?.type || 'info',
				timer: 2500,
				showConfirmButton: false,
			});
		});
	</script>
	
	
</body>
</html>
