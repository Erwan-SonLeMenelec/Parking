<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehicleRequest;
use App\Models\User;
use App\Services\MotorcycleVehicle;
use Closure;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Storage;
use App\Services\CarVehicle;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Database\Query\Builder;

class VehicleController extends Controller
{
    // Permet d'afficher une liste des véhicules.
    public function index (): View  {
        $vehicle = Vehicle::query()->latest()->get();
        return view ('vehicle.index', compact ("vehicle"));
    }

    // Permet de présenter un formulaire pour créer un nouveau véhicule.
    public function create (): View {
        $users = User::all();
        return view ("vehicle.create", compact('users'));
    }

    // Permet d'enregistrer une nouveau parking.
    public function store (CreateVehicleRequest $request): RedirectResponse
    {

        // le code s'execute ssi ta request a été validée.

//        $request->validate([
//
//            'vehicle_types' => 'required|string|in:moto,car',
////            'vehicle_types' => [
////                'required',
////                'string',
////                Rule::in(['moto', 'car']),
////
////            ]
//        ]);

//        if($request->input('vehicle_types') === 'moto') {
//            $vehicule = new MotorcycleVehicle(2);
//        }
//        if($request->input('vehicle_types') === 'car') {
//            $vehicule = new CarVehicle(4);
//        }

        $vehicle = Vehicle::query()->create(
            $request->only(['brand', 'model', 'user_id', 'vehicle_types'])
        );

        return redirect(route("vehicle.index", ['vehicle'=> $vehicle->id]))
            ->with("success", 'Le véhicule a bien été sauvegardé');
    }

    // Permet d'afficher un véhicule spécifique.
    public function show (Vehicle $vehicle): View {
        return view ('vehicle.show', compact("vehicle"));

    }

    // Permet d'afficher un formulaire et de modifier un véhicule.
    public function edit (Vehicle $vehicle): View {
        $users = User::all();
        return View ('vehicle.edit', compact(["vehicle", 'users']));
    }

    // Permet de mettre à jour un véhicule.
    public function update (Request $request, Vehicle $vehicle): string {

        Vehicle::query()->update(
            $request->only(['brand', 'model', 'user_id', 'vehicle_types'])
        );


        return redirect(route("vehicle.index", $vehicle));
    }

    public function destroy (Request $request, Vehicle $vehicle): string {

        $vehicle->delete();

        return redirect(route("vehicle.index", $vehicle));
    }
}
