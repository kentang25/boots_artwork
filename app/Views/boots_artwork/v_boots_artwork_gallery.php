<?= $this->extend('layout_front/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="text-center my-5">
        <h1 class="fw-bold"><?= $title ?? 'Daftar Kategori' ?></h1>
        
    </div>
    <?php foreach($kategori as $namaKategori => $artwork) : ?>
        <div class="card-header mb-4">
            <h3 class="fw-bold"><?= $namaKategori ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <?php foreach($artwork as $art) : ?>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="<?= base_url('img_uploads/' . $art['gambar']) ?>" class="card-img-top" alt="<?= $art['title'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $art['title'] ?></h5>
                                <p class="card-text"><?= $art['deskripsi'] ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>