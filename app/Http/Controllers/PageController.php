<?php

namespace App\Http\Controllers;

use App\Train;
use App\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        $data = ['trains' => $trains];
        return view('Trains.home', $data);
    }
    public function show(Train $trains) {
        // $trains = Trains::all();
        dd($trains);
        return view('Trains.show', ['trains' => $trains]);
    }
}
