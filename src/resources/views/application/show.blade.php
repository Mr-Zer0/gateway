@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Application | {{ $application->name }}</div>

                <div class="card-body">
                    <p class="card-text"><b>Name -</b> {{ $application->name }}</p>
                    <p class="card-text"><b>Key -</b> {{ $application->key }}</p>
                    <p class="card-text"><b>Description - </b> {{ $application->description }}</p>

                    <a 
                        href="{{ route('application.edit', ['application' => $application->id]) }}"
                        class="btn btn-primary"
                    >
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
