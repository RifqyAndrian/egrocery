<?php $__env->startSection('content'); ?>
<div class="container" style="">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>
          <div class="p-2 text-left">
            <?php if(Auth::check()): ?>
                <?php if(Auth::user()->name && Auth::user()->role_name ==  'admin'): ?>
            <a href="<?php echo e(route('home')); ?>" class="btn btn-warning btn-sm ">Back</a>
                <?php endif; ?>
            <?php endif; ?>
            </div>
            <div class="card border-primary shadow">
                <h1 class="text-center py-4 card-header bg-primary">Detail Item</h1>
                <table class="table">
                    <tbody>
                      <tr>
                        <td scope="col" class="table-info">Title</td><td> <?php echo e($item->title); ?></td>
                      </tr>
                      <tr>
                          <td scope="col" class="table-info">Author</td><td><?php echo e($item->author); ?></td>
                      </tr>
                    <tr>
                        <td scope="col" class="table-info">Description</td><td><p><?php echo e($item->description); ?></p> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-2 text-right">
                <form method="POST" action="<?php echo e(route('store.order')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" hidden name="account_id" value="<?php echo e(Auth::user()->id); ?>">
                    <input type="text" hidden name="ebook_id" value="<?php echo e($item->id); ?>">
                    <button type="submit" class="btn btn-warning rounded-pill">Rent</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/BookShow.blade.php ENDPATH**/ ?>