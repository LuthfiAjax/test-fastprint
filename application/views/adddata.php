<h1 class="fs-4 text-center mt-3">Tambahkan Products</h1>

<div class="col-lg-8 mx-auto">
    <div class="d-flex justify-content-center">
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form action="<?= base_url('add'); ?>" method="post">

                <div class="mb-3">
                    <label for="namaproduct" class="form-label">Nama Product</label>
                    <input type="text" class="form-control" id="namaproduct" name="namaproduct" required>
                    <?= form_error('namaproduct', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" aria-label="Default select example" id="kategori" name="kategori">
                        <option selected Disabled>Pilih Kategory</option>
                        <?php foreach ($categories as $row) : ?>
                        <option value="<?= $row['kategori']; ?>"><?= $row['kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" aria-label="Default select example" id="status" name="status">
                        <option selected Disabled>Pilih Status</option>
                        <option value="bisa dijual">bisa dijual</option>
                        <option value="tidak bisa dijual">tidak bisa dijual</option>
                    </select>
                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-lg btn-primary">Simpan data</button>
                </div>

            </form>
        </div>
    </div>
</div>