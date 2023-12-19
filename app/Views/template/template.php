<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Tugas</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="fa-solid fa-code"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="/kuadrat" class="nav-link px-2 text-white">Kuadrat</a></li>
                    <li><a href="/diskon" class="nav-link px-2 text-white">Diskon</a></li>
                    <li><a href="/nilai" class="nav-link px-2 text-white">Nilai</a></li>
                    <li><a href="/login" class="nav-link px-2 text-white">Login</a></li>
                </ul>

            </div>
        </div>
    </header>

    <div class="container mb-5 py-5">
        <?= $this->renderSection('content'); ?>

    </div>

</body>

</html>