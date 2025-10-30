<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Array 2 Dimensi Associative Array</title>
</head>
<body>
    <?php 
    $nilai = [
        ["nama" => "Jaka", "tugas" => 80, "uts" => 75, "uas" => 85],
        ["nama" => "Sinta", "tugas" => 90, "uts" => 88, "uas" => 92],
        ["nama" => "Budi", "tugas" => 70, "uts" => 65, "uas" => 78]
    ];
    ?>
    
    <?php foreach($nilai as $mhs) : ?>
    Nama: <?=  $mhs["nama"]; ?>  <br> 
    Nilai Tugas: <?= $mhs["tugas"]; ?> <br>
    Nilai UTS: <?= $mhs["uts"]; ?> <br>
    NIlai UAS: <?= $mhs["uas"]; ?><br>
    <?= '<hr style="border-top: 1px dashed black; width: 8%; margin: 10px 0;">';?>
    <?php endforeach; ?>

</body>
</html>