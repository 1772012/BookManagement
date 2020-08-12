{!! Form::open(['action' => 'BooksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('isbn', 'ISBN') }}
    {{ Form::text('isbn', '', ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
</div>
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Book title']) }}
</div>
<div class="form-group">
    {{ Form::label('author', 'Author') }}
    {{ Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Book author']) }}
</div>
<div class="form-group">
    {{ Form::label('publisher', 'Publisher') }}
    {{ Form::text('publisher', '', ['class' => 'form-control', 'placeholder' => 'Publisher']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
</div>
<div class="form-group">
    {{Form::label('category_id', 'Category')}}
    {{Form::select('category_id', $select, null, ['placeholder' => 'Pick a category...', 'class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::file('doc_photo')}}
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}
{!! Form::close() !!}
