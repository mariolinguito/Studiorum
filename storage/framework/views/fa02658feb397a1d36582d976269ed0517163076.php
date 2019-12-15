<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <table class="table table-borderless">
                        <br>
                        <tbody>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($course->id); ?></td>
                                <td><?php echo e($course->course_name); ?></td>
                                <td><?php echo e($course->course_prof); ?></td>
                                <td>
                                    <a href="<?php echo e(route('course_join', $course->id)); ?>" class="btn btn-primary float-right"><?php echo e(__('courses.table_join')); ?></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/john/MEGAsync/Projects/Studiorum/resources/views/courses/index.blade.php ENDPATH**/ ?>