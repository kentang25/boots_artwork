<?= $this->extend('layout_admin/template_admin') ?>
<?= $this->section('content') ?>

  <div class="containter me-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Edit Boots Artwork</h3>
        </div>
        <div class="card-body">
            <form action="/admin_boots/update/<?= $edit_artwork['id'] ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= old('title', $edit_artwork['title']) ?>">

                <label for="deskripsi" class="form-label mt-3">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" cols="20">
                    <?= old('deskripsi', $edit_artwork['deskripsi']) ?>
                </textarea>

                <button type="submit" class="btn btn-primary mt-3">Update Artwork</button>
            </form>

        </div>
    </div>
  </div>


<?= $this->endSection() ?>