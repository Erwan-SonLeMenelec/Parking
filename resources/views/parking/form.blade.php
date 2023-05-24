<form action="{{ route('parking.store') }}" method="post" class="vstack gap-2">
    @csrf
    <div>
        <label for="nom_du_parking">Nom du parking</label>
        <input type="text" id="nom_du_parking" name="nom_du_parking" value={{old('nom_du_parking', $parking->nom_du_parking)}}>
        @error("nom_du_parking")
        {{$message}}
        @enderror
    </div>

    <div>
        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" value={{old('adresse', $parking->adresse)}}>
        @error("adresse")
        {{$message}}
        @enderror
    </div>

    <div>
        <label for="capacite_pour_voiture">Capacité pour voiture</label>
        <input type="text" id="capacite_pour_voiture" name="capacite_pour_voiture" value={{old('capacite_pour_voiture', $parking->capacite_pour_voiture)}}>
        @error("capacite_pour_voiture")
        {{$message}}
        @enderror
    </div>

    <div>
        <abel for="capacite_pour_moto">Capacité pour moto<Label>
        <input type="text"  id="capacite_pour_moto"name="capacite_pour_moto" value={{old('capacite_pour_moto', $parking->capacite_pour_moto)}}>
        @error("capacite_pour_moto")
        {{$message}}
        @enderror
    </div>
    <button class="btn btn-primary">Enregistrer</button>
</form>
