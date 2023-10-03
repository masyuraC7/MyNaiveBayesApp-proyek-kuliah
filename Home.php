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
            <div class="card">
                <div class="card-header">
                    Data Latih
                </div>
                <div class="card-body">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
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

                    <a type="button" href="proses.php" class="btn btn-primary">Hitung Probabilitas</a>
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
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>