<?php require_once(__DIR__ . '/../../bootstrap.php') ?>
<?php require_once(__DIR__ . '/../../scriptjs.php') ?>

<?php html_partials('header') ?>
<?php html_partials('menu') ?>

<main class="main-content pages">
    <section class="home pages" id="home">
        <!-- intro -->
        <div class="intro">
            <!-- info -->
            <h1>Installation d'un serveur HTTP<br>Sous Linux</h1>
            <h2 class="sub-title">Contexte</h2>
            <p class="padd-15">L’objectif cet AP était de mettre en serveur HTTP via le logiciels Apache , extrêmement répandue lorsqu’il s’agit d’hébergé un site web.</p>
            <h2 class="sub-title">Objectifs TP</h2>
            <ul>
                <li>Mise en place des machines virtuelles</li>
                <li>Installation et mise en service d'Apache</li>
                <li>Les notions d’hôte virtuels</li>
                <li>Gérer les différents ports</li>
            </ul>
            <h2 class="sub-title">Pratique</h2>
            <p class="padd-15">On commence par créer deux machines virtuelles de type Linux dans mon cas "Debian 10" pouvant communiquer entre elles, sachant qu'une machine sera le serveur Apache en ligne de commande et l’autre fera office de « client » et sera configurer en interface graphique</p>
            <p class="padd-15">Nous installons ensuite Apache, pour cela il faut d'abord taper la commande suivant "apt update", qui permettra de mettre à jour les paquets. Ensuite on fera la commande "apt-get install apache2"afin de l'installer</p>
            <p class="padd-15">Mise en place des hôtes virtuels qui permet de gérer plusieurs arborescence d’un même site web</p>
            <p class="padd-15">Pour finir on configure les différents ports, chacun permettant d’accéder a un hôte différents, donc ce qui nous permettra d'afficher des pages différentes</p>
        </div>
    </section>
</main>

<?php js() ?>
<?php html_partials('footer') ?>