<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
	<!-- Link to the file hosted on your server, -->
	<link rel="stylesheet" href="path-to-the-file/splide.min.css">
	<!-- or link to the CDN -->
	<link rel="stylesheet" href="url-to-cdn/splide.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<style type="text/css">
	@media only screen and (max-width: 768px) { 
       .section .txt h1{
		font-size: 28px !important;
		font-weight: 600;
	}
	 .section .txt h6{
		font-size: 10px !important;
	}
      }
	.section{
		max-width: 100%;
		background: #0598dd;
		padding: 100px;
	}
	.section .txt h1,h6{
		text-align: center;
		color: white;
	}
	.section .txt h6{
		font-size: 15px;
		margin-top: 15px;
	}
	.section .txt h1{
		font-size: 50px;
		font-weight: 600;
	}
</style>
<body>
 <!-- menu -->
 <?php include('menu.php');?>
  <!-- section1 -->
 <div class="">
 	<div class="splide" role="group" aria-label="Splide Basic HTML Example">
  		<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide section">
 						<div class="txt">
 								<h1>Nos Services</h1>
 									<h6> Aménagement et location des panneaux publicitaires |  BTL |  Evénementiel | <br> Conception, réalisation et montage de divers types de 
								supports promotionnels |  Impression</h6>
 						</div>
					</li>
					<li class="splide__slide section">
 						<div class="txt">
 								<h1>Aménagement et location des panneaux publicitaires</h1>
 						</div>
					</li>
					<li class="splide__slide section">
 						<div class="txt">
 								<h1>BTL</h1>
 									<h6> activation et campagne promo</h6>
 						</div>
					</li>
					<li class="splide__slide section">
 						<div class="txt">
 								<h1> Evénementiel</h1>
 						</div>
					</li>
					<li class="splide__slide section">
 						<div class="txt">
 								<h1>Conception, réalisation et montage de divers types de 
								supports promotionnels</h1>
 									<h6>spot télé | documentaire...</h6>
 						</div>
					</li>
					<li class="splide__slide section">
 						<div class="txt">
 								<h1> Impression </h1>
 									<h6>banderoles | bâches | t-shirt...</h6>
 						</div>
					</li>
				</ul>
	    </div>
    </div>
 </div>
 <!-- section2 -->
    <div data-aos="fade-up" data-aos-duration="3000">
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nous vous offrons</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/OIP.zj4WdBDrcrp5JVRDi9sygwHaE0?rs=1&pid=ImgDetMain" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://i.pinimg.com/originals/55/24/b3/5524b3cc2a808472d75441553aad9e33.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://thumbs.dreamstime.com/b/blank-information-poster-mockup-busy-urban-setting-image-high-resolution-large-placed-bustling-near-transport-node-273210039.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/R.101b692741d75d1c5ddd641f076caeca?rik=DJwVhr3vnYyhAw&pid=ImgRaw&r=0" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <!-- More products... -->
    </div>
    </div>
    </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="3000">
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nous vous offrons</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/OIP.zj4WdBDrcrp5JVRDi9sygwHaE0?rs=1&pid=ImgDetMain" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://i.pinimg.com/originals/55/24/b3/5524b3cc2a808472d75441553aad9e33.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://thumbs.dreamstime.com/b/blank-information-poster-mockup-busy-urban-setting-image-high-resolution-large-placed-bustling-near-transport-node-273210039.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/R.101b692741d75d1c5ddd641f076caeca?rik=DJwVhr3vnYyhAw&pid=ImgRaw&r=0" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <!-- More products... -->
    </div>
    </div>
    </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="3000">
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nous vous offrons</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/OIP.zj4WdBDrcrp5JVRDi9sygwHaE0?rs=1&pid=ImgDetMain" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://i.pinimg.com/originals/55/24/b3/5524b3cc2a808472d75441553aad9e33.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://thumbs.dreamstime.com/b/blank-information-poster-mockup-busy-urban-setting-image-high-resolution-large-placed-bustling-near-transport-node-273210039.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://th.bing.com/th/id/R.101b692741d75d1c5ddd641f076caeca?rik=DJwVhr3vnYyhAw&pid=ImgRaw&r=0" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 bg-sky-400 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reserver</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <!-- More products... -->
    </div>
    </div>
    </div>
    </div>
    <!-- footer -->
    <?php include ('footer.php') ?>
    <!-- script slider splide js -->
	<script type="text/javascript">
		var splide = new Splide( '.splide', {
 			 type  : 'fade',
  			 type	 : 'loop',
  			 autoplay : true,
			} );

			splide.mount();
	</script>
	<!-- script AOS -->
	<script>
 	 AOS.init();
	</script>
</body>
</html>