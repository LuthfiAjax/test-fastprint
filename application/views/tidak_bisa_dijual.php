<h1 class="fs-4 text-center mt-3">Data Products</h1>

<div class="col-lg-8 mx-auto">
    <div class="d-flex justify-content-center">
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="mb-3 d-flex justify-content-between">
                <a class="btn btn-sm btn-primary" href="<?= base_url('add'); ?>"><i
                        class="fa-sharp fa-solid fa-plus"></i> Tambah Data</a>

                <div class="dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tampilkan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url(''); ?>">Semua Data</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('bisa-dijual'); ?>">Bisa
                                Dijual</a></li>
                        <li><a class="dropdown-item bg-primary text-light"
                                href="<?= base_url('tidak-bisa-dijual'); ?>">Tidak Bisa Dijual</a>
                        </li>
                    </ul>
                </div>
            </div>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">#</th>
                        <th scope="col" style="width:40%">Nama Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
							$count = 1; 
							foreach ($products as $row) : 
						?>
                    <tr>
                        <td scope="row"><?= $count++; ?></td>
                        <td style="width:40%"><?= $row['nama_produk']; ?></td>
                        <td><?= $row['kategori']; ?></td>
                        <td><?= "Rp. " . number_format($row['harga'], 0, ',', '.'); ?></td>
                        <td><?= $row['status']; ?></td>
                        <td>
                            <a class="mx-2" href="<?= base_url('edit/'.$row['id_produk']); ?>"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return confirm('Apakah anda yakin untuk menghapus product ini ?')"
                                class="mx-2 text-danger" href="<?= base_url('delete/'.$row['id_produk']); ?>"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>