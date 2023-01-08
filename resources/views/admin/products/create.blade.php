@extends('layouts.admin')

@section('content')
<div class="card-header">
    <a href="{{ route('dashboard')}}">Admin
    </a>
    /
    <span>
        <a href="{{ route('products.index')}}">Students
        </a>
    </span>
</div>
<div class="card">
    <div class="card-header">
        <h3>Create Students List
            <a href="{{ route('products.index') }}" class="btn btn-primary float-right">
                Go Back
            </a>
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products.index') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="price">NIM</label>
                <input type="number" name="price" value="{{ old('price') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="quantity">Gender</label>
                <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="tags">Study Program</label>
                <select class="form-control" name="category_id" id="">
                    @foreach($categories as $id => $categoryName)
                    <option value="{{ $id }}">{{ $categoryName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Class</label>
                <select class="form-control" name="tags" id="" multiple>
                    @foreach($tags as $id => $tagName)
                    <option value="{{ $id }}">{{ $tagName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="weight">GPA</label>
                <input type="number" name="weight" value="{{ old('weight') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" value="{{ old('year') }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
