<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h2><b><?php echo e($course->course_name); ?></b></h2>
                            <h5><?php echo e($course->course_prof); ?></h5>

                            <hr>

                            <?php $__currentLoopData = $courses_information; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course_information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h5><b><?php echo e(__('courses.average_time')); ?></b> <?php echo e($course_information->course_time); ?> <?php echo e(__('courses.minutes')); ?></h5>
                                <h5><b><?php echo e(__('courses.average_vote')); ?></b> <?php echo e($course_information->average_vote); ?>/30L</h5>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <hr>

                            <h5 class="font-weight-bold"><?php echo e(__('courses.news')); ?></h5>

                            <hr>

                            <h5 class="font-weight-bold"><?php echo e(__('courses.notes')); ?></h5>

                            <form method="post" action="#">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <textarea class="form-control" id="course_note_textarea" rows="2" placeholder="<?php echo e(__('courses.notes_description')); ?>"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo e(__('courses.add_note')); ?></button>
                            </form>

                            <?php $__currentLoopData = $courses_notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course_notes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <hr>
                                <p><b><?php echo e($course_notes->id); ?></b>. <?php echo e($course_notes->course_note); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <hr>

                            <h5 class="font-weight-bold"><?php echo e(__('courses.questions')); ?></h5>

                            <form method="post" action="#">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <textarea class="form-control" id="course_question_textarea" rows="2" placeholder="<?php echo e(__('courses.question_description')); ?>"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo e(__('courses.add_question')); ?></button>
                            </form>

                            <?php $__currentLoopData = $courses_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course_questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <hr>
                                <p><b><?php echo e($course_questions->id); ?></b>. <?php echo e($course_questions->course_question); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/montanino/MEGAsync/Projects/Studiorum/resources/views/courses/information.blade.php ENDPATH**/ ?>