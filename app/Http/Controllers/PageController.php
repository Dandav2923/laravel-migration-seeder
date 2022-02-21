<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Trains::all();
        $data = ['trains' => $trains];
        return view('Trains.home', $data);
    }
    public function show(Trains $trains) {
        // $trains = Trains::all();
        return view('Trains.show', ['trains' => $trains]);
    }
}
