<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('titulo') ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

  <?= view('partials/header') ?>

  <main class="container mt-5">
    <?= $this->renderSection('content') ?>
  </main>

  <?= view('partials/footer') ?>

  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="shortcut icon" href='assets/img/faviconZ.png' />
      
    <title><?= $this->renderSection('titulo') ?> | Zenith Energia</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="<?= base_url('assets/css/estilo.css') ?>" rel="stylesheet">
</head>
<body>

    <?= $this->include('partials/header') ?>

    <main class="container my-5">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <!-- Bootstrap JS Bundle con Popper -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Scripts personalizados -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
</body>
</html>
