<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form class="form-inline" action="/search" accept-charset="UTF-8" method="get">
                <div class="input-group flex-fill">
                    <input type="search" name="search" id="search" value="" placeholder="Search for courses, notes or info" class="form-control" aria-label="Search this site">
                    <div class="input-group-append">
                        <input type="submit" name="commit" value="Search" class="btn btn-primary" data-disable-with="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <a href="#"><?php echo e(__('home.notifications')); ?> <span class="badge badge-light">4</span></a>
                    <br>
                    <a href="<?php echo e(route('courses.create')); ?>"><?php echo e(__('home.option_1')); ?></a>
                    <br>
                    <a href="<?php echo e(route('courses.index')); ?>"><?php echo e(__('home.option_2')); ?></a>
                    <hr>

                    <b>Latino</b>
                    <br>
                    <b>Comparate</b>
                    <br>
                    <b>Letteratuta</b>
                    <br>
                    <b>Filosofia</b>
                    <br>
                    <b>Storia Moderna</b>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/montanino/MEGAsync/Projects/Studiorum/resources/views/home.blade.php ENDPATH**/ ?>