<!-- Affichage -->
<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-4">
                <h1 class="display-4 text-white">Les formulaires</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12  col-md-8 col-lg-6 mb-4">
                <div class="card text-white card-has-bg click-col">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">PHP HTML CSS</small>
                            <h4 class="card-title mt-2 "><a class="text-white" herf="#"><?= $url ?? '' ?></a></h4>
                            <h5 class="card-title mt-0 "><a class="text-white" herf="#"><?= $email ?? '' ?></a></h4>
                                <small><?= $birthday ?? '' ?></small>
                                <p class="lead">J\'ai decouvert le web grace à..... </p>
                                <small class="mt-4 d-block">Née en <?= $country ?? '' ?></small>
                                <small class="d-block"><?= $postalcode ?? '' ?></small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <img class="mr-3 mb-3 rounded-circle" src="<?= $file_name ?>" alt="user avatar" style="max-width:80px">
                                <div class="media-body">
                                    <h6 class="my-0 text-white d-block"><?php echo "$firstname ?? '' ,  $lastname ?? ''" ?></h6>
                                    <small><?= $study ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>