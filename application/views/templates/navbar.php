<div class="row">
  <div class="d-flex flex-row col-12 bg-dark mb-5 justify-content-center fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand text-light justify-content-start nth-child(1)" href="<?= site_url('Store'); ?>"><span class="text-warning">MON SITE</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active text-light nth-child(2)" href="<?= site_url('Store'); ?>">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-light nth-child(5)" href="<?= site_url('Store'); ?>">View Items List</a>
          <a class="nav-item nav-link text-light nth-child(6)" href="<?= site_url('Store/create'); ?>" tabindex="-1" aria-disabled="true">Create Item</a>
          <a class="nav-item nav-link text-light nth-child(8)" href="<?= base_url('Store/gallery'); ?> ">Gallery - Carousel</a>
          <a class="nav-item nav-link text-light nth-child(3)" href="<?= site_url('User'); ?>">View account List</a>
          <a class="nav-item nav-link text-light nth-child(4)" href="<?= site_url('User/create'); ?>">Register</a>
          <a class="nav-item nav-link text-light nth-child(7)" href="<?= site_url('User/login'); ?>">Login</a>
          <a class="nav-item nav-link text-light nth-child(8)" href="<?= base_url('User/welcome'); ?> ">Profil</a>
          <a class="nav-item nav-link text-light nth-child(8)" href="<?= base_url('User/customer'); ?> ">Customer</a>
        </div>
      </div>
    </nav>
  </div>
</div>