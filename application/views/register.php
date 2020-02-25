<?= validation_errors(); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<!-- <h1 class="text-center"><?= $title; ?></h1> -->
		<div class="form-group">
			<label>Name
				<input type="text" class="form-control" name="acc_username" placeholder="Name">
			</label>
		</div>
		<div class="form-group">
			<label>Email
				<input type="email" class="form-control" name="acc_email" placeholder="Email">
			</label>
		</div>
		<div class="form-group">
			<label>Password
				<input type="password" class="form-control" name="acc_pass" placeholder="Password">
			</label>
		</div>
		<div class="form-group">
			<label>Confirm Password
				<input type="password" class="form-control" name="acc_pass2" placeholder="Confirm Password">
			</label>
		</div>
		<div class="form-group">
			<label>Avatar
				<input type="file" class="form-control" name="acc_avatar">
			</label>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</div>
</div>