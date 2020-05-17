@extends('layouts.app')

@section('content')

    <h1>Here is the application list</h1>

    @forelse ($applications as $app)
        <li>{{ $app->name }}</li>
    @empty
        <p>No application has been registered yet! ..</p>
    @endforelse

@endsection