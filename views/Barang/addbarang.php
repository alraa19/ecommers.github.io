<div data-role="panel" data-title-caption="List Add Barang" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <?php
    foreach ($data['kdbarang'] as $kdbarang) {
        $kodebarang = $kdbarang['kodebarang'];
        $urutan = (int) substr($kodebarang, 4, 4);
        $urutan++;
        $angka = "2022";
        $kodebarang = $angka . sprintf("%04s", $urutan);
    }
    ?>
    <form action="<?= $base_url ?>barang/save" method="post">
        <div>
            <label for="">Id Barang</label>
            <input type="text" name="idbarang" id="" value="<?= $kodebarang ?>" readonly>
        </div>
        <div>
            <label for="">Nama Barang</label>
            <input type="text" name="nmbarang" id="" placeholder="Nama Barang" required>
        </div>
        <div>
            <label for="">Jenis Barang</label>
            <select name="idjenis" id="">
                <option>pilih</option>
                <?php foreach ($data['jenbarang'] as $jen) { ?>
                    <option value="<?= $jen['idjenis'] ?>"> <?= $jen['jenisbarang'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="">Stok Barang</label>
            <input type="number" name="stok" id="" placeholder="Stok Barang" required>
        </div>
        <div>
            <label for="">Harga Barang</label>
            <input type="number" name="harga" id="" placehokder="Harga Barang" require>
        </div>
        <div>
            <label for="">Nama Pengirim</label>
            <select name="iddist" id="">
                <option>Pilih</option>
                <?php foreach ($data['distri'] as $dist) { ?>
                    <option value="<?= $dist['iddist'] ?>">
                        <?= $dist['nmdist'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <button type="submit" name="simpan">simpan</button>
            <button type="reset" name="batal">batal</button>
        </div>
    </form>
</div>