

<?php $__env->startSection('titulo'); ?>
  Página de Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cabecalho'); ?>
    Adicionar Série
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form action="/series/criar" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group" enctype="multipart/form-data">
        <label for="nome" class="">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Danyllo\Desktop\subsequente web\controle-series\resources\views/series/create.blade.php ENDPATH**/ ?>