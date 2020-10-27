<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Mata Pelajaran
        </div>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $barang['ID_barang']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Nama Barang: </b></label>
                    <?= $barang['namabarang']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> Harga : </b></label>
                    <?= $barang['harga']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Stock : </b></label>
                    <?= $barang['stock']; ?>
                </p>
                
               

                <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>