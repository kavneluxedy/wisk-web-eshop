<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" type="image/ico" href="<?= base_url('assets/img/logo.png'); ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/argon.css'); ?>" />
</head>

<body>
   <header>
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 position-relative bg-light mt-5 pt-5">

               <?php $success = $this->session->userdata('success');
               if ($success != "") { ?>
                  <div class="alert alert-success"><?= $success; ?></div>
               <?php } ?>

               <?php $failure = $this->session->userdata('failure');
               if ($failure != "") { ?>
                  <div class="alert alert-warning"><?= $failure; ?></div>
               <?php } ?>

               <?php if ($this->session->flashdata('login_failed')) : ?>
                  <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
               <?php endif; ?>

               <?php if ($this->session->flashdata('login_success')) : ?>
                  <?php echo '<p class="alert alert-success">' . $this->session->flashdata('login_success') . '</p>'; ?>
               <?php endif; ?>

               <?php if ($this->session->flashdata('error_username')) : ?>
                  <?php echo '<p class="alert alert-success">' . $this->session->flashdata('error_login') . '</p>'; ?>
               <?php endif; ?>

               <?php if ($this->session->flashdata('error_email')) : ?>
                  <?php echo '<p class="alert alert-success">' . $this->session->flashdata('error_email') . '</p>'; ?>
               <?php endif; ?>

               <?php if ($this->session->flashdata('error_pass')) : ?>
                  <?php echo '<p class="alert alert-success">' . $this->session->flashdata('error_pass') . '</p>'; ?>
               <?php endif; ?>

               <?php if ($this->session->flashdata('error_secret_id')) : ?>
                  <?php echo '<p class="alert alert-success">' . $this->session->flashdata('error_secret_id') . '</p>'; ?>
               <?php endif; ?>