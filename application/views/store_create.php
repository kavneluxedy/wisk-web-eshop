<?php $success = $this->session->userdata('success');
if ($success != "") { ?>
   <div class="alert alert-success"><?= $success; ?></div>
<?php } ?>

<?php $failure = $this->session->userdata('failure');
if ($failure != "") { ?>
   <div class="alert alert-warning"><?= $failure; ?></div>
<?php } ?>

<div class="row">
   <div class="col-12">
      <fieldset class="d-flex flex-column flex-wrap-col">
         <form class="form-group" method="POST" action="<?= base_url('Store'); ?>">

            <label for="item_name">Nom
               <input type="text" id="item_name" class="form-group transition shadow" name="item_name">
            </label>

            <label for="cat_id">Catégorie
               <input type="text" id="cat_id" class="form-group transition shadow" name="cat_id">
            </label>

            <label for="item_desc">Description
               <input type="text" id="item_desc" class="form-group transition shadow" name="item_desc">
            </label>

            <label for="item_img">Image
               <input type="text" id="item_img" class="form-group transition shadow" name="item_img">
            </label>

            <label for="item_price">Prix
               <input type="text" id="item_price" class="form-group transition shadow" name="item_price">
            </label>

            <label for="item_stock">Stock
               <input type="number" id="item_stock" class="form-control transition shadow" name="item_stock" min="0">
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
   </div>
</div>