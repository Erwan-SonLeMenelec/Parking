@extends ('base')

@section('content')

    <h1>TEST</h1>

    @foreach($vehicles as $vehicle)
        <article>
            <h2>{{$vehicle->name}}</h2>

            <p>
                {{$vehicle->user}}
                {{$vehicle->brand}}
                {{$vehicle->model}}

            </p>

            <p>
                <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}" class ="btn btn-primary">Accéder</a>
            </p>
        </article>
    @endforeach
@endsection
