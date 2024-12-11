<section class="breadcrumbs-custom">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?php echo home_url(); ?>">Домашня сторінка</a></li>
            <?php if (is_singular()): ?>
                <li class="active"><?php the_title(); ?></li>
            <?php elseif (is_archive()): ?>
                <li class="active"><?php single_cat_title(); ?></li>
            <?php elseif (is_search()): ?>
                <li class="active">Результати пошуку</li>
            <?php elseif (is_404()): ?>
                <li class="active">Сторінка не знайдена</li>
            <?php endif; ?>
        </ul>
    </div>
</section>
