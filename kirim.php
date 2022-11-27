<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim-WHY Website</title>
</head>
<body bgcolor="hotpink">
    <br>
    <hr size="3" color="white">
    <!-- Navbar -->
    <font face="verdana" color="white" size="5">
        |<a href="home.html"><font face="verdana" color="steelblue" size="5"> Home </font>
        <font color="white">|</font>
        <a href="content.html"><font face="verdana" color="steelblue" size="5"> Content </font></a>|
        <a href="profil.html"><font face="verdana" color="steelblue" size="5"> Profil </font></a>|
        <a href="feedback.html"><font face="verdana" color="steelblue" size="5"> Feedback </font></a>|
    </font>
    <hr size="3" color="white">

    <!-- Header -->
    <center>
    <br>
    <font face="fantasy" color="chartreuse" size="7">Thank You</font>
    <br><br>
		<?php
		if ( isset ($_POST['kirim'])){
            $nama = $_POST['nm'];
            $nim = $_POST['nim'];
			$birthday = $_POST['birthday'];
			$jk = $_POST['jk'];
			$prodi = $_POST['prodi'];
			$almt = $_POST['almt'];
			$desakel = $_POST['desakel'];
			$kec = $_POST['kec'];
            $kab = $_POST['kab'];
            $prov = $_POST['prov'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];
			
			$hasil_input = array ($nama , $nim, $birthday, $jk, $prodi, $almt, $desakel, $kec, $kab, $prov, $email, $pesan);
			echo "Hasil Inputan : ";
			print_r($hasil_input);
		}
		?>

    <br><br><br><br><br><br><br><br><br><br>

</body>
</html>