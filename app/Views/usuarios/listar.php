<<<<<<< HEAD
<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('titulo') ?>
Lista de Usuarios
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container mt-4">
  <h1 class="mb-3">Lista de Usuarios</h1>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($usuarios as $usuario): ?>
        <tr>
          <td><?= esc($usuario['nombre']) ?></td>
          <td><?= esc($usuario['email']) ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>
=======
<?= $this->extend('plantilla') ?>
<?= $this->section('content') ?>
<h1>Lista de Usuarios</h1>
<table class="table">
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?= $usuario['nombre'] ?></td>
        <td><?= $usuario['email'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?= $this->endSection() ?>
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
