<?= $this->extend('layout_front/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="text-center my-5">
        <h1 class="fw-bold"><?= $title ?? 'Daftar Kategori' ?></h1>
    </div>

    <?php foreach($kategori as $namaKategori => $artwork) : ?>
    <div class="blackmetal-card mt-4">

        <div class="card-header mb-4">
            <div class="d-flex">
                <h3 class="fw-bold text-blood gothic-text"><?= $namaKategori ?></h3>
                <a href="<?= base_url('/boots_artwork/gallery/' . urlencode($namaKategori)) ?>"
                   id="find-more" class="btn btn-dark ms-auto align-self-center">Find More</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <?php foreach($artwork as $art) : ?>
                <div class="col-md-3 mb-4">
                    <div class="art-card">
                        <a href="/boots_artwork/detail/<?= $art['id'] ?>"><img src="<?= base_url('img_uploads/' . $art['gambar']) ?>" class="art-img"
                            alt="<?= $art['title'] ?>" loading="lazy"></a>
                        <div class="art-overlay"></div>
                        <div class="art-content">
                            <h5 class="art-title"><?= $art['title'] ?></h5>
                            <p class="art-desc"><?= $art['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>