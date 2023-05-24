<form action="{{ route('vehicle.store') }}" method="post" class="vstack gap-2">
    @csrf
    <div>
        <label for="user">User</label>
        <select name="user_id" id="user">
            <option disabled>Select your option</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" @selected(old('user', $vehicle->user_id ?? null) == $user->id)>{{ $user->prenom . ' ' . $user->nom }}</option>
            @endforeach
        </select>
        @error("user_id")
        {{$message}}
        @enderror
    </div>

    <div>
        <label for="brand">Brand</label>
        <input type="text" id="brand" name="brand" value={{old('brand', $vehicle->brand ?? null)}}>
        @error("brand")
        {{$message}}
        @enderror
    </div>

    <div>
        <label for="model">Model</label>
        <input type="text" id="model" name="model" value={{ old('model', $vehicle->model ?? null) }}>
        @error("model")
            {{-- la variable message correspond au model       --}}
           {{ $message }}
        @enderror
    </div>

    <div>
        <label for="vehicle_types">Vehicle Type</label>
        <select name="vehicle_types" id="vehicle_types">
            <option disabled>Select your option</option>
            <option value="moto" @selected(old('vehicle_types', $vehicle->vehicle_types ?? null) == 'moto')>Moto</option>
            <option value="voiture" @selected(old('vehicle_types', $vehicle->vehicle_types ?? null) == 'voiture')>Voiture</option>
        </select>
        @error("vehicle_types")
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="parked">Parked</label>
        <input type="checkbox" id="parked" name="parked" @checked(old('parked', $vehicle->parked ?? null))>
        @error("parked")
            {{ $message }}
        @enderror
    </div>
    <x-button value="Annuler" color="secondary" />
    <x-button value="Enregistrer" color="primary" />
</form>
