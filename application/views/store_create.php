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
      <ul class="list">
         <fieldset class="d-flex flex-column flex-wrap-col">
            <form class="form-group" method="POST" action="<?= base_url('Store/create'); ?>">

               <table class="table table-scraped bg-dark text-warning">
                  <thead>

                     <tr>
                        <th class="border border-light" scope="col">Nom</th>

                        <th class="border border-light" scope="col">Catégorie</th>

                        <th class="border border-light" scope="col">Description</th>

                        <th class="border border-light" scope="col">Image</th>

                        <th class="border border-light" scope="col">Prix</th>

                        <th class="border border-light" scope="col">Stock</th>
                     </tr>

                  </thead>
                  <tbody>

                     <tr>
                        <td><input type="text" class="border border-light form-group transition shadow" name="item_name"></td>

                        <td><input type="number" class="border border-light form-group transition shadow" name="cat_id" min="1" max="5"></td>

                        <td><input type="text" class="border border-light form-group transition shadow" name="item_desc"></td>

                        <td><input type="text" class="border border-light form-group transition shadow" name="item_img"></td>

                        <td><input type="number" class="border border-light form-group transition shadow" name="item_price" min="1"></td>

                        <td><input type="number" class="border border-light form-group transition shadow" name="item_stock" min="1"></td>
                     </tr>

                  </tbody>
               </table>

               <div class="d-flex flex-wrap-col">
                  <label for="submit" class="submit">
                     <input type="submit" class="form-control bg-dark text-warning">
                  </label>

                  <label for="reset" class="reset">
                     <input type="reset" class="form-control bg-dark text-warning">
                  </label>
               </div>


            </form>
         </fieldset>
      </ul>
   </div>
</div>