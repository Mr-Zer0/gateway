@extends('layouts.app')

@section('content')

    <div class="container">
        
        <form action="{{ route('application.store') }}" method="POST">
        
            @csrf

            <input type="text" name="name" placeholder="Application name">

            <textarea name="description" id="description" cols="30" rows="10" placeholder="description"></textarea>

            <select name="type" id="type">
                <option value="0">Android</option>
                <option value="1">ios</option>
                <option value="2">Web</option>
            </select>

            <input type="submit" value="Submit">

        </form>

    </div>

@endsection