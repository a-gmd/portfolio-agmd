<?php require_once(__DIR__ . '/../bootstrap.php'); ?>
<?php require_once(__DIR__ . '/../scriptjs.php'); ?>

<?php html_partials('header') ?>

<?php html_partials('menu') ?>

<main class="main-content">
    <section class="home" id="home">
        <div class="container">
            <!-- intro -->
            <div class="intro">
                <!-- info -->
                <h1>Bienvenue dans mon portfolio</h1>
                <span>Ce portfolio contient les différents travaux et stages effectués auc cours de ces deux dernière années de BTS SIO au
                    Lycée de la Martinière Duchère.</span>
            </div>
        </div>
    </section>
</main>

<?php js() ?>

<?php html_partials('footer') ?>