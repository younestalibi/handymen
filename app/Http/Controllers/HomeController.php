<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('cars');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::latest()->take(7)->get();
        return view('home.index', compact('services'));
    }

    public function admin(){
        if (Auth::user()->role == 'Administrator') {
            $myProfile = User::find(Auth::user()->id)->Profile;
            $serviceCount=Service::count();
            $OraderTotalSum=Booking::all();
            $OraderIncompleteSum=Booking::where('status','pending')->orWhere('status','progress')->get();
            return view('service.dashboard', compact('OraderIncompleteSum','OraderTotalSum','serviceCount','myProfile'));
        }else{
            return redirect('home');
        }
    }

    public function serviceDetail($id){
        $service = Service::findOrFail($id);
        return view('home.serviceDetail', compact('service'));
    }

    public function contact(){
        $services = Service::all();
        return view('home.contact',compact("services"));
    }

    
    
}