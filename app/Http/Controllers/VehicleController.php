<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    public function index () {
        $vehicles = Vehicle::latest()->get();
        return view ('index.vehicle', compact ("vehicles"));

    }

    public function create () {
        return view ("vehicle.create");
    }

    public function show (Vehicle $vehicle) {
        return view ('vehicle.show', compact("vehicle"));

    }

    public function edit (Vehicle $vehicle) {
        return view ('vehicle.edit', compact("vehicle"));
    }

    public function update () {

    }

    public function delete () {

    }
}
