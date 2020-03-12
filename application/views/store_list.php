<head>
    <title><?= $page_title; ?></title>
</head>

<div class="carousel-wrap">
    <div class="owl-carousel item">

        <!-- -_-_-_-_-_-_-_ -_-_-_-_-_-_-_ CAROUSEL -_-_-_-_-_-_-_ -_-_-_-_-_-_-_ -->

        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
        <div class="item"><img src="http://placehold.it/150x150"></div>
    </div>
</div>

<!-- -_-_-_-_-_-_-_ -_-_-_-_-_-_-_          -_-_-_-_-_-_-_ -_-_-_-_-_-_-_ -->

<div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <h5 class="card-header text-center">Ventes</h5> <!-- Conteneur de catégories -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center align-items-start">Catégories</h5>
                <p class="card-text text-center">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
                <a href="<?= base_url('Store/categories'); ?>" class="btn btn-dark align-items-center justify-content-center text-warning">Découvrir</a> <!-- Lien vers différentes catégories -->
            </div>
        </div>

        <h5 class="card-title card-header text-center mt-3 mb-3 border-dark">Produits ajoutés</h5>
        <div class="row">
            <div class="col-auto d-flex flex-row justify-content-end">
                <div class="card" style="width: 18rem;">
                    <!-- carte du produit -->


                    <form method="POST" class="form-group" action="<?= base_url('Basket'); ?>">
                        <ul class="list-group list-group-flush">

                            <div class="card-body">
                                <p class="card-text text-secondary">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
                            </div>

                            <?php
                            foreach ($items as $row) // Début de la lecture en boucle (Table wisk_shop_items)
                            { ?>
                                <li class="list-group-item d-flex flex-inline">id :
                                    <p> <?= $row->item_id ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Catégorie :
                                    <p> <?= $row->cat_id ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Nom :
                                    <p> <?= $row->item_name ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Description :
                                    <p> <?= $row->item_desc ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">
                                    <div>
                                        <!-- TODO : Lecture d'Image en base de donnée -->
                                        <img src="<?= base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="auto" height="100">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Prix :
                                    <p> <?= $row->item_price ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Stock :
                                    <p> <?= $row->item_stock ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-row justify-content-center">
                                    <input class="btn btn-dark text-warning" id="submit" type="submit" value="Ajouter au panier"></input>
                                </li>

                            <?php } // Fin de la lecture en boucle 
                            ?>
                        </ul>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>