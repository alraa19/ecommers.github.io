<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<div data-role="panel" data-title-caption="Daftar Distributor" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-6">
    <div class="container">

        <table class="table table-striped cell-border row-hover">
            <a class="button outline success mb-3" href="<?= $base_url; ?>distributor/add/">Create data</a>
            <thead class="bg-info">
                <th>Nomor</th>
                <th>Nama Distributor</th>
                <th>Alamat</th>
                <th>No telepon</th>
                <th colspan=4>Tools</th>
            </thead>
            <?php
            $no = 1;
            foreach ($data['distri'] as $distri) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $distri['nmdist'] ?></td>
                    <td><?= $distri['alamat'] ?></td>
                    <td><?= $distri['notelp'] ?></td>
                    <td><a class="button info" href="<?= $base_url . 'distributor/edit/' . $distri['iddist'] ?>"> <span class="mif-pencil"></span></a>
                        <a class="button alert" href="<?= $base_url . 'distributor/delete/' . $distri['iddist'] ?>" onclick="return confirm('yakin dihapus?')"><span class="mif-bin"></span></a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>

    </div>