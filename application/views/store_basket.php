<!-- - Le client se connecte son panier est vide (0)
- Une fois que le client ajoute un objet dans son panier, cela remplis une table Panier
- Quand le panier contient plus de 2 objet, une fonction se charge de calculer le total de la somme
- A chaque ajout la somme est mise à jour
- Quand le client se déconnecte et se reconnecte il ne perd pas son panier et la somme est toujours à jour via la fonction créé préalablement
Osef des trucs que tu trouves sur internet, fait le toi même
Le but c'est pas de montrer que tu sais utiliser Google
Le but c'est de montrer que tu sais coder, donc fait en le plus possible -->

<a href="" id="show">Show Element</a> <!-- AJAX -->
<div id="hidden">I'm visible !</div>

<div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <h5 class="card-header text-center">Ventes</h5> <!-- Conteneur de catégories -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center align-items-start"><a href="<?= base_url('Store/categories'); ?>">Catégories</a></h5>
                <p class="card-text text-center">Venez supporter votre équipe préférée en achetant le maillot de la team.</p>
                <a href="<?= base_url('Store/categories'); ?>" class="btn btn-dark align-items-center justify-content-center text-warning">Découvrir</a> <!-- Lien vers différentes catégories -->
            </div>
        </div>


        <div class="row">
            <div class="col-auto d-flex flex-col justify-content-end">
                <div class="card" style="width: 18rem;">
                    <!-- carte du produit -->

                    <h5 class="card-title card-header text-center mt-3 mb-3 border-dark">Panier</h5>
                    <form method="POST" class="form-group" action="<?= base_url('Store/basket'); ?>">
                        <ul class="list-group list-group-flush">

                            <div class="card-body">
                                <p class="card-text text-secondary">Cette carte doit pouvoir détailler le produit en question de la BDD</p>
                            </div>

                            <?php
                            foreach ($items as $row) // Début de la lecture (Table wisk_shop_items)
                            { ?>
                                <li class="list-group-item d-flex flex-inline">id :
                                    <p> <?= $row->item_id; ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Catégorie :
                                    <p> <?= $row->cat_id ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Nom :
                                    <p> <?= $row->item_name; ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Description :
                                    <p> <?= $row->item_desc ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">
                                    <div>
                                        <img src="<?= base_url('assets/img/manette.jpg'); ?>" alt="Photo du produit à vendre" width="250" height="auto">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Prix :
                                    <p> <?= $row->item_price; ?> </p>
                                </li>

                                <li class="list-group-item d-flex flex-inline">Stock :
                                    <p> <?= $row->item_stock; ?> </p>
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