<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ParkingController extends Controller
{
    // Permet d'afficher une liste des parkings.
    public function index (): View {
        $parking = Parking::latest()->get();
        return view("parking.index", compact ("parking"));
    }

    // Permet de présenter un formulaire pour créer un nouveau parking.
    public function create () {
        $parking = new Parking();
        return view("parking.edit");

    }

    // Permet d'enregistrer une nouveau parking.
    public function store (Request $request) {
        $this->validate($request, [
            'nom_du_parking' => 'bail|required|string|max:255',
            'adresse' => 'bail|required|string|max:255',
            'capacite_pour_voiture' => 'bail|required|integer',
            'capacite_pour_moto' => 'bail|required|integer',
        ] );

        Parking::create([
            "nom_du_parking" => $request->nom_du_parking,
            "adresse" => $request->adresse,
            "capacite_pour_voiture" => $request-> capacite_pour_voiture,
            "capacite_pour_moto" => $request -> capacite_pour_moto,
        ]);

        return redirect(route("parking.index"));

    }

    // Permet d'afficher un parking spécifique.
    public function show (Parking $parking) {
        return view ("parking.show", compact ("parking"));
    }

    // Permet d'afficher un formulaire et de modifier un parking.
    public function edit (Parking $parking) {
        return view ("parking.edit", compact ("parking"));
    }

    // Permet de mettre à jour un parking.
    public function update (Request $request, Parking $parking) {

        $this->validate($request, [
            'nom_du_parking' => 'bail|required|string|max:255',
            'adresse' => 'bail|required|string|max:255',
            'capacite_pour_voiture' => 'bail|required|integer',
            'capacite_pour_moto' => 'bail|required|integer',
        ] );

        Parking::update([
            "nom_du_parking" => $request->nom_du_parking,
            "adresse" => $request->adresse,
            "capacite_pour_voiture" => $request-> capacite_pour_voiture,
            "capacite_pour_moto" => $request -> capacite_pour_moto,
        ]);

        return redirect(route("parking.index", $parking));
    }

    // Permet de supprimer un parking.
    public function destroy (Request $request, Parking $parking) {

        $parking->delete();

        return redirect(route("parking.index", $parking));
    }
}
