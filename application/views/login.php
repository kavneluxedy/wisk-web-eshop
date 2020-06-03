<div class="row">
	<div class="col-12 mb-5 d-flex flex-row form-group flex-wrap justify-content-center">
		<form method="POST" action="<?php base_url('User/login_validation'); ?>" id="form">
			<fieldset class=" d-flex flex-row p-4 bg-dark shadow text-light">

				<label for="acc_username">Entrer votre Identifiant
					<input type='text' class='form-group bg-dark text-warning shadow transition mr-2' name='acc_username'>
				</label>

				<label for="acc_pass">Entrer votre Mot de passe
					<input type='password' class='form-group bg-dark text-warning mb-4 shadow transition mr-2' name='acc_pass'>
				</label>

				<input type="submit" value="Envoyer" class='btn btn-primary btn-dark text-warning'>
				<input type="reset" value="Effacer" class='btn btn-warning btn-dark text-warning'>

				<?= $this->session->flashdata('error'); ?>
			</fieldset>
		</form>
	</div>
</div>