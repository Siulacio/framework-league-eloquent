<?php if(isset($user)): ?>
    Hola <?php echo e($user); ?>

<?php else: ?>
    No existe el Usuario
<?php endif; ?>
