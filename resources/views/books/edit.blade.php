@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>
    {!! Form::open(['action' => ['BooksController@update', $book->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('isbn', 'ISBN') }}
        {{ Form::text('isbn', $book->isbn, ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Book title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('author', 'Author') }}
        {{ Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => 'Book author']) }}
    </div>
    <div class="form-group">
        {{ Form::label('publisher', 'Publisher') }}
        {{ Form::text('publisher', $book->publisher, ['class' => 'form-control', 'placeholder' => 'Publisher']) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', $book->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
    </div>
    <div class="form-group">
        {{Form::label('category_id', 'Category')}}
        {{Form::select('category_id', $select, null, ['placeholder' => 'Pick a category...', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::file('doc_photo')}}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}
    {!! Form::close() !!}
@endsection