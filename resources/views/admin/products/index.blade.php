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
    <div class="card-header ">
        <h3>Students List
            <a href="{{ route('products.create')}}" class="btn btn-primary float-right mr-2 mt-2">
                Create
            </a>
        </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Study Program</th>
                        <th>Class</th>
                        <th>GPA</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>
                            @foreach($product->tags as $tag)
                            <span class="badge badge-primary"> {{ $tag->name  }}</span>
                            @endforeach
                        </td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->year}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form onclick="return confirm('Are you sure ? ')" action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type='submit' class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
<br>

@endsection
