@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <h4 class="text-center">Add Car</h4>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/cars" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Car Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

@endsection
