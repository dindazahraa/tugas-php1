<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>

    <?php
        echo "<h3> Soal No 1</h3>";
        /*
        SOAL NO 1
        Tunjukan dengan menggunakan echo berapa panjang dari
        string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam
        kalimat tersebut!
        Contoh:
        $string = "PHP is never old";
        Output:
        Panjang string: 16,
        Jumlah kata: 4
        */
        echo "<p>PHP is never old</p>";
        $s="PHP is never old";
        echo("Panjang string : ".strlen($s)."</br>");
        echo("Jumlah kata : ".str_word_count($s)."</br>");

        echo "<p>Hello PHP!</p>";
        $s="Hello PHP!";
        echo("Panjang string : ".strlen($s)."</br>");
        echo("Jumlah kata : ".str_word_count($s)."</br>");

        echo "<p>I'm ready for the challenges</p>";
        $s="I'm ready for the challenges";
        echo("Panjang string : ".strlen($s)."</br>");
        echo("Jumlah kata : ".str_word_count($s)."</br>");




        echo "<h3> Soal No 2</h3>";
        /*
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada
        di dalamnya.
        */
        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata Pertama: " . substr($string2, 0, 1) . "<br>" ;
        // Lanjutkan di bawah ini
        echo "Kata Kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 6, 7) . "<br>" ;



        echo "<h3> Soal No 3 </h3>";
        /*
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah
        string.
        */
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" <br> ";
        // OUTPUT : "PHP is old but awesome"
        $string4 = "awesome";
        echo "PHP is old but \"$string4\" <br>";
    ?>
</body>
</html>