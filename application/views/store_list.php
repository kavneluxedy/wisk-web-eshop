<head><title><?= $page_title; ?></title></head>

<div class="row">
    <div class="col-6">

        <!-- Conteneur de catégories -->
        <div class="card">
            <h5 class="card-header">En ventes</h5>
            <div class="card-body">
                <h5 class="card-title">Catégories</h5>
                <p class="card-text">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
                <a href="<?= site_url('Store/categories'); ?>" class="btn btn-secondary">Découvrir</a>
            </div>
        </div>

        <!-- carte du produit -->
        <div class="card" style="width: 18rem;">

            <img src="<?= 'https://maxesport.gg/medias/Maxesport-Maillots-Vitality-Noir-1.jpg' ?>" class="card-img-top" alt="Maillot Wisk E-Sport" witdh="300">
            <div class="card-body">
                <h5 class="card-title">Produits ajoutés</h5>
                <p class="card-text">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
            </div>
            <ul class="list-group list-group-flush">



                <?php foreach ($items as $row) { ?>
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
                            <img src="<?php echo base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="200">
                        </div>
                    </li>

                    <li class="list-group-item">Prix :
                        <p> <?= $row->item_price ?> </p>
                    </li>

                    <li class="list-group-item">Stock :
                        <p> <?= $row->item_stock ?> </p>
                    </li>
                <?php } ?>


                
            </ul>

        </div>

    </div>
</div>