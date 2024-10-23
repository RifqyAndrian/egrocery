<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php if(empty($data->photo)): ?>
                    <?php echo e(url('img/default-image.png')); ?>

                    <?php else: ?>
                    <?php echo e(url('')); ?>/img/thumbnail/<?php echo e($data->photo); ?>

                    <?php endif; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('update.profil',$data->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <input type="text" name="role_name" value="<?php echo e($data->role_name); ?>" hidden id="">
                            <div class="form-group row" >
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('First Name')); ?></label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e($data->first_name); ?>" required autocomplete="name" autofocus>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('Middle Name')); ?></label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="middle_name" value="<?php echo e($data->middle_name); ?>" autocomplete="name" autofocus>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('Last Name')); ?></label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e($data->last_name); ?>" required autocomplete="name" autofocus>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('Role')); ?></label>
                                <div class="col-md-10">
                                   <input type="text" class="form-control border-primary " value="<?php echo e($data->role_name); ?>" readonly>
                                    </select>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="gender" class="col-md-2 col-form-label ctext-md-left">Gender</label>
                                <div class="col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="male"   <?php echo e($data->gender == 'male' ? 'checked' : ''); ?>>
                                    <label style="" class="form-check-label" for="male">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="female" <?php echo e($data->gender == 'female' ? 'checked' : ''); ?>>
                                    <label style="" class="form-check-label" for="female">
                                      Female
                                    </label>
                                  </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="" for="email" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('E-Mail')); ?></label>

                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control border-primary  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($data->email); ?>" required autocomplete="email">

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="password-confirm" class="col-md-2 col-form-label ctext-md-left"><?php echo e(__('Password')); ?></label>

                                <div class="col-md-10">
                                    <input id="password-confirm" type="password" class="form-control border-primary " name="password" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" class="col-md-2 col-form-label ctext-md-left">Photo</label>
                                <div class="mb-3 col-md-10">
                                <input type="file" class="form-control-file" name="photo" id="" placeholder=""
                                       aria-describedby="fileHelpId">
                            </div>
                            </div>
                                <div class="col-md-12">
                                    <button style="" type="submit" class="btn btn-block btn-warning ">
                                        <?php echo e(__('Update Profile')); ?>

                                    </button>
                                </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iqbal\OneDrive\Documents\Freelance\AmazingEbook2022\resources\views/profilIndex.blade.php ENDPATH**/ ?>