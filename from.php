<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht,initial-scale=1.0">
    <title>Hitung Rata Rata Nilai</title>
    <script>
        function hitunganRataRata() {
             let nilai1= parsefloat(document.getElementById('nilai').value) || 0;
             let nilai2= parsefloat(document.getElementById('nilai').value) || 0;
             let nilai3= parsefloat(document.getElementById('nilai').vallue) || 0;

             letrataRata= (nilai1 + nilai2 + nilai3) / 3;
             document.getElementById('rataRata').textcontent = rataRata.toFixed(2);

             let keterangan = "tidak lulus";
             if (rataRata >= 75) {
                keterangan = "lulus";
             }

             let grade = "c";
             if (rataRata >= 85) {
                 grade = "B";
             }
             if (rataRata >= 90) {
                 grade = "A";
             }
             
        }