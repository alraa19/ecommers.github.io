<div data-role="panel" data-title-caption="List Add Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <form action="<?php echo $base_url ?>jenis/Save" method="post">
        <label for="">Jenis Barang</label>
        <input type="text" name="jenisbarang" id="" required>
        <label for="">Keterangan</label>
        <input type="text" name="ket" id="" required>
        <input type="submit" value="Simpan">
        <input type="reset" value="Batal">
    </form>
</div>