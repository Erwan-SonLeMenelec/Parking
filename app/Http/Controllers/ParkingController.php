<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Illuminate\Support\Facades\Storage;

class ParkingController extends Controller
{
    public function index () {
        $parkings = Parking::latest()->get();
        return view("parking.index", compact ("parkings"));
    }

    public function create () {
        return view("parking.edit");

    }

    public function store () {

    }

    public function show (Parking $parking) {
        return view ("parking.show", compact ("parking"));
    }

    public function edit (Parking $parking) {
        return view ("parking.edit", compact ("parking"));
    }

    public function update () {

    }

    public function delete () {

    }
}
