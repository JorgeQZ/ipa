
<div class="main-content">
    <div class="container">
        <?php if(get_field('icono')): ?>
        <div class="icon">
            <?php echo file_get_contents(get_field('icono')); ?>
        </div>
        <?php endif; ?>
        <div class="title"><?php the_title(); ?></div>
        <div class="desc">
            <?php the_content(); ?>
        </div>
    </div>
</div>