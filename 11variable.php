<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Belajar PHP</h1>

    <?php
    print "<h1> StudentDay";
    print '<h1> StudentDay';

    //belajar variabel
     $nama = "kevin";
     $angka1 = 25;
     $angka2 = 29.25;

     define("PI", 22/7);

     print "nama saya $nama<br>";
     echo 'nama saya $nama ' .  $nama;
     echo "<hr>";

     $nama = "kevin";
     echo $nama;
     echo "<br>";
     echo PI;
     define("pi", 3.14);
     echo "<br>";
     echo pi;

    ?>

</body>
</html>