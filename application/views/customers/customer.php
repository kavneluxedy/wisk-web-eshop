<title><?= $page_title; ?></title>



<div class="row">
    <div class="col-12 pt-3 d-flex flex-row justify-content-around">
        <div class="d-flex flex-row justify-content-center align-self-baseline">
            <h2> Customer Account</h2>
        </div>
        <form method="POST" class="form-group" action="<?= base_url('User/edit/176'); ?>">
            <ul class="list-group list-group-flush">

                <table class="table table-striped table-dark bg-dark">
                    <thead>
                        <tr>
                            <th class="border border-light" scope="col">ID</th>
                            <th class="border border-light" scope="col">Username</th>
                            <th class="border border-light" scope="col">Adress Email</th>
                            <th class="border border-light" scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-light">
                                <?php $row = $this->User_model->getUser(1); ?>
                                <?php echo $row->acc_id; ?>
                            </td>
                            <td class="border border-light"><?php echo $row->acc_username; ?></td>
                            <td class="border border-light"><?php echo $row->acc_email; ?></td>
                            <td class="border border-light">
                                <input type="password" class="" value="<?= set_value('acc_pass'); ?>" id="acc_pass" />
                            </td>
                            <td>
                                <label for="passchecked" class="label label-form">
                                    <a id="show" href="" onclick="edit_customer_pass()" class="btn btn-dark text-warning">Change your password</a>
                                </label>
                            </td>
                            <td>
                                <div id="hidden" style="display:none;">
                                    <p id="hidden" style="display:none;">Change your password</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <li class="list-group-item d-flex flex-row justify-content-center">
                    <label for="submit" class="label label-form mr-1"><input id="submit" type="submit" class="btn btn-dark text-warning" name="edit_password" value="Modifier"></label>
                    <label for="reset" class="label label-form"><input id="reset" type="reset" class="btn btn-dark text-warning"></label>
                </li>

            </ul>
        </form>

        <label><a class="btn btn-dark text-warning" href="<?= base_url('User/logout'); ?>">Logout</a></label>
    </div>
</div>