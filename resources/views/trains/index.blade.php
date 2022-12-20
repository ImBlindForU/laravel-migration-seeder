@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->azienda }},{{$train->stazione_di_partenza}}</li>

            @endforeach
        </ul>
    </div>
@endsection