<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Array 1 Dimensi</title>
</head>

<body>
    <?php
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];
    echo "Daftar Buah :<br>";
//  perulangan menggunakan <icount[array] supaya jika kita menambahkan value baru [buah], program tetap akan menprint di layar
    for ($i=0; $i<count($buah); $i++) {
// hasil print daftar buah dan penomoran buah.
    echo ($i+1) . ". " . $buah[$i] . "<br>";
}?>

</body>
</html>