<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  width: 40%;
  border: 3px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}
</style>
</head>
<body>

<h2 align="center">Hasil Data</h2>
<table align="center">
    <tr>
        <td>
            <?php
                    $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                    $nama = isset($_GET['namalengkap']) ? $_GET['namalengkap'] : '';
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';
                    $hasil = $nilai_uts*0.3;
                    $hasil_2 = $nilai_uas*0.35;
                    $hasil_3 = $nilai_tugas*0.35;
                    $jumlah = $hasil + $hasil_2 + $hasil_3;

                    if ($jumlah>=55){
                        $nilai = "lulus";
                    }else{
                        $nilai = "Tidak Lulus";
                    }

                    echo "Nama Lengkap : $nama";
                    echo "<br/>Mata Kuliah : $mata_kuliah";
                    echo "<br/>Nilai UTS : $nilai_uts";
                    echo "<br/>Nilai UAS : $nilai_uas";
                    echo "<br/>Nilai Tugas : $nilai_tugas";
                    echo "<br/> Keterangan : $nilai"                         
            ?>
        </td>
    </tr>

</table>

</body>
</html>