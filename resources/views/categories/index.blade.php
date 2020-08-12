@extends('layouts.app')

@section('content')
    <div class="row mt-3 md-3">
        <div class="col">
            <h1>Category List</h1>
        </div>
        <div class="col col-lg-2 float-right">
            @if ($authuser->role == 'admin')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">
                Add Category
            </button>
            @endif
        </div>
    </div>

    <hr>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('categories.create')
                </div>
            </div>
        </div>
    </div>

    @if (count($categories) > 0)
        @foreach ($categories as $category)
            <div class="card p-3 mt-2 md-2">
                <div class="row">
                    <div class="col">
                        <h4>{{ $category->name }}</h4>
                    </div>
                    @if ($authuser->role == 'admin')
                        <div class="col-md-auto align-self-center">
                            <a href="categories/{{ $category->id }}/edit" class="btn btn-secondary">Edit</a>
                            {!! Form::open(['action' => ['CategoriesController@destroy', $category->id], 'method' => 'POST',
                            'class' => 'float-right']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger ml-2']) }}
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No Category Found</p>
    @endif
@endsection
