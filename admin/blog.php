<?php

    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");
?>

    <!-- Begin Page Content -->
<div class="container-scroller">
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
            </div> -->
            <?php if(isset($_GET["type"]) && $_GET["type"] == "view"): ?>
                <?php require_once("admin/ad_edElement/forBlog.php"); ?>
            <?php else: ?>
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="m-0 font-weight-bold text-white">Blog</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="?admin=blog&type=view" class="btn btn-sm btn-warning">Ajouter</a>                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                        <?php foreach($blogs as $b): ?>
                            <div class="col-lg-6 col-xl-4 mb-5 mt-3 wow fadeIn" data-wow-delay=".3s">
                                <div class="blog-item position-relative bg-light rounded">
                                    <img src="Assets/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;"><?= $b->categorie ?></span>
                                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                        <!-- <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                            <a href="" class="btn text-white">Read More</a>
                                        </div> -->
                                        <!-- <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
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
                                        <h6 class="py-2 text-info"><?=$b->nom?> </h6>
                                        <span class="text-danger"><?=date("d/m/Y", strtotime($b->datecreation))?></span>
                                        <h5 class="text-warning">By<?=ucfirst($b->prenom_aut)?> <?=ucfirst($b->nom_aut)?></h5>
                                    </div>
                                    <div class="blog-coment d-flex justify-content-between px-4 py-3 border bg-primary rounded-bottom">
                                        <a href="?admin=blog&type=view&id=<?=$b->id?>" class="text-white "><small><i class="fas fa-eye me-2 text-warning"></i></small></a>
                                        <!-- <a href="?admin=forBlog" class="text-white"><small><i class="fas fa-view me-2 text-secondary"></i>Ajout</small></a> -->
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                                <div class="blog-item position-relative bg-light rounded">
                                    <img src="Assets/img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Mobile App</span>
                                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                            <a href="" class="btn text-white ">Read More</a>
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
                                        </div>
                                    </div>
                                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                        <img src="Assets/img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                        <h5 class="">By Daniel Martin</h5>
                                        <span class="text-secondary">30 jan 2023</span>
                                        <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                    </div>
                                    <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                        <a href="#" class="text-white"><small><i class="fas fa-eye me-2 text-secondary"></i>5324Vues</small></a>
                                        <a href="?sunucode=blog" class="text-white"><small><i class="fa fa-comme me-2 text-secondary"></i>Lire</small></a>
                                    </div>
                                </div>
                            </div> -->
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
    require_once("themes/footer.php");
?>