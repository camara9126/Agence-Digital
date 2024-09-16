<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="?admin=home">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Accueil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Contacts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="?admin=contacts&type=nouveaux"> Nouveau </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="?admin=contacts&type=approuve"> Approuvés</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="?admin=contacts&type=rejete"> Regetés</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?admin=profil">
                <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lists menu-icon"></i></span>
                <span class="menu-title">Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="?admin=blog"> Blogs </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="?admin=projet"> Projets</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="?admin=service"> Services</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="?admin=temoin"> Temoignages</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?admin=team">
                <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                <span class="menu-title">Personnels</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="?admin=">
                <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                <span class="menu-title">Clients</span>
            </a>
        </li> -->
        
        <li class="nav-item documentation-link">
            <a class="nav-link"
                href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html"
                target="_blank">
                <span class="icon-bg">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <!-- <div class="sidebar-profile-img">
                                <img src="assets/images/faces/face28.png" alt="image">
                            </div> -->
                            <div class="sidebar-profile-text">
                                <p class="mb-1">
                                    <?= ucwords($_SESSION["admin"]->prenom.$_SESSION["admin"]->nom) ?> <br>
                                    <?= ucfirst($_SESSION["admin"]->fonction) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="badge badge-danger">3</div> -->
                </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                    <span class="menu-title">Take Tour</span></a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="?admin=logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>

<div class="main-panel">
    <div class="content-wrapper">