<head>
    <title><?= $page_title; ?></title>
</head>

<!-- 
- Le client se connecte son panier est vide (0)

- Une fois que le client ajoute un objet dans son panier, cela remplis une table Panier

- Quand le panier contient plus de 2 objet, une fonction se charge de calculer le total de la somme

- A chaque ajout la somme est mise à jour

- Quand le client se déconnecte et se reconnecte il ne perd pas son panier et la somme est toujours à jour via la fonction créé préalablement 
-->

<!-- Button trigger modal -->
<button id="openModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">
    Votre panier
</button>

<!-- Modal -->
<div class="modal" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Votre panier : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                foreach ($cart as $row) { ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p> id : <?= $row->order_id; ?> </p>
                        </li>

                        <li class="list-group-item">
                            <p> name : <?= $row->item_name; ?> </p>
                        </li>

                        <li class="list-group-item">
                            <img src="<?= $row->item_img; ?>" width="240"> </img>
                        </li>

                        <li class="list-group-item">
                            <p> price : <?= $row->item_price; ?> </p>
                        </li>

                        <li class="list-group-item">
                            <p> quantity : <?= $row->order_qty; ?> </p>
                        </li>

                        <li class="list-group-item">
                            <p> stock_available : <?= $row->stock_available; ?> </p>
                        </li>
                    </ul>
                <?php } ?>
            </div>

            <div class="modal- d-flex justify-content-center">
                <button id="saveChanges" type="button" class="btn btn-primary">Payer maintenant</button>
                <p> </p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>