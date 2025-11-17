<?= $this->extend('layout_front/layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5 fw-bold text-danger" style="font-family: 'UnifrakturCook', cursive; letter-spacing: 3px;">
            ☠ DETAIL OF THE DAMNED ☠
        </h1>
        <a href="/boots_artwork" class="btn btn-secondary btn-lg shadow-lg">← Back to Gallery</a>
    </div>
    <div class="card mb-4 bg-dark text-white p-4 shadow-lg">
        <div class="row g-0">
            <div class="col-md-4 text-center">
                <img src="/img_uploads/<?= $artwork['gambar'] ?>" class="img-fluid bg-light rounded shadow-lg" loading="lazy" alt="Boots Artwork">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-title">
                        <h2 class="fw-bold text-danger" style="font-family: 'Cinzel', serif;"><?= $artwork['title'] ?></h2>
                    </div>
                    <p class="card-text mt-3" style="font-family: 'Cinzel', serif;"><?= $artwork['deskripsi'] ?></p>
                </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>