<div data-role="panel" data-title-caption="List Add Jual" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <?php
    foreach ($data['jual'] as $jual) {
        if ($jual > 0) {
            $no = ((int)$jual['kdjual']) + 1;
            $kd = sprintf("%04s", $no);
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('asia/jakarta');
        $kodejual = date('ymd') . $kd;
    }
    ?>
    <script type="text/javascript">
        function startCalc() {
            interval = setinterval("calc()", 1);
        }

        function calc() {
            harga = document.jual.harga.value;
            qty = document.jual.jmlbarang.value;
            bayar = document.jual.bayar.value;
            total = document.jual.totalharga;
            kembalian = document.jual.kembali;
            total.value = (harga * 1) * (qty * 1);
            kembalian.value = (bayar * 1) - (total.value * 1);
        }

        function stopCalc() {
            clearinterval(interval);
        }
    </script>
    <div>
        <form action="<?= $base_url ?>jual/save" method="post" name="jual">
            <div>
                <label for="">Id Jual</label>
                <input type="text" name="idjual" id="" value="<?= $kdjual ?>" readonlys>
            </div>
            <div>
                <label for="">Tanggal Transaksi</label>
                <input type="date" name="tgljual" id="" placholder="yyyy-mm-dd" required>
            </div>
            <div>
                <?php
                foreach ($data['brg'] as $brg) {
                ?>
                    <label for="">Nama Barang</label>
                    <input type="text" name="idbarang" id="" value="<?= $brg['idbarang'] ?>" hidden>
                    <input type="text" name="nmbarang" id="" value="" reandonly>
                    <div>
                        <input type="text" name="harga" id="" value="<?= $brg['harga'] ?>" onfocus="startCalc()" onblur="stopCalc()" reandonly>
                    </div>
                <?php } ?>
            </div>
            <div>
                <label for="">qty</label>
                <input type="number" name="jmlbarang" id="" onfocus="startCalc()" onblur="stopCalc()" required>
            </div>
            <div>
                <label for="">Total Harga</label>
                <input type="number" name="totalharga" id="" onfocus="startCalc()" onblur="stopCalc()" reandonly>
            </div>
            <div>
                <label for="">Bayar</label>
                <input type="number" name="bayar" id="" onfocus="startCalc()" onblur="startCalc()" required>
            </div>
            <div>
                <label for="">Kembalian</label>
                <input type="number" name="kembalian" id="" onfocus="startCalc()" onblur="startCalc()" reandonly>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>