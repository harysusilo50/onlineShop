<div class="container">
    <?php
    $grand_total = 0;
    if ($keranjang = $this->cart->contents()) {
        foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
        }
    ?>
        <div class="card p-5">
            <div class="btn btn-success mb-3">
                <?= "<h4>Total Belanja Kamu : Rp. " . number_format($grand_total, 0, ',', '.'); ?>
            </div>
            <h3 class="mb-5">Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url(); ?>dashboard/proses_pesanan">
            <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?= $this->session->username; ?>" placeholder="<?= $this->session->username; ?>" class="form-control" required disabled>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Kamu" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Kamu" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Kamu" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select name="ekspedisi" class="form-control" required>
                        <option disabled selected>- Pilih Jasa Pengiriman -</option>
                        <option value="JNE">JNE</option>
                        <option value="TIKI">TIKI</option>
                        <option value="WAHANA">Wahana</option>
                        <option value="SI CEPAT">Si Cepat</option>
                        <option value="LION PARCEL">Lion Parcel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select name="metode" class="form-control" required>
                        <option disabled selected>- Pilih Metode Pembayaran -</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">Mandiri</option>
                        <option value="BCA">BCA</option>
                        <option value="INDOMARET">Indomaret</option>
                        <option value="ALFAMART">Alfamart</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-block btn-primary mb-3">Pesan</button>
            </form>
        </div>
    <?php
    } else {
        echo "<h4> Isi Keranjang Belanja Kamu, yuk!";
    }
    ?>
</div>