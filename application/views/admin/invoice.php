<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Kode Pembayaran</th>
            <th>Detail</th>
            <th>Status</th>
            <th>Setujui</th>
            <th>Tolak</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo $inv->kode_unik ?></td>
                <td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                <td id="hasil">Status</td>
                <td>
                    <div class="btn btn-success">Setujui</div>
                </td>
                <td>
                    <div class="btn btn-danger">Tolak</div>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>
