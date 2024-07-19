<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){

        $trains = Train::whereDate('data_di_partenza', today())->get();
        return view('train.index', compact('trains'));
    }
}
