<?php

namespace App\Http\Controllers;

class Controller
{
    public function home()
    {
        return view ('Home');
    }
    public function ipoh()
    {
        return view ('Locations.Ipoh');
    }
    public function bookingindex()
    {
        return view ('Booking.Bookingindex');
    }
    public function mikerpizza()
    {
        return view('Locations.MikerPizza');
    }
    public function cart()
    {
        return view('Locations.Cart');
    }
}
