<?php
if ($aksi == 'index') {
    $data['title'] = 'Halaman Login';
    $helpers->load_view('login/login.php', $data);
}
if ($aksi == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek = $db->query($connet, " SELECT * FROM tuser WHERE username='$username' AND password='$password'");
    if (count($cek) > 0) {
        $_SESSION['iduser'] = $cek[0]['iduser'];
        header('location:' . $base_url);
    } else {
        echo "SELECT * FROM tuser WHERE username='$username' AND password='$password'";
        header('location:' . $base_url . 'login');
    }
}
