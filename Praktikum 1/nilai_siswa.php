<?php
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilaiuts'];
$nilai_uas = $_GET['nilaiuas'];
$nilai_tugas = $_GET['nilaitugas'];
?>
<center><h1>Data Nilai Mahasiswa</h1>

<table border="1">
    <thead>
        <strong><tr>
            <td>No</td><td>Nama</td><td>NIM</td><td>Mata Kuliah</td>
            <td>Nilai UTS</td><td>Nilai UAS</td><td>Nilai Praktikum</td><td>Nilai Rata-Rata</td>
        </tr></strong>
    </thead>
    <tbody>
    <?php
    $nomor=1;
    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas)/3 ;
     echo '<tr><td>'.$nomor.'</td>';
     echo '<td>'.$nama.'</td>';
     echo '<td>'.$nim.'</td>';
     echo '<td>'.$matkul.'</td>';
     echo '<td>'.$nilai_uts.'</td>';
     echo '<td>'.$nilai_uas.'</td>';
     echo '<td>'.$nilai_tugas.'</td>';
     echo '<td>'.$nilai_akhir.'</td>';
     echo '<tr/>'
        
    ?>
    </tbody>
</table>
<a href="form_nilai.php"><input type="button" value="Isi Form"></a></center>