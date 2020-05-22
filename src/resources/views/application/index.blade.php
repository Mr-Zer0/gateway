@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Applications</div>

                <div class="card-body">
                    @isset ($applications)

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $index => $application)

                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('application.show', ['application' => $application->id]) }}">
                                    {{ $application->name }}
                                    </a>
                                </td>
                                <td>{{ $application->description }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    @endisset

                    <a href="{{ route('application.create') }}" class="btn btn-primary">Create New App</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
