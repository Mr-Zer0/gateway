@extends('layouts.app')

@section('content')

    <div class="container">
        
        <form action="{{ route('application.store') }}" method="POST">
        
            @csrf

            <input type="text" name="name" placeholder="Application name">

            <textarea name="description" id="description" cols="30" rows="10" placeholder="description"></textarea>

            <input type="submit" value="Submit">

        </form>

    </div>

@endsection