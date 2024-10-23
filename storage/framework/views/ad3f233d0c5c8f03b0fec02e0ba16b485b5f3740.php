<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Amazing E-Book</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: red;
          color: white;
          text-align: center;
        }
        </style>
</head>
<body class="">
    <div id="app">
        <?php if(auth()->guard()->guest()): ?>
            
        <nav class="navbar navbar-expand-md bg-primary shadow">
            <div class="container">
                <a class="navbar-brand text-dark position-absolute" style="right: 530px;" href="<?php echo e(url('/')); ?>">
                    <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Amazing E - Book</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="btn btn-warning m-2 " style="" href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign In')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="btn btn-warning m-2 " style="" href="<?php echo e(route('register')); ?>"><?php echo e(__('Sign Up')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                
            </div>
        </nav>
        <?php else: ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
            <a class="navbar-brand text-dark position-absolute" style="right: 530px;" href="<?php echo e(url('/')); ?>">
                <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Amazing E - Book</h1>
            </a>
            <br>
            <br>
          </div>
          <div class=".container">
            <ul class="nav bg-warning justify-content-center shadow">
              <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold hover" href="<?php echo e(url('/home')); ?>" style="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(route('index.order')); ?>" style="">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(route('index.profile')); ?>" style="">Profile</a>
              </li>
              <?php if(Auth::check()): ?>
              <?php if(Auth::user()->first_name && Auth::user()->role_name ==  'admin'): ?>
              <li class="nav-item">
                <a class="nav-link  text-dark font-weight-bold" href="<?php echo e(route('index.user')); ?>"  style="">Account Maintenance</a>
              </li>
              <?php endif; ?>
              <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(route('logout')); ?>" style=""  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
              </li>
            </ul>
        </div>
        <?php endif; ?>
        <div class="mb-3">
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
        <div>
            <div class="footer bg-primary">
                <p>&copy Amazing E-Book 2022</p>
              </div>
        </div>
    </body>
    <!-- Footer -->

</html>
<?php /**PATH C:\Users\Sujadi\Documents\Folder-Tugas\laravel\AmazingEbook2022\resources\views/layouts/app.blade.php ENDPATH**/ ?>