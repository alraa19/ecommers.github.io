<?php
if ($aksi == 'index') {
    $data['jenis'] = $db->query($connect, "SELECT * FROM tjenis");
    $helpers->template('Jenis/jenis.php', $data);
}
if ($aksi == 'add') {
    $idjenis = $uri[4];
    $data['jenbarang'] = $db->query($connect, "SELECT * FROM tjenis");
    $data['distri'] = $db->query($connect, "SELECT * FROM tdistributor");
    $helpers->template('Jenis/addjenis.php');
}
if ($aksi == 'save') {
    $jenisbarang = $_POST['jenisbarang'];
    $ket = $_POST['ket'];
    $simpan = $db->qry($connect, "INSERT INTO tjenis VALUES('', '$jenisbarang', '$ket')");
    if ($simpan)
        header('location:' . $base_url . 'jenis');
    else {
        header('location:' . $base_url . 'jenis/add');
    }
}
if ($aksi == 'edit') {
    $idjenis = $uri[4];
    $data['jenis'] = $db->query($connect, "SELECT * FROM tjenis WHERE idjenis='$idjenis'");
    $helpers->template('jenis/editjenis.php', $data);
}
if ($aksi == 'ubah') {
    $idjenis = $uri[4];
    $jenisbarang = $_POST['jenisbarang'];
    $ket = $_POST['ket'];
    $ubah = $db->qry($connect, "UPDATE tjenis SET jenisbarang='$jenisbarang',ket='$ket' WHERE idjenis='$idjenis'");
    if ($ubah)
        header('location:' . $base_url . 'jenis');
    else {
        header('location:' . $base_url . 'jenis/edit');
    }
}
if ($aksi == 'hapus') {
    $idjenis = $uri[4];
    $hapus = $db->qry($connect, "DELETE FROM tjenis WHERE idjenis='$idjenis'");
    if ($hapus)
        header('location:' . $base_url . 'jenis');
    else {
        header('location:' . $base_url . 'jenis/hapus');
    }
}
