<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <!--FONT AWESOME IMPLEMENTATION-->
        <script src="https://kit.fontawesome.com/a176545576.js" crossorigin="anonymous"></script>
        <!--FONT AWESOME IMPLEMENTATION-->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}"/>
        <!--SWIPER JS IMPLEMENTATION-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title>Food.my</title>
</head>
<body class="vh-100 overflow-auto antialiased">
    <!--Navbar main implementation-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/Food.my_logo.png')}}" alt="" width="200" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button> 
  </div>
</nav>
    <!--Navbar main implementation-->
    <!--Main header title-->

<div class="container-full headermain">
        <section class="w-100 vh-100 d-flex flex-column justify-content-center ">
        <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Hungry? worry less with <u>Food.my!</u></h1>
        <h2 class="centered-text fade-in-text gap-50px" style="font-family: Oswald;">Your Food, Your Choice!</h2>
        <br>
        <div class="wrapper">
    <a class="button" href="/Bookingindex">Order Now ></a>
</div>

<!-- Filter: https://css-tricks.com/gooey-effect/ -->
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>

</div>
    <!--Main header title-->
    <!--Second Frame on the main page-->
<div class="container-full">
            <div class="container-small bg-white">
            <br>
            <h1 style="font-family: Oswald;  text-align: center; text-black">You handle the food we handle the rest <i class="fa-solid fa-exclamation"></i></h1>
            </div>
            <section class="w-100 vh-100 d-flex flex-column justify-content-center secheader"></section>
</div>
    <!--Second Frame on the main page-->
    <!--Third Frame on the main page-->
<div class="container">
            <br><br><br>
            <h1 style="font-family: Oswald;  text-align: center; text-black">Find us in these cities and <u>many more</u> <i class="fa-solid fa-exclamation"></i></h1>
            <br>
            <div class="container">
                <a href="/Ipoh">
                <div class="box">
            <div class="imgBox">
                <img src="https://lp-cms-production.imgix.net/2019-06/9fc39c1710eb3109b74a3e839b2ed351-ipoh.jpg" alt="Ipoh Perak img">
            </div>
            <div class="content">
                <h2>IPOH</br>
                <span>Perak.</span></h2>
            </div>
        </div>
                </a>
       
        <div class="box">
            <div class="imgBox">
                <img src="https://cdn.britannica.com/49/102749-050-B4874C95/Kuala-Lumpur-Malaysia.jpg" alt="Kuala Lumpur img">
            </div>
            <div class="content">
                <h2>KUALA LUMPUR</br>
                <span>Wilayah Persekutuan.</span></h2>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="https://www.ontourmalaysia.com/wp-content/uploads/2020/09/putrajaya-one-day-tour.jpg" alt="Putrajaya img">
            </div>
            <div class="content">
                <h2>PUTRAJAYA</br>
                <span>Selangor.</span></h2>
            </div>
        </div>
    </div>
            
</div>

  
    
</body>
</html>