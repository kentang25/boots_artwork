<?= $this->extend('layout_front/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- <div class="card mt-5 bg-dark text-white p-4">
        
    </div> -->
    <div class="container-fluid text-white mt-3 p-5 rounded-3">
        <div class="row bg-dark p-4 rounded-3 d-flex flex-column-reverse flex-md-row align-items-center">

    <!-- Kolom Gambar -->
    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
        <img src="img/Proyek (20251110104601).png"
             alt="Boots Artwork"
             class="img-fluid"
             style="max-width: 100%; height: auto; object-fit: contain;">
    </div>

    <!-- Kolom Teks -->
    <div class="col-12 col-md-6">
        <h1 class="display-5 fw-bold text-white">
            Welcome to the Boots Artwork Gallery
        </h1>
        <p class="lead text-light">
            Explore our collection of stunning boot designs and artwork.
        </p>
        <a class="btn btn-danger btn-lg" href="/boots_artwork/about" role="button">
            Learn more
        </a>
    </div>

</div>


        <!-- <div class="content mt-5">
            <h1>Boots Artwork</h1>
            <p>Discover the unique designs and artistic expressions in our boots collection.</p>
        </div> -->

        <section class="text-center bg-dark mt-5 position-relative overflow-hidden py-5">

            <!-- Gambar latar belakang -->
            <img src="/img/kapak.png" alt="Dark axe" class="bg-symbol" loading="lazy">

            <div class="container position-relative z-1">
                <div class="display-6 text-danger mb-3">☠</div>
                <p class="lead text-secondary">
                    In a realm where art bleeds into darkness, every stroke and line becomes a whisper of rebellion.
                </p>
                <p class="text-secondary">
                    Boots Artwork is not just a gallery — it is a sanctuary for those who find beauty in chaos,
                    elegance in decay, and soul in distortion.
                </p>
                <p class="fst-italic text-danger">
                    Walk through our collection... if you dare.
                </p>
                <div class="display-6 text-danger mt-3">☠</div>
            </div>

        </section>

        <div class="row mt-5">
            <h1 class="display-5 fw-bold text-center mt-5"
                style="font-family: 'UnifrakturCook', cursive; letter-spacing: 3px;">
                ☠ COLLECTION OF THE DAMNED ☠
            </h1>

            <?php foreach($boots_artwork as $artwork) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 bg-white text-light border border-danger border-opacity-25 shadow-lg"
                    style="transition: transform 0.3s ease, filter 0.3s ease;">
                    <a href="/boots_artwork/detail/<?= $artwork['id'] ?>"><img src="/img_uploads/<?= $artwork['gambar']; ?>" loading="lazy" class="card-img-top"
                        alt="<?= $artwork['title']; ?>" style="transition: 0.3s;"></a>
                    <div class="card-body">
                        <h5 class="card-title text-danger" style="font-family: 'Cinzel', serif;">
                            <?= strtoupper($artwork['title']); ?>
                        </h5>
                        <p class="card-text text-secondary"><?= $artwork['deskripsi']; ?></p>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>

        </div>

    </div>

</div>

<?= $this->endSection() ?>