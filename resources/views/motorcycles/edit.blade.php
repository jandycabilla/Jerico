@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edit Motorcycle</h1>
<form action="{{ route('motorcycles.update', $motorcycle->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" name="make" value="{{ $motorcycle->make }}" required>
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" name="model" value="{{ $motorcycle->model }}" required>
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" class="form-control" name="year" value="{{ $motorcycle->year }}" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" value="{{ $motorcycle->type }}">
    </div>
    <div class="form-group">
        <label for="engine_capacity">Engine Capacity (cc)</label>
        <input type="number" class="form-control" name="engine_capacity" value="{{ $motorcycle->engine_capacity }}">
    </div>
    <div class="form-group">
        <label for="horsepower">Horsepower</label>
        <input type="number" class="form-control" name="horsepower" value="{{ $motorcycle->horsepower }}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price" step="0.01" value="{{ $motorcycle->price }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3">{{ $motorcycle->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Motorcycle</button>
</form>
@endsection
