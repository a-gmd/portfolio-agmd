<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== LINE ICONS ===============-->
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Accueil</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <!-- nav -->
        <nav class="nav container padd-15">
            <!-- nav logo -->
            <a href="#" class="nav-logo">
                <h2>Adam</h2>
            </a>
            <!-- nav menu -->
            <div class="nav-menu" id="nav-menu">
                <!-- nav list -->
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">A propos de moi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#experience" class="nav-link">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a href="/public_/portfolio.php" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                <!-- nav close -->
                <div class="nav-close" id="nav-close">
                    <i class="lni lni-close"></i>
                </div>
            </div>
            <!-- nav btn -->
            <div class="nav-btns">
                <!-- theme change btn -->
                <i class="lni lni-pallet change-theme" id="theme-button"></i>
                <!-- toggle btn -->
                <div class="nav-toggle" id="nav-toggle">
                    <i class="lni lni-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main-content">
        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="container">
                <!-- intro -->
                <div class="intro">
                    <!-- avatar image -->
                    <img src="/assets/img/avatar-1.svg" alt="Adam">
                    <!-- info -->
                    <h1>Adam GAZMAGAMADOV</h1>
                    <span><span class="info-text">Etudient en BTS SIO option SISR</span></span>
                    <!-- social icons -->
                    <ul class="social-icons">
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                    <!-- button -->
                    <div>
                        <a href="#" class="btn btn-default">Recrutez-moi</a>
                    </div>
                    <!-- scroll down mouse wheel -->
                    <div class="scroll-down">
                        <a href="#" class="mouse-wrapper">
                            <span>Défiler vers le bas</span>
                            <span class="mouse">
                                <span class="wheel"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== About ===============-->
        <section class="about section" id="about">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">A propos de moi</h2>
                <div class="row">
                    <div class="about-img padd-15">
                        <!-- avatar img -->
                        <img src="/assets/img/avatar-2.svg" alt="">
                    </div>
                    <div class="about-content padd-15">
                        <div class="rounded">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <!-- about text -->
                                    <p>Je suis Adam Gazmagamadov, j'ai 22 ans, né le 16 décembre 1999.</p>
                                        <p>Etudiant en deuxième année de BTS SIO option SISR (Solutions d'infrastructure, systèmes et réseaux)</p>
                                    <div>
                                        <a href="#" class="btn btn-default">Télécharger le CV</a>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Réseau</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 75%; background: rgb(108,108,229);"></div>
                                                <div class="skill-percent">75%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Système</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 85%; background: rgb(255,209,92);"></div>
                                                <div class="skill-percent">85%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Cybersécurité</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 60%; background: rgb(255,76,96);"></div>
                                                <div class="skill-percent">60%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text padd-15">
                                    <p>Pour plus d'informations sur le BTS SIO et SISR <i id="link-info">Cliquez-ici</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-thumbs-up"></i>
                        <div class="details">
                            <h3>6</h3>
                            <p>Project fini</p>
                        </div>
                    </div>
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-thumbs-up"></i>
                        <div class="details">
                            <h3>74</h3>
                            <p>TP</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Services ===============-->
        <section class="services section">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Compétences et Services</h2>
                <div class="row">
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(108,108,229);">
                            <img src="/assets/img/service-1.png" alt="">
                            <h3>Réseau</h3>
                            <p>Réseaux locaux virtuels (VLAN)</p>
                            <p>DHCP, DNS, Filtrage, NAT/PAT</p>
                            <p>Routage statique / dynamique</p>
                            <p>IPv6/IPv4</p>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,215,76);">
                            <img src="/assets/img/service-2.png" alt="">
                            <h3>Système</h3>
                            <p>Windows 11/10/7</p>
                            <p>Debian 11/10/9(avec ou sans interfaces graphique)</p>
                            <p>Ubuntu (avec ou sans interface graphique)</p>
                            <p>Windows Server 2016/2019</p>                            
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,123,139);">
                            <img src="/assets/img/service-3.png" alt="">
                            <h3>Services</h3>
                            <p>Installation / Configuration de service Apache</p>
                            <p>Installation / Configuration de service DHCP</p>
                            <p>Installation / Configuration de servie FTP</p>
                            <p>Rôles AD</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Experience ===============-->
        <section class="section" id="experience">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Experience</h2>
                <div class="row">
                    <!-- education -->
                    <div class="education padd-15">
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2021 - 2022
                                        </h3>
                                        <h3 class="timeline-title">Lycée La Martinière Duchère</h3>
                                        <p class="timeline-text">BTS Service Informatiques aux Organisations option Solutions d'Infrastructure, Systèmes et Réseaux 2ème année</p>
                                    </div>
                                     <!-- timeline item -->
                                     <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2020 - 2021
                                        </h3>
                                        <h3 class="timeline-title">Lycée La Martinière Duchère</h3>
                                        <p class="timeline-text">BTS Service Informatiques aux Organisations option Solutions d'Infrastructure, Systèmes et Réseaux 1ère année</p>
                                    </div>
                                     <!-- timeline item -->
                                     <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2019 - 2020
                                        </h3>
                                        <h3 class="timeline-title">Lycée Professionnel Edmond Labbé</h3>
                                        <p class="timeline-text">FCIL, Formation Complémentaire d'initiative Locale</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- experience -->
                    <div class="experience padd-15">
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-briefcase timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 3 Janvier 2022 - 18 Février 2022
                                        </h3>
                                        <h3 class="timeline-title">Stage Informatique Réseaux et Systèmes</h3>
                                        <p class="timeline-text">Pôle 9 MJC Centre Social de Saint Rambert</p>
                                    </div>
                                     <!-- timeline item -->
                                     <div class="timeline-item">
                                        <i class="lni lni-briefcase timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 17 Mai 2021 - 26 Juin 2021
                                        </h3>
                                        <h3 class="timeline-title">Stage Informatique Réseaux et Systèmes</h3>
                                        <p class="timeline-text">Pôle 9 MJC Centre Social de Saint Rambert</p>
                                    </div>
                                     <!-- timeline item -->
                                     <div class="timeline-item">
                                        <i class="lni lni-briefcase timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> Mars 2020 - Septembre 2020
                                        </h3>
                                        <h3 class="timeline-title">Employé Libre-Service Logistique</h3>
                                        <p class="timeline-text">Castorama Dardilly, Parc d'affaire, Route de Paisy, 69570 Dardilly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--=============== Portfolio ===============-->
        <section class="portfolio section" id="portfolio">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Portfolio</h2>
                <div class="row">
                    <div class="portfolio-filter padd-15">
                        <div class="portfolio-filter-inner">
                            <button type="button" class="active" data-filter="all">Tout</button>
                            <button type="button" data-filter="reseau">Réseau</button>
                            <button type="button" data-filter="système">Système</button>
                            <button type="button" data-filter="cybersecurity">Cybersécurité</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="reseau">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="/assets/img/1.png">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Réseau</span>
                            <h3 class="portfolio-item-title">Déploiement d'un Réseau Wifi public</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                     <!-- portfolio item -->
                     <div class="portfolio-item padd-15" data-category="système">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="/assets/img/2.png">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Système</span>
                            <h3 class="portfolio-item-title">Déploiement de GLPI & FusionInventory</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                     <!-- portfolio item -->
                     <div class="portfolio-item padd-15" data-category="reseau">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="/assets/img/3.png">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Réseau</span>
                            <h3 class="portfolio-item-title">Raccordement d'un site</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                     <!-- portfolio item -->
                     <div class="portfolio-item padd-15" data-category="système">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="/assets/img/4.svg">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Système</span>
                            <h3 class="portfolio-item-title"></h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>  
                </div>
            </div>
        </section>

        <!--=============== Contact ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Contactez-moi</h2>
                <div class="row">
                    <!-- contact box -->
                    <div class="contact-box padd-15">
                        <div class="contact-data">
                            <!-- contact information -->
                            <div class="contact-information">
                                <h3 class="contact-subtitle">M'appeller</h3>
                                <span class="contact-description">
                                    <i class="lni lni-phone contact-icon"></i>
                                    +33 7 68 90 91 97
                                </span>
                            </div>
                             <!-- contact information -->
                             <div class="contact-information">
                                <h3 class="contact-subtitle">M'envoyer un mail</h3>
                                <span class="contact-description">
                                    <i class="lni lni-user contact-icon"></i>
                                    adam.gazmagamadov@outlook.fr
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- contact form -->
                    <form action="" class="contact-form padd-15">
                        <div class="contact-inputs">
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="email" class="contact-input">
                                <label for="" class="contact-label">Email</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="text" class="contact-input">
                                <label for="" class="contact-label">Objet</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content contact-area">
                                <textarea name="" id="" cols="30" rows="10" class="contact-input"></textarea>
                                <label for="" class="contact-label">Message</label>
                                <span></span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">Envoyer Message</a>
                    </form>
                </div>
            </div>
        </section>
        <!--=============== Footer ===============-->
        <footer class="footer">
            <div class="container">
                <div class="footer-text padd-15">
                    <p>Copyright &copy;Tout droits réservés Adam</p>
                </div>
            </div>
        </footer>
    </main>
    <!--=============== Theme Customize ===============-->
    <div class="customize-theme">
        <div class="card">
            <h2>Personnalisez l'interface</h2>
            <p>Gérez la taille de la police, la couleur et l'arrière-plan</p>
            <!-- font size -->
            <div class="font-size">
                <h3>Taille de police</h3>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>
            <!-- color -->
            <div class="color">
                <h3>Couleur</h3>
                <div class="choose-color">
                    <span class="color-1"></span>
                    <span class="color-2"></span>
                    <span class="color-3 active"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>
            <!-- background -->
            <div class="background">
                <h3>Arrière-plan</h3>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Clair</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Faible</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Sombre</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============== INFO++ BTS AND SISR ===============-->
    <div class="info-bts">
        <div class="card">
            <h2>Informations Complémentaire sur le BTS SISR</h2>
            <!-- INFO++ BTS -->
            <h3>Qu'est ce que le BTS SIO</h3>
            <p>Le Brevet de Technicien Supérieur Services informatique aux organisations (SIO) s'adresse à ceux qui souhaitent se former en deux ans aux métiers
                d'administrateur réseau ou de développeur pour intégrer directement le marché du travail ou continuer des études dans le domaine de l'informatique.<br>
                C'est un diplome reconnu par l'état de niveau Bac+2. Il remplace depuis septembre 2011 l'ancien BTS Informatique de Gestion (BTS IG).</p>
            <h3>Options du BTS SIO</h3>
            <!-- INFO++ SISR -->
            <h4>(SISR)</h4>
            <h5>Solutions d'Infrastructures, Système et Réseaux</h5>
            <p>Le BTS SIO, spécialité SISR, s’adresse aux étudiants attirés par la conception et la maintenance d’infrastructures réseaux. Vous pourrez ainsi travailler comme
                technicien d’infrastructure, technicien systèmes et réseaux, pilote d’exploitation, informaticien support et déploiement, ou en tant qu’administrateur systèmes
                et réseaux. Les débouchés sont donc nombreux et les missions variées.<br>
                A la fin de votre formation, vous serez capable d’assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques de votre
                entreprise. Une mission passionnante et de grandes responsabilités en perspective, dans un monde du travail où le numérique prend une place de plus en plus
                importante.<br>
                Les techniciens supérieurs en informatique option SISR, peuvent accéder à divers métiers à la sortie du BTS. Ils peuvent par exemple devenir Adminstrateur
                systèmes et réseaux, un gestionnaire de parc informatique ou même un support systèmes et réseaux et analyste d'exploitation informatique.</p>
            <h4>(SLAM)</h4>
            <h5>Solutions Logicielles et Applications Métier</h5>
            <p>Le BTS SIO SLAM s’adresse à des étudiants attirés par les métiers informatiques liés à la conception ainsi qu’à la maintenance de programmes applicatifs.
                Les élèves inscrits à l’option SLAM pourront travailler par la suite comme intégrateur web, analyste d’application, gestionnaire de bases de données, ou
                encore, technicien d’études informatiques.<br>
                Vous serez capable de gérer un parc informatique dans son intégralité, comme d’administrer un réseau au sein d’une entreprise. Vous serez qualifié pour intégrer,
                sécuriser et configurer des serveurs pour votre employeur. Vous pourrez également participer à la mise en place d’équipements d’interconnexion.<br>
                Grâce à ces nombreuses compétences, vous pourrez vous lancer rapidement sur le marché du travail. Pour ceux qui souhaitent poursuivre leurs études, le programme
                Concepteur Web, option développeur ou chef de projet digital, est idéal.</p>
        </div>
    </div>

    <!--=============== SWIPER JS ===============-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!--=============== JS ===============-->
    <script src="/assets/js/main.js"></script>
</body>
</html>