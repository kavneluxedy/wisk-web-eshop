<title><?= $page_title; ?></title>
<div class="row">
	<div class="col-12 pt-3 d-flex flex-row justify-content-around flex-wrap">
		<div class="d-flex flex-row justify-content-center align-self-baseline">
			<h2>Item Administration</h2>
		</div>
		<form method="POST" class="form-group" action="<?= base_url('Store'); ?>">
			<ul class="list-group list-group-flush">
				<table class="table table-striped table-dark bg-dark">

					<thead>
						<tr>
							<th class="border border-light" scope="col">Image</th>
							<th class="border border-light" scope="col">ID</th>
							<th class="border border-light" scope="col">Name</th>
							<th class="border border-light" scope="col">Description</th>
							<th class="border border-light" scope="col">Price</th>
							<th class="border border-light" scope="col">Stock</th>
							<th class="border border-light" scope="col">Delete</th>
							<th class="border border-light" scope="col">Edit</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<?php if (!empty($items)) {
								foreach ($items as $row) {
							?>
						<tr>
							<td class="border border-light"><a role="button" class="btn" href="<?= base_url('Store/item/' . $row->item_id); ?>"><?= "<img src='$row->item_img' width='50'/>"; ?></td>
							<td class="border border-light"><?= $row->item_id ?></td>
							<td class="border border-light"><?= $row->item_name ?></td>
							<td class="border border-light"><?= $row->item_desc ?></td>
							<td class="border border-light"><?= $row->item_price ?></td>
							<td class="border border-light"><?= $row->item_stock ?></td>
							<td class="border border-light">
								<form action="<?= base_url('Store/edit/' . $row->item_id); ?>"><a role="button" href="<?= base_url('Store/edit/' . $row->item_id); ?>" class="form-control btn btn-dark bg-dark text-warning">Edit</a></form>
							</td>
							<td class="border border-light"><a role="button" href="<?= base_url('Store/delete/' . $row->item_id); ?>" class="form-control btn btn-dark text-warning">Delete</td>
						</tr>
					<?php }
							} else {
					?>
					<tr>
						<td colspan="5">Records not found</td>
					</tr>
				<?php } ?>
					</tbody>
				</table>
			</ul>
		</form>

		<label>
			<a class="btn btn-dark text-warning" href="<?= base_url('User/logout'); ?>">Logout</a>
		</label>

	</div>
</div>