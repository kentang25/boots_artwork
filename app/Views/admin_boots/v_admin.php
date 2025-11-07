<?= $this->extend('layout_admin/template_admin') ?>
<?= $this->section('content') ?>

<div class="container me-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Tambah Data Boots Artwork</h3>
        </div>
        <div class="card-body text-white">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped table-hover text-center align-middle">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            
                            if(!empty($boots_artwork)) :
                            $no = 1;
                            foreach($boots_artwork as $artwork) :
                            
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $artwork['title'] ?></td>
                            <td><?= $artwork['deskripsi'] ?></td>
                            <td><img src="/img_uploads/<?= $artwork['gambar'] ?>" alt="<?= $artwork['title'] ?>"
                                    class="img-fluid" style="width:100px; height: 150px;"></td>
                            <td>
                                <?= anchor('/admin_boots/edit/' . $artwork['id'], 'Edit', ['class' => 'btn btn-warning btn-sm']) ?>
                                <?= anchor('/admin_boots/delete/' . $artwork['id'], 'Delete', ['class' => 'btn btn-danger btn-sm', 'data-confirm' => 'Are you sure you want to delete this item?']) ?>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                            else :
                        ?>

                        <tr>
                            <td colspan="5">No data available</td>
                        </tr>
                        <?php
                            endif;
                        ?>
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/admin_boots/save" enctype="multipart/form-data">
                                    <?= csrf_field() ?>

                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text"
                                            class="form-control <?= $validation->hasError('title') ? 'is-invalid' : '' ?>"
                                            id="title" name="title" value="<?= old('title') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('title') ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea
                                            class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : '' ?>"
                                            id="deskripsi" name="deskripsi" rows="10"><?= old('deskripsi') ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('deskripsi') ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input type="file"
                                            class="form-control <?= $validation->hasError('gambar') ? 'is-invalid' : '' ?>"
                                            id="gambar" name="gambar">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar') ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>