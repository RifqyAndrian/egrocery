<?php $__env->startSection('content'); ?>
<div class="container" style="">
    <div class="row justify-content-center">
        
        <div class="col-12">
            <div class="card mb-3 border-0">
                <div class="card-header border-0">
                    <h5 class="card-title"><b><?php echo e($item->item_name); ?></b></h5>
                </div>
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php echo e(asset('img/vegan.png')); ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Rp. <?php echo number_format($item->price,0,',','.'); ?></b></h5>
                      <p class="card-text"><?php echo e($item->description); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-2 text-right">
                <form method="POST" action="<?php echo e(route('store.order')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" hidden name="account_id" value="<?php echo e(Auth::user()->id); ?>">
                    <input type="text" hidden name="item_id" value="<?php echo e($item->id); ?>">
                    <button type="submit" class="btn btn-warning rounded-pill">Buy</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/ItemShow.blade.php ENDPATH**/ ?>