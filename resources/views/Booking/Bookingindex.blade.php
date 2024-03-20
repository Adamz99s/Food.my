@extends('Booking.BookingHeader')

@section('content')
<section class="w-100 vh-100 d-flex flex-column justify-content-center  ">
    <h1 class="centered-text fade-in-text" style="font-family: Poppins;">Choose your desire location !</h1>
</section>

<section class="w-100 vh-100 d-flex flex-column justify-content-center ">
       <!--Third Frame on the main page-->
<div class="container">
            <br><br><br>
            
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
</section>

<section class="w-100 vh-100 d-flex flex-column justify-content-center  ">
    
</section>
@endsection