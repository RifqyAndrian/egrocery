<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-12">
            <?php if(session('status')): ?>
            <div class="alert alert-success">
            <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
              <div class="p-4 text-right">
              <?php if(Auth::check()): ?>
                  <?php if(Auth::user()->first_name && Auth::user()->role_name ==  'admin'): ?>
              <a href="<?php echo e(route('create.item')); ?>" class="btn btn-warning btn-sm " style="">Add Item</a>
                  <?php endif; ?>
              <?php endif; ?>
              </div>
                <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-2">
                        <div class="card border-0 text-center">
                            <img src="<?php echo e(asset('img/vegan.png')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text"><?php echo e($d->item_name); ?></p>
                              <p class="card-text"><a href="<?php echo e(route('show.item',$d->id)); ?>" style="">Detail</a></p>
                            </div>
                          </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/home.blade.php ENDPATH**/ ?>