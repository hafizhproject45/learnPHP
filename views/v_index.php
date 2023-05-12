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
    body {
        background-color: #1c211f;
        padding: 10px;
        overflow: hidden;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border: 1px solid black;
    }

    td>a {
        text-decoration: none;
        background-color: #ffa500;
        padding: 5px;
        border-radius: 20%;
    }

    th {
        background-color: lightgreen;
        color: black;
        text-decoration: none;
    }

    th>a {
        text-decoration: none;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f2fffe;
    }

    tr:nth-child(odd) {
        background-color: white;
    }

    .myButton {
        background-color: lightgreen;
        border-radius: 28px;
        display: inline-block;
        cursor: pointer;
        color: black;
        font-family: Arial;
        font-size: 17px;
        padding: 10px 25px;
        text-decoration: none;
        text-shadow: 0px 1px 0px #2f6627;
    }

    .myButton:hover {
        background-color: darkgreen;
    }

    .myButton:active {
        position: relative;
        top: 1px;
    }

    h1 {
        font-size: 50px;
        text-align: center;
        padding: 0;
        color: white;
    }

    .btnLogout {
        position: relative;
        background-color: #ff0f0f;
        border-radius: 20px;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-family: Arial;
        font-size: 17px;
        padding: 10px 25px;
        text-decoration: none;
        text-shadow: 0px 1px 0px #2f6627;
    }

    .btnLogout:hover {
        background-color: darkred;
    }

    .search {
        margin-top: 20px;
    }

    .btnlower {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <h1>Data Siswa</h1>

    <form class="search" action="index.php" method="GET">
        <div class="row">
            <div class="col-sm-2 pb-3">
                <input class="form-control" type="text" name="search" value="<?= @$search ?>" placeholder="search">
            </div>
            <div class="col-sm-1">
                <input class="btn btn-primary form-control btn-primary" type="submit" name="reset" value="Search">
            </div>
            <div class="col-sm-1">
                <input class="btn btn-warning form-control" type="submit" name="reset" value="Reset">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col">
            <a href="tambah.php" class="myButton">Tambah Data</a>
            <a href="logout.php" class="btnLogout">Logout</a>
        </div>
    </div>
    <table>
        <tr>
            <th>Foto</th>
            <th>No</th>
            <th>
                NIS
                <a href="index.php?sort=nis&order=asc">▲</a>
                <a href="index.php?sort=nis&order=desc">▼</a>
            </th>
            <th>
                Nama Lengkap
                <a href="index.php?sort=nama_lengkap&order=asc">▲</a>
                <a href="index.php?sort=nama_lengkap&order=desc">▼</a>
            </th>
            <th>
                Jenis Kelamin
                <a href="index.php?sort=jenis_kelamin&order=asc">▲</a>
                <a href="index.php?sort=jenis_kelamin&order=desc">▼</a>
            </th>
            <th>
                Kelas
                <a href="index.php?sort=kelas&order=asc">▲</a>
                <a href="index.php?sort=kelas&order=desc">▼</a>
            </th>
            <th>
                Jurusan
                <a href="index.php?sort=jurusan&order=asc">▲</a>
                <a href="index.php?sort=jurusan&order=desc">▼</a>
            </th>
            <th>
                Alamat
                <a href="index.php?sort=alamat&order=asc">▲</a>
                <a href="index.php?sort=alamat&order=desc">▼</a>
            </th>
            <th>
                Golongan Darah
                <a href="index.php?sort=golongan_darah&order=asc">▲</a>
                <a href="index.php?sort=golongan_darah&order=desc">▼</a>
            </th>
            <th>
                Nama Ibu Kandung
                <a href="index.php?sort=nama_ibu_kandung&order=asc">▲</a>
                <a href="index.php?sort=nama_ibu_kandung&order=desc">▼</a>
            </th>
            <th>Action</th>
        </tr>
        <?php
    $i = 1;
    while($siswa = $listSiswa -> fetch_array()){
    ?>
        <tr>
            <td><img src="<? echo base_url()?>/asset/upload/<? echo $row->file?>" width="80px" alt=""></td>
            <td><?= $i++ ?></td>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama_lengkap'] ?></td>
            <td><?= $siswa['jenis_kelamin'] ?></td>
            <td><?= $siswa['kelas'] ?></td>
            <td><?= $siswa['jurusan'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['golongan_darah'] ?></td>
            <td><?= $siswa['nama_ibu_kandung'] ?></td>
            <td>
                <a href="edit.php?nis=<?= $siswa['nis']?>">✏️</a>
                <a href="delete.php?nis=<?= $siswa['nis']?>">🗑️</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>

</html>