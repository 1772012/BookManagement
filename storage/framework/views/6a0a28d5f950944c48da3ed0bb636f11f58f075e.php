<?php echo Form::open(['action' => 'BooksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

<div class="form-group">
    <?php echo e(Form::label('isbn', 'ISBN')); ?>

    <?php echo e(Form::text('isbn', '', ['class' => 'form-control', 'placeholder' => 'ISBN'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('title', 'Title')); ?>

    <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Book title'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('author', 'Author')); ?>

    <?php echo e(Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Book author'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('publisher', 'Publisher')); ?>

    <?php echo e(Form::text('publisher', '', ['class' => 'form-control', 'placeholder' => 'Publisher'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('description', 'Description')); ?>

    <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('category_id', 'Category')); ?>

    <?php echo e(Form::select('category_id', $select, null, ['placeholder' => 'Pick a category...', 'class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::file('doc_photo')); ?>

</div>
<?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary mt-3'])); ?>

<?php echo Form::close(); ?>

<?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/books/create.blade.php ENDPATH**/ ?>