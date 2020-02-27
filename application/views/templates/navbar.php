<div class="row">
  <div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-2">
      <a class="navbar-brand text-light" href="<?= site_url('Store'); ?>"><span class="text-warning">WISK E-SPORT</span></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active text-light" href="<?= site_url('Store'); ?>">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-light" href="<?= site_url('User'); ?>">View account List</a>
          <a class="nav-item nav-link text-light" href="<?= site_url('User/create'); ?>">Create account</a>
          <a class="nav-item nav-link text-light" href="<?= site_url('Store'); ?>">View Items List</a>
          <a class="nav-item nav-link text-light" href="<?= site_url('Store/create'); ?>" tabindex="-1" aria-disabled="true">Create Item</a>
        </div>
      </div>
    </nav>
  </div>
</div>