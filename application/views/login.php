<?= //form_open(); ?>
<form method="POST" action="<? base_url('User/login'); ?>">
    <input type="email" name="input-email">
    <input type="password" name="input-password">
    <input type="submit" value="Envoyer">
</form>
	<!-- <div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $page_title; ?></h1>
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
<?= //form_close(); ?>