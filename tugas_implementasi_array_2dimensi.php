<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Array 2 Dimensi</title>
</head>
<body>
    <!-- define array mahasiswa -->
    <?php 
    $mahasiswa = [
        ["Jaka", "22001", "Informatika"],
        ["Sinta", "22002", "Sistem Informasi"],
        ["Budi", "22003", "Teknik Komputer"]
    ];?>

    <h3>Data Mahasiswa</h3>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
            
            <?php
            // looping untuk penomoran
            $no=1;
            foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $mhs[0]; ?></td>
                <td><?php echo $mhs[1]; ?></td>
                <td><?php echo $mhs[2]; ?></td>
            </tr>
            <!-- setelah print kondisi diatas NO akan bertamah 1 -->
            <?php $no++; } ?>
    </table>

</body>
</html>