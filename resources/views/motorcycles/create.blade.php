@extends('layouts.app')

@section('content')
<h1 class="mb-4">Add New Motorcycle</h1>
<form action="{{ route('motorcycles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" name="make" required>
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" name="model" required>
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" class="form-control" name="year" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type">
    </div>
    <div class="form-group">
        <label for="engine_capacity">Engine Capacity (cc)</label>
        <input type="number" class="form-control" name="engine_capacity">
    </div>
    <div class="form-group">
        <label for="horsepower">Horsepower</label>
        <input type="number" class="form-control" name="horsepower">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price" step="0.01">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save Motorcycle</button>
</form>
@endsection
