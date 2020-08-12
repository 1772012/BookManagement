@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    {!! Form::open(['action' => ['CategoriesController@update', $category->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Category name']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}
    {!! Form::close() !!}
@endsection
