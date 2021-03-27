<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Array</title>
    </head>
    <body>
        <h1>Berlatih Array</h1>


        <?php
            echo "<h3> Soal 1 </h3>";
            /*
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
            Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
            */
            $kids= ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
            $adults= ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
            print_r($kids);
            echo "<br>";
            print_r($adults);




            echo "<h3> Soal 2</h3>";
            /*
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi
            dari masing-masing Array.
            */
            $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
            print_r($kids);
            echo "<br>";
            $jumlah_kids = count( $kids );
            echo $jumlah_kids;
            
            echo "<br>";
            $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
            print_r($adults);
            echo "<br>";
            $jumlah_adults = count( $adults );
            echo $jumlah_adults;




            echo "<h3> Soal 3</h3>";
            /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array
            (Array Multidimensi)
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            */
            $siswa1 = array(
                    "Name" => "Will Byers",
                    "Age" => "12",
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"
                    );
                    print_r($siswa1);
                    echo "<br>";
            $siswa2 = array(
                    "Name" => "Mike Wheeler",
                    "Age" => "12",
                    "Aliases" => "Dungeon Master",
                    "Status" => "Alive"
                    );
                    print_r($siswa2);
                    echo "<br>";
            $siswa3 = array(
                    "Name" => "Jim Hopper",
                    "Age" => "43",
                    "Aliases" => "Chief Hopper",
                    "Status" => "Deceased"
                    );
                    print_r($siswa3);
                    echo "<br>";
            $siswa3 = array(
                    "Name" => "Eleven",
                    "Age" => "12",
                    "Aliases" => "El",
                    "Status" => "Alive"
                    );
                    print_r($siswa3);
        ?>
    </body>
</html>