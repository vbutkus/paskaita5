<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../main.css">
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<!--Masyvai-->
<?php


$seimos_nariai = array("mama", "papa", "baba", "dada", "augu");
print_r($seimos_nariai);
echo "<br>". "<br>";

if(in_array("mama",$seimos_nariai)) {
    echo "sweet";
}
else {
    echo "sad";

}
echo "<br>";

//unset($seimos_nariai[2]);

echo (isset($seimos_nariai[2]))? "Yay":"oh no";

echo "<br>";

echo join(' ', $seimos_nariai);
echo "<br>";
echo "<br>";

sort($seimos_nariai);

echo '<li>';
echo join('<li>', $seimos_nariai);

echo "<br>";
echo "<br>";

$savaites_dienos = array("pirmadienis", "antradienis", "treciadienis",
    "ketvirtadienis", "penktadienis", "sestadienis", "sekmadienis");

$savaite = ['pirmadienis' => ':((',
    'antradienis' => ':(',
    'treciadienis' => ':|',
    'ketvirtadienis' => ':)',
    'penktadienis' => ':))'];

foreach ($savaite as $diena => $nuotaika) {
    echo $diena. " - ". $nuotaika. '<br>';
}

?>

</body>
</html>