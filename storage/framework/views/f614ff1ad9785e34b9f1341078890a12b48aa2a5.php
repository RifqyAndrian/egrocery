<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
              <h1 class="py-4 card-header">Update Role</h1>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update.user',$data->id)); ?>">
                        <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="form-group row">
                        <label style="" for="name" class="col-md-2 col-form-label text-md-left"><?php echo e(__('Role')); ?></label>
                        <div class="col-md-10" style="">
                            <select id="name" type="text" class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="role_name"  required autocomplete="name" autofocus>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                    <button class="btn btn-warning btn-sm btn-block " style="">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/userEdit.blade.php ENDPATH**/ ?>