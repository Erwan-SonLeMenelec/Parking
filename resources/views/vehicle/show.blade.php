@extends ('base')

@section('content')

    <article>
        <h2>{{$vehicle->user }}</h2>
        <p>
            {{$vehicle->brand }}
            {{$vehicle->model }}
            {{$vehicle->vehicle_types }}
            {{$vehicle->parked }}
            {{$vehicle->created_at }}

        </p>
    </article>

@endsection
