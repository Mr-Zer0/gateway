@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @isset ($users)

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)

                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('user.show', $user->id) }}">
                                    {{ $user->name }}
                                    </a>
                                </td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
