@extends ('base')

@section ('title', 'Accueil du site')

@section('content')

    <h1>Test</h1>

    @foreach($parkings as $parking)
        <article>
            <h2>{{$parking->nom_du_parking}}</h2>

            <p>
                {{$parking->adresse}}
                {{$parking->capacite_pour_moto}}
                {{$parking->capacite_pour_voiture}}

            </p>

            <p>
                <a href="{{ route('parking.show', ['parking' => $parking->id]) }}" class ="btn btn-primary">Accéder</a>
            </p>
        </article>
    @endforeach

@endsection
