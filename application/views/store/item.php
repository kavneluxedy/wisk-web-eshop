<title><?= $page_title; ?></title>
<div class="row">
    <div class="col-12 pt-3 d-flex flex-row justify-content-around flex-wrap">
        <div class="d-flex flex-row justify-content-center align-self-baseline">
            <h2>Item Administration</h2>
        </div>
        <form method="POST" class="form-group" action="<?= base_url('Store/item'); ?>">
            <ul class="list-group list-group-flush">
                <table class="table table-striped table-dark bg-dark">
                    <thead>
                        <tr>
                            <th class="border border-light" scope="col">ID</th>
                            <th class="border border-light" scope="col">Name</th>
                            <th class="border border-light" scope="col">Description</th>
                            <th class="border border-light" scope="col">Image</th>
                            <th class="border border-light" scope="col">Delete</th>
                            <th class="border border-light" scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($item as $row) { // Début de la boucle
                        ?>
                            <tr>
                                <td class="border border-light"><?php echo $row->item_id; ?></td>
                                <td class="border border-light"><?php echo $row->item_name; ?></td>
                                <td class="border border-light"><?php echo $row->item_desc; ?></td>
                                <td class="border border-light"><?php echo "<img src='$row->item_img' width='50'/>"; ?></td>
                                <td class="border border-light">
                                    <a role="button" href="<?= base_url('Store/delete/' . $row->item_id); ?>" placeholder="Delete" class="form-control btn btn-dark text-warning">
                                </td>
                                <td class="border border-light">
                                    <a role="button" href="<?= base_url('Store/edit/' . $row->item_id); ?>" value="Edit" class="form-control bg-dark text-warning">Edit</a>
                                </td>
                            </tr>
                        <?php } // Fin de la boucle 
                        ?>
                    </tbody>
                </table>
                <?php var_dump($item); ?>

            </ul>
        </form>

        <label>
            <a class="btn btn-dark text-warning" href="<?= base_url('User/logout'); ?>">Logout</a>
        </label>

    </div>
</div>