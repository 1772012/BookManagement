@extends('layouts.app')

@section('content')

    <div class="row mt-3 md-3">
        <div class="col">
            <h1>Book List</h1>
        </div>
        <div class="col col-lg-2 float-right">
            @if ($authuser->role == 'admin')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBookModal">
                Add Book
            </button>
            @endif
        </div>
    </div>

    <hr>

    <!-- Add Book Modal -->
    <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="addBookLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookLabel">Add Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('books.create')
                </div>
            </div>
        </div>
    </div>

    @if (count($books) > 0)
        @foreach ($books as $book)
            <div class="card p-3 mt-2 md-2">
                <div class="row">
                    <div class="col">
                        <img src="/storage/doc_photos/{{ $book->doc_photo }}" style="width: 100%">
                    </div>
                    <div class="col">
                        <div class="row-sm">
                            <h4><b><a href="/books/{{ $book->id }}">{{ $book->title }}</a></b></h4>
                        </div>
                        <hr>
                        <div class="row-sm">
                            <small><b>ISBN : {{ $book->isbn }}</b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Author : {{ $book->author }}</b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Publisher : {{ $book->publisher }}</b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Category : {{ $book->name }}</b></small>
                        </div>
                    </div>
                    @if ($authuser->role == 'admin')
                    <div class="col-md-auto align-self-center">
                        <a href="books/{{ $book->id }}/edit" class="btn btn-secondary">Edit</a>
                        {!! Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' =>
                        'float-right']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger ml-2']) }}
                        {!! Form::close() !!}
                    </div>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No book Found</p>
    @endif

@endsection
