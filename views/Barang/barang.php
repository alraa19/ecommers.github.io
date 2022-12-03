<div data-role="panel" data-title-caption="List Barang" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <table class="table row-hover">
        <a class="button outline success mb-3" href="<?= $base_url; ?>barang/add/"> Create data</a>
        <thead>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>
            <th>Status Barang</th>
            <th>Pengirim</th>
            <th colspan="3">Tools</th>
        </thead>
        <?php
        foreach ($data['barang'] as $barang) {
        ?>
            <tbody>
                <td><?= $barang['idbarang'] ?></td>
                <td><?= $barang['nmbarang'] ?></td>
                <td><?= $barang['jenisbarang'] ?></td>
                <td><?= $barang['stok'] ?></td>
                <td><?= $barang['harga'] ?></td>
                <?php
                if ($barang['status'] == 1) {
                    if ($barang['stok'] >= 1) {
                        $status = "Ready";
                    } else {
                        $status = "Sold Out";
                    }
                }
                ?>
                <td><?= $barang['status'] ?></td>
                <td><?= $barang['nmdist'] ?></td>
                <td><a class="button success" href="<?= $base_url . 'barang/add' . $barang['idbarang'] ?>">Beli</a></td>
                <td><a class="button info" href="<?= $base_url . 'barang/edit/' . $barang['idbarang'] ?>"> <span class="mif-pencil"></span></a>
                    <a class="button alert" href="<?= $base_url . 'barang/hapus/' . $barang['idbarang'] ?>" onclick="return confirm('yakin dihapus?')"><span class="mif-bin"></span></a>
                </td>
            </tbody>
        <?php } ?>
    </table>
</div>