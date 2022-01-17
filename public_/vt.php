<?php require_once(__DIR__ . '/../bootstrap.php'); ?>
<?php require_once(__DIR__ . '/../scriptjs.php'); ?>

<?php html_partials('header') ?>

<?php html_partials('menu') ?>

<main class="main-content">
    

    <!-- footer -->
    <?php $footer = footer(); ?>
</main>

<?php $js = js(); ?>

<?php html_partials('footer') ?>