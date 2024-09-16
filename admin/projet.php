<?php

    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");
?>
    <?php if(isset($_GET["type"]) && $_GET['type'] == "add"): ?>

        <?php 
            $title= 'Formulaire d\'ajout de projet';
            require_once("admin/ad_edElement/forProjet.php");
        ?>
        
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="m-0 font-weight-bold text-white">Projets</h4>
                </div>
                <div class="col-md-2">
                    <a href="?admin=projet&type=add" class="btn btn-sm btn-warning">Ajouter</a>                        
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5 mt-4">
        <?php foreach($projet as $p): ?>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="Assets/img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="?admin=projet&type=add&id=<?=$p->id?>" class="text-center">
                                <h4 class="text-secondary"><?=$p->nom?></h4>
                                <!-- <p class="m-0 text-white">Web Analysis</p> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       
    </div>

<?php

    require_once("themes/footer.php");
?>