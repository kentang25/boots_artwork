<?= $this->extend('layout_front/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- <div class="card mt-5 bg-dark text-white p-4">
        
    </div> -->
    <div class="container-fluid text-white mt-3 p-5 rounded-3">
        <div class="row align-items-center bg-dark p-4 rounded-3">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Welcome to the Boots Artwork Gallery</h1>
                <p class="lead">Explore our collection of stunning boot designs and artwork.</p>
                <a class="btn btn-danger btn-lg" href="/boots_artwork/about" role="button">Learn more</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/Proyek (20250902020139).png" alt="Boots Artwork" class="img-fluid" id="gambar-jmb">
            </div>
        </div>

        <div class="row mt-5">
            <?php foreach($boots_artwork as $artwork) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="/img_uploads/<?= $artwork['gambar']; ?>" class="card-img-top" alt="<?= $artwork['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $artwork['title']; ?></h5>
                        <p class="card-text"><?= $artwork['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>

    </div>

</div>

<?= $this->endSection() ?>