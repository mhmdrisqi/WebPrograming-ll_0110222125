<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="continer">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>nama</th>
                <th>mata kulaih</th>
                <th>tugas</th>
                <th>uts</th>
                <th>uas</th>
                <th>total tilai</th>
            </tr>
            <?php require_once("Proses_nilai.php") ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $tugas; ?></td>
                <td><?= $uts; ?></td>
                <td><?= $uas; ?></td>
                <td><?= $keterangan;?></td>
            </tr>
        </table>
    </div>
</body>
</html>