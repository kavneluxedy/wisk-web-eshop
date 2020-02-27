<head>
    <title><?= $page_title; ?></title>
    <script src="<?= base_url('assets/js/app.js'); ?>" type="text/javascript" ></script>
</head>

<div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <h5 class="card-header text-center">Ventes</h5> <!-- Conteneur de catégories -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center align-items-start">Catégories</h5>
                <p class="card-text text-center">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
                <a href="<?= site_url('Store/categories'); ?>" class="btn btn-dark align-items-center justify-content-center text-warning">Découvrir</a> <!-- Lien vers différentes catégories -->
            </div>
        </div>



        <div class="row">
            <div class="col-auto d-flex flex-row justify-content-end">
                <div class="card" style="width: 18rem;">
                    <!-- carte du produit -->

                    <ul class="list-group list-group-flush">

                        <h5 class="card-title card-header text-center">Produits ajoutés</h5>

                        <div class="card-body">
                            <p class="card-text text-secondary">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
                            <div id="demo" value=""></div>
                        </div>

                        <?php
                        foreach ($items as $row) // Début de la lecture en boucle (Table wisk_shop_items)
                        { ?>
                            <li class="list-group-item">id :
                                <p> <?= $row->item_id ?> </p>
                            </li>

                            <li class="list-group-item">Catégorie :
                                <p> <?= $row->cat_id ?> </p>
                            </li>

                            <li class="list-group-item">Nom :
                                <p> <?= $row->item_name ?> </p>
                            </li>

                            <li class="list-group-item">Description :
                                <p> <?= $row->item_desc ?> </p>
                            </li>

                            <li class="list-group-item">
                                <div>
                                    <!-- TODO : Lecture d'Image en base de donnée -->
                                    <img src="<?= base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="auto" height="100">
                                </div>
                            </li>

                            <li class="list-group-item">Prix :
                                <p> <?= $row->item_price ?> </p>
                            </li>

                            <li class="list-group-item">Stock :
                                <p> <?= $row->item_stock ?> </p>
                            </li>

                            <li class="list-group-item d-flex flex-row justify-content-center">
                                <button class="btn btn-dark text-warning" type="button" placeholder="Ajouter au panier">Ajouter au panier</button>
                            </li>

                        <?php } // Fin de la lecture en boucle 
                        ?>
                    </ul>
                </div>

                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">

                        <h5 class="card-title card-header text-center invisible">Produits ajoutés</h5>

                        <div class="card-body">
                            <p class="card-text text-secondary">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
                        </div>

                        <?php
                        foreach ($items as $row) // Début de la lecture en boucle (Table wisk_shop_items)
                        { ?>
                            <li class="list-group-item">id :
                                <p> <?= $row->item_id ?> </p>
                            </li>

                            <li class="list-group-item">Catégorie :
                                <p> <?= $row->cat_id ?> </p>
                            </li>

                            <li class="list-group-item">Nom :
                                <p> <?= $row->item_name ?> </p>
                            </li>

                            <li class="list-group-item">Description :
                                <p> <?= $row->item_desc ?> </p>
                            </li>

                            <li class="list-group-item">
                                <div>
                                    <!-- TODO : Lecture d'Image en base de donnée -->
                                    <img src="<?= base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="auto" height="100">
                                </div>
                            </li>

                            <li class="list-group-item">Prix :
                                <p> <?= $row->item_price ?> </p>
                            </li>

                            <li class="list-group-item">Stock :
                                <p> <?= $row->item_stock ?> </p>
                            </li>

                            <li class="list-group-item d-flex flex-row justify-content-center">
                                <input class="btn btn-dark text-warning" type="submit" placeholder="Ajouter au panier"></input>
                            </li>

                        <?php } // Fin de la lecture en boucle 
                        ?>
                    </ul>
                </div>

                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">

                        <h5 class="card-title card-header text-center invisible">Produits ajoutés</h5>

                        <div class="card-body">
                            <p class="card-text text-secondary">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
                        </div>

                        <?php
                        foreach ($items as $row) // Début de la lecture en boucle (Table wisk_shop_items)
                        { ?>
                            <li class="list-group-item">id :
                                <p> <?= $row->item_id ?> </p>
                            </li>

                            <li class="list-group-item">Catégorie :
                                <p> <?= $row->cat_id ?> </p>
                            </li>

                            <li class="list-group-item">Nom :
                                <p> <?= $row->item_name ?> </p>
                            </li>

                            <li class="list-group-item">Description :
                                <p> <?= $row->item_desc ?> </p>
                            </li>

                            <li class="list-group-item">
                                <div>
                                    <!-- TODO : Lecture d'Image en base de donnée -->
                                    <img src="<?= base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="auto" height="100">
                                </div>
                            </li>

                            <li class="list-group-item">Prix :
                                <p> <?= $row->item_price ?> </p>
                            </li>

                            <li class="list-group-item">Stock :
                                <p> <?= $row->item_stock ?> </p>
                            </li>

                            <li class="list-group-item d-flex flex-row justify-content-center">
                                <input class="btn btn-dark text-warning" type="submit" placeholder="Ajouter au panier"></input>
                            </li>

                        <?php } // Fin de la lecture en boucle 
                        ?>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>
</div>