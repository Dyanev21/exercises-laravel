@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

    <h1>Publish a post</h1>

    <hr>

    <form method="POST" action="/posts">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="text">Body</label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Public</button>
        </div>

    </form>

        @include('layouts.errors')

    </div>

@endsection