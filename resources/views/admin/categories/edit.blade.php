@extends('layouts.admin')

@section('content')

<div class="card-header">
    <a href="{{ route('dashboard')}}">Admin
    </a>
    /
    <span>
        <a href="{{ route('categories.index')}}">Study Program
        </a>
    </span>
</div>
<div class="card">
    <div class="card-header">
        <h3>Edit Study Program List
            <a href="{{ route('categories.index')}}" class="btn btn-primary float-right">
                Go Back
            </a>
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection
