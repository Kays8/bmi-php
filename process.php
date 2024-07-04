<?php
include "./model/HumanBeing.php";
include "./model/BmiIndexer.php";
include "./model/HealthAnalyzer.php";

// !!
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $height = $_POST['height']?? '';
    $weight = $_POST['weight']?? '';

    $hb = new HumanBeing();
    $hb->setHeight($height);
	$hb->setWeight($weight);
	$hb->calculateBmi();

    echo "BMI : ".$hb->getBmi();
    echo "<br>";
    echo "Result : ".$hb->analyzeBmi();

}
?>
