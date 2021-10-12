<?= $this->extend('layout/template'); ?>

<!-- Hero -->
<?= $this->section('content'); ?>
<div>
	<div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
		<!-- Left Column -->
		<div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
			<p class="small-text mb-8 leading-relaxed font-semibold text-sm">
				Sidesa - Sistem Informasi Pelayanan Desa
			</p>
			<h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight">
				Partisipasi desa<br class="lg:block hidden " />
				di era perkembangan teknologi informasi
			</h1>
			<div class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 sm:space-x-3 space-x-0">
				<a href="/login">
					<button class="btn-fill inline-flex font-semibold text-white text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none hover:shadow-lg">
						User Login
					</button>
				</a>
				<button class="btn-outline font-normal text-black text-base py-4 px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent">
					<div class="flex items-center">
						<svg class="mr-2.5" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
						</svg>
						Petunjuk
					</div>
				</button>
			</div>
		</div>
		<!-- Right Column -->
		<div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
			<img id="hero" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png" alt="" />
		</div>
	</div>
</div>
</div>
</section>
<section class="h-full w-full border-box bg-white">
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

		.content-2-2 .btn-outline {
			border: 1px solid #979797;
			color: #979797;
		}

		.content-2-2 .btn-outline:hover {
			border: 1px solid #27c499;
			color: #27c499;
		}

		.content-2-2 .btn-fill {
			background-color: #27c499;
			border: 1px solid #27c499;
		}

		.content-2-2 .card-header {
			background-color: #eef6f4;
			border: 1px solid #27c499;
		}

		.content-2-2 .text-medium-black {
			color: #121212;
		}

		.content-2-2 .text-gray {
			color: #565656;
		}
	</style>
	<div class="content-2-2" style="font-family: 'Poppins', sans-serif">
		<div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
			<!-- Title Text -->
			<div class="flex flex-col text-center w-full mb-12">
				<h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
					3 Keys Benefit
				</h1>
				<h2 class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
					You can easily manage your business with a powerful tools
				</h2>
			</div>

			<!-- 3-Column -->
			<div class="flex lg:flex-row flex-col -m-4">
				<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
					<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
						<div class="items-center text-center">
							<div class="inline-flex items-center justify-center rounded-full mb-6">
								<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png" alt="" />
							</div>
						</div>
						<div class="flex-grow">
							<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
								Easy to Operate
							</h4>
							<p class="leading-relaxed text-base text-center tracking-wide text-gray">
								This can easily help you to <br /> grow up your business fast
							</p>
						</div>
					</div>
				</div>
				<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
					<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
						<div class="items-center text-center">
							<div class="inline-flex items-center justify-center rounded-full mb-6">
								<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png" alt="" />
							</div>
						</div>
						<div class="flex-grow">
							<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
								Real-Time Analytic
							</h4>
							<p class="leading-relaxed text-base text-center tracking-wide text-gray">
								With real-time analytics, you <br /> can check data in real time
							</p>
						</div>
					</div>
				</div>
				<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
					<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
						<div class="items-center text-center">
							<div class="inline-flex items-center justify-center rounded-full mb-6">
								<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png" alt="" />
							</div>
						</div>
						<div class="flex-grow">
							<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
								Very Full Secured
							</h4>
							<p class="leading-relaxed text-base text-center tracking-wide text-gray">
								With real-time analytics, we <br /> will guarantee your data
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lg:px-24 md:px-16 sm:px-8 px-4 pb-20 pt-12 mx-auto">
			<div class="flex lg:flex-row flex-col -m-4">
				<div class="p-4 w-full">
					<div class="card-header h-full flex lg:flex-row flex-col p-7 rounded-xl lg:space-x-3.5 md:space-x-3.5 space-x-0">
						<div class="text-center mx-auto">
							<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png" alt="" />
						</div>
						<div class="flex-grow my-auto lg:text-left lg:w-3/4 w-full lg:text-left text-center lg:my-auto md:my-auto py-6">
							<h4 class="text-2xl font-semibold mb-2.5">
								Dibuat untuk pemenuhan Skripsi
							</h4>
							<p class="text-base font-light tracking-wide w-full text-gray">
								Pembuatan Website Pelayanan Desa Janti dengan Menerapkan Algoritma
								Kriptografi AES-128 (Advance Encryption Standard 128 Bit) <br class="lg:block hidden" /> (Khoironi, 2021) Dengan dibimbing oleh yang terhormat ibu Retno Mumpuni, S.Kom, M.Sc sebagai pembimbing 1 dan
								pak Hendra Maulana, S. Kom, M. Kom sebagai pembimbing 2
							</p>
						</div>
						<a class="inline-block items-center my-auto text-center">
							<button class="btn-fill font-bold text-white text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full rounded-xl mb-4 md:mb-5 lg:mb-5 focus:outline-none hover:shadow-lg">
								Lihat Paper
							</button>
							<button class="btn-outline font-normal text-black text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent">
								Lihat Source
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection(); ?>