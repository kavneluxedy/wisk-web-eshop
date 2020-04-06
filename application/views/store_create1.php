<fieldset class="d-flex flex-column flex-wrap-col">
   <form class="form-group" method="POST" action="<?= site_url('Store'); ?>">

      <label for="item_name">Nom de l'objet
         <input type="text" id="item_name" class="form-control" name="item_name">
      </label>

      <label for="item_img">Image
         <input type="text" id="item_img" class="form-control" name="item_img">
      </label>

      <label for="item_price">Prix
         <input type="text" id="item_price" class="form-control" name="item_price">
      </label>

      <label for="item_stock">Quantité
         <input type="number" id="item_qty" class="form-control" name="item_qty" min="0">
      </label>

      <div class="d-flex flex-wrap-col">
         <label for="submit" class="submit">
            <input type="submit" id="submit" class="form-control bg-dark text-warning">
         </label>

         <label for="reset" class="reset">
            <input type="reset" id="reset" class="form-control bg-dark text-warning">
         </label>
      </div>

   </form>
</fieldset>