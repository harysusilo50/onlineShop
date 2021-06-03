<div class="m-4">
    <button class="btn btn-primary m-4" data-toggle="modal" data-target="#tambah_barang"> <i class="fas fa-plus"></i> Tambah Barang</button>

    <table class="table table-bordered table-striped table-light">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center" >NAMA BARANG</th>
            <th class="text-center" >KETERANGAN</th>
            <th class="text-center" >KATEGORI</th>
            <th class="text-center" >HARGA</th>
            <th class="text-center" >STOK</th>
            <th class="text-center" colspan="3">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach($barang as $brg) : ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $brg->nama_brg ?></td>
                <td><?= $brg->keterangan ?></td>
                <td><?= $brg->kategori ?></td>
                <td><?= $brg->harga ?></td>
                <td><?= $brg->stok ?></td>
				<td><?= anchor('admin/data_barang/detail_barang/'.$brg->id_brg,'<div class="btn btn-success btn-sm"> <i class="fas fa-search-plus"></i> </div>');
                ?></td>
                <td><?= 
                anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </div>');
                ?></td>
                <td><?=
                anchor('admin/data_barang/hapus/'.$brg->id_brg,'<div class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </div>');
                ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="modal fade" id="tambah_barang" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="<?= base_url();?>admin/data_barang/tambah_aksi" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>Album</option>
                            <option>Idol</option>
                            <option>Perlengkapan Konser</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label> <br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Oke bang</button>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>
