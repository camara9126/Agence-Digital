        <?php if(isset($_GET["type"]) && $_GET["type"] == "view"): ?>
                <?php require_once("Views/elements/blog.php"); ?>
        <?php endif; ?>
       
        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="Assets/img/carousel-1.jpg" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Meilleur Solution Informatique</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Agence De Solutions Informatiques Innovantes</h1>
                                <!-- <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p> -->
                                <a href="?sunucode=about" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En savoir plus</button></a>
                                <a href="?sunucode=home#contact" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez-nous</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Meilleur Solution Informatique</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">Sevices Numériques De Qualité Dont Vous Avez Vraiment Besoin!</h1>
                                <!-- <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p> -->
                                <a href="?sunucode=about" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">En savoir plus</button></a>
                                <a href="?sunucode=home#contact" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactez-nous</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Réussir à satisfaire vos clients.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Des milliers d'entreprises prospères.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Des milliers de clients satisfaits adorent SunuCode.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Avis 5 étoiles donnés par des clients satisfaits.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- About Start -->
        <section id="about">
            <div class="container-fluid py-5 my-5">
                <div class="container pt-5">
                    <div class="row g-5">
                        <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                            <div class="h-100 position-relative">
                                <img src="Assets/img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                                <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                    <img src="Assets/img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                            <h2 class="text-primary">Apropos de Nous</h2>
                            <h1 class="mb-4">Bienvenue chez <b>SunuCode.org</b>, votre partenaire de confiance pour toutes vos solutions numériques.</h1>
                            <p>Chez <b>SunuCode.org</b>, nous sommes une équipe passionnée de professionnels du digital, comprenant des développeurs, des designers, des spécialistes du marketing et des stratèges. Avec des années d'expérience et une expertise approfondie dans divers domaines, nous sommes prêts à relever tous les défis pour garantir la croissance et la réussite de votre entreprise.</p>
                            <p class="mb-4">Nous croyons en une approche collaborative et personnalisée. Chaque projet commence par une compréhension approfondie de vos objectifs, de votre marché et de vos défis uniques. Nous travaillons en étroite collaboration avec vous à chaque étape du processus pour garantir que chaque solution est parfaitement alignée avec votre vision et vos attentes.</p>
                            <a href="?sunucode=about" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Plus de Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About End -->


        <!-- Services Start -->
        <section id="service">
            <div class="container-fluid services py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Nos Services</h5>
                        <h1>Des Services Spécialement Concus Pour Votre Business</h1>
                    </div>
                    <div class="row g-5 services-inner">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">Web Design</h4>
                                        <p class="mb-4">Notre service de web design allie créativité et expertise technique pour concevoir des sites web uniques, esthétiquement attrayants et conviviaux, offrant ainsi une expérience utilisateur exceptionnelle et renforçant la présence en ligne de mes clients.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">Web Development</h4>
                                        <p class="mb-4">Notre service de développement web propose des solutions personnalisées et performantes pour créer des sites web modernes, fonctionnels et esthétiquement attrayants, répondant ainsi aux besoins spécifiques de mes clients et de leur public cible.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">UI/UX Design</h4>
                                        <p class="mb-4">Nous créons des expériences utilisateur exceptionnelles et des interfaces utilisateur intuitives pour répondre aux besoins de mes clients grace à mes connaissances pratiques.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">WebMaster</h4>
                                        <p class="mb-4">Mon service de gestion de site assure une maintenance régulière, une sécurité renforcée et une optimisation continue pour garantir que votre site fonctionne de manière optimale, vous permettant ainsi de vous concentrer sur votre contenu et vos objectifs commerciaux.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">Digital Marketing</h4>
                                        <p class="mb-4">Notre service de marketing digital offre des stratégies personnalisées pour maximiser la visibilité en ligne et stimuler la croissance de votre entreprise.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">Developpement WordPress</h4>
                                        <p class="mb-4">Notre service de développement WordPress crée des sites web sur mesure, alliant fonctionnalités avancées et design captivant pour représenter au mieux votre marque en ligne.</p>
                                        <a href="?sunucode=service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- Services End -->


        <!-- Project Start -->
        <section id="project">
            <div class="container-fluid project py-5 my-5">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-3 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                            <h5 class="text-primary">Nos Project</h5>
                            <h1>Nos Projets Récement Réalisés</h1>
                        </div>
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">Web design</h4>
                                            <p class="m-0 text-white">Web Analysis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">Cyber Security</h4>
                                            <p class="m-0 text-white">Cyber Security Core</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">Mobile Info</h4>
                                            <p class="m-0 text-white">Upcomming Phone</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">Web Development</h4>
                                            <p class="m-0 text-white">Web Analysis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">Digital Marketing</h4>
                                            <p class="m-0 text-white">Marketing Analysis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="Assets/img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="#" class="text-center">
                                            <h4 class="text-secondary">keyword Research</h4>
                                            <p class="m-0 text-white">keyword Analysis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- Project End -->


        <!-- Blog Start -->
        <section id="blog">
            <div class="container-fluid blog py-5 mb-3">
                <div class="container">
                    <div class="text-center mx-auto mb-3-0 pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Nos Blog</h5>
                        <h1>Derniére Blog Et Actualités</h1>
                    </div>
                    <div class="row g-5 justify-content-center">
                        <?php foreach($blogs as $b): ?>
                        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="blog-item position-relative bg-light rounded">
                                <img src="Assets/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;"><?= $b->categorie ?></span>
                                <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                    <!-- <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                        <a href="" class="btn text-white">Read More</a>
                                    </div>
                                    <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                        <div class="blog-icon-1">
                                            <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                        </div>
                                        <div class="blog-icon-2">
                                            <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                            <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                            <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                    <img src="Assets/img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                    <h5 class="">By <?=ucfirst($b->prenom_aut)?> <?=ucfirst($b->nom_aut)?></h5>
                                    <span class="text-secondary"><?=$b->datecreation?></span>
                                    <p class="py-2"><?=$b->nom?></p>
                                </div>
                                <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                    <a href="#" class="text-white"><small><i class="fas fa-eye me-2 text-secondary"></i>5324 Vues</small></a>
                                    <a href="?sunucode=home&type=view&id=<?=$b->id?>" class="text-white"><small><i class="fa fa-view me-2 text-secondary"></i>Lire</small></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- Blog End -->


        <!-- Team Start -->
        <section id="team">
            <div class="container-fluid py-5 mb-5 team">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Notre Equipe</h5>
                        <h1>Rencontrer Notre Equipe D'Experts</h1>
                    </div>
                    <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                        <div class="rounded team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="Assets/img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4 class="">Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-Assets/img rounded-circle">
                                        <img src="Assets/img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4 class="">Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="Assets/img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4 class="">Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="Assets/img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4 class="">Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- Team End -->

        <!-- Testimonial Start -->
        <section id="temoin">
            <div class="container-fluid testimonial py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Nos Temoignages</h5>
                        <h1>Nos Clients Disent !</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                        <div class="testimonial-item border p-4">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="Assets/img/testimonial-1.jpg" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-secondary">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-3">
                                <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                            </div>
                        </div>
                        <div class="testimonial-item border p-4">
                            <div class=" d-flex align-items-center">
                                <div class="">
                                    <Assets/img src="Assets/img/testimonial-2.jpg" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-secondary">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-3">
                                <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                            </div>
                        </div>
                        <div class="testimonial-item border p-4">
                            <div class=" d-flex align-items-center">
                                <div class="">
                                    <img src="Assets/img/testimonial-3.jpg" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-secondary">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-3">
                                <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                            </div>
                        </div>
                        <div class="testimonial-item border p-4">
                            <div class=" d-flex align-items-center">
                                <div class="">
                                    <Assets/img src="Assets/img/testimonial-4.jpg" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-secondary">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                        <i class="fas fa-star me-1 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-3">
                                <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            

        <!-- Testimonial End -->

        

        <!-- Contact Start -->
        <section id="contact">
            <div class="container-fluid py-5 mb-5">
                <div class="row text-center">
                        <!-- <div class="col-md-7 text-center"> -->
                            <?php  if(isset($message)): ?>
                                <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
                                    <strong><?= $message ?></strong>
                                    <a type="button" href="index.php" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </a>
                                </div>
                            <?php endif;?>
                        <!-- </div> -->
                    </div>
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Entrer En Contact</h5>
                        <h1 class="mb-3">Contact Pour Toute Question</h1>
                    </div>
                    
                    <div class="contact-detail position-relative p-5">
                        <div class="row g-5 mb-5 justify-content-center">
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="text-primary">Address</h4>
                                        <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank Str, NY</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fa fa-phone text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="text-primary">Appelez-nous au</h4>
                                        <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fa fa-envelope text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="text-primary">Envoyez-nous Un Email</h5>
                                        <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                                <div class="p-5 h-100 rounded contact-map">
                                    <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="p-5 rounded contact-form">
                                    <form action="" method="post">
                                    <div class="mb-4">
                                            <input type="text" class="form-control border-0 py-3" name="nom" placeholder="Nom Complet">
                                        </div>
                                        <div class="mb-4">
                                            <input type="email" class="form-control border-0 py-3" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control border-0 py-3" name="tel" placeholder="Téléphone">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control border-0 py-3" name="projet" placeholder="Votre Project">
                                        </div>
                                        <div class="mb-4">
                                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" type="text" name="details" placeholder="Message"></textarea>
                                        </div>
                                        <div class="text-start">
                                            <button class="btn bg-primary text-white py-3 px-5" type="submit"  name="Ajouter">Envoyer</button>
                                        </div>
                                    </form>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
            
        <!-- Contact End -->


       