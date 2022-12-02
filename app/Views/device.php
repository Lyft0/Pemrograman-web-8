<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Daftar Device</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($device as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $d['device_image']; ?>" alt="" class="device_img"></td>
                            <td><?= $d['device_name']; ?></td>
                            <td><?= $d['device_brand']; ?></td>
                            <td><?= $d['device_quantity']; ?></td>
                            <td><?= $d['device_status'] == 1 ? 'On' : 'Off'; ?></td>
                            <td>
                                <a href="/device/detail/<?= $d['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>