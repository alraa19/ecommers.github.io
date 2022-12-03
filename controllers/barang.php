<?php
if ($aksi == 'index') {
    $data['barang'] = $db->query($connect, "SELECT * FROM vbarang");
    $helpers->template('Barang/barang.php', $data);
}
if ($aksi == 'add') {
    $data['kdbarang'] = $db->query($connect, "SELECT max(idbarang) as kodebarang FROM tbarang");
    $data['jenbarang'] = $db->query($connect, "SELECT * FROM tjenis");
    $data['distri'] = $db->query($connect, "SELECT * FROM tdistributor");
    $helpers->template('Barang/addbarang.php', $data);
}
if ($aksi == 'save') {
    $idbarang = $_POST['idbarang'];
    $nmbarang = $_POST['nmbarang'];
    $idjenis = $_POST['idjenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $iddist = $_POST['iddist'];
    $status = 1;
    $simpan = $db->qry($connect, "INSERT INTO tbarang VALUES ('$idbarang','$nmbarang','$idjenis','$stok','$harga','$iddist','$status')");
    if ($simpan)
        header('location:' . $base_url . 'barang');
    else {
        header('location:' . $base_url . 'barang/add');
    }
}
if ($aksi == 'edit') {
    $idbarang = $uri[4];
    $data['brg'] = $db->query($connect, "SELECT * FROM vbarang WHERE idbarang=$idbarang");
    $data['jenbarang'] = $db->query($connect, "SELECT * FROM tjenis");
    $data['distri'] = $db->query($connect, "SELECT * FROM tdistributor");
    $helpers->template('barang/editbarang.php', $data);
}
if ($aksi == 'ubah') {
    # code...
    $idbarang = $uri[4];
    $nmbarang = $_POST['nmbarang'];
    $idjenis = $_POST['idjenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $iddist = $_POST['iddist'];
    $update = $db->qry($connect, "UPDATE tbarang SET nmbarang='$nmbarang', stok='$stok', harga='$harga' WHERE idbarang='$idbarang'");
    if ($update) {
        # code...
        header('location:' . $base_url . 'barang');
    } else {
        header('location:' . $base_url . 'barang/edit');
    }
}
if ($aksi == 'hapus') {
    $idbarang = $uri[4];
    $hapus = $db->qry($connect, "DELETE FROM tbarang WHERE idbarang='$idbarang'");
    if ($hapus)
        header('location:' . $base_url . 'barang');
    else {
        header('location:' . $base_url . 'barang/hapus');
    }
}
