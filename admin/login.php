
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-5 mx-auto">
                <?php if(isset($message)): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $message ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    <div class="auth-form-light text-left p-5">
                        <?php require_once("themes/flash.php"); ?>
                        <div class="card-header bg-primary">
                            <h4 class="text-white text-center">Connexion</h4>
                        </div>

                        <form class="pb-2" method="post" action="">
                            <div class="form-group">
                                <input type="text" name="identifiant"
                                    class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Entrer votre identiant">
                            </div>
                            <div class="form-group">
                                <input type="password" name="mdp"
                                    class="form-control form-control-lg " id="exampleInputPassword1"
                                    placeholder="Entrer votre mot de passe">
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-outline-primary btn-lg font-weight-medium auth-form-btn"
                                    name="connecter">Se
                                    connecter</button>
                            </div>

                            <div class="mb-2 mt-2">
                                <a type="button" href="index.php"
                                    class="btn btn-block btn-outline-success auth-form-btn">
                                    Accueil </a>
                            </div>
                            <!-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                    href="?admin=register" class="text-info">Create</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
