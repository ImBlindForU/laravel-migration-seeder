@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->azienda }}</li>
            @endforeach
        </ul>
    </div>
@endsection