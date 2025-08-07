@extends('layouts.dashboard')
@section('title', 'Edit Animal')
@section('dash-body')

<div class="content-page">
    <div class="content container">
        <x-notification/>

        <h4 class="page-title mt-4">Edit Animal</h4>

        <div class="card-body">
            <form method="POST" action="{{ route('animalSales.update', $animal->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $animal->name }}" required>
                    </div>
                    <div class="col-md-3">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" value="{{ $animal->type }}" required>
                    </div>
                    <div class="col-md-2">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="{{ $animal->age }}" required>
                    </div>
                    <div class="col-md-2">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="Unsold" {{ $animal->status === 'Unsold' ? 'selected' : '' }}>Unsold</option>
                            <option value="Sold" {{ $animal->status === 'Sold' ? 'selected' : '' }}>Sold</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Price</label>
                        <input type="number" step="0.01" name="price" class="form-control" value="{{ $animal->price }}" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="2">{{ $animal->description }}</textarea>
                    </div>

                    <div class="col-md-3 mt-3">
                        <label>Change Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        @if($animal->image)
                            <small class="d-block mt-1">Current: <img src="{{ asset($animal->image) }}" width="60"></small>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
                <a href="{{ route('animalSales.index') }}" class="btn btn-secondary mt-3">Cancel</a>
            </form>
        </div>

    </div>
</div>

@endsection
