<!-- <?php var_dump($barang); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert"> Data
                    Barang <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Daftar Barang</h2>

                    <?php if (empty($barang)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data Barang Tidak Ditemukan.
                        </div>
                    <?php endif; ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <form action=" " method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Masukkan Data" name="keyword" value="<?= set_value("keyword") ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="submit"><b> Cari </b></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group">
                        <table class="table table-striped table-light">
                            <thead>
                                <tr>
                                    <th scope="col"> ID_barang </th>
                                    <th scope="col"> Namabarang </th>
                                    <th scope="col"> Harga </th>
                                    <th scope="col"> Stock </th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang as $bg) { ?>
                                    <tr>
                                        <td><?php echo $bg['ID_barang'] ?></td>
                                        <td><?php echo $bg['namabarang'] ?></td>
                                        <td><?php echo $bg['harga'] ?></td>
                                        <td><?php echo $bg['stock'] ?></td>
                                        
                                      

                                        <td>
                                        <a href="<?= base_url(); ?>barang/hapus/<?= $bg['ID_barang']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Ingin menghapus Mapel Ini?');">Hapus</a>
                                        <a href="<?= base_url(); ?>barang/edit/<?= $bg['ID_barang']; ?>" class="badge badge-success float-right">Edit</a>
                                        <a href="<?= base_url(); ?>barang/detail/<?= $bg['ID_barang']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    <a href="<?= base_url(); ?>Barang/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
</div>