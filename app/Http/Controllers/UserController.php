<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index () {
        $users = User::latest()->get();
        return view('user.index', compact ("users"));
    }

    public function create () {
        return view ('user.create');
    }

    public function show ( User $user) {
        return view("user.show", compact("user"));

    }

    public function edit (User $user) {
        return view("user.edit", compact("user"));
    }

    public function update () {

    }

    public function delete () {

    }
}
