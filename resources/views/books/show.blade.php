@extends('layouts.app')

@section('content')

    <a href="/books" class="btn btn-secondary">Go Back</a>

    <div class="card p-3 mt-2 md-2">
        <img src="/storage/doc_photos/{{ $book->doc_photo }}" style="width: 100%">
    </div>

    <div class="card p-3 mt-2 md-2">
        <h1>{{$book->title}}</h1>
        <hr>
        <h5>ISBN</h5>
        <b>{{$book->isbn}}</b>
        <hr>
        <h5>Author</h5>
        <b>{{$book->author}}</b>
        <hr>
        <h5>Publisher</h5>
        <b>{{$book->publisher}}</b>
        <hr>
        <h5>Category</h5>
        <b>{{$book->name}}</b>
    </div>

    <div class="card p-3 mt-2 md-2">
        <h4>Description</h4>
        <p>{{$book->description}}</p>
    </div>

    <div class="card p-3 mt-2 md-2">
        <div class="row">
            <div class="col">
                <h4><b>Actions</b></h4>
            </div>
            <div class="col-md-auto align-self-center">
                <a href="{{ $book->id }}/edit" class="btn btn-secondary">Edit</a>
                {!! Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' =>
                'float-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger ml-2']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    

    

@endsection
