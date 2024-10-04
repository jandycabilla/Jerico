@extends('layouts.app')

@section('content')
<h1 class="mb-4">Motorcycles</h1>
<a href="{{ route('motorcycles.create') }}" class="btn btn-primary mb-3">Add New Motorcycle</a>
<div class="list-group">
    @foreach($motorcycles as $motorcycle)
    <div class="list-group-item">
        <h5>{{ $motorcycle->make }} {{ $motorcycle->model }} ({{ $motorcycle->year }})</h5>
        <p>Type: {{ $motorcycle->type }} | Engine Capacity: {{ $motorcycle->engine_capacity }}cc | Horsepower: {{ $motorcycle->horsepower }} hp</p>
        <div class="d-flex justify-content-between">
            <a href="{{ route('motorcycles.edit', $motorcycle->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
            <form action="{{ route('motorcycles.destroy', $motorcycle->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
