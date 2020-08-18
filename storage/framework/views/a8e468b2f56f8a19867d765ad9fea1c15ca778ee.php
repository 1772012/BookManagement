<?php $__env->startSection('content'); ?>

    <a href="/books" class="btn btn-secondary">Go Back</a>

    <div class="card p-3 mt-2 md-2">
        <img src="/storage/doc_photos/<?php echo e($book->doc_photo); ?>" style="width: 100%">
    </div>

    <div class="card p-3 mt-2 md-2">
        <h1><?php echo e($book->title); ?></h1>
        <hr>
        <h5>ISBN</h5>
        <b><?php echo e($book->isbn); ?></b>
        <hr>
        <h5>Author</h5>
        <b><?php echo e($book->author); ?></b>
        <hr>
        <h5>Publisher</h5>
        <b><?php echo e($book->publisher); ?></b>
        <hr>
        <h5>Category</h5>
        <b><?php echo e($book->name); ?></b>
    </div>

    <div class="card p-3 mt-2 md-2">
        <h4>Description</h4>
        <p><?php echo e($book->description); ?></p>
    </div>

    <?php if($authuser->role == 'admin'): ?>
    <div class="card p-3 mt-2 md-2">
        <div class="row">
            <div class="col">
                <h4><b>Actions</b></h4>
            </div>
            <div class="col-md-auto align-self-center">
                <a href="<?php echo e($book->id); ?>/edit" class="btn btn-secondary">Edit</a>
                <?php echo Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' =>
                'float-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger ml-2'])); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>

    

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/books/show.blade.php ENDPATH**/ ?>