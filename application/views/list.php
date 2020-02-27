<title><?= $page_title; ?></title>

<?php $success = $this->session->userdata('success');
if ($success != "") { ?>
   <div class="alert alert-success"><?= $success; ?></div>
<?php } ?>

<?php $failure = $this->session->userdata('failure');
if ($failure != "") { ?>
   <div class="alert alert-warning"><?= $failure; ?></div>
<?php } ?>

<h3>View Users</h3>

<div class="col-md-8 text-right">
   <div class="row">
      <a class="btn btn-primary" href="<?= base_url('User/create'); ?>" role="button">Create</a>
   </div>
</div>

<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">ID</th>
         <th scope="col">Name</th>
         <th scope="col">Email</th>
         <th scope="col">Edit</th>
         <th scope="col">Delete</th>
      </tr>

      <?php if (!empty($users)) {
         foreach ($users as $user) {
      ?>

            <tr>
               <td><?= $user['acc_id'] ?></td>
               <td><?= $user['acc_username'] ?></td>
               <td><?= $user['acc_email'] ?></td>
               <td><a href="<?= base_url('user/edit/' . $user['acc_id']); ?>" class="btn btn-primary">Edit</a></td>
               <td><a href="<?= base_url('user/delete/' . $user['acc_id']); ?>" class="btn btn-warning">Delete</a></td>
            </tr>

         <?php
         }
      } else { ?>

         <tr>
            <td colspan="5">Records not found</td>
         </tr>

      <?php } ?>

   </thead>
</table>
</div>
</div>