@extends ('base')

@section('content')

        <article>
            <h2>{{$parking->nom_du_parking }}</h2>
            <p>
                {{$parking->adresse }}
                {{$parking->capacite_pour_voiture }}
                {{$parking->capacite_pour_moto }}

            </p>
        </article>

@endsection
