<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>

          <div class="card border-0">
              <h1 class="py-4 shadow card-header border-0">Cart</h1>
                <table class="table border border-0 table-striped">
                    <thead class="table-warning">
                      <tr>
                        <th scope="col" style="">Item</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td style=""><?php echo e($data->item_name); ?></td>
                          <td style="">Rp. <?php echo number_format($data->price,0,',','.'); ?></td>
                          <td style=""><a href="<?php echo e(route('destroy.order',$data->id)); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a></td>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>
                <div class="row justify-content-end">
                    <div class="col-3"><b>TOTAL : Rp. <?php echo number_format($total,0,',','.'); ?></b></div>
                    <div class="col-2">
                            <a href="<?php echo e(route('submit.order')); ?>" class="btn btn-warning rounded-pill" style="">Submit</a>
                    </div>

                </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/orderIndex.blade.php ENDPATH**/ ?>