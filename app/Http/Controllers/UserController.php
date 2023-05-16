<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Permet d'afficher une liste des utilisateurs.
    public function index () {
        $users = User::latest()->get();
        return view('user.index', compact ("users"));
    }

    // Permet de présenter un formulaire pour créer un nouveau utilisateur.
    public function create () {
        return view ('user.create');
    }

    // Permet d'enregistrer une nouveau parking.
    public function store (Request $request) {
        $this->validate($request, [
            "nom" => "bail|required|string|max:255",
            "prenom" => "bail|required|string|max:255",
            "adresse_email" => "bail|required|email",
        ]);

        User::create([
           "nom" => $request->nom,
           "prenom" => $request->prenom,
           "adresse_email" => $request->adresse_email,
        ]);

        return redirect(route("user.index"));

    }

    // Permet d'afficher un utilisateur spécifique.
    public function show ( User $user) {
        return view("user.show", compact("user"));

    }

    // Permet d'afficher un formulaire et de modifier un utilisateur.
    public function edit (User $user) {
        return view("user.edit", compact("user"));
    }

    // Permet de mettre à jour un utilisateur.
    public function update (Request $request, User $user) {

        $this->validate($request, [
            "nom" => "bail|required|string|max:255",
            "prenom" => "bail|required|string|max:255",
            "adresse_email" => "bail|required|email",
        ]);

        User::update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "adresse_email" => $request->adresse_email,
        ]);

        return redirect(route("user.index", $user));
    }

    public function destroy (Request $request, User $user) {

        $user->delete();

        return redirect(route("user.index", $user));
    }
}
