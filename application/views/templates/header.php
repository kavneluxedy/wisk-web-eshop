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
   <link rel="stylesheet" media="screen and (max-width: 2560)" href="<?= base_url('assets/css/media_queries/2560px.css'); ?>" type="text/css" />
   <link rel="stylesheet" media="screen and (max-width: 1090)" href="<?= base_url('assets/css/media_queries/1090.css'); ?>" type="text/css" />
   <link rel="stylesheet" media="screen and (max-width: 992)" href="<?= base_url('assets/css/media_queries/992.css'); ?>" type="text/css" />
   <link rel="stylesheet" media="screen and (max-width: 768)" href="<?= base_url('assets/css/media_queries/768.css'); ?>" type="text/css" />
   <link rel="stylesheet" media="screen and (max-width: 576)" href="<?= base_url('assets/css/media_queries/576.css'); ?>" type="text/css" />
   <!-- <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="iphone4.css" /> -->
   <link type="text/css" media="all and (orientation:portrait)" href="portrait.css">
   <link type="text/css" media="all and (orientation:landscape)" href="landscape.css">
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