

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>
          <div class="card border-primary shadow">
              <h1 class="text-center py-4 card-header bg-primary">Account</h1>
                <table class="table  table-striped">
                    <thead class="table-warning">
                      <tr>
                        <th style="" scope="col">Account</th>
                        <th style="" scope="col">Action</th>
                        <th style="" scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td style=""><?php echo e($data->first_name); ?> - <?php echo e($data->role_name); ?></td>
                        <td style=""><a href="<?php echo e(route('edit.user',$data->id)); ?>">Update Role</a></td>
                        <td style=""><a href="<?php echo e(route('destroy.user',$data->id)); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sujadi\Documents\Folder-Tugas\laravel\AmazingEbook2022\resources\views/userIndex.blade.php ENDPATH**/ ?>