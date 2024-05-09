<?php
include_once('koneksi.php');
$paramedik = $dbh->query('SELECT * FROM paramedik');
$unit_kerja_id = $dbh->query('SELECT * FROM unit_kerja');

$id = $_GET['id'];
$paramedik = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Paramedik</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="paramedik_update.php" method="post">
        <input type="hidden" name="id" value="<?= $paramedik['id'] ?>">
        <div class="form-group row">
            <label for="id" class="col-4 col-form-label">ID</label>
            <div class="col-8">
                <input id="id" name="id" type="number" class="form-control" required="required" value="<?= $paramedik['id'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required" <?= $paramedik['gender'] == 'L' ? 'checked' : '' ?>>
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required" <?= $paramedik['gender'] == 'P' ? 'checked' : '' ?>>
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <select id="kategori" name="kategori" class="custom-select" required="required">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Kepala Rumah Sakit" required="required" <?= $paramedik['kategori'] == 'Kepala Rumah Sakit' ? 'selected' : '' ?>>Kepala Rumah Sakit</option>
                    <option value="Bidan" required="required" <?= $paramedik['kategori'] == 'Bidan' ? 'selected' : '' ?>>Bidan</option>
                    <option value="Dokter Spesialis" required="required" <?= $paramedik['kategori'] == 'Dokter Spesialis' ? 'selected' : '' ?>>Dokter Spesialis</option>
                    <option value="Satpam" required="required" <?= $paramedik['kategori'] == 'Satpam' ? 'selected' : '' ?>>Satpam</option>
                    <option value="Costumer Service" required="required" <?= $paramedik['kategori'] == 'Costumer Service' ? 'selected' : '' ?>>Costumer Service</option>
                    <option value="Dokter Anak" required="required" <?= $paramedik['kategori'] == 'Dokter Anak' ? 'selected' : '' ?>>Dokter Anak</option>
                    <option value="Lainnya" required="required" <?= $paramedik['kategori'] == 'Dokter Anak' ? 'selected' : '' ?>>Lainnya</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">No Telpon</label>
            <div class="col-8">
                <input id="telpon" name="telpon" type="text" class="form-control" required="required" value="<?= $paramedik['telpon'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"><?= $paramedik['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label>
            <div class="col-8">
                <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select" required="required">
                    <option value=>-- Pilih Unit Kerja --</option>
                    <?php foreach ($unit_kerja_id as $uni) : ?>
                        <option <?= $paramedik['unit_kerja_id'] == $uni['id'] ? 'selected' : '' ?> value="<?= $uni['id'] ?>"><?= $uni['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>