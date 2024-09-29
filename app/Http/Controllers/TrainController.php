<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $today = date('Y-m-d');  

        $trains = Train::whereDate('departure_time', $today)->get();

        return view('home', compact('trains'));
    }
}
