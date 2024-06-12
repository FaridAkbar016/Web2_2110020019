<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa oleh Nama dan NIM</title>
</head>

<body>
    <h1>Form Tambah Mahasiswa</h1>
    <form action="<?php site_url('mahasiswa/simpan') ?>"
    method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim"><br>
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input type="text" name="nama_mhs"><br>
        <label for="id_prodi">Program Studi</label>
        <select name="id_prodi" id="id_prodi" required>
            <option value="">Pilih Program Studi</option>
            <?php foreach ($prodi as $ps) : ?>
                <option value="<?= $ps->id_prodi ?>">
                    <? $ps->nama_prodi ?></option>
                    <?php endforeach; ?>
        </select>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>