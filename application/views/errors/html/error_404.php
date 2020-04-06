
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Jumpstart SaaS App & Software Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <link href="<?= base_url('assets/css/loaders/loader-pulse.css') ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- End loading animation -->
    <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">
  </head>

  <body>
    <section class="bg-primary-3 text-white p-0 o-hidden">
      <div class="container min-vh-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
        <a href="<?= base_url('') ?>" class="fade-page">
          <img src="<?= base_url('assets/img/logos/logo.png') ?>" alt="Brightside" width="300" >
        </a>
        <div class="my-5">
          <div class="row justify-content-center">
            <div class="col-5 mb-4">
              <img src="<?= base_url('assets/img/illustrations/illustration-4.svg') ?>" alt="404 Page Not Found" class="img-fluid">
            </div>
            <div class="col-12">
              <h1>404 - Page Not Found</h1>
              <div class="lead">Whoops, it looks like the page you request wasn't found.</div>
            </div>
          </div>
        </div>
        <div>
          <a href="<?= base_url('') ?>" class="btn btn-sm btn-outline-light fade-page">Back to Home</a>
        </div>
      </div>
    </section>

    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <!-- Removes page load animation when window is finished loading -->
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>

  </body>

</html>
