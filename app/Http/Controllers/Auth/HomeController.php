<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {

                return view('user.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
                
            } else if ($usertype == 'RestaurantManager') {

                return view('RestaurantManager.index');
            }
        } else {
            return view('auth.login');
        }
    }

    public function post()
    {
        return view('post');
    }
}
