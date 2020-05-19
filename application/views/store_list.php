<head>
    <title><?= $page_title; ?></title>
</head>

<a href="" id="show">Show Element</a>
<div id="hidden">I'm visible !</div>

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

        <div class="card mb-2 d-flex">
            <h5 class="card-header text-center text-warning bg-dark border-light">Ventes</h5> <!-- Conteneur de catégories -->
        </div>

        <div class="card-body d-flex flex-column bg-dark align-items-center">
            <h5 class="card-title text-center text-warning">Catégories</h5>
            <p class="card-text text-center text-warning">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
            <a href="<?= base_url('Store/categories'); ?>" class="col-auto btn btn-warning text-dark">Découvrir</a> <!-- Lien vers différentes catégories -->
        </div>

        <h5 class="card-title card-header text-center text-warning mt-3 mb-3 border-light bg-dark">Produits ajoutés</h5>
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-center ">
                <div class="card" style="width: 18rem;">
                    <!-- carte du produit -->

                    <form method="POST" class="form-group" action="<?= base_url('Store/basket'); ?>">
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
                                        <img src="<?= $row->item_img; ?>" alt="Photo du produit à vendre" width="250" height="auto">
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