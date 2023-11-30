<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>

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
    <h2>Frequently Asked Questions (FAQs)</h2>

    <div class="accordion" id="faqAccordion">
      <!-- FAQ 1 -->
      <div class="card">
        <div class="card-header" id="faqHeading1">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
              Apa itu Portal Berita Codeigniter?
            </button>
          </h5>
        </div>

        <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
          <div class="card-body">
            Portal Berita Codeigniter adalah platform berita yang dibangun menggunakan framework Codeigniter. Kami menyediakan berita terbaru seputar dunia teknologi, programming, dan berbagai topik menarik lainnya.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="card">
        <div class="card-header" id="faqHeading2">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
              Bagaimana cara saya mengirimkan saran atau pertanyaan?
            </button>
          </h5>
        </div>

        <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
          <div class="card-body">
            Anda dapat menghubungi kami melalui halaman <a href="<?= base_url('contact') ?>">Contact</a> untuk mengirimkan saran atau pertanyaan.
          </div>
        </div>
      </div>


 

  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>