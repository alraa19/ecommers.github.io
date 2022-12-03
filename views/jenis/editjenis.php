<div data-role="panel" data-title-caption="List Edit Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <?php foreach ($data['jenis'] as $edit) { ?>
        <form action="<?= $base_url . 'jenis/ubah/' . $edit['idjenis'] ?>" method="post">
            <label for="">Jenis Barang</label>
            <input type="text" name="jenisbarang" id="" value="<?= $edit['jenisbarang'] ?>">
            <label for="">Keterangan</label>
            <input type="text" name="ket" id="" value="<?= $edit['ket'] ?>">
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
        </form>
    <?php } ?>
</div>