<div data-role="panel" data-title-caption="List Distributor" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <form class="justify-content-center align-items-center" action="<?= $base_url ?>distributor/save" method="post">
        <label class="form-label" for="">Nama Distributor</label>
        <input class="metro-input mb-3" type="text" name="nmdist" id="" placeholder="Nama Distributor" required>
        <div class="form-floating">
            <label for="floatingTextarea">Alamat</label>
            <textarea class="metro-input mb-3" placeholder="Alamat Distributor" id="floatingTextarea" name="alamat"></textarea>
        </div>
        <label class="form-label" for="">No telpon</label>
        <input class="metro-input mb-3" type="text" name="notelp" id="" placeholder="No Telepon" required>
        <button type="submit" class="btn button success rounded-pill  mb-1">Simpan</button>
        <button type="reset" class="btn button alert rounded-pill  mb-1">Batal</button>
    </form>
</div>