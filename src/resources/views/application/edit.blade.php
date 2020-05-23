@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Application Create</div>

                <div class="card-body row justify-content-center">
                    <form class="col-md-8" action="{{ route('application.update', $application->id) }}" method="POST">
    
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input 
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                value="{{ $application->name }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea 
                                name="description"
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="3">{{ $application->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
