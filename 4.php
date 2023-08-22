<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam, Menit, Detik</title>
</head>
<body>
    <form method="post" action="">
        <label for="totalDetik">Total Detik:</label>
        <input type="number" id="totalDetik" name="totalDetik" required><br>

        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $totalDetik = (int) $_POST["totalDetik"];

         $jam = floor($totalDetik / 3600);
         $sisaDetik = $totalDetik % 3600;
         $menit = floor($sisaDetik / 60);
         $detik = $sisaDetik % 60;

         echo "Hasil : $jam jam, $menit menit, $detik detik";
     }
    ?>
</body>
</html>