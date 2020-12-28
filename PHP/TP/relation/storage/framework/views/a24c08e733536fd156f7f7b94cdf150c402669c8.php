<h2>Product Name: </h2>
<p><?php echo e($product->name); ?> || $<?php echo e(($product->price)); ?></p>

<h3>Product Belongs to</h3>

<ul>
    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($category->title); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Users\pierre\Documents\GitHub\YNOV_B2\PHP\TP\relation\resources\views/products/show.blade.php ENDPATH**/ ?>