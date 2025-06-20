<?= $this->extend('layouts/plantilla') ?>

<<<<<<< HEAD
<?= $this->section('titulo') ?>
Nosotros
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <section class="nosotros-section">
    <h1 class="titulo-nosotros">Sobre Nosotros</h1>

    <p>Somos una empresa comprometida con el desarrollo sustentable, enfocada en ofrecer soluciones innovadoras y accesibles en energía solar. Nuestro equipo combina experiencia técnica con una pasión por transformar el mundo hacia una matriz energética más limpia.</p>

    <h2 class="subtitulo-nosotros">Nuestra Misión</h2>
    <p>Proporcionar productos y servicios de alta calidad que promuevan el uso eficiente de la energía solar, contribuyendo al bienestar ambiental y económico de nuestros clientes.</p>

    <h2 class="subtitulo-nosotros">Nuestra Visión</h2>
    <p>Ser referentes a nivel nacional en soluciones energéticas sostenibles, liderando con tecnología, compromiso social y respeto por el medio ambiente.</p>

    <h2 class="subtitulo-nosotros">Nuestro Equipo</h2>
    <p>Contamos con un equipo multidisciplinario de profesionales en ingeniería, tecnología y atención al cliente que garantizan la excelencia en cada proyecto.</p>
  </section>
=======
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Sobre Nosotros</h1>
    <hr>

    <p class="lead mb-4">
        Conoce más sobre nuestra historia, misión y el equipo detrás de Zenith Energia.
    </p>

    <div class="row g-4">

        <div class="col-md-7">
            <h2>Nuestra Historia</h2>
            <p>
            Nuestra empresa nació en el año 2025 con el propósito de brindar soluciones energéticas sostenibles que respondan a los desafíos ambientales y económicos de hoy.
            </p>
            <p>
            Fundada por un equipo comprometido con la innovación y el desarrollo sustentable, surgimos con la visión de hacer accesible la energía solar y renovable a hogares, negocios y comunidades.
            </p>
            <p>
            Desde nuestros inicios, trabajamos con tecnología de vanguardia y un firme compromiso con la calidad, el ahorro energético y el cuidado del planeta.
            </p>
            <h2 class="mt-4">Misión y Visión</h2>
            <p>
                <strong>Misión:</strong> Ofrecer soluciones integrales en energía solar y renovable, mediante la venta de equipos de alta eficiencia, asesoría técnica personalizada y servicio postventa, con el fin de satisfacer las necesidades energéticas de nuestros clientes de manera sostenible, accesible y responsable con el medio ambiente.
            </p>
            <p>
                <strong>Visión:</strong> Ser una empresa líder en el mercado nacional e internacional de energía renovable, reconocida por su innovación, compromiso ambiental y excelencia en el servicio, contribuyendo activamente a la transición hacia un futuro energético limpio y sostenible.
            </p>
        </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nuestro Equipo</h5>
                    <p class="card-text">Contamos con profesionales apasionados por las energías renovables.
                    </p>
                    <img src="<?= base_url('assets/img/Matias.jpg') ?>" class="card-img-top" alt="Lago Matias">
                    <img src="<?= base_url('assets/img/Lucas.jpg') ?>" class="card-img-top" alt="Mancuello Lucas">
                </div>
            </div>
        </div>

    </div>
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
</div>

<?= $this->endSection() ?>
