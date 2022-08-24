@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <div class="card-title">
                        <h5>New Category</h5>
                    </div>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-primary" href="{{route('categories.index')}}">Back</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label for="restaurant_name">Restaurant Name</label>
                            <input type="text" name="restaurant_name" class="form-control" value="{{old('restaurant_name')}}" id="restaurantName" placeholder="Restaurant Name">
                            @error('restaurant_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="category_name">Category Name</label>
                            <input type="text" name="category_name" class="form-control" value="{{old('category_name')}}" id="categoryName" placeholder="Category Name">
                            @error('category_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="parent_id">Parent Category</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="" selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="status">Status</label>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Published</label>
                                <input class="form-check-input" type="checkbox" name="status" role="switch" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2 text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection