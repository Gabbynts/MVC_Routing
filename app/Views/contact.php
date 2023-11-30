<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container mt-4">
  <div class="row">
    <div class="col-lg-8">
      <h2>Contact Us</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan, augue vel rhoncus
        cursus, est massa facilisis risus, at pharetra ex justo eget metus. Sed bibendum justo vel
        nisi suscipit, eu commodo ligula finibus. Nullam nec fringilla sapien.
      </p>
      <p>
        Fusce vel sapien eu odio fringilla suscipit. Aliquam erat volutpat. Donec vel est in justo
        commodo consequat nec sit amet arcu. Nam auctor justo ut dolor accumsan, at convallis purus
        scelerisque. Integer vel est ac metus congue gravida.
      </p>
    </div>
  </div>
</div>


  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>