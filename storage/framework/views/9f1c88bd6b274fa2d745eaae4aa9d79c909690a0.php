

<?php $__env->startSection('content'); ?>
<div class="container" style="">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow border-primary ">
              <h1 class="text-center py-4 card-header bg-primary border-primary">Add E-Book</h1>
                <div class="card-body">
                <form method="POST" action="<?php echo e(route('store.book')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                      </div>
                      <div class="col-10">
                        <input type="text" class="form-control border-primary " id="title" name="title">
                      </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Author</label>
                      </div>
                      <div class="col-10">
                        <input type="text" class="form-control border-primary " name="author" id="author">
                      </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                      </div>
                      <div class="col-10">
                        <textarea class="form-control border-primary " id="description" name="description" rows="3"></textarea>
                      </div>
                    </div>
                      <button class="btn btn-warning btn-block " type="submit">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sujadi\Documents\Folder-Tugas\laravel\AmazingEbook2022\resources\views/BookCreate.blade.php ENDPATH**/ ?>