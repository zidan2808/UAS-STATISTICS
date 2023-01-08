@extends('layouts.admin')

@section('content')


<!-- Content Row -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0  font-weight-bold text-gray-800">Welcome, Admin</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
<div class="row">

    <!-- card 1 -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-2xs font-weight-bold text-primary text-uppercase mb-1">
                            Owner Website</div>
                        <div class="text-lg mb-2 font-weight-bold text-gray-800">013-Darmawan Jiddan</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card 2 -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-2xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Class</div>
                        <div class="text-lg mb-2 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card 3 -->
    @foreach($categories as $category)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-2xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Students</div>
                        <div class="text-lg mb-2 font-weight-bold text-gray-800">{{$category->products_count}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- Content Row -->



<!-- studyprogram -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Study Program</h1>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-info">
                <tr class="text-white">
                    <th style="width:10%">No</th>
                    <th style="width:30%">Name</th>
                    <th style="width:30%">Students Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->products_count}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>

<!-- class  -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Class List</h1>
</div>
<div class="card">
    <div class="">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-info ">
                    <tr class="text-white">
                        <th style="width:10%">No</th>
                        <th style="width:30%">Name</th>
                        <th style="width:30%">Students Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->products_count}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>

<!-- students -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Students List</h1>
    <div class="mr-2 text-center align-items-center">
        <form method="get">
            <div class="dropdown ">
                <span class=" font-weight-bold text-gray-800 text-uppercase mr-2 ">Sort by</span>
                <select class="btn btn-white border-dark text-left" name="sortingBy" onchange="this.form.submit()">
                    <option {{ $sorting === 'default'? 'selected' : null }} value="DEFAULT">DEFAULT</option>
                    <option {{ $sorting === 'NIM'? 'selected' : null }} value="NIM">NIM</option>
                    <option {{ $sorting === 'GENDER'? 'selected' : null }} value="GENDER">GENDER</option>
                    <option {{ $sorting === 'GPA'? 'selected' : null }} value="GPA">GPA</option>
                    <option {{ $sorting === 'YEAR'? 'selected' : null }} value="YEAR">YEAR</option>
                </select>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-info">
                    <tr class="text-white">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Study Program</th>
                        <th>Class</th>
                        <th>GPA</th>
                        <th>Year</th>
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
