<!DOCTYPE html>
<html>
<body>

<?php 

$str = "man mockup t shirt mockup man t shirt t shirt t shirt template print mockup clothing mockup white t shirt mockup template t shirt print mockup white clothes men clothing white mockup male man print templates clothes white man white template cotton print template white";

$lowerCaseString = strtolower($str);

$str_toa = array_unique(explode(" ", $lowerCaseString));  

echo implode(", ",$str_toa);
 

?>

</body>
</html>
