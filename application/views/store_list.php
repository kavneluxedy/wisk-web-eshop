<head>
    <title><?= $page_title; ?></title>
</head>

<?php $this->load->model('Store_model');
$this->Store_model->getCategorie(); ?>

<!-- <a href="" id="show" class="d-flex flex-row justify-content-center important">Show Element</a>
<div id="hidden">
    I'm visible !
</div> -->

<div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <h5 class="card-header text-center bg-dark text-warning">Ventes</h5> <!-- Conteneur de catégories -->
            <div class="card-body d-flex flex-column bg-dark text-light justify-content-center">
                <h5 class="card-title text-center align-items-start">Catégories</h5>
                <p class="card-text text-center">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
                <a href="<?= base_url('Store/categories'); ?>" class="col-2 btn btn-dark justify-content-center text-warning">Découvrir</a> <!-- Lien vers différentes catégories -->
            </div>
        </div>

        <!-- <div class="modal-body">
            <h5>Popover in a modal</h5>
            <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
            <hr>
            <h5>Tooltips in a modal</h5>
            <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
        </div> -->

        <div class="carousel-item">
            <?php
            foreach ($items as $row) // Début de la lecture en boucle (Table wisk_shop_items)   
            { ?>
                <img src="<?php echo $row->item_img; ?>" alt="...">
            <?php } // Fin de la lecture en boucle 
            ?>
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>

        <h5 class="card-title card-header text-center mt-3 mb-3 border-dark">Produits ajoutés</h5>
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-center ">
                <div class="card" style="width: 18rem;">
                    <!-- carte du produit -->

                    <form method="POST" class="form-group" action="<?= base_url('Store/caddy'); ?>">
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
                                        <img src="<?= $row->item_img ?>" width="auto" height="100">
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