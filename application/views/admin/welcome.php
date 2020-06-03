<h2> Welcome <?= $this->session->userdata('acc_username'); ?> !</h2>
<label><a href="<?= base_url('User/logout'); ?>">Logout</a></label>