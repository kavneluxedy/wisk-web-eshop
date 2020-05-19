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
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="IMG CARD">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"><?php echo 'ITEM_NAME :' . $this->session->item_name . '<br>'; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>