<?= $this->extend('layout_front/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="text-center my-5">
        <h1 class="fw-bold"><?= $title ?? "Tidak ditemukan" ?></h1>
    </div>
    <div class="row">
        <?php if(!empty($boots_artwork)) : ?>
            <?php foreach($boots_artwork as $art) : ?>
                <div class="col-md-3 mb-4">
                    <div class="art-card">
                        <img src="<?= base_url('img_uploads/' . $art['gambar']) ?>" class="art-img"
                             alt="<?= $art['title'] ?>" loading="lazy">
                        <div class="art-overlay"></div>
                        <div class="art-content">
                            <h5 class="art-title"><?= $art['title'] ?></h5>
                            <p class="art-desc"><?= $art['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12">
                <p class="text-center">Tidak ada artwork dalam kategori ini.</p>
            </div>
        <?php endif; ?>
    </div>
    <div class="text-end mb-5">
            <a href="<?= base_url('/boots_artwork/gallery') ?>" class="btn btn-sm btn-danger">Back</a>
    </div>
    
</div>

<?= $this->endSection(); ?>