<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stripecontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function checkout()
    {
        \Stripe\Stripe::SetApiKey(config(''));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                'price_data' => [
                    'currency' => 'myr',
                    'product_data' => [
                        'name'=> 'Peperroni Pizza',
                    ],
                    'unit_amount' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('/'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return view('welcome');
    }
}
