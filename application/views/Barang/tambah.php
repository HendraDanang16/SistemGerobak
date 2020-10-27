<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors()?></div>
                    <?php endif ?>
                    <form action="" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ID_barang"> ID_barang </label>
                            <input type="text" class="form-control" id="ID_barang" name="ID_barang">
                        </div>

                        <div class="form-group">
                            <label for="namabarang"> Nama Barang</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang">
                        </div>

                        <div class="form-group">
                            <label for="harga"> Harga </label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>

                        <div class="form-group">
                            <label for="stock"> Stock </label>
                            <input type="text" class="form-control" id="stock" name="stock">
                        </div>


                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>