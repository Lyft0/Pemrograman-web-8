<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4"><b>Mon</b>itoring <b>IoT</b></h2>
            <div class="hr"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm">
            <p>Mon IoT (Monitoring IoT) adalah aplikasi berbasis website untuk memantau dan menampilkan data perangkat IoT yang tersedia pada suatu kantor.</p><br>
            <p>Tampilannya : </p>
            <img src="/img/ss.png" alt="" class="ss_img border">
        </div>
        <div class="col-sm">
            <img src="/img/iot.png" alt="" class="iot_img">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>