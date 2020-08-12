{!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Category name']) }}
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}
{!! Form::close() !!}
