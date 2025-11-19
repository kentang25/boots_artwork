<?= $this->extend('layout_admin/template_admin') ?>
<?= $this->section('content') ?>

<div class="container py-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Tambah Data Boots Artwork</h3>
            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + Tambah Data
            </button>
        </div>

        <div class="card-body">

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped table-hover text-center align-middle">
                    <thead class="table-dark text-white">
                        <tr>
                            <th style="width: 70px">No</th>
                            <th style="min-width: 150px">Title</th>
                            <th style="min-width: 200px">Deskripsi</th>
                            <th style="min-width: 130px">Gambar</th>
                            <th style="min-width: 150px">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(!empty($boots_artwork)) : ?>
                            <?php $no = 1; foreach($boots_artwork as $artwork) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td class="text-start"><?= $artwork['title'] ?></td>
                                    <td class="text-start"><?= substr($artwork['deskripsi'], 0, 100) ?>...</td>
                                    <td>
                                        <img 
                                            src="/img_uploads/<?= $artwork['gambar'] ?>" 
                                            alt="<?= $artwork['title'] ?>"   
                                            class="img-fluid rounded"
                                            style="width: 90px; height: 120px; object-fit: cover;"
                                        >
                                    </td>
                                    <td>
                                        <a href="/admin_boots/edit/<?= $artwork['id'] ?>" class="btn btn-warning btn-sm mb-1">
                                            Edit
                                        </a>
                                        <a 
                                            href="/admin_boots/delete/<?= $artwork['id'] ?>" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                                        >
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Boots Artwork</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="/admin_boots/save" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"
                                   class="form-control <?= $validation->hasError('title') ? 'is-invalid' : '' ?>"
                                   id="title" name="title" value="<?= old('title') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('title') ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <?php foreach($kategori as $kat) : ?>
                                    <option value="<?= $kat['id_kategori'] ?>"><?= $kat['kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea 
                                class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : '' ?>"
                                id="deskripsi" name="deskripsi" rows="5"><?= old('deskripsi') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi') ?>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file"
                                   class="form-control <?= $validation->hasError('gambar') ? 'is-invalid' : '' ?>"
                                   id="gambar" name="gambar">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar') ?>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
