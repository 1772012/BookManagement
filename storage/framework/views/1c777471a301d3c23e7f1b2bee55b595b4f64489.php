<?php $__env->startSection('content'); ?>
    <div class="row mt-3 md-3">
        <div class="col">
            <h1>Category List</h1>
        </div>
        <div class="col col-lg-2 float-right">
            <?php if($authuser->role == 'admin'): ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">
                Add Category
            </button>
            <?php endif; ?>
        </div>
    </div>

    <hr>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $__env->make('categories.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php if(count($categories) > 0): ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card p-3 mt-2 md-2">
                <div class="row">
                    <div class="col">
                        <h4><?php echo e($category->name); ?></h4>
                    </div>
                    <?php if($authuser->role == 'admin'): ?>
                        <div class="col-md-auto align-self-center">
                            <a href="categories/<?php echo e($category->id); ?>/edit" class="btn btn-secondary">Edit</a>
                            <?php echo Form::open(['action' => ['CategoriesController@destroy', $category->id], 'method' => 'POST',
                            'class' => 'float-right']); ?>

                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                            <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger ml-2'])); ?>

                            <?php echo Form::close(); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No Category Found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/categories/index.blade.php ENDPATH**/ ?>