<?= $this->extend('layouts/plantilla') ?>

<<<<<<< HEAD
<?= $this->section('titulo') ?>
Catálogo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <h1 class="mb-4">Catálogo de productos</h1>
  
  <div class="mb-4">
  <a href="<?= base_url('catalogo') ?>" class="btn btn-outline-dark">Todos</a>
  <a href="<?= base_url('catalogo/categoria/1') ?>" class="btn btn-outline-primary">Paneles</a>
  <a href="<?= base_url('catalogo/categoria/2') ?>" class="btn btn-outline-success">Inversores</a>
  <a href="<?= base_url('catalogo/categoria/3') ?>" class="btn btn-outline-warning">Reguladores</a>
</div>

  <div class="row">
    <?php foreach ($productos as $producto): ?>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="<?= base_url($producto['img']) ?>" alt="<?= esc($producto['nombre']) ?>" class="img-fluid">
          <div class="card-body">
            <h5 class="card-title"><?= esc($producto['nombre']) ?></h5>
            <p class="card-text"><?= esc($producto['descripcion']) ?></p>
            <p class="card-text"><strong>
            <?= '$' . number_format($producto['precio'], 2, ',', '.') ?>
            </strong></p>

            <?php if (session()->get('usuario')): ?>
              <form action="<?= base_url('/agregar-carrito') ?>" method="post">
                  <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                  <input type="hidden" name="name" value="<?= $producto['nombre'] ?>">
                  <input type="hidden" name="price" value="<?= $producto['precio'] ?>">
                  <input type="hidden" name="categoriaID" value="<?= $producto['categoriaID'] ?>">
                  <input type="hidden" name="qty" value="1">
                  <button class="btn btn-primary w-100" type="submit">Agregar al carrito</button>
              </form>
            <?php else: ?>
              <a href="<?= base_url('/login') ?>" class="btn btn-outline-secondary w-100">Iniciar sesión para comprar</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?= $this->endSection() ?>
=======
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Listas de Productos</h2>
    <div class="row mb-4">
        <div class="col-md-4">
            <a class="btn btn-success" href="<?= base_url('agregarProducto') ?>">Agregar Producto</a>
        </div>
        <div class="col-md-4 text-end">
            <a class="btn btn-dark" href="<?= base_url('ProductosDadosDeBaja') ?>">Ver Productos dados de baja</a>
        </div>
    </div>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-light table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Categoría</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Imagen</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- <php foreach ($productos as $producto): ?>
                        <php if ($producto['activo'] !== 'no'): ?>
                            <tr>
                                <td>
                                    <php
                                    // Obtener la categoría del producto
                                    $categoriaModel = new \App\Models\CategoriaModel();
                                    $categoria = $categoriaModel->find($producto['id_categoria']);
                                    echo $categoria ? $categoria['nombre'] : 'Sin categoría';
                                    ?>
                                </td>
                                <td><= $producto['nombre'] ?></td>
                                <td>?= $producto['descripcion'] ?></td>
                                <td><= $producto['precio'] ?></td>
                                <td>?= $producto['cantidad'] ?></td>
                                <td>
                                    <img src="<= base_url('uploads/' . $producto['url_imagen']) ?>" alt="Imagen del producto" class="img-fluid" style="max-width: 100px;">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="<= base_url('ProductosController/editar/' . $producto['id_producto']); ?>" class="btn btn-success">Editar</a>
                                        <a href="<= site_url('ProductosController/darDeBaja/' . $producto['id_producto']) ?>" class="btn btn-danger">Dar de baja</a>
                                    </div>
                                </td>
                            </tr>
                        <php endif; ?>
                    <php endforeach; ?-->
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<br></br><br></br><br></br><br></br>

<?= $this->endSection() ?>
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
