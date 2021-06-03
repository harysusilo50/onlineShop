<div class="container-fluid">
    <div class="alert alert-success">
        <p class="text-center align-middle">Selamat! Pesanan Kamu Berhasil diproses!</p>
        <div class="card p-5">
            <h1>#INVOICE</h1>
            <?php $invoice = $this->db->get_where('invoice', ['username' => $this->session->userdata('username')])->result_array(); 
             ?>
             <?php foreach($invoice as $inv): ?>
            <td>Nama : <?php echo $inv['nama'] ?></td><br>
            <td>Alamat :<?php echo $inv['alamat'] ?></td><br>
            <td>Tanggal Pemesanan :<?php echo $inv['tgl_pesan'] ?></td><br>
            <td>Batas Bayar : <?php echo $inv['batas_bayar'] ?></td><br>
            <td>Layanan Ekspedisi : <b> <?php echo $inv['ekspedisi'] ?></b></td><br>
            <td>Metode Pembayaran : <b> <?php echo $inv['metode'] ?></b></td><br>
            <td>Kode Pembayaran : <b> <?php echo $inv['kode_unik'] ?></b></td><br>
        
            <?php endforeach; ?>
            
        </div>
    </div>
</div>