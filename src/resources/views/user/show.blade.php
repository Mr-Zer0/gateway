@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @isset ($user)

                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>

                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
