<div class="m-4">
    <h4 class="m-3"><i class="fas fa-shopping-cart"></i> Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-light">
        <tr class="text-center">
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>
        <?php 
            $no = 1;
            foreach($this->cart->contents() as $items) : ?>
                <tr class="text-center">
                    <td ><?= $no++ ?></td>
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td>Rp. <?= number_format($items['price'], 0,',','.') ?></td>
                    <td>Rp. <?= number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
            <?php endforeach; ?>
                <tr class="text-center">
                    <td colspan="4"></td>
                    <td> <b> Rp.<?= number_format($this->cart->total(), 0,',','.') ?></b></td>
                </tr>
    </table>

    <div align="right">
                <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
                <a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
                <a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>
