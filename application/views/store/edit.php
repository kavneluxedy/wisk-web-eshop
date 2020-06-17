<fieldset class="d-flex flex-column flex-wrap-col">
    <form class="form-group" name="updateItem" method="POST" action="<?= base_url('"Store/edit/" . $item["item_id]'); ?>">
        <ul class=" list-group list-group-flush">
            <table class="bg-dark">
                <thead>
                    <tr>

                        <th>
                            <div>Catégorie
                                <?= form_error('cat_id'); ?>
                            </div>
                        </th>

                        <th>
                            <div>Name
                                <?= form_error('item_name'); ?>
                            </div>
                        </th>

                        <th>
                            <div>Description
                                <?= form_error('item_desc'); ?>
                            </div>
                        </th>

                        <th>
                            <div>Image
                                <?= form_error('item_img'); ?>
                            </div>
                        </th>

                        <th>
                            <div>Price
                                <?= form_error('item_price'); ?>
                            </div>
                        </th>

                        <th>
                            <div>Stock
                                <?= form_error('item_stock'); ?>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($item as $row) { ?>
                        <tr>
                            <td><input type="number" class="form-group shadow transition" name="cat_id" value="<?= set_value($row->cat_id); ?>" min="1" max="5"></td>
                            5 - Souris Clavier |
                            3 - Stickers |
                            2 - T-Shirts |
                        <?php } ?>
                        <td><input type="text" class="form-group shadow transition" name="item_name"></td>
                        <td><input type="text" class="form-group shadow transition" name="item_desc"></td>
                        <td><input type="text" class="form-group shadow transition" name="item_img"></td>
                        <td><input type="text" class="form-group shadow transition" name="item_img"></td>
                        <td><input type="number" class="form-group shadow transition" name="item_price" min="1"></td>
                        <td><input type="number" class="form-group shadow transition" name="item_stock" min="1"></td>
                        </tr>
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