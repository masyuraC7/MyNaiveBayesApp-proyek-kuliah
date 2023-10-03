<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Metode Naive Bayes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    </head>
    <body class="container-fluid">
        <?php
            include 'dbconnect.php';
        ?>
        <!-- Header Section -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="logo-nv.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Metode Naive Bayes
            </a>
        </nav>

        <!-- Body Section -->
        <div class="card-body">
            Program dibawah ini merupakan program untuk implementasi perhitungan Algoritma Naive Bayes.
            <br><br>
            <!-- Data Latih Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Data Latih
                </div>
                <div class="card-body">
                    <table id="dtLatih" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Id Pelamar</th>
                                <th class="th-sm">Jenis Kelamin</th>
                                <th class="th-sm">Usia</th>
                                <th class="th-sm">Pengalaman</th>
                                <th class="th-sm">Pendidikan</th>
                                <th class="th-sm">Tes Wawancara</th>
                                <th class="th-sm">Tes Kemampuan</th>
                                <th class="th-sm">Tes Kesehatan</th>
                                <th class="th-sm">Seleksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($conn, "select *from datalatih");
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?= $data['IdPelamar'] ?></td>
                                <td><?= $data['Jk'] ?></td>
                                <td><?= $data['Usia'] ?></td>
                                <td><?= $data['Pengalaman'] ?></td>
                                <td><?= $data['Pendidikan'] ?></td>
                                <td><?= $data['TesWawancara'] ?></td>
                                <td><?= $data['TesKemampuan'] ?></td>
                                <td><?= $data['TesKesehatan'] ?></td>
                                <td><?= $data['Seleksi'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>

            <!-- Data Uji Section -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Data Uji
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Id Pelamar</th>
                                <th class="th-sm">Jenis Kelamin</th>
                                <th class="th-sm">Usia</th>
                                <th class="th-sm">Pengalaman</th>
                                <th class="th-sm">Pendidikan</th>
                                <th class="th-sm">Tes Wawancara</th>
                                <th class="th-sm">Tes Kemampuan</th>
                                <th class="th-sm">Tes Kesehatan</th>
                                <th class="th-sm">Prediksi Program</th>
                                <th class="th-sm">Seleksi</th>
                                <th class="th-sm">Kecocokan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($conn, "select *from datauji");
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?= $data['IdPelamar'] ?></td>
                                <td><?= $data['Jk'] ?></td>
                                <td><?= $data['Usia'] ?></td>
                                <td><?= $data['Pengalaman'] ?></td>
                                <td><?= $data['Pendidikan'] ?></td>
                                <td><?= $data['TesWawancara'] ?></td>
                                <td><?= $data['TesKemampuan'] ?></td>
                                <td><?= $data['TesKesehatan'] ?></td>
                                <td><?= $data['Prediksi'] ?></td>
                                <td><?= $data['Seleksi'] ?></td>
                                <td><?= $data['Koreksi'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-2">
                            <p>Jumlah Data Uji</p>
                            <p>Prediksi Benar</p>
                            <p>Prediksi Salah</p>
                            <p>Akurasi Perhitungan</p>
                        </div>
                        <div class="col-2">
                            <?php
                                $query = mysqli_query($conn, "select count(IdPelamar) as total from datauji");
                                $dtuji = mysqli_fetch_array($query);
                                $query = mysqli_query($conn, "select count(Koreksi) as pb from datauji where Koreksi = 'Benar'");
                                $pediksi_benar = mysqli_fetch_array($query);
                                $query = mysqli_query($conn, "select count(Koreksi) as ps from datauji where Koreksi = 'Salah'");
                                $pediksi_salah = mysqli_fetch_array($query);
                            ?>
                            <p><?= $dtuji['total'] ?></p>
                            <p><?= $pediksi_benar['pb'] ?></p>
                            <p><?= $pediksi_salah['ps'] ?></p>
                            <p><?= ($pediksi_benar['pb'] / $dtuji['total'] * 100)."%" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- Footer Section -->
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright: Final Project Statistik Komputasi B081 | 
                <a class="text-dark" href="#">Masyura Fanni Ramadhan - 21081010103</a>
            </div>
            <!-- Copyright -->
        </footer>
    </body>
</html>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dtLatih').DataTable();
        $('.dataTables_length').addClass('bs-select');  
    });
</script>