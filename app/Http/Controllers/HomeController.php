<?php

namespace App\Http\Controllers;

use App\Models\trains;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        $trains = trains::all();
        // dd($trains);
        return view('trains.index',compact('trains'));
        
    }
}
