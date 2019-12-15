<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <form method="post" action="<?php echo e(route('courses.store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="course_name"><b><?php echo e(__('courses.name')); ?></b></label>
                                            <input type="text" class="form-control" name="course_name"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_prof"><b><?php echo e(__('courses.prof_name')); ?></b></label>
                                            <input type="text" class="form-control" name="course_prof"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_time"><b><?php echo e(__('courses.average_time')); ?></b></label>
                                            <input type="text" class="form-control" name="course_average_time"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_average_vote"><b><?php echo e(__('courses.average_vote')); ?></b></label>
                                            <input type="text" class="form-control" name="course_average_vote"/>
                                        </div>

                                        <br>

                                        <button type="submit" class="btn btn-primary"><?php echo e(__('courses.create')); ?></button>
                                        <button type="submit" class="btn btn-danger"><?php echo e(__('courses.back')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/montanino/MEGAsync/Projects/Studiorum/resources/views/courses/create.blade.php ENDPATH**/ ?>