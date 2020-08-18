<?php $__env->startSection('content'); ?>

    <div class="row mt-3 md-3">
        <div class="col">
            <h1>Book List</h1>
        </div>
        <div class="col col-lg-2 float-right">
            <?php if($authuser->role == 'admin'): ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBookModal">
                Add Book
            </button>
            <?php endif; ?>
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
                    <?php echo $__env->make('books.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php if(count($books) > 0): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card p-3 mt-2 md-2">
                <div class="row">
                    <div class="col">
                        <img src="/storage/doc_photos/<?php echo e($book->doc_photo); ?>" style="width: 100%">
                    </div>
                    <div class="col">
                        <div class="row-sm">
                            <h4><b><a href="/books/<?php echo e($book->id); ?>"><?php echo e($book->title); ?></a></b></h4>
                        </div>
                        <hr>
                        <div class="row-sm">
                            <small><b>ISBN : <?php echo e($book->isbn); ?></b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Author : <?php echo e($book->author); ?></b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Publisher : <?php echo e($book->publisher); ?></b></small>
                        </div>
                        <div class="row-sm">
                            <small><b>Category : <?php echo e($book->name); ?></b></small>
                        </div>
                    </div>
                    <?php if($authuser->role == 'admin'): ?>
                    <div class="col-md-auto align-self-center">
                        <a href="books/<?php echo e($book->id); ?>/edit" class="btn btn-secondary">Edit</a>
                        <?php echo Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' =>
                        'float-right']); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger ml-2'])); ?>

                        <?php echo Form::close(); ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No book Found</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/books/index.blade.php ENDPATH**/ ?>