<div class="row">
	<div class="col-6 mb-5 d-flex flex-inline flex-wrap">
		<form method="POST" action="<?php base_url('User/login'); ?>">

			<label for="name">Nom
				<input type='text' class='form-control bg-dark text-warning' name='acc_username'>
			</label>

			<label for="cat">Mot de passe
				<input type='text' class='form-control bg-dark text-warning' name='acc_pass'>
			</label>

			<input type="submit" class='form-control btn-dark text-warning'>

		</form>
	</div>
</div>



<!-- <div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"></h1>
			<div class="form-group">
				<input type="email" name="acc_email" class="form-control" placeholder="Enter E-mail Adress" required autofocus>
			</div>
			<div class="form-group">
				<input type="text" name="acc_username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="acc_pass" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-dark btn-block">Login</button>
		</div>
	</div> -->