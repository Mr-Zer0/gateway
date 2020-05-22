@extends('layouts.app')

@section('content')

    <h1>View application detail</h1>

    <p>Name - {{ $application->name }}</p>
    <p>Key - {{ $application->key }}</p>
    <p>Description - {{ $application->description }}</p>

@endsection