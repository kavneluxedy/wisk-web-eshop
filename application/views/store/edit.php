<fieldset class="d-flex flex-column flex-wrap-col">
    <form class="form-group" name="updateItem" method="POST" action="<?= base_url("Store/edit/" . $item['item_id']); ?>">
        <ul class=" list-group list-group-flush">
            <table class="bg-dark">
                <thead>
                    <tr>

                        <th class="">Catégorie
                            <!-- <?= form_error('cat_id'); ?> -->
                        </th>

                        <th class="">Name
                            <!-- <?= form_error('item_name'); ?> -->
                        </th>

                        <th class="">Description
                            <!-- <?= form_error('item_desc'); ?> -->
                        </th>

                        <th class="">Price
                            <!-- <?= form_error('item_price'); ?> -->
                        </th>

                        <th class="">Stock
                            <!-- <?= form_error('item_stock'); ?> -->
                        </th>

                        <th class="">Image
                            <!-- <?= form_error('item_img'); ?> -->
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($item)) { ?>
                        <?php foreach ($item as $row) { ?>
                            <tr>
                                <td><input type="number" class="form-group shadow transition" name="cat_id" value="<?= set_value($row->cat_id); ?>" min="1" max="5"></td>
                                5 - Souris Clavier |
                                3 - Stickers |
                                2 - T-Shirts |
                                <td><input type="text" class="form-group shadow transition" name="item_name"></td>
                                <td><input type="text" class="form-group shadow transition" name="item_desc"></td>
                                <td><input type="number" class="form-group shadow transition" name="item_price" min="1"></td>
                                <td><input type="number" class="form-group shadow transition" name="item_stock" min="1"></td>
                                <td><input type="" class="form-group shadow transition" name="item_img"></td>
                            </tr>
                        <?php } ?>
                    <?php } else {
                    ?>
                        <tr>
                            <td colspan="5">Records not found</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </ul>

        <div class="d-flex flex-wrap-col">
            <label for="submit">
                <input type="submit" id="submit" class="form-control bg-dark text-warning">
            </label>

            <label for="reset">
                <a class="btn btn-dark text-danger" id="reset" href="<?= base_url('Store/item'); ?>" role="button">Annuler</a>
            </label>
        </div>

    </form>
</fieldset>