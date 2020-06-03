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
</head>

<body>
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 bg-warning">

            <?php if ($this->session->flashdata('login_failed')) : ?>
               <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('login_success')) : ?>
               <?php echo '<p class="alert alert-success">' . $this->session->flashdata('login_success') . '</p>'; ?>
            <?php endif; ?>