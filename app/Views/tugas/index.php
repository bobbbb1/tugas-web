<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('template/svg'); ?>

<div class="container px-4 py-5" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-calculator"></i>
            <div>
                <h3 class="fs-2 text-body-emphasis">Kuadrat</h3>
                <p>No 1</p>
                <a href="/kuadrat" class="btn btn-primary">
                    Lihat
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-percent"></i>
            <div>
                <h3 class="fs-2 text-body-emphasis">Diskon</h3>
                <p>No 2</p>
                <a href="/diskon" class="btn btn-primary">
                    Lihat
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-graduation-cap"></i>
            <div>
                <h3 class="fs-2 text-body-emphasis">Nilai</h3>
                <p>No 3</p>
                <a href="/nilai" class="btn btn-primary">
                    Lihat
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-right-to-bracket"></i>
            <div>
                <h3 class="fs-2 text-body-emphasis">Login</h3>
                <p>No 4</p>
                <a href="/login" class="btn btn-primary">
                    Lihat
                </a>
            </div>
        </div>
    </div>


    <style>
        .fa-solid {
            font-size: 2.5rem;
            margin-right: 1rem;
        }
    </style>

    <?= $this->endSection(); ?>