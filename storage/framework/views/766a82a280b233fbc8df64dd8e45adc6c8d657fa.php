<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>
            <div class="p-4">
            <?php if(Auth::check()): ?>
                <?php if(Auth::user()->first_name && Auth::user()->role_name ==  'admin'): ?>
            <a href="<?php echo e(route('create.ebook')); ?>" class="btn btn-warning btn-sm " style="">Add E-Book</a>
                <?php endif; ?>
            <?php endif; ?>
            </div>
            
            <div class="card border-primary shadow">
              <h1 class="text-center card-header py-4 border-bottom bg-primary">E-Book</h1>
                <table class="table border border-2 table-striped">
                    <thead class="table-warning">
                      <tr>
                        <th scope="col" style="">Author</th>
                        <th scope="col" style="">Title</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td style=""><?php echo e($data->author); ?></td>
                        <td><a href="<?php echo e(route('show.book',$data->id)); ?>" style=""><?php echo e($data->title); ?></a></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sujadi\Documents\Folder-Tugas\laravel\AmazingEbook2022\resources\views/home.blade.php ENDPATH**/ ?>