<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
?>

<fieldset class="d-flex flex-column flex-wrap-col">
   <form class="form-group" method="POST" action="<?= site_url('Store/store_create'); ?>">

      <label for="name" class="">Nom
         <input type="text" id="name" class="form-control" name="item_name">
      </label>

      <label for="cat" class="">Catégorie
         <input type="text" id="cat" class="form-control" name="cat_id">
      </label>

      <label for="desc" class="">Description
         <input type="text" id="desc" class="form-control" name="item_desc">
      </label>

      <label for="img" class="">Image
         <input type="text" id="img" class="form-control" name="item_img">
      </label>

      <label for="price" class="">Prix
         <input type="text" id="price" class="form-control" name="item_price">
      </label>

      <label for="stock" class="">Stock
         <input type="number" id="stock" class="form-control" name="item_stock">
      </label>

      <div class="d-flex flex-wrap-col">

         <label for="submit" class="submit">
            <input type="submit" id="submit" class="form-control bg-success">
         </label>

         <label for="reset" class="reset">
            <input type="reset" id="reset" class="form-control bg-warning" placeholder="Annuler">
         </label>

      </div>

   </form>
</fieldset>

<?php
$this->load->view('templates/footer');
?>