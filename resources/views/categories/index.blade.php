@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 p-0 text-left">
        <a class="btn btn-success mb-2" href="{{ route('categories.create') }}">Create New Category</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Categories List</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="container" style="margin-top:30px;">
                    <div class="row">
                        <div class="col-md-4">
                            <ul id="tree1">
                                @foreach ($categories as $category)
                                <li><a href="#">{{ $category->category_name }}</a>
                                    <ul>
                                        @foreach ($category->childrenCategories as $childCategory)
                                        <li>{{ $childCategory->category_name }}
                                            @if ($childCategory->categories)
                                            <ul>
                                                @foreach ($childCategory->categories as $childCategory)
                                                <li>{{ $childCategory->category_name }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection