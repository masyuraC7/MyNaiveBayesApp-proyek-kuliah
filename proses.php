<?php

	include "dbconnect.php";
	
	//Jumlah Data Latih
	$query = mysqli_query($conn, "select count(IdPelamar) as total from datalatih");
	$total = mysqli_fetch_array($query);

	//Seleksi
	$query = mysqli_query($conn, "select count(Seleksi) as sd from datalatih where Seleksi = 'Diterima'");
	$sd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Seleksi) as std from datalatih where Seleksi = 'Tidak Diterima'");
	$std = mysqli_fetch_array($query);

	//Jenis Kelamin
	$query = mysqli_query($conn, "select count(Jk) as ld from datalatih where Jk = 'L' and Seleksi = 'Diterima'");
	$ld = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Jk) as ltd from datalatih where Jk = 'L' and Seleksi = 'Tidak Diterima'");
	$ltd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Jk) as pd from datalatih where Jk = 'P' and Seleksi = 'Diterima'");
	$pd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Jk) as ptd from datalatih where Jk = 'P' and Seleksi = 'Tidak Diterima'");
	$ptd = mysqli_fetch_array($query);

	//Usia
	$query = mysqli_query($conn, "select count(Usia) as u1d from datalatih where Usia = 1 and Seleksi = 'Diterima'");
	$u1d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Usia) as u1td from datalatih where Usia = 1 and Seleksi = 'Tidak Diterima'");
	$u1td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Usia) as u2d from datalatih where Usia = 2 and Seleksi = 'Diterima'");
	$u2d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Usia) as u2td from datalatih where Usia = 2 and Seleksi = 'Tidak Diterima'");
	$u2td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Usia) as u3d from datalatih where Usia = 3 and Seleksi = 'Diterima'");
	$u3d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Usia) as u3td from datalatih where Usia = 3 and Seleksi = 'Tidak Diterima'");
	$u3td = mysqli_fetch_array($query);

	//Pengalaman
	$query = mysqli_query($conn, "select count(Pengalaman) as p1d from datalatih where Pengalaman = 1 and Seleksi = 'Diterima'");
	$p1d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pengalaman) as p1td from datalatih where Pengalaman = 1 and Seleksi = 'Tidak Diterima'");
	$p1td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Pengalaman) as p2d from datalatih where Pengalaman = 2 and Seleksi = 'Diterima'");
	$p2d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pengalaman) as p2td from datalatih where Pengalaman = 2 and Seleksi = 'Tidak Diterima'");
	$p2td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Pengalaman) as p3d from datalatih where Pengalaman = 3 and Seleksi = 'Diterima'");
	$p3d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pengalaman) as p3td from datalatih where Pengalaman = 3 and Seleksi = 'Tidak Diterima'");
	$p3td = mysqli_fetch_array($query);

	//Pendidikan
	$query = mysqli_query($conn, "select count(Pendidikan) as pd1d from datalatih where Pendidikan = 'Sarjana Teknil Sipil' and Seleksi = 'Diterima'");
	$pd1d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pendidikan) as pd1td from datalatih where Pendidikan = 'Sarjana Teknil Sipil' and Seleksi = 'Tidak Diterima'");
	$pd1td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Pendidikan) as pd2d from datalatih where Pendidikan = 'D3 Teknik Sipil' and Seleksi = 'Diterima'");
	$pd2d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pendidikan) as pd2td from datalatih where Pendidikan = 'D3 Teknik Sipil' and Seleksi = 'Tidak Diterima'");
	$pd2td = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(Pendidikan) as pd3d from datalatih where Pendidikan = 'SMK' and Seleksi = 'Diterima'");
	$pd3d = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(Pendidikan) as pd3td from datalatih where Pendidikan = 'SMK' and Seleksi = 'Tidak Diterima'");
	$pd3td = mysqli_fetch_array($query);

	//Tes Wawancara
	$query = mysqli_query($conn, "select count(TesWawancara) as twad from datalatih where TesWawancara = 'A' and Seleksi = 'Diterima'");
	$twad = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesWawancara) as twatd from datalatih where TesWawancara = 'A' and Seleksi = 'Tidak Diterima'");
	$twatd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesWawancara) as twbd from datalatih where TesWawancara = 'B' and Seleksi = 'Diterima'");
	$twbd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesWawancara) as twbtd from datalatih where TesWawancara = 'B' and Seleksi = 'Tidak Diterima'");
	$twbtd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesWawancara) as twcd from datalatih where TesWawancara = 'C' and Seleksi = 'Diterima'");
	$twcd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesWawancara) as twctd from datalatih where TesWawancara = 'C' and Seleksi = 'Tidak Diterima'");
	$twctd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesWawancara) as twdd from datalatih where TesWawancara = 'D' and Seleksi = 'Diterima'");
	$twdd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesWawancara) as twdtd from datalatih where TesWawancara = 'D' and Seleksi = 'Tidak Diterima'");
	$twdtd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesWawancara) as twed from datalatih where TesWawancara = 'E' and Seleksi = 'Diterima'");
	$twed = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesWawancara) as twetd from datalatih where TesWawancara = 'E' and Seleksi = 'Tidak Diterima'");
	$twetd = mysqli_fetch_array($query);

	//Tes Kemampuan
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmad from datalatih where TesKemampuan = 'A' and Seleksi = 'Diterima'");
	$tkmad = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmatd from datalatih where TesKemampuan = 'A' and Seleksi = 'Tidak Diterima'");
	$tkmatd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmbd from datalatih where TesKemampuan = 'B' and Seleksi = 'Diterima'");
	$tkmbd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmbtd from datalatih where TesKemampuan = 'B' and Seleksi = 'Tidak Diterima'");
	$tkmbtd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmcd from datalatih where TesKemampuan = 'C' and Seleksi = 'Diterima'");
	$tkmcd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmctd from datalatih where TesKemampuan = 'C' and Seleksi = 'Tidak Diterima'");
	$tkmctd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmdd from datalatih where TesKemampuan = 'D' and Seleksi = 'Diterima'");
	$tkmdd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmdtd from datalatih where TesKemampuan = 'D' and Seleksi = 'Tidak Diterima'");
	$tkmdtd = mysqli_fetch_array($query);

	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmed from datalatih where TesKemampuan = 'E' and Seleksi = 'Diterima'");
	$tkmed = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKemampuan) as tkmetd from datalatih where TesKemampuan = 'E' and Seleksi = 'Tidak Diterima'");
	$tkmetd = mysqli_fetch_array($query);

	//Tes Kesehatan
	$query = mysqli_query($conn, "select count(TesKesehatan) as tksd from datalatih where TesKesehatan = 'Sehat' and Seleksi = 'Diterima'");
	$tksd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKesehatan) as tkstd from datalatih where TesKesehatan = 'Sehat' and Seleksi = 'Tidak Diterima'");
	$tkstd = mysqli_fetch_array($query);
	
	$query = mysqli_query($conn, "select count(TesKesehatan) as tktsd from datalatih where TesKesehatan = 'Tidak Sehat' and Seleksi = 'Diterima'");
	$tktsd = mysqli_fetch_array($query);
	$query = mysqli_query($conn, "select count(TesKesehatan) as tktstd from datalatih where TesKesehatan = 'Tidak Sehat' and Seleksi = 'Tidak Diterima'");
	$tktstd = mysqli_fetch_array($query);

	//Jenis Kelamin
	$ld = $ld['ld'] / $sd['sd'];
	$ltd = $ltd['ltd'] / $std['std'];

	$pd = $pd['pd'] / $sd['sd'];
	$ptd = $ptd['ptd'] / $std['std'];

	//Usia
	$u1d = $u1d['u1d'] / $sd['sd'];
	$u1td = ($u1td['u1td']+1) / ($std['std']+3);

	$u2d = $u2d['u2d'] / $sd['sd'];
	$u2td = ($u2td['u2td']+1) / ($std['std']+3);

	$u3d = $u3d['u3d'] / $sd['sd'];
	$u3td = ($u3td['u3td']+1) / ($std['std']+3);

	//Pengalaman
	$p1d = $p1d['p1d'] / $sd['sd'];
	$p1td = $p1td['p1td'] / $std['std'];

	$p2d = $p2d['p2d'] / $sd['sd'];
	$p2td = $p2td['p2td'] / $std['std'];

	$p3d = $p3d['p3d'] / $sd['sd'];
	$p3td = $p3td['p3td'] / $std['std'];

	//Pendidikan
	$pd1d = $pd1d['pd1d'] / $sd['sd'];
	$pd1td = $pd1td['pd1td'] / $std['std'];

	$pd2d = $pd2d['pd2d'] / $sd['sd'];
	$pd2td = $pd2td['pd2td'] / $std['std'];

	$pd3d = $pd3d['pd3d'] / $sd['sd'];
	$pd3td = $pd3td['pd3td'] / $std['std'];

	//Tes Wawancara
	$twad = ($twad['twad']+1) / ($sd['sd']+5);
	$twatd = ($twatd['twatd']+1) / ($std['std']+5);

	$twbd = ($twbd['twbd']+1) / ($sd['sd']+5);
	$twbtd = ($twbtd['twbtd']+1) / ($std['std']+5);

	$twcd = ($twcd['twcd']+1) / ($sd['sd']+5);
	$twctd = ($twctd['twctd']+1) / ($std['std']+5);

	$twdd = ($twdd['twdd']+1) / ($sd['sd']+5);
	$twdtd = ($twdtd['twdtd']+1) / ($std['std']+5);

	$twed = ($twed['twed']+1) / ($sd['sd']+5);
	$twetd = ($twetd['twetd']+1) / ($std['std']+5);

	//Tes Kemampuan
	$tkmad = ($tkmad['tkmad']+1) / ($sd['sd']+5);
	$tkmatd = ($tkmatd['tkmatd']+1) / ($std['std']+5);

	$tkmbd = ($tkmbd['tkmbd']+1) / ($sd['sd']+5);
	$tkmbtd = ($tkmbtd['tkmbtd']+1) / ($std['std']+5);

	$tkmcd = ($tkmcd['tkmcd']+1) / ($sd['sd']+5);
	$tkmctd = ($tkmctd['tkmctd']+1) / ($std['std']+5);

	$tkmdd = ($tkmdd['tkmdd']+1) / ($sd['sd']+5);
	$tkmdtd = ($tkmdtd['tkmdtd']+1) / ($std['std']+5);

	$tkmed = ($tkmed['tkmed']+1) / ($sd['sd']+5);
	$tkmetd = ($tkmetd['tkmetd']+1) / ($std['std']+5);

	//Tes Kesehatan
	$tksd = $tksd['tksd'] / $sd['sd'];
	$tkstd = $tkstd['tkstd'] / $std['std'];
	
	$tktsd = $tktsd['tktsd'] / $sd['sd'];
	$tktstd = $tktstd['tktstd'] / $std['std'];

	$query = mysqli_query($conn, "select *from datauji");

	while($dtuji = mysqli_fetch_array($query)){
		$pby = 0;
		$pbn = 0;

		if ($dtuji['Jk'] == 'L') {
			$pby += $ld;
			$pbn += $ltd;
		}else{
			$pby += $pd;
			$pbn += $ptd;
		}

		if ($dtuji['Usia'] == 1) {
			$pby = $pby * $u1d;
			$pbn = $pbn * $u1td;
		}else if ($dtuji['Usia'] == 2) {
			$pby = $pby * $u2d;
			$pbn = $pbn * $u2td;
		}else{
			$pby = $pby * $u3d;
			$pbn = $pbn * $u3td;
		}

		if ($dtuji['Pengalaman'] == 1) {
			$pby = $pby * $p1d;
			$pbn = $pbn * $p1td;
		}else if ($dtuji['Pengalaman'] == 2) {
			$pby = $pby * $p2d;
			$pbn = $pbn * $p2td;
		}else{
			$pby = $pby * $p3d;
			$pbn = $pbn * $p3td;
		}

		if ($dtuji['Pendidikan'] == "Sarjana Teknik Sipil") {
			$pby = $pby * $pd1d;
			$pbn = $pbn * $pd1td;
		}else if ($dtuji['Pendidikan'] == "D3 Teknik Sipil") {
			$pby = $pby * $pd2d;
			$pbn = $pbn * $pd2td;
		}else{
			$pby = $pby * $pd3d;
			$pbn = $pbn * $pd3td;
		}

		if ($dtuji['TesWawancara'] == 'A') {
			$pby = $pby * $twad;
			$pbn = $pbn * $twatd;
		}else if ($dtuji['TesWawancara'] == 'B') {
			$pby = $pby * $twbd;
			$pbn = $pbn * $twbtd;
		}else if ($dtuji['TesWawancara'] == 'C') {
			$pby = $pby * $twcd;
			$pbn = $pbn * $twctd;
		}else if ($dtuji['TesWawancara'] == 'D') {
			$pby = $pby * $twdd;
			$pbn = $pbn * $twdtd;
		}else if ($dtuji['TesWawancara'] == 'E') {
			$pby = $pby * $twed;
			$pbn = $pbn * $twetd;
		}
		
		if ($dtuji['TesKemampuan'] == 'A') {
			$pby = $pby * $tkmad;
			$pbn = $pbn * $tkmatd;
		}else if ($dtuji['TesKemampuan'] == 'B') {
			$pby = $pby * $tkmbd;
			$pbn = $pbn * $tkmbtd;
		}else if ($dtuji['TesKemampuan'] == 'C') {
			$pby = $pby * $tkmcd;
			$pbn = $pbn * $tkmctd;
		}else if ($dtuji['TesKemampuan'] == 'D') {
			$pby = $pby * $tkmdd;
			$pbn = $pbn * $tkmdtd;
		}else if ($dtuji['TesKemampuan'] == 'E') {
			$pby = $pby * $tkmed;
			$pbn = $pbn * $tkmetd;
		}

		if ($dtuji['TesKesehatan'] == 'Sehat') {
			$pby = $pby * $tksd;
			$pbn = $pbn * $tkstd;
		}else {
			$pby = $pby * $tktsd;
			$pbn = $pbn * $tktstd;
		}

		$pby = $pby * $sd['sd'];
		$pbn = $pbn * $std['std'];

		if ($pby > $pbn) {
			mysqli_query($conn, "update datauji set Prediksi = 'Diterima' where IdPelamar = '".$dtuji['IdPelamar']."'");
		}else{
			mysqli_query($conn, "update datauji set Prediksi = 'Tidak Diterima' where IdPelamar = '".$dtuji['IdPelamar']."'");
		}

		if ($dtuji['Prediksi'] == $dtuji['Seleksi']) {
			mysqli_query($conn, "update datauji set Koreksi = 'Benar' where IdPelamar = '".$dtuji['IdPelamar']."'");
		}else {
			mysqli_query($conn, "update datauji set Koreksi = 'Salah' where IdPelamar = '".$dtuji['IdPelamar']."'");
		}
	}

	//mengembalikan ke halaman sebelumnya untuk menampilkan hasil
	header("location:Bayes.php");

?>