<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else if($usertype=='2')
        {
            return view('agent.home');
        }
        else
        {
            return view('User.home');
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            return view('User.home');

        }
        
    }
    public function Aboutus()
    {
        return view('User.Aboutus');
    }
    public function home()
    {
        return view('User.home');
    }
    public function MyLocations()
    {
        return view('User.MyLocation');
    }
    public function MyDonation()
    {
        return view('User.MyDonation');
    }
}
