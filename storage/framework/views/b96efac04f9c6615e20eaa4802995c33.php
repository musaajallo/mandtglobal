<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildSchema()); ?>

</div>
<?php /**PATH /home/musaajallo/software_development/projects/web_apps/mandtglobal/vendor/filament/schemas/resources/views/components/grid.blade.php ENDPATH**/ ?>