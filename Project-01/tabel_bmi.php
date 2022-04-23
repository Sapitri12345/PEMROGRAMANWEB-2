<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <?php
        require_once "class_bmiPasien.php";
    ?> 
     <?php
        $dataPasien1 = new BMIPasien("2022-01-10", "P001", "Ahmad", "L", 68.9, 169);
        $dataPasien2 = new BMIPasien("2022-01-10", "P002", "Rina", "P", 55.3, 165);
        $dataPasien3 = new BMIPasien("2022-01-11", "P003", "Lutfi", "L", 45.2, 171);
        $ar_pasien = [$dataPasien1, $dataPasien2, $dataPasien3];

        if(isset($_POST['submit'])){
            $dataPasien4 = new BMIPasien (date('Y-m-d'), $_POST['kode'], $_POST['nama'], $_POST['jk'], $_POST['berat'], $_POST['tinggi']);
            $ar_pasien[] = $dataPasien4;
        }
    
    ?>

    <table class="table" border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Berat (Kg)</th>
                <th>Tinggi (Cm)</th>
                <th>Nilai BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor =1;
            foreach($ar_pasien as $data){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$data->getDate()?></td>
                <td><?=$data->getKode()?></td>
                <td><?=$data->getNama()?></td>
                <td><?=$data->getGender()?></td>
                <td><?=$data->getBerat()?></td>
                <td><?=$data->getTinggi()?></td>
                <td><?=$data->getBMI()?></td>
                <td><?=$data->status()?></td>
            </tr>
        <?php  
        $nomor++;      
            }
        ?>
        </tbody>
    </table>


</body>
</html> 