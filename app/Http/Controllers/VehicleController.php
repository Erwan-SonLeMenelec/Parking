<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    // Permet d'afficher une liste des véhicules.
    public function index () {
        $vehicles = Vehicle::latest()->get();
        return view ('index.vehicle', compact ("vehicles"));

    }

    // Permet de présenter un formulaire pour créer un nouveau véhicule.
    public function create () {
        return view ("vehicle.create");
    }

    // Permet d'enregistrer une nouveau parking.
    public function store (Request $request) {
        $this->validate($request, [
            "user" => "bail|required|string|max:255",
            "brand" => "bail|required|string|exists:brands,nom",
            "model" => "bail|required|alpha_dash|exists:models,nom",
            "vehicle_types" => "bail|required|string|max:20|exists:vehicle_types,type",
            "parked" => "bail|required|boolean",
        ]);

        Vehicle::create([
            "user" => $request->user,
            "brand" => $request->brand,
            "model" =>$request->model,
            "vehicle_types" => $request->vehicle_types,
            "parked" => $request->parked,
        ]);

        return redirect(route("vehicle.index"));
    }

    // Permet d'afficher un véhicule spécifique.
    public function show (Vehicle $vehicle) {
        return view ('vehicle.show', compact("vehicle"));

    }

    // Permet d'afficher un formulaire et de modifier un véhicule.
    public function edit (Vehicle $vehicle) {
        return view ('vehicle.edit', compact("vehicle"));
    }

    // Permet de mettre à jour un véhicule.
    public function update (Request $request, Vehicle $vehicle) {

        $this->validate($request, [
            "user" => "bail|required|string|max:255",
            "brand" => "bail|required|string|exists:brands,nom",
            "model" => "bail|required|alpha_dash|exists:models,nom",
            "vehicle_types" => "bail|required|string|max:20|exists:vehicle_types,type",
            "parked" => "bail|required|boolean",
        ]);

        Vehicle::update([
            "user" => $request->user,
            "brand" => $request->brand,
            "model" =>$request->model,
            "vehicle_types" => $request->vehicle_types,
            "parked" => $request->parked,
        ]);

        return redirect(route("vehicle.index", $vehicle));
    }

    public function destroy (Request $request, Vehicle $vehicle) {

        $vehicle->delete();

        return redirect(route("vehicle.index", $vehicle));
    }
}
