@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        @if($cars->count())

            <ul>
                @foreach($cars as $car)
                    <li>
                        {{ $car->name }}
                    </li>
                @endforeach
            </ul>

        @else
            <p>No cars!</p>
        @endif
    </div>
</div>

@endsection