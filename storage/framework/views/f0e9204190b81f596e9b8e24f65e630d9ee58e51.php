


<?php $__env->startSection('titulo'); ?>
  Página de Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cabecalho'); ?>
  Lista de Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <a href="/series/criar" class="btn btn-primary mb-2">Adicionar</a>  
    <ul class="list-group">
       <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item"><?= $serie; ?></li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Danyllo\Desktop\subsequente web\controle-series\resources\views/series/index.blade.php ENDPATH**/ ?>