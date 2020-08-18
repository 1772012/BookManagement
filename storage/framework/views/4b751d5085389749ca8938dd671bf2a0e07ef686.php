<?php $__env->startSection('content'); ?>
    <!-- Three columns of text below the carousel -->
    <div class="row m-3 p-2">
        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo e(asset('assets/images/avinash.jpg')); ?>" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Avinash</h2>
            <hr>
            <p>Saya tuh orangnya suka bahas traveling sana sini jadi kadang kalo udah bahas itu pasti panjang lebar. Kadang suka
                jailin orang biasanya jailin si Zaldy
            </p>
        </div>

        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo e(asset('assets/images/zaldy.jpg')); ?>" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Zaldy Ignatius Auw</h2>
            <hr>
            <p>Saya orangnya optimis. Kadang kalo ada masalah, saya bisa langsung cari solusi tapi beda
                ceritanya kalo masalahnya pada saat ngoding wkwkwk</p>
        </div>

        <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo e(asset('assets/images/kafka.jpg')); ?>" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Kafka Febianto Agiharta</h2>
            <hr>
            <p>Saya ga suka banyak bicara kecuali udah diajak bicara sama orang baru saya mulai. Gaya hidup yang sederhana aja,
                simpel ga usah dibikin ribet sana sini :D</p>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\BookManagement\resources\views/pages/about.blade.php ENDPATH**/ ?>