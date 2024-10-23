<?php

namespace App\Http\Controllers;
use App\Models\Item;

use App\Models\User;
use Illuminate\Http\Request;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Item::all();
        return view('home',compact('data'));
    }

    public function profile(){
        $ids = Auth::user()->id;
        $data = User::find($ids);
        return view('profilIndex',compact('data'));
    }

}
