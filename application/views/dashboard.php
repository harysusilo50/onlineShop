<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid my-5">
    <div class="row text-center">
        <?php foreach($barang as $brg) : ?>
            <div class="card m-3 p-2 rounded border-top-0" style="width: 300px";>
                <img src="<?= base_url().'assets/'.$brg->gambar;?>" class="card-img-top rounded-lg" alt="...">
                <div class="card-body">
                <h4 class="card-title mb-1"><?= $brg->nama_brg ?></h4>
                    <small><?= $brg->keterangan ?></small>
                    <br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?=number_format($brg->harga, 0,',','.') ?></span>
                    <br>
                    <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary"> Add to Cart </div>')?>
										<?= anchor('dashboard/detail_barang/'.$brg->id_brg,'<div class="btn btn-sm btn-success"> Detail </div>')?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

