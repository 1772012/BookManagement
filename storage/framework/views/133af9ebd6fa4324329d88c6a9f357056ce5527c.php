<?php echo Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']); ?>

<div class="form-group">
    <?php echo e(Form::label('name', 'Name')); ?>

    <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Category name'])); ?>

</div>
<?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary mt-3'])); ?>

<?php echo Form::close(); ?>

<?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/categories/create.blade.php ENDPATH**/ ?>