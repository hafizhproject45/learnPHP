<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .col {
        padding: 2px;
    }

    #login {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #1c211f;
        padding-bottom: 10vh;
    }

    #judul {
        font-size: 4em;
        font-style: bold;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    label {
        font-style: bold
    }
    </style>
</head>

<body>
    <?php
    $action = 'tambah.php';
    $nisDisable = '';
    if(!empty($siswa)) $action = 'edit.php';
    if(!empty($siswa)) $nisDisable = 'none';
    ?>

    <section id="login">
        <div class="container text-light">
            <div class="row justify-content-center align-items-center">
                <h1 id="judul" class="text-light text-center pt-5">Tambah Data Siswa</h1>
                <div class="col-sm-3 pt-5">
                    <form class="form-horizontal" action="<?= $action ?>" method="post" enctype="multipart/form-data">
                        <div class="col" style="display: <?= $nisDisable ?>;">
                            <label>NIS</label>
                            <input type="text" name="nis" class="form-control" value="<?= @$siswa['nis'] ?>">
                        </div>
                        <div class="col">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control"
                                value="<?= @$siswa['nama_lengkap'] ?>">
                        </div>
                        <div class="col">
                            <label>Jenis Kelamin</label>
                            <br>
                            <input type="radio" name="jenis_kelamin" value="L"
                                <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>> Laki-Laki
                        </div>
                        <div class="col">
                            <input type="radio" name="jenis_kelamin" value="P"
                                <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>> Perempuan
                        </div>
                        <div class="col">
                            <label>kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="X" <?= @$siswa['kelas'] == 'X' ? 'selected' : '' ?>>X</option>
                                <option value="XI" <?= @$siswa['kelas'] == 'XI' ? 'selected' : '' ?>>XI</option>
                                <option value="XII" <?= @$siswa['kelas'] == 'XII' ? 'selected' : '' ?>>XII</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Jurusan</label>
                            <input class="form-control" type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>">
                        </div>
                        <div class="col">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" value="<?= @$siswa['alamat'] ?>">
                        </div>
                        <div class="col">
                            <label>Golongan Darah</label>
                            <input class="form-control" type="text" name="golongan_darah"
                                value="<?= @$siswa['golongan_darah'] ?>">
                        </div>
                        <div class="col">
                            <label>Nama Ibu Kandung</label>
                            <input class="form-control" type="text" name="nama_ibu_kandung"
                                value="<?= @$siswa['nama_ibu_kandung'] ?>">
                        </div>
                        <div class="col">
                            <label>Foto</label>

                            <? if($form == "edit"){?>
                            <img src="<? echo base_url() ?>/asset/upload/<? echo @$result->file ?>" width="80px" alt="">
                            <input type="hidden" name="foto" value="<? echo @$result->file ?>">
                            <?}?>
                            <input type="file" name="foto">
                        </div>
                        <div class="col pt-4">
                            <input type="submit" class="btn btn-primary form-control" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>