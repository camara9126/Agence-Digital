    
    <!--Topbar Start-->
        <?php
        require_once("Partials/header.php");
        ?>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <?php
        require_once("Partials/navbar.php");
        ?>
        <!-- Navbar End -->

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-0 animated slideInDown">Our Blog</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Fact Start -->
        <!-- <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Success in getting happy customer</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Thousands of successful business</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Fact End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-2 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Blog</h5>
                    <h3>Latest Blog & News</h3>
                </div>
                <section id="uix-design">
                    <?php if(isset($bid)): ?>
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-10 col-xl-10 wow fadeIn" data-wow-delay=".3s">
                            <img src="Assets/img/blog-1.jpg" class="img-fluid rounded-top" style="height: 20%; width: 90% ;" alt=""><br>
                            <h3><?= ucwords($bid->nom)?></h3><br> 
                            <textarea name="" cols="100" rows="50" id="" style="border: none;">
                                <?= $bid->description ?>
                            </textarea>
                        </div>
                    </div>
                    <?php endif; ?>
                </section>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <?php
        require_once("Partials/footer.php");
        ?>
        <!-- Footer End -->