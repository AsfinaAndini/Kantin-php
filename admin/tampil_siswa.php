<!DOCTYPE html>
<html>

<head>
    <title>Tampil Siswa</title>
    <?php include 'navbar.php' ?>

    <section class="container-fluid p-lg-5">

        <table class="w-100 table table-hover table-striped p-5 rounded shadow">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>EMAIL</th>
                    <th>SALDO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "server.php";
                $qry_siswa = mysqli_query($conn, "select * from siswa");
                $no = 0;
                while ($data_siswa = mysqli_fetch_array($qry_siswa)) {
                    $no++; ?>
                    <tr>
                        <td>
                            <?= $data_siswa['id_siswa'] ?>
                        </td>
                        <td>
                            <?= $data_siswa['nama'] ?>
                        </td>
                        <td>
                            <?= $data_siswa['kelas'] ?>
                        </td>
                        <td>
                            <?= $data_siswa['email'] ?>
                        </td>
                        <td>
                            <?= $data_siswa['saldo_siswa'] ?>
                        </td>
                        <td>
                            <a href="ubah_siswa.php?id_siswa=<?= $data_siswa['id_siswa'] ?>"
                                class="btn btn-success tombol tombol-kecil">Ubah</a>
                            <a href="hapus.php?id_siswa=<?= $data_siswa['id_siswa'] ?>"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                class="btn btn-danger tombol tombol-kecil">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>

        <?php include 'link.scripts.php' ?>
    </section>

</html>