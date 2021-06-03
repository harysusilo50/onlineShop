<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">
            <?php foreach($barang as $brg): ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url().'/assets/'.$brg->gambar ?>" class="card-img-top" alt="gambar">
                    </div>
                    <div class="col-md-8">
                        <table>
                            <tr>
                                <th scope="col">Nama Produk</th>
                                <td><strong><?= $brg->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <strong>
                                        <div class="btn btn-sm btn-success">
                                                Rp. <?= number_format($brg->harga,0,',','.') ?>
                                        </div>
                                    </strong>
                                </td>
                            </tr>
                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary"> Add to Cart </div>')?>
                        <?= anchor('dashboard/index/','<div class="btn btn-sm btn-danger"> Back </div>')?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
</div>
